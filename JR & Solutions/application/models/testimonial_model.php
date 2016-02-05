<?php
class Testimonial_Model extends CI_Model{

function __construct(){

		parent::__construct();


	}


function getTestimonialList(){

$testimonials =array();

$query=$this->db->query("SELECT * FROM testimonial");
$counter=0;

foreach($query->result() as $row){

$testimonials[$counter]=array(

					'id'=>$row->id,
					'comment'=>$row->comment,
					'client'=>$row->client

					);
$counter++;


}

return $testimonials;




}









}