<?php
/**
 *
 */
class Gpm_model extends CI_Model
{

  function kerjasama($id)
  {
    $this->db->select('*');
    $this->db->from('kerjasama_tabel');
    $this->db->where('fakultas_id',$id);
    $this->db->where('gkm_status',1);
    $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }

  function mahasiswa_seleksi($id)
  {
    $this->db->select('*');
    $this->db->from('Mahasiswa_seleksi_tabel');
    $this->db->where('fakultas_id',$id);
    $this->db->where('gkm_status',1);
    $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }

  function mahasiswa_asing($id)
  {
    $this->db->select('*');
    $this->db->from('mahasiswa_asing_tabel');
    $this->db->where('fakultas_id',$id);
    $this->db->where('gkm_status',1);
    $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }
// KRITERIA DOSEN START{
  function dosen($id,$statusDosen)
  {
    $this->db->select('*');
    $this->db->from('profildosen_tabel');
    $this->db->where('fakultas_id',$id);
    $this->db->where('gkm_status',1);
    $this->db->where('status_dosen',$status);
    $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }
  function dosenpemta()
  {
    $this->db->select('*');
    $this->db->from('id_pembimbingta');
    $this->db->where('gpm_status',1);
      $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }
  function dosenewmp()
  {
    $this->db->select('*');
    $this->db->from(' ');
    $this->db->where('gpm_status',1);
      $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }
  function dosenpraktisi()
  {
    $this->db->select('*');
    $this->db->from(' ');
    $this->db->where('gpm_status',1);
      $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }

    // KRITERIA DOSEN END }
  function kurikulum($id)
  {
    $this->db->select('*');
    $this->db->from('kurikulum_table');
    $this->db->where('fakultas_id',$id);
    $this->db->where('gkm_status',1);
    $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }
}

 ?>
