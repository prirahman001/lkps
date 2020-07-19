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
      $data['list_data']=$this->general_model->getData('kerjasama_tabel');

        $this->template->load('template/templates', 'kerjasama/list_kerjasama',$data);

    }
    public function tambah_data()
    {
      // $data['list_data']=$this->general_model->getData('kerjasama_tabel');
        $this->template->load('template/templates', 'kerjasama/tambahdata_ks');
        // print_r($data);

    }

    public function simpan_data()
    {
        $data = $this->input->post();
        $this->general_model->insert_data('kerjasama_tabel', $data);
        redirect('kerjasama');
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
        $this->general_model->update_data('kerjasama_tabel', $data, $where);
        redirect('kerjasama');
    }

}
