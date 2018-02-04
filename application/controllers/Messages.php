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
        $alumnusId = $this->session->userdata('alumnus_id');
        $alumniList = $this->user_model->get_alumni_with_account($alumnusId);
        $chatMemberId = $this->input->get('member');
        $messages = [];

        $this->load->view("header",
        array(
          "id"=>$this->session->userdata('alumnus_id')
            )
        );
        if (ISSET($chatMemberId) && $chatMemberId > 0) {
            $messages = $this->message_model->get_messages($alumnusId,$chatMemberId);
        }
        if (count($messages) > 0) {
            $this->load->view("messages",array("alumniList"=>$alumniList,"messages"=>$messages));
        } else {
            $this->load->view("messages",array("alumniList"=>$alumniList));
        }
        
    }

    public function getMessages() {
        
        $messages = $this->message_model->get_messages($alumnusId,$chatMemberId);

        if (count($messages) == 0) {
            $messages = null;    
        }
        
        
    }

    public function new_message() {
        $content = $this->input->post('content');
        $sender_id = $this->input->post('senderId');
        //$sender_id = $this->session->userdata('alumnus_id');
        $receiver_id = $this->input->post('receiverId');
        $messageData = array(
          'content'=>$content,
          'sender_id'=>$sender_id,
          'receiver_id'=>$receiver_id
        ); 
        $isSuccess = $this->message_model->create_message($messageData);
        if ($isSuccess) {
          //$data = $this->post_model->get_post($alumnusId);
          //echo json_encode($data);
        } else {
          //post failed
        }
      }

}