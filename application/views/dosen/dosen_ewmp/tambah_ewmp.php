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
                        <a href="<?= base_url() ?>dosen">Dosen Pembimbing TA</a>
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
          <h5><strong>Tambah Data EWMP Dosen</h5>
      </div>
      <div class="body">
        <div class="col-sm-12">
          <form class="" action="index.html" method="post">
            <!-- EDIT -->
            <input type="hidden" name="" value="">
            <!-- END -->
            <div class="row clearfix">
                <div class="col-md-6">
                    <p>Nama Dosen EWMP</p>
                    <div class="form-group default-select">
                        <select class="form-control select2" data-placeholder="Select">
                            <option value=""></option>
                            <?php foreach ($dosenProdi as $key ) {?>
                              <option value="<?php echo $key->id_profildosen; ?>"> <?php echo $key->nama_dosen; ?></option>
                            <?php } ?>


                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <p>DTPS</p>
                    <div class="form-group default-select">
                        <select class="form-control select2" data-placeholder="Select">
                            <option></option>
                            <option>Setuju</option>
                            <option>Tidak Setuju</option>
                        </select>
                    </div>
                </div>
            </div>
                <h5>EWMP pada TS satuan kredit semester (sks)</h5><br>
                <h6>Pendidikan: Pembelajaran Dan Pembimbingan</h6><br>
                <div class="row clearfix">
                  <div class="col-sm-4">
                    <div class="form-group form-float">
                      <div class="form-line">
                        <input type="number" class="form-control">
                        <label class="form-label">PS Diakreditasi</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group form-float">
                      <div class="form-line">
                        <input type="number" class="form-control">
                        <label class="form-label">PS Lain pada PT</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group form-float">
                      <div class="form-line">
                        <input type="number" class="form-control">
                        <label class="form-label">PS Lain luar PT</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group form-float">
                      <div class="form-line">
                        <input type="text" class="form-control">
                        <label class="form-label">PkM</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group form-float">
                      <div class="form-line">
                        <input type="text" class="form-control">
                        <label class="form-label">Tugas Tambahan/ Penunjang</label>

                        <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('fakultas_login')?>" name="fakultas_id">
                        <input type="hidden" id="text-input" value="<?php echo $this->session->userdata('prodi_login')?>" name="prodi_id">
                        <input type="hidden" id="text-input" value="33" name="kriteria_kode">

                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row form-grub">
              <div class="col col-md-12">
                <input class="btn btn-primary float-right" type="submit" value="Simpan">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
