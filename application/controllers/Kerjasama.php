<?php


class Kerjasama extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model("general_model");
    $this->load->model("Lpm_model");
    $this->load->model("Gpm_model");
    $this->load->helper('tanggal');
    if ($this->session->userdata('is_login') != 1) {
      echo "<script>alert('Silahkan Login Terlebih Dahulu');
      window.location.href='".base_url('login')."';
      </script>";

    }

  }
    public function index()
    {
      // print_r($data);
      if ($this->session->userdata('level_login')== 1) {
        $data['list_data']=$this->Lpm_model->kerjasama()->result();
      }
      elseif ($this->session->userdata('level_login')== 3) {
        $data['list_data']=$this->Gpm_model->kerjasama($this->session->userdata('fakultas_login'))->result();
      }
      else {
        $data['list_data']=$this->general_model->getwhere('kerjasama_tabel','prodi_id',$this->session->userdata('prodi_login'),'created_at','DESC')->result();

      }
      // LOAD JS
      $data['js']='<script src="'.base_url().'assets/js/table.min.js"></script>
      <script src="'.base_url().'assets/js/bundles/export-tables/dataTables.buttons.min.js"></script>
      <script src="'.base_url().'assets/js/bundles/export-tables/buttons.flash.min.js"></script>
      <script src="'.base_url().'assets/js/bundles/export-tables/buttons.html5.min.js"></script>
      <script src="'.base_url().'assets/js/bundles/export-tables/buttons.print.min.js"></script>
      <script src="'.base_url().'assets/js/pages/tables/jquery-datatable.js"></script>
      <script src="'.base_url().'assets/js/pages/forms/basic-form-elements.js"></script>
      <script src="'.base_url().'assets/js/form.min.js"></script>
      <script src="'.base_url().'assets/js/datatable.js"></script>';


      $data['title']='Kerjasama';
      // print_r($data['list_data']);
      $this->template->load('template/templates', 'kerjasama/list_kerjasama',$data);
    }
    public function tambah_data()
    {
      // $data['list_data']=$this->general_model->getDataOrder('kerjasama_tabel');
        // print_r($data);
        $data['js']='<script src="'.base_url().'assets/js/form.min.js"></script>
        <script src="'.base_url().'assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
        <script src="'.base_url().'assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
        <script src="'.base_url().'assets/js/pages/forms/advanced-form-elements.js"></script>';

        $data['css']='<link href="'.base_url().'assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
        <link href="'.base_url().'assets/css/form.min.css" rel="stylesheet">';

        $data['list_ks'] = [''=>''];
        $data['kegiatan_ks']=$this->general_model->getDataOrder('bntkegiatan_ks');
        $this->template->load('template/templates', 'kerjasama/tambahdata_ks',$data);
    }

    public function simpan_data()
    {
        $query        = "select max(id_kerjasama) as last_id from kerjasama_tabel";
        $id_terakhir  = $this->db->query($query)->row();
        $last_id      = $id_terakhir->last_id + 1;
        $data1        = $this->input->post();
        $deleted      = array();
        $insert       = array();

        $id_kerjasama = $this->input->post('id_kerjasama');

        if (!empty($id_kerjasama)) {

          // Input Update Data Relasi
          $old_data = $this->general_model->getwhere2('relasi_ks','kerjasama_id',$id_kerjasama)->result_array();
          $insert = $data1['bntkegiatan_ks'];

          foreach ($old_data as $key) {
            $deleted[] = $key['kegiatanks_id'];
            foreach ($insert as $z => $value) {
                if ($key['kegiatanks_id'] == $value) {
                  unset($insert[$z]);
                }
            }
          }

          foreach ($data1['bntkegiatan_ks'] as $i => $value) {
            foreach ($deleted as $j => $val) {
              if ($value == $val) {
                unset($deleted[$j]);
                // unset($insert[$j]);
              }
            }
          }

          if (!empty($deleted)) {
            foreach ($deleted as $i => $isi) {
              foreach ($old_data as $j) {
                if ($isi == $j['kegiatanks_id']) {
                  $this->general_model->delete('relasi_ks','id_relasiks',$j['id_relasiks']);
                  // echo $j['id_relasiks'];
                }
              }
            }
          }

          if (!empty($insert)) {
              foreach ($insert as $i => $value) {
                $new_input[] = array(
                  'kerjasama_id'  => $id_kerjasama,
                  'kegiatanks_id' => $value
                );
              }
              $input_kegiatan = $this->general_model->store_batch('relasi_ks',$new_input);
          }
          // End Input Data Relasi

          // Input data kerjasama
          unset($data1['bntkegiatan_ks']);
          $data1['updated_at'] = date('Y-m-d');
          // print_r($data1);
          $this->general_model->update_data('kerjasama_tabel', $data1, "id_kerjasama= $id_kerjasama");
          // End Update Data
        }else{
          // $this->general_model->insert_data('kerjasama_tabel', $data);
          // Insert Data
          unset($data1['bntkegiatan_ks']);

          $data1['id_kerjasama'] = $last_id;
          $this->general_model->insert_data('kerjasama_tabel', $data1);
          $data2 = $this->input->post('bntkegiatan_ks');
          $this->general_model->multiple_insert_data('relasi_ks', $data2, $last_id);
          // End Insert Data
        }
        // ####Not
        // $data = $this->input->post();
        // print_r($data1);
        // $this->general_model->insert_data('kerjasama_tabel', $data);
        // echo "<pre>";
        // print_r($data1);
        // echo "</pre>";

        // echo "<pre>";
        // print_r($last_id);
        // echo "</pre>";
        // ######
        redirect('kerjasama');
    }

    public function edit_data($id)
    {
      $where = array('id_kerjasama' => $id );
      $data['kegiatan_ks']=$this->general_model->getDataOrder('bntkegiatan_ks');
      $data['js']='<script src="'.base_url().'assets/js/form.min.js"></script>
      <script src="'.base_url().'assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
      <script src="'.base_url().'assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
      <script src="'.base_url().'assets/js/pages/forms/advanced-form-elements.js"></script>';

      $data['css']='<link href="'.base_url().'assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
      <link href="'.base_url().'assets/css/form.min.css" rel="stylesheet">';
      $data['edit_ks'] = 'update data';
      $data['list_ks'] = $this->general_model->getwhererow('kerjasama_tabel', $where);
      $this->template->load('template/templates', 'kerjasama/tambahdata_ks',$data);
      // print_r($data['list_mhs']);
    }

    public function perbaikan_data($id)
    {
      $where = array('id_kerjasama' => $id );
      $data['kegiatan_ks']=$this->general_model->getDataOrder('bntkegiatan_ks');
      $data['js']='<script src="'.base_url().'assets/js/form.min.js"></script>
      <script src="'.base_url().'assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
      <script src="'.base_url().'assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
      <script src="'.base_url().'assets/js/pages/forms/advanced-form-elements.js"></script>';

      $data['css']='<link href="'.base_url().'assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
      <link href="'.base_url().'assets/css/form.min.css" rel="stylesheet">';
      $data['edit_ks'] = 'update data';
      $data['list_ks'] = $this->general_model->getwhererow('kerjasama_tabel', $where);
      $this->template->load('template/templates', 'kerjasama/perbaikan_dataks',$data);
      // print_r($data['list_mhs']);
    }

    public function perbaiki()
    {
        $query        = "select max(id_kerjasama) as last_id from kerjasama_tabel";
        $id_terakhir  = $this->db->query($query)->row();
        $last_id      = $id_terakhir->last_id + 1;
        $data1        = $this->input->post();
        $deleted      = array();
        $insert       = array();

        $id_kerjasama = $this->input->post('id_kerjasama');
        $data_kerjasama = $this->general_model->getwhere2('kerjasama_tabel','id_kerjasama',$id_kerjasama)->row_array();

        if (!empty($id_kerjasama)) {

          // Input Update Data Relasi
          $old_data = $this->general_model->getwhere2('relasi_ks','kerjasama_id',$id_kerjasama)->result_array();
          $insert = $data1['bntkegiatan_ks'];

          foreach ($old_data as $key) {
            $deleted[] = $key['kegiatanks_id'];
            foreach ($insert as $z => $value) {
                if ($key['kegiatanks_id'] == $value) {
                  unset($insert[$z]);
                }
            }
          }

          foreach ($data1['bntkegiatan_ks'] as $i => $value) {
            foreach ($deleted as $j => $val) {
              if ($value == $val) {
                unset($deleted[$j]);
                // unset($insert[$j]);
              }
            }
          }

          if (!empty($deleted)) {
            foreach ($deleted as $i => $isi) {
              foreach ($old_data as $j) {
                if ($isi == $j['kegiatanks_id']) {
                  $this->general_model->delete('relasi_ks','id_relasiks',$j['id_relasiks']);
                  // echo $j['id_relasiks'];
                }
              }
            }
          }

          if (!empty($insert)) {
              foreach ($insert as $i => $value) {
                $new_input[] = array(
                  'kerjasama_id'  => $id_kerjasama,
                  'kegiatanks_id' => $value
                );
              }
              $input_kegiatan = $this->general_model->store_batch('relasi_ks',$new_input);
          }
          // End Input Data Relasi

          // Input data kerjasama
          unset($data1['bntkegiatan_ks']);
          $data1['updated_at'] = date('Y-m-d');
          $data1['tu_status'] = 0;

          if ($data_kerjasama['gpm_status']==2) {
            $data1['gpm_status'] = 3;
          }
          elseif ($data_kerjasama['gkm_status']==2) {
            $data1['gkm_status'] = 3;
          }
          // print_r($data1);
          $this->general_model->update_data('kerjasama_tabel', $data1, "id_kerjasama= $id_kerjasama");
          // End Update Data
        }
        // ####Not
        // $data = $this->input->post();
        // print_r($data1);
        // $this->general_model->insert_data('kerjasama_tabel', $data);
        // echo "<pre>";
        // print_r($data1);
        // echo "</pre>";

        // echo "<pre>";
        // print_r($last_id);
        // echo "</pre>";
        // ######
        redirect('kerjasama');
    }

    public function hapus_data($id)
    {
      $where = array('id_kerjasama' => $id );
      $this->general_model->hapus_row('kerjasama_tabel', $where);
      redirect('kerjasama');
      // print_r($data['list_mhs']);
    }

    public function aprove_data($id)
    {
      $where = array('id_kerjasama' => $id );
      if ($this->session->userdata('level_login') == 4) {
        $data = array('gkm_status' => 1);
      }
      if ($this->session->userdata('level_login') == 3) {
        $data = array('gpm_status' => 1);
      }
      $this->general_model->update_data('kerjasama_tabel', $data, $where);
      redirect('kerjasama');
    }


    public function disaprove_data()
    {
      $input=$this->input->post();
      $id=$input['id_kerjasama'];
      // print_r($input);

      $where = array('id_kerjasama' => $id );
      if ($this->session->userdata('level_login') == 4) {
        $data = array('tu_status' => 1,'gkm_status' => 2,'keterangan'=>$input['ket_modal']);
      }
      if ($this->session->userdata('level_login') == 3) {
        $data = array('gpm_status' => 2, 'tu_status' => 1,'keterangan'=>$input['ket_modal']);
      }

        $this->general_model->update_data('kerjasama_tabel', $data, $where);
        redirect('kerjasama');
      }
}
