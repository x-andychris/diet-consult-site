<?php

class MyMealPlan extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this -> load -> helper('url');
		$this -> load -> helper('form');
		$this -> load -> database();
		$this->load->library('session');
        $this -> load -> model('Accounts_Model');
        $this -> load -> model('DietTypes_Model');
        $this -> load -> model('Foods_Model');
        $this -> load -> model('Liquids_Model');
        $this -> load -> model('Snacks_Model');
        
        if($this->session->userdata('account_id') == '') { 
			$this->session->set_flashdata('alt',"You have to be logged in to access resource");
			redirect(""); 
		}
		
		// clear cookies
		if (isset($_SERVER['HTTP_COOKIE'])) {
			$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
			foreach($cookies as $cookie) {
				$parts = explode('=', $cookie);
				$name = trim($parts[0]);
				setcookie($name, '', time()-1000);
				setcookie($name, '', time()-1000, '/');
			}
		}
    }

	// ------------------------------------------------------------ (Meal Plan Section) --------------------------------------------------------------
	public function mealplan()
	{
        $data = [];
		$data["page_title"] = "My Meal Plan";

		$userinfo = $this -> Accounts_Model -> get_info($this->session->userdata('account_id'));
		
		// checking if meal plan exists
		$mealplan_info = $this -> DietTypes_Model -> get_info($userinfo -> choosen_plan);
		if (!$mealplan_info){
			$data["page_title"] = "404";
			$this->load->view('inc/site/header', $data);
			$this->load->view('inc/errors/error_404'); 
			$this->load->view('inc/site/footer', $data); return;
		}

		// getting information associated with plan
		$mealplan_foods = $this -> Foods_Model -> get_multiple_by("diet_type_id", $userinfo -> choosen_plan);
		$mealplans = $this -> DietTypes_Model -> get_all();
		
		$data["mealplan_info"] = $mealplan_info;
		$data["mealplan_foods"] = $mealplan_foods;
		$data["mealplans"] = $mealplans;

        $this->render('myplan', $data);

        // redirect('mealplans/'. $userinfo -> choosen_plan . '/info');
	}

	// ------------------------------------------------------------ (To Eat Section) --------------------------------------------------------------
	public function to_eat_section()
	{
        $data = [];
		$data["page_title"] = "To Eat";

		$userinfo = $this -> Accounts_Model -> get_info($this->session->userdata('account_id'));
		$mealplan_info = $this -> DietTypes_Model -> get_info($userinfo -> choosen_plan);
		$mealplan_foods = $this -> Foods_Model -> get_multiple_by("diet_type_id", $mealplan_info -> diet_type_id);
		
		$data["user_info"] = $userinfo;
		$data["mealplan_info"] = $mealplan_info;
		$data["mealplan_foods"] = $mealplan_foods;

        $this->render('to_eat', $data);
	}

	// ------------------------------------------------------------ (To Avoid Section) --------------------------------------------------------------
	public function to_avoid_section()
	{
        $data = [];
		$data["page_title"] = "To Avoid";

		$userinfo = $this -> Accounts_Model -> get_info($this->session->userdata('account_id'));
		$mealplan_info = $this -> DietTypes_Model -> get_info($userinfo -> choosen_plan);
		$mealplan_foods = $this -> Foods_Model -> get_multiple_by("diet_type_id", $mealplan_info -> diet_type_id);
		
		$data["user_info"] = $userinfo;
		$data["mealplan_info"] = $mealplan_info;
		$data["mealplan_foods"] = $mealplan_foods;

        $this->render('to_avoid', $data);
	}

	// ------------------------------------------------------------ (To Drink Section) --------------------------------------------------------------
	public function to_drink_section()
	{
        $data = [];
		$data["page_title"] = "To Drink";

		$userinfo = $this -> Accounts_Model -> get_info($this->session->userdata('account_id'));
		$mealplan_info = $this -> DietTypes_Model -> get_info($userinfo -> choosen_plan);
		$mealplan_liquids = $this -> Liquids_Model -> get_multiple_by("diet_type_id", $mealplan_info -> diet_type_id);
		
		$data["user_info"] = $userinfo;
		$data["mealplan_info"] = $mealplan_info;
		$data["mealplan_liquids"] = $mealplan_liquids;

        $this->render('to_drink', $data);
	}

	// ------------------------------------------------------------ (To Snack Section) --------------------------------------------------------------
	public function to_snack_section()
	{
        $data = [];
		$data["page_title"] = "Snacks";

		$userinfo = $this -> Accounts_Model -> get_info($this->session->userdata('account_id'));
		$mealplan_info = $this -> DietTypes_Model -> get_info($userinfo -> choosen_plan);
		$mealplan_snacks = $this -> Snacks_Model -> get_multiple_by("diet_type_id", $mealplan_info -> diet_type_id);
		
		$data["user_info"] = $userinfo;
		$data["mealplan_info"] = $mealplan_info;
		$data["mealplan_snacks"] = $mealplan_snacks;

        $this->render('to_snack', $data);
	}

	// ------------------------------------------------------------ (Shopping List Section) --------------------------------------------------------------
	public function shoppinglist_section()
	{
        $data = [];
		$data["page_title"] = "Shopping List";

		$userinfo = $this -> Accounts_Model -> get_info($this->session->userdata('account_id'));
		$mealplan_info = $this -> DietTypes_Model -> get_info($userinfo -> choosen_plan);
		$mealplan_foods = $this -> Foods_Model -> get_multiple_by("diet_type_id", $mealplan_info -> diet_type_id);
		$mealplan_liquids = $this -> Liquids_Model -> get_multiple_by("diet_type_id", $mealplan_info -> diet_type_id);
		$mealplan_snacks = $this -> Snacks_Model -> get_multiple_by("diet_type_id", $mealplan_info -> diet_type_id);
		
		$data["user_info"] = $userinfo;
		$data["mealplan_info"] = $mealplan_info;
		$data["mealplan_foods"] = $mealplan_foods;
		$data["mealplan_liquids"] = $mealplan_liquids;
		$data["mealplan_snacks"] = $mealplan_snacks;

        $this->render('shoppinglist', $data);
	}


	// function to render the pages
	public function render($route, $data = [])
	{
	    $this->load->view('inc/site/header', $data);
		$this->load->view('site/mymealplan/'.$route, $data);
        $this->load->view('inc/site/footer', $data);
	}
	
}
?>