<?php 
Class Home extends CI_Controller{
	public function __construct(){
    parent::__construct();
  }

	public function index(){
		$this->load->view('Start');
		$this->load->view('navber');
		$this->load->view('Menu');
		$this->load->view('Save_job');
		//$this->load->view('test');
		$this->load->view('End');
		/* $this->load->view('Navigation');
		//$this->load->view('Page_Content');
		$this->load->view('Menu');
		$this->load->view('Container');
		$this->load->view('New');
		$this->load->view('Pagination');
		$this->load->view('Footer');*/
		}
	public function in(){
		$this->load->view('Start');
		$this->load->view('navber');
		$this->load->view('Menu');

		$this->load->model('Student_model');
		$res = $this->Student_model->get_last_ten_entries();
		$data['Student_res'] = $res;


		$this->load->view('Test2', $data);
		//$this->load->view('Save_job');
		//$this->load->view('test');
		$this->load->view('End');
	}

}