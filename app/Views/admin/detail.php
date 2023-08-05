<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<title>ADM</title>
<!-- content -->

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">CLP</div>
                </a>
                <?php if (in_groups('admin')) : ?>
                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        User Management
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/index'); ?>">
                            <i class="fas fa-users"></i>
                            <span>User List</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/index3'); ?>">
                            <i class="fas fa-users"></i>
                            <span>User Pemesanan</span></a>
                    </li>
                <?php endif; ?>





                <!-- Divider -->
                <hr class="sidebar-divider">






                <!-- Heading -->
                <div class="sidebar-heading">
                    Addons
                </div>

                <!-- Nav Item - Pages Collapse Menu -->


                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pages/index'); ?>">
                        <i class="fas fa-users"></i>
                        <span>My Profiles</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-user-edit"></i>
                        <span>Edit Profiles</span></a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('logout'); ?>">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
        </div>
        <div class="col-md-9">
            <h5>User Detail</h5>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('/img/' . $user->user_image); ?>" class="card-img" alt="<?= $user->username; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h4><?= $user->username; ?></h4>
                                </li>
                                <?php if ($user->fullname) : ?>
                                    <li class="list-group-item"><?= $user->fullname; ?></li>
                                <?php endif; ?>
                                <li class="list-group-item"><?= $user->email; ?></li>
                                <li class="list-group-item"><span class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning'; ?>"><?= $user->name; ?></span></li>
                                <li class="list-group-item"><small><a href="<?= base_url('admin') ?>">&laquo; back to user list</a></small></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <!-- Sidebar - Brand -->

</div>
</div>
</div>
<?= $this->endSection(); ?>