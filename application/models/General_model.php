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
  function getData($table)
  {
    $this->db->select("*");
    $this->db->from($table);
  $query=$this->db->get()->result();
  return $query;
  }
  function insert_data($table, $data)
  {
    $this->db->insert($table, $data);
  }

  function multiple_insert_data($table, $data, $id)
  {
    $jumlah = count($data);
    for ($i=0; $i < $jumlah; $i++) {
      $dataks = array('kerjasama_id' => $id,
                      'kegiatanks_id' => $data[$i]);
      $this->db->insert($table, $dataks);
    }
    // print_r($dataks);


  }
      function update_data($table, $data,$where)
      {
        $this->db->where($where);
        $this->db->update($table, $data);
      }
      function getwhere($table,$field,$where){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field,$where);

        $query = $this->db->get();
        return $query;
      }

      function getwhererow($table,$where){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);

        $query = $this->db->get();
        return $query->row();
      }

      function hapus_row($table,$where){

        $this->db->where($where);
        $this->db->delete($table);

      }
      function getjoin($query){
        return $this->db->query($query);
        // $data = $this->db->get();
         // $data;
      }

}
 ?>
