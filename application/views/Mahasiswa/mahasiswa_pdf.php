    <table>
      <tr>
          <td valign="top"><h5>2.</h5></td>
          <td>
            <h4>Mahasiswa</h4>
            <h4>a. Kualitas Input Mahasiswa</h4>
            <p style="text-align:justify">Tuliskan data daya tampung, jumlah calon mahasiswa (pendaftar dan peserta yang lulus seleksi), jumlah mahasiswa baru (reguler dan transfer)  dan jumlah mahasiswa aktif (reguler dan transfer) pada tahun 2018/2019 dengan mengikuti format Tabel 2.a berikut ini.</p>
            <p>Tabel 2.a Seleksi Mahasiswa</p>
            <head>
              <table class="table" style="font-size:12px; width:100%;">
                <thead class="abu">
                  <tr>
                    <th rowspan="2">Tahun Akademik</th>
                    <th rowspan="2">Daya Tampung</th>
                    <th colspan="2">Jumlah Calon Mahasiswa</th>
                    <th colspan="2">Jumlah Mahasiswa Baru</th>
                    <th colspan="2">Jumlah Mahasiswa Aktif</th>
                  </tr>
                  <tr>
                    <th>Pendaftar</th>
                    <th>Lulus Seleksi</th>
                    <th>Reguler</th>
                    <th>Transfer</th>
                    <th>Reguler</th>
                    <th>Transfer</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($list_data_mhs as $key) { ?>
                      <tr>
                        <td><?=$key->tahun_akademik?></td>
                        <td><?=$key->daya_tampung?></td>
                        <td><?=$key->pendaftar_msh?></td>
                        <td><?=$key->lulus_seleksi_mhs?></td>
                        <td><?=$key->reguler_baru_mhs?></td>
                        <td><?=$key->transfer_baru_mhs?></td>
                        <td><?=$key->reguler_aktif_mhs?></td>
                        <td><?=$key->transferaktif_mhs?></td>
                      </tr>
                    <?php }?>
              </tbody>
                </tbody>
              </table>
            </head>
            <h4>b. Mahasiswa Asing</h4>
            <p style="text-align:justify">Tabel 2.b berikut ini diisi oleh pengusul dari Program Studi pada program
              Sarjana/Sarjana Terapan/Magister/Magister Terapan/Doktor/Doktor Terapan.
            </p>
            <p>Tuliskan jumlah mahasiswa asing yang terdaftar di seluruh program studi pada UPPS
              tahun 2018/2019  dengan mengikuti format Tabel 2.b berikut ini.
            </p>
            <p>Tabel 2.b Mahasiswa Asing (Foreign Student)</p>

            <table class="table" style="font-size:12px; width:100%;">
                <thead class="abu">
                  <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Program Studi</th>
                    <th colspan="3">Jumlah Mahasiswa Aktif</th>
                    <th colspan="3">Jumlah Mahasiswa Asing Penuh Waktu (Full-time)
                    </th>
                    <th colspan="3">Jumlah MahasiswaAsing Paruh Waktu (Part-time)
                    </th>
                  </tr>
                  <tr>
                    <th>2018</th>
                    <th></th>
                    <th></th>
                    <th>2018</th>
                    <th></th>
                    <th></th>
                    <th>2018</th>
                    <th></th>
                    <th></th>
                  </tr>

                  <tr>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($list_data_asing as $key) { ?>
                      <tr>
                        <td><?=$no++?></td>
                        <td><?=$key->nama_prodi?></td>
                        <td><?=$key->jumlahmhsaktif_asing?></td>
                        <th></th>
                        <th></th>
                        <td><?=$key->jumlahmhsfull_asing?></td>
                        <th></th>
                        <th></th>
                        <td><?=$key->jumlahmhspart_asing?></td>
                        <th></th>
                        <th></th>
                      </tr>
                    <?php } ?>
                </tbody>
            </table>
          </td>
      </tr>
    </table>
