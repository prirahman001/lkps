<?php
class Pendidikan extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model("general_model");
    $this->load->model("Lpm_model");
    $this->load->model("Gpm_model");
    $this->load->helper("tanggal");
    if ($this->session->userdata('is_login') != 1) {
      echo "<script>alert('Silahkan Login Terlebih Dahulu');
      window.location.href='".base_url('login')."';
      </script>";
    }
  }

    public function kurikulum()
    {
      if ($this->session->userdata('level_login')== 1) {
        $data['list_data_kurikulum']=$this->Lpm_model->kurikulum()->result();
      }
      elseif ($this->session->userdata('level_login')== 3) {
        $data['list_data']=$this->Gpm_model->kurikulum($this->session->userdata('fakultas_login'))->result();
      }
      else {
        $data['list_data_kurikulum']=$this->general_model->getwhere('kurikulum_tabel','prodi_id',$this->session->userdata('prodi_login'),'created_at','DESC')->result();
      }

      // $data['list_data']=$this->general_model->getData('kurikulum_tabel');
      $data['title']='Kurikulum';

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

      $this->template->load('template/templates', 'Pendidikan/list_kurikulum',$data);
      // print_r($this->session->userdata('prodi_login'));
    }
    public function add_kurikulum()
    {
      // $data['list_data']=$this->general_model->getData('kerjasama_tabel');
        $this->template->load('template/templates', 'Pendidikan/add_kurikulum');
        // print_r($data);
    }

    public function simpan_data()
    {
        $data = $this->input->post();
          $data['updated_at'] = date('Y-m-d');
        // print_r($data);
        $id_matakuliah = $this->input->post('id_matakuliah');
        if ($id_matakuliah) {
          $this->general_model->update_data('kurikulum_tabel', $data, 'id_matakuliah='.$id_matakuliah);

        }else{
          $this->general_model->insert_data('kurikulum_tabel', $data);
        }
        redirect('kurikulum');
    }


    // public function simpan_data()
    // {
    //     $data = $this->input->post();
    //     // print_r($data);
    //     $this->general_model->insert_data('kurikulum_tabel', $data);
    //     redirect('mahasiswa');
    //     }

    public function edit_data_pen($id)
    {
      $where = array('id_matakuliah' => $id );
      $data['edit_mhs'] = 'update data';
      $data['list_mhs'] = $this->general_model->getwhererow('kurikulum_tabel', $where);
        $this->template->load('template/templates', 'Mahasiswa/add_mhs',$data);
      // print_r($data['list_mhs']);
    }


    public function hapus_data_pen($id)
    {
      $where = array('id_matakuliah' => $id );
      $this->general_model->hapus_row('kurikulum_tabel', $where);
      redirect('mahasiswa');
      // print_r($data['list_mhs']);
    }

        public function approvepen($id)
        {
          $where = array('id_matakuliah' => $id );
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
            $data = array('lpm_status' => 1);
          }

            $this->general_model->update_data('kurikulum_tabel', $data, $where);
            redirect('mahasiswa');
        }

        public function disapprovemhs($id)
        {
          $where = array('id_matakuliah' => $id );
          if ($this->session->userdata('level_login') == 4) {
            $data = array('tu_status' => 2);
          }
          if ($this->session->userdata('level_login') == 3) {
            $data = array('gkm_status' => 2);
          }
          if ($this->session->userdata('level_login') == 2) {
            $data = array('gpm_status' => 2);
          }
            $this->general_model->update_data('kurikulum_tabel', $data, $where);
            redirect('mahasiswa');
          }


}
 ?>
