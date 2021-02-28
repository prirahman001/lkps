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
        <h5>Tambah Data Dosen Tidak Tetap</h5>
      </div>
        <div class="body">
          <div class="col-sm-12">
            <form class="" action="<?php echo base_url() ?>dosen/simpan_datattetap" method="post">
              <!-- EDIT -->
              <input type="hidden" name="id_profildosen" value="<?= isset($list_dosen->id_profildosen)? $list_dosen->id_profildosen : ''?>)">
              <!-- END -->
              <div class="row clearfix">
                  <div class="col-sm-6">
                      <div class="form-group form-float">
                          <div class="form-line">
                              <input type="text" class="form-control" name="nama_dosen">
                              <label class="form-label">Nama Dosen Tidak Tetap</label>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-group form-float">
                          <div class="form-line">
                              <input type="text" class="form-control" name="nidn_dosen">
                              <label class="form-label">NIDN</label>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-12">
                      <div class="form-group form-float">
                          <div class="form-line">
                              <input type="text" class="form-control" name="pendpasca_dosen">
                              <label class="form-label">Pendidikan Pasca Sarjana</label>
                          </div>
                          <small> Contoh Penulisan : S3, Universitas Negeri Jakarta (UNJ) </small>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <p>Bidang Keahlian</p>
                      <div class="form-group default-select">
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
                  <div class="col-sm-12">
                      <div class="form-group form-float">
                          <div class="form-line">
                              <input type="text" class="form-control" name="sertpend_profesi">
                              <label class="form-label">Sertifikat Profesi/ Kompetensi</label>
                          </div>
                      </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-md-12">
                      <div class="input-field col s12" style="margin-left:5px" style="margin-top:0px"style="Font-size:13px">
                        <p>Kesesuaian Bidang Keahlian dengan Matakuliah Diampu</p>
                          <select name="kesesuaian_bidang">
                              <option value="0" disabled selected>Choose your option</option>
                              <option value="1">Sesuai</option>
                              <option value="0">Tidak Sesuai</option>
                              <input type="hidden" id="text-input" value="1" name="status_dosen">
                              <input type="hidden" id="text-input" value="34" name="kriteria_kode">
                              <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('prodi_login')?>" name="prodi_id">
                              <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('fakultas_login')?>" name="fakultas_id">
                          </select>
                      </div>
                    </div>
                  </div>
                    <!-- <div class="col-md-4">
                      <div class="input-field col s12" style="margin-top:0px"style="Font-size:13px">
                        <p>Status Dosen</p>
                          <select name="status_dosen">
                              <option value="" disabled selected>Choose your option</option>
                              <option value="0">Dosen Tetap</option>
                              <option value="1">Dosen Tidak Tetap</option>
                              <option value="2">Dosen Praktisi/ Industri</option>

                          </select>
                      </div>
                    </div> -->

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
