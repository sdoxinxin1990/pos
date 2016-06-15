<?php
namespace Home\Controller;
use Think\Controller;
class ReferenceController extends Controller {
	public function index() {
		CK();
		$this -> display();
	}

	public function getList() {
		CK();
		$ReferenceBaseinfo = M('ReferenceBaseinfo');
		$where['state'] = array('neq', '已删除');
		$rows = $ReferenceBaseinfo -> where($where) -> select();
		if ($rows == null) {
			$rows = array();
		}
		echo json_encode($rows);
	}

	public function showDetail($op) {
		CK();
		switch ($op) {
			case 'add' :
				session('identifier', null);
				$this -> assign('op', '新建');
				$this -> display('detail');
				break;
			case 'show' :
				$ReferenceBaseinfo = M('ReferenceBaseinfo');
				$where['identifier'] = $_GET['identifier'];
				$data = $ReferenceBaseinfo -> where($where) -> find();
				$this -> assign('op', '查看');
				$this -> assign('hidden', 'hidden');
				$this -> assign('data', $data);
				$this -> display('detail');
				break;
			case 'edit' :
				session('identifier', $_GET['identifier']);
				$ReferenceBaseinfo = M('ReferenceBaseinfo');
				$where['identifier'] = $_GET['identifier'];
				$data = $ReferenceBaseinfo -> where($where) -> find();
				$this -> assign('op', '编辑');
				$this -> assign('data', $data);
				$this -> display('detail');
				break;
			default :
				break;
		}
	}

	public function save() {
		CK();
		$data = $_REQUEST;
		$ReferenceBaseinfo = M('ReferenceBaseinfo');
		if (session('?identifier')) {
			//编辑
			$where['identifier'] = session('identifier');
			$ReferenceBaseinfo -> where($where) -> save($data);
			$this -> success('编辑成功', 'index');
		} else {
			//新增
			$data['identifier'] = 'TJR' . date('YmdHis') . rand(1000, 9999);
			$result = ($ReferenceBaseinfo -> add($data));
			if ($result == TRUE) {
				//			var_dump($data);exit;
				$this -> success('保存成功', 'index');
			} else {
				$this -> error('保存失败');
			}
		}
	}

	public function delete($identifier) {
		CK();
		$ReferenceBaseinfo = M('ReferenceBaseinfo');
		$data['state'] = '已删除';
		$where['identifier'] = $identifier;
		$ReferenceBaseinfo -> where($where) -> save($data);
		$this -> success('删除成功', 'index');
	}

}
