<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends  CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");

		if(!$this->session->userdata('nom'))
				 {
				 redirect('login');
			 }
		  $this->load->library('form_validation');
		  
    }
    public function index()
    {
       $this->load->view('template/inc/header.php');
       $this->load->view('template/home/home.php');
       $this->load->view('template/inc/footer.php');
    }

    
	
	
	
	


	
	

}

?>