<?php
class Message_model extends CI_model{

    public function get_messages($alumnusId, $otherMemberId) {
        $query = 'SELECT c.sender_id, c.create_timestamp, CONCAT(a.first_name, " ", a.last_name) AS sender_name, 
        c.content
        FROM message c 
        JOIN alumnus a ON c.sender_id = a.alumnus_id
        JOIN alumnus b ON c.receiver_id = b.alumnus_id
        WHERE (receiver_id = ? || sender_id = ?) && (receiver_id = ? || sender_id = ?) ';

        $result = $this->db->query($query,array($alumnusId,$alumnusId,$otherMemberId,$otherMemberId));

        if($result->num_rows()>0){
            return $result->result();
        } else {
            return null;
        } 
    }

    public function create_message($messageData) {
        $query = $this->db->insert('message',$messageData);
        if ($query > 0) {
            return true;
        } else {
            return false;
        }
    }

}