<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<title>Confrim</title>


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

    <?php if ($success != null) : ?>
        <section class="rdp">
            <div class="alert-success">
                <h4 class="alert-heading">successfully!</h4>
                <p>Data Pemesanan anda sudah dikirim ke Admin,Mohon tunggu info selanjutnya dari Admin</p>
                <hr>
                <p class="mb-0">Untuk info selanjutnya Anda bisa <a href="hubungi" class="alert-link">Hubungi Admin</a></p>
            </div>
        </section>
    <?php endif ?>


</section>


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

    .rdp div {
        margin: 150px;
        padding: 50px;
    }
</style>
<?= $this->endSection(); ?>