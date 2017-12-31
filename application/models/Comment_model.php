<?php
class Comment_model extends CI_model{

    public function get_comments($postId) {
        
        $query = $this->db->select('comment.post_id,comment.create_timestamp,comment.content,CONCAT(first_name," ",last_name) as name')
            ->from('comment')
            ->join('alumnus','comment.alumnus_id = alumnus.alumnus_id')
            ->join('post','comment.post_id = post.post_id')
            ->order_by("create_timestamp", "desc")
            ->where('comment.post_id',$postId)->get();
  
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;       
        } else {
            return null;
        }
    }

    public function create_comment($commentData) {
        $query = $this->db->insert('comment',$commentData);
        if ($query > 0) {
            return true;
        } else {
            return false;
        }
    }


}