<?= $this->extend('templates/template_admin'); ?>

<?= $this->section('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data User</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data User</h3>
                        <div class="float-sm-right"><a href="<?php echo base_url('data_user/tambah') ?>" class="btn btn-sm btn-success"><span class="fa fa-plus"></span> Tambah Data User</a></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($users as $row) : ?>
                                    <tr>
                                        <td><?= $no++; ?>.</td>
                                        <td><?= $row->nama; ?></td>
                                        <td><?= $row->username; ?></td>
                                        <td><?= $row->password; ?></td>
                                        <td><?= $row->level; ?></td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" href="<?php echo base_url('data_user/edit/' . $row->id) ?>">
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="<?php echo base_url('data_user/delete/' . $row->id) ?>" onclick="return confirm('Yakin ingin menghapus kategori ini?')">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->


</section>
<!-- /.content -->

<?= $this->endSection(); ?>