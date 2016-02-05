<?php


class Contact extends CI_Controller{



	function __construct(){

		parent::__construct();
		$this->load->model('navigation_menu_model');

	}


	public function index(){
		$this->load_contact_view();
		

	}


	/* load contact page content */
	private function load_contact_view($message=NULL){

		$navigation_menu=$this->navigation_menu_model->getNavigationmenu();
		$data['navigation_menu'] =$navigation_menu;
		$data['current_page']=$navigation_menu['CONTACT'];
		$data['message']=$message;
		$this->load->view('include/header',$data);
		$this->load->view('contact/contact.php');
		$this->load->view('include/footer',$data);
		

	}


	/*process contact form */


	public function process_form(){

		if($this->validate_form()){

			if($this->send_email()){

				$message=array('success'=>"Thank you, your email has been successfully sent.");
				$this->load_contact_view($message);
				

			}
			else{

				$message=array('failure'=>"Sorry, unable to send your email please try again.");
				$this->load_contact_view($message);
			}
		}

		else{

			$this->load_contact_view();
		}




	}


	/*process footer  contact form */


	public function process_footer_form(){

		
		$this->form_validation->set_rules('footer-form-name','Name','trim|required|max_length[10]');
		$this->form_validation->set_rules('footer-form-email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('footer-form-phone','Phone Number','trim|required');
		$this->form_validation->set_rules('footer-form-message','Message','trim|required');

		if($this->form_validation->run()){

			

			$data = array(
				'error'=>0,
				'message'=>'Thank you, your message has been sent !'
				);
			
			


		}


		else{
			$errors=$this->form_validation->error_array();
			
			
			$data = array(
				'error'=>1,
				'form_error'=>$errors
				);
			


		}

		echo json_encode($data);







	}

	
	/* validate the form details */

	private function validate_form(){

		$this->form_validation->set_rules('name','Name','trim|required|max_length[10]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('phone','Phone Number','trim|required');
		$this->form_validation->set_rules('message','Message','trim|required');

		if($this->form_validation->run()){


			return true ;

		}

		return false;

	}





	private function send_email()
	{

		$this->load->library('email');

		$name = $this->input->post('name');
		$sender_email_id = $this->input->post('email');
		$phone_number = $this->input->post('phone_number');
		$reciever_email_id  = "rajesh_npl@yahoo.com";
		$subject = $this->input->post('category');
		$message = $this->input->post('message');


		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'rajesh2045@gmail.com',
			'smtp_pass' => 'rajradha88',
			'mailtype'  => 'text/html', 
			'charset'   => 'iso-8859-1'
			);
		
		

		$this->email->set_newline("\r\n");

		$this->email->from($sender_email_id);
		$this->email->to($reciever_email_id);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
		return mail($reciever_email_id,$subject,$message,$sender_email_id);


		




	}



}
