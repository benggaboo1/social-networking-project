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
  //$post['postData'] = $this->post_model->get_all_posts();     
  $this->load->view("header",
    array(
      "id"=>$this->session->userdata('alumnus_id')
    )
  );   
  $this->load->view("search");
}

public function search_view(){
  $searchInput = $this->input->get('searchInput');
  $data['searchResult'] = $this->user_model->get_search_result($searchInput);      
    $this->load->view("header",
      array(
        "id"=>$this->session->userdata('alumnus_id')
      )
    );
    $this->load->view("search",$data);
  

}

}

?>
