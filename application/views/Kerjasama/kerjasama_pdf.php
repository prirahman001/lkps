    <h4 style="text-align: center">BORANG INDIKATOR KINERJA UTAMA</h4>
    <table >
      <tr>
        <td valign="top"><h4>1.</h4></td>
        <td>

          <h4>Tata Pamong, Tata Kelola dan Kerjasama</h4  >
          <h4>a. Kerjasama</h4>
          <p>Tuliskan kerjasama tridharma di Unit Pengelola Program Studi (UPPS) tahun 2018/2019 dengan mengikuti format Tabel 1 berikut ini.</p>
          <p>Tabel 1. Kerjasama Tridharma</p>
          <head>
          <table class="table" style="font-size:12px;">
            <thead class="abu" >
              <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Lembaga Mitra</th>
                <th colspan="3">Tingkat<sup>1</sup></th>
                <th rowspan="2">Judul Kegiatan Kerjasama<sup>2</sup></th>
                <th rowspan="2">Manfaat bagi PS yang Diakreditasi</th>
                <th rowspan="2">Waktu Dan Durasi</th>
                <th rowspan="2">Bukti Kerjasama<sup>3</sup></th>
              </tr>
              <tr>
                <th>Internasional</th>
                <th>Nasional</th>
                <th>Lokal</th>
              </tr>
              <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
              </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach ($list_data as $key) {
                  // echo $key->id_kerjasama."<br>";
                    // $this->db->where('kerjasama_id',$key->id_kerjasama);
                    // $datarelasi = $this->db->get('relasi_ks')->result();

                  ?>
                    <tr>
                      <td><?=$no++?></td>
                      <td><?=$key->nama_lembaga?></td>
                      <td>
                        <?= ($key->ting_internasional == 1) ? 'V':'' ?>
                      </td>
                      <td><?=($key->ting_nasional==1) ? 'V':'' ?> </td>
                      <td><?=($key->ting_lokal==1) ? 'V':'' ?> </td>
                      <td><?=$key->judul_kegiatanks?></td>
                      <td><?=$key->manfaat_ks?></td>
                      <td><?=date_indo($key->awal_ks).' - '.date_indo($key->selesai_ks)?></td>
                      <td><?=$key->bukti_ks?></td>
                    </tr>
                  <?php }?>
            </tbody>
          </table>
          <p>Keterangan</p>
          <ol>
            <li>Beri tanda V pada kolom yang sesuai.</li>
            <li>Diisi dengan judul kegiatan kerjasama yang sudah terimplementasikan, melibatkan sumber daya dan memberikan manfaat bagi Program Studi yang diakreditasi.
            <li>Bukti kerjasama dapat berupa Surat Penugasan, Surat Perjanjian Kerjasama (SPK),
              bukti-bukti pelaksanaan (laporan, hasil kerjasama, luaran kerjasama), atau bukti lain yang relevan. Dokumen Memorandum of Understanding (MoU), Memorandum of Agreement (MoA), atau dokumen sejenis yang memayungi pelaksanaan kerjasama, tidak dapat dijadikan bukti realisasi kerjasama.

          </ol>
        </head>
        </td>
      </tr>
    </table>
