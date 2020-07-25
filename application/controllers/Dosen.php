<?php


class Dosen extends CI_Controller
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
      if ($this->session->userdata('level_login')== 2) {
        $data['list_data']=$this->general_model->getData('profildosen_tabel');
      }
      else {
        $data['list_data']=$this->general_model->getwhere('profildosen_tabel','prodi_kode',$this->session->userdata('prodi_login'))->result();
      }
      // $data['list_data']=$this->general_model->getData('Mahasiswa_seleksi_tabel');
      $data['title']='Dosen';

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

      $this->template->load('template/templates', 'dosen/dosen_tetap/list_dosen',$data);

    }
    public function form_dosen()
    {
      // $data['list_data']=$this->general_model->getData('kerjasama_tabel');
        $this->template->load('template/templates', 'dosen/dosen_add');
        // print_r($data);
    }

    public function add_data()
    {
        $data = $this->input->post();
        // print_r($data);
        $this->general_model->insert_data('profildosen_tabel', $data);
        redirect('dosen');
        }

    public function update_data($id)
    {
      $where = array('id_profildosen' => $id );
      $data['edit_mhs'] = 'update data';
      $data['list_mhs'] = $this->general_model->getwhererow('profildosen_tabel', $where);
        $this->template->load('template/templates', 'dosen/dosen_add',$data);
      // print_r($data['list_mhs']);
    }

    public function hapus_data($id)
    {
      $where = array('id_profildosen' => $id );
      $this->general_model->hapus_row('profildosen_tabel', $where);
      redirect('dosen');
      // print_r($data['list_mhs']);
    }

        public function approvedosen($id)
        {
          $where = array('id_profildosen' => $id );
          if ($this->session->userdata('level_login') == 4) {
            $data = array('gkm_status' => 1);
          }
          if ($this->session->userdata('level_login') == 3) {
            $data = array('gpm_status' => 1);
          }
          if ($this->session->userdata('level_login') == 2) {
            $data = array('lpm_status' => 1);
          }

            $this->general_model->update_data('Mahasiswa_seleksi_tabel', $data, $where);
            redirect('mahasiswa');
        }

}
        // MAHASISWA ASING
//     public function mahasiswa_asing()
//     {
//       if ($this->session->userdata('level_login')== 2) {
//         $data['list_data']=$this->general_model->getData('mahasiswa_asing_tabel');
//       }
//       else {
//         $data['list_data']=$this->general_model->getwhere('mahasiswa_asing_tabel','prodi_kode',$this->session->userdata('prodi_login'))->result();
//       }
//       $data['title']='Mahasiswa';
//       // $data['list_data']=$this->general_model->getData('mahasiswa_asing_tabel');
//
//       $data['js']='<script src="'.base_url().'assets/js/table.min.js"></script>
//       <script src="'.base_url().'assets/js/bundles/export-tables/dataTables.buttons.min.js"></script>
//       <script src="'.base_url().'assets/js/bundles/export-tables/buttons.flash.min.js"></script>
//       <script src="'.base_url().'assets/js/bundles/export-tables/jszip.min.js"></script>
//       <script src="'.base_url().'assets/js/bundles/export-tables/pdfmake.min.js"></script>
//       <script src="'.base_url().'assets/js/bundles/export-tables/vfs_fonts.js"></script>
//       <script src="'.base_url().'assets/js/bundles/export-tables/buttons.html5.min.js"></script>
//       <script src="'.base_url().'assets/js/bundles/export-tables/buttons.print.min.js"></script>
//       <script src="'.base_url().'assets/js/pages/tables/jquery-datatable.js"></script>
//       <script src="'.base_url().'assets/js/datatable.js"></script>';
//
//       $this->template->load('template/templates', 'Mahasiswa/list_mhs_asing',$data);
//     }
//
//     public function add_mhs_asing()
//     {
//       // $data['list_data']=$this->general_model->getData('kerjasama_tabel');
//         $this->template->load('template/templates', 'mahasiswa/add_mhs_asing');
//         // print_r($data);
//     }
//
//     public function simpan_data_asing()
//     {
//         $data = $this->input->post();
//         // print_r($data);
//         $this->general_model->insert_data('mahasiswa_asing_tabel', $data);
//         redirect('mahasiswa/mahasiswa_asing');
//     }
//
//     public function approvemhs_asing($id)
//     {
//       $where = array('id_mhs_asig' => $id );
//       if ($this->session->userdata('level_login') == 4) {
//         $data = array('gkm_status' => 1);
//       }
//       if ($this->session->userdata('level_login') == 3) {
//         $data = array('gpm_status' => 1);
//       }
//       if ($this->session->userdata('level_login') == 2) {
//         $data = array('lpm_status' => 1);
//       }
//         $this->general_model->update_data('Mahasiswa_seleksi_tabel', $data, $where);
//         redirect('mahasiswa');
//     }
//
//     public function edit_data_asing($id)
//     {
//       $where = array('id_mhs_asing' => $id );
//       $data['edit_mhs_asing'] = 'update data';
//       $data['list_mhs_asing'] = $this->general_model->getwhererow('mahasiswa_asing_tabel', $where);
//
//       $this->template->load('template/templates', 'Mahasiswa/add_mhs_asing',$data);
//       // print_r($data['list_mhs']);
//     }
//
//     public function hapus_data_asing($id)
//     {
//       $where = array('id_mhs_asing' => $id );
//       $this->general_model->hapus_row('mahasiswa_asing_tabel', $where);
//       redirect('mahasiswa/mahasiswa_asing');
//       // print_r($data['list_mhs']);
//     }
//
//
// }
