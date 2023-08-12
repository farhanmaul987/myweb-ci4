<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Form Input Mata Kuliah</h6>
                <form action="add.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi Mata Kuliah</label>
                        <textarea class="form-control" name="alamat" style="height: 100px;" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Program Studi</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Slug</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Kumpulkan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>