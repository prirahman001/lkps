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
                        <a href="<?= base_url() ?>dosen">Dosen Praktisi/ Industri</a>
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
        <h5>Tambah Data Dosen Praktisi/ Industri</h5>
      </div>
        <div class="body">
          <div class="col-sm-12">
            <form class="" action="<?php echo base_url() ?>dosen/simpan_datapraktisi" method="post">
              <!-- EDIT -->
              <input type="hidden" name="id_profildosen" value="<?= isset($list_dosen->id_profildosen)? $list_dosen->id_profildosen : ''?>)">
              <!-- END -->
              <div class="row clearfix">
                  <div class="col-sm-6">
                      <div class="form-group form-float">
                          <div class="form-line">
                              <input type="text" class="form-control" name="nama_dosen">
                              <label class="form-label">Nama Dosen praktisi</label>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group form-float">
                          <div class="form-line">
                              <input type="text" class="form-control" name="NIDK">
                              <label class="form-label">NIDK</label>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group form-float">
                          <div class="form-line">
                              <input type="text" class="form-control" name="prshaan_industri">
                              <label class="form-label">Nama Perusahaan/ Industri</label>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group form-float">
                          <div class="form-line">
                              <input type="text" class="form-control" name="pendpasca_dosen">
                              <label class="form-label">Pendidikan Tertinggi</label>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <p>Bidang Keahlian</p>
                      <div class="form-group default-select ">
                          <select multiple="" class="form-control select2" data-placeholder="Select">
                              <option value=""> </option>
                              <?php foreach ($bidangKeahlian as $key ) {?>
                                <option value="<?php echo $key->id_bidangkea ?>"> <?php echo $key->nama_bidangkea; ?></option>
                              <?php } ?>
                              </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <p>Matakuliah Diampu pada Program Studi yang Diakreditasi</p>
                      <div class="form-group default-select ">
                          <select multiple="true" class="form-control select2" name="matakuliahprodi[]" data-placeholder="Select">
                              <option value=""> </option>
                              <?php foreach ($matakuliahprodi as $key ) {?>
                                <option value="<?php echo $key->id_matakuliah ?>"> <?php echo $key->nama_matkul; ?></option>
                              <?php } ?>
                              </select>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group form-float">
                          <div class="form-line">
                              <input type="text" class="form-control" name="sertpend_profesi">
                              <label class="form-label">Sertifikat Profesi/ Kompetensi</label>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group form-float">
                          <div class="form-line">
                              <input type="text" class="form-control">
                              <label class="form-label">Bobot sks</label>
                              <input type="hidden" id="text-input" value="2" name="status_dosen">
                              <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('fakultas_login')?>" name="fakultas_id">
                              <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('prodi_login')?>" name="prodi_id">
                              <input type="hidden" id="text-input" value="35" name="kriteria_kode">
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
