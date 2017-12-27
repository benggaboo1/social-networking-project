<?php

class Search extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->model('post_model');
        $this->load->library('session');

}

public function index()
{
  $alumnusId = $this->session->userdata('alumnus_id');
  $data['alumnusData'] = $this->user_model->get_alumnus_data($alumnusId);
  //$post['postData'] = $this->post_model->get_all_posts();
  if ($data['alumnusData']) {    
    $this->load->view("header",$data);   
  } else {
    $this->load->view('login');
  }
  $this->load->view("search");
  $this->load->view("footer"); 
}

public function search_view(){

  $this->load->view("header");
  $this->load->view("search");

}

}

?>
