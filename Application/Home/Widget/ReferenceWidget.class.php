<?php
namespace Home\Widget;
use Think\Controller;
class ReferenceWidget extends Controller {
	
	/**
	 * 推荐人下拉列表选项组件
	 */
	public function options() {
		$ReferenceBaseinfo = M('ReferenceBaseinfo');
		$where['state'] = array('neq', '已删除');
		$rows = $ReferenceBaseinfo -> where($where) -> select();
		if ($rows == null) {
			$rows = array();
		}
		foreach ($rows as $row) {
			echo '<option value="'. $row['identifier'] .'">'. $row['name'] .'</option>';
		}
		
	}

}
