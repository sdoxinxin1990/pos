<?php
namespace Home\Controller;
use Think\Controller;
class BaseInfoController extends Controller {
	public function index() {
		CK();
		$this -> display();
	}

}
