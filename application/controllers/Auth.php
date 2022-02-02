<?php

class Auth extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this -> load -> helper('url');
		$this -> load -> helper('form');
		$this -> load -> database();
		$this->load->library('session');
        $this -> load -> model('Accounts_Model');
        
        if($this->session->userdata('account_id') != '') { redirect("my/mealplan"); }
    }

	// ------------------------------------------------------------ (Login Section) --------------------------------------------------------------
	public function login()
	{
        $data = [];
		$data["page_title"] = "Login";

        $this->render('login', $data);
	}
	
	public function login_action()
	{
        $data = [];
        
        // first checking if a post was made
        if (empty($_POST)){
		    $this->session->set_flashdata('error', "Missing Parameters");
		    redirect($_SERVER['HTTP_REFERER']);
        }
        
        $email= $_POST['email'];
        $password = $_POST['password'];
        
		// checking the user information
		$userinfo = $this -> Accounts_Model -> auth_user($email, $password);

		// setting flash data incase the login action isn't successful
		$this->session->set_flashdata('email', $email);
		$this->session->set_flashdata('password', $password);
		
		// if no user matches the email and password
		if(!$userinfo){
			$this->session->set_flashdata('error', 'Incorrect Username or Password');
			redirect($_SERVER['HTTP_REFERER']); return;
		}

		// Saving the necessary information to session
		$this->session->set_userdata('account_id', ''. $userinfo -> account_id);
		$this->session->set_userdata('first_name', ''. $userinfo -> first_name);
		$this->session->set_userdata('diet_type', ''. $userinfo -> choosen_plan);
		
		redirect($_SERVER['HTTP_REFERER']);
	}

	// ------------------------------------------------------------ (Register Section) --------------------------------------------------------------
	public function register()
	{
		$data = [];
		$data["page_title"] = "Register";

		$this-> render('register', $data);
	}

	public function register_action()
	{
		$data = [];
		
		// first checking if a post was made
		if (empty($_POST)){
			$this->session->set_flashdata('error', "Missing Parameters");
		    redirect($_SERVER['HTTP_REFERER']);
		}
		// compiling the information to be inserted
	    $data = array(
			'first_name' => trim($_POST['first_name']),
			'last_name' => trim($_POST['last_name']),
			'gender' => trim($_POST['gender']),
			'dob' => $_POST['dob'],
			'weight' => $_POST['weight'],
			'height' => $_POST['height'],
			'blood_group' => trim($_POST['blood_group']),
			'email' => trim($_POST['email']),
			'password' => password_hash(trim($_POST['password']), PASSWORD_DEFAULT),
			// 'choosen_plan' => $_POST['choosen_plan'],
		);

		// setting flash data incase the register action isn't successful
		$this->session->set_flashdata('data', json_encode($data));
		
		// checking if an account exists with email
		$userexists = $this -> Accounts_Model -> get_single_by("email", trim($_POST['email']));
		if($userexists){
			$this->session->set_flashdata('error', 'An account already exists with the email provided');
			redirect($_SERVER['HTTP_REFERER']); return;
		}

		// inserting into the database
		$status = $this -> Accounts_Model -> add($data);
		// action if insert was successful
		if($status){
			$this->session->set_flashdata('success','Account Created Successfully');
			redirect($_SERVER['HTTP_REFERER']); return;
		}
		// if not successful
		else{
			$this->session->set_flashdata('error','Error while creating account');
			redirect($_SERVER['HTTP_REFERER']); return;
		}
		
		redirect($_SERVER['HTTP_REFERER']);
	}

	// ------------------------------------------------------------ (Logout Section) --------------------------------------------------------------
	public function logout_action()
	{
		$this->session->set_userdata('account_id', '');
		$this->session->set_userdata('first_name', '');
		$this->session->set_userdata('diet_type', '');
		
		redirect('login');
	}

	// function to render the pages
	public function render($route, $data = [])
	{
	    $this->load->view('inc/site/header', $data);
		$this->load->view('site/auth/'.$route, $data);
        $this->load->view('inc/site/footer', $data);
	}
	
}
?>