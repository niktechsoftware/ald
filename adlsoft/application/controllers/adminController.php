<?php
Class AdminController extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->is_login();
		$this->load->model('cmodel');
	
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

  
 
   
    function active_status(){
    $cid= $this->uri->segment(3);
    $custid="id";
    $tblnm="customer_info";
 
    $dt = $this->cmodel->activestatus($custid,$cid,$tblnm);
    //  print_r($dt);
    //  exit();
    if($dt){
      redirect("adminController/Paid_InaciveList");
    }
    else{
      echo "Status Not Updated";
    }
    }
    function approve_paystatus(){
      $comment=$this->input->post("stats");
      $cid=$this->input->post("id");
      $arr=array(
        "status" =>$comment
      );
      $this->db->where("c_id",$cid);
      $dt=$this->db->update("pay_details",$arr);
      if($dt){
        echo "Approved";

      }
      
    }
    
    public function admin_profile(){
		$this->load->library("form_validation");
		$this->load->model("adminmodel");
		$data['crecord'] = $this->adminmodel->getrecord();
		$data['pageTitle'] = 'Admin Profile';
		$data['smallTitle'] = 'Profile form';
		$data['mainPage'] = 'Admin Profile';
		$data['subPage'] = 'Admin Profile';
		$data['title'] = 'Admin Profile Form';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'admin_profile';
		$this->load->view("includes/mainContent", $data);
	}
    
    function generatepain(){
    	
     
    }
    function mpin(){
      $id = $this->input->post("id");
      $nop = $this->input->post("nop");
      $data['headerCss'] = 'headerCss/customerlistcss';
      $data['footerJs'] = 'footerJs/customerlistjs';
      $this->load->view("", $data);

    }

  
}
?>