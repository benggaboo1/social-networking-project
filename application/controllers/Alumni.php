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

public function create_user() {

  $email = $this->input->post('email');
  $isEmailExist = $this->user_model->email_check($email);

  if ($email) {
    $alumnusId = $this->input->post('alumnus_id');
    $password = md5($this->input->post('password'));
    $data = array(
      'email'=>$email,
      'alumnus_id'=>$alumnusId,
      'password'=>$password
    );
    $this->user_model->link_user_data($data);
    redirect('Alumni');
  } else {

  }
  

  $this->user_model->link_user_data($data);

}

public function alumni_view(){

  $this->load->view("header");
  $this->load->view("alumni");

}

}

?>
