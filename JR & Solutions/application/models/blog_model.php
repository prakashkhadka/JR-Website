<?php

class Blog_Model extends CI_Model{


function __construct(){

		parent::__construct();


	}



function getBlogList(){
	$blog_list=array();
	$query=$this->db->query("SELECT * FROM blog ORDER BY id DESC LIMIT 10");
	
	$counter=0;

	foreach($query->result() as $row){

		$converted_date=new DateTime($row->published);
		$blog_data=array(


			'id'=>$row->id,
			'title'=>$row->title,
			'content'=>$row->content,
			'author'=>$row->author,
			'date'=>$converted_date->format('jS M Y')

			);
		$blog_list[$counter]=$blog_data;
		$counter++;

		

	}



return $blog_list;


}


function getBlogItem($id){
$query=$this->db->query("SELECT * FROM blog WHERE id=$id");
$row=$query->result();
$converted_date=new DateTime($row[0]->published);
$blog_item_data=array(


			'id'=>$row[0]->id,
			'title'=>$row[0]->title,
			'content'=>$row[0]->content,
			'author'=>$row[0]->author,
			'date'=>$converted_date->format('jS M Y')
			);
return $blog_item_data;


}
	





}

?>