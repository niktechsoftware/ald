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
	public function customer_profile(){
		$this->load->library("form_validation");
		$data['pageTitle'] = 'Customer Profile';
		$data['smallTitle'] = 'Profile form';
		$data['mainPage'] = 'Customer Profile';
		$data['subPage'] = 'Customer Profile';
		$data['title'] = 'Customer Profile Form';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/customerJs';
		$data['mainContent'] = 'customer/profile';
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
			if($this->uri->segment(4)){
				$cid = $this->uri->segment(4);
			}else{
				$cid=$this->session->userdata("customer_id");
			}
			$data['crecord'] = $this->cmodel->getCrecord($cid);
			$this->load->model("pay_details");
			$pd  = $this->pay_details->checkStatus($cid);
			$data['pd']=$pd;
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

		
		function requestUpdate(){

			$cust_id = $this->session->userdata("customer_id");
			$txn =  $this->input->post("tno");
			$reffno =  $this->input->post("reffno");			
			$file_name   = time().trim($_FILES['photo']['name']); 
			$photo_name = str_replace(' ', '_', $file_name);
			// $val = array('cust_id' => );
			$this->load->model('cmodel');
			$chk = $this->cmodel->pay_detail_insert($cust_id,$txn,$reffno,$photo_name);
			if($chk)
			{				
				$this->load->library('upload');
				$image_path = realpath(APPPATH . '../assets/img/pay/');		  
				  $config['upload_path'] = $image_path;
				  $config['allowed_types'] = 'jpg|jpeg|png|bmp';
				  $config['max_size'] = '500';
				  $config['file_name'] = $photo_name;
				  if (!empty($_FILES['photo']['name']))
				   {
					  
					  print_r($config['file_name']);
					 $this->upload->initialize($config);
					 $a = $this->upload->do_upload('photo');
					 
					 redirect("clogin/changeStatus/success/$cust_id");
					 
					}
					else 
					{
						redirect("clogin/changeStatus/success/$cust_id");
					}
			}
			else
			{
				echo "data not insert";
			}
		}
		function downline(){
			$tabv = $this->uri->segment("3");
			if($tabv==1){
				$table="silver_tree";
			}
			if($tabv==2){
				$table="gold_tree";
			}
			if($tabv==3){
				$table="diamond_tree";
			}
			if($tabv==4){
				$table="crown_tree";
			}
			$lposition="leftjoiner";
			$rposition="rightjoiner";
			$data['crecord'] = $this->cmodel->getCrecord($this->session->userdata("customer_id"));
			$data['left']=$this->tree->mydownline($this->session->userdata("customer_id"),$lposition,$table);
			$data['right']=$this->tree->mydownline($this->session->userdata("customer_id"),$rposition,$table);
			$data['pageTitle'] = 'My Downline';
			$data['smallTitle'] = $table.' Downline';
			$data['mainPage'] = 'Downline';
			$data['subPage'] = 'Downline';
			$data['title'] = 'Customer Downline';
			$data['headerCss'] = 'headerCss/dashboardCss';
			$data['footerJs'] = 'footerJs/customerJs';
			$data['mainContent'] = 'customer/downline';
			$this->load->view("includes/mainContent", $data);
		}
		function tree(){
			$data['crecord'] = $this->cmodel->getCrecord($this->session->userdata("customer_id"));
			$data['pageTitle'] = 'My Tree';
			$data['smallTitle'] = 'My Tree';
			$data['mainPage'] = 'My Tree';
			$data['subPage'] = 'My Tree';
			$data['title'] = 'Customer Tree';
			$data['headerCss'] = 'headerCss/dashboardCss';
			$data['footerJs'] = 'footerJs/customerJs';
			$data['mainContent'] = 'customer/tree';
			$this->load->view("includes/mainContent", $data);
		}
}