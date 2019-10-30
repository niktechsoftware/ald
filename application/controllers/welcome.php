<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}


	public function aboutus()
	{
		$this->load->view('about_us');
	}

	public function legal()
	{
		$this->load->view('legal');
	}
	public function bankdetails()
	{
		$this->load->view('bank_details');
	}
	public function bookproduct()
	{
		$this->load->view('booking_products');
	}
	
	public function registration()
	{ $this->load->library("form_validation");
		$this->load->view('registration');
	}
public function contact()
	{
		$this->load->view('contact_us');
	}
	public function read()
	{
		
		$this->load->view('read');
	}
	
	function insertCustmer(){
		$this->load->library("form_validation");
		$this->load->model("cmodel");
		$this->load->helpers("sms_helper");
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
			$tblnm ="customer_info";
			$maxid	=	$this->cmodel->cust_max($tblnm);
			
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
			//echo $cid; exit();
			$left = $this->cmodel->selectlegleft($cid);
		//echo $cid;exit();
			$right = $this->cmodel->selectlegright($cid);
			
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
				if($this->cmodel->position($datatree,$postition,$po)){
					 $msg = "Dear " . $name . " Your Registration is successfully Done,Your Username is ".$username." and password is ".$password.
							"Please Login to update your details And Contact to Admin for Activate your account";
                 	sms($mobile, $msg);
					redirect('welcome/cconpage/'.$maxid);
				}
			}else{
				echo "error";
			}
			
			
			}
			else{
				
				$this->registration();
			}	
		}
		
		
		
		
		function checkID(){
        $this->load->model("cmodel");
        $parentID= $this->input->post('parent_id');
        //print_r($parentID);

        $getvalue = $this->cmodel->checkStatus("customer_info",$parentID);
        echo (json_encode($getvalue));
    }
		
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */