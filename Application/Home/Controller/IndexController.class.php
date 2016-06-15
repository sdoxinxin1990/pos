<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index() {
		CK();
		$this -> assign('role', session('MEMBER_ROLE'));
		$this -> assign('name', session('MEMBER_NAME'));
		if (session('MEMBER_ROLE') != "经理") {
			$this -> assign('hidden', 'hidden');
		}
		$this -> display();
	}

}
