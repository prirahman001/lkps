<?php


class Dashboard extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model("Login_model");
    if ($this->session->userdata('is_login') != 1) {
      echo "<script>alert('Silahkan Login Terlebih Dahulu');
      window.location.href='".base_url('login')."';
      </script>";

    }

  }
    public function index()
    {
      if ($this->session->userdata('level_login') == 5) {
        $this->template->load('template/templates', 'isian_view');
        // code...
      }if ($this->session->userdata('level_login') == 4) {
        $this->template->load('template/templates', 'isian_view0');

      }
    }

}
