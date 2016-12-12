<?= $this->title = "Apotik" ?>

<div class="apotik-default-index">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $this->context->getjumlahobat(); ?></h3>

              <p>Jumlah Obat</p>
            </div>
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <a href="index.php?r=apotik/obat" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $this->context->getjumlahresep(); ?></h3>

              <p>Jumlah Resep</p>
            </div>
            <div class="icon">
              <i class="fa fa-list-alt"></i>
            </div>
            <a href="index.php?r=apotik/resep" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $this->context->getpembayaranlunas(); ?></h3>

              <p>Resep Lunas</p>
            </div>
            <div class="icon">
              <i class="fa fa-check-circle"></i>
            </div>
            <a href="index.php?PembayaranSearch%5Bid%5D=&PembayaranSearch%5Bstatus%5D=LUNAS&PembayaranSearch%5Bnomor_resep%5D=&PembayaranSearch%5Btgl_pembayaran%5D=&PembayaranSearch%5Btotal_pembayaran%5D=&PembayaranSearch%5Bmetode_pembayaran%5D=&r=apotik%2Fpembayaran" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $this->context->getpembayaranbelumlunas(); ?></h3>

              <p>Resep Belum Lunas</p>
            </div>
            <div class="icon">
              <i class="fa fa-times-circle"></i>
            </div>
            <a href="index.php?PembayaranSearch%5Bid%5D=&PembayaranSearch%5Bstatus%5D=BELUM+LUNAS&PembayaranSearch%5Bnomor_resep%5D=&PembayaranSearch%5Btgl_pembayaran%5D=&PembayaranSearch%5Btotal_pembayaran%5D=&PembayaranSearch%5Bmetode_pembayaran%5D=&r=apotik%2Fpembayaran" class="small-box-footer">Info lebih lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
</div>
