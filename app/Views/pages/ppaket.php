<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<title>Register Pemesanan</title>


<!-- <section>
    <div class="container">
        <div class="col-md-12">
            <form class="wew m-5" method="post" action="/pages/save">
                <?= csrf_field(); ?>
                <div class="login p-4">
                    <div class="dm">
                        <h2>Form Pemesanan</h2>
                        <div class="input-group1">
                            <input type="text" required="" name="user" autofocus>
                            <span>Nama Lengkap</span>
                        </div>
                        <div class="input-group1">
                            <input type="text" required="" name="alamat">
                            <span>Alamat</span>
                        </div>
                        <div class="input-group1">
                            <input type="text" required="" name="nohp">
                            <span>No Hp</span>
                        </div><br>
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

                        </div><br>
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

                        </div><br>
                        <div class="input-group1">
                            <a class="text-white" href="/pages/save" type="submit">LOG IN</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section> -->
<section>
    <?php
    $session = session();
    $errors = $session->getFlashdata('errors');
    $success = $session->getFlashdata('success');
    ?>

    <?php if ($errors != null) : ?>
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <h4>Terjadi Kesalahan</h4>
            <hr>
            <p>
                <?php foreach ($errors as $err) : ?>
                    <?= $err ?><br>
                <?php endforeach ?>
            </p>
        </div>
    <?php endif ?>




</section>
<?php
$name = [
    'name' => 'name',
];
$email = [
    'name' => 'email',
    'type' => 'email'
];
$alamat = [
    'name' => 'alamat',

];
$NoHp = [
    'name' => 'NoHp',
    'type' => 'number'
];
$koordinat = [
    'name' => 'koordinat'
];
$selfie = [
    'name' => 'selfie'
];
$gmbrktp = [
    'name' => 'gmbrktp'
];

$gmbr = [
    'name' => 'gmbr'
];
// $submit = [
//     'name' => 'submit',
//     'value' => 'Submit',
//     'type' => 'submit',
//     'class' => 'button',
//     'href' => 'pages/confirm'
// ];
?>

<div class="container1">
    <?= form_open_multipart("pages/ppaket"); ?>
    <?= form_label("NamaLengkap", "namalengkap") ?>
    <?= form_input($name) ?>

    <?= form_label("Email", "email") ?>
    <?= form_input($email) ?>

    <?= form_label("NoHp", "nohp") ?>
    <?= form_input($NoHp) ?>


    <?= form_label("Alamat", "alamat") ?>
    <?= form_textarea($alamat) ?>


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63697.63145487441!2d102.26892793564618!3d-3.7879793890095512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b022c4bba4b5%3A0xb5b9cc21106313eb!2sPasang%20Indihome%20-%20Plasa%20Telkom%20UPP%20Bengkulu!5e0!3m2!1sid!2sid!4v1616657019186!5m2!1sid!2sid" width="1000" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe><br>
    <?= form_label("Kordinat Rumah", "koordinat"); ?>
    <?= form_input($koordinat); ?>

    <?= form_label("Foto Selfie", "selfie") ?>
    <?= form_upload($selfie) ?>

    <?= form_label("Gmbr ktp", "gmbrktp") ?>
    <?= form_upload($gmbrktp) ?>

    <?= form_label("Gmbr", "gmbr") ?>
    <?= form_upload($gmbr) ?>

    <button type="submit" class="btn btn-primary btn-block" href="confirm" name="submit" value="submit">Register</button>

</div>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>



<!-- <section class="p">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="card" style="width: 65rem; ">

                    <div class="card-body">
                        <h5 class="card-title">Paket 2P Digital Channel 2021</h5><br>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Internet</p>
                                <li>Up to 20Mbps</li>


                            </div>
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Televisi</p>
                                <li>Tersedia 25 channel</li>


                            </div>
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Telepon</p>
                                <li>Gratis 30 menit</li>


                            </div>

                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-1">
                <a class="btn btn-outline-danger" href="https://indihome.co.id/berlangganan-baru/cek-ketersediaan" role="button">
                    <div class="icon"><i class="fas fa-location-arrow"></i>
                    </div>

                </a>


            </div>

        </div>
        <div class="row">
            <div class="col-md-11">
                <div class="card" style="width: 65rem;">

                    <div class="card-body">
                        <h5 class="card-title">Paket 2P Digital Channel 2021</h5><br>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Internet</p>
                                <li>Up to 30Mbps</li>


                            </div>
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Televisi</p>
                                <li>Tersedia 45 channel</li>


                            </div>
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Telepon</p>
                                <li>Gratis 50 menit</li>


                            </div>

                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-1">
                <a class="btn btn-outline-danger" href="https://indihome.co.id/berlangganan-baru/cek-ketersediaan" role="button">
                    <div class="icon"><i class="fas fa-location-arrow"></i>
                    </div>

                </a>


            </div>

        </div>
        <div class="row">
            <div class="col-md-11">
                <div class="card" style="width: 65rem;">

                    <div class="card-body">
                        <h5 class="card-title">Paket 2P Digital Channel 2021</h5><br>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Internet</p>
                                <li>Up to 40Mbps</li>


                            </div>
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Televisi</p>
                                <li>Tersedia 60 channel</li>


                            </div>
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Telepon</p>
                                <li>Gratis 70 menit</li>


                            </div>

                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-1">
                <a class="btn btn-outline-danger" href="https://indihome.co.id/berlangganan-baru/cek-ketersediaan" role="button">
                    <div class="icon"><i class="fas fa-location-arrow"></i>
                    </div>

                </a>


            </div>

        </div>
        <div class="row">
            <div class="col-md-11">
                <div class="card" style="width: 65rem;">

                    <div class="card-body">
                        <h5 class="card-title">Paket 2P Digital Channel 2021</h5><br>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Internet</p>
                                <li>Up to 50Mbps</li>


                            </div>
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Televisi</p>
                                <li>Tersedia 70 channel</li>


                            </div>
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Telepon</p>
                                <li>Gratis 90 menit</li>


                            </div>

                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-1">
                <a class="btn btn-outline-danger" href="https://indihome.co.id/berlangganan-baru/cek-ketersediaan" role="button">
                    <div class="icon"><i class="fas fa-location-arrow"></i>
                    </div>

                </a>


            </div>

        </div>
        <div class="row">
            <div class="col-md-11">
                <div class="card" style="width: 65rem;">

                    <div class="card-body">
                        <h5 class="card-title">Paket 2P Digital Channel 2021</h5><br>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Internet</p>
                                <li>Up to 100Mpbs</li>


                            </div>
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Televisi</p>
                                <li>Tersedia 80 channel </li>


                            </div>
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Telepon</p>
                                <li>Gratis 100 menit</li>


                            </div>

                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-1">
                <a class="btn btn-outline-danger" href="https://indihome.co.id/berlangganan-baru/cek-ketersediaan" role="button">
                    <div class="icon"><i class="fas fa-location-arrow"></i>
                    </div>

                </a>


            </div>

        </div>
        <div class="row">
            <div class="col-md-11">
                <div class="card" style="width: 65rem;">

                    <div class="card-body">
                        <h5 class="card-title">Paket 2P Digital Channel 2021</h5><br>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Internet</p>
                                <li>Up to 200Mbps</li>


                            </div>
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Televisi</p>
                                <li>Tersedia 95 Channel</li>


                            </div>
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Telepon</p>
                                <li> Gratis 135 menit</li>


                            </div>

                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-1">
                <a class="btn btn-outline-danger" href="https://indihome.co.id/berlangganan-baru/cek-ketersediaan" role="button">
                    <div class="icon"><i class="fas fa-location-arrow"></i>
                    </div>

                </a>


            </div>

        </div>
        <div class="row">
            <div class="col-md-11">
                <div class="card" style="width: 65rem;">

                    <div class="card-body">
                        <h5 class="card-title">Paket 2P Digital Channel 2021</h5><br>
                        <div class="row">
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Internet</p>
                                <li>Up to 300Mbps</li>


                            </div>
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Televisi</p>
                                <li>Tersedia 120 channel</li>


                            </div>
                            <div class="col-md-4">
                                <p class="card-text fw-bold fst-italic">Televisi</p>
                                <li>Gratis 150 menit</li>


                            </div>

                        </div>
                    </div>

                </div>


            </div>
            <div class="col-md-1">
                <a class="btn btn-outline-danger" href="https://indihome.co.id/berlangganan-baru/cek-ketersediaan" role="button">
                    <div class="icon"><i class="fas fa-location-arrow"></i>
                    </div>

                </a>


            </div>

        </div>

    </div>


    </div>

    </div>
</section> -->


<style>
    h2 {
        color: #000000;
    }

    .wew {
        margin: 0;
        padding: 100px;
        display: flex;
        justify-content: center;
        height: 600px;

        align-items: center;
        font-family: sans-serif;
    }

    .login {
        background-color: #fff;
        width: 350px;
        text-align: center;
        padding-left: -500px;
        padding-right: -500px;
        box-sizing: border-box;
        border-radius: 10px;
    }

    .login .input-group1 {
        position: relative;
        width: 100%;
        margin-bottom: 25px;
    }

    .login h2 {
        margin: 0 0 20px;
        width: 100%;
        margin-bottom: 25px;
    }

    .login .input-group1 input {
        height: 50px;
        width: 100%;
        padding: 0 20px;
        box-sizing: border-box;
        font-size: 15px;
        border: 1px solid black;

    }

    .login .input-group1 span {
        position: absolute;
        top: 12px;
        left: 20px;
        padding: 0px;
        text-transform: capitalize;
        background-color: #fff;
        transition: 0.5s;
    }

    .login .input-group1 input:focus~span,
    .loign .input-group1 input:valid~span {
        top: -12px;
        left: 20px;
        font-size: 12px;
        background-color: #fff;
        padding: 2px 4px;
        border: 1px solid#000;
        border-radius: 5px;
    }

    .login .input-group1 a {
        background-color: #FB0303;
        border: none;
        text-transform: uppercase;
        font-weight: bold;
        cursor: pointer;
        width: 35%;
        transition: 0.5s;
        border-radius: 5px;
        padding: 15px 15px;
        text-decoration: none;



    }

    .login .input-group1 a:hover {
        width: 100%;
        background-color: rgba(21, 177, 225);
        color: #fff;
    }

    .container1 {
        background-color: rgba(247, 248, 249, 1);
        padding: 30px;
    }

    input,
    textarea {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
</style>
<?= $this->endSection(); ?>