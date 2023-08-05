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
                    <a class="nav-link" href="<?= base_url('pages'); ?>">
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
            <h5>User list</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">NoHp</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $user->username; ?></td>
                            <td><?= $user->email; ?></td>
                            <td></td>
                            <td><?= $user->name; ?></td>
                            <td><a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-info">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>

    </div>


    <!-- Sidebar - Brand -->

</div>
</div>
</div>
<?= $this->endSection(); ?>