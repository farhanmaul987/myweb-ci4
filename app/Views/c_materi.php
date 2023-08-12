<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Form Input Materi</h6>
                <form action="add.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Judul Materi/Tugas/Sumber Belajar</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <!-- <div class="mb-3">
                        <label class="form-label">Mata Kuliah</label>
                        <select class="form-select" name="jenis_kelamin" required>
                            <option disabled selected>Pilih Mata Kuliah</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select class="form-select" name="agama" required>
                            <option disabled selected>Pilih Kategori</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Budda">Budda</option>
                            <option value="Hindu">Hindu</option>
                        </select>
                    </div> -->
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="alamat" style="height: 100px;" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Slug</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="formFile" class="form-label">File Sumber</label>
                        <input class="form-control bg-dark" type="file" id="formFile" required>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto Sampul</label>
                        <input class="form-control bg-dark mb-4" type="file" id="formFile" required>
                    </div> -->
                    <button type="submit" name="submit" class="btn btn-primary">Kumpulkan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>