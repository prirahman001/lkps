<div class="content">
    <div class="animated fadeIn">


        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Halaman Pengisian </strong> Seleksi Mahasiswa
                    </div>
                    <div class="card-body card-block">
                        <form action="<?= base_url().'mahasiswa/simpan_data'?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Akademik</label></div>
                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="tahun_akademik" placeholder="Tahun Akademik" class="form-control">
                                <small class="form-text text-muted"></small></div>
                          </div>
                          <div class="row form-group">
                              <div class="col col-md-3"><label for="text-input" class=" form-control-label">Daya Tampung Mahasiswa</label></div>
                              <div class="col-12 col-md-9"><input type="number" id="text-input" name="daya_tampung" placeholder="Daya Tampung" class="form-control">
                                <small class="form-text text-muted"></small></div>
                          </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Calon Mahasiswa Pendaftar</label></div>
                                <div class="col-12 col-md-9"><input type="number" id="text-input" name="pendaftar_msh" placeholder="Judul Kegiatan" class="form-control">
                                  <small class="form-text text-muted"></small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label"></label>Jumlah Calon Mahasiswa Lulus Seleksi</div>
                                <div class="col-12 col-md-9"><input type="number" name="lulus_seleksi_mhs" id="text-input" rows="9" placeholder="Jumlah Calon seleksi" class="form-control"></textarea></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label"></label>Jumlah Mahasiswa Baru Reguler</div>
                                <div class="col-12 col-md-9"><input type="number" name="reguler_baru_mhs" id="text-input" rows="9" placeholder="Jumlah Baru Reguler" class="form-control"></textarea></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label"></label>Jumlah Mahasiswa Baru Transfer</div>
                                <div class="col-12 col-md-9"><input type="number" name="transfer_baru_mhs" id="text-input" rows="9" placeholder="Jumlah Baru Transfer" class="form-control"></textarea></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label"></label>Jumlah Mahasiswa Aktif Reguler</div>
                                <div class="col-12 col-md-9"><input type="number" name="reguler_aktif_mhs" id="text-input" rows="9" placeholder="Jumlah Aktif Reguler" class="form-control"></textarea></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah Mahasiswa Aktif Transfer</label></div>
                                <div class="col-12 col-md-9">
                                  <input type="number" type="text" id="text-input" name="transferaktif_mhs" placeholder="Jumlah Aktif Transfer" class="form-control">
                                  <input type="hidden" id="text-input" value="21" name="kriteria_kode">
                                  <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('prodi_login')?>" name="prodi_kode">
                                  <small class="form-text text-muted"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                  <input class="btn btn-primary float-right" type="submit" value="simpan">
                                  </div
                            </div>
                          </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
