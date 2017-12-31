<?php

class Profile extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->model('post_model');
        $this->load->library('session');

}

public function index()
{
  $alumnusId = $this->input->get('id');
  $profile['profileData'] = $this->user_model->get_alumnus_data($alumnusId);
  //$post['postData'] = $this->post_model->get_all_posts();     
  $this->load->view("header",
    array(
      "id"=>$this->session->userdata('alumnus_id')
    )
  ); 
  $this->load->view("profile",$profile);    
}

public function update_profile() {

  $alumnusId = $this->input->post('alumnus_id');
  $firstName = $this->input->post('first_name');
  $lastName = $this->input->post('last_name');
  $address = $this->input->post('address');
  $age = $this->input->post('age');
  $gender = $this->input->post('gender');
  $contactNumber = $this->input->post('contact_number');
  $birthday = $this->input->post('birthday');
  $yearGraduated = $this->input->post('year_graduated');
  $occupation = $this->input->post('occupation');
  $companyAddress = $this->input->post('company_address');

  $data = array(
      'first_name'=>$firstName,
      'last_name'=>$lastName,
      'address'=>$address,
      'age'=>$age,
      'gender'=>$gender,
      'address'=>$address,
      'contact_number'=>$contactNumber,
      'birthday'=>$birthday,
      'year_graduated'=>$yearGraduated,
      'occupation'=>$occupation,
      'company_address'=>$companyAddress
    );

  $this->user_model->update_profile($alumnusId,$data);  
  
  redirect('profile?id='.$alumnusId);
}

public function profile_view(){

  $this->load->view("header");
  $this->load->view("profile");

}

}

?>
