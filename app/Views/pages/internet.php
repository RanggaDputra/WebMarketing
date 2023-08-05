<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<title>Internet</title>

<!-- home -->
<section class="pt">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <center><img src="/gambar/b4.jpg" alt=""></center>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <section class="oi">
    <div class="row">
      <div class="col-md-4">

        <h5 class="card-title">Internet</h5>
        <p class="card-text">Menggunakan jaringan fiber optik yang tersebar di seluruh negri, Indihome hadir dengan menawarkan pilihan kecepatan internet hingga 300 Mbps. Selain cepat, internet Indihome lebih stabil dan tahan terhadap cuaca. Aktifitas seperti bekerja, belajar, belanja online hingga bermain games di rumah jadi lebih praktis ddan nyaman. </p>
        <a href="paket" class="btn btn-outline-secondary">Berlangganan</a>

      </div>
      <div class="col-md-8">
        <table class="table text-center">
          <thead>
            <tr class="table-dark">
              <th scope="col">Kecepatan</th>
              <th scope="col">Rekomendasi Jumlah Perangkat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">10 Mbps</th>
              <td>1-3 Perangkat</td>
            </tr>
            <tr>
              <th scope="row">20 Mbps</th>
              <td>3-5 Perangkat</td>

            </tr>
            <tr>
              <th scope="row">30 Mbps</th>
              <td>5-7 Perangkat</td>
            </tr>
            <tr>
              <th scope="row">40 Mbps</th>
              <td>7-10 Perangkat</td>
            </tr>
            <tr>
              <th scope="row">50 Mbps</th>
              <td>10-12 Perangkat</td>

            </tr>
            <tr>
              <th scope="row">100 Mbps</th>
              <td>12-18 Perangkat</td>
            </tr>
            <tr>
              <th scope="row">200 Mbps</th>
              <td>18-25 Perangkat</td>

            </tr>
            <tr>
              <th scope="row">300 Mbps</th>
              <td>25-30 Perangkat</td>

            </tr>
          </tbody>
        </table>
      </div>
    </div>

</div>
</section>
<!-- card2 -->
<section class="cr">
  <div class="container-fluid">
    <div class="row">
      <p style="font-size: 30px" class="fw-bold">Beragam pilihan kecepatan layanan internet sesuai dengan kebutuhan anda </p>
      <div class="col-md-2">
        <div class="card" style="width: 13rem;">

          <div class="card-body">
            <h5 class="card-title">Up to</h5>
            <p class="card-text">20 Mbps</p>
            <hr class="dropdown-divider">
            <p>layanan paket</p>
            <i class="fas fa-wifi"> Internet</i>
            <i class="fas fa-tv"> Television</i>

          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card" style="width: 13rem;">

          <div class="card-body">
            <h5 class="card-title">Up to</h5>
            <p class="card-text">30 Mbps</p>
            <hr class="dropdown-divider">
            <p>layanan Paket</p>
            <i class="fas fa-wifi"> Internet</i>
            <i class="fas fa-tv"> Television</i>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card" style="width: 13rem;">

          <div class="card-body">
            <h5 class="card-title">Up to</h5>
            <p class="card-text">50 Mbps</p>
            <hr class="dropdown-divider">
            <p>layanan Paket</p>
            <i class="fas fa-wifi"> Internet</i>
            <i class="fas fa-tv"> Television</i>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card" style="width: 13rem;">

          <div class="card-body">
            <h5 class="card-title">Up to</h5>
            <p class="card-text">100 Mbps</p>
            <hr class="dropdown-divider">
            <p>layanan Paket</p>
            <i class="fas fa-wifi"> Internet</i>
            <i class="fas fa-tv"> Television</i>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card" style="width: 13rem;">

          <div class="card-body">
            <h5 class="card-title">Up to</h5>
            <p class="card-text">300 Mbps</p>
            <hr class="dropdown-divider">
            <p>layanan Paket</p>
            <i class="fas fa-wifi"> Internet</i>
            <i class="fas fa-tv"> Television</i>
          </div>
        </div>
      </div>
    </div>
    <section class="cn">
      <center><a class="btn btn-outline-danger mb-4" href="paket" role="button">-- Paket Lainnya --</a></center>
    </section>
  </div>
</section>





<style>
  .pt img {
    margin-top: 50px;
    width: 750px;
  }

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

  .bl {
    margin-top: 100px;
  }

  .gb {}

  .box2 {
    border: 0px solid;
  }

  .box3 {
    border: 2px solid;
  }

  .cr {
    margin-top: 25px;
  }

  .cr .col-md-2 {
    margin: auto;
    float: left;

  }

  .cr p {
    text-align: center;
  }

  .oi {
    margin-top: 25px;
  }

  .cn {
    margin-top: 25px;
  }
</style>
<?= $this->endSection(); ?>