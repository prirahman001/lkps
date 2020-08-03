
<div class="block-header">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                    <h4 class="page-title">Mahasiswa Asing</h4>
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
                  <a  href="<?php echo base_url().'mahasiswa/add_mhs_asing'?>" class ="btn btn-success float-right mr-5" >Tambah data</a>
                <?php }
               ?>
                <div class="table-responsive">
                    <table id="tableExport" class="display table table-hover table-checkable order-column m-t-0 width-per-100">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>tahun Akademik</th>
                            <th>Program Studi</th>
                            <th>Jumlah Mahasiswa Asing</th>
                            <th>Jumlah Mahasiswa Asing Full-Time</th>
                            <th>Jumlah Mahasiswa Asing Part-Time</th>
                            <th>Status</th>
                            <th>Action</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; foreach ($list_data as $key) { ?>
                              <tr>
                                <td><?=$no++?></td>
                                <td><?=$key->tahun_akademik_asing?></td>
                                <td><?=$key->nama_prodi?></td>
                                <td><?=$key->jumlahmhsaktif_asing?></td>
                                <td><?=$key->jumlahmhsfull_asing?></td>
                                <td><?=$key->jumlahmhspart_asing?></td>
                                <td>
                                  <?php
                                  if ($data == 5) {
                                    if ($key->tu_status == 1) {
                                      echo "Data Terkirim";
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
                                      echo "Data Dikirim ke LPM";
                                    }
                                    elseif ($key->gpm_status == 2) {
                                      echo "Data Dikembalikan";
                                    }
                                  }
                                  if ($data == 2) {
                                    if ($key->lpm_status == 0) {
                                      echo "Perlu Peninjauan";
                                    }
                                    elseif ($key->lpm_status == 1) {
                                      echo "Data Dikirim ke Dekan";
                                    }
                                    elseif ($key->lpm_status == 2) {
                                      echo "Data Dikembalikan";
                                    }
                                  }
                                   ?>
                                </td>
                                <td>
                                <?php if ($data == 5) { ?>
                                  <a class="btn btn-primary" href="<?=base_url().'mahasiswa/edit_data_asing/'.$key->id_mhs_asing?>">Update</a> <br>
                                  <a onClick="return confirm('Anda yakin inggin menghapus data ini?')" class="btn btn-danger" style="margin-Top:5px" href="<?= base_url().'mahasiswa/hapus_data_asing/'.$key->id_mhs_asing?>">delete</a>
                                <?php }?>
                                <!-- punya GKM -->
                                <?php if ($data == 4) { ?>
                                  <!-- Approve -->
                                  <?php if($key->gkm_status== 0){?>
                                  <a class="btn btn-success" href="<?php echo base_url().'mahasiswa/approvemhs_asing'.$key->id_mhs_asing?>">Approve</a>
                                  <a class="btn btn-danger" style="margin-top:5px" href="#">Disapprove</a>
                                <?php }?>

                                  <!-- <a class="btn btn-danger <?php echo ($key->gkm_status == 1 ? 'Disapprove':''); ?>" style="margin-top:5px;" href="#">Disapprove</a> -->
                                <?php }?>

                                <?php if ($data == 3) { ?>
                                  <a class="btn btn-success" href="<?php echo base_url().'mahasiswa/approvemhs_asing'.$key->id_mhs_asing?>">Approve</a>
                                  <a class="btn btn-danger" style="margin-top:5px" href="#">Disapprove</a>
                                <?php }?>

                                <?php if ($data == 2) { ?>
                                  <a class="btn btn-success" href="<?php echo base_url().'mahasiswa/approvemhs_asing'.$key->id_mhs_asing?>">Approve</a>
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
