<?php
class User_model extends CI_Model {
    
	public function insert(){
		$data = $this->input->post();
		$data['phone'] = $data['mobile'];
		unset($data['mobile']);
		$data['hourly_price'] = $data['last_price'];
		unset($data['last_price']);
		unset($data['first_price']);
		$data['created_at'] = date('Y-m-d h:m:s');
		$this->db->insert('users', $data);
		return $this->db->insert_id();
		//print_r($data);
		//exit;
	}

	public function register_profile(){
		$data = $this->input->post();
		$data['created_at'] = date('Y-m-d h:m:s');
		$data['profile'] = $data['overview'];
		
		$config['upload_path'] = base_url('resources/profile_image');
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile')){
			$data['profile_image'] = array('upload_data' => $this->upload->data());
		}
		$data['profile_image'] = "";
		$data['title'] = $data['job_title'];
		unset($data['job_title']);
		unset($data['overview']);
		$this->db->insert('user_informations', $data);
	}

	public function get_information($id){
		$result = $this->db->get_where('users', array('id' => $id))->result();
		return $result;
	}

	public function get_account($username){
		$result = $this->db->get_where('users', array('username' => $username))->result();
		return $result;
	}
	public function is_exist($username){
		$result = $this->db->get_where('users', array('username' => $username))->result();
		if(!empty($result))
			return TRUE;
		else
			return FALSE;
	}

}
?>