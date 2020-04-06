<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class recherche extends  CI_Controller{
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
        $this->search();
    }

    public function search()
    {

		$this->load->view('template/inc/header.php');
		$this->load->view('template/home/searchpage.php');
		$this->load->view('template/inc/footer.php');
    }

    public function load()
    {
    	$data['blooddata'] =	$this->BloodModel->showbloodspec($this->input->post('groupe'),$this->input->post('rhesus'));
		$this->load->view('template/inc/header.php');
		$this->load->view('template/home/searchpage.php');
		$this->load->view('template/home/result.php',$data);
		$this->load->view('template/inc/footer.php');
    }

     public function en_cours()
    {
        $data['coursedata'] =    $this->BloodModel->showcourses($this->session->userdata('nom'));
        $this->load->view('template/inc/header.php');
        $this->load->view('template/home/courses.php',$data);
        $this->load->view('template/inc/footer.php');
    }

    public function update_en_cours($id = "")
    {
        $new_data['validation']         = 1;

        $data['coursedata'] =    $this->BloodModel->updatecourses($id,$new_data);
        $this->en_cours();
    }

}
?>