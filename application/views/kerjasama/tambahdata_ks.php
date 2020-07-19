<div class="content">
    <div class="animated fadeIn">


        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Basic Form</strong> Elements
                    </div>
                    <div class="card-body card-block">
                        <form action="<?= base_url().'kerjasama/simpan_data'?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Kriteria 1</label></div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Kerjasama</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"  class=" form-control-label">Lembaga Mitra</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_lembaga" placeholder="Nama Lembaga" class="form-control"><small class="form-text text-muted"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select"  class=" form-control-label">Tingkat Internasional</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="ting_internasional"  id="select" class="form-control">
                                        <option value="0">Silahkan Pilih</option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Tingkat Nasional</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="ting_nasional" id="select" class="form-control">
                                        <option value="0">Silahkan Pilih</option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Tingkat Lokal</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="ting_lokal" id="select" class="form-control">
                                        <option value="0">Silahkan Pilih</option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Judul Kegiatan Kerjasama</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="judul_kegiatanks" placeholder="Judul Kegiatan" class="form-control">
                                  <small class="form-text text-muted"></small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Manfaat Bagi PS Diakredasi</label></div>
                                <div class="col-12 col-md-9"><textarea name="manfaat_ks" id="textarea-input" rows="9" placeholder="Manfaat..." class="form-control"></textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Awal kerjasama</label></div>
                                <div class="col-6 col-md-3">
                                  <input type="date" id="text-input" name="awal_ks
                                  " placeholder="" class="form-control">
                                  <small class="form-text text-muted"></small></div>
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Akhir Kerjasama</label></div>
                                <div class="col-6 col-md-3">
                                    <input type="date" id="text-input" name="selesai_ks" placeholder="" class="form-control">
                                    <small class="form-text text-muted"></small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Bukti Kerjasama</label></div>
                                <div class="col-12 col-md-9">
                                  <input type="text" id="text-input" name="bukti_ks" placeholder="Bukti Kerjasama" class="form-control">
                                  <input type="hidden" id="text-input" value="1" name="kriteria_kode">
                                  <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('prodi_login')?>" name="kode_prodi">
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
