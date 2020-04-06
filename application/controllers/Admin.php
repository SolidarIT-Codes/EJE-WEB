<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class admin extends  CI_Controller{
	
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
        $this->partnlist();
    }

    public function showblood($value='')
    {
		
    	$data['userdata'] =	$this->BloodModel->showusers();
    	return $data;
    }

	 public function partnlist()
    {
	
    	$data['blooddata'] = $this->BossModel->showpart();
    	$this->load->view('template/inc/header.php');
		$this->load->view('template/responsable/viewpart.php',$data);
		$this->load->view('template/inc/footer.php');
    	
    }
    public function delpartnlist($id)
    {
        $data = array(
                   'miseajour' => $this->BossModel->suppr($id),
            'blooddata' => $this->BossModel->showpart()
        );
        $this->load->view('template/inc/header.php');
        $this->load->view('template/responsable/viewpart.php',$data);
        $this->load->view('template/inc/footer.php');
       
        
    }

    public function donneurlist()
    {
    
        $data['blooddata'] = $this->BossModel->showdon();
        $this->load->view('template/inc/header.php');
        $this->load->view('template/responsable/viewdonneur.php',$data);
        $this->load->view('template/inc/footer.php');
        
    }
    public function translist()
    {
    
        $data['blooddata'] = $this->BossModel->showtrans();
        $this->load->view('template/inc/header.php');
        $this->load->view('template/responsable/viewtrans.php',$data);
        $this->load->view('template/inc/footer.php');
        
    }

    public function doclist()
    {
    
        $data['blooddata'] = $this->BossModel->showdoc();
        $this->load->view('template/inc/header.php');
        $this->load->view('template/responsable/viewdoc.php',$data);
        $this->load->view('template/inc/footer.php');
        
    }

    public function userlist()
    {
    
        $data['blooddata'] = $this->BossModel->showind();
        $this->load->view('template/inc/header.php');
        $this->load->view('template/responsable/viewuser.php',$data);
        $this->load->view('template/inc/footer.php');
        
    }
    //--------//



    public function edit($id = "")
    {
        $this->load->view('template/inc/header.php');
        $data = array(
            "blooddata"	=> $this->BossModel->getsinglepart($id)
        );
        $this->load->view("template/responsable/editage",$data);
        $this->BossModel->edit($id);
        $this->load->view('template/inc/footer.php');
    }

    public function update()
    {
        $id = $this->input->post("id");
        
        $new_data['Groupe'] 	    = $this->input->post('groupe');
        $new_data['rhesus']  	= $this->input->post('rhesus');
       // $new_data['quantite'] 	= $this->input->post('quantite');


        echo $this->BossModel->updateblood($id,$new_data);
        $this->donneurlist();
    }

    public function view($id = "")
    {
       $this->load->view('template/inc/header.php');
	   $data['blooddata'] = $this->BossModel->getsinglepart($id);
       $this->load->view('template/responsable/viewdetails.php',$data);
       $this->load->view('template/inc/footer.php');
    }
	
	
	
}