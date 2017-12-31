<?php
class User_model extends CI_model{

  public function link_user_data($user){

    $isSuccess = $this->db->insert('user', $user);

    if ($isSuccess > 0) {
      $this->update_alumnus_flag($user['alumnus_id']);   
    }

  }

  public function update_alumnus_flag($alumnusId) {

    $query = 'UPDATE alumnus SET has_account = 1 WHERE alumnus_id = ?';
    $this->db->query($query, array($alumnusId));
    
  }

  public function auth($email,$pass){

    $this->db->select('alumnus_id,email,is_admin')
      ->from('user')
      ->where('email',$email)
      ->where('password',$pass);

    if($query=$this->db->get())
    {
        return $query->row_array();
    }
    else{
      return null;
    }
  }
  public function email_check($email){

    $query = $this->db->select('*')
      ->from('user')
      ->where('email',$email)->get();

    if($query->num_rows()>0){
      return false;
    }else{
      return true;
    }
  }
  public function get_alumnus_data($alumnusId) {
    $query = $this->db->select('*')
      ->from('alumnus')
      ->where('alumnus_id',$alumnusId)
      ->limit(1)->get()->row();

    if($query){   
      return $query;
    } else {
      return null;
    }
  }

  public function get_search_result($searchInput) {

    $query = 'SELECT alumnus_id,CONCAT(first_name," ",last_name) AS name, profile_pic, address FROM alumnus 
    WHERE (first_name LIKE "%"?"%") OR (last_name LIKE "%"?"%") OR (CONCAT(first_name," ",last_name) LIKE "%"?"%")';
    $result = $this->db->query($query,array($searchInput,$searchInput,$searchInput));

    if($result->num_rows()>0){
      return $result->result();
    }else{
      return null;
    } 
  }

  public function get_alumni() {
    $query = $this->db->select('*')
      ->from('alumnus')->get();

    if($query->num_rows()>0){
      return $query->result();
    }else{
      return false;
    }
  }

  public function update_profile($alumnusId,$data) {

    $this->db->where('alumnus_id',$alumnusId);
    $this->db->update('alumnus',$data);
  }

}

?>
