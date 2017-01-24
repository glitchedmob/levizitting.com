<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Base_Controller extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper("url");
	}

	// Function for creating pages
	function create_page($page_title, $page_view, $custom_css, $custom_js, $data) {
		// Data for the tabs
		$data["active_tab"] = $page_title;
		$data["custom_css"] = $custom_css;
		$data["custom_js"] = $custom_js;

		// Create the page by pulling in the necessary views
		$this->load->view("templates/head", $data);
		$this->load->view("templates/navigation", $data);
		$this->load->view($page_view);
		$this->load->view("templates/footer");
		$this->load->view("templates/js_scripts", $data);
	}
}
?>