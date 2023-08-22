<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="<?= base_url() ?>" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">My Web</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="<?= base_url() ?>img/user.jpg" alt="" style="width: 40px; height: 40px;">
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Anomin</h6>
            </div>
        </div>

        <div class="navbar-nav w-100">
            <a href="<?= base_url() ?>" class="nav-item nav-link"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="<?= base_url() ?>daftar_materi" class="nav-item nav-link"><i class="fas fa-clipboard me-2"></i>Daftar Materi</a>
            <a href="<?= base_url() ?>input_materi" class="nav-item nav-link"><i class="fas fa-keyboard me-2"></i>Input Materi</a>
            <a href="<?= base_url() ?>mata_kuliah" class="nav-item nav-link"><i class="fa fa-list-ul me-2"></i>Mata Kuliah</a>
            <a href="<?= base_url() ?>mata_kuliah/input" class="nav-item nav-link"><i class="far fa-keyboard me-2"></i>Input Matkul</a>
            <a href="<?= base_url() ?>admin_data" class="nav-item nav-link"><i class="fas fa-users-cog me-2"></i>Admin</a>
            <a href="<?= base_url() ?>user_data" class="nav-item nav-link"><i class="fas fa-users me-2"></i>User</a>
        </div>
    </nav>
</div>