<?php
/**
 *
 */
class Lpm_model extends CI_Model
{

  function kerjasama()
  {
    $this->db->select('*');
    $this->db->from('kerjasama_tabel');
    $this->db->where('gkm_status',1);
    $this->db->where('gpm_status',1);
    $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }
// KRITERIA MHS START{
  function mahasiswa_seleksi()
  {
    $this->db->select('*');
    $this->db->from('Mahasiswa_seleksi_tabel');
    $this->db->where('gkm_status',1);
    $this->db->where('gpm_status',1);
    $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }
  function mahasiswa_asing()
  {
    $this->db->select('*');
    $this->db->from('mahasiswa_asing_tabel');
    $this->db->where('gkm_status',1);
    $this->db->where('gpm_status',1);
    $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }
// KRITERIA MHS END }

// KRITERIA DOSEN START{
  function dosen($statusDosen)
  {
    $this->db->select('*');
    $this->db->from('profildosen_tabel');
    $this->db->where('gkm_status',1);
    $this->db->where('gpm_status',1);
    $this->db->where('status_dosen',$statusDosen);
    $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }
  function dosenpemta()
  {
    $this->db->select('*');
    $this->db->from('id_pembimbingta');
    $this->db->where('gkm_status',1);
    $this->db->where('gpm_status',1);
    $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }
  function dosenewmp()
  {
    $this->db->select('*');
    $this->db->from(' ');
    $this->db->where('gkm_status',1);
    $this->db->where('gpm_status',1);
    $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }
  function dosenpraktisi()
  {
    $this->db->select('*');
    $this->db->from(' ');
    $this->db->where('gkm_status',1);
    $this->db->where('gpm_status',1);
    $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }
  // KRITERIA DOSEN END }

// KRITERIA 4 START
  function kurikulum()
  {
    $this->db->select('*');
    $this->db->from('kurikulum_table');
    $this->db->where('gkm_status',1);
    $this->db->where('gpm_status',1);
    $this->db->order_by('created_at','DESC');

    $query = $this->db->get();
    return $query;
  }
  // KRITERIA 4 END
}

 ?>
