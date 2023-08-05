<!-- Code navbar -->

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#fe4a49">
    <div class="container-fluid">
        <a class="navbar-brand " href="#">Telkom Indonesia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="/pages/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/pages/bantuan">Bantuan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Product
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/pages/paket">Paket</a></li>
                        <li><a class="dropdown-item" href="/pages/internet">Internet</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/pages/AddOn">ADD ON</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Coming Soon</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/pages/dev">Develop</a>
                </li>



            </ul>
            <?php if (logged_in()) : ?>

            <?php else : ?>
                <a class="btn btn-outline-light" style="border:3px solid" href="/login" role="button">Login</a>
            <?php endif; ?>


            <div class="topbar-divider d-none d-sm-block"></div>
            <?php if (logged_in()) : ?>
                <div class="dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= user()->username; ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <?php if (in_groups('admin')) : ?>
                            <a class="dropdown-item" href="/admin/index">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Management User
                            </a>

                            <div class="dropdown-divider"></div>
                        <?php endif; ?>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </div>
            <?php endif; ?>




        </div>
    </div>
</nav>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
<style>
    .dropdown img {
        width: 20px;
    }
</style>