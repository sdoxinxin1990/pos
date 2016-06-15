<?php
namespace Home\Controller;
use Think\Controller;
class SNController extends Controller {
	public function index() {
		CK();
		$this -> assign('mbRole', session('MEMBER_ROLE'));
		$this -> assign('mbID', session('MEMBER_ID'));
		$this -> display('index');
	}

	public function import() {
		CK();
		$this -> display('import');
	}

	public function reader($filePath) {
		$file = fopen($filePath, 'r');
		while ($data = fgetcsv($file)) {//每次读取CSV里面的一行内容
			//print_r($data); //此为一个数组，要获得每一个数据，访问数组下标即可
			$list[] = $data;
		}
		fclose($file);
		foreach ($list as $r) {
			$nr = array();
			foreach ($r as $str) {
				//gbk转utf8
				$nr[] = iconv('GB2312', 'UTF-8', $str);
			}
			$rows[] = $nr;
		}
		return $rows;
	}

	public function saveImport() {
		CK();
		$upload = new \Think\Upload();
		// 实例化上传类
		$upload -> maxSize = 3145728;
		// 设置附件上传大小
		$upload -> exts = array('csv');
		// 设置附件上传类型
		$upload -> rootPath = './Uploads/';
		// 设置附件上传根目录
		$upload -> savePath = '';
		// 设置附件上传（子）目录
		// 上传文件
		$info = $upload -> upload();
		if (!$info) {// 上传错误提示错误信息
			$this -> error($upload -> getError());
		} else {// 上传成功 获取上传文件信息
			foreach ($info as $file) {
				//				echo $file['savepath'] . $file['savename'] . '^^^Key:" . $file['key'] . "<br >";
				$filePath = $file['savepath'] . $file['savename'];
			}
		}
		$filePath = $_SERVER['DOCUMENT_ROOT'] . __ROOT__ . "/Uploads/" . $filePath;
		//		echo $filePath;
		$rows = $this -> reader($filePath);
		$SnBaseinfo = M('SnBaseinfo');
		for ($i = 1; $i < count($rows); $i++) {
			$data = array();
			$data['sn_id'] = $rows[$i][0];
			$data['sn_model'] = $rows[$i][1];
			$data['sn_type'] = $rows[$i][2];
			$result = FALSE;
			$result = $SnBaseinfo -> add($data);
			if (!$result)
				$err_id[] = $rows[$i][0];
		}

		if (count($err_id) > 0) {
			$err_id_str = json_encode($err_id);
			$this -> success('导入成功，部分失败，原因SN号已存在：' . $err_id_str, 'index', 10);
		} else {
			$this -> success('批量导入成功', 'index');
		}
	}

	public function getList() {
		CK();
		$SnBaseinfo = M('SnBaseinfo');
		$rows = $SnBaseinfo -> join('bank_merchant_pos_baseinfo ON bank_sn_baseinfo.sn_id = bank_merchant_pos_baseinfo.sn_number', 'LEFT ') -> join('bank_merchant_baseinfo ON bank_merchant_pos_baseinfo.merchant_uuid = bank_merchant_baseinfo.uuid', 'LEFT ') -> select();
		if ($rows == null) {
			$rows = array();
		}
		echo json_encode($rows);
	}

	public function delete($snID) {
		CK();
		$SnBaseinfo = M('SnBaseinfo');
		$where['sn_id'] = $snID;
		$SnBaseinfo -> where($where) -> delete();
		$this -> success('删除成功', 'index');
	}

	public function check($kw) {
		CK();
		$SnBaseinfo = M('SnBaseinfo');
		$msg['data'] = "";
		//		$msg['available'] = FALSE;
		$where1['sn_id'] = $kw;
		$where2['bank_sn_baseinfo.sn_id'] = $kw;
		$isFind = $SnBaseinfo -> where($where1) -> count();
		$sn_model = $SnBaseinfo -> where($where1) -> getField('sn_model');
		if ($isFind == 1) {
			$row = $SnBaseinfo -> join('bank_merchant_pos_baseinfo ON bank_sn_baseinfo.sn_id = bank_merchant_pos_baseinfo.sn_number') -> where($where2) -> find();
			if ($row == null) {
				$msg['msg'] = '可用';
				$msg['data'] = $sn_model;
			} else {
				$msg['msg'] = '不可用';
			}
		} else {
			$msg['msg'] = '未找到';
		}
		echo json_encode($msg);
	}

}
