<?php
namespace Home\Controller;
use Think\Controller;
class MemberController extends Controller {
	public function index() {
		CK();
		$this -> display();
	}

	public function getList() {
		CK();
		$MemberBaseinfo = M('MemberBaseinfo');
		$where['member_status'] = array('neq', '已删除');
		$rows = $MemberBaseinfo -> where($where) -> select();
		if ($rows == null) {
			$rows = array();
		}
		echo json_encode($rows);
	}

	public function showDetail($op) {
		CK();
		switch ($op) {
			case 'add' :
				session('memberUUID', null);
				$this -> assign('op', '新建');
				$this -> display('detail');
				break;
			case 'edit' :
				session('memberUUID', $_GET['member_uuid']);
				$MemberBaseinfo = M('MemberBaseinfo');
				$where['member_uuid'] = $_GET['member_uuid'];
				$data = $MemberBaseinfo -> where($where) -> find();
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
		$MemberBaseinfo = M('MemberBaseinfo');
		if (session('?memberUUID')) {
			//编辑
			$where['member_uuid'] = session('memberUUID');
			$MemberBaseinfo -> where($where) -> save($data);
			$this -> success('编辑成功', 'index');
		} else {
			//新增
			$data['member_uuid'] = guid();
			$result = ($MemberBaseinfo -> add($data));
			if ($result == TRUE) {
				//			var_dump($data);exit;
				$this -> success('保存成功', 'index');
			} else {
				$this -> error('保存失败');
			}
		}
	}

	public function disable($member_uuid) {
		CK();
		$MemberBaseinfo = M('MemberBaseinfo');
		$where['member_uuid'] = $member_uuid;
		$data['member_status'] = '停用';
		$MemberBaseinfo -> where($where) -> save($data);
		$this -> success('更新成功', 'index');
	}

	public function enable($member_uuid) {
		CK();
		$MemberBaseinfo = M('MemberBaseinfo');
		$where['member_uuid'] = $member_uuid;
		$data['member_status'] = '启用';
		$MemberBaseinfo -> where($where) -> save($data);
		$this -> success('更新成功', 'index');
	}
	
	public function delete($member_uuid) {
		CK();
		$MemberBaseinfo = M('MemberBaseinfo');
		$where['member_uuid'] = $member_uuid;
		$data['member_status'] = '已删除';
		$MemberBaseinfo -> where($where) -> save($data);
		$this -> success('删除成功', 'index');
	}

}
