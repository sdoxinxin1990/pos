<?php
namespace Home\Controller;
use Think\Controller;
class SIMController extends Controller {
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
		$SimBaseinfo = M('SimBaseinfo');
		for ($i = 1; $i < count($rows); $i++) {
			$data = array();
			$data['sim_id'] = str_replace(';', '', $rows[$i][0]);
			$data['sim_serial_number'] = str_replace(';', '', $rows[$i][1]);
			$data['sim_brand'] = $rows[$i][2];
			$data['sim_type'] = $rows[$i][3];
			$result = FALSE;
			$result = $SimBaseinfo -> add($data);
			if (!$result)
				$err_id[] = $rows[$i][0];
		}

		if (count($err_id) > 0) {
			$err_id_str = json_encode($err_id);
			$this -> success('导入成功，部分失败，原因simID已存在：' . $err_id_str, 'index', 10);
		} else {
			$this -> success('批量导入成功', 'index');
		}
	}

	public function getList() {
		CK();
		$SimBaseinfo = M('SimBaseinfo');
		$rows = $SimBaseinfo -> join('bank_merchant_pos_baseinfo ON bank_sim_baseinfo.sim_serial_number = bank_merchant_pos_baseinfo.sim_number', 'LEFT ') -> join('bank_merchant_baseinfo ON bank_merchant_pos_baseinfo.merchant_uuid = bank_merchant_baseinfo.uuid', 'LEFT ') -> select();
		if ($rows == null) {
			$rows = array();
		}
		echo json_encode($rows);
	}

	public function delete($simID) {
		CK();
		$SimBaseinfo = M('SimBaseinfo');
		$where['sim_id'] = $simID;
		$SimBaseinfo -> where($where) -> delete();
		$this -> success('删除成功', 'index');
	}

	public function check($kw) {
		CK();
		$SimBaseinfo = M('SimBaseinfo');
		//		$msg['available'] = FALSE;
		$where1['sim_serial_number'] = $kw;
		$where2['bank_sim_baseinfo.sim_serial_number'] = $kw;
		$isFind = $SimBaseinfo -> where($where1) -> count();
		if ($isFind == 1) {
			$row = $SimBaseinfo -> join('bank_merchant_pos_baseinfo ON bank_sim_baseinfo.sim_serial_number = bank_merchant_pos_baseinfo.sim_number') -> where($where2) -> find();
			if ($row == null) {
				$msg['msg'] = '可用';
			} else {
				$msg['msg'] = '不可用';
			}
		} else {
			$msg['msg'] = '未找到';
		}
		echo json_encode($msg);
	}

}
