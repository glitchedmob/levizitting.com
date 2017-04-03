<?php
defined("BASEPATH") OR exit("No direct script access allowed");
require_once("Base_Controller.php");

class Main extends Base_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$page_data = array(
			"page_title" => "Levi Zitting - Programmer, Creator, and Life Long Learner",
			"active_tab" => "Home",
			"view" => "home",
			"custom_css" => array(
				base_url()."public/css/home.css"
			),
			"custom_js" => array(
				base_url()."public/js/morphext.min.js",
				base_url()."public/js/home.js"
			)
		);

		$this->create_page($page_data, NULL);
	}

	public function projects() {
		$page_data = array(
			"page_title" => "Levi Zitting - Programmer, Creator, and Life Long Learner",
			"active_tab" => "Projects",
			"view" => "projects",
			"custom_css" => array(
				base_url()."public/css/projects.css"
			),
			"custom_js" => NULL
		);

		$this->create_page($page_data, NULL);
	}

	public function about() {
		$page_data = array(
			"page_title" => "Levi Zitting - Programmer, Creator, and Life Long Learner",
			"active_tab" => "About",
			"view" => "about",
			"custom_css" => array(
				base_url()."public/css/about.css"
			),
			"custom_js" => NULL
		);

		$this->create_page($page_data, NULL);
	}

	public function contact() {
		$page_data = array(
			"page_title" => "Levi Zitting - Programmer, Creator, and Life Long Learner",
			"active_tab" => "Contact",
			"view" => "contact",
			"custom_css" => array(
				base_url()."public/css/contact.css"
			),
			"custom_js" => NULL
		);

		$this->create_page($page_data, NULL);
	}
}
?>