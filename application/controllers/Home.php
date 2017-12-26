<?php

class Home extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		//$this->load->model('user_model');
        $this->load->library('session');

}

public function index()
{
$this->load->view("home.php");
}

public function home_view(){

  $this->load->view("header.php");
  $this->load->view("home.php");
  $this->load->view("footer.php");

}

}

?>
