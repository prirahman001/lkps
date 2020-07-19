<?php
/**
 *
 */
class general_model extends CI_Model
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

  //GEt data base
  function getData($tabel)
  {
    $this->db->select("*");
    $this->db->from($tabel);
  $query=$this->db->get()->result();
  return $query;
  }
  function insert_data($tabel, $data)
  {
    $this->db->insert($tabel, $data);
      }
      function update_data($tabel, $data,$where)
      {
        $this->db->where($where);
        $this->db->update($tabel, $data);
      }

}
 ?>
