<?php


class MY_Controller extends CI_Controller{
	

	function __construct(){

		parent::__construct();

		$this->load->library('session');
	}

	function check_session(){

		return ($this->session->userdata('is_logged_in'));

	}

}

?>