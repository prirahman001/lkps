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
				<a href="<?php echo base_url().'kerjasama/tambah_data'?>" class="btn btn-success float-right mr-12">Tambah
					data</a>
				<?php }
               ?>
				<!-- MODAL START -->
				<div class="row clearfix js-sweetalert">
					<?php foreach ($list_data as $keymodal) { ?>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="modal fade" id="exampleModalCenter<?php echo $keymodal->id_kerjasama ?>" tabindex="-1"
							role="dialog" aria-labelledby="formModal" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="formModal">Keteranga Dikembalikan</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form action="<?php echo base_url()?>kerjasama/disaprove_data" method="post">
											<!-- <label for="email_address1">Email Address</label> -->
											<div class="form-group">
												<div class="form-line">
													<input type="hidden" name="id_kerjasama" value="<?php echo $keymodal->id_kerjasama ?>">
													<textarea name="ket_modal" placeholder="Masukan Keteranga" rows="10"></textarea>

												</div>
											</div>
											<!-- <br> -->
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-info waves-effect">Kirim</button>
										<!-- <button type="button" class="btn btn-primary m-t-15 waves-effect">Kirim</button> -->
										</form>
										<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Batal</button>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="modal fade" id="basicModal<?php echo $keymodal->id_kerjasama ?>" tabindex="-1" role="dialog"
							aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">keterangan</h5>
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
										<a href="<?=base_url().'kerjasama/perbaikan_data/'.$keymodal->id_kerjasama?>"
											class="btn btn-info waves-effect">Perbaiki</a>
										<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">batal</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<!-- MODAL END -->

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
								<th>Judul Kegiatan</th>
								<th>Manfaat</th>
								<th>Durasi</th>
								<th>Bukti Kerjasama</th>
								<th width="10%">Bentuk Kerjasama</th>
								<th>Jenis Patner</th>
								<th>Status</th>
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
								<td><?php if ($key->ting_internasional == 1) {
                                  echo "V";}
                                  else {
                                  echo "-";
                                  } ?></td>
								<td><?php if ($key->ting_nasional == 1) {
                                  echo "V";}
                                  else {
                                  echo "-";
                                  } ?></td>
								<td><?php if ($key->ting_lokal == 1) {
                                  echo "V";}
                                  else {
                                  echo "-";
                                  } ?></td>
								<td><?=$key->judul_kegiatanks?></td>
								<td><?=$key->manfaat_ks?></td>
								<td><?=date_indo($key->awal_ks).' - '.date_indo($key->selesai_ks)?></td>
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
                                    $status = "Telah Diperbaiki TU & Ditinjau GKM";
                                  }
                                  echo $status;
                                   ?>


								</td>
								<td>
									<?php if ($data == 5) { ?>
									<a href="<?=base_url().'kerjasama/edit_data/'.$key->id_kerjasama?>"><i
											class="fas fa-edit text-primary" style="font-size:20px;"></i></a> <br>

									<a onClick="return confirm('Anda yakin ingin menghapus data ini?')" style="margin-Top:5px"
										href="<?= base_url().'kerjasama/hapus_data/'.$key->id_kerjasama?>"><i
											class="fas fa-trash text-danger" style="font-size:20px;"></i></a>
									<!-- class="btn btn-danger" -->
									<?php if ($key->tu_status==1){?>
									<a href="javascript:void(0)" data-toggle="modal"
										data-target="#basicModal<?php echo $key->id_kerjasama ?>"><i class="material-icons">error</i></a>
									<?php } }?>
									<!-- punya GKM -->
									<?php if ($data == 4) { ?>
									<!-- Approve GKM -->
									<?php if($key->gkm_status== 0 || $key->gkm_status == 3){?>
									<a class="btn btn-success"
										href="<?php echo base_url().'kerjasama/aprove_data/'.$key->id_kerjasama?>">Approve</a>


									<button type="button" name="button" class="btn btn-danger" style="margin-top:5px" data-toggle="modal"
										data-target="#exampleModalCenter<?php echo $key->id_kerjasama ?>">Disapprove</button>
									<?php } ?>
									<?php } ?>

									<?php if ($data == 3) { ?>
									<?php if($key->gpm_status== 0 || $key->gpm_status == 3){?>
									<a class="btn btn-success"
										href="<?php echo base_url().'kerjasama/aprove_data/'.$key->id_kerjasama?>">Approve</a>
									<!-- <a class="btn btn-danger" style="margin-top:5px" data-toggle="modal" data-target="#exampleModal" href="<?php echo base_url().'kerjasama/disaproveks/'.$key->id_kerjasama?>">Disapprove</a> -->
									<button type="button" name="button" class="btn btn-danger" style="margin-top:5px" data-toggle="modal"
										data-target="#exampleModalCenter<?php echo $key->id_kerjasama ?>">Disapprove</button>
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