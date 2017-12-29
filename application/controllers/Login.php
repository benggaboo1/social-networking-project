<?php

class Login extends CI_Controller {

    public function __construct(){

            parent::__construct();
                $this->load->helper('url');
                $this->load->model('user_model');
            $this->load->library('session');

    }

    public function index()
    {
        $this->load->view("login_view");
    }

    function login_user(){
        $user_login=array(
            'email'=>$this->input->post('user_email'),
            'password'=>md5($this->input->post('user_password'))
        );

        $data=$this->user_model->auth($user_login['email'],$user_login['password']);

        if($data) {
            $this->session->set_userdata('user_email',$data['email']);
            $this->session->set_userdata('alumnus_id',$data['alumnus_id']);
            $this->session->set_userdata('is_admin',$data['is_admin']);
            redirect('Home');
        } else{
            $this->session->set_flashdata('error_msg', 'Email or Password is incorrect.');
            $this->load->view("login_view");
        }
    }

}