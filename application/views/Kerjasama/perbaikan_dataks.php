
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
                      <strong> Perbaikan Tabel Kerjasama</h2>
              </div>
              <div class="body">
                  <div class="row clearfix">
                      <div class="col-sm-12">

                        <form action="<?php echo base_url()?>kerjasama/perbaiki" method="post">
                          <input type="hidden" name="id_kerjasama" value="<?= $list_ks->id_kerjasama ?>">
                              <div class="form-group form-float">
                                  <div class="form-line">
                                      <input type="text" name="nama_lembaga" class="form-control" value="<?= $list_ks->nama_lembaga ?>">
                                      <label class="form-label">Nama Lembaga</label>
                                  </div>
                              </div>

                              <div class="form-group form-float">
                                  <div class="form-line">
                                      <input type="text" name="lokasi_ks" class="form-control" value="<?= $list_ks->lokasi_ks ?>">
                                      <label class="form-label">Lokasi</label>
                                  </div>
                              </div>

                          <p class="card-inside-title" style="font-size:14px">Tingkat Level kerjasama</p>
                          <div class="row">
                            <div class="col-sm-3 col-lg-3">
                                  <p>
                                    <label>
                                        <input value ="1" <?=(isset($list_ks->ting_internasional) && $list_ks->ting_internasional == 1) ? 'checked' : ''?> name="ting_internasional" type="checkbox"  style="margin-top:5px"/>
                                        <span>Internasional</span>
                                    </label>
                                  </p>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <p>
                                    <label>
                                        <input value="1" <?=(isset($list_ks->ting_nasional) && $list_ks->ting_nasional == 1) ? 'checked' : ''?> name="ting_nasional" type="checkbox"  style="margin-top:5px"/>
                                        <span>Nasional</span>
                                    </label>
                                </p>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <p>
                                    <label>
                                        <input value="1" <?=(isset($list_ks->ting_lokal) && $list_ks->ting_lokal == 1) ? 'checked' : ''?> name="ting_lokal" type="checkbox"  style="margin-top:5px"/>
                                        <span>Lokal</span>
                                    </label>
                                </p>
                            </div>
                          </div>

                          <div class="form-group form-float">
                              <div class="form-line">
                                  <input type="text" name="judul_kegiatanks" class="form-control" value="<?=isset($list_ks->judul_kegiatanks) ? $list_ks->judul_kegiatanks : ''?>">
                                  <label class="form-label">Judul Kegiatan</label>
                              </div>
                          </div>
                          <p class="card-inside-title" style="font-size:14px">Manfaat</p>
                              <div class="form-line">
                                  <textarea rows="4" name="manfaat_ks" class="form-control no-resize" placeholder="Manfaat Bagi PS Diakreditasi..."><?=isset($list_ks->manfaat_ks) ? $list_ks->manfaat_ks : ''?></textarea>
                              </div>
                              <br>


                          <div class="row clearfix">
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <div class="form-line">
                                        <p class="card-inside-title"> Tanggal Awal kerjasma</p>
                                          <input type="date" value="<?=isset($list_ks->awal_ks) ? $list_ks->awal_ks : ''?>" name="awal_ks" class="datepicker form-control" placeholder="Please choose a date...">
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <div class="form-line">
                                        <p class="card-inside-title">Tanggal Akhir kerjasama</p>
                                          <input type="date" value="<?=isset($list_ks->selesai_ks) ? $list_ks->selesai_ks : ''?>" name="selesai_ks" class="datepicker form-control" placeholder="Please choose a date...">
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="row clearfix">
                            <div class="col-md-12">
                                <p>
                                    <b>Bentuk Kegiatan kerjasama</b>
                                </p>
                                <?php

                                  $id_kerjasama = $this->uri->segment(3);
                                  $this->db->select('*')->from('relasi_ks');
                                  $this->db->join('bntkegiatan_ks','bntkegiatan_ks.id_kegiatanks=relasi_ks.kegiatanks_id','left');
                                  $this->db->where('kerjasama_id', $id_kerjasama);
                                  $list_kegiatannya =$this->db->get()->result();
                                  foreach ($list_kegiatannya as $e) {
                                    $kegiatan[$e->id_kegiatanks] = $e->id_kegiatanks;
                                  }

                                 ?>
                                <div class="form-group default-select">
                                    <select class="form-control select2 pilihankegaiatan"  name="bntkegiatan_ks[]" multiple="true" data-placeholder="Select">
                                        <option value="" ></option>
                                        <?php

                                        foreach ($kegiatan_ks as $key) {
                                          if ($kegiatan[$key->id_kegiatanks]) {
                                            $pilihlah = 'selected';
                                          }else{
                                            $pilihlah = '';
                                          }
                                          ?>
                                          <option value="<?= $key->id_kegiatanks ?>" <?= $pilihlah ?>><?php echo $key->nama_kegiatanks ?></option>
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
                                        <option value="Dunia Usaha DN" <?=isset($list_ks->jenispatner_ks) && $list_ks->jenispatner_ks == "Dunia Usaha DN" ? 'selected' : ''?>>Dunia Usaha DN</option>
                                        <option value="Dunia Usaha LN" <?=isset($list_ks->jenispatner_ks) && $list_ks->jenispatner_ks == "Dunia Usaha LN" ? 'selected' : ''?>>Dunia Usaha LN</option>
                                        <option value="Institusi Pemerintah DN"<?=isset($list_ks->jenispatner_ks) && $list_ks->jenispatner_ks == "Institusi Pemerintah DN" ? 'selected' : ''?>>Institusi Pemerintah DN</option>
                                        <option value="Institusi Pemerintah LN" <?=isset($list_ks->jenispatner_ks) && $list_ks->jenispatner_ks == "Institusi Pemerintah LN" ? 'selected' : ''?>>Institusi Pemerintah LN</option>
                                        <option value="Institusi Pedididkan DN" <?=isset($list_ks->jenispatner_ks) && $list_ks->jenispatner_ks == "Institusi Pedididkan DN" ? 'selected' : ''?>>Institusi Pedididkan DN</option>
                                        <option value="Institusi Pedididkan LN" <?=isset($list_ks->jenispatner_ks) && $list_ks->jenispatner_ks == "Institusi Pedididkan LN" ? 'selected' : ''?>>Institusi Pedididkan LN</option>
                                        <option value="Organisai DN" <?=isset($list_ks->jenispatner_ks) && $list_ks->jenispatner_ks == "Organisasi DN" ? 'selected' : ''?>>Organisai DN</option>
                                        <option value="Organisasi LN" <?=isset($list_ks->jenispatner_ks) && $list_ks->jenispatner_ks == "Organisasi LN" ? 'selected' : ''?>>Organisasi LN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                              <p>
                                    <b>Bukti kerjasama</b>
                                </p>
                                <div class="form-group default-select">
                                    <select class="form-control select2" name="bukti_ks" data-placeholder="Select">
                                        <option></option>
                                        <option value="Implementations Agreement" <?=isset($list_ks->bukti_ks) && $list_ks->bukti_ks == "Implementations Agreement" ? 'selected' : ''?>>Implementations Agreement</option>
                                        <option value="MoU" <?=isset($list_ks->bukti_ks) && $list_ks->bukti_ks == "MoU" ? 'selected' : ''?>>Mou</option>
                                        <option value="MoA" <?=isset($list_ks->bukti_ks) && $list_ks->bukti_ks == "MoA" ? 'selected' : ''?>>MoA</option>
                                        </select>
                                </div>
                              </div>
                              <div class="">
                              <div class="file-field input-field">
                                      <div class="btn">
                                          <span>File</span>
                                          <input type="file" multiple>
                                          <!-- <input type="hidden" id="text-input" value="1" name="tu_status"> -->
                                          <input type="hidden" id="text-input" value="1" name="kriteria_kode">
                                          <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('fakultas_login')?>" name="fakultas_id">
                                          <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('prodi_login')?>" name="prodi_id">
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
