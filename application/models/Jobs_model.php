<?php
class Jobs_model extends CI_Model {
    
    public function get_all_jobs(){
    	$result = $this->db->get('jobs')->result();
    	return $result;
    }

    public function get_Job($id = 1){
    	$result = $this->db->get_where('jobs', array('id' => $id))->result();
    	return $result;
    }

    public function get_proposal($id = 1){
        $result = $this->db->get_where('propose_information', array('parent_job_id' => $id))->result();
        return $result;
    }

	public function insert(){
		$data = $this->input->post();
		$data['created_at'] = date('Y-m-d h:m:s');
		$data['user_id'] = $this->session->userdata['userid'];
		$this->db->insert('Jobs', $data);
	}

    public function apply_propose($id){
        $data = $this->input->post();
        $today = date('Y-m-d hh:mm:ss');
        $query = "INSERT INTO propose_information SET propose = '".$data['proposal']."', user_id = ".$this->session->userdata['userid'].", parent_job_id = ".$id.", price = ".$data['price'].", created_at = '".$today."'";
        $this->db->query($query);
    }

}
?>