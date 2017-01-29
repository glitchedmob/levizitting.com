<?php
defined("BASEPATH") OR exit("No direct script access allowed");
require_once("Base_Controller.php");

class Blog extends Base_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model("blog_model");
	}

	public function index() {
		$data["blog_posts"] = $this->blog_model->get_posts();

		$page_data = array(
			"page_title" => "Levi Zitting - Programmer, Creator, and Life Long Learner",
			"active_tab" => "Blog",
			"view" => "blog",
			"custom_css" => array(
				base_url()."public/css/blog.css"
			),
			"custom_js" => NULL
		);
		
		$this->create_page($page_data, $data);
	}

}
?>