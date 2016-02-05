<?php 
class About extends CI_Controller{





	function __construct(){

		parent:: __construct();
		$this->load->model('navigation_menu_model');
	}


	function index(){

		$navigation_menu=$this->navigation_menu_model->getNavigationmenu();
		$data['navigation_menu'] =$navigation_menu;
		$data['current_page']=$navigation_menu['ABOUT'];
		$this->load->view('include/header',$data);
		$this->load->view('about/about.php');
		$this->load->view('include/footer',$data);
	}
}