<?php

class Home extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->model('post_model');
        $this->load->model('comment_model');
        $this->load->library('session');

}

public function index()
{
  $alumnusId = $this->session->userdata('alumnus_id');
  $data['alumnusData'] = $this->user_model->get_alumnus_data($alumnusId);
  $postData = $this->post_model->get_all_posts();
  $postAndComment = array();
  foreach ($postData as $post ) {
    $object = array(
      'post'=>$post,
      'comments'=>$this->comment_model->get_comments($post->post_id)
    );
    array_push($postAndComment,$object);
  }
  $postData['postData'] = $postAndComment;      
  $this->load->view("header",
      array(
        "id"=>$this->session->userdata('alumnus_id')
      )
    ); 
  
  $this->load->view("home",$postData);
}
public function home_view(){

  $this->load->view("header");
  $this->load->view("home");
  $this->load->view("footer");

}

}

?>
