<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Product -->
<title>Add On</title>
<section class="pop mt-5">
  <div class="container bg-white">
    <div class="row">
      <div class="box2">
        <div class="col-md-3">
          <div class="card1">
            <h5 class="card-header bg-transparent">
              <div class="icon2"><i class="fas fa-wifi"></i>
              </div>
            </h5>
            <div class="card-body">
              <h5 class="card-title">Wifi.id. Seamless</h5>
              <p class="card-text">Bagi anda pelanggan Indihome, bisa internetan di mana saja dengan jaringan Wifi.id di seluruh Indonesia. </p>
              <a href="/pages/infop" class="btn btn-outline-secondary">Info Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card2">
            <h5 class="card-header bg-transparent">
              <div class="icon2"><i class="fas fa-tv"></i>
              </div>
            </h5>
            <div class="card-body">
              <h5 class="card-title">Channel TV </h5>
              <p class="card-text">Tambah beragam channel-channel favorit sesuai dengan keinginan anda.</p>
              <a href="/pages/infop" class="btn btn-outline-secondary mt-5">Info Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card3">
            <h5 class="card-header bg-transparent">
              <div class="icon2"><i class="fas fa-tachometer-alt"></i>
              </div>
            </h5>
            <div class="card-body">
              <h5 class="card-title">Speed on Demand</h5>
              <p class="card-text">Tambah kecepatan internet secara temporer secara temporer sesuai dengan keinginan anda.</p>
              <a href="/pages/infop" class="btn btn-outline-secondary mt-4">Info Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card4">
            <h5 class="card-header bg-transparent">
              <div class="icon2"><i class="fas fa-angle-double-up"></i>
              </div>
            </h5>
            <div class="card-body">
              <h5 class="card-title">Upgrade Speed </h5>
              <p class="card-text">Upgrade speed internet broadband anda secara permanen sesuai dengan kebutuhan anda.</p>
              <a href="/pages/infop" class="btn btn-outline-secondary mt-4">Info Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ilham">
  <div class="container reveal">
    <div class="row">
      <h3>Pilihan Paket Lainnya</h3>
      <div class="col-md-4">
        <img src="/gambar/ew.jpg" alt="...">
      </div>
      <div class="col-md-4">
        <img src="/gambar/ak.jpg" alt="...">
      </div>
      <div class="col-md-4">
        <img src="/gambar/op.jpg" alt="...">
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-4">
        <img src="/gambar/po.jpg" alt="...">
      </div>
      <div class="col-md-4">
        <img src="/gambar/qw.jpg" alt="...">
      </div>
      <div class="col-md-4">
        <img src="/gambar/p.jpg" alt="...">
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-12 text-center"><a class="btn btn-outline-secondary" href="/pages/paket" role="button">-- INFO LEBIH LANJUT --</a></div>
    </div>
  </div>
</section>










<style>
  .box2 .col-md-3 {
    width: 25%;
    float: left;
    padding: 20px;
    box-sizing: border-box;
    text-align: center;
  }

  .icon2 {
    width: 70px;
    height: 70px;
    border: 1px solid;
    border-radius: 50%;
    text-align: center;
    line-height: 70px;
    font-size: 20px;
    margin: 0 auto;
  }

  .box2 .col-md-3 h4 {
    margin: 20px 0;
  }

  .rpl {
    margin-top: 1000px;
  }



  .box2 {
    border: 0px solid;
  }

  .box3 {
    border: 2px solid;
  }

  .ilham img {
    width: 280px;
    align: middle;

  }

  .ilham h3 {
    text-align: center;
    color: #000000;
    margin: 25px 0;
  }
</style>
<?= $this->endSection(); ?>