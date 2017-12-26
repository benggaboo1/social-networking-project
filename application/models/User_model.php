<?php
class User_model extends CI_model{

public function register_user($user){

$this->db->insert('user', $user);

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

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('email',$email);
  

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

}


?>
