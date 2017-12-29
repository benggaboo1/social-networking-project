<?php
class Post_model extends CI_model{

    public function get_all_posts() {
        
        $query = $this->db->select('post_id,create_timestamp,content,profile_pic,CONCAT(first_name," ",last_name) as name')
            ->from('post')
            ->join('alumnus','post.alumnus_id = alumnus.alumnus_id')
            ->order_by("create_timestamp", "desc")->get();
  
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;       
        } else {
            return null;
        }
    }

    public function create_post($postData) {
        $query = $this->db->insert('post',$postData);
        if ($query > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_post($alumnusId) {
        
        $query = $this->db->select('post_id,create_timestamp,content,profile_pic,CONCAT(first_name," ",last_name) as name')
            ->from('post')
            ->join('alumnus','post.alumnus_id = alumnus.alumnus_id')
            ->where('post.alumnus_id',$alumnusId)->limit(1)
            ->order_by("post_id", "desc")->get()->row();
        if($query){   
            return $query;
        } else {
            return null;
        }    
    }

}