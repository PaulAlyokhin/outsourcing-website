<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper(array('form', 'url'));
	}

	public function login(){
		$data = $this->input->post();
		print_r($data);
		if($this->User_model->is_exist($data['username'])){
			$account = $this->User_model->get_account($data['username']);
			if($data['password'] == $account[0]->password){
				if(isset($this->session)){
					session_destroy();
				}
				session_start();
				$this->session->set_userdata('userid', $account[0]->id);
				$this->session->set_userdata('username', $account[0]->username);
				$this->session->set_userdata('type', $account[0]->type);
				redirect('home/index');
			}
			else{
				echo "<script>alert('Not incorrect password!')</script>";
				redirect('home/index');
			}
		}
		else{
			echo "<script>alert('Not registered Username!')</script>";
			redirect('home/index');
		}
	}

	public function logout(){
		session_destroy();
		redirect('home/index');
	}

	public function register($id){
		if($id == 1){
			$data['id'] = $id;
			$this->load->view('template/header');
			$this->load->view('home/register', $data);
			$this->load->view('template/footer');
		}
		if($id == 2){
			$data = $this->input->post();
			$data['id'] = $id;
			$this->load->view('template/header');
			$this->load->view('home/register', $data);
			$this->load->view('template/footer');
		}
		if($id == 3){
			$data = $this->input->post();
			$data['id'] = $id;
			$data['user_id'] = $this->User_model->insert();
			//print_r($user_id);
			//exit;
			$this->load->view('template/header');
			$this->load->view('home/register', $data);
			$this->load->view('template/footer');
		}
	}

	public function register_profile(){
		$data = $this->input->post();
		//print_r($data);
		//exit;
		$this->User_model->register_profile();
		redirect('Jobs/browse');
	}

	public function reset(){

	}
}
