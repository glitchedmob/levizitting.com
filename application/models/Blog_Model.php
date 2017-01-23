<?php
	class Blog_Model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		public function get_posts($slug = FALSE) {
			if ($slug === FALSE) {
				$query = $this->db->get("blog_posts");
				return $query->result_array();
			}

			$query = $this->db->get_where("blog_posts", array("slug" => $slug));
			return $query->row_array();
		}
	}
?>