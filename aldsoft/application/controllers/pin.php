<?php
class pin extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->is_login();
		$this->load->model("cmodel");
		$this->load->model("mpinmodel");
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
	
	function generatePin(){
		if($this->uri->segment("3")){
    		$id = $this->uri->segment("3");
    		$checkv = $this->mpinmodel->getPinDetails($id);
    		$data['checkv']=$checkv;
    		$data['id']=$id;
    	}else{
    		if($this->input->post("id")){
    		$id = $this->input->post("id");
    		$checkv = $this->mpinmodel->getPinDetails($id);
    		$data['checkv']=$checkv;
    		$data['id']=$id;
    		}else{
    			$id=0;
    			$checkv = $this->mpinmodel->getPinDetails($id);
    			$data['checkv']=$checkv;
    			$data['id']=0;
    		}
    	}
    	
    	$data['pageTitle'] = 'PIN Panel';
    	$data['smallTitle'] = 'PIN Management ';
    	$data['mainPage'] = 'PIN Panel';
    	$data['subPage'] = 'PIN Panel';
    	$data['title'] = 'ALD PIN Panel';
     $data['headerCss'] = 'headerCss/customerlistcss';
     $data['footerJs'] = 'footerJs/customerlistjs';
   
     $data['mainContent'] = 'pin/mpin';
     $this->load->view("includes/mainContent", $data);
		
	}
	
	function genSavePin(){
		if(strlen($this->input->post("uid"))>0){
			$uid = $this->input->post("uid");
			$this->db->where("username",$uid);
			$vci = $this->db->get("customer_info");
			if($vci->num_rows()>0){
			$cid = $vci->row()->id;	
			}
		}else{
		$cid = $this->input->post("cid");
		}
		$nopin = $this->input->post("nopin");
		
		$pinamount = $this->input->post("pingenVale");
		$tblnm="mpin_master";
		$id = $this->mpinmodel->pin_max($tblnm)+1;
		$val = $this->mpinmodel->genSavePin($cid,$nopin,$id,$pinamount);
		if($val){
			redirect("pin/generatePin/$cid");
		}
	}
	
	function pinDetails(){
		
		$pinid = $this->uri->segment("3");
		$pin = $this->mpinmodel->gettotalPin($pinid);
		$data['pind']=$pin;
		$data['cid']=$this->uri->segment("4");
		$data['pageTitle'] = 'PIN Panel';
		$data['smallTitle'] = 'PIN Management ';
		$data['mainPage'] = 'PIN Panel';
		$data['subPage'] = 'PIN Panel';
		$data['title'] = 'ALD PIN Panel';
		$data['headerCss'] = 'headerCss/customerlistcss';
		$data['footerJs'] = 'footerJs/customerlistjs';
		 
		$data['mainContent'] = 'pin/mpinDetails';
		$this->load->view("includes/mainContent", $data);
	}
	
	function activateCustomer(){
		$idforact=$this->input->post("idforact");
		$mpin = $this->input->post("mpin");
		$custid=$idforact;
		$tblnm="customer_info";
		
		$dt = $this->cmodel->activestatus($custid,$mpin,$tblnm);
		if($dt){
			echo "Activated" ;
		}
	}
}