<?php
/**
 *
 */
class Login_model extends CI_Model
{

  function auth($username,$password)
  {
    $this->db->select("*");
    $this->db->from("user_tabel");
    $this->db->where("username like binary",$username);
    $this->db->where("password_user",$password);

  $q=$this->db->get();
  return $q;
  }
}
 ?>
