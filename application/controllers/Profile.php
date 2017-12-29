<?php

class Profile extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->model('post_model');
        $this->load->library('session');

}

public function index()
{
  $alumnusId = $this->input->get('id');
  $profile['profileData'] = $this->user_model->get_alumnus_data($alumnusId);
  //$post['postData'] = $this->post_model->get_all_posts();     
  $this->load->view("header",
    array(
      "id"=>$this->session->userdata('alumnus_id')
    )
  ); 
  $this->load->view("profile",$profile);    
}

public function profile_view(){

  $this->load->view("header");
  $this->load->view("profile");

}

}

?>
