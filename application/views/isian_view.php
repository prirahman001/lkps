<div class="content">
</div>
    <div class="block-header">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="breadcrumb breadcrumb-style ">
                    <li class="breadcrumb-item">
                        <h4 class="page-title">Dashboard</h4>
                    </li>
                    <li class="breadcrumb-item bcrumb-1">
                        <a href="<?= base_url() ?>index.html">
                            <i class="fas fa-home"></i> Home</a>
                    </li>
                </ul>
            </div>
          </div>
    </div>
    <!-- Your content goes here  -->
    <div class="row clearfix">
      <div class="col-12">
        <div class="alert alert-success">
            <strong>Selamat Datang</strong> Tata Usaha Prodi <?= $this->session->userdata('nama_login')?>
        </div>
      </div>
    </div>
