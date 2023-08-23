<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Form Input Mata Kuliah</h6>
                <form action="<?php echo base_url(); ?>mata_kuliah/save" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nama_matkul" class="form-label">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" id="inputMatkul" name="nama_matkul">
                        <div class="invalid-feedback">
                            Nama mata kuliah tidak boleh kosong.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="desk_matkul" class="form-label">Deskripsi Mata Kuliah</label>
                        <textarea class="form-control" id="inputDesk" name="desk_matkul" rows="5"></textarea>
                        <div class="invalid-feedback">
                            Deskripsi mata kuliah tidak boleh kosong.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Program Studi</label>
                        <input type="text" class="form-control" id="inputProdi" name="prodi">
                        <div class="invalid-feedback">
                            Program studi tidak boleh kosong.
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