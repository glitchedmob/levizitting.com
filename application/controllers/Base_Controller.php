<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Base_Controller extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->helper("url");
  }

  /**
  * This function creates a page based on data that is passed in
  *
  * The first argument is an array of data to be used in templating
  * The second argument is an array of data to be used within the view
  *
  * Example of data to pass in for first argument
  * $page_data = array(
  *   "page_title" => "Title of tab",
  *   "active_tab" => "Home",
  *   "view" => "home",
  *   "custom_css" => array(base_url()."public/css/home.css"),
  *   "custom_js" => array(base_url()."public/js/home.js")
  * );
  *
  */
  function create_page($page_data, $data) {
    // Data for the tabs4
    $data["title"] = $page_data["page_title"];
    $data["active_tab"] = $page_data["active_tab"];
    $data["custom_css"] = $page_data["custom_css"];
    $data["custom_js"] = $page_data["custom_js"];

    // Create the page by pulling in the necessary views
    $this->load->view("templates/head", $data);
    $this->load->view("templates/navigation", $data);
    $this->load->view($page_data["view"]);
    $this->load->view("templates/footer");
    $this->load->view("templates/js_scripts", $data);
  }
}

?>