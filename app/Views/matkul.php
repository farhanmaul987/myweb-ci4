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
                    <?php $no = 1; ?>
                    <?php foreach ($matkul as $mk) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $mk['nama_matkul'] ?></td>
                            <td><?= $mk['prodi'] ?></td>
                            <td>8 Agustus 2023</td>
                            <td class="actions-icon">
                                <a class="btn btn-sm btn-warning all-icons" href="mata_kuliah/detail/<?= $mk['slug'] ?>">
                                    <i class="fas fa-eye"></i> Detail
                                </a>

                                <a class="btn btn-sm btn-info all-icons" href="mata_kuliah/edit/<?= $mk['slug'] ?>">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <form action="mata_kuliah/delete/<?= $mk['id_matkul'] ?>" method="post">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-danger all-icons" onclick="return confirm('Apakah anda yakin ingin menghapus mata kuliah <?= $mk['nama_matkul'] ?>?')"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>