<?php
namespace Home\Controller;
use Think\Controller;
class TodoController extends Controller {
	public function index() {
		CK();
		$this -> display();
	}

}
