<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-5">
                <h3 class="mb-3"><?= $matkul['nama_matkul']; ?></h3>

                <img src="/img/<?= $matkul['thumbnail']; ?>" class="mb-3 img-fluid" style="width: 1000px; height: 300px; object-fit: cover;" alt="image">

                <p align="justify" class="mb-3"><?= $matkul['desk_matkul']; ?></p>

                <p><i>Program Studi: <a href="#"><?= $matkul['prodi']; ?></a></i></p>

                <a class="btn btn-warning all-icons" href="<?php echo base_url(); ?>mata_kuliah/edit/<?= $matkul['slug']; ?>">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <form action="<?php echo base_url(); ?>mata_kuliah/delete/<?= $matkul['id_matkul']; ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger all-icons" onclick="return confirm('Apakah anda yakin ingin menghapus mata kuliah <?= $matkul['nama_matkul']; ?>')"><i class="fas fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>