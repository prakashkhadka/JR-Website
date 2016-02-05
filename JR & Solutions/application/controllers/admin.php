

<?php 

class Admin extends MY_Controller{
	
	function __construct(){

		parent::__construct();


		if(!$this->check_session()){

			redirect('login');
			exit;
		}


	}


function index(){
			$data['id']=$this->session->userdata('id');
			$data['user_name']=$this->session->userdata('first_name');
			$data['is_logged_in']=$this->session->userdata('is_logged_in');
			$data['email']=$this->session->userdata('email');
			$this->load->view('admin/dashboard/include/dashboard-header');
			$this->load->view('admin/dashboard/staff-dashboard',$data);
			$this->load->view('admin/dashboard/include/dashboard-footer');
}


function getUsers(){



	$this->load->model('user_model');


	$data['menu']="+ Add User";
	$data['control_menu']=array("Cancel","Save");
	$data['users']=$this->user_model->getUserList();
	$view = $this->load->view('admin/dashboard/user-account/user-list',$data,TRUE);

	echo $view;



}


function getUserAccountForm(){
	
	$view = $this->load->view('admin/dashboard/user-account/user-account-form','',TRUE);
	echo $view;
	

	
}

function getBlogs(){
	$data['menu']="+ Add Blog";
	//$data['blog_list']=$this->load->model('blog_model')->getBlogList();

	echo json_encode($data);



}



function test(){


	$this->load->model('user_model');

	$test_data=$this->user_model->getUserList();
	$this->load->view('test');
}

}

?>