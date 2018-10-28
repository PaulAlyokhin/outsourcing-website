<?php

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->model('Jobs_model');
    }

    public function index(){
    	$data['models'] = $this->Jobs_model->get_all_jobs();
        $this->load->view('template/header');
        $this->load->view('home/home',$data);
        $this->load->view('template/footer');
    }
}