<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index() {
		$this -> display('index');
	}

	public function logout() {
		session('MEMBER_ID', null);
		session('MEMBER_NAME', null);
		session('MEMBER_ROLE', null);
		$this -> index();
	}

	public function login($account, $pwd) {
		$MemberBaseinfo = M('MemberBaseinfo');
		$where['account'] = $account;
		$row = $MemberBaseinfo -> where($where) -> find();
		if ($row == null) {
			$this -> error("用户不存在");
		} else {
			if ($row['pwd'] != $pwd) {
				$this -> error("用户名密码错误");
			} else {
				//设置session
				session('MEMBER_ID', $row['member_uuid']);
				session('MEMBER_NAME', $row['real_name']);
				session('MEMBER_ROLE', $row['role']);
				$this -> success("登录成功", "../Index/index");
			}
		}
	}

	public function saveChangePWD() {
		CK();
		$MemberBaseinfo = M('MemberBaseinfo');
		$where['member_uuid'] = session('MEMBER_ID');
		$row = $MemberBaseinfo -> where($where) -> find();
		if ($row == null) {
			$this -> error("用户不存在");
		} else {
			if ($row['pwd'] != $_REQUEST['old_pwd']) {
				$this -> error("原密码错误");
			} else {
				$data['pwd'] = $_REQUEST['new_pwd'];
				$MemberBaseinfo -> where($where) -> save($data);
				$this -> success("新密码保存成功", "../Index/index");
			}
		}
	}

}
