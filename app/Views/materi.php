<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col" style="width: 5%;">#</th>
                        <th scope="col" style="width: 15%;">Judul</th>
                        <th scope="col" style="width: 10%;">Pengupload</th>
                        <th scope="col" style="width: 10%;">Kategori</th>
                        <th scope="col" style="width: 10%;">Mata Kuliah</th>
                        <!-- <th scope="col" style="width: 10%;">Tgl Dibuat</th>
                                    <th scope="col" style="width: 10%;">Tgl Diedit</th> -->
                        <th scope="col" style="width: 20%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($materi as $mt) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $mt['judul'] ?></td>
                            <td>Jhon Doe</td>
                            <td>Materi</td>
                            <td>Pemrograman Web</td>
                            <!-- <td>8 Agustus 2023</td>
                                    <td>9 Agustus 2023</td> -->
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