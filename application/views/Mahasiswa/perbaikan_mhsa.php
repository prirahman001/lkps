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
                        <form action="<?php echo base_url() ?>mahasiswa/perbaiki_mhsa" method="post">
                          <input type="hidden" name="id_mhs_asing" value="<?= $list_mhs_asing->id_mhs_asing ?>">

                          <div class="col-sm-12">
                              <div class="form-group form-float">
                                  <div class="form-line">
                                      <input type="text" class="form-control" value="<?= $list_mhs_asing->tahun_akademik_asing ?>" name="tahun_akademik_asing">
                                      <label class="form-label">Tahun Akademik</label>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group form-float">
                                  <div class="form-line">
                                      <input type="text" class="form-control" value="<?=isset($list_mhs->jumlahmhsaktif_asing) ? $list_mhs->jumlahmhsaktif_asing : ''?>" name="jumlahmhsaktif_asing">
                                      <label class="form-label">Jumlah Mahasiswa Aktif Asing</label>
                                  </div>
                              </div>
                          </div>

                          <div class="col-sm-12">
                              <div class="form-group form-float">
                                  <div class="form-line">
                                      <input type="text" class="form-control" value="<?=isset($list_mhs->jumlahmhsfull_asing) ? $list_mhs->jumlahmhsfull_asing : ''?>" name="jumlahmhsfull_asing">
                                      <label class="form-label">Jumlah Mahasiswa Asing Aktif Full-time</label>
                                  </div>
                              </div>
                          </div>

                          <div class="col-sm-12">
                              <div class="form-group form-float">
                                  <div class="form-line">
                                      <input type="text" class="form-control" value="<?=isset($list_mhs->jumlahmhspart_asing) ? $list_mhs->jumlahmhspart_asing : ''?>" name="jumlahmhspart_asing">
                                      <label class="form-label">Jumlah Mahasiswa Asing Aktif Part-time</label>
                                      <input type="hidden" id="text-input" value="21" name="kriteria_kode">
                                      <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('fakultas_id')?>" name="fakultas_id">
                                      <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('prodi_login')?>" name="prodi_id">
                                      <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('prodi')?>"name="nama_prodi">
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
