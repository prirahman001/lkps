<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Kerjasama</strong>
                    </div>
                    <div class="card-body">

                      <?php $data = $this->session->userdata('level_login');
                        if ($data == 5) { ?>
                          <a  href="<?php echo base_url().'kerjasama/tambah_data'?>" class ="btn btn-success float-right" >Tambah data</a>
                        <?php }
                       ?>
                      <br> <br>
                        <table id="bootstrap-data-table " class="table table-striped table-bordered data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Lembaga Mitra</th>
                                    <th>Internasional</th>
                                    <th>Nasional</th>
                                    <th>Lokal</th>
                                    <th>Judul Kegiatan Kerjasama</th>
                                    <th>Manfaat bagi PS yang Diakreditasi</th>
                                    <th>Waktu dan Durasi</th>
                                    <th>Bukti Kerjasama</th>
                                    <th>Status Verifikasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $no=1; foreach ($list_data as $key) { ?>


                                  <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$key->nama_lembaga?></td>
                                    <td><?=$key->ting_internasional?></td>
                                    <td><?=$key->ting_nasional?></td>
                                    <td><?=$key->ting_lokal?></td>
                                    <td><?=$key->judul_kegiatanks?></td>
                                    <td><?=$key->manfaat_ks?></td>
                                    <td><?=$key->awal_ks.' - '.$key->selesai_ks?></td>
                                    <td><?=$key->bukti_ks?></td>
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
                                      <a class="btn btn-primary" href="#">Update</a>
                                      <a class="btn btn-danger" style="margin-top:10px" href="#">delete</a>
                                    <?php }?>
                                    <?php if ($data == 4) { ?>
                                      <a class="btn btn-success" href="<?php echo base_url().'kerjasama/aproveKerjaSama/'.$key->id_kerjasama?>">Approve</a>
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
    </div><!-- .animated -->
</div><!-- .content -->
