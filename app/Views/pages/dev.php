<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<title>Develop</title>

<section class="fz">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <center>
                <div class="card bg-danger" style="width: 18rem;">
                <center>
                <img src="/gambar/rangga.jpg" class="card-img-top rounded-circle" style="width:50%; align:center; margin-top:25px;">
                </center>
  <div class="card-body bg-danger">
    <h5 class="card-title bg-danger text-white">Data Diri</h5>
    <p class="card-text text-white">Project Magang saat PKL #NoInFunds.</p>
  </div>
  <ul class="list-group list-group-flush bg-danger">
    <li class="list-group-item bg-danger text-white">Nama : Rangga Dwioutra</li>
    <li class="list-group-item bg-danger text-white">Kelas : XII RPL</li>
    
  </ul>
</div>
                </center>
            </div>
        </div>
     
</section>





<style>
    .fz {
        margin-bottom: 200px;
        margin-top: 100px;
    }

    .fz h3 {
        color: #000000;
    }

    .fz h1 {
        color: #FB0303;
    }
</style>
<?= $this->endSection(); ?>