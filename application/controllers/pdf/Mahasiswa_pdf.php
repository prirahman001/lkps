<?php
/**
 *
 */
class Mahasiswa_pdf extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model("general_model");
      $this->load->helper('tanggal');
      $this->load->library('pdf');

    // if ($this->session->userdata('is_login') != 1) {
    //   echo "<script>alert('Silahkan Login Terlebih Dahulu');
    //   window.location.href='".base_url('login')."';
    //   </script>";
    //
    // }

  }

  public function index(){

    // if ($this->session->userdata('level_login')== 2) {
    //   $data['list_data']=$this->general_model->getData('mahasiswa_seleksi_tabel');
    //   $data['list_data_asing']=$this->general_model->getData('mahasiswa_asing_tabel');
    // }
    // else {
      $data['list_data']=$this->general_model->getwhere2('mahasiswa_seleksi_tabel','prodi_id',1)->result();
      $data['list_data_asing']=$this->general_model->getwhere2('mahasiswa_asing_tabel','prodi_id',1)->result();
    // }
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->filename = "Mahasiswa.pdf";
        $this->pdf->load_view('mahasiswa/mahasiswa_pdf', $data);
    }
  }

?>
