<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class campagne extends  CI_Controller{

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
			$this->load->view('template/home/formulaire.php');
			$this->load->view('template/inc/footer.php');
	    }

    public function addcamp()
    {

        $this->form_validation->set_rules('titre', 'Titre', 'trim|required|min_length[5]|max_length[52]');
          $this->form_validation->set_rules('moment', 'Date', 'required');
          $this->form_validation->set_rules('ville', 'Ville', 'required|trim');
          $this->form_validation->set_rules('heure', 'Heure', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');
		if ($this->form_validation->run() == true)
        {

    $donne['img_url']="";
    
      $this->load->library('ciqrcode');
      $qr_image=rand().'.png';
      $params['data'] = $this->input->post('titre');
      $params['level'] = 'H';
      $params['size'] = 8;
      $params['savename'] =FCPATH."assets/uploads/qr_image/".$qr_image;
      $params['todb'] = "assets/uploads/qr_image/".$qr_image;
      if($this->ciqrcode->generate($params))
      {
        $donne['img_url']=$qr_image; 
      }
    

		$data['titre'] 		=  $this->input->post('titre');
		$data['moment']	 	=  $this->input->post('moment');
		$data['ville'] 	=  $this->input->post('ville');
		$data['heure']		=  $this->input->post('heure');
		$data['description']		=  $this->input->post('desc');
		$data['proprio']  =  $this->session->userdata('nom');
    $data['link']  =  $params['todb'];
		
			$result = $this->HomeModel->addcamp($data);
            $this->ok();
        }
        else{
            $this->index();
        }

    }

    public function campagne_a_venir()
    {
      $data['camp'] =  $this->HomeModel->showcamp($this->session->userdata('nom'));
      $this->load->view('template/inc/header.php');
      $this->load->view('template/home/campagnenext.php',$data);
      $this->load->view('template/inc/footer.php');
    }

    public function ok()
    {
        
		$this->load->view('template/inc/header.php');
		$this->load->view('template/home/valide.php');
		$this->load->view('template/inc/footer.php');
    }

}
?>