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
                        <a href="<?= base_url() ?>mahasiswa_asing">Tabel Mahasiswa Asing</a>
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
                      <strong>Tambah Data Mahasiswa Asing
                  </h2>
              </div>
              <div class="body">
                  <div class="row clearfix">
                      <div class="col-sm-12">
                        <form action="<?php echo base_url() ?>mahasiswa/simpan_data_asing" method="post">
                          <div class="form-group">
                              <div class="form-line">
                                  <input type="number" value="<?=isset($list_mhs_asing->tahun_akademik_asing) ? $list_mhs_asing->tahun_akademik_asing : ''?>" name="tahun_akademik_asing" class="form-control" placeholder="Tahun Akademik" />
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="form-line">
                                  <input type="number" value="<?=isset($list_mhs_asing->jumlahmhsaktif_asing) ? $list_mhs_asing->jumlahmhsaktif_asing : ''?>" name="jumlahmhsaktif_asing" class="form-control" placeholder="Jumlah Mahasiswa Asing Aktif" />
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="form-line">
                                  <input type="number" value="<?=isset($list_mhs_asing->jumlahmhsfull_asing) ? $list_mhs_asing->jumlahmhsfull_asing : ''?>" name="jumlahmhsfull_asing" class="form-control" placeholder="Jumlah Mahasiswa Asing Aktif Full-time" />
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="form-line">
                                  <input type="number" value="<?=isset($list_mhs_asing->jumlahmhspart_asing) ? $list_mhs_asing->jumlahmhspart_asing : ''?>" name="jumlahmhspart_asing" class="form-control" placeholder="Jumlah Mahasiswa Asing Aktif Part-time" />
                                  <input type="hidden" id="text-input" value="21" name="kriteria_kode">
                                  <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('prodi_login')?>" name="prodi_kode">
                                  <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('prodi')?>"name="nama_prodi">
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
