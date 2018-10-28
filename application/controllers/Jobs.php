<?php

class Jobs extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Jobs_model');
        $this->load->model('User_model');
    }

    public function browse(){
    	$data['models'] = $this->Jobs_model->get_all_jobs();
        $this->load->view('template/header');
        $this->load->view('Job/browse_jobs', $data);
        $this->load->view('template/footer');
    }

    public function view_single($id = 1, $bid = false){
    	$data['model'] = $this->Jobs_model->get_Job($id);
        $data['proposal'] = $this->Jobs_model->get_proposal($id);
        $data['bid'] = $bid;
        $this->load->view('template/header');
        $this->load->view('Job/single_job', $data);
        $this->load->view('template/footer');
    }

    public function Post(){
    	if(!isset($this->session->userdata['userid']))
    		redirect('home/index');
        $this->load->view('template/header');
        $this->load->view('Job/post');
        $this->load->view('template/footer');
    }

    public function post_job(){
    	$this->Jobs_model->insert();
    	redirect('Jobs/browse');
    }

    public function apply_propose($id){
        $this->Jobs_model->apply_propose($id);
        redirect('Jobs/view_single/'.$id);
    }
}