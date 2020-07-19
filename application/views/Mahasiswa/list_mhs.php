<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Kualitas Input Mahasiswa</strong>
                    </div>
                    <div class="card-body">
                      <a  href="<?php echo base_url().'mahasiswa/add_mhs'?>" class ="btn btn-success float-right" >Tambah data</a>
                      <br> <br>
                        <table id="bootstrap-data-table " class="table table-striped table-bordered data">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun akademik</th>
                                    <th>Daya tampung</th>
                                    <th>Pendaftar</th>
                                    <th>Lulus Seleksi</th>
                                    <th>Reguler</th>
                                    <th>Transfer</th>
                                    <th>Reguler</th>
                                    <th>Transfer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $no=1; foreach ($list_data as $key) { ?>
                                  <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$key->tahun_akademik?></td>
                                    <td><?=$key->daya_tampung?></td>
                                    <td><?=$key->pendaftar_msh?></td>
                                    <td><?=$key->lulus_seleksi_mhs?></td>
                                    <td><?=$key->reguler_baru_mhs?></td>
                                    <td><?=$key->transfer_baru_mhs?></td>
                                    <td><?=$key->reguler_aktif_mhs?></td>
                                    <td><?=$key->transferaktif_mhs?></td>
                                    <td>
                                      <a class="btn btn-primary" href="#">Update</a>
                                      <a class="btn btn-danger" style="margin-top:10px" href="#">delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
