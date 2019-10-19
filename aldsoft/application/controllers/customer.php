<?php
class customer extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->is_login();
		$this->load->model("cmodel");
	}
	function is_login(){
		$is_login = $this->session->userdata('is_login');
		$is_lock = $this->session->userdata('is_lock');
		$logtype = $this->session->userdata('login_type');
		if(!$is_login){
			//echo $is_login;
			redirect("welcome/index");
		}
		elseif(!$is_lock){
			redirect("welcome/lockPage");
		}
	}
	function customer_list(){
		$uriv = $this->uri->segment(3);
		if($uriv==1){
			$status=1;
			$page = "Active";
	
		}else{
			if($uriv==2){
				$status=0;
				$page = "Inctive";
			}else{
				if($uriv==3){
					$status=2;
					$page = "Paid Inacive";
				}
			}
		}
		$matchcon="status";
		$tblname="customer_info";
	
		$dt = $this->cmodel->getcustomerdata($matchcon,$status,$tblname);
		$data['row']=$dt;
		$data['uriv'] = $uriv;
		$data['pageTitle'] = $page.' Customer list';
		$data['smallTitle'] = $page.' Customer list';
		$data['mainPage'] = $page.' Customer list';
		$data['subPage'] = $page.' Customer list';
		$data['title'] = $page.' Customer list';
		$data['headerCss'] = 'headerCss/customerlistcss';
		$data['footerJs'] = 'footerJs/customerlistjs';
		$data['mainContent'] = 'active_list';
		$this->load->view("includes/mainContent", $data);
	
	}
}