<?php
namespace Home\Controller;
use Think\Controller;
class TodoController extends Controller {
	public function index() {
		CK();
		$TodoBook = M('TodoBook');
		$where['target_member_uuid'] = session('MEMBER_ID');
		$where['target_member_role'] = session('MEMBER_ROLE');
		$where['_logic'] = 'or';
		$map['_complex'] = $where;
		$map['todo_state'] = '待应答';
		$row = $TodoBook -> where($map) -> select();
		//		var_dump(json_encode($row));exit;
		$this -> assign("list", $row);
		$this -> display();
	}

	public function updateIKnow($todoNum) {
		CK();
		$TodoBook = M('TodoBook');
		$where['todo_num'] = $todoNum;
		$data['todo_state'] = '已应答';
		$TodoBook -> where($where) -> save($data);
	}

}
