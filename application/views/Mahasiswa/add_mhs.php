<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">Tambah data</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="<?= base_url() ?>Dashboard">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item bcrumb-2">
                        <a href="<?= base_url() ?>kerjasama">Tabel Kerjasama</a>
                    </li>
                    <li class="breadcrumb-item active">Tambah Data</li>
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
                      <strong>Tambah Data Mahasiswa Seleksi</h2>
              </div>
              <div class="body">
                  <div class="row clearfix">
                      <div class="col-sm-12">
                        <form action="<?php echo base_url() ?>mahasiswa/simpan_data" method="post">

                          <div class="form-group">
                              <div class="form-line">
                                  <input type="number" value="<?=isset($list_mhs->tahun_akademik) ? $list_mhs->tahun_akademik : ''?>" name="tahun_akademik" class="form-control" placeholder="Tahun Akademin " />
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="form-line">
                                  <input type="number" name="daya_tampung" class="form-control" placeholder="Daya Tampung Mahasiswa" />
                              </div>
                          </div>

                          <p class="card-inside-title" style="font-size:14px">Jumlah Calon Mahasiswa</p>
                          <div class="row clearfix">
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="number" name="pendaftar_msh" class="form-control" placeholder="Pendaftar " />
                                  </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="number" name="lulus_seleksi_mhs" class="form-control" placeholder="Lulus Seleksi " />
                                  </div>
                              </div>
                            </div>
                          </div>

                          <p class="card-inside-title" style="font-size:14px; margin-top:-20px">Jumlah Mahasiswa Baru</p>
                          <div class="row clearfix">
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="number" name="reguler_baru_mhs" class="form-control" placeholder="Reguler" />
                                  </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="number" name="transfer_baru_mhs" class="form-control" placeholder="Transfer " />
                                  </div>
                              </div>
                            </div>
                          </div>

                          <p class="card-inside-title" style="font-size:14px; margin-top:-20px ">Jumlah Mahasiswa Aktif</p>
                          <div class="row clearfix">
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <div class="form-line">
                                      <input type="number" name="reguler_aktif_mhs" class="form-control" placeholder="Reguler " />
                                  </div>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <div class="form-line">
                                    <input type="hidden" id="text-input" value="22" name="kriteria_kode">
                                      <input type="number" name="transferaktif_mhs" class="form-control" placeholder="Transfer " />
                                      <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('prodi_login')?>" name="prodi_kode">
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
