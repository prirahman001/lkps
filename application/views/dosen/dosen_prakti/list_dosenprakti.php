<div class="block-header">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                    <h4 class="page-title">Dosen Praktis/Industri</h4>
                </li>
                <li class="breadcrumb-item bcrumb-1">
                    <a href="<?php base_url() ?>Dashboard ">
                        <i class="fas fa-home"></i> Home</a>
                </li>
                <li class="breadcrumb-item active">Tabel  <?php echo $title; ?></li>
            </ul>
        </div>
    </div>
</div
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
                  <a  href="<?php echo base_url().'dosen/tambah_datapraktisi'?>" class ="btn btn-success float-right mr-5" >Tambah data</a>
                <?php }
               ?>

               <!-- MODAL START -->

                <!-- MODAL END -->

                <div class="table-responsive">
                    <table id="tableExport" class="display table table-hover table-checkable order-column m-t-0 width-per-100">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Dosen Praktisi</th>
                            <th>NIDK</th>
                            <th>Perusahaan/ Industri</th>
                            <th>Pendidikan tertinggi</th>
                            <th>Bidang Keahlian</th>
                            <th>Sertifikat Profesi</th>
                            <th>Mata Kuliah Diampu</th>
                            <th>Bobot Kredit (sks)</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>

                        </thead>
                        <tbody>
                          <?php $no=1; foreach ($list_data as $key) { ?>

                              <tr>
                                <td><?=$no++?></td>
                                <td><?=$key->nama_dosen?></td>
                                <td><?=$key->nidk?></td>
                                <td><?=$key->prshaan_industri?></td>
                                <td><?=$key->pendpasca_dosen?></td>
                                <td><?php foreach ($bidangKeahlian as $bk) {
                                  if ($bk->profildosen_id == $key->id_profildosen) {
                                    echo "<li>".$bk->nama_bidangkea."</li>";
                                  }
                                }?></td>
                                <td><?php if ($key->kesesuaianinti_ps == 1) {
                                  echo "V";
                                }
                                  else {
                                     echo "-"; }?></td>
                                <td><?php if ($key->jabatanak_dosen == 1) {
                                  echo "Asisten Ahli";
                                }
                                elseif ($key->jabatanak_dosen == 2) {
                                  echo "Lektor";
                                }
                                elseif ($key->jabatanak_dosen == 3) {
                                  echo "Lektor Kepala";
                                }elseif ($key->jabatanak_dosen == 4) {
                                    echo "Profesor";
                                }else {
                                  echo "None";
                                }?></td>

                                <!-- <td><?=$key->sertpend_profesi?></td> -->
                                <td><?=$key->sertkompen_industri?></td>
                                <td><?php foreach ($dosen_tetap as $dos) {
                                  if ($dos->id_profildosen == $key->id_profildosen) {
                                    echo "<li>".$dos->nama_matkul."</li>";
                                  }
                                }?></td>
                                <!-- KESESUAIAN BIDANG MATAKULIAH  -->
                                <td><?php if ($key->kesesuaian_bidang == 1) {
                                  echo "Sesuai";}
                                  else {
                                  echo "Tidak Sesuai";
                                  } ?></td>

                                <td></td>

                                <!-- <td><?php if ($key->status_dosen == 0) {
                                  echo "Dosen Tetap";
                                  }elseif ($key->status_dosen == 1) {
                                    echo "Dosen Tidak Tetap";
                                  }elseif ($key->status_dosen ==2 ) {
                                    echo "Dosen Praktisi";
                                  }?></td> -->

                                <td>
                                  <?php
                                  if ($key->gkm_status == 1){
                                    $status = "Telah Disetujui GKM";
                                    if ($key->gpm_status == 1) {
                                      $status = "Selesai";
                                    }
                                    elseif ($key->gpm_status == 2) {
                                      $status = "Dikembalikan Oleh GPM";
                                    }
                                    elseif ($key->gpm_status == 0) {
                                      $status = "Telah Disetujui GKM Sedang Ditinjau GPM";
                                    }
                                    elseif ($key->gpm_status == 3) {
                                      $status = "Telah Diperbaiki TU & Ditinjau GPM";
                                    }
                                  }
                                  elseif ($key->gkm_status == 2) {
                                    $status = "Dikembalikan Oleh GKM";
                                  }
                                  elseif ($key->gkm_status == 0) {
                                    $status = "Sedang Ditinjau GKM";
                                  }
                                  elseif ($key->gkm_status == 3) {
                                    $status = "Telah Diperbaiki TU & Ditinjau GPM";
                                  }
                                  echo $status;
                                   ?>

                                    </td>
                                    <td>
                                      <!-- TU ACTION -->
                                    <?php if ($data == 5) { ?>
                                      <a href="<?=base_url().'dosen/tambah_datapraktisi/'.$key->id_profildosen?>"><i class="fas fa-edit text-primary" style="font-size:20px;"></i></a> <br>

                                      <a onClick="return confirm('Anda yakin inggin menghapus data ini?')"  style="margin-Top:5px" href="<?=base_url().'dosen/hapus_datapraktisi/'.$key->id_profildosen?>"><i class="fas fa-trash text-danger" style="font-size:20px;"></i></a>

                                      <!-- <?php if ($key->tu_status == 1) {?>
                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#basicModal<?php echo $key->id_mhs_seleksi ?>"><i class="material-icons">error</i></a> -->
                                    <?php } }?>
                                    <!-- END TU -->

                                    <! punya GKM -->
                                    <?php if ($data == 4) { ?>
                                      <!-- Approve -->
                                      <?php if($key->gkm_status== 0  || $key->gkm_status == 3){?>
                                      <a class="btn btn-success" href="<?=base_url().'mahasiswa/approve_datamhs/'.$key->id_mhs_seleksi?>">Approve</a> <br>

                                      <button type="button" name="button" class="btn btn-danger" style="margin-top:5px" data-toggle="modal" data-target="#exampleModalCenter<?php echo $key->id_mhs_seleksi ?>" >Disapprove</button>
                                      <?php } ?>
                                    <?php }?>

                                    <?php if ($data == 3) { ?>
                                      <?php if($key->gpm_status== 0 || $key->gpm_status == 3){?>
                                      <a class="btn btn-success" href="<?php echo base_url().'mahasiswa/aproveKerjaSama/'.$key->id_kerjasama?>">Approve</a>

                                      <button type="button" name="button" class="btn btn-danger" style="margin-top:5px" data-toggle="modal" data-target="#exampleModalCenter<?php echo $key->id_kerjasama ?>" >Disapprove</button>n-danger" style="margin-top:10px" href="#">Disapprove</a>
                                    <?php }?>
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
