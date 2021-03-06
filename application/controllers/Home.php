<?php

class Home extends CI_Controller {

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
        $this -> load -> model('Ingredients_Model');
        $this -> load -> model('ShoppingList_Model');

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
	
	// ------------------------------------------------------------ (Home Page) --------------------------------------------------------------
	public function index()
	{
        $data = [];
		$data["page_title"] = "Home";

		$mealplans = $this -> DietTypes_Model -> get_all();
		$data["mealplans"] = $mealplans;

		$userinfo = null;
		if($this->session->userdata('account_id') != '') { 
			$userinfo = $this -> Accounts_Model -> get_info($this->session->userdata('account_id'));
		}

		$data["userinfo"] = $userinfo;

		$this->render('home', $data);
	}

	// ------------------------------------------------------------ (Meal Plans Section) --------------------------------------------------------------
	public function mealplans()
	{
        $data = [];
		$data["page_title"] = "Meal Plans";

		$mealplans = $this -> DietTypes_Model -> get_all();
		$data["mealplans"] = $mealplans;

		$this->render('mealplans', $data);
	}

	// ------------------------------------------------------------ (Meal Plan Info Section) --------------------------------------------------------------
	public function mealplan_info($diet_type_id)
	{
        $data = [];
		
		// checking if meal plan exists
		$mealplan_info = $this -> DietTypes_Model -> get_info($diet_type_id);
		if (!$mealplan_info){
			$data["page_title"] = "404";
			$this->load->view('inc/site/header', $data);
			$this->load->view('inc/errors/error_404'); 
			$this->load->view('inc/site/footer', $data); return;
		}
		
		$data["page_title"] = $mealplan_info -> plan . " (Info)";

		// getting information associated with plan
		$mealplan_foods = $this -> Foods_Model -> get_multiple_by("diet_type_id", $diet_type_id);
		$mealplan_liquids = $this -> Liquids_Model -> get_multiple_by("diet_type_id", $diet_type_id);
		$mealplan_snacks = $this -> Snacks_Model -> get_multiple_by("diet_type_id", $diet_type_id);
		$mealplan_ingredients = $this -> Ingredients_Model -> get_multiple_by("diet_type_id", $diet_type_id);
		$mealplan_accounts = $this -> Accounts_Model -> get_multiple_by("choosen_plan", $diet_type_id);
		$mealplans = $this -> DietTypes_Model -> get_all();
		
		$data["mealplan_info"] = $mealplan_info;
		$data["mealplan_foods"] = $mealplan_foods;
		$data["mealplan_liquids"] = $mealplan_liquids;
		$data["mealplan_snacks"] = $mealplan_snacks;
		$data["mealplan_ingredients"] = $mealplan_ingredients;
		$data["mealplan_accounts"] = $mealplan_accounts;
		$data["mealplans"] = $mealplans;

        $this->render('mealplan_info', $data);
	}

	// ------------------------------------------------------------ (Meal Plan Section) --------------------------------------------------------------
	public function mealplan_plan($diet_type_id)
	{
        $data = [];

		// checking if user is logged in
		if($this->session->userdata('account_id') == '') { 
			$this->session->set_flashdata('alt',"You have to be logged in to access resource");
		    redirect($_SERVER['HTTP_REFERER']); return;
		}
		
		// checking if meal plan exists
		$mealplan_info = $this -> DietTypes_Model -> get_info($diet_type_id);
		if (!$mealplan_info){
			$data["page_title"] = "404";
			$this->load->view('inc/site/header', $data);
			$this->load->view('inc/errors/error_404'); 
			$this->load->view('inc/site/footer', $data); return;
		}
		
		$data["page_title"] = $mealplan_info -> plan . " (Plan)";
		// $data["plan"] = $mealplan_info -> plan . " (Plan)";

		// getting information associated with plan
		$mealplan_foods = $this -> Foods_Model -> get_multiple_by("diet_type_id", $diet_type_id);
		$mealplan_liquids = $this -> Liquids_Model -> get_multiple_by("diet_type_id", $diet_type_id);
		$mealplan_snacks = $this -> Snacks_Model -> get_multiple_by("diet_type_id", $diet_type_id);
		$mealplan_ingredients = $this -> Ingredients_Model -> get_multiple_by("diet_type_id", $diet_type_id);
		$mealplan_accounts = $this -> Accounts_Model -> get_multiple_by("choosen_plan", $diet_type_id);
		$mealplans = $this -> DietTypes_Model -> get_all();
		
		$data["mealplan_info"] = $mealplan_info;
		$data["mealplan_foods"] = $mealplan_foods;
		$data["mealplan_liquids"] = $mealplan_liquids;
		$data["mealplan_snacks"] = $mealplan_snacks;
		$data["mealplan_ingredients"] = $mealplan_ingredients;
		$data["mealplan_accounts"] = $mealplan_accounts;
		$data["mealplans"] = $mealplans;

        $this->render('mealplan_plan', $data);
	}


	// function to render the pages
	public function render($route, $data = [])
	{
	    $this->load->view('inc/site/header', $data);
		$this->load->view('site/home/'.$route, $data);
        $this->load->view('inc/site/footer', $data);
	}

}
?>