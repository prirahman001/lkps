<?php


class Login extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model("Login_model");

  }
    public function index()
    {
        $this->load->view('login');
    }

    public function auth()
    {

      $input = $this->input->post();
      $check = $this->Login_model->auth($input["username"],$input["password"]);
      // print_r($check->result_array()[0]['prodi_kode']);
      $kode_prodi = $check->result_array()[0]['prodi_id'];
      $nama_prodi = $this->db->get_where('prodi_tabel', array('id_prodi'=>$kode_prodi))->row();

      // print_r($check->result_array());
      //
      if ($check->result_array() > 0) {
        $datasession= array ();
        foreach ($check->result_array() as $key) {
          $datasession = array(
            'id_login' => $key ['id_user'],
            'prodi_login' => $key ['prodi_id'],
            // 'prodi_kode' => $nama_prodi->kode_prodi,
            'fakultas_login' => $key ['fakultas_id'],
            'nama_login' => $key ['nama_user'],
            'prodi' => $nama_prodi->nama_prodi,
            'username_login' => $key ['username'],
            'level_login' => $key ['level_user'],
            'is_login' => 1
          );

      }
      $this->session->set_userdata($datasession);
        redirect('dashboard');
      }
      else {
        echo "<script>alert('Kombinasi username dan password salah');
        window.location.href='".base_url('login')."';
        </script>";

      }
    }
    public function logout(){

      $this->session->sess_destroy();
      redirect('login');
    }

}
?>
