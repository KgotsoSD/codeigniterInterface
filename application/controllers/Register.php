<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		//$this->load->library('encrypt');
		$this->load->model('register_model');
	}
	public function index()
	{
		
		$data["title"]="Inserting data using Codeigniter";
		$this->load->view("register_page", $data);
	}
    
}

?>