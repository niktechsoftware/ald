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
	{
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
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */