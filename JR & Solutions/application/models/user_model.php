<?php


class User_model extends CI_Model{







	function checkUserExist($email,$password){

		$query=$this->db->query("SELECT * FROM user WHERE email='$email' AND password='$password'");
		return $query->num_rows();


	}



	function registerUser(){



	}



	function getUserProfile($email){

		$query=$this->db->query("SELECT id FROM user WHERE email='$email'");
		$user_id=$query->result()[0]->id;


		$join_query=$this->db->query("SELECT user.id, user.email, profile.firstName, profile.lastName, profile.image
			FROM user
			INNER JOIN profile
			ON user.id=profile.userId WHERE user.id='$user_id' ORDER BY user.id; ");


		$user_data=$join_query->result()[0];

		$user_profile=array(
			"user_id"=>$user_data->id,
			"first_name"=>$user_data->firstName,
			"last_name"=>$user_data->lastName,
			"email"=>$user_data->email,
			"image_path"=>$user_data->image

			);


		return $user_profile;
	}



	function getUserList(){

		
		$user_list=array();
		$join_query=$this->db->query("SELECT user.id, user.email, profile.firstName, profile.lastName, profile.image
			FROM user
			INNER JOIN profile
			ON user.id=profile.userId  ORDER BY user.id; ");


		$user_data=$join_query->result();
		foreach ($user_data as $user) {
			
			$user_profile=array(
				"user_id"=>$user->id,
				"first_name"=>$user->firstName,
				"last_name"=>$user->lastName,
				"email"=>$user->email,
				"image_path"=>$user->image

				);

			array_push($user_list, $user_profile);




		}
		return $user_list;


	}


	function deleteUser(){


	}


	function updateProfile(){



	}












}

?>