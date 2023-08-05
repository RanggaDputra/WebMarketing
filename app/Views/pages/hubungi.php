<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<title>Hubungi</title>

<section class="fz">
    <div class="container">
        <div class="row">
            <div class="col fw-bold fst-italic mb-3">
                <h1>Call Center & Email</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card1 mb-3" style="max-width: 540px;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-phone-square"></i> Call Center</h5>
                        <h3 class="card-text">073624037</h3>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card2 mb-3" style="max-width: 540px;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="far fa-envelope"></i> Email</h5>
                        <h3 class="card-text">cleper.cillalerineperdana@gmail.com</h3>
                    </div>
                </div>

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