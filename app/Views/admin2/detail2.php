<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<title>ADM</title>
<!-- content -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="flex-container">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4>
                                        Data Pelanggan
                                    </h4>
                                </li>
                                <?php if ($user2->name) : ?>
                                    <li class="list-group-item">
                                        <h5>Nama Lengkap</h5><?= $user2->name; ?>
                                    </li>
                                <?php endif; ?>
                                <li class="list-group-item">
                                    <h5>Email</h5><?= $user2->email; ?>
                                </li>
                                <li class="list-group-item">
                                    <h5>Alamat</h5><?= $user2->alamat; ?>
                                </li>
                                <li class="list-group-item">
                                    <h5>NoHp</h5><?= $user2->NoHp; ?>
                                </li>
                                <li class="list-group-item">
                                    <h5>Kordinat</h5><?= $user2->koordinat; ?>
                                </li>



                                <li class="list-group-item"><small><a href="<?= base_url('admin/index3') ?> " class="aw">&laquo; back to user list</a></small></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <h4>Gambar Ktp</h4>
                        <center><img src="<?= base_url('/uploads2/' . $user2->gmbrktp); ?>" width="100%"></center>
                    </div>
                    <div class="col-md-6 ">
                        <h4>Gambar Rumah</h4>
                        <center><img src="<?= base_url('/uploads2/' . $user2->gmbr); ?>" width="100%"></center>
                    </div>
                    <div class="col-md-6 ">
                        <h4>Foto Selfie</h4>
                        <center><img src="<?= base_url('/uploads2/' . $user2->selfie); ?>" width="100%"></center>
                    </div>
                </div>

                <!-- </div>
            <a href="cetak?id=<?= $user2->id; ?>"><button class="btn btn-default btn-xs"><i class="fa fa-print"></i>Unduh Data</button></a>

        </div> -->

            </div>


            <!-- Sidebar - Brand -->

        </div>
    </div>
</div>
<style>
    @media print {
        .nub .col-md-3 .wew .aw {
            display: none;
        }
    }
</style>
<?= $this->endSection(); ?>