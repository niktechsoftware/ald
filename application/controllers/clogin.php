<?php
class Clogin extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->is_login();
		$this->load->model('cmodel');
		$this->load->model('tree');
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
		$this->load->library("form_validation");
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
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		//$this->form_validation->set_rules('parent_id','Sponsor ID','required|is_unique[customer_info.username]');
		$this->form_validation->set_rules('name','Customer Name','required');
		$this->form_validation->set_rules('selectTree','Please Select Position','required');
		$this->form_validation->set_rules('fname','Father Name','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('state','State','required');
		$this->form_validation->set_rules('pinno','PIN No.','required |exact_length[6]');
		$this->form_validation->set_rules('mobile','Mobile Number','required | numeric |exact_length[10]');
		$this->form_validation->set_rules('aadhar','Aadhaar Number','required | is_unique[customer_info.adhaarnumber]');
		$this->form_validation->set_rules('password','Password','matches[confirm_pwd]');
		$this->form_validation->set_rules('confirm_pwd','Password','matches[password]');
		$this->form_validation->set_rules('panno','Pan Number','');
		$this->form_validation->set_rules('dob','Date Of Birth','required');
		$this->form_validation->set_rules('customRadioInline1','Gender','required');
		if($this->form_validation->run()){
			$maxid	=	$this->cmodel->cust_max();
			$maxid	=	$maxid+1;
			
			$username="ADL".$maxid;
			$rjoinerID= $this->input->post('parent_id');
			$cid  = $this->cmodel->getrowid($rjoinerID);
			
			//$ljoinerID= $this->input->post('lJoinerID');
			$name= $this->input->post('name');
			$fname= $this->input->post('fname');
			$address= $this->input->post('address');
			$pinno= $this->input->post('pinno');
			$mobile= $this->input->post('mobile');
			$aadhar= $this->input->post('aadhar');
			$gender= $this->input->post('customRadioInline1');
			$dob= $this->input->post('dob');
			$password= $this->input->post('password');
			//$parent_id= $this->input->post('parent_id');
			$city= $this->input->post('city');
			$state= $this->input->post('state');
			$panno= $this->input->post('panno');
			$left = $this->tree->selectlegleft($cid);
			$right = $this->tree->selectlegright($cid);
			if($this->input->post("selectTree")==1){
			$postition = $left;
			$po ="left";
			$pojiner="leftjoiner";
			}else{
			$postition = $right;
			$po ="right";
			$pojiner="rightjoiner";
			}
			//echo $rjoinerID;
			$data= array(
					'parent_id'=>$postition,
					'joiner_id'=>$cid,
					'customer_name'=>$name,
					'username'=>$username,
					'password'=>$password,
					'mobilenumber'=>$mobile,
					'current_address'=>$address,
					'city'=>$city,
					'state'=>$state,
					'gender'=>$gender,
					'pin'=>$pinno,
					'pannumber'=>$panno,
					'adhaarnumber'=>$aadhar,
					'status'=>0,
					'joining_date'=>date('Y-m-d'),
					'dob'=>$dob
			);
			if($this->cmodel->insertCustomer($data)){
			
			
				$datatree = array(
						$po => $maxid,
						$pojiner => $cid
						 
				);
				if($this->tree->position($datatree,$postition,$po)){
					 $msg = "Dear " . $name . " Your Registration is successfully Done,Your Username is ".$username." and password is ".$password.
							"Please Login to update your details And Contact to Admin for Activate your account";
                 		sms($mobile, $msg);
					redirect('clogin/cconpage/'.$maxid);
				}
			}else{
				echo "error";
			}
			
			
			}
			else{
				
				$this->customer_reg();
			}	
		}
		
		function cconpage(){
			
			$data['crecord'] = $this->cmodel->getCrecord($this->uri->segment(3));
			$data['pageTitle'] = 'Customer Registration';
			$data['smallTitle'] = 'Registration form';
			$data['mainPage'] = 'Customer Registration';
			$data['subPage'] = 'Customer Registration';
			$data['title'] = 'Customer Registration Form';
			$data['headerCss'] = 'headerCss/dashboardCss';
			$data['footerJs'] = 'footerJs/customerJs';
			$data['mainContent'] = 'customer/cconpage';
			$this->load->view("includes/mainContent", $data);
		}
		
		function changeStatus(){
			$data['crecord'] = $this->cmodel->getCrecord($this->session->userdata("customer_id"));
			
			$data['pageTitle'] = 'Customer Registration';
			$data['smallTitle'] = 'Activation Panel';
			$data['mainPage'] = 'Customer Registration';
			$data['subPage'] = 'Customer Registration';
			$data['title'] = 'Customer Registration Form';
			$data['headerCss'] = 'headerCss/dashboardCss';
			$data['footerJs'] = 'footerJs/customerJs';
			$data['mainContent'] = 'customer/changeStatus';
			$this->load->view("includes/mainContent", $data);
		}
		function RequestUpdate(){
			
		}

}