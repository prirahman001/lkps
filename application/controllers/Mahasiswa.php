<?php


class Mahasiswa extends CI_Controller
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
      $data['list_data']=$this->general_model->getData('Mahasiswa_seleksi_tabel');
      // print_r($data);
        $this->template->load('template/templates', 'Mahasiswa/list_mhs',$data);

    }
    public function add_mhs()
    {
      // $data['list_data']=$this->general_model->getData('kerjasama_tabel');
        $this->template->load('template/templates', 'Mahasiswa/add_mhs');
        // print_r($data);
    }

    public function simpan_data()
    {
        $data = $this->input->post();
        $this->general_model->insert_data('Mahasiswa_seleksi_tabel', $data);
        redirect('mahasiswa');
    }


    public function mahasiswa_asing()
    {
      $data['list_data']=$this->general_model->getData('mahasiswa_asing_tabel');
      // print_r($data);
        $this->template->load('template/templates', 'Mahasiswa/list_mhs_asing',$data);

    }
    public function add_mhs_asing()
    {
      // $data['list_data']=$this->general_model->getData('kerjasama_tabel');
        $this->template->load('template/templates', 'Mahasiswa/add_mhs_asing');
        // print_r($data);
    }

    public function simpan_data_asing()
    {
        $data = $this->input->post();
        $this->general_model->insert_data('mahasiswa_asing_tabel', $data);
        redirect('mahasiswa');
    }
}
