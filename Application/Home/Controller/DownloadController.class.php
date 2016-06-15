<?php
namespace Home\Controller;
use Think\Controller;
class DownloadController extends Controller {
	public function index() {
		CK();
		$this -> assign('mbRole', session('MEMBER_ROLE'));
		$this -> assign('mbID', session('MEMBER_ID'));
		$this -> display();
	}

	public function showDetail() {
		CK();
		$this -> display('detail');
	}

	public function getList() {
		CK();
		$FileBaseinfo = M('FileBaseinfo');
		$rows = $FileBaseinfo -> select();
		if ($rows == null) {
			$rows = array();
		}
		echo json_encode($rows);
	}

	public function save() {
		CK();
		$data = $_REQUEST;
		$upload = new \Think\Upload();
		// 实例化上传类
		$upload -> maxSize = 3145728;
		// 设置附件上传大小
		$upload -> exts = array('rar', 'zip');
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
				$data['file_url'] = $file['savepath'] . $file['savename'];
			}
		}
		//		echo json_encode($data);
		$FileBaseinfo = M('FileBaseinfo');
		$result = $FileBaseinfo -> add($data);
		if ($result == TRUE) {
			$this -> success('保存成功', 'index');
		} else {
			$this -> error('保存失败');
		}
	}

	public function delete($fileNum) {
		CK();
		$FileBaseinfo = M('FileBaseinfo');
		$FileBaseinfo -> delete($fileNum);
		$this -> success('删除成功', 'index');
	}

}
