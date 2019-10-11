<?php
Class AdminController extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->is_login();
		$this->load->model('adminmodel');
	
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

  function active_list(){
    $status=1;
    $tblname="customer_info";
    $matchcon="status";
    $this->load->model('adminmodel');
    $dt = $this->adminmodel->getcustomerdata($matchcon,$status,$tblname);
    $data['row']=$dt;
    $data['pageTitle'] = 'Active Customer list';
		$data['smallTitle'] = 'Active Customer list';
		$data['mainPage'] = 'Active Customer list';
		$data['subPage'] = 'Active Customer list';
		$data['title'] = 'Active Customer list';
		$data['headerCss'] = 'headerCss/customerlistcss';
		$data['footerJs'] = 'footerJs/customerlistjs';
		$data['mainContent'] = 'active_list';
		$this->load->view("includes/mainContent", $data);

  }
  function Inactive_List(){
    $status=0;
    $tblname="customer_info";
    $matchcon="status";
    $this->load->model('adminmodel');
    $dt = $this->adminmodel->getcustomerdata($matchcon,$status,$tblname);
    $data['row']=$dt;
    $data['pageTitle'] = 'Inacive Customer List';
		$data['smallTitle'] = 'Inacive Customer List';
		$data['mainPage'] = 'Inacive Customer List';
		$data['subPage'] = 'Inacive Customer List';
		$data['title'] = 'Inacive Customer List';
		$data['headerCss'] = 'headerCss/customerlistcss';
		$data['footerJs'] = 'footerJs/customerlistjs';
		$data['mainContent'] = 'Inactive_List';
		$this->load->view("includes/mainContent", $data);

  }
  function Paid_InaciveList(){
   
    $this->load->model('adminmodel');
    $dt = $this->adminmodel->getpaydetails();
    $data['row']=$dt;
    $data['pageTitle'] = 'Paid Inacive Customer List';
		$data['smallTitle'] = 'Paid Inacive Customer List';
		$data['mainPage'] = 'Paid Inacive Customer List';
		$data['subPage'] = 'Paid Inacive Customer List';
		$data['title'] = 'Paid Inacive Customer List';
		$data['headerCss'] = 'headerCss/customerlistcss';
		$data['footerJs'] = 'footerJs/customerlistjs';
		$data['mainContent'] = 'Paid_InaciveList';
		$this->load->view("includes/mainContent", $data);

  }
  function active_status(){
   $cid= $this->uri->segment(3);
   $custid="id";
   $tblnm="customer_info";
   $this->load->model('adminmodel');
   $dt = $this->adminmodel->activestatus($custid,$cid,$tblnm);
  //  print_r($dt);
  //  exit();
   if($dt){
     redirect("adminController/Paid_InaciveList");
   }
   else{
     echo "Status Not Updated";
   }
  }

  
}
?>