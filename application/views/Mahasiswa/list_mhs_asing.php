
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
                  <a  href="<?php echo base_url().'mahasiswa/tambah_datamhsa'?>" class ="btn btn-success float-right mr-5" >Tambah data</a>
                <?php }
               ?>

               <!-- MODAL START -->
                <div class="row clearfix js-sweetalert">
                  <?php foreach ($list_data as $keymodal) { ?>
                   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                       <div class="modal fade" id="exampleModalCenter<?php echo $keymodal->id_mhs_asing ?>" tabindex="-1" role="dialog"
                           aria-labelledby="formModal" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="formModal">Keterangan Dikembalikan</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       <form action="<?php echo base_url()?>mahasiswa/disapprovemhsasing" method="post">
                                           <!-- <label for="email_address1">Email Address</label> -->
                                           <div class="form-group">
                                               <div class="form-line">
                                                 <input type="hidden" name="id_mhs_asing" value="<?php echo $keymodal->id_mhs_asing ?>">
                                                 <textarea name="ket_modal" placeholder="Masukan keterangan" rows="10"></textarea>

                                               </div>
                                           </div>
                                           <!-- <br> -->
                                   </div>
                                   <div class="modal-footer">
                                     <button type="submit" class="btn btn-info waves-effect">Kirim</button>
                                     <!-- <button type="button" class="btn btn-primary m-t-15 waves-effect">Kirim</button> -->
                                   </form>
                                       <button type="button" class="btn btn-danger waves-effect"
                                           data-dismiss="modal">Batal</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                       <div class="modal fade" id="basicModal<?php echo $keymodal->id_mhs_asing ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                           aria-hidden="true">
                           <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Keterangan</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                     <p>
                                       <?=$keymodal->keterangan?>
                                    </p>
                                   </div>
                                   <div class="modal-footer">
                                       <a href="<?=base_url().'mahasiswa/perbaikan_datamhsa/'.$keymodal->id_mhs_asing?>" class="btn btn-info waves-effect">Perbaiki</a>
                                       <button type="button" class="btn btn-danger waves-effect"
                                           data-dismiss="modal">batal</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                 <?php } ?>
                </div>
                <!-- MODAL END -->

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
                                  }
                                  elseif ($key->gkm_status == 2) {
                                    $status = "Dikembalikan Oleh GKM";
                                  }
                                  elseif ($key->gkm_status == 0) {
                                    $status = "Sedang Ditinjau GKM";
                                  }
                                  echo $status;
                                   ?>

                                 </td>
                                <td>
                                <?php if ($data == 5) { ?>
                                  <a href="<?=base_url().'mahasiswa/edit_data_asing/'.$key->id_mhs_asing?>"><i class="fas fa-edit text-primary" style="font-size:20px;"></i></a> <br>

                                  <a onClick="return confirm('Anda yakin inggin menghapus data ini?')"  style="margin-Top:5px" href="<?=base_url().'mahasiswa/hapus_data_asing/'.$key->id_mhs_asing?>"><i class="fas fa-trash text-danger" style="font-size:20px;"></i></a>

                                  <?php if ($key->tu_status == 1) {?>
                                  <a href="javascript:void(0)" data-toggle="modal" data-target="#basicModal<?php echo $key->id_mhs_asing ?>"><i class="material-icons">error</i></a>
                                <?php }}?>
                                <!-- punya GKM -->
                                <?php if ($data == 4) { ?>
                                  <!-- Approve -->
                                  <?php if($key->gkm_status== 0  || $key->gkm_status == 3){?>
                                  <a class="btn btn-success" href="<?=base_url().'mahasiswa/approvemhsasing/'.$key->id_mhs_asing?>">Approve</a> <br>

                                  <button type="button" name="button" class="btn btn-danger" style="margin-top:5px" data-toggle="modal" data-target="#exampleModalCenter<?php echo $key->id_mhs_asing ?>" >Disapprove</button>
                                <?php } }?>


                                <!-- APPROVE GPM -->
                                <?php if ($data == 3) { ?>
                                  <?php if($key->gkm_status== 0  || $key->gkm_status == 3){?>
                                  <a class="btn btn-success" href="<?=base_url().'mahasiswa_asing/approvemhsasing/'.$key->id_mhs_asing?>">Approve</a> <br>

                                  <button type="button" name="button" class="btn btn-danger" style="margin-top:5px" data-toggle="modal" data-target="#exampleModalCenter<?php echo $key->id_mhs_asing ?>" >Disapprove</button>
                                <?php } }?>

                                <!-- APPROVE END -->

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
