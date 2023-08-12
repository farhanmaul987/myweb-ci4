<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Form Input New Admin</h6>
                <form action="add.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NPM</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Kumpulkan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>