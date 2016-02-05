<?php 


class Login extends MY_Controller{

	/* constructor */
	function __construct(){

		parent::__construct();
		$this->load->library('session');
		$this->load->model('user_model');


	}





	function index($login_error=NULL){
		


		$data['error']=$login_error;

		if($this->check_session()){
		

			redirect('admin');

		}


		else {


		$this->load->view('admin/login',$data);
		$this->load->view('admin/dashboard/include/dashboard-footer',$data);

}
	}


	function auth_process(){


		

			$this->form_validation->set_rules('email','Email','trim|required|valid_email');
			$this->form_validation->set_rules('password','Password','trim|required|max_length[10]');
			if($this->form_validation->run()){

				$email=$this->input->post('email');
				$password=$this->input->post('password');




				if($this->user_model->checkUserExist($email,$password)==1){

					$user_profile =$this->user_model->getUserProfile($email);
					$user_profile['is_logged_in']=TRUE;

					$this->session->set_userdata($user_profile);

					redirect('admin');
				}
				else{

					$error="TRUE";

					$this->index($error);
				}



			}


			else{


			$this->index();

		}

		

		

	}

	
	function logout(){


		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_logged_in');
		$this->session->sess_destroy();
		$this->load->view('admin/login');
		$this->load->view('admin/dashboard/include/dashboard-footer');

	}



















}

?>