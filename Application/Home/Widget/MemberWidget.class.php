<?php
namespace Home\Widget;
use Think\Controller;
class MemberWidget extends Controller {
	
	/**
	 * 人员下拉列表选项组件
	 */
	public function options() {
		$MemberBaseinfo = M('MemberBaseinfo');
		$where['member_status'] = '启用';
		$rows = $MemberBaseinfo -> where($where) -> select();
		if ($rows == null) {
			$rows = array();
		}
		foreach ($rows as $row) {
			echo '<option value="'. $row['member_uuid'] .'">'. $row['real_name'] .'</option>';
		}
		
	}

}
