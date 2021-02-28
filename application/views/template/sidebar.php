<ul class="list">
    <li class="sidebar-user-panel active">
        <div class="user-panel">
            <div class=" image">
                <!-- <img src="<?= base_url() ?>assets/images/usrbig.jpg" class="img-circle user-img-circle" alt="User Image" /> -->
            </div>
        </div>
        <div class="profile-usertitle">
            <div class="sidebar-userpic-name"><?= $this->session->userdata('nama_login')?> </div>
            <div class="profile-usertitle-job ">Manager </div>
        </div>
    </li>
    <li>
        <a href="<?= base_url() ?>kerjasama">
            <i class="far fa-calendar"></i>
            <span>Kerjasama</span>
        </a>
    </li>
    <li>
        <a href="#" onClick="return false;" class="menu-toggle">
            <i class="fas fa-mail-bulk"></i>
            <span>Mahasiswa</span>
        </a>
        <ul class="ml-menu">
            <li>
                <a href="<?= base_url() ?>mahasiswa">Kualitas Input Mahasiswa</a>
            </li>
            <li>
                <a href="<?= base_url() ?>mahasiswa/mahasiswa_asing ">Mahasiswa Asing</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" onClick="return false;" class="menu-toggle">
            <i class="fab fa-google-play"></i>
            <span>Dosen</span>
        </a>
        <ul class="ml-menu">
            <li>
                <a href="<?php echo base_url()?>dosen">Dosen Tetap</a>
            </li>
            <li>
                <a href="<?php echo base_url()?>dosen/dosen_pemta">Dosen Pembimbing Utama T.A</a>
            </li>
            <li>
                <a href="<?php echo base_url()?>dosen/dosen_ewmp">(EWMP) Dosen Tetap PT </a>
            </li>
            <li>
                <a href="<?php echo base_url()?>dosen/dosen_tidaktetap"> Dosen Tidak Tetap</a>
            </li>
            <li>
                <a href="<?php echo base_url()?>dosen/dosen_prakti">Dosen Industri/Praktisi</a>
            </li>
            <li>
                <a href="../apps/contact_list.html">Rekognisi DTPS</a>
            </li>
            <li>
                <a href="../apps/contact_grid.html">Penelitia DTPS</a>
            </li>
            <li>
                <a href="../apps/support.html">PkM DTPS</a>
            </li>
            <li>
                <a href="../apps/support.html">Publikasi Ilmiah DTPS</a>
            </li>
            <li>
                <a href="../apps/support.html">Pagelaran Ilmiah DTPS</a>
            </li>
            <li>
                <a href="../apps/support.html">Karya Ilmiah DTPS</a>
            </li>
            <li>
                <a href="../apps/support.html">Produk/Jasa DTPS</a>
            </li>
            <li>
                <a href="../apps/support.html">Luaran PPenelitian DTPS</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#" onClick="return false;" class="menu-toggle">
            <i class="fas fa-shopping-cart"></i>
            <span>Keuangan, Sarana & Prasarana </span>
        </a>
        <ul class="ml-menu">
            <li>
                <a href="../ecommerce/products.html">Products</a>
            </li>
            <li>
                <a href="../ecommerce/product-detail.html">Product Details</a>
            </li>
            <li>
                <a href="../ecommerce/cart.html">Cart</a>
            </li>
            <li>
                <a href="../ecommerce/product-list.html">Product List</a>
            </li>
            <li>
                <a href="../ecommerce/invoice.html">Invoice</a>
            </li>
        </ul>
    </li>
    <li>
      <a href="#" onClick="return false;" class="menu-toggle">
          <i class="fas fa-shopping-cart"></i>
          <span>Pendidikan</span>
      </a>
      <ul class="ml-menu">
          <li>
              <a href="<?php echo base_url()?>Pendidikan/Kurikulum">Kurikulum</a>
          </li>
          <li>
              <a href="../ecommerce/product-detail.html">Product Details</a>
          </li>
          <li>
              <a href="../ecommerce/cart.html">Cart</a>
          </li>
          <li>
              <a href="../ecommerce/product-list.html">Product List</a>
          </li>
          <li>
              <a href="../ecommerce/invoice.html">Invoice</a>
          </li>
      </ul>
    </li>
</ul>
