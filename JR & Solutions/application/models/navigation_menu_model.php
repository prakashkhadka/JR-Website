<?php


class Navigation_menu_model extends CI_Model{


	function __construct(){

		parent::__construct();


	}



	/* function to return an array of navigation menu items(return type -multidimensional array )*/

	public function getNavigationMenu(){

		$query=$this->db->query('SELECT title, page_url FROM navigation_menu');
		$navigation_menu=array();
		


		foreach ($query->result() as $row) {
			$navigation_menu[$row->title]=array(

				'title'=>$row->title,
				'page_url'=>$row->page_url

				);

		
			


		}
		
		return $navigation_menu;

	}














}



?>
