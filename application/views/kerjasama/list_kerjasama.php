<div class="block-header">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                    <h4 class="page-title">Kerjasama Tabel</h4>
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
                  <a  href="<?php echo base_url().'kerjasama/tambah_data'?>" class ="btn btn-success float-right mr-5" >Tambah data</a>
                <?php }
               ?>
                <div class="table-responsive">
                    <table id="tableExport" class="display table table-hover table-checkable order-column m-t-10 width-per-110">
                        <thead>
                          <tr>
                              <th>No</th>
                              <th>Lembaga Mitra</th>
                              <th>Lokasi</th>
                              <th>Internasional</th>
                              <th>Nasional</th>
                              <th>Lokal</th>
                              <th>Judul Kegiatan Kerjasama</th>
                              <th>Manfaat bagi PS yang Diakreditasi</th>
                              <th>Waktu dan Durasi</th>
                              <th>Bukti Kerjasama</th>
                              <th width="10%">Bentuk Kerjasama</th>
                              <th>Jenis Patner</th>
                              <th>Status Verifikasi</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; foreach ($list_data as $key) {
                            // echo $key->id_kerjasama."<br>";
                              $this->db->where('kerjasama_id',$key->id_kerjasama);
                              $datarelasi = $this->db->get('relasi_ks')->result();


                            ?>


                              <tr>
                                <td><?=$no++?></td>
                                <td><?=$key->nama_lembaga?></td>
                                <td><?=$key->lokasi_ks?></td>
                                <td><?=$key->ting_internasional?></td>
                                <td><?=$key->ting_nasional?></td>
                                <td><?=$key->ting_lokal?></td>
                                <td><?=$key->judul_kegiatanks?></td>
                                <td><?=$key->manfaat_ks?></td>
                                <td><?=$key->awal_ks.' - '.$key->selesai_ks?></td>
                                <td><?=$key->bukti_ks?></td>

                                <td>
                                <ol>
                                  <?php
                                foreach ($datarelasi as $k) {
                                    $this->db->where('id_kegiatanks', $k->kegiatanks_id);
                                    $datasubkegitan = $this->db->get('bntkegiatan_ks')->result();
                                    foreach ($datasubkegitan as $e) {
                                      echo "
                                          <li>".$e->nama_kegiatanks."</li>

                                      ";
                                    }

                                }
                                 ?>
                               </ol>
                               </td>

                                <td><?=$key->jenispatner_ks?></td>

                                <td>
                                  <?php
                                  if ($data == 5) {
                                    if ($key->tu_status == 1) {
                                      echo "Sedang Ditinjau GKM";
                                    }
                                    elseif ($key->tu_status == 2) {
                                      echo "Mohon Diperbaiki";
                                    }
                                  }
                                  // GKM
                                  if ($data == 4) {
                                    if ($key->gkm_status == 0) {
                                      echo "Belum Diverifikasi";
                                    }
                                    elseif ($key->gkm_status == 1) {
                                      echo "Sedang Ditinjau GPM";
                                    }
                                    elseif ($key->gkm_status == 2) {
                                      echo "Tidak Setujui Oleh GPM";
                                    }
                                    elseif ($key->gpm_status == 4) {
                                      echo "Dikembalikan Kepada TU";
                                    }
                                  }
                                  // GPM
                                  if ($data == 3) {
                                    if ($key->gpm_status == 0) {
                                      echo "Belum Diverifikasi";
                                    }
                                    elseif ($key->gpm_status == 1) {
                                      echo "Sedang Ditinjau LPM";
                                    }
                                    elseif ($key->gpm_status == 2) {
                                      echo "Tidak Setujui Oleh LPM";
                                    }
                                    elseif ($key->gpm_status == 4) {
                                      echo "Dikembalikan Kepada GKM";
                                    }
                                  }
                                  // LPM
                                  if ($data == 2) {
                                    if ($key->lpm_status == 0) {
                                      echo "Belum Diverifikasi";
                                    }
                                    elseif ($key->lpm_status == 1) {
                                      echo "Terkirim Kepada Dekan Fakultas";
                                    }
                                    elseif ($key->gpm_status == 2) {
                                      echo "Tidak Disetujui";
                                    }
                                    // elseif ($key->lpm_status == 2) {
                                    //   echo "Dikembalikan";
                                    // }
                                  }
                                  if ($data == 1) {
                                    if ($key->gpm_status == 0) {
                                      echo "Complete";
                                    }

                                  }
                                   ?>
                                </td>
                                <td>
                                <?php if ($data == 5) { ?>
                                  <a class="btn btn-primary" href="<?=base_url().'kerjasama/edit_data/'.$key->id_kerjasama?>">Update</a> <br>
                                  <a onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger" style="margin-Top:5px" href="<?= base_url().'kerjasama/hapus_data/'.$key->id_kerjasama?>">delete</a>
                                <?php }?>
                                <!-- punya GKM -->
                                <?php if ($data == 4) { ?>
                                  <!-- Approve -->
                                  <?php if($key->gkm_status== 0){?>
                                  <a class="btn btn-success" href="<?php echo base_url().'kerjasama/aproveKerjaSama/'.$key->id_kerjasama?>">Approve</a>
                                  <a class="btn btn-danger" style="margin-top:5px" href="<?php echo base_url().'kerjasama/kembalikanks/'.$key->id_kerjasama?>">Disapprove</a>
                                  <?php } ?>
                                  <?php if ($key->gpm_status== 2) { ?>
                                  <a class="btn btn-danger" style="margin-top:5px" href="<?php echo base_url().'kerjasama/kembalikanks/'.$key->id_kerjasama?>">Disapprove</a>
                                  <?php } ?>
                                <?php } ?>

                                <?php if ($data == 3) { ?>
                                  <?php if($key->gpm_status== 0){?>
                                  <a class="btn btn-success" href="<?php echo base_url().'kerjasama/aproveKerjaSama/'.$key->id_kerjasama?>">Approve</a>
                                  <a class="btn btn-danger" style="margin-top:5px" href="<?php echo base_url().'kerjasama/kembalikanks/'.$key->id_kerjasama?>">Disapprove</a>
                                  <?php } ?>
                                  <?php if ($key->gpm_status== 2) { ?>
                                  <a class="btn btn-danger" style="margin-top:5px" href="<?php echo base_url().'kerjasama/kembalikanks/'.$key->id_kerjasama?>">Disapprove</a>
                                  <?php } ?>
                                <?php }?>

                                <?php if ($data == 2) { ?>
                                  <?php if($key->lpm_status== 0){?>
                                  <a class="btn btn-success" href="<?php echo base_url().'kerjasama/aproveKerjaSama/'.$key->id_kerjasama?>">Approve</a>
                                  <a class="btn btn-danger" style="margin-top:5px" href="<?php echo base_url().'kerjasama/kembalikanks/'.$key->id_kerjasama?>">Disapprove</a>
                                  <?php } ?>
                                  <?php if ($key->lpm_status== 2) { ?>
                                  <a class="btn btn-danger" style="margin-top:5px" href="<?php echo base_url().'kerjasama/kembalikanks/'.$key->id_kerjasama?>">Disapprove</a>
                                  <?php } ?>
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
