<?php
defined("BASEPATH") OR exit("No direct script access allowed");
require_once("Base_Controller.php");

class Main extends Base_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->create_page("Home", "home", array(base_url()."public/css/home.css"), NULL);
	}

	public function projects() {
		$this->create_page("Projects", "projects", NULL, NULL);
	}

	public function about() {
		$this->create_page("About", "about", NULL, NULL);
	}

	public function contact() {
		$this->create_page("Contact", "contact", NULL, NULL);
	}
}
?>