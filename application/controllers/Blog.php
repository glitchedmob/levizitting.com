<?php
defined("BASEPATH") OR exit("No direct script access allowed");
require_once("Base_Controller.php");

class Blog extends Base_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->create_page("Blog", "blog", array(base_url()."public/css/blog.css"), NULL);
	}

}
?>