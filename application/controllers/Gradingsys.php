<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gradingsys extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('gradingsys_m', 'm');
	}
	function index(){
		$data['students']= $this->m->getStudent();
		$this->load->view('layout/header');
		$this->load->view('gradingsys/index', $data);
		$this->load->view('layout/footer');
	}

	public function add(){
		$this->load->view('layout/header');
		$this->load->view('gradingsys/add');
		$this->load->view('layout/footer');
	}
	public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success msg', 'Record added successfully!');
		}else{
			$this->session->set_flashdata('error msg', 'Failed to add record');
		}
		redirect(base_url('gradingsys/index'));
	}

	public function edit($id){
		$data['students'] = $this->m->getStudentById($id);
		$this->load->view('layout/header');
		$this->load->view('gradingsys/edit', $data);
		$this->load->view('layout/footer');
	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success msg', 'Record updated successfully!');
		}else{
			$this->session->set_flashdata('error msg', 'Failed to update record');
		}
		redirect(base_url('gradingsys/index'));
	}

	public function delete($id){
		$result = $this->m->delete($id);
		if($result){
			$this->session->set_flashdata('success msg', 'Record deleted successfully!');
		}else{
			$this->session->set_flashdata('error msg', 'Failed to delete record');
		}
		redirect(base_url('gradingsys/index'));
	}		
}

?>