<?php

class HOME extends CI_Controller{
	




	/*default function */

	function __construct(){

		parent::__construct();
		$this->load->model('navigation_menu_model');
		$this->load->model('testimonial_model');

	}


	function index(){

//$this->load->view('home');
		$this->home();


	}

	function home(){


		$navigation_menu=$this->navigation_menu_model->getNavigationmenu();
		$testimonials=$this->testimonial_model->getTestimonialList();
		
		$data['navigation_menu'] =$navigation_menu;
		$data['current_page']=$navigation_menu['HOME'];
		$data['testimonial_list'] =$testimonials;
		
		$this->load->view('include/header',$data);
		$this->load->view('home/index',$data);
		$this->load->view('include/footer',$data);

	}


public function test(){

	$this->form_validation->set_rules('loan-amount','Loan amount','trim|required');
	$this->form_validation->set_rules('interest-rate','Interest rate','trim|required');
	$this->form_validation->set_rules('loan-term','Loan term','trim|required');

	if($this->form_validation->run()){
	
	$amount=$this->input->post('loan-amount');
	$down_payment=$this->input->post('down-payment');
	$rate=$this->input->post('interest-rate');
	$term=$this->input->post('loan-term');
	$payment_type=$this->input->post('payment-type');
	$payment_frequency=$this->input->post('payment-frequency');

	$payment=$amount*$rate*$term;


	switch($payment_frequency){


		case 'weekly':

		break;

		case 'fortnightly':
		break;

		case 'monthly':


		break;



	}


	$data=array(

		'error'=>0, //change to boolean type
		'amount'=>$amount,
		'down_payment'=>$down_payment,
		'rate'=>$rate,
		'term'=>$term,
		'payment_type'=>$payment_type,
		'payment_frequency'=>$payment_frequency,
		'amount_to_pay'=>$payment
		);
	

}


else{

	
$data=array('error'=>1,

			'error_message'=>'error occured please check')	;

}
echo json_encode($data);
}
	
}

?>