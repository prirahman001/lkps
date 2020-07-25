
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
                      <strong>Tambah Tabel Kerjasama</h2>
              </div>
              <div class="body">
                  <div class="row clearfix">
                      <div class="col-sm-12">

                        <form action="<?php echo base_url() ?>kerjasama/simpan_data" method="post">
                          <div class="form-group">
                              <div class="form-line">
                                  <input type="text" name="nama_lembaga" class="form-control" placeholder="Lembaga Mitra" />
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="form-line">
                                  <input type="text" name="lokasi_ks" class="form-control" placeholder="Lokasi" />
                              </div>
                          </div>

                          <p class="card-inside-title" style="font-size:14px">Tingkat Level kerjasama</p>
                          <div class="row">
                            <div class="col-sm-3 col-lg-3">
                                  <p>
                                    <label>
                                        <input value ="1"  name="ting_internasional" type="checkbox"  style="margin-top:5px"/>
                                        <span>Internasional</span>
                                    </label>
                                  </p>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <p>
                                    <label>
                                        <input value="1" name="ting_nasional" type="checkbox"  style="margin-top:5px"/>
                                        <span>Nasional</span>
                                    </label>
                                </p>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <p>
                                    <label>
                                        <input value="1" name="ting_lokal" type="checkbox"  style="margin-top:5px"/>
                                        <span>Lokal</span>
                                    </label>
                                </p>
                            </div>
                          </div>

                          <div class="form-group">
                              <div class="form-line">
                                  <input type="text" name="judul_kegiatanks" class="form-control" placeholder="Judul Kegiatan" />
                              </div>
                              <br>
                              <div class="form-line">
                                  <textarea rows="4" name="manfaat_ks" class="form-control no-resize" placeholder="Manfaat Bagi PS Diakreditasi..."></textarea>
                              </div>
                          </div>

                          <div class="row clearfix">
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <div class="form-line">
                                        <p class="card-inside-title"> Tanggal Awal kerjasma</p>
                                          <input type="date" name="awal_ks" class="datepicker form-control" placeholder="Please choose a date...">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <div class="form-line">
                                        <p class="card-inside-title">Tanggal Akhir kerjasama</p>
                                          <input type="date" name="selesai_ks" class="datepicker form-control" placeholder="Please choose a date...">
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="row clearfix">
                            <div class="col-md-8">
                                <p>
                                    <b>Bentuk Kegiatan kerjasama</b>
                                </p>
                                <div class="form-group default-select">
                                    <select class="form-control select2" name="bntkegiatan_ks[]" multiple="true" data-placeholder="Select">
                                        <option value="" ></option>
                                        <?php
                                        foreach ($kegiatan_ks as $key) {?>
                                          <option value="<?= $key->id_kegiatanks ?>"><?php echo $key->nama_kegiatanks ?></option>
                                        <?php }
                                         ?>
                                    </select>
                                </div>
                            </div>
                          </div>

                          <div class="row clearfix">
                            <div class="col-md-4">
                                <p>
                                    <b>Jenis Partner Kerjasama</b>
                                </p>
                                <div class="form-group default-select">
                                    <select class="form-control select2" name="jenispatner_ks" data-placeholder="Select">
                                        <option></option>
                                        <option value="Dunia Usaha DN">Dunia Usaha DN</option>
                                        <option value="Dunia Usaha LN">Dunia Usaha LN</option>
                                        <option value="Institusi Pemerintah DN">Institusi Pemerintah DN</option>
                                        <option value="Institusi Pemerintah LN">Institusi Pemerintah LN</option>
                                        <option value="Institusi Pedididkan DN">Institusi Pedididkan DN</option>
                                        <option value="Institusi Pedididkan LN">Institusi Pedididkan LN</option>
                                        <option value="Organisai DN">Organisai DN</option>
                                        <option value="Organisasi LN">Organisasi LN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                              <p>
                                    <b>Bukti kerjasama</b>
                                </p>
                                <div class="form-group default-select">
                                    <select class="form-control select2" name="bukti_ks" placeholder="Select">
                                        <option></option>
                                        <option value="Implementations Agreement">Implementations Agreement</option>
                                        <option value="MoU">Mou</option>
                                        <option value="MoA">MoA</option>
                                        </select>
                                </div>
                              </div>
                              <div class="">
                              <div class="file-field input-field">
                                      <div class="btn">
                                          <span>File</span>
                                          <input type="file" multiple>
                                          <input type="hidden" id="text-input" value="1" name="kriteria_kode">
                                          <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('prodi_login')?>" name="prodi_kode">
                                      </div>
                                      <div class="file-path-wrapper">
                                          <input class="file-path validate" type="text" placeholder="Upload one or more files">
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
