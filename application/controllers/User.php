<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class user extends  CI_Controller{
    	
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
        $this->load->view('template/sign.php');
    }

    



	public function saveuser()
	{

        $this->form_validation->set_rules('statut', 'Statut', 'trim|required');
          $this->form_validation->set_rules('nom', 'Nom', 'trim|required|min_length[5]|max_length[52]');
          $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
          $this->form_validation->set_rules('mp', 'Mot de Passe', 'required|min_length[5]|max_length[52]');
        $this->form_validation->set_rules('mpc', 'Mot de passe Confirmation', 'required|matches[mp]');
		if ($this->form_validation->run() == true)
        {
		$data['Statut'] 		=  $this->input->post('statut');
		$data['Nom']	 	=  $this->input->post('nom');
		$data['Email'] 	=  $this->input->post('email');
		$data['clef']		=  $this->input->post('mp');
		
		
			$result = $this->HomeModel->adduser($data);
            if ($data['Statut'] == 1) {
               $resolution = $this->HomeModel->userupdate($data['Nom']);
            }
            
            redirect('login');
        }
        else{
            $this->index();
        }
	}



	 public function userlist($value='')
    {
	
    	$data['userdata'] =	$this->HomeModel->showusers();
    	$this->load->view('template/inc/header.php');
		$this->load->view('template/user/viewuser.php',$data);
		$this->load->view('template/inc/footer.php');
    	
    }



    public function edituser($userid = "")
    {
        $this->load->view('template/inc/header.php');
        $data = array(
            "userdata"	=> $this->HomeModel->getsingleuser($userid)

        );
        $this->load->view("template/home/edituser",$data);
        //$this->HomeModel->getsingleuser($userid);
        $this->HomeModel->edituser($userid);
        $this->load->view('template/inc/footer.php');
    }

    public function updateuser()
    {
        $id = $this->input->post("id");
        
        $new_data['name'] 	    = $this->input->post('name');
        $new_data['email']  	= $this->input->post('email');
        $new_data['address'] 	= $this->input->post('address');
        $new_data['mobile'] 	= $this->input->post('mobile');
        $new_data['sex'] 		=  $this->input->post('sex');


        echo $this->HomeModel->updateuser($id,$new_data);
        redirect("user");
    }

    public function viewuser($userid = "")
    {
       $this->load->view('template/inc/header.php');
	   $data['userdata'] = $this->HomeModel->getsingleuser($userid);
       $this->load->view('template/home/viewuser.php',$data);
       $this->load->view('template/inc/footer.php');
    }
	
public function deconnexion()
{

$this->session->unset_userdata('nom');
$this->session->unset_userdata('statut');   
$this->session->unset_userdata('role');    
$this->session->sess_destroy();
// Redirige vers la page d'accueil
redirect();
}
     
	
	
	
}