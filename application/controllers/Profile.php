<?php

class Profile extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this -> load -> helper('url');
		$this -> load -> helper('form');
		$this -> load -> database();
		$this->load->library('session');
        $this -> load -> model('Accounts_Model');
        $this -> load -> model('DietTypes_Model');
        
        if($this->session->userdata('account_id') == '') { 
			$this->session->set_flashdata('alt',"You have to be logged in to access resource");
			redirect("mealplans"); 
		}
    }

	// ------------------------------------------------------------ (Profile Section) --------------------------------------------------------------
	public function profile()
	{
        $data = [];
		$data["page_title"] = "Profile";

		$userinfo = $this -> Accounts_Model -> get_info($this->session->userdata('account_id'));
		$data["user_info"] = $userinfo;

        $this->render('profile', $data);
	}

	// ------------------------------------------------------------ (Update Profile Section) --------------------------------------------------------------
	public function update_profile_action()
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
			'age' => $_POST['age'],
			'weight' => $_POST['weight'],
			'height' => $_POST['height'],
			'blood_group' => trim($_POST['blood_group']),
			'email' => trim($_POST['email']),
		);

		// setting flash data incase the action isn't successful
		$this->session->set_flashdata('data', json_encode($data));
		
		// getting previous information
		$userinfo = $this -> Accounts_Model -> get_info($this->session->userdata('account_id'));
		
		// checking if an account exists with email
		$userexists = $this -> Accounts_Model -> get_single_by("email", trim($_POST['email']));
		if($userexists && (trim($_POST['email']) != $userinfo -> email)){
			$this->session->set_flashdata('error', 'An account already exists with the email provided');
			redirect($_SERVER['HTTP_REFERER']); return;
		}

		// inserting into the database
		$status = $this -> Accounts_Model -> update($this->session->userdata('account_id'), $data);
		// action if update was successful
		if($status){
			$this->session->set_flashdata('success','Profile Information Updated Successfully');
			redirect($_SERVER['HTTP_REFERER']); return;
		}
		// if not successful
		else{
			$this->session->set_flashdata('error','Error while updating profile info');
			redirect($_SERVER['HTTP_REFERER']); return;
		}
		
		redirect($_SERVER['HTTP_REFERER']);
	}

	// ------------------------------------------------------------ (Update password Section) --------------------------------------------------------------
	public function update_password_action()
	{
		$data = [];
		
		// first checking if a post was made
		if (empty($_POST)){
			$this->session->set_flashdata('error', "Missing Parameters");
		    redirect($_SERVER['HTTP_REFERER']);
		}
		
		// getting the posted data
		$oldpassword = $_POST['oldpassword'];
		$newpassword = $_POST['newpassword'];
		
		// checking if the database password matches the previous password provided by the user
		$userinfo = $this -> Accounts_Model -> get_info($this->session->userdata('account_id'));
		if (password_verify($oldpassword, $userinfo -> password) != true){
			$this->session->set_flashdata('error','Password Incorrect');
			redirect($_SERVER['HTTP_REFERER']); return;
		}
		
		// compiling the information into an array
		$data = array('password' => password_hash($newpassword, PASSWORD_DEFAULT));
		
		// inserting into the database
		$status = $this -> Accounts_Model -> update($this->session->userdata('account_id'), $data);
		// action if update was successful
		if($status){
			$this->session->set_flashdata('success','Password updated successfully');
			redirect($_SERVER['HTTP_REFERER']); return;
		}
		else{
			$this->session->set_flashdata('error','Error while updating password');
			redirect($_SERVER['HTTP_REFERER']); return;
		}
	}

	// ------------------------------------------------------------ (Update meal plan Section) --------------------------------------------------------------
	public function update_mealplan_action()
	{
		$data = [];
		
		// first checking if a post was made
		if (empty($_POST)){
			$this->session->set_flashdata('error', "Missing Parameters");
		    redirect($_SERVER['HTTP_REFERER']);
		}
		
		// checking if the diet type exists
		$diet_exists = $this -> DietTypes_Model -> get_info($_POST['diet_type']);
		if (!diet_exists){
			$this->session->set_flashdata('error','Invalid Diet Type');
			redirect($_SERVER['HTTP_REFERER']); return;
		}
		
		// compiling the information into an array
		$data = array('choosen_plan' => $_POST['diet_type']);
		
		// inserting into the database
		$status = $this -> Accounts_Model -> update($this->session->userdata('account_id'), $data);
		// action if update was successful
		if($status){
			$this->session->set_flashdata('success','Meal plan updated successfully');
			redirect($_SERVER['HTTP_REFERER']); return;
		}
		else{
			$this->session->set_flashdata('error','Error while updating meal plan');
			redirect($_SERVER['HTTP_REFERER']); return;
		}
	}


	// function to render the pages
	public function render($route, $data = [])
	{
	    $this->load->view('inc/site/header', $data);
		$this->load->view('site/profile/'.$route, $data);
        $this->load->view('inc/site/footer', $data);
	}
	
}
?>