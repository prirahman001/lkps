<?php

class Dosen extends CI_Controller
{
  public function __construct(){
    parent::__construct();
    $this->load->model("general_model");
    $this->load->model("Lpm_model");
    $this->load->model("Gpm_model");
    if ($this->session->userdata('is_login') != 1) {
      echo "<script>alert('Silahkan Login Terlebih Dahulu');
      window.location.href='".base_url('login')."';
      </script>";
    }
  }

  public function index()
  {
    // print_r($data);
    $dosen_tetap = $this->general_model->getjoin('SELECT pt.id_profildosen,kt.nama_matkul
      FROM relasimk_dosen rd
      JOIN kurikulum_tabel kt ON rd.matakuliah_id = kt.id_matakuliah
       JOIN profildosen_tabel pt ON rd.profildosen_id = pt.id_profildosen');
       $data['dosen_tetap'] = $dosen_tetap->result();

       $bidangKeahlian = $this->general_model->getjoin('SELECT pt.id_profildosen,bk.nama_bidangkea,rb.profildosen_id
         FROM relasi_bidangkeads rb
         JOIN bidang_keahliands bk ON rb.bidangkea_id = bk.id_bidangkea
          JOIN profildosen_tabel pt ON rb.profildosen_id = pt.id_profildosen');
          $data['bidangKeahlian'] = $bidangKeahlian->result();


          if ($this->session->userdata('level_login')== 1) {
            $data['list_data']=$this->Lpm_model->dosen(0)->result();
          }
          elseif ($this->session->userdata('level_login')== 3) {
            $data['list_data']=$this->Gpm_model->dosen($this->session->userdata('fakultas_login',0))->result();
          }
          else {
            $data['list_data']=$this->general_model->getDosen('profildosen_tabel','prodi_id',$this->session->userdata('prodi_login'),'created_at','DESC',0)->result();
            // $data['list_data']=$this->general_model->getwhere('profildosen_tabel','prodi_id',$this->session->userdata('prodi_login'),'created_at','DESC')->result();

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
    public function tambah_data_dosen()
    {
      // $data['list_data']=$this->general_model->getData('kerjasama_tabel');
        // print_r($data);
        $data['js']='<script src="'.base_url().'assets/js/form.min.js"></script>
        <script src="'.base_url().'assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
        <script src="'.base_url().'assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
        <script src="'.base_url().'assets/js/pages/forms/advanced-form-elements.js"></script>';

        $data['css']='<link href="'.base_url().'assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
        <link href="'.base_url().'assets/css/form.min.css" rel="stylesheet">';

        $data['list_dosen'] = [''=>''];

        // MANGGIL DATA PADA FORM DENGAN KONDISI
        $data['matakuliahprodi'] = $this->general_model->getwhere2('kurikulum_tabel','prodi_id',$this->session->userdata('prodi_login'))->result();
        $data ['matkulluar'] = $this->general_model->getjoin('SELECT * FROM kurikulum_tabel WHERE prodi_id != '.$this->session->userdata('prodi_login' ))->result();
        $data ['bidangKeahlian'] = $this->general_model->getjoin('SELECT * FROM bidang_keahliands')->result();
        // END
        // $data['Matakuliah']=$this->general_model->getData('relasimk_dosen');
        $this->template->load('template/templates', 'dosen/dosen_tetap/add_dosen',$data);


    }
    // public function show_data_dosen(){
    //   $dosen_tetap = $this->general_model->getjoin('SELECT pt.id_profildosen,pt.nama_dosen,pt.nidn_dosen, pt.pendpasca_dosen, pt.status_dosen, pt.namapt_dosen,
    //   kt.nama_matkul, pt.sertpend_profesi, pt.sertkompen_industri, pt.jabatanak_dosen, pt.kesesuaianinti_ps, pt.kesesuaian_bidang
    //   FROM relasimk_dosen rd
    //   JOIN kurikulum_tabel kt ON rd.matakuliah_id = kt.id_matakuliah
    //   JOIN profildosen_tabel pt ON rd.profildosen_id = pt.id_profildosen');
    //
    //      echo "<pre>";
    //      print_r($dosen_tetap->result_array());
    //      echo "</pre>";
    //
    // // }
    // public function simpan_data_dosen()
    // {
    //     $query        = "select max(id_profildosen) as last_id from profildosen_tabel";
    //     $id_terakhir  = $this->db->query($query)->row();
    //     $last_id      = $id_terakhir->last_id + 1;
    //     $data1        = $this->input->post();
    //     $deleted      = array();
    //     $insert       = array();
    //
    //     $id_kerjasama = $this->input->post('id_profildosen');
    //
    //     if (isset($id_profildosen)) {
    //
    //       // Input Update Data Relasi
    //       $old_data = $this->general_model->getwhere('relasimk_dosen','profildosen_id',$id_profildosen)->result_array();
    //       $insert = $data1['matakuliah_table'];
    //
    //       foreach ($old_data as $key) {
    //         $deleted[] = $key['matakuliah_id'];
    //         foreach ($insert as $z => $value) {
    //             if ($key['matakuliah_id'] == $value) {
    //               unset($insert[$z]);
    //             }
    //         }
    //       }
    //
    //       foreach ($data1['matakuliah_table'] as $i => $value) {
    //         foreach ($deleted as $j => $val) {
    //           if ($value == $val) {
    //             unset($deleted[$j]);
    //             // unset($insert[$j]);
    //           }
    //         }
    //       }
    //
    //       if (!empty($deleted)) {
    //         foreach ($deleted as $i => $isi) {
    //           foreach ($old_data as $j) {
    //             if ($isi == $j['matakuliah_id']) {
    //               $this->general_model->delete('relasi_ks','id_relasiks',$j['id_relasiks']);
    //               // echo $j['id_relasiks'];
    //             }
    //           }
    //         }
    //       }
    //
    //       if (!empty($insert)) {
    //           foreach ($insert as $i => $value) {
    //             $new_input[] = array(
    //               'profildosen_id'  => $id_profildosen,
    //               'matakuliah_id' => $value
    //             );
    //           }
    //           $input_matakuliah = $this->general_model->store_batch('relasimk_dosen',$new_input);
    //       }
    //       // End Input Data Relasi
    //
    //       // Input data kerjasama
    //       unset($data1['matakuliah_table']);
    //       // $data1['updated_at'] = date('Y-m-d');
    //       // print_r($data1);
    //       $this->general_model->update_data('profildosen_tabel', $data1, "id_profildosen= $id_profildosen");
    //
    //
    //     }else{
    //       // $this->general_model->insert_data('kerjasama_tabel', $data);
    //       unset($data1['matakuliah_table']);
    //
    //       $data1['id_profildosen'] = $last_id;
    //       $this->general_model->insert_data('profildosen_tabel', $data1);
    //       $data2 = $this->input->post('matakuliah_table');
    //       $this->general_model->multiple_insert_data('relasimk_dosen', $data2, $last_id);
    //     }
    //
    //     // echo "<pre>";
    //     // print_r($data1);
    //     // echo "</pre>";
    //
    //     // echo "<pre>";
    //     // print_r($last_id);
    //     // echo "</pre>";
    //     redirect('Dosen');
    // }

    // public function edit_data($id)
    // {
    //   $where = array('id_kerjasama' => $id );
    //   $data['matakuliah_table']=$this->general_model->getData('matakuliah_table');
    //   $data['js']='<script src="'.base_url().'assets/js/form.min.js"></script>
    //   <script src="'.base_url().'assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
    //   <script src="'.base_url().'assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
    //   <script src="'.base_url().'assets/js/pages/forms/advanced-form-elements.js"></script>
    //
    //   ';
    //
    //   $data['css']='<link href="'.base_url().'assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
    //   <link href="'.base_url().'assets/css/form.min.css" rel="stylesheet">';
    //   $data['edit_dosen'] = 'update data';
    //   $data['list_dosen'] = $this->general_model->getwhererow('profildosen_tabel', $where);
    //     $this->template->load('template/templates', 'dosen/tambah_data_dosen',$data);
    //   // print_r($data['list_mhs']);
    // }

    public function hapus_data_dosen($id)
    {
      $where = array('id_profildosen' => $id );
      $this->general_model->hapus_row('profildosen_tabel', $where);
      redirect('dosen');
      // print_r($data['list_mhs']);
    }

    public function approve_dosen($id)
    {
      $where = array('id_profildosen' => $id );
      if ($this->session->userdata('level_login') == 4) {
        $data = array('gkm_status' => 1);
      }
      if ($this->session->userdata('level_login') == 3) {
        $data = array('gpm_status' => 1);
      }
      $this->general_model->update_data('profildosen_tabel', $data, $where);
      redirect('dosen');
    }


    public function disapprove_dosen()
    {
      $input=$this->input->post();
      $id=$input['id_profildosen'];
      // print_r($input);

      $where = array('id_profildosen' => $id );
      if ($this->session->userdata('level_login') == 4) {
        $data = array('tu_status' => 1,'gkm_status' => 2,'keterangan'=>$input['ket_modal']);
      }
      if ($this->session->userdata('level_login') == 3) {
        $data = array('gpm_status' => 2, 'tu_status' => 1,'keterangan'=>$input['ket_modal']);
      }

        $this->general_model->update_data('profildosen_tabel', $data, $where);
        redirect('dosen');
      }


// ##########################################################################################################
  // DOSEN PEMBIMBING TA START
      public function dosen_pemta()
      {
        // print_r($data);
        if ($this->session->userdata('level_login')== 1) {
          $data['list_data']=$this->Lpm_model->dosenpemta()->result();
        }
        elseif ($this->session->userdata('level_login')== 3) {
          $data['list_data']=$this->Gpm_model->dosenpemta($this->session->userdata('fakultas_login'))->result();
        }
        else {
          $data['list_data']=$this->general_model->getwhere('pembimbingta_tabel','prodi_id',$this->session->userdata('prodi_login'),'created_at','DESC')->result();

        }
          // $data['list_data']=$this->general_model->getData('Mahasiswa_seleksi_tabel');
          $data['title']='Dosen Pembimbing TA';

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


          $data['dosenProdi'] = $this->general_model->getwhere2('profildosen_tabel','prodi_id',$this->session->userdata('prodi_login'))->result();


          $this->template->load('template/templates', 'dosen/dosen_pemta/list_dosenpemta',$data);
        }
          public function tambah_pemta()
          {
            // $data['list_data']=$this->general_model->getData('kerjasama_tabel');
              // print_r($data);
              $data['js']='<script src="'.base_url().'assets/js/form.min.js"></script>
              <script src="'.base_url().'assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
              <script src="'.base_url().'assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
              <script src="'.base_url().'assets/js/pages/forms/advanced-form-elements.js"></script>
              <script src="'.base_url().'assets/js/pages/forms/basic-form-elements.js"></script>';


              $data['css']='<link href="'.base_url().'assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
              <link href="'.base_url().'assets/css/form.min.css" rel="stylesheet">';

              $data['list_dosen'] = [''=>''];
              // $data['Matakuliah']=$this->general_model->getData('relasimk_dosen');
              $this->template->load('template/templates', 'dosen/dosen_pemta/tambah_pemta',$data);

          }
        // DOSEN PEMBIMBING TA END

        // ############################################################################################
        // DOSEN EWMP START
        public function dosen_ewmp()
        {
          // print_r($data);
          if ($this->session->userdata('level_login')== 1) {
            $data['list_data']=$this->Lpm_model->dosenewmp()->result();
          }
          elseif ($this->session->userdata('level_login')== 3) {
            $data['list_data']=$this->Gpm_model->dosenewmp($this->session->userdata('fakultas_login'))->result();
          }
          else {
            $data['list_data']=$this->general_model->getwhere('pembimbingta_tabel','prodi_id',$this->session->userdata('prodi_login'),'created_at','DESC')->result();

          }
            // $data['list_data']=$this->general_model->getData('Mahasiswa_seleksi_tabel');
            $data['title']='(EWMP) Dosen Tetap';

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

            // JOIN 1 Relasi
            $tabel = 'ewmpdosen_tabel';
            $tabeljoin = 'profildosen_tabel';
            $fkjoin = 'profildosen_tabel.id_profildosen = ewmpdosen_tabel.profildosen_id';
            $wherejoin = 'ewmpdosen_tabel.prodi_id';
            $id = $this->session->userdata('prodi_login');
            // $tabel,$tabeljoin,$fkjoin,$wherejoin,$id
            $data['namaProdiewmp'] = $this->general_model->getjoin1($tabel,$tabeljoin,$fkjoin,$wherejoin,$id);
            //$data['namaProdiewmp'] = $this->general_model->getjoin1('ewmpdosen_tabel','profildosen_tabel','id_profildosen','profildosen_id','prodi_id',1);
            // END RELASI
            $data['dosenProdi'] = $this->general_model->getwhere2('profildosen_tabel','prodi_id',$this->session->userdata('prodi_login'))->result();
            $this->template->load('template/templates', 'dosen/dosen_ewmp/list_dosenewmp',$data);


          }

          public function tambah_data_ewmp()
          {
            // $data['list_data']=$this->general_model->getData('kerjasama_tabel');
              // print_r($data);
              $data['js']='<script src="'.base_url().'assets/js/form.min.js"></script>
              <script src="'.base_url().'assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
              <script src="'.base_url().'assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
              <script src="'.base_url().'assets/js/pages/forms/advanced-form-elements.js"></script>';

              $data['css']='<link href="'.base_url().'assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
              <link href="'.base_url().'assets/css/form.min.css" rel="stylesheet">';

              $data['list_dosen'] = [''=>''];
              // $data['Matakuliah']=$this->general_model->getData('relasimk_dosen');
              $data['dosenProdi'] = $this->general_model->getwhere2('profildosen_tabel','prodi_id',$this->session->userdata('prodi_login'))->result();

              $this->template->load('template/templates', 'dosen/dosen_ewmp/tambah_ewmp',$data);


          }
        // DOSENEWMP END

        //DOSEN TIDAK TETAP START
        public function dosen_tidaktetap()
        {
          $dosen_tetap = $this->general_model->getjoin('SELECT pt.id_profildosen,kt.nama_matkul
            FROM relasimk_dosen rd
            JOIN kurikulum_tabel kt ON rd.matakuliah_id = kt.id_matakuliah
             JOIN profildosen_tabel pt ON rd.profildosen_id = pt.id_profildosen');
             $data['dosen_tetap'] = $dosen_tetap->result();

             $bidangKeahlian = $this->general_model->getjoin('SELECT pt.id_profildosen,bk.nama_bidangkea,rb.profildosen_id
               FROM relasi_bidangkeads rb
               JOIN bidang_keahliands bk ON rb.bidangkea_id = bk.id_bidangkea
                JOIN profildosen_tabel pt ON rb.profildosen_id = pt.id_profildosen');
                $data['bidangKeahlian'] = $bidangKeahlian->result();

          // print_r($data);
          if ($this->session->userdata('level_login')== 1) {
            $data['list_data']=$this->Lpm_model->dosen(1)->result();
          }
          elseif ($this->session->userdata('level_login')== 3) {
            $data['list_data']=$this->Gpm_model->dosen($this->session->userdata('fakultas_login',1))->result();
          }
          else {
            $data['list_data']=$this->general_model->getDosen('profildosen_tabel','prodi_id',$this->session->userdata('prodi_login'),'created_at','DESC',1)->result();
            // $data['list_data']=$this->general_model->getwhere('profildosen_tabel','prodi_id',$this->session->userdata('prodi_login'),'created_at','DESC')->result();

          }
            // $data['list_data']=$this->general_model->getData('Mahasiswa_seleksi_tabel');
            $data['title']='Dosen Tidak Tetap';

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


            $this->template->load('template/templates', 'dosen/dosen_tidaktetap/list_dstidaktetap',$data);
          }
          public function tambah_data_tidaktetap()
          {
            // $data['list_data']=$this->general_model->getData('kerjasama_tabel');
              // print_r($data);
              $data['js']='<script src="'.base_url().'assets/js/form.min.js"></script>
              <script src="'.base_url().'assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
              <script src="'.base_url().'assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
              <script src="'.base_url().'assets/js/pages/forms/advanced-form-elements.js"></script>';

              $data['css']='<link href="'.base_url().'assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
              <link href="'.base_url().'assets/css/form.min.css" rel="stylesheet">';

              $data['list_dosen'] = [''=>''];

              // MANGGIL DATA PADA FORM DENGAN KONDISI
              $data['matakuliahprodi'] = $this->general_model->getwhere2('kurikulum_tabel','prodi_id',$this->session->userdata('prodi_login'))->result();
              $data ['matkulluar'] = $this->general_model->getjoin('SELECT * FROM kurikulum_tabel WHERE prodi_id != '.$this->session->userdata('prodi_login' ))->result();
              $data ['bidangKeahlian'] = $this->general_model->getjoin('SELECT * FROM bidang_keahliands')->result();
              // END
              // $data['Matakuliah']=$this->general_model->getData('relasimk_dosen');
              $this->template->load('template/templates', 'dosen/dosen_tidaktetap/tambah_tidaktetap',$data);
            }

            public function simpan_datattetap(){
            $data = $this->input->post();
            $this->general_model->insert_data('profildosen_tabel',$data);
            redirect('Dosen/dosen_tidaktetap');
            print_r($data);
            }

            public function hapus_datattetap($id){
            $where  = array('id_profildosen' => $id);
            $this->general_model->hapus_row('profildosen_tabel',$where);
            redirect('Dosen/dosen_tidaktetap');
            }

          //DOSEN TIDAK Praktisi START
          public function dosen_prakti()
          {
            $dosen_tetap = $this->general_model->getjoin('SELECT pt.id_profildosen,kt.nama_matkul
              FROM relasimk_dosen rd
              JOIN kurikulum_tabel kt ON rd.matakuliah_id = kt.id_matakuliah
               JOIN profildosen_tabel pt ON rd.profildosen_id = pt.id_profildosen');
               $data['dosen_tetap'] = $dosen_tetap->result();

               $bidangKeahlian = $this->general_model->getjoin('SELECT pt.id_profildosen,bk.nama_bidangkea,rb.profildosen_id
                 FROM relasi_bidangkeads rb
                 JOIN bidang_keahliands bk ON rb.bidangkea_id = bk.id_bidangkea
                  JOIN profildosen_tabel pt ON rb.profildosen_id = pt.id_profildosen');
                  $data['bidangKeahlian'] = $bidangKeahlian->result();

            // print_r($data);
            if ($this->session->userdata('level_login')== 1) {
              $data['list_data']=$this->Lpm_model->dosen(1)->result();
            }
            elseif ($this->session->userdata('level_login')== 3) {
              $data['list_data']=$this->Gpm_model->dosen($this->session->userdata('fakultas_login',2))->result();
            }
            else {
              $data['list_data']=$this->general_model->getDosen('profildosen_tabel','prodi_id',$this->session->userdata('prodi_login'),'created_at','DESC',2)->result();
              // $data['list_data']=$this->general_model->getwhere('profildosen_tabel','prodi_id',$this->session->userdata('prodi_login'),'created_at','DESC')->result();

            }
              // $data['list_data']=$this->general_model->getData('Mahasiswa_seleksi_tabel');
              $data['title']='Dosen Praktisi/ Industri';

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


              $this->template->load('template/templates', 'dosen/dosen_prakti/list_dosenprakti',$data);
            }
            public function tambah_datapraktisi()
            {
              // $data['list_data']=$this->general_model->getData('kerjasama_tabel');
                // print_r($data);
                $data['js']='<script src="'.base_url().'assets/js/form.min.js"></script>
                <script src="'.base_url().'assets/js/bundles/multiselect/js/jquery.multi-select.js"></script>
                <script src="'.base_url().'assets/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
                <script src="'.base_url().'assets/js/pages/forms/advanced-form-elements.js"></script>';

                $data['css']='<link href="'.base_url().'assets/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
                <link href="'.base_url().'assets/css/form.min.css" rel="stylesheet">';

                $data['list_dosen'] = [''=>''];

                // MANGGIL DATA PADA FORM DENGAN KONDISI
                $data['matakuliahprodi'] = $this->general_model->getwhere2('kurikulum_tabel','prodi_id',$this->session->userdata('prodi_login'))->result();
                $data ['matkulluar'] = $this->general_model->getjoin('SELECT * FROM kurikulum_tabel WHERE prodi_id != '.$this->session->userdata('prodi_login' ))->result();
                $data ['bidangKeahlian'] = $this->general_model->getjoin('SELECT * FROM bidang_keahliands')->result();
                // END
                // $data['Matakuliah']=$this->general_model->getData('relasimk_dosen');
                $this->template->load('template/templates', 'dosen/dosen_prakti/tambah_dosenpraktisi',$data);
              }
              public function simpan_datapraktisi(){
              $data = $this->input->post();
              $this->general_model->insert_data('profildosen_tabel',$data);
              redirect('dosen/dosen_prakti');
            }

            public function hapus_datapraktisi($id)
            {
              $where = array('id_profildosen' => $id );
              $this->general_model->hapus_row('profildosen_tabel', $where);
              redirect('dosen/dosen_prakti');
              // print_r($data['list_mhs']);
            }

}
