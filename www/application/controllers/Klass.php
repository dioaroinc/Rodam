<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klass extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> model('common_model');
		$this -> load -> helper(array('url', 'date', 'form'));
	}
	
	public function index(){
		
	
		$data['now_loc'] = "class";
		$data['now_title'] = "클래스";
		
			
		$this->load->view('layout/header', $data);
		$this->load->view('jsc/index', $data);
		$this->load->view('klass/index', $data);
		$this->load->view('layout/footer', $data);					

	}	
	
	public function use(){
		
	
		$data['now_loc'] = "use";
		$data['now_title'] = "포장";
		
			
		$this->load->view('layout/header', $data);
		$this->load->view('jsc/index', $data);
		$this->load->view('klass/use', $data);
		$this->load->view('layout/footer', $data);					

	}		
		
}
