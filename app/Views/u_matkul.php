<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Form Edit Mata Kuliah</h6>
                <form action="<?php echo base_url(); ?>mata_kuliah/update/<?= $matkul['id_matkul']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="slug" value="<?= $matkul['slug']; ?>">
                    <input type="hidden" name="oldthumb" value="<?= $matkul['thumbnail']; ?>">
                    <div class="mb-3">
                        <label for="nama_matkul" class="form-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" id="inputMatkul" name="nama_matkul" value="<?= (old('nama_matkul') !== NULL || old('nama_matkul') === "") ? old('nama_matkul') : $matkul['nama_matkul']; ?>">
                        <div class="invalid-feedback">
                            Nama Mata Kuliah tidak boleh kosong.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="desk_matkul" class="form-label">Deskripsi Mata Kuliah</label>
                        <textarea class="form-control" id="inputDesk" name="desk_matkul" rows="5"><?= $matkul['desk_matkul']; ?></textarea>
                        <div class="invalid-feedback">
                            Deskripsi Mata Kuliah tidak boleh kosong.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Program Studi</label>
                        <input type="text" class="form-control" id="inputProdi" name="prodi" value="<?= $matkul['prodi']; ?>">
                        <div class="invalid-feedback">
                            Program Studi tidak boleh kosong.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">Upload Thumbnail</label>
                        <input class="form-control bg-dark" type="file" name="thumbnail">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>