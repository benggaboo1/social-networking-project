<?php
class Post_model extends CI_model{

    public function get_all_posts() {
        
        $query = $this->db->select('post_id,create_timestamp,content,CONCAT(first_name," ",last_name) as name')
            ->from('post')
            ->join('alumnus','post.alumnus_id = alumnus.alumnus_id')->get();
  
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;       
        } else {
            return null;
        }
    }

}