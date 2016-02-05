<?php

class BLOG extends CI_Controller{
	


	function __construct(){


		parent::__construct();
		$this->load->model('navigation_menu_model');
		$this->load->model('blog_model');

	}

	function index(){


		$navigation_menu=$this->navigation_menu_model->getNavigationmenu();
		$data['navigation_menu'] =$navigation_menu;
		$data['current_page']=$navigation_menu['BLOG'];
		$data['blog_list']=$this->blog_model->getBlogList();
		$this->load->view('include/header',$data);
		$this->load->view('blog/blog',$data);
		$this->load->view('include/footer',$data);




	}

	function getBlogItem()
	{
		
		$id = $this->input->get('id');
		$blog_item=$this->blog_model->getBlogItem($id);
		
		$data = array("blog_item"=>$blog_item);
		echo json_encode($data);
		exit;

	}









}


?>


