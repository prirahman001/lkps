<div class="block-header">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                    <h4 class="page-title">Dosen Tetap Pembimbing TA</h4>
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
                  <a  href="<?php echo base_url().'dosen/tambah_pemta'?>" class ="btn btn-success float-right mr-5" >Tambah data</a>
                <?php }
               ?>

               <!-- MODAL START -->
                <div class="row clearfix js-sweetalert">
                  <?php foreach ($list_data as $keymodal) { ?>
                   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                       <div class="modal fade" id="exampleModalCenter<?php echo $keymodal->id_pembimbingta ?>" tabindex="-1" role="dialog"
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
                                       <form action="<?php echo base_url()?>dosen/disapprove_pemta" method="post">
                                           <!-- <label for="email_address1">Email Address</label> -->
                                           <div class="form-group">
                                               <div class="form-line">
                                                 <input type="hidden" name="id_pembimbingta" value="<?php echo $keymodal->id_mhs_seleksi ?>">
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
                       <div class="modal fade" id="basicModal<?php echo $keymodal->id_pembimbingta ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                       <a href="<?=base_url().'mahasiswa/perbaikan_datamhs/'.$keymodal->id_pembimbingta?>" class="btn btn-info waves-effect">Perbaiki</a>
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
                            <th rowspan="2">No</th>
                            <th rowspan="2">Nama Dosen</th>
                            <th rowspan="2">Tahun</th>
                            <th colspan="2">Jumlah Mahasiswa yang Dibimbing</th>
                            <th rowspan="2">Jumlah Rata-Rata Pertahun</th>
                            <th rowspan="2">Jumlah Rata-Rata keseluruhan</th>
                            <th rowspan="2">Status</th>
                            <th rowspan="2">Action</th>
                          </tr>
                          <tr>
                            <th>PS Diakreditas/ Th</th>
                            <th>PS Lain Program sama/ Th</th>
                          </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
