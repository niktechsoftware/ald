<?php
class Clogin extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->is_login();
		$this->load->model('customermodel');
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
		$data['footerJs'] = 'footerJs/dashboardJs';
		$data['mainContent'] = 'customer/registration';
		$this->load->view("includes/mainContent", $data);
	}
	function checkID(){
		$parentID= $this->input->post('parent_id');
		//print_r($parentID);
		$this->db->where('username',$parentID);
		$c_ID=$this->db->get('customer_info')->row();
		if($c_ID){
			echo "found parent id";
		}else{
				//echo "parent id is wroung";
		}
	}
	function insertCustmer(){
		$maxid=$this->customermodel->cust_max();
		$maxid=$maxid+1;
		$username="ADL".$maxid;
		$rjoinerID= $this->input->post('JoinerID');
		$name= $this->input->post('name');
		$fname= $this->input->post('fname');
		$joinername= $this->input->post('joinername');
		$address= $this->input->post('address');
		$pinno= $this->input->post('pinno');
		$mobile= $this->input->post('mobile');
		$aadhar= $this->input->post('aadhar');
		$dob= $this->input->post('dob');
		$password= $this->input->post('password');
		$parent_id= $this->input->post('parent_id');
		print_r($parent_id);
		print_r($joinername);exit();
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
		if($query){
			$this->db->where('username',$username);
			$id= $this->get('customer_info')->row();
			$data1=array(
				'c_id'=>$id,
				''
			);
			$this->customermodel->insertCustomer($data);
		}
		$this->load->view('index.php/clogin/customerConformPage');
	}

}