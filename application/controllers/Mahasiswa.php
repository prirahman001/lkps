<?php


class Mahasiswa extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model("general_model");
    $this->load->model("Gpm_model");
    $this->load->model("Lpm_model");
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
      $data['list_data']=$this->Lpm_model->mahasiswa_seleksi()->result();
    }
    elseif ($this->session->userdata('level_login')== 3) {
      $data['list_data']=$this->Gpm_model->mahasiswa_seleksi($this->session->userdata('fakultas_login'))->result();
    }
    else {
      $data['list_data']=$this->general_model->getwhere('Mahasiswa_seleksi_tabel','prodi_id',$this->session->userdata('prodi_login'),'created_at','DESC')->result();

    }

      // $data['list_data']=$this->general_model->getData('Mahasiswa_seleksi_tabel');
      $data['title']='Mahasiswa';

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

      $this->template->load('template/templates', 'Mahasiswa/list_mhs',$data);
      // print_r($data);
    }
    public function tambah_datamhs()
    {

        // $data['list_data']=$this->general_model->getData('Mahasiswa_seleksi_tabel');
        $this->template->load('template/templates', 'Mahasiswa/add_mhs');
        // print_r($data);
    }

    public function simpan_datamhs()
    {
        $data = $this->input->post();
        $data['updated_at'] = date('Y-m-d');

        // print_r($data);
        $id_mahasiswa = $this->input->post('id_mhs_seleksi');
        if ($id_mahasiswa) {
          $this->general_model->update_data('Mahasiswa_seleksi_tabel', $data, 'id_mhs_seleksi='. $id_mahasiswa);
        }else{
          $this->general_model->insert_data('Mahasiswa_seleksi_tabel', $data);
        }

        redirect('mahasiswa');
    }


    // public function simpan_data()
    // {
    //     $data = $this->input->post();
    //     // print_r($data);
    //     $this->general_model->insert_data('Mahasiswa_seleksi_tabel', $data);
    //     redirect('mahasiswa');
    //     }

    public function edit_datamhs($id)
    {
      $where = array('id_mhs_seleksi' => $id );
      $data['edit_mhs'] = 'update data';
      $data['list_mhs'] = $this->general_model->getwhererow('Mahasiswa_seleksi_tabel', $where);
        $this->template->load('template/templates', 'Mahasiswa/add_mhs',$data);

      // print_r($data['list_mhs']);
    }

    public function perbaikan_datamhs($id)
    {
      $where = array('id_mhs_seleksi' => $id );
      $data['edit_mhs'] = 'update data';
      $data['list_mhs'] = $this->general_model->getwhererow('Mahasiswa_seleksi_tabel', $where);
      $this->template->load('template/templates', 'Mahasiswa/perbaikan_mhs',$data);

      // print_r($data['list_mhs']);
    }

    public function perbaiki_mhs()
    {
        $data = $this->input->post();
        $data['updated_at'] = date('Y-m-d');
        $data['tu_status'] = 0;

        $id_mahasiswa = $this->input->post('id_mhs_seleksi');
        $data_mahasiswa = $this->general_model->getwhere2('Mahasiswa_seleksi_tabel','id_mhs_seleksi',$id_mahasiswa)->row_array();

        if ($data_mahasiswa['gpm_status']==2) {
          $data['gpm_status'] = 3;
        }
        elseif ($data_mahasiswa['gkm_status']==2) {
          $data['gkm_status'] = 3;
        }

        if ($id_mahasiswa) {
          $this->general_model->update_data('Mahasiswa_seleksi_tabel', $data, 'id_mhs_seleksi='. $id_mahasiswa);
          // code...
        }
        else{
          $this->general_model->insert_data('Mahasiswa_seleksi_tabel', $data);
        }
        redirect('mahasiswa');
    }

    public function hapus_datamhs($id)
    {
      $where = array('id_mhs_seleksi' => $id );
      $this->general_model->hapus_row('Mahasiswa_seleksi_tabel', $where);
      redirect('mahasiswa');
      // print_r($data['list_mhs']);
    }

    public function approve_datamhs($id)
    {
      $where = array('id_mhs_seleksi' => $id );
      if ($this->session->userdata('level_login') == 4) {
        $data = array('gkm_status' => 1);
      }
      if ($this->session->userdata('level_login') == 3) {
        $data = array('gpm_status' => 1);
      }
      $this->general_model->update_data('Mahasiswa_seleksi_tabel', $data, $where);
      redirect('mahasiswa');
    }


    public function disapprove_datamhs()
    {
      $input=$this->input->post();
      $id=$input['id_mhs_seleksi'];
      // print_r($input);

      $where = array('id_mhs_seleksi' => $id );
      if ($this->session->userdata('level_login') == 4) {
        $data = array('tu_status' => 1,'gkm_status' => 2,'keterangan'=>$input['ket_modal']);
      }
      if ($this->session->userdata('level_login') == 3) {
        $data = array('gpm_status' => 2, 'tu_status' => 1,'keterangan'=>$input['ket_modal']);
      }

        $this->general_model->update_data('Mahasiswa_seleksi_tabel', $data, $where);
        redirect('mahasiswa');
      }


        // MAHASISWA ASING

    public function mahasiswa_asing()
    {
      // print_r($data);
      if ($this->session->userdata('level_login')== 1) {
        $data['list_data']=$this->Lpm_model->mahasiswa_asing()->result();
      }
      elseif ($this->session->userdata('level_login')== 3) {
        $data['list_data']=$this->Gpm_model->mahasiswa_asing($this->session->userdata('fakultas_login'))->result();
      }
      else {
        $data['list_data']=$this->general_model->getwhere('mahasiswa_asing_tabel','prodi_id',$this->session->userdata('prodi_login'),'created_at','DESC')->result();

      }
      $data['title']='Mahasiswa Asing';
      // $data['list_data']=$this->general_model->getData('mahasiswa_asing_tabel');

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

      $this->template->load('template/templates', 'Mahasiswa/list_mhs_asing',$data);
    }

    public function tambah_datamhsa()
    {
      // $data['list_data']=$this->general_model->getData('kerjasama_tabel');
        $this->template->load('template/templates', 'mahasiswa/add_mhs_asing');
        // print_r($data);
    }

    public function simpan_data_asing()
    {
        $data = $this->input->post();
        $data['updated_at'] = date('Y-m-d');
        $data['tu_status'] = 0;
        // print_r($data);
        $id_mahasiswa = $this->input->post('id_mhs_asing');
        if ($id_mahasiswa) {
          $this->general_model->update_data('mahasiswa_asing_tabel', $data, "id_mhs_asing= $id_mahasiswa");
          // code...
        }else{
          $this->general_model->insert_data('mahasiswa_asing_tabel', $data);
        }
        redirect('mahasiswa/mahasiswa_asing');
    }

    public function perbaiki_mhsa($id)
    {
        $data = $this->input->post();
        $data['updated_at'] = date('Y-m-d');
        $data['tu_status'] = 0;
        // print_r($data);
        $id_mhs_asing = $id;
        $data_mahasiswaasing = $this->general_model->getwhere2('mahasiswa_asing_tabel','id_mhs_asing',$id_mahasiswa)->row_array();

        if ($data_mahasiswa['gpm_status']==2) {
          $data['gpm_status'] = 3;
        }
        elseif ($data_mahasiswa['gkm_status']==2) {
          $data['gkm_status'] = 3;
        }

        if ($id_mhs_asing) {
          $this->general_model->update_data('mahasiswa_asing_tabel', $data, "id_mhs_asing= $id_mhs_asing");
        }else{
          $this->general_model->insert_data('mahasiswa_asing_tabel', $data);
        }
        redirect('mahasiswa/mahasiswa_asing');
    }

    public function edit_data_asing($id)
    {
      $data['edit_mhs_asing'] = 'update data';
      $where = array('id_mhs_asing' => $id );
      $data['list_mhs_asing'] = $this->general_model->getwhererow('mahasiswa_asing_tabel', $where);

      $this->template->load('template/templates', 'Mahasiswa/add_mhs_asing',$data);
      // print_r($data['list_mhs']);
    }

    public function perbaikan_datamhsa($id)
    {
      $data['perbaikan_datamhsa'] = 'update data';
      $where = array('id_mhs_asing' => $id );
      $data['list_mhs_asing'] = $this->general_model->getwhererow('mahasiswa_asing_tabel', $where);

      $this->template->load('template/templates', 'Mahasiswa/perbaikan_mhsa',$data);

      // print_r($data['list_mhs_asing']);
    }

    public function hapus_data_asing($id)
    {
      $where = array('id_mhs_asing' => $id );
      $this->general_model->hapus_row('mahasiswa_asing_tabel', $where);
      redirect('mahasiswa/mahasiswa_asing');
      // print_r($data['list_mhs']);
    }

    public function approvemhsasing($id)
    {
      $where = array('id_mhs_asing' => $id );
      if ($this->session->userdata('level_login') == 4) {
        $data = array('gkm_status' => 1);
      }
      if ($this->session->userdata('level_login') == 3) {
        $data = array('gpm_status' => 1);
      }
      $this->general_model->update_data('mahasiswa_asing_tabel', $data, $where);
      redirect('mahasiswa/mahasiswa_asing');
    }


    public function disapprovemhsasing()
    {$input=$this->input->post();
    $id=$input['id_mhs_asing'];
    // print_r($input);

    $where = array('id_mhs_asing' => $id );
    if ($this->session->userdata('level_login') == 4) {
      $data = array('tu_status' => 1,'gkm_status' => 2,'keterangan'=>$input['ket_modal']);
    }
      if ($this->session->userdata('level_login') == 3) {
        $data = array('gpm_status' => 2, 'tu_status' => 1,'keterangan'=>$input['ket_modal']);
      }

        $this->general_model->update_data('mahasiswa_asing_tabel', $data, $where);
        redirect('Mahasiswa/mahasiswa_asing');
      }

}
