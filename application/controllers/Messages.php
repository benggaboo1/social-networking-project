<?php

class Messages extends CI_Controller {

    public function __construct(){

            parent::__construct();
                $this->load->helper('url');
                $this->load->model('message_model');
                $this->load->model('user_model');
                $this->load->library('session');

    }

    public function index()
    {
        $alumniList = $this->user_model->get_alumni();
        $alumnusId = $this->session->userdata('alumnus_id');

        $this->load->view("header",
        array(
          "id"=>$this->session->userdata('alumnus_id')
            )
        );
        $this->load->view("messages",array("alumniList"=>$alumniList));
    }

}