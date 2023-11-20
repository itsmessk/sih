<?php
require_once('../config.php');
Class Master extends DBConnection {
	private $settings;
	public function __construct(){
		global $_settings;
		$this->settings = $_settings;
		parent::__construct();
	}
	public function __destruct(){
		parent::__destruct();
	}
	function capture_err(){
		if(!$this->conn->error)
			return false;
		else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
			return json_encode($resp);
			exit;
		}
	}
	function save_supplier(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id'))){
				$v = addslashes(trim($v));
				if(!empty($data)) $data .=",";
				$data .= " `{$k}`='{$v}' ";
			}
		}
		$check = $this->conn->query("SELECT * FROM `supplier_list` where `name` = '{$name}' ".(!empty($id) ? " and id != {$id} " : "")." ")->num_rows;
		if($this->capture_err())
			return $this->capture_err();
		if($check > 0){
			$resp['status'] = 'failed';
			$resp['msg'] = "Supplier already exist.";
			return json_encode($resp);
			exit;
		}
		if(empty($id)){
			$sql = "INSERT INTO `supplier_list` set {$data} ";
			$save = $this->conn->query($sql);
		}else{
			$sql = "UPDATE `supplier_list` set {$data} where id = '{$id}' ";
			$save = $this->conn->query($sql);
		}
		if($save){
			$resp['status'] = 'success';
			if(empty($id))
				$this->settings->set_flashdata('success',"New Supplier successfully saved.");
			else
				$this->settings->set_flashdata('success',"Supplier successfully updated.");
		}else{
			$resp['status'] = 'failed';
			$resp['err'] = $this->conn->error."[{$sql}]";
		}
		return json_encode($resp);
	}
	function delete_supplier(){
		extract($_POST);
		$del = $this->conn->query("DELETE FROM `supplier_list` where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Supplier successfully deleted.");
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);

	}
	function save_item(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id','description'))){
				if(!empty($data)) $data .=",";
				$data .= " `{$k}`='{$v}' ";
			}
		}
		if(isset($_POST['description'])){
			if(!empty($data)) $data .=",";
				$data .= " `description`='".addslashes(htmlentities($description))."' ";
		}
		$check = $this->conn->query("SELECT * FROM `item_list` where `name` = '{$name}' ".(!empty($id) ? " and id != {$id} " : "")." ")->num_rows;
		if($this->capture_err())
			return $this->capture_err();
		if($check > 0){
			$resp['status'] = 'failed';
			$resp['msg'] = "Item Name already exist.";
			return json_encode($resp);
			exit;
		}
		if(empty($id)){
			$sql = "INSERT INTO `item_list` set {$data} ";
		}else{
			$sql = "UPDATE `item_list` set {$data} where id = '{$id}' ";
		}
		$save = $this->conn->query($sql);
		if($save){
			$resp['status'] = 'success';
			if(empty($id))
				$this->settings->set_flashdata('success',"New item successfully saved.");
			else
				$this->settings->set_flashdata('success',"item successfully updated.");
		}else{
			$resp['status'] = 'failed';
			$resp['err'] = $this->conn->error."[{$sql}]";
		}
		return json_encode($resp);
	}
	function delete_item(){
		extract($_POST);
		$del = $this->conn->query("DELETE FROM `item_list` where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"item successfully deleted.");
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);

	}
	function search_items(){
		extract($_POST);
		$qry = $this->conn->query("SELECT * FROM item_list where `name` LIKE '%{$q}%'");
		$data = array();
		while($row = $qry->fetch_assoc()){
			$data[] = array("label"=>$row['name'],"id"=>$row['id'],"description"=>$row['description']);
		}
		return json_encode($data);
	}
	function save_po(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k =>$v){
			if(in_array($k,array('discount_amount','tax_amount')))
				$v= str_replace(',','',$v);
			if(!in_array($k,array('id','po_no')) && !is_array($_POST[$k])){
				$v = addslashes(trim($v));
				if(!empty($data)) $data .=",";
				$data .= " `{$k}`='{$v}' ";
			}
		}
		if(!empty($po_no)){
			$check = $this->conn->query("SELECT * FROM `po_list` where `po_no` = '{$po_no}' ".($id > 0 ? " and id != '{$id}' ":""))->num_rows;
			if($this->capture_err())
				return $this->capture_err();
			if($check > 0){
				$resp['status'] = 'po_failed';
				$resp['msg'] = "Purchase Order Number already exist.";
				return json_encode($resp);
				exit;
			}
		}else{
			$po_no ="";
			while(true){
				$po_no = "PO-".(sprintf("%'.011d", mt_rand(1,99999999999)));
				$check = $this->conn->query("SELECT * FROM `po_list` where `po_no` = '{$po_no}'")->num_rows;
				if($check <= 0)
				break;
			}
		}
		$data .= ", po_no = '{$po_no}' ";

		if(empty($id)){
			$sql = "INSERT INTO `po_list` set {$data} ";
		}else{
			$sql = "UPDATE `po_list` set {$data} where id = '{$id}' ";
		}
		$save = $this->conn->query($sql);
		if($save){
			$resp['status'] = 'success';
			$po_id = empty($id) ? $this->conn->insert_id : $id ;
			$resp['id'] = $po_id;
			$data = "";
			foreach($item_id as $k =>$v){
				if(!empty($data)) $data .=",";
				$data .= "('{$po_id}','{$v}','{$unit[$k]}','{$unit_price[$k]}','{$qty[$k]}')";
			}
			if(!empty($data)){
				$this->conn->query("DELETE FROM `order_items` where po_id = '{$po_id}'");
				$save = $this->conn->query("INSERT INTO `order_items` (`po_id`,`item_id`,`unit`,`unit_price`,`quantity`) VALUES {$data} ");
			}
			if(empty($id))
				$this->settings->set_flashdata('success',"Purchase Order successfully saved.");
			else
				$this->settings->set_flashdata('success',"Purchase Order successfully updated.");
		}else{
			$resp['status'] = 'failed';
			$resp['err'] = $this->conn->error."[{$sql}]";
		}
		return json_encode($resp);
	}
	function delete_po(){
		extract($_POST);
		$del = $this->conn->query("DELETE FROM `po_list` where unit_id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Purchase Order successfully deleted.");
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);

	}
	function get_price(){
		extract($_POST);
		 $qry = $this->conn->query("SELECT * FROM price_list where unit_id = '{$unit_id}'");
		 $this->capture_err();
		 if($qry->num_rows > 0){
			 $res = $qry->fetch_array();
			 switch($rent_type){
				 case '1':
					$resp['price'] = $res['monthly'];
					break;
				case '2':
					$resp['price'] = $res['quarterly'];
					break;
				case '3':
					$resp['price'] = $res['annually'];
					break;
			 }
		 }else{
			 $resp['price'] = "0";
		 }
		 return json_encode($resp);
	}
	function save_rent(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id')) && !is_array($_POST[$k])){
				if(!empty($data)) $data .=",";
				$v = addslashes($v);
				$data .= " `{$k}`='{$v}' ";
			}
		}
		switch ($rent_type) {
			case 1:
				$data .= ", `date_end`='".date("Y-m-d",strtotime($date_rented.' +1 month'))."' ";
				break;
			
			case 2:
				$data .= ", `date_end`='".date("Y-m-d",strtotime($date_rented.' +3 month'))."' ";
				break;
			case 3:
				$data .= ", `date_end`='".date("Y-m-d",strtotime($date_rented.' +1 year'))."' ";
				break;
			default:
				# code...
				break;
		}
		if(empty($id)){
			$sql = "INSERT INTO `rent_list` set {$data} ";
		}else{
			$sql = "UPDATE `rent_list` set {$data} where id = '{$id}' ";
		}
		$save = $this->conn->query($sql);
		if($save){
			$resp['status'] = 'success';
			if(empty($id))
				$this->settings->set_flashdata('success',"New Rent successfully saved.");
			else
				$this->settings->set_flashdata('success',"Rent successfully updated.");
			$this->settings->conn->query("UPDATE `unit_list` set `status` = '{$status}' where id = '{$unit_id}'");
		}else{
			$resp['status'] = 'failed';
			$resp['err'] = $this->conn->error."[{$sql}]";
		}
		return json_encode($resp);
	}
	function delete_rent(){
		extract($_POST);
		$del = $this->conn->query("DELETE FROM `rent_list` where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Rent successfully deleted.");
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);

	}
	function delete_img(){
		extract($_POST);
		if(is_file($path)){
			if(unlink($path)){
				$resp['status'] = 'success';
			}else{
				$resp['status'] = 'failed';
				$resp['error'] = 'failed to delete '.$path;
			}
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = 'Unkown '.$path.' path';
		}
		return json_encode($resp);
	}
	function renew_rent(){
		extract($_POST);
		$qry = $this->conn->query("SELECT * FROM `rent_list` where id ='{$id}'");
		$res = $qry->fetch_array();
		switch ($res['rent_type']) {
			case 1:
				$date_end = " `date_end`='".date("Y-m-d",strtotime($res['date_end'].' +1 month'))."' ";
				break;
			case 2:
				$date_end = " `date_end`='".date("Y-m-d",strtotime($res['date_end'].' +3 month'))."' ";
				break;
			case 3:
				$date_end = " `date_end`='".date("Y-m-d",strtotime($res['date_end'].' +1 year'))."' ";
				break;
			default:
				# code...
				break;
		}
		$update = $this->conn->query("UPDATE `rent_list` set {$date_end}, date_rented = date_end where id = '{$id}' ");
		if($update){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success'," Rent successfully renewed.");
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);
	}
	function save_category(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id','description'))){
				if(!empty($data)) $data .=",";
				$data .= " `{$k}`='{$v}' ";
			}
		}
		if(isset($_POST['description'])){
			if(!empty($data)) $data .=",";
				$data .= " `description`='".addslashes(htmlentities($description))."' ";
		}
		$check = $this->conn->query("SELECT * FROM `category_list` where `name` = '{$name}' ".(!empty($id) ? " and id != {$id} " : "")." ")->num_rows;
		if($this->capture_err())
			return $this->capture_err();
		if($check > 0){
			$resp['status'] = 'failed';
			$resp['msg'] = "Category already exist.";
			return json_encode($resp);
			exit;
		}
		if(empty($id)){
			$sql = "INSERT INTO `category_list` set {$data} ";
			$save = $this->conn->query($sql);
		}else{
			$sql = "UPDATE `category_list` set {$data} where id = '{$id}' ";
			$save = $this->conn->query($sql);
		}
		if($save){
			$resp['status'] = 'success';
			if(empty($id))
				$this->settings->set_flashdata('success',"New Category successfully saved.");
			else
				$this->settings->set_flashdata('success',"Category successfully updated.");
		}else{
			$resp['status'] = 'failed';
			$resp['err'] = $this->conn->error."[{$sql}]";
		}
		return json_encode($resp);
	}
	function delete_category(){
		extract($_POST);
		$del = $this->conn->query("DELETE FROM `category_list` where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Category successfully deleted.");
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);

	}
	function save_product(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id','description'))){
				if(!empty($data)) $data .=",";
				if($k == 'price')
				$v = floatval(str_replace(',','',$v));
				$data .= " `{$k}`='{$v}' ";
			}
		}
		if(isset($_POST['description'])){
			if(!empty($data)) $data .=",";
				$data .= " `description`='".addslashes(htmlentities($description))."' ";
		}
		$check = $this->conn->query("SELECT * FROM `product_list` where `product` = '{$product}' and `category_id` = '{$category_id}' ".(!empty($id) ? " and id != {$id} " : "")." ")->num_rows;
		if($this->capture_err())
			return $this->capture_err();
		if($check > 0){
			$resp['status'] = 'failed';
			$resp['msg'] = "Product already exist.";
			return json_encode($resp);
			exit;
		}
		if(empty($id)){
			$sql = "INSERT INTO `product_list` set {$data} ";
			$save = $this->conn->query($sql);
		}else{
			$sql = "UPDATE `product_list` set {$data} where id = '{$id}' ";
			$save = $this->conn->query($sql);
		}
		if($save){
			$resp['status'] = 'success';
			if(empty($id))
				$this->settings->set_flashdata('success',"New Product successfully saved.");
			else
				$this->settings->set_flashdata('success',"Product successfully updated.");
		}else{
			$resp['status'] = 'failed';
			$resp['err'] = $this->conn->error."[{$sql}]";
		}
		return json_encode($resp);
	}
	function delete_product(){
		extract($_POST);
		$del = $this->conn->query("DELETE FROM `product_list` where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Product successfully deleted.");
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);

	}
	function save_service(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id','description'))){
				if(!empty($data)) $data .=",";
				if($k == 'price')
				$v = floatval(str_replace(',','',$v));
				$data .= " `{$k}`='{$v}' ";
			}
		}
		if(isset($_POST['description'])){
			if(!empty($data)) $data .=",";
				$data .= " `description`='".addslashes(htmlentities($description))."' ";
		}
		$check = $this->conn->query("SELECT * FROM `service_list` where `service` = '{$service}' and `category_id` = '{$category_id}' ".(!empty($id) ? " and id != {$id} " : "")." ")->num_rows;
		if($this->capture_err())
			return $this->capture_err();
		if($check > 0){
			$resp['status'] = 'failed';
			$resp['msg'] = "Service already exist.";
			return json_encode($resp);
			exit;
		}
		if(empty($id)){
			$sql = "INSERT INTO `service_list` set {$data} ";
			$save = $this->conn->query($sql);
		}else{
			$sql = "UPDATE `service_list` set {$data} where id = '{$id}' ";
			$save = $this->conn->query($sql);
		}
		if($save){
			$resp['status'] = 'success';
			if(empty($id))
				$this->settings->set_flashdata('success',"New Service successfully saved.");
			else
				$this->settings->set_flashdata('success',"Service successfully updated.");
		}else{
			$resp['status'] = 'failed';
			$resp['err'] = $this->conn->error."[{$sql}]";
		}
		return json_encode($resp);
	}
	function delete_service(){
		extract($_POST);
		$del = $this->conn->query("DELETE FROM `service_list` where id = '{$id}'");
		if($del){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Service successfully deleted.");
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);

	}
	function generate_code(){
		extract($_POST);
		while(true){
			$code = ($type == 1) ? 'PP-' : 'PS-';
			$code .= sprintf("%'.07d",mt_rand(1,9999999));
			$chk = $this->conn->query("SELECT * FROM invoice_list where invoice_code = '{$code}'")->num_rows;
			if($chk <= 0)
				break;
		}
		$resp['status'] = 'success';
		$resp['code'] = $code;
		return json_encode($resp);
	}
	
	function code_availability(){
		extract($_POST);
		$chk = $this->conn->query("SELECT * FROM invoice_list where invoice_code = '{$code}' " .($id > 0 ? "and id!='{$id}'" :''))->num_rows;
		if($chk <= 0)
			$resp['status'] = 'available';
		else
			$resp['status'] = 'taken';
		
		return json_encode($resp);
	}
	function save_invoice(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k =>$v){
			if(!in_array($k,array('id','remarks')) && !is_array($_POST[$k])){
				if(!empty($data)) $data .=",";
				if($k == 'price')
				$v = floatval(str_replace(',','',$v));
				$data .= " `{$k}`='{$v}' ";
			}
		}
		if(isset($_POST['remarks'])){
			if(!empty($data)) $data .=",";
				$data .= " `remarks`='".addslashes(htmlentities($remarks))."' ";
		}
		if(empty($id)){
			$sql = "INSERT INTO invoice_list set $data";
		}else{
			$sql = "UPDATE invoice_list set $data where id= {$id}";
		}
		$save = $this->conn->query($sql);
		if($this->capture_err())
			return $this->capture_err();
		$id = !empty($id) ? $id : $this->conn->insert_id;
		$item_data_ins = "";
		foreach($_POST['item_id'] as $k => $v){
			if(!empty($item_data_ins)) $item_data_ins .= ", ";
			if(empty($v)){
				$item_data_ins .= "('{$id}','{$form_id[$k]}','{$unit[$k]}','{$quantity[$k]}','{$price[$k]}','{$total[$k]}')";
			}else{
				$ids[] = $v;
				$upd = $this->conn->query("UPDATE invoices_items set form_id = '{$form_id[$k]}',unit = '{$unit[$k]}',quantity = '{$quantity[$k]}',price='{$price[$k]}',total='{$total[$k]}' where id = {$v}");
				if($this->capture_err())
				return $this->capture_err();
			}
		}
		if(isset($ids) && count($ids) > 0){
			$ids_imp = implode(",",$ids);
			$del = $this->conn->query("DELETE FROM invoices_items where id not in ({$ids_imp}) and invoice_id = '{$id}' ");
				if($this->capture_err())
				return $this->capture_err();
		}

		if(!empty($item_data_ins)){
			$ins_items = $this->conn->query("INSERT INTO invoices_items (invoice_id,form_id,`unit`,`quantity`,`price`,`total`) VALUES {$item_data_ins} ");
			if($this->capture_err())
				return $this->capture_err();
		}
		$resp['status'] = 'success';
		$resp['id'] = $id;
		$resp['id_encrypt'] = md5($id);
		$this->settings->set_flashdata('success',"Invoice successfully saved.");
		return json_encode($resp);
	}
	function delete_invoice(){
		extract($_POST);
		$del = $this->conn->query("DELETE FROM `invoice_list` where id = '{$id}'");
		$del2 = $this->conn->query("DELETE FROM `invoices_items` where invoice_id = '{$id}'");
		if($del && $del2){
			$resp['status'] = 'success';
			$this->settings->set_flashdata('success',"Invoice successfully deleted.");
		}else{
			$resp['status'] = 'failed';
			$resp['error'] = $this->conn->error;
		}
		return json_encode($resp);

	}
	function save_account(){
		extract($_POST);
		$data ="";
		foreach($_POST as $k => $v){
			if(!in_array($k,array('id','password'))){
				if(!empty($data)) $data.= ", ";
				$data.= " {$k} = '{$v}' ";
			}
		}
		if(isset($password))
			$data.= " `password` = md5('{$password}') ";
		if(empty($id)){
			$sql = "INSERT INTO `vendor` set {$data}";
		}else{
			$sql = "UPDATE `vendor` set {$data} where id = {$id}";
		}
		$save =  $this->conn->query($sql);
		$this->capture_err();
		if($save){
			$resp['status']='success';
			$this->settings->set_flashdata('success',' Account successfully saved.');
		}
		return json_encode($resp);
	}
	function check_account(){
		extract($_POST);
		$chk = $this->conn->query("SELECT * FROM `vendor` where vendor_number = '{$vendor_number}' ".($id > 0 ? " and id != '{$id}' " : ''));
		$this->capture_err();
		if($chk->num_rows > 0){
			$resp['status'] = 'taken';
		}else{
			$resp['status'] = 'available';
		}
		return json_encode($resp);
	}
	function get_account(){
		extract($_POST);
		$qry = $this->conn->query("SELECT id,vendor_number , c_name as name FROM `vendor` where vendor_number = '{$vendor_number}' ");
		$this->capture_err();
		if($qry->num_rows > 0){
			$resp['status'] = 'success';
			$resp['data'] = $qry->fetch_assoc();
		}else{
			$resp['status'] = 'not_exist';
		}
		return json_encode($resp);
	}
	function delete_account(){
		extract($_POST);
		$delete = $this->conn->query("DELETE FROM `vendor` where id = {$id}");
		$this->capture_err();
		
		if($delete){
			$resp['status'] ='success';
			$this->settings->set_flashdata('success', 'Account successfully deleted.');
		}else{
			$resp['status'] = 'failed';
		}
		return json_encode($resp);
	}
}

$Master = new Master();
$action = !isset($_GET['f']) ? 'none' : strtolower($_GET['f']);
$sysset = new SystemSettings();
switch ($action) {
	case 'save_supplier':
		echo $Master->save_supplier();
	break;
	case 'delete_supplier':
		echo $Master->delete_supplier();
	break;
	case 'save_item':
		echo $Master->save_item();
	break;
	case 'delete_item':
		echo $Master->delete_item();
	break;
	case 'search_items':
		echo $Master->search_items();
	break;
	case 'save_po':
		echo $Master->save_po();
	break;
	case 'delete_po':
		echo $Master->delete_po();
	break;
	case 'get_price':
		echo $Master->get_price();
		break;
	case 'save_rent':
		echo $Master->save_rent();
	break;
	case 'delete_rent':
		echo $Master->delete_rent();
	break;
	case 'renew_rent':
		echo $Master->renew_rent();
	break;
	case 'save_category':
		echo $Master->save_category();
	break;
	case 'delete_category':
		echo $Master->delete_category();
	break;
	case 'save_product':
		echo $Master->save_product();
	break;
	case 'delete_product':
		echo $Master->delete_product();
	break;
	case 'save_service':
		echo $Master->save_service();
	break;
	case 'delete_service':
		echo $Master->delete_service();
	break;
	case 'generate_code':
		echo $Master->generate_code();
	break;
	case 'code_availability':
		echo $Master->code_availability();
	break;
	case 'save_invoice':
		echo $Master->save_invoice();
	break;
	case 'delete_invoice':
		echo $Master->delete_invoice();
	break;
	case 'save_account':
		echo $Master->save_account();
	break;
	case 'get_account':
		echo $Master->get_account();
	break;
	case 'check_account':
		echo $Master->check_account();
	break;
	case 'delete_account':
		echo $Master->delete_account();
	break;
	
	default:
		// echo $sysset->index();
		break;
}
