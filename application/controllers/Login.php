<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	
	public function __construct()
    {
        parent::__construct();
        $this->load->library("session");

        if($this->session->userdata('nom'))
                 {
                 redirect('home');
             }
          $this->load->library('form_validation');
          
    }
	
    public function index()
    {
       $this->load->view('template/login.php');
    }
	
	
	
	public function login()
    {

        $this->form_validation->set_rules('password', 'Mot de passe', 'trim|required');
          $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		if ($this->form_validation->run() == true)
        {
        	       $Email = $this->input->post("email");
       				$clef = $this->input->post("password");
					 $result = $this->LoginModel->login($Email, $clef);
					   if($result == '')
					   {
					    redirect('home');
					   }
					   else
					   {
					    $this->session->set_flashdata('message',$result);
					    redirect('login');
					   }
        }
        else{
            $this->index();
        }


    }
	
	
	
}

?>