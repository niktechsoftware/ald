<?php
class Clogin extends CI_Controller{

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
	public function index(){
		$data['pageTitle'] = 'Customer Dashboard';
		$data['smallTitle'] = 'Overview of all Section';
		$data['mainPage'] = 'Dashboard';
		$data['subPage'] = 'dashboard';
		$data['title'] = 'ALD Customer Dashboard';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/dashboardJs';
		$data['mainContent'] = 'customer/cdashboard';
		$this->load->view("includes/mainContent", $data);
	}
	public function customer_reg(){
		$data['pageTitle'] = 'Customer Registration';
		$data['smallTitle'] = 'Registration form';
		$data['mainPage'] = 'Customer Registration';
		$data['subPage'] = 'Customer Registration';
		$data['title'] = 'Customer Registration Form';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'customer/registration';
		$this->load->view("includes/mainContent", $data);
	}
	function checkID(){
		$parentID= $this->input->post('parent_id');
		//print_r($parentID);

		$getvalue = $this->cmodel->checkStatus("customer_info",$parentID);
		echo (json_encode($getvalue));
	}
	function insertCustmer(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules('JoinerID','Joinner ID','required|is_unique[customer_info.username]');
		$this->form_validation->set_rules('name','Customer Name','required');
		$this->form_validation->set_rules('fname','Father Name','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('pinno','PIN No.','required |exact_length[6]');
		$this->form_validation->set_rules('mobile','Mobile Number','required | numeric |exact_length[10]');
		$this->form_validation->set_rules('aadhar','Aadhaar Number','required | is_unique[customer_info.adhaarnumber]');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('name','Customer Name','required');
		$this->form_validation->set_rules('name','Customer Name','required');
		if($this->form_validation->run()){
			$maxid	=	$this->customermodel->cust_max();
			$maxid	=	$maxid+1;
			
			$username="ADL".$maxid;
			$rjoinerID= $this->input->post('JoinerID');
			//$ljoinerID= $this->input->post('lJoinerID');
			$name= $this->input->post('name');
			$fname= $this->input->post('fname');
			$address= $this->input->post('address');
			$pinno= $this->input->post('pinno');
			$mobile= $this->input->post('mobile');
			$aadhar= $this->input->post('aadhar');
			$dob= $this->input->post('dob');
			$password= $this->input->post('password');
			$parent_id= $this->input->post('parent_id');
			$city= $this->input->post('city');
			$state= $this->input->post('state');
			$panno= $this->input->post('panno');
			$data= array(
					'parent_id'=>$parent_id,
					'customer_name'=>$name,
					'username'=>$username,
					'password'=>$password,
					'mobilenumber'=>$mobile,
					'current_address'=>$address,
					'city'=>$city,
					'state'=>$state,
					'pin'=>$pinno,
					'pannumber'=>$panno,
					'adhaarnumber'=>$aadhar,
					'status'=>0,
					'joining_date'=>date('Y-m-d'),
					'dob'=>$dob
			);
			$query=$this->customermodel->insertCustomer($data);
			redirect('clogin/customerConformPage');
			}
			else{
				$this->load->view("registration");
			}	
		}
		


}