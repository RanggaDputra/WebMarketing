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
            <h5 class="mt-5">User list</h5>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukan Keyword Pencarian" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                </div>
            </form>
            <table class="table">
                <script>
                    $(document).ready(function() {
                        var table = $('#example').DataTable({
                            lengthChange: false,
                            buttons: ['copy', 'excel', 'pdf', 'colvis']
                        });

                        table.buttons().container()
                            .appendTo('#example_wrapper .col-md-6:eq(0)');
                    });
                </script>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NamaLengkap</th>
                        <th scope="col">Alamat</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                    <?php foreach ($user2 as $user) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $user->name; ?></td>
                            <td><?= $user->alamat; ?></td>
                            <td><a href="<?= base_url('admin2/' . $user->id); ?>" class="btn btn-info">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <?= $pager->links('user2', 'user_pagination'); ?>
        </div>

    </div>


    <!-- Sidebar - Brand -->

</div>
</div>
</div>

<?= $this->endSection(); ?>