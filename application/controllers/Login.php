<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_site extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Login_page');
	}
    
}

?>