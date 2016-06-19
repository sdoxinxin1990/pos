<?php
namespace Home\Controller;
use Think\Controller;
class POSController extends Controller {
	public function index() {
		CK();
		$this -> display('index');
	}

	public function apply() {
		CK();
		$this -> assign('mbRole', session('MEMBER_ROLE'));
		$this -> assign('mbID', session('MEMBER_ID'));
		$this -> display('apply');
	}

	public function repair() {
		CK();
		$this -> assign('mbRole', session('MEMBER_ROLE'));
		$this -> assign('mbID', session('MEMBER_ID'));
		$this -> display('repair');
	}

	public function applyAdd() {
		CK();
		$this -> display('applyAdd');
	}

	public function applyRemove() {
		CK();
		$this -> display('applyRemove');
	}

	public function applyChange() {
		CK();
		$this -> display('applyChange');
	}

	public function applyUnbind() {
		CK();
		$this -> display('applyUnbind');
	}

	public function showLog($merchantUUID) {
		CK();
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$MerchantPosBaseinfo = M('MerchantPosBaseinfo');

		$where['uuid'] = $merchantUUID;
		$data = $MerchantBaseinfo -> join('bank_member_baseinfo ON bank_merchant_baseinfo.maintenance_member_uuid = bank_member_baseinfo.member_uuid') -> where($where) -> find();
		$where2['merchant_uuid'] = $merchantUUID;
		$where2['terminal_type'] = '有线POS';
		$data['wire_pos_num'] = $MerchantPosBaseinfo -> where($where2) -> count();
		$where3['merchant_uuid'] = $merchantUUID;
		$where3['terminal_type'] = '无线POS';
		$data['wireless_pos_num'] = $MerchantPosBaseinfo -> where($where3) -> count();
		$data['pos_num'] = $data['wire_pos_num'] + $data['wireless_pos_num'];

		$where4['merchant_uuid'] = $merchantUUID;
		$where4['terminal_type'] = '有线POS';
		$where4['binding_state'] = '绑定';
		$data['binding_wire_pos_num'] = $MerchantPosBaseinfo -> where($where4) -> count();
		$where5['merchant_uuid'] = $merchantUUID;
		$where5['terminal_type'] = '无线POS';
		$where5['binding_state'] = '绑定';
		$data['binding_wireless_pos_num'] = $MerchantPosBaseinfo -> where($where5) -> count();
		$data['binding_pos_num'] = $data['binding_wire_pos_num'] + $data['binding_wireless_pos_num'];

		$this -> assign('data', $data);
		$this -> display("log");
	}

	public function getOPLogListByMerchantUUID($merchantUUID) {
		CK();
		$PosOperationLog = M('PosOperationLog');
		$where['merchant_uuid'] = $merchantUUID;
		$rows = $PosOperationLog -> where($where) -> select();
		if ($rows == null) {
			$rows = array();
		}
		echo json_encode($rows);
	}

	public function showDetail($merchantUUID) {
		CK();
		$this -> assign('mbRole', session('MEMBER_ROLE'));
		$this -> assign('mbID', session('MEMBER_ID'));
		//		echo $merchantUUID;
		//		exit ;
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$MerchantPosBaseinfo = M('MerchantPosBaseinfo');

		$where['uuid'] = $merchantUUID;
		$data = $MerchantBaseinfo -> join('bank_member_baseinfo ON bank_merchant_baseinfo.maintenance_member_uuid = bank_member_baseinfo.member_uuid') -> where($where) -> find();
		$where2['merchant_uuid'] = $merchantUUID;
		$where2['terminal_type'] = '有线POS';
		$data['wire_pos_num'] = $MerchantPosBaseinfo -> where($where2) -> count();
		$where3['merchant_uuid'] = $merchantUUID;
		$where3['terminal_type'] = '无线POS';
		$data['wireless_pos_num'] = $MerchantPosBaseinfo -> where($where3) -> count();
		$data['pos_num'] = $data['wire_pos_num'] + $data['wireless_pos_num'];

		$where4['merchant_uuid'] = $merchantUUID;
		$where4['terminal_type'] = '有线POS';
		$where4['binding_state'] = '绑定';
		$data['binding_wire_pos_num'] = $MerchantPosBaseinfo -> where($where4) -> count();
		$where5['merchant_uuid'] = $merchantUUID;
		$where5['terminal_type'] = '无线POS';
		$where5['binding_state'] = '绑定';
		$data['binding_wireless_pos_num'] = $MerchantPosBaseinfo -> where($where5) -> count();
		$data['binding_pos_num'] = $data['binding_wire_pos_num'] + $data['binding_wireless_pos_num'];

		$this -> assign('data', $data);
		$this -> display("detail");
	}

	public function getPosListByMerchantUUID($merchantUUID) {
		CK();
		$MerchantPosBaseinfo = M('MerchantPosBaseinfo');
		$where['merchant_uuid'] = $merchantUUID;
		$rows = $MerchantPosBaseinfo -> where($where) -> select();
		if ($rows == null) {
			$rows = array();
		}
		echo json_encode($rows);
	}

	public function saveReport() {
		CK();
		$data = $_REQUEST;
		$data['apply_staff'] = session('MEMBER_ID');
		$data['apply_name'] = session('MEMBER_NAME');
		//		var_dump($data);exit;
		$PosApplyReport = M('PosApplyReport');
		$result = ($PosApplyReport -> add($data));
		if ($result == TRUE) {
			//			var_dump($data);exit;
			//20160618修改，报修通知内勤
			if ($data['apply_type'] == '故障解绑') {
				$MerchantBaseinfo = M('MerchantBaseinfo');
				$where4['uuid'] = $data['merchant_uuid'];
				$row = $MerchantBaseinfo -> where($where4) -> find();
				$data4['todo_contents'] = "商户（" . $row['basic_busi_name'] . "）报修，详情【".$data['apply_describe']."】，请查看~";
				$data4['target_member_role'] = '内勤';
				$data4['creator'] = session('MEMBER_NAME');
				$TodoBook = M('TodoBook');
				$TodoBook -> add($data4);
			}
			$this -> success('保存成功', 'apply');
		} else {
			$this -> error('保存失败');
		}
	}

	public function deleteReport($serialNumber) {
		CK();
		$PosApplyReport = M('PosApplyReport');
		$PosApplyReport -> delete($serialNumber);
		$this -> success('删除成功', 'apply');
	}

	public function saveApproveReport($serialNumber) {
		CK();
		$PosApplyReport = M('PosApplyReport');
		$where['serial_num'] = $serialNumber;
		$data['auditing_staff'] = session('MEMBER_ID');
		$data['auditing_name'] = session('MEMBER_NAME');
		$data['auditing_state'] = '审核通过';
		$data['auditing_time'] = date("Y-m-d H:i:sa");
		$PosApplyReport -> where($where) -> save($data);
		$this -> success('审批完成', 'apply');
	}

	/**
	 * 加载变更申请列表（增机，撤机，类型换机，故障解绑）
	 */
	public function getReportList($applyType) {
		CK();
		$where['apply_type'] = $applyType;
		$PosApplyReport = M('PosApplyReport');
		$rows = $PosApplyReport -> where($where) -> join('bank_merchant_baseinfo ON bank_pos_apply_report.merchant_uuid = bank_merchant_baseinfo.uuid') -> select();
		for ($i = 0; $i < count($rows); $i++) {
			$rows[$i]['add_num'] = $rows[$i]['wire_with_keyboard_num'] + $rows[$i]['wire_without_keyboard_num'] + $rows[$i]['wireless_with_keyboard_num'];
		}
		if ($rows == null) {
			$rows = array();
		}
		echo json_encode($rows);
	}

	public function showReportDetail($serialNum) {
		CK();
		$where['serial_num'] = $serialNum;
		$PosApplyReport = M('PosApplyReport');
		$row = $PosApplyReport -> where($where) -> join('bank_merchant_baseinfo ON bank_pos_apply_report.merchant_uuid = bank_merchant_baseinfo.uuid') -> find();
		//		echo json_encode($row);
		$this -> assign("data", $row);
		$this -> display('applyDetail');
	}

	public function posSearchBySn($keyword) {
		CK();
		$where['sn_number'] = $keyword;
		$MerchantPosBaseinfo = M('MerchantPosBaseinfo');
		$result = array();
		$result['success'] = FALSE;
		$find = $MerchantPosBaseinfo -> where($where) -> count();
		if ($find == 1) {
			$result['success'] = TRUE;
			$row = $MerchantPosBaseinfo -> where($where) -> join('bank_merchant_baseinfo ON bank_merchant_pos_baseinfo.merchant_uuid = bank_merchant_baseinfo.uuid') -> find();
			$result['data'] = $row;
		} else {
			$result['msg'] = '未找到终端信息，请核对填写信息无误后再试。';
		}
		echo json_encode($result);
	}

	public function showOP($op, $posUUID) {
		CK();
		$opName = '';
		$saveMethod = '';
		$MerchantPosBaseinfo = M('MerchantPosBaseinfo');
		$where['pos_uuid'] = $posUUID;
		$data = array();
		switch ($op) {
			case 0 :
				$opName = "装机";
				$data = $MerchantPosBaseinfo -> where($where) -> find();
				$data['terminal_type_hidden'] = 'hidden';
				$saveMethod = 'saveBind';
				break;
			case 1 :
				$opName = "增机";
				$data['merchant_uuid'] = $posUUID;
				$data['pos_uuid'] = guid();
				$saveMethod = 'saveAdd';
				break;
			//			case 2 :
			//				$opName = "撤机";
			//				break;
			case 3 :
				$opName = "类型换机";
				$data = $MerchantPosBaseinfo -> where($where) -> find();
				$saveMethod = 'saveChange';
				break;
			//			case 4 :
			//				$opName = "故障解绑";
			//				break;
			case 5 :
				$opName = "变更";
				$data = $MerchantPosBaseinfo -> where($where) -> find();
				$data['terminal_type_hidden'] = 'hidden';
				$saveMethod = 'saveModify';
				break;
			default :
				break;
		}
		$this -> assign('data', $data);
		$this -> assign('opName', $opName);
		$this -> assign('saveMethod', $saveMethod);
		$this -> display("op");
	}

	public function saveBind() {
		CK();
		$MerchantPosBaseinfo = M('MerchantPosBaseinfo');
		$data = $_REQUEST;
		$where['pos_uuid'] = $data['pos_uuid'];
		$data['binding_state'] = "绑定";
		$data['binding_time'] = date("Y-m-d H:i:sa");
		$data['installed_state'] = "已装机";
		$MerchantPosBaseinfo -> where($where) -> save($data);
		$PosOperationLog = M('PosOperationLog');
		$data2 = $_REQUEST;
		$data2['operation_type'] = "绑定";
		$data2['operator'] = session('MEMBER_NAME');
		$data2['operation_source'] = "POS";
		$data2['available_state'] = "可用";
		$PosOperationLog -> add($data2);
		$MerchantAddReport = M('MerchantAddReport');
		$where3['merchant_uuid'] = $data['merchant_uuid'];
		$data3['install_equipment_state'] = "已装机";
		$MerchantAddReport -> where($where3) -> save($data3);
		//20160618修改，添加待办事项
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$where4['uuid'] = $data['merchant_uuid'];
		$row = $MerchantBaseinfo -> where($where4) -> find();
		$row2 = $MerchantPosBaseinfo -> where($where) -> find();
		$data4['todo_contents'] = "商户（" . $row['basic_busi_name'] . "）完成装机，请提取SN号为（" . $row2['sn_number'] . "）的机器上门安装。";
		$data4['target_member_uuid'] = $row['maintenance_member_uuid'];
		$data4['creator'] = session('MEMBER_NAME');
		$TodoBook = M('TodoBook');
		$TodoBook -> add($data4);
		$this -> success('完成', 'showDetail?merchantUUID=' . $data['merchant_uuid']);
	}

	public function saveAdd() {
		CK();
		$MerchantPosBaseinfo = M('MerchantPosBaseinfo');
		$data = $_REQUEST;
		$where['pos_uuid'] = $data['pos_uuid'];
		$data['binding_state'] = "绑定";
		$data['binding_time'] = date("Y-m-d H:i:sa");
		$data['installed_state'] = "已装机";
		$MerchantPosBaseinfo -> add($data);
		$PosOperationLog = M('PosOperationLog');
		$data2 = $_REQUEST;
		$data2['operation_type'] = "增机";
		$data2['operator'] = session('MEMBER_NAME');
		$data2['operation_source'] = "POS";
		$data2['available_state'] = "可用";
		$PosOperationLog -> add($data2);
		$this -> success('完成', 'showDetail?merchantUUID=' . $data['merchant_uuid']);
	}

	public function saveRemove($posUUID, $merchantUUID) {
		CK();
		$MerchantPosBaseinfo = M('MerchantPosBaseinfo');
		$where['pos_uuid'] = $posUUID;
		$data = $MerchantPosBaseinfo -> where($where) -> find();
		$data2 = $data;
		$data['binding_state'] = "解绑";
		$data['installed_state'] = "不可装机";
		$data['available_type'] = "停用";
		$MerchantPosBaseinfo -> where($where) -> save($data);
		$PosOperationLog = M('PosOperationLog');
		$data2['operation_type'] = "撤机";
		$data2['operator'] = session('MEMBER_NAME');
		$data2['operation_source'] = "POS";
		$data2['available_state'] = "停用";
		$PosOperationLog -> add($data2);
		$MerchantAddReport = M('MerchantAddReport');
		$where3['merchant_uuid'] = $merchantUUID;
		$data3['install_equipment_state'] = "已停用";
		$MerchantAddReport -> where($where3) -> save($data3);
		$this -> success('完成', 'showDetail?merchantUUID=' . $merchantUUID);
	}

	public function saveChange() {
		CK();
		$MerchantPosBaseinfo = M('MerchantPosBaseinfo');
		$data = $_REQUEST;
		$where['pos_uuid'] = $data['pos_uuid'];
		$data['binding_state'] = "绑定";
		$data['binding_time'] = date("Y-m-d H:i:sa");
		$data['installed_state'] = "已装机";
		$MerchantPosBaseinfo -> where($where) -> save($data);
		$PosOperationLog = M('PosOperationLog');
		$data2 = $_REQUEST;
		$data2['operation_type'] = "换机";
		$data2['operator'] = session('MEMBER_NAME');
		$data2['operation_source'] = "POS";
		$data2['available_state'] = "可用";
		$PosOperationLog -> add($data2);
		$this -> success('完成', 'showDetail?merchantUUID=' . $data['merchant_uuid']);
	}

	public function saveUnbind($posUUID, $merchantUUID) {
		CK();
		$MerchantPosBaseinfo = M('MerchantPosBaseinfo');
		$where['pos_uuid'] = $posUUID;
		$data = $MerchantPosBaseinfo -> where($where) -> find();
		$data2 = $data;
		$data['binding_state'] = "解绑";
		$data['installed_state'] = "待装机";
		$data['available_type'] = "正常";
		//20160610
		$data['old_sn_number'] = $data['sn_number'] . '';
		$data['old_sim_number'] = $data['sim_number'] . '';
		$data['sn_number'] = "";
		$data['sim_number'] = "";
		$data['terminal_model'] = "";

		$MerchantPosBaseinfo -> where($where) -> save($data);
		$PosOperationLog = M('PosOperationLog');
		$data2['operation_type'] = "解绑";
		$data2['operator'] = session('MEMBER_NAME');
		$data2['operation_source'] = "POS";
		$data2['available_state'] = "正常";
		$PosOperationLog -> add($data2);
		$this -> success('完成', 'showDetail?merchantUUID=' . $merchantUUID);
	}

	/**
	 * 保存还机
	 */
	public function saveReturn($posUUID, $merchantUUID) {
		$MerchantPosBaseinfo = M('MerchantPosBaseinfo');
		$where['pos_uuid'] = $posUUID;
		$data['old_sn_number'] = '';
		$data['old_sim_number'] = '';
		$MerchantPosBaseinfo -> where($where) -> save($data);
		$this -> success('完成', 'showDetail?merchantUUID=' . $merchantUUID);
	}

	public function saveModify() {
		CK();
		$MerchantPosBaseinfo = M('MerchantPosBaseinfo');
		$data = $_REQUEST;
		$where['pos_uuid'] = $data['pos_uuid'];
		$data['binding_state'] = "绑定";
		$data['binding_time'] = date("Y-m-d H:i:sa");
		$data['installed_state'] = "已装机";
		$MerchantPosBaseinfo -> where($where) -> save($data);
		$PosOperationLog = M('PosOperationLog');
		$data2 = $_REQUEST;
		$data2['operation_type'] = "变更";
		$data2['operator'] = session('MEMBER_NAME');
		$data2['operation_source'] = "POS";
		$data2['available_state'] = "可用";
		$PosOperationLog -> add($data2);
		$this -> success('完成', 'showDetail?merchantUUID=' . $data['merchant_uuid']);
	}

}
