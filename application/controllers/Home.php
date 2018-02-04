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
  $postData = $this->get_posts();
  $postAndComment = array();
  if (count($postData) > 0) {
    foreach ($postData as $post ) {
      $object = array(
        'post'=>$post,
        'comments'=>$this->comment_model->get_comments($post->post_id)
      );
      array_push($postAndComment,$object);
    }
    $postData['postData'] = $postAndComment;          
  } else {
    $postData['postData'] = [];
  }
  $this->load->view("header",
  array(
    "id"=>$this->session->userdata('alumnus_id')
    )
  );
  $this->load->view("home",$postData);
}

  private function get_posts() {
    $postData = $this->post_model->get_all_posts();
      return $postData;
    }
    public function home_view(){

    $this->load->view("header");
    $this->load->view("home");
    //$this->load->view("footer");

  }

  public function new_post() {
    $content = $this->input->post('content');
    $alumnusId = $this->input->post('alumnus_id');
    $postData = array(
      'content'=>$content,
      'alumnus_id'=>$alumnusId
    ); 
    $isSuccess = $this->post_model->create_post($postData);
    if ($isSuccess) {
      //$data = $this->post_model->get_post($alumnusId);
      //echo json_encode($data);
    } else {
      //post failed
    }
  }
  public function new_comment() {
    $content = $this->input->post('content');
    $alumnusId = $this->input->post('alumnus_id');
    $postId = $this->input->post('post_id');
    $commentData = array(
      'content'=>$content,
      'alumnus_id'=>$alumnusId,
      'post_id'=>$postId
    ); 
    $isSuccess = $this->comment_model->create_comment($commentData);
    if ($isSuccess) {
      //$data = $this->comment_model->get_comment($alumnusId);
      //echo json_encode($data);
    } else {
      //post failed
    }
  }

}

?>
