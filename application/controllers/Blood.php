<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class blood extends  CI_Controller{
	
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
        $this->bloodlist();
    }

    public function showblood($value='')
    {
		
    	$data['userdata'] =	$this->BloodModel->showusers();
    	return $data;
    }





	public function bloodalert()
	{
		$datenow = date("Y-m-d h-m-s");

		$data['Commandeur'] 		=  $this->input->post('commande');
		$data['Destination']	 	=  $this->input->post('destination');
		$data['Temps'] 	            =   $datenow;
		
		
			$result = $this->HomeModel->alert($data);
			$this->load->view('notif.php');
		
		
		
	}

     public function alertconfirm()
    {
    
        $this->load->view('template/inc/header.php');
        $this->load->view('template/user/validate.php');
        $this->load->view('template/inc/footer.php');
        
    }

	 public function bloodlist($value='')
    {
	
    	$data['blooddata'] =	$this->BloodModel->showblood($this->session->userdata('nom'));
    	$this->load->view('template/inc/header.php');
		$this->load->view('template/user/viewblood.php',$data);
		$this->load->view('template/inc/footer.php');
    	
    }



    public function editblood($bloodid = "")
    {
        $this->load->view('template/inc/header.php');
        $data = array(
            "blooddata"	=> $this->BloodModel->getsingleblood($bloodid)

        );
        $this->load->view("template/home/editblood",$data);
        $this->BloodModel->editblood($bloodid);
        $this->load->view('template/inc/footer.php');
    }

    public function updateblood()
    {
        $id = $this->input->post("id");
        
        $new_data['groupe'] 	    = $this->input->post('groupe');
        $new_data['rhesus']  	= $this->input->post('rhesus');
        $new_data['quantite'] 	= $this->input->post('quantite');


        echo $this->BloodModel->updateblood($id,$new_data);
        redirect("blood");
    }

    public function viewblood($bloodid = "")
    {
       $this->load->view('template/inc/header.php');
	   $data['blooddata'] = $this->BloodModel->getsingleblood($bloodid);
       $this->load->view('template/home/viewblood.php',$data);
       $this->load->view('template/inc/footer.php');
    }
	
	
	
}