<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gradingsys_m extends CI_Model{

	public function getStudent(){
		$this->db->order_by('id', 'asc');
		$query = $this->db->get('student');
		if($query->num_rows()){
			return $query->result();
		}else{
			return false;
		}

	}

	public function submit(){
		$field = array(
			'prof_id' => $this->input->post('prof_id'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name')
		);
		$this->db->insert('student', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getStudentById($id){
		$this->db->where('id', $id);
		$query = $this->db->get('student');
		if($query->num_rows()){
			return $query->row();
		}else{
			return false;
		}

	}

	public function update(){
		$id = $this->input->post('student_id');
		$field = array(
			'prof_id' => $this->input->post('prof_id'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name')
		);
		$this->db->where('id', $id);
		$this->db->update('student', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('student');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}


?>