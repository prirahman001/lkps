<div class="block-header">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                    <h4 class="page-title">Dosen EWMP Dosen PS</h4>
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
                  <a  href="<?php echo base_url().'dosen/tambah_data_dosen'?>" class ="btn btn-success float-right mr-5" >Tambah data</a>
                <?php }
               ?>

               <!-- MODAL START -->
                <!-- <div class="row clearfix js-sweetalert">
                  <?php foreach ($list_data as $keymodal) { ?>
                   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                       <div class="modal fade" id="exampleModalCenter<?php echo $keymodal->id_profildosen ?>" tabindex="-1" role="dialog"
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
                                       <form action="<?php echo base_url()?>dosen/disapprove_dosen" method="post">
                                           <!-- <label for="email_address1">Email Address</label> -->
                                           <div class="form-group">
                                               <div class="form-line">
                                                 <input type="hidden" name="id_profildosen" value="<?php echo $keymodal->id_profildosen ?>">
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
                       <div class="modal fade" id="basicModal<?php echo $keymodal->id_profildosen ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                       <a href="<?=base_url().'dosen/perbaikan_datadosen/'.$keymodal->id_profildosen?>" class="btn btn-info waves-effect">Perbaiki</a>
                                       <button type="button" class="btn btn-danger waves-effect"
                                           data-dismiss="modal">batal</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                 <?php } ?>
                </div> -->
                <!-- MODAL END -->


                <div class="table-responsive">
                    <table id="tableExport" class="display table table-hover table-checkable order-column m-t-10 width-per-110">
                      <thead>
                        <tr style="text-align: center padding: auto">
                          <th rowspan="3">No</th>
                          <th rowspan="3">Nama Dosen</th>
                          <th rowspan="3">DTPS</th>
                          <th colspan="6">(EWMP) TS satuan kredit semester (sks)</th>
                          <th rowspan="3">Jumlah (sks)</th>
                          <th rowspan="3">Rata-Rata Persemester (sks)</th>
                          <th rowspan="3">Status</th>
                          <th rowspan="3">Action</th>
                        </tr>
                        <tr>
                          <th colspan="3">Pembelajaran dan Pembimbingan</th>
                          <th rowspan="2">Penelitian</th>
                          <th rowspan="2">PkM</th>
                          <th rowspan="2">Tugas Tambahan</th>
                        </tr>
                        <tr>
                          <th >PS Diakreditasi</th>
                          <th >PS Lain dalam PT</th>
                          <th >PS Lain luar PT</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; foreach ($namaProdiewmp->result() as $key) { ?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$key->nama_dosen?></td>
                          <td><?=$key->dtps_dosen ?></td>
                          <td><?=$key->pendps_ak ?></td>
                          <td><?=$key->pendps_pt?></td>
                          <td><?=$key->pendps_luar ?></td>
                          <td><?=$key->penelitia_dosen?></td>
                          <td><?=$key->pkm_dosen?></td>
                          <td><?=$key->tugas_tmbahan ?></td>

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
