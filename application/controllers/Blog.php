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
		
		$this->create_page("Blog", "blog", array(base_url()."public/css/blog.css"), NULL, $data);
	}

}
?>