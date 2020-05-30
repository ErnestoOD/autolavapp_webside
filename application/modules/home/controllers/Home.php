<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        //300 segundos  = 5 minutos
        ini_set('max_execution_time',300);
    }

	public function index(){
		$this->load->view('inicio', FALSE);
    }
}