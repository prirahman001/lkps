<div class="block-header">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                    <h4 class="page-title">Kurikulum</h4>
                </li>
                <li class="breadcrumb-item bcrumb-1">
                    <a href="<?php base_url() ?>dashboard">
                        <i class="fas fa-home"></i> Home</a>
                </li>
                <li class="breadcrumb-item active">Tabel <?php echo $title; ?></li>
            </ul>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>Tabel</strong> <?php echo $title; ?></h2>
            </div>

            <div class="body">
              <?php $data = $this->session->userdata('level_login');
                if ($data == 5) { ?>
                  <a  href="<?php echo base_url().'Pendidikan/add_kurikulum'?>" class ="btn btn-success float-right mr-5" >Tambah data</a>
                <?php }
               ?>
                <div class="table-responsive">
                    <table id="tableExport" class="display table table-hover table-checkable order-column m-t-0 width-per-100">
                        <thead style="text-align:center">
                          <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Semester</th>
                            <th rowspan="2">Kode Matakuliah</th>
                            <th rowspan="2">Nama Matakuliah</th>
                            <th rowspan="2">Matakuliah Kopetensi</th>
                            <th colspan="3">Bobot Kredit (sks)</th>
                            <th rowspan="2">Konversi(Jam)</th>
                            <th colspan="4">Capaian Pembelajaran</th>
                            <th rowspan="2">Dok. Pembelajaran</th>
                            <th rowspan="2">Unit Penyelenggara</th>
                            <th rowspan="2">Status</th>
                            <th rowspan="2">Action</th>
                          </tr>
                          <tr>
                            <th>Kuliah</th>
                            <th>Seminar</th>
                            <th>Praktikum</th>
                            <th>Sikap</th>
                            <th>Pengetahuan</th>
                            <th>Keteramplan Khusus</th>
                            <th>Keteramplan Umum</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; foreach ($list_data_kurikulum as $key) { ?>
                              <tr>
                                <td><?=$no++?></td>
                                <td><?=$key->semester_mk?></td>
                                <td><?=$key->kode_mk?></td>
                                <td><?=$key->nama_matkul?></td>
                                <td><?=$key->mk_kopetensi?></td>
                                <td><?=$key->bobot_kuliah?></td>
                                <td><?=$key->bobot_seminar?></td>
                                <td><?=$key->bobot_praktik?></td>
                                <td><?=$key->konversi_jam?></td>
                                <td><?=$key->cp_sikap?></td>
                                <td><?=$key->cp_pengetahuan?></td>
                                <td><?=$key->cp_ketramkhusus?></td>
                                <td><?=$key->cp_ketramumum?></td>
                                <td><?=$key->dok_renpembe?></td>
                                <td><?=$key->unit_penyeleng?></td>

                                <td>
                                  <?php
                                  if ($data == 5) {
                                    if ($key->tu_status == 1) {
                                      echo "Data Dikirim ke GKM";
                                    }
                                  }
                                  if ($data == 4) {
                                    if ($key->gkm_status == 0) {
                                      echo "Perlu Peninjauan";
                                    }
                                    elseif ($key->gkm_status == 1) {
                                      echo "Data Dikirim ke GPM";
                                    }
                                    elseif ($key->gkm_status == 2) {
                                      echo "Data Dikembalikan";
                                    }
                                  }
                                  if ($data == 3) {
                                    if ($key->gpm_status == 0) {
                                      echo "Perlu Peninjauan";
                                    }
                                    elseif ($key->gpm_status == 1) {
                                      echo "Data Diterima";
                                    }
                                    elseif ($key->gpm_status == 2) {
                                      echo "Data Dikembalikan";
                                    }
                                  }
                                   ?>
                                </td>
                                <td>
                                <?php if ($data == 5) { ?>
                                  <a class="btn btn-primary" href="<?=base_url().'Pendidikan/edit_data_pen/'.$key->id_matakuliah?>">Update</a> <br>
                                  <a onClick="return confirm('Anda yakin inggin menghapus data ini?')" class="btn btn-danger" style="margin-Top:5px" href="<?= base_url().'mahasiswa/hapus_data_pen/'.$key->id_matakuliah?>">delete</a>
                                <?php }?>

                                <!-- Approve GKM -->
                                <?php if ($data == 4) { ?>
                                  <?php if($key->gkm_status== 0){?>
                                  <a class="btn btn-success" href="<?php echo base_url().'Pendidikan/approvemhs_pen'.$key->id_matakuliah?>">Approve</a>
                                  <a class="btn btn-danger" style="margin-top:5px" href="#">Disapprove</a>
                                <?php }?>

                                  <!-- <a class="btn btn-danger <?php echo ($key->gkm_status == 1 ? 'Disapprove':''); ?>" style="margin-top:5px;" href="#">Disapprove</a> -->
                                <?php }?>

                                <?php if ($data == 3) { ?>
                                  <a class="btn btn-success" href="<?php echo base_url().'mahasiswa/approvemhs_pen'.$key->id_kurikulum?>">Approve</a>
                                  <a class="btn btn-danger" style="margin-top:5px" href="#">Disapprove</a>
                                <?php }?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
