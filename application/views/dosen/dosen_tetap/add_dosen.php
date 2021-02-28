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
                        <a href="<?= base_url() ?>kerjasama">Tabel Dosen</a>
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
                    <strong>Tambah Tabel Dosen</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-12">

                      <form action="<?php echo base_url() ?>dosen/simpan_data_dosen" method="post">
                        <!-- <input type="hidden" name="id_kerjasama" value="<?=isset($list_ks->id_kerjasama) ? $list_ks->id_kerjasama: ''?>"> -->
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="nama_dosen" class="form-control">
                                        <label class="form-label">Nama Lengkap Dosen</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number"  name="nidn_dosen" class="form-control">
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
                                <div class="form-group default-select ">
                                    <select multiple="" class="form-control select2" data-placeholder="Select">
                                        <option value=""> </option>
                                        <?php foreach ($bidangKeahlian as $key ) {?>
                                          <option value="<?php echo $key->id_bidangkea ?>"> <?php echo $key->nama_bidangkea; ?></option>
                                        <?php } ?>
                                        </select>
                                </div>
                            </div>
                            <div class="row clearfix">
                            <div class="col-md-6">
                              <div class="input-field col s12" style="Font-size:13px" >
                                <a>Kesesuaian Dosen dengan Kopetensi Inti Program Studi</a>
                                  <select name="kesesuaianinti_ps">
                                      <option value="0" disabled selected>Choose your option</option>
                                      <option value="1">Sesuai</option>
                                      <option value="0">Tidak Sesuai</option>
                                  </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="input-field col s12" style="Font-size:13px">
                                <a>Jabatan Akademik</a>
                                  <select name="jabatanak_dosen">
                                      <option value="0" disabled selected>Choose your option</option>
                                      <option value="1">Asisten Ahli</option>
                                      <option value="2">Lektor</option>
                                      <option value="3">Lektor Kepala</option>
                                      <option value="4">Profesor</option>
                                  </select>
                              </div>
                            </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-float" style="margin-top:0px">
                                    <div class="form-line" >
                                        <input type="number" class="form-control" name="sertpend_profesi">
                                        <label class="form-label" >Nomor Sertifikat Profesional</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="Number" class="form-control" name="sertkompen_industri">
                                        <label class="form-label">Nomor Sertifikat Kopetensi/Profesi</label>
                                    </div>
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
                              <div class="col-md-12">
                                  <p>Matakuliah Diampu pada Program Studi Lain </p>
                                  <div class="form-group default-select ">
                                      <select multiple="true" class="form-control select2" name="matkulluar[]" data-placeholder="Select">
                                          <div class="form-group default-select ">
                                              <select multiple="true" class="form-control select2" name="matakuliahprodi[]" data-placeholder="Select">
                                                  <option value=""> </option>
                                                  <?php foreach ($matkulluar as $key ) {?>
                                                    <option value="<?php echo $key->id_matakuliah ?>"> <?php echo $key->nama_matkul; ?></option>
                                                  <?php } ?>
                                          </select>
                                  </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                  <div class="input-field col s12" style="margin-top:0px"style="Font-size:13px">
                                    <p>Kesesuaian Bidang Keahlian dengan Matakuliah Diampu</p>
                                      <select name="kesesuaian_bidang">
                                          <option value="0" disabled selected>Choose your option</option>
                                          <option value="1">Sesuai</option>
                                          <option value="0">Tidak Sesuai</option>
                                          <input type="hidden" id="text-input" value="0" name="status_dosen">
                                          <input type="hidden" id="text-input" value="31" name="kriteria_kode">
                                          <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('prodi_login')?>" name="prodi_kode">
                                          <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('fakultas_login')?>" name="fakultas_id">
                                      </select>
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
                              </div>
                              <div class="row form-group">
                                  <div class="col col-md-12">
                                    <input class="btn btn-primary float-right" type="submit" value="simpan">
                                  </div>
                              </div>
                      </from>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </div>
