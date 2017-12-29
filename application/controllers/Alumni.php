<?php

class Alumni extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}

public function index()
{
  $alumniList['alumniList'] = $this->user_model->get_alumni();
  if ($this->session->userdata('is_admin')) {
    $this->load->view("header",
      array(
        "id"=>$this->session->userdata('alumnus_id')
      )
    );
    $this->load->view("alumni",$alumniList);
  } else {
    $this->load->view('login');
  }
}

public function alumni_view(){

  $this->load->view("header");
  $this->load->view("alumni");

}

}

?>
