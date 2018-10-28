<?php
class Freelancers_model extends CI_Model {

	public function get_all_freelancers(){
		$results = $this->db->get_where('users', array('type' => 'Freelancer'))->result();
		return $results;
	}
    
}
?>