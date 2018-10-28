<?php

class Freelancers extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Freelancers_model');
        $this->load->model('User_model');
    }

    public function single_freelancer($id = 1){
        $data['model'] = $this->User_model->get_information($id);
        $this->load->view('template/header');
        $this->load->view('freelancer/single_freelancer', $data);
        $this->load->view('template/footer');        
    }

    public function browse(){
    	$data['models'] = $this->Freelancers_model->get_all_freelancers();
        $this->load->view('template/header');
        $this->load->view('freelancer/browse_freelancers', $data);
        $this->load->view('template/footer');
    }
}