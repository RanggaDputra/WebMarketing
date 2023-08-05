<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<title>Info</title>
<!-- -->

<section class="juju">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center ">
        <div class="card" style="width: 55rem;">
          <img src="/gambar/kl.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Wifi Id Seemles</h5>
            <p class="card-text">Nikmati koneksi otomatis jaringan luas Wifi.id dengan kecepatan internet hingga 100 Mbps. Hanya dengan Rp10.000 per bulan untuk tiap perangkat, Anda bisa tersambung langsung dengan ribuan titik Wifi.id di seluruh Indonesia tanpa harus memasukkan username dan password berulang kali.</p>

          </div>
        </div>
      </div>
      <div class="col-md-12 text-center reveal">
        <div class="card" style="width: 55rem;">
          <img src="/gambar/lk.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Speed on Demand</h5>
            <p class="card-text">Meningkatnya aktivitas online yang dilakukan secara bersamaan di rumah harus didukung dengan koneksi internet yang stabil. Dengan Speed on Demand dari IndiHome, Anda bisa tambah kecepatan internet sesuai kebutuhan secara sementara agar semua kegiatan online setiap anggota keluarga dapat berjalan lancar. Tersedia kecepatan internet mulai dari 20 Mbps hingga 100 Mbps dengan masa berlaku 1, 3, hingga 7 hari.</p>

          </div>
        </div>
      </div>
      <div class="col-md-12 text-center reveal">
        <div class="card" style="width: 55rem;">
          <img src="/gambar/u.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Upgrade Speed</h5>
            <p class="card-text">Semakin banyak jumlah perangkat dan aktivitas online Anda di rumah, maka kebutuhan internet Anda juga kian meningkat. Pastikan kebutuhan internet Anda terpenuhi dengan berlangganan Upgrade Speed mulai dari 20 Mbps hingga 50 Mbps dari IndiHome.</p>

          </div>
        </div>
      </div>
      <div class="col-md-12 text-center reveal ">
        <div class="card" style="width: 55rem;">
          <img src="/gambar/l.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Minipack Channel TV</h5>
            <p class="card-text">Nonton berbagai serial TV, tayangan edukatif untuk anak dan film favorit keluarga Anda dengan beragam pilihan dari channel-channel populer!</p>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<style>
  .jumbotron .display-4 {
    color: white;
    margin-top: 200px;
  }

  .jumbotron p {
    color: white;
  }

  .carousel-item {
    height: 100%;
    width: 100%;

  }

  .carousel-item img {
    height: 400px;
    width: 1300px;

  }

  .carousel-item .display-4 {
    margin-top: -440px;
  }

  .aw {
    margin-top: 100px;
    margin-bottom: 50px;
  }

  .aw2 {
    margin-top: 100px;
  }

  .juju .col-md-12 {
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 150px;

  }

  .reveal {
    position: relative;
    transform: translateY(150px);
    opacity: 0;
    transition: all 2s ease;
  }

  .reveal.active {
    transform: translateY(0px);
    opacity: 1;
  }

  .nm {
    margin-top: 100px;
  }
</style>
<?= $this->endSection(); ?>