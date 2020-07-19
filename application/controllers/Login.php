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
      // print_r($input);
      $check=$this->Login_model->auth($input["username"],$input["password"]);
      print_r($check->num_rows());
      if ($check->num_rows() == 1) {
//// logi session
        $datasession= array ();
        foreach ($check->result_array() as $key) {
          $datasession = array(
            'id_login' => $key ['id_user'],
            'prodi_login' => $key ['prodi_kode'],
            // 'prodi_login' => $key ['prodi_kode'],
            'nama_login' => $key ['nama_user'],
            'username_login' => $key ['username'],
            'level_login' => $key ['level_user'],
            'is_login' => 1
          );

      }
      $this->session->set_userdata($datasession);
        // redirect "/login";
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
