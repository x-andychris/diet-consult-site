<?php

class Error_404 extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this -> load -> helper('url');
		$this -> load -> helper('form');
		$this -> load -> database();
// 		$this->load->library('session');
    }
    
	public function index()
	{
		$this->load->view('inc/errors/error_404');
	}

}