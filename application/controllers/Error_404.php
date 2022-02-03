<?php

class Error_404 extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this -> load -> helper('url');
		$this -> load -> helper('form');
		$this -> load -> database();
		$this->load->library('session');
    }
    
	public function index()
	{
        $data = [];
		$data["page_title"] = "404";

		$this->render($data);
	}

	// function to render the pages
	public function render($data = [])
	{
	    $this->load->view('inc/site/header', $data);
		$this->load->view('inc/errors/error_404', $data);
        $this->load->view('inc/site/footer', $data);
	}

}