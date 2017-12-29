<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}

public function index()
{
$this->load->view("register.php");
}

public function register_user(){

  $user = array(
      'name'=>$this->input->post('user_name'),
      'email'=>$this->input->post('user_email'),
      'password'=>md5($this->input->post('user_password')),
      'age'=>$this->input->post('user_age'),
      'mobile'=>$this->input->post('user_mobile')
  );

  $email_check=$this->user_model->email_check($user['user_email']);

  if($email_check){
    $this->user_model->register_user($user);
    $this->session->set_flashdata('success_msg', 'Registered successfully.');
    redirect('user/login_view');
  }
  else{
    $this->session->set_flashdata('error_msg', 'Email already exists.');
    redirect('user');
  }

}

public function login_view(){

$this->load->view("login.php");

}

function login_user(){
  $user_login=array(

  'email'=>$this->input->post('user_email'),
  'password'=>md5($this->input->post('user_password'))

    );

    $data=$this->user_model->login_user($user_login['email'],$user_login['password']);
      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['email']);
        $this->session->set_userdata('user_name',$data['name']);
        $this->session->set_userdata('user_age',$data['age']);
        $this->session->set_userdata('user_mobile',$data['mobile']);
        $this->load->view('header');
        $this->load->view('user_profile');
        $this->load->view('footer');
      }
      else{
        $this->session->set_flashdata('error_msg', 'Email or Password is incorrect.');
        $this->load->view("login");

      }


}

public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

}

?>
