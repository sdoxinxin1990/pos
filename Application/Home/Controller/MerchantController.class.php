<?php
namespace Home\Controller;
use Think\Controller;
class MerchantController extends Controller {
	public function index() {
		CK();
		$this -> assign('mbRole', session('MEMBER_ROLE'));
		$this -> assign('mbID', session('MEMBER_ID'));
		$this -> display('index');
	}

	public function index2() {
		CK();
		$this -> assign('mbRole', session('MEMBER_ROLE'));
		$this -> assign('mbID', session('MEMBER_ID'));
		$this -> display('index2');
	}

	public function result() {
		CK();
		$this -> assign('mbRole', session('MEMBER_ROLE'));
		$this -> assign('mbID', session('MEMBER_ID'));
		$this -> display('result');
	}

	public function modifyContacts($uuid) {
		CK();
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$where['uuid'] = $uuid;
		$data = $MerchantBaseinfo -> join('bank_reference_baseinfo ON bank_merchant_baseinfo.reference_uuid = bank_reference_baseinfo.identifier') -> where($where) -> find();
		//		var_dump($data);exit;
		$this -> assign('data', $data);
		$this -> display('modifyContacts');
	}

	public function saveContacts() {
		CK();
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$where['uuid'] = $_REQUEST['uuid'];
		$data = $_REQUEST;
		$MerchantBaseinfo -> where($where) -> save($data);
		$this -> success("保存成功", 'index2');
	}

	public function modifyClerk($uuid) {
		CK();
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$where['uuid'] = $uuid;
		$data = $MerchantBaseinfo -> join('bank_member_baseinfo ON bank_merchant_baseinfo.maintenance_member_uuid = bank_member_baseinfo.member_uuid') -> join('bank_merchant_add_report ON bank_merchant_baseinfo.uuid  = bank_merchant_add_report.merchant_uuid') -> where($where) -> find();
		//		var_dump($data);exit;
		$this -> assign('data', $data);
		$this -> display('modifyClerk');
	}

	public function saveClerk() {
		CK();
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$where['uuid'] = $_REQUEST['uuid'];
		$data['maintenance_member_uuid'] = $_REQUEST['maintenance_member_uuid'];
		$MerchantBaseinfo -> where($where) -> save($data);
		$this -> success("保存成功", 'index2');
	}

	/**
	 * $uuid 商户内码
	 */
	public function modifyReference($uuid) {
		CK();
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$where['uuid'] = $uuid;
		$data = $MerchantBaseinfo -> join('bank_reference_baseinfo ON bank_merchant_baseinfo.reference_uuid = bank_reference_baseinfo.identifier') -> where($where) -> find();
		//		var_dump($data);exit;
		$this -> assign('data', $data);
		$this -> display('modifyReference');
	}

	public function batchModifyClerk() {
		CK();
		$this -> display('batchModifyClerk');
	}

	public function apply() {
		CK();
		$this -> assign('mbRole', session('MEMBER_ROLE'));
		$this -> assign('mbID', session('MEMBER_ID'));
		$this -> display('apply');
	}

	public function applyChange() {
		CK();
		$this -> display('applyChange');
	}

	public function detail() {
		CK();
		$this -> display('detail');
	}

	public function showAdd($type) {
		CK();
		//设置新增标识
		session('editingSerialNumber', null);
		$this -> assign('type', $type);
		$this -> display("detail");
	}

	public function showDetail($readonly, $serialNumber) {
		CK();
		//判断是否为老板权限变更商户基本信息
		if ($_REQUEST['boss'] == 'boss') {
			//设置老板权限标识
			session('editingByBoss', TRUE);
		} else {
			session('editingByBoss', null);
		}
		$MerchantAddReport = M('MerchantAddReport');
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$MerchantPosBaseinfo = M('MerchantPosBaseinfo');
		$where['serial_number'] = $serialNumber;
		$merchant_uuid = $MerchantAddReport -> where($where) -> getField('merchant_uuid');
		$where2['uuid'] = $merchant_uuid;
		$data = $MerchantBaseinfo -> where($where2) -> find();

		//hmx0529 计算有线和无限pos机台数
		$where3['merchant_uuid'] = $merchant_uuid;
		$where3['terminal_type'] = '有线POS';
		$data['wire_pos_num'] = $MerchantPosBaseinfo -> where($where3) -> count();
		$where4['merchant_uuid'] = $merchant_uuid;
		$where4['terminal_type'] = '无线POS';
		$data['wireless_pos_num'] = $MerchantPosBaseinfo -> where($where4) -> count();

		//20160611修改，内勤人员无法看到敏感信息
		if (session('MEMBER_ROLE') == '内勤') {
			$data['basic_busi_license_no'] = '********';
			$data['basic_tax_registration_no'] = '********';
			$data['basic_organization_code'] = '********';
			$data['corporate_certificates'] = '********';
			$data['corporate_cellphone'] = '********';
			$data['contacts_cellphone'] = '********';
			$data['contacts_email'] = '********';
			$data['settlement_account_name'] = '********';
			$data['settlement_account_number'] = '********';
		}

		$this -> assign('data', $data);
		if ($readonly == 'readonly') {
			$this -> assign('hidden', 'hidden');
		} else {
			//设置编辑标识
			session('editingSerialNumber', $serialNumber);
		}
		$this -> display("detail");
	}

	public function getList() {
		CK();
		$where = array();
		//20160611修改，外勤人员只能看到和自己有关的商户信息在列表中
		if (session('MEMBER_ROLE') == '外勤') {
			$where['bank_merchant_baseinfo.maintenance_member_uuid'] = session('MEMBER_ID');
		}
		if ($_REQUEST['all'] == 'all') {

		} else {
			$where['bank_merchant_baseinfo.merchant_state'] = array('neq', '待审核');
		}
		//hmx20160608
		if ($_REQUEST['merchant_state']) {
			if ($_REQUEST['merchant_state'] == '全部') {
				$where['bank_merchant_baseinfo.merchant_state'] = array('neq', '停用');
			} else {
				$where['bank_merchant_baseinfo.merchant_state'] = $_REQUEST['merchant_state'];
			}
		}
		if ($_REQUEST['install_equipment_state']) {
			$where['bank_merchant_add_report.install_equipment_state'] = $_REQUEST['install_equipment_state'];
		}
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$rows = $MerchantBaseinfo -> join('bank_member_baseinfo ON bank_merchant_baseinfo.maintenance_member_uuid = bank_member_baseinfo.member_uuid') -> join('bank_merchant_add_report ON bank_merchant_baseinfo.uuid  = bank_merchant_add_report.merchant_uuid') -> where($where) -> select();
		for ($i = 0; $i < count($rows); $i++) {
			$rows[$i]['settlement_period_type_all'] = $rows[$i]['settlement_period_type'] . '+' . $rows[$i]['settlement_period'];
		}
		if ($rows == null) {
			$rows = array();
		}
		echo json_encode($rows);
	}

	public function save() {
		CK();
		//		var_dump(session('editingByBoss'));exit;
		$data = $_REQUEST;
		$data2 = array();

		$upload = new \Think\Upload();
		// 实例化上传类
		$upload -> maxSize = 3145728;
		// 设置附件上传大小
		$upload -> exts = array('jpg', 'gif', 'png', 'jpeg', 'rar', 'zip');
		// 设置附件上传类型
		$upload -> rootPath = './Uploads/';
		// 设置附件上传根目录
		$upload -> savePath = '';
		// 设置附件上传（子）目录
		// 上传文件
		$info = $upload -> upload();
		if (!$info) {// 上传错误提示错误信息
			$this -> error($upload -> getError());
		} else {// 上传成功 获取上传文件信息
			foreach ($info as $file) {
				//				echo $file['savepath'] . $file['savename'] . '^^^Key:" . $file['key'] . "<br >";
				$data[$file['key']] = $file['savepath'] . $file['savename'];
			}
		}

		if (session('?editingSerialNumber')) {
			//编辑
			$serialNumber = session('editingSerialNumber');
			$MerchantAddReport = M('MerchantAddReport');
			$MerchantBaseinfo = M('MerchantBaseinfo');
			$where['serial_number'] = $serialNumber;
			$uuid = $MerchantAddReport -> where($where) -> getField('merchant_uuid');
			$data2['serial_number'] = $serialNumber;
			if (session('?editingByBoss')) {
				session('editingByBoss', null);
				//boss变更商户信息保存
				$where2['uuid'] = $uuid;
				$MerchantBaseinfo -> where($where2) -> save($data);
				$this -> success('保存成功', 'index2');
				exit ;
			} else {
				//普通编辑
				//清空数据
				$MerchantAddReport -> delete($serialNumber);
				$MerchantBaseinfo -> delete($uuid);
				//hmx20160529清空pos表
				$MerchantPosBaseinfo = M('MerchantPosBaseinfo');
				$where3['merchant_uuid'] = $uuid;
				$MerchantPosBaseinfo -> where($where3) -> delete();
			}
		} else {
			//新增
			$uuid = guid();
			$data2['serial_number'] = 'J' . date('YmdHis') . rand(1000, 9999);
		}
		$data['uuid'] = $uuid;
		$data2['merchant_uuid'] = $uuid;

		//20160604
		$data['maintenance_member_uuid'] = session('MEMBER_ID');
		$data2['create_member_uuid'] = session('MEMBER_ID');

		$result = 0;
		//		echo json_encode($data);
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$result += ($MerchantBaseinfo -> add($data));

		$MerchantAddReport = M('MerchantAddReport');
		$result += ($MerchantAddReport -> add($data2));

		$this -> createPOS($data['wire_pos_num'], $data['wireless_pos_num'], $uuid);

		if ($result == 2) {
			$this -> success('保存成功', 'index');
		} else {
			$this -> error('保存失败');
		}

	}

	public function delete($serialNumber) {
		CK();
		$MerchantAddReport = M('MerchantAddReport');
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$where['serial_number'] = $serialNumber;
		$uuid = $MerchantAddReport -> where($where) -> getField('merchant_uuid');
		//清空数据
		$MerchantAddReport -> delete($serialNumber);
		$MerchantBaseinfo -> delete($uuid);
		$this -> success('删除成功', 'index');
	}

	public function applyChangeSearch($keyword) {
		CK();
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$find = 0;
		$result = array();
		$result['success'] = FALSE;

		$where1['basic_busi_no'] = $keyword;
		$where1['merchant_state'] = '正常';
		$where2['basic_busi_name'] = array('like', "%$keyword%");
		$where2['merchant_state'] = '正常';
		$find = $MerchantBaseinfo -> where($where1) -> count();
		if ($find == 1) {
			$result['success'] = TRUE;
			$row = $MerchantBaseinfo -> where($where1) -> find();
			$row['settlement_period_type_all'] = $row['settlement_period_type'] . '+' . $row['settlement_period'];
			$row['settlement_basic_rate_all'] = $row['settlement_basic_rate_type'] . '：' . $row['settlement_basic_rate_percentage'] . "%，" . $row['settlement_basic_rate_ceiling'] . '元封顶';
			$result['data'] = $row;
		} else {
			$find = $MerchantBaseinfo -> where($where2) -> count();
			if ($find == 0) {
				$result['msg'] = '未找到商户信息，请核对填写信息无误后再试。';
			} else if ($find == 1) {
				$result['success'] = TRUE;
				$row = $MerchantBaseinfo -> where($where2) -> find();
				$row['settlement_period_type_all'] = $row['settlement_period_type'] . '+' . $row['settlement_period'];
				$row['settlement_basic_rate_all'] = $row['settlement_basic_rate_type'] . '：' . $row['settlement_basic_rate_percentage'] . "%，" . $row['settlement_basic_rate_ceiling'] . '元封顶';
				$result['data'] = $row;
			} else {
				$result['msg'] = '找到不止一条商户信息，请填写精确，以便搜索。';
			}
		}

		echo json_encode($result);
	}

	/**
	 * 保存商户信息变更申请单
	 */
	public function saveChangeReport() {
		CK();
		$data = $_REQUEST;

		$upload = new \Think\Upload();
		// 实例化上传类
		$upload -> maxSize = 3145728;
		// 设置附件上传大小
		$upload -> exts = array('jpg', 'gif', 'png', 'jpeg', 'rar', 'zip');
		// 设置附件上传类型
		$upload -> rootPath = './Uploads/';
		// 设置附件上传根目录
		$upload -> savePath = '';
		// 设置附件上传（子）目录
		// 上传文件
		$info = $upload -> upload();
		if (!$info) {// 上传错误提示错误信息
			//			$this -> error($upload -> getError());
		} else {// 上传成功 获取上传文件信息
			foreach ($info as $file) {
				//				echo $file['savepath'] . $file['savename'] . '^^^Key:" . $file['key'] . "<br >";
				$data[$file['key']] = $file['savepath'] . $file['savename'];
			}
		}

		$data['change_serial_num'] = 'BG' . date('YmdHis') . rand(1000, 9999);

		//20160604
		$data['merchant_change_staff'] = session('MEMBER_ID');
		$data['merchant_change_name'] = session('MEMBER_NAME');

		$MerchantChangeReport = M('MerchantChangeReport');
		$result = ($MerchantChangeReport -> add($data));

		//		var_dump($data);exit;

		if ($result == 1) {
			$this -> success('保存成功', 'apply');
		} else {
			$this -> error('保存失败');
		}
	}

	public function getChangeReportList() {
		CK();
		$MerchantChangeReport = M('MerchantChangeReport');
		$rows = $MerchantChangeReport -> select();
		if ($rows == null) {
			$rows = array();
		}
		echo json_encode($rows);
	}

	public function showChangeDetail($serialNumber) {
		CK();
		//		var_dump($serialNumber);exit;
		$where['change_serial_num'] = $serialNumber;
		$MerchantChangeReport = M('MerchantChangeReport');
		$data = $MerchantChangeReport -> where($where) -> find();
		//		var_dump($data);exit;
		$this -> assign('data', $data);
		$this -> assign('justShow', 'justShow');
		$this -> assign('hidden', 'hidden');
		$this -> display("applyChange");
	}

	public function deleteChangeReport($serialNumber) {
		CK();
		$MerchantChangeReport = M('MerchantChangeReport');
		$MerchantChangeReport -> delete($serialNumber);
		$this -> success('删除成功', 'apply');
	}

	public function createPOS($wireCount, $wirelessCount, $merchantUUID) {
		CK();
		$MerchantPosBaseinfo = M('MerchantPosBaseinfo');
		$wireCount = intval($wireCount);
		$wirelessCount = intval($wirelessCount);
		//		echo $wireCount . ' ' . $wirelessCount;
		for ($i = 0; $i < $wireCount; $i++) {
			$data = array();
			$data['pos_uuid'] = guid();
			$data['merchant_uuid'] = $merchantUUID;
			$data['terminal_type'] = '有线POS';
			$MerchantPosBaseinfo -> add($data);
		}
		for ($i = 0; $i < $wirelessCount; $i++) {
			$data = array();
			$data['pos_uuid'] = guid();
			$data['merchant_uuid'] = $merchantUUID;
			$data['terminal_type'] = '无线POS';
			$MerchantPosBaseinfo -> add($data);
		}
	}

	public function saveModifyReference($uuid, $new_reference_uuid) {
		CK();
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$where['uuid'] = $uuid;
		$data['reference_uuid'] = $new_reference_uuid;
		$MerchantBaseinfo -> where($where) -> save($data);
		$this -> success('更新成功', 'index2');
	}

	public function saveModifyState($uuid) {
		CK();
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$where['uuid'] = $uuid;
		$merchant_state = $MerchantBaseinfo -> where($where) -> getField('merchant_state');
		$data = array();
		if ($merchant_state == "正常") {
			$data['merchant_state'] = "停用";
		} else if ($merchant_state == "停用") {
			$data['merchant_state'] = "正常";
		}
		$MerchantBaseinfo -> where($where) -> save($data);
		$this -> success('更新成功', 'index2');
	}

	public function saveAddApprove() {
		CK();
		$MerchantBaseinfo = M('MerchantBaseinfo');
		$MerchantAddReport = M('MerchantAddReport');
		$data = $_REQUEST;
		$data['merchant_state'] = '正常';
		$where['uuid'] = $data['uuid'];
		$MerchantBaseinfo -> where($where) -> save($data);
		$data2['approval_datetime'] = date("Y-m-d H:i:sa");
		$data2['approval_member_uuid'] = session('MEMBER_ID'); ;
		$data2['state'] = '已完成进件';
		$where2['merchant_uuid'] = $data['uuid'];
		$MerchantAddReport -> where($where2) -> save($data2);
		$this -> success('审批完成', 'index');
	}

	public function saveApproveChange($serialNumber) {
		CK();
		$MerchantChangeReport = M('MerchantChangeReport');
		$where['change_serial_num'] = $serialNumber;
		$data['merchant_change_state'] = '审核通过';
		$data['merchant_change_datetime'] = date("Y-m-d H:i:sa");
		$MerchantChangeReport -> where($where) -> save($data);
		$this -> success('审批完成', 'apply');
	}

	public function saveConfirmChange($serialNumber) {
		CK();
		$MerchantChangeReport = M('MerchantChangeReport');
		$where['change_serial_num'] = $serialNumber;
		$data['merchant_change_state'] = '经理同意';
		$data['merchant_change_datetime'] = date("Y-m-d H:i:sa");
		$MerchantChangeReport -> where($where) -> save($data);
		$this -> success('审批完成', 'apply');
	}

	/**
	 * 20160611修改 ，自动变更商户基本信息
	 */
	public function change($serialNumber) {
		CK();
		$MerchantChangeReport = M('MerchantChangeReport');
		$where['change_serial_num'] = $serialNumber;
		$row = $MerchantChangeReport -> where($where) -> find();
		if ($row) {
			if ($row['corporate_cellphone_new'] != '') {
				$data['corporate_cellphone'] = $row['corporate_cellphone_new'];
			}
			if ($row['corporate_phone_new'] != '') {
				$data['corporate_phone'] = $row['corporate_phone_new'];
			}
			if ($row['new_settlement_account_type'] != '') {
				$data['settlement_account_type'] = $row['new_settlement_account_type'];
			}
			if ($row['new_settlement_account_name'] != '') {
				$data['settlement_account_name'] = $row['new_settlement_account_name'];
			}
			if ($row['new_settlement_account_idcard'] != '') {
				$data['settlement_account_idcard'] = $row['new_settlement_account_idcard'];
			}
			if ($row['new_settlement_account_number'] != '') {
				$data['settlement_account_number'] = $row['new_settlement_account_number'];
			}
			if ($row['new_settlement_bank_account'] != '') {
				$data['settlement_bank_account'] = $row['new_settlement_bank_account'];
			}
			if ($row['new_settlement_bank_line'] != '') {
				$data['settlement_bank_line'] = $row['new_settlement_bank_line'];
			}
			if ($row['new_settlement_period_type_all'] != '') {
				$arr1 = split('，', $row['new_settlement_period_type_all']);
				if (count($arr1) == 2) {
					$data['settlement_period_type'] = $arr1[0];
					$data['settlement_period'] = str_replace("天", "", $arr1[1]);
				}
			}
			if ($row['new_settlement_basic_rate_all'] != '') {
				$arr2 = split('，', $row['new_settlement_basic_rate_all']);
				if (count($arr2) == 3) {
					$data['settlement_basic_rate_type'] = $arr2[0];
					$data['settlement_basic_rate_percentage'] = str_replace("%", "", $arr2[1]);
					$data['settlement_basic_rate_ceiling'] = str_replace("元封顶", "", $arr2[2]);
				}
			}
			$where2['uuid'] = $row['uuid'];
			$MerchantBaseinfo = M('MerchantBaseinfo');
			$MerchantBaseinfo -> where($where2) -> save($data);
		}
		$data2['merchant_change_state'] = '完成变更';
		$data2['merchant_change_datetime'] = date("Y-m-d H:i:sa");
		$MerchantChangeReport -> where($where) -> save($data2);
		$this -> success('完成变更', 'apply');
	}

}
