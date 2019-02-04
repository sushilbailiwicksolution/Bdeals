<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('admin/Users_model', 'user');
		if( $this->user->validateCustomer() ){
			//Code to show view of user after login
			redirect('admin/home');
		}else{
			$this->load->library('parser');
			$this->load->helper('html');
			$header['title']  = 'Business Deals Admin';
			$this->load->view('admin/login');
		}
	}

	public function logout(){
		log_message('debug', 'In LOGOUT');
		$this->session->sess_destroy();
		redirect('admin/login');
	}

}
