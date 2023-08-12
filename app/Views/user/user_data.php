<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="mb-4">
            <div class="m-n1">
                <a href="input_user" type="button" class="btn btn-primary m-2">Tambahkan User</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col" style="width: 5%;">#</th>
                        <th scope="col" style="width: 15%;">Nama Lengkap</th>
                        <th scope="col" style="width: 13%;">NPM</th>
                        <th scope="col" style="width: 11%;">Jurusan</th>
                        <th scope="col" style="width: 11%;">Username</th>
                        <th scope="col" style="width: 17%;">Email</th>
                        <th scope="col" style="width: 13%;">Status</th>
                        <th scope="col" style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Muhammad Farhan Maulana</td>
                        <td>20081010159</td>
                        <td>Informatika</td>
                        <td>bongo</td>
                        <td>ppppp@gmail.com</td>
                        <td>Mahasiswa Aktif</td>
                        <td class="actions-icon">
                            <a class="btn btn-sm btn-primary all-icons" href="">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a class="btn btn-sm btn-primary all-icons" href="">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Muhammad Farhan Maulana</td>
                        <td>20081010159</td>
                        <td>Informatika</td>
                        <td>bongo</td>
                        <td>ppppp@gmail.com</td>
                        <td>Mahasiswa Aktif</td>
                        <td class="actions-icon">
                            <a class="btn btn-sm btn-primary all-icons" href="">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a class="btn btn-sm btn-primary all-icons" href="">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Muhammad Farhan Maulana</td>
                        <td>20081010159</td>
                        <td>Informatika</td>
                        <td>bongo</td>
                        <td>ppppp@gmail.com</td>
                        <td>Mahasiswa Aktif</td>
                        <td class="actions-icon">
                            <a class="btn btn-sm btn-primary all-icons" href="">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a class="btn btn-sm btn-primary all-icons" href="">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>