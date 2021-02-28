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

  // GEt data base
  function getData($table,$field,$by)
  {
    $this->db->select("*");
    $this->db->from($table);
    $this->db->order_by($field,$by);
    $query=$this->db->get()->result();
    return $query;
  }

  function getDataOrder($table)
  {
    $this->db->select("*");
    $this->db->from($table);
    // $this->db->order_by($field,$by);
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
      function getwhere($table,$field,$where,$field1,$by){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field,$where);
        $this->db->order_by($field1,$by);

        $query = $this->db->get();
        return $query;
      }
      function getKerjasamaPdf($table,$field,$where,$field1,$by){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field,$where);
        $this->db->where('gkm_status',1);
        $this->db->where('gpm_status',1);
        $this->db->order_by($field1,$by);

        $query = $this->db->get();
        return $query;
      }
      function getDosen($table,$field,$where,$field1,$by,$status){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field,$where);
        $this->db->where('status_dosen',$status);
        $this->db->order_by($field1,$by);

        $query = $this->db->get();
        return $query;
      }

      function getwhere2($table,$field,$where){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field,$where);
        $query = $this->db->get();
        return $query;
      }

      function store_batch($tabel, $data){
        return $this->db->insert_batch($tabel, $data);
      }
      function getwhererow($table,$where){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);

        $query = $this->db->get();
        return $query->row();
      }

      function delete($table,$field,$where){

        $this->db->where($field,$where);
        $this->db->delete($table);

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
      // irfan
      // function getjoin1()
      // {
      //   $this->db->select('*');
      //   $this->db->from('ewmpdosen_tabel');
      //   $this->db->join('profildosen_tabel','profildosen_tabel.id_profildosen = ewmpdosen_tabel.profildosen_id');
      //   $this->db->where('ewmpdosen_tabel.prodi_id',1);
      //   $query = $this->db->get();
      //   return $query;
      //
      // }
      function getjoin1($tabel,$tabeljoin,$fkjoin,$wherejoin,$id)
      {
        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->join($tabeljoin,$fkjoin);
        $this->db->where($wherejoin,$id);
        $query = $this->db->get();
        return $query;

      }
      // ewmpdosen_tabel,profildosen_tabel,id_profildosen,profildosen_id,prodi_id

 }
