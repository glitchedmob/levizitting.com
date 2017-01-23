<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Main extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper("url");
	}


	private function create_page($page) {
		// Data for the tabs
		$data["tabs_left"] = array("Home", "Blog", "Projects");
		$data["tabs_right"] = array("About", "Contact");
		$data["active_tab"] = $page;

		// Create the page by pulling in the necessary views
		$this->load->view("templates/head");
		$this->load->view("templates/navigation", $data);
		$this->load->view(strtolower($page));
		$this->load->view("templates/js_scripts");
	}

	public function index() {
		$this->create_page("Home");
	}

	public function blog() {
		$this->create_page("Blog");
	}

	public function projects() {
		$this->create_page("Projects");
	}

	public function about() {
		$this->create_page("About");
	}

	public function contact() {
		$this->create_page("Contact");
	}
}
?>