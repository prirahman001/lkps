<?php


class Kerjasama extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model("general_model");
    if ($this->session->userdata('is_login') != 1) {
      echo "<script>alert('Silahkan Login Terlebih Dahulu');
      window.location.href='".base_url('login')."';
      </script>";

    }

  }
    public function index()
    {
      // print_r($data);
      if ($this->session->userdata('level_login')== 2) {
        $data['list_data']=$this->general_model->getData('kerjasama_tabel');
      }
      else {
        $data['list_data']=$this->general_model->getwhere('kerjasama_tabel','prodi_kode',$this->session->userdata('prodi_login'))->result();

      }
      // LOAD JS
      $data['js']='<script src="'.base_url().'assets/js/table.min.js"></script>
      <script src="'.base_url().'assets/js/bundles/export-tables/dataTables.buttons.min.js"></script>
      <script src="'.base_url().'assets/js/bundles/export-tables/buttons.flash.min.js"></script>
      <script src="'.base_url().'assets/js/bundles/export-tables/jszip.min.js"></script>
      <script src="'.base_url().'assets/js/bundles/export-tables/pdfmake.min.js"></script>
      <script src="'.base_url().'assets/js/bundles/export-tables/vfs_fonts.js"></script>
      <script src="'.base_url().'assets/js/bundles/export-tables/buttons.html5.min.js"></script>
      <script src="'.base_url().'assets/js/bundles/export-tables/buttons.print.min.js"></script>
      <script src="'.base_url().'assets/js/pages/tables/jquery-datatable.js"></script>
      <script src="'.base_url().'assets/js/datatable.js"></script>';


      $data['title']='Kerjasama';
      $this->template->load('template/templates', 'kerjasama/list_kerjasama',$data);
    }
    public function tambah_data()
    {
      // $data['list_data']=$this->general_model->getData('kerjasama_tabel');
        // print_r($data);
        $data['js']='<script src="'.base_url().'assets/js/form.min.js"></script>
        <script src="'.base_url().'assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
        <script src="'.base_url().'assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
        <script src="'.base_url().'assets/js/pages/forms/advanced-form-elements.js"></script>';

        $data['css']='<link href="'.base_url().'assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
        <link href="'.base_url().'assets/css/form.min.css" rel="stylesheet">';

        $data['list_ks'] = [''=>''];
        $data['kegiatan_ks']=$this->general_model->getData('bntkegiatan_ks');
        $this->template->load('template/templates', 'kerjasama/tambahdata_ks',$data);

    }

    public function simpan_data()
    {
        $query = "select max(id_kerjasama) as last_id from kerjasama_tabel";
        $id_terakhir = $this->db->query($query)->row();
        $last_id = $id_terakhir->last_id + 1;

        $id_kerjasama = $this->input->post('id_kerjasama');
        if ($id_mahasiswa) {
          $this->general_model->update_data('kerjasama_tabel', $data, "id_kerjasama= $id_kerjasama");
          // code...
        }else{
          $this->general_model->insert_data('kerjasama_tabel', $data);
        }


        $data1 = $this->input->post();
        unset($data1['bntkegiatan_ks']);

        $data1['id_kerjasama'] = $last_id;
        $this->general_model->insert_data('kerjasama_tabel', $data1);

        $data2 = $this->input->post('bntkegiatan_ks');


        $this->general_model->multiple_insert_data('relasi_ks', $data2, $last_id);

        // echo "<pre>";
        // print_r($last_id);
        // echo "</pre>";
        redirect('kerjasama');
    }

    public function edit_data($id)
    {
      $where = array('id_kerjasama' => $id );
      $data['kegiatan_ks']=$this->general_model->getData('bntkegiatan_ks');
      $data['js']='<script src="'.base_url().'assets/js/form.min.js"></script>
      <script src="'.base_url().'assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
      <script src="'.base_url().'assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
      <script src="'.base_url().'assets/js/pages/forms/advanced-form-elements.js"></script>

      ';

      $data['css']='<link href="'.base_url().'assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
      <link href="'.base_url().'assets/css/form.min.css" rel="stylesheet">';
      $data['edit_ks'] = 'update data';
      $data['list_ks'] = $this->general_model->getwhererow('kerjasama_tabel', $where);
        $this->template->load('template/templates', 'kerjasama/tambahdata_ks',$data);
      // print_r($data['list_mhs']);
    }

    public function hapus_data($id)
    {
      $where = array('id_kerjasama' => $id );
      $this->general_model->hapus_row('kerjasama_tabel', $where);
      redirect('kerjasama');
      // print_r($data['list_mhs']);
    }

    public function aproveKerjaSama($id)
    {
      $where = array('id_kerjasama' => $id );
      if ($this->session->userdata('level_login') == 4) {
        $data = array('gkm_status' => 1);
      }
      if ($this->session->userdata('level_login') == 3) {
        $data = array('gpm_status' => 1);
      }
      if ($this->session->userdata('level_login') == 2) {
        $data = array('lpm_status' => 1);
      }
      if ($this->session->userdata('level_login') == 1) {
        $data = array('dekan_status' => 1);
      }
        $this->general_model->update_data('kerjasama_tabel', $data, $where);
        redirect('kerjasama');
    }


    public function kembalikanks($id)
    {
      $where = array('id_kerjasama' => $id );
      if ($this->session->userdata('level_login') == 4) {
        $data = array('tu_status' => 2);
      }
      if ($this->session->userdata('level_login') == 3) {
        $data = array('gkm_status' => 2);
      }
      if ($this->session->userdata('level_login') == 2) {
        $data = array('gpm_status' => 2);
      }
        $this->general_model->update_data('kerjasama_tabel', $data, $where);
        redirect('kerjasama');
      }
}
