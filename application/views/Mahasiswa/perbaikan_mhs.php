<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">Perbaikan data</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="<?= base_url() ?>Dashboard">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="<?= base_url() ?>kerjasama">Tabel Mahasiswa</a>
                    </li>
                    <li class="breadcrumb-item active">Perbaikan Data</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
              <div class="header">
                  <h2>
                      <strong>Perbaikan Data Mahasiswa Seleksi</h2>
              </div>
              <div class="body">
                  <div class="row clearfix">
                      <div class="col-sm-12">
                        <form action="<?php echo base_url() ?>mahasiswa/perbaiki_mhs" method="post">
                          <input type="hidden" name="id_mhs_seleksi" value="<?= isset($list_mhs->id_mhs_seleksi) ? $list_mhs->id_mhs_seleksi : ''?>">
                          <div class="row clearfix">
                          <div class="col-sm-12">
                              <div class="form-group form-float">
                                  <div class="form-line">
                                      <input type="text" class="form-control" value="<?=isset($list_mhs->tahun_akademik) ? $list_mhs->tahun_akademik : ''?>" name="tahun_akademik">
                                      <label class="form-label">Tahun Akademik</label>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group form-float">
                                  <div class="form-line">
                                      <input type="number" class="form-control" value="<?=isset($list_mhs->daya_tampung) ? $list_mhs->daya_tampung : ''?>" name="daya_tampung">
                                      <label class="form-label">Daya Tampung Mahasiswa</label >
                                  </div>
                              </div>
                          </div>
                          </div>

                          <p class="card-inside-title" style="font-size:14px">Jumlah Calon Mahasiswa</p>
                          <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?=isset($list_mhs->pendaftar_msh) ? $list_mhs->pendaftar_msh : ''?>" name="pendaftar_msh">
                                        <label class="form-label">Pendaftar</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" value="<?=isset($list_mhs->lulus_seleksi_mhs) ? $list_mhs->lulus_seleksi_mhs : ''?>" name="lulus_seleksi_mhs">
                                        <label class="form-label">Lulus Seleksi</label >
                                    </div>
                                </div>
                            </div>
                        </div>

                          <p class="card-inside-title" style="font-size:14px; margin-top:-20px">Jumlah Mahasiswa Baru</p>
                          <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?=isset($list_mhs->reguler_baru_mhs) ? $list_mhs->reguler_baru_mhs : ''?>" name="reguler_baru_mhs">
                                        <label class="form-label">Reguler</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" value="<?=isset($list_mhs->transfer_baru_mhs) ? $list_mhs->transfer_baru_mhs : ''?>" name="transfer_baru_mhs">
                                        <label class="form-label">Transfer</label >
                                    </div>
                                </div>
                            </div>
                          </div>

                          <p class="card-inside-title" style="font-size:14px; margin-top:-20px ">Jumlah Mahasiswa Aktif</p>
                          <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?=isset($list_mhs->reguler_aktif_mhs) ? $list_mhs->reguler_aktif_mhs : ''?>" name="reguler_aktif_mhs">
                                        <label class="form-label">Reguler</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" value="<?=isset($list_mhs->transferaktif_mhs) ? $list_mhs->transferaktif_mhs : ''?>" name="transferaktif_mhs">
                                        <label class="form-label">Transfer</label >
                                          <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('fakultas_login')?>" name="fakultas_id">
                                          <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('prodi_login')?>" name="prodi_id">
                                          <input type="hidden" id="text-input" value="22" name="kriteria_kode">
                                    </div>
                                </div>
                            </div>
                          </div>


                          <div class="row form-group">
                              <div class="col col-md-12">
                                <input class="btn btn-primary float-right" type="submit" value="simpan">
                              </div>
                          </div>

                      </form>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
