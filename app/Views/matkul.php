<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col" style="width: 5%;">#</th>
                        <th scope="col" style="width: 25%;">Mata Kuliah</th>
                        <th scope="col" style="width: 25%;">Program Studi</th>
                        <th scope="col" style="width: 25%;">Dibuat Pada</th>
                        <th scope="col" style="width: 20%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($matkul as $mk) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $mk['nama_matkul'] ?></td>
                            <td><?= $mk['prodi'] ?></td>
                            <td>8 Agustus 2023</td>
                            <td class="actions-icon">
                                <a class="btn btn-sm btn-primary all-icons" href="">
                                    <i class="fas fa-eye"></i> Detail
                                </a>
                                <a class="btn btn-sm btn-primary all-icons" href="">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a class="btn btn-sm btn-primary all-icons" href="">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>