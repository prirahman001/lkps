</style>
<div class="block-header">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                    <h4 class="page-title">Dosen Tidak Tetap</h4>
                </li>
                <li class="breadcrumb-item bcrumb-1">
                    <a href="<?php base_url() ?>Dashboard ">
                        <i class="fas fa-home"></i> Home</a>
                </li>
                <li class="breadcrumb-item active">Tabel  <?php echo $title; ?></li>
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
                  <a  href="<?php echo base_url().'dosen/tambah_data_tidaktetap'?>" class ="btn btn-success float-right mr-5" >Tambah data</a>
                <?php }
               ?>
                <div class="table-responsive">
                    <table id="tableExport" class="display table table-hover table-checkable order-column m-t-10 width-per-110">
                        <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Dosen</th>
                              <th>NIDN</th>
                              <th>Pend Pasca Sarjana</th>
                              <th>Bidang Keahlian</th>
                              <th>Sert Pendidikan Profresional</th>
                              <th>Matakuliah Ps Diakreditasi</th>
                              <th>Kesesuaian Matakuliah</th>
                              <!-- <th>Status Dosen</th> -->
                              <th>Status Verifikasi</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; foreach ($list_data as $key) { ?>

                              <tr>
                                <td><?=$no++?></td>
                                <td><?=$key->nama_dosen?></td>
                                <td><?=$key->nidn_dosen?></td>
                                <td><?=$key->pendpasca_dosen?></td>
                                <td><?php foreach ($bidangKeahlian as $bk) {
                                  if ($bk->profildosen_id == $key->id_profildosen) {
                                    echo "<li>".$bk->nama_bidangkea."</li>";
                                  }
                                }?></td>
                                <td><?=$key->sertpend_profesi?></td>
                                <td> </td>
                                <td><?php if ($key->kesesuaian_bidang == 1) {
                                  echo "V";
                                  }else {
                                  echo "-";}?></td>

                                <!-- <td><?=$key->status_dosen?></td> -->
                                <!-- <td>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Lihat</button>
                                </td> -->
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
                                      <a href="<?=base_url().'dosen/tambah_data_tidaktetap/'.$key->id_profildosen?>"><i class="fas fa-edit text-primary" style="font-size:20px;"></i></a> <br>

                                      <a onClick="return confirm('Anda yakin inggin menghapus data ini?')"  style="margin-Top:5px" href="<?=base_url().'dosen/hapus_datattetap/'.$key-> id_profildosen?>"><i class="fas fa-trash text-danger" style="font-size:20px;"></i></a>

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
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Content goes here..
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info waves-effect">Save</button>
                    <button type="button" class="btn btn-danger waves-effect"
                        data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div> -->

<script>
  window.onload = function() {
      var anchors = document.getElementsByClassName('kembalikan');
      for(var i = 0; i < anchors.length; i++) {
          var anchor = anchors[i];
          anchor.onclick = function(e) {
              e.preventDefault();
          }
      }
  }


</script>
