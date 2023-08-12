<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12">
            <div class="bg-secondary rounded h-100 p-5">
                <h3 class="mb-3"><?= $matkul['nama_matkul']; ?></h3>
                <p align="justify" class="mb-3"><?= $matkul['desk_matkul']; ?></p>
                <p><i>Program Studi: <?= $matkul['prodi']; ?></i></p>

                <a class="btn btn-primary all-icons" href="">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <a class="btn btn-primary all-icons" href="">
                    <i class="fas fa-trash"></i> Delete
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>