<style >
  .kembalikan{
    cursor: not-allowed !important;
  }
</style>
<div class="block-header">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                    <h4 class="page-title">Dosen Tetap</h4>
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
                  <a  href="<?php echo base_url().'kerjasama/add_data'?>" class ="btn btn-success float-right mr-5" >Tambah data</a>
                <?php }
               ?>
                <div class="table-responsive">
                    <table id="tableExport" class="display table table-hover table-checkable order-column m-t-10 width-per-110">
                        <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Dosen</th>
                              <th>NIDN</th>
                              <th>Pendidika Pasca Sarjana</th>
                              <th>Bidang Keahlian</th>
                              <th>Kesesuaian Kopetensi Inti PS</th>
                              <th>Jabatan Akademik</th>
                              <th>Sertifikat Pendidikan Profresional</th>
                              <th>Sertifikat Kopetensi</th>
                              <th>Matakuliah Diampu Ps Diakreditasi</th>
                              <th>Kesesuaian Matakuliah Diampu</th>
                              <th>Matakuliah Diampu PS lain</th>
                              <th>Status Dosen</th>
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
                                <td><?=$key->kesesuaian_ps?></td>
                                <td><?=$key->jabatanak_dosen?></td>
                                <td><?=$key->sertpend_profesi?></td>
                                <td><?=$key->sertkompen_industri?></td>
                                <td><?=$key->bidangmk_id?></td>
                                <td><?=$key->bidangkeahlian_mk?></td>
                                <td><?=$key->mkps_lain?></td>
                                <td><?=$key->status_dosen?></td>
                                <!-- <td>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Lihat</button>
                                </td> -->
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
                                  <button type="button" class="btn btn-primary" href="#">Update</button>
                                  <button type="button" class="btn btn-danger" style="margin-top:10px" href="#">delete</button>
                                <?php }?>
                                <!-- punya GKM -->
                                <?php if ($data == 4) { ?>
                                  <!-- Approve -->
                                  <?php if($key->gkm_status== 0){?>
                                  <a class="btn btn-success" href="<?php echo base_url().'kerjasama/approvedosen/'.$key->id_kerjasama?>">Approve</a>
                                <?php } ?>
                                  <a class="btn btn-danger <?php echo ($key->gkm_status == 1 ? 'kembalikan':''); ?>" style="margin-top:10px;" href="#">Kembalikan</a>
                                <?php }?>

                                <?php if ($data == 3) { ?>
                                  <a class="btn btn-success" href="<?php echo base_url().'kerjasama/approvedosen/'.$key->id_kerjasama?>">Approve</a>
                                  <a class="btn btn-danger" style="margin-top:10px" href="#">Kembalikan</a>
                                <?php }?>

                                <?php if ($data == 2) { ?>
                                  <a class="btn btn-success" href="<?php echo base_url().'kerjasama/approvedosen/'.$key->id_kerjasama?>">Approve</a>
                                  <a class="btn btn-danger" style="margin-top:10px" href="#">Kembalikan</a>
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
