<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu','url'));
	}

	public function index(){
		$data['menu'] = main_menu();
		$this->load->view('login',$data);
	}
	public function menu(){
		$this->load->view('menu.php');
	}
}
