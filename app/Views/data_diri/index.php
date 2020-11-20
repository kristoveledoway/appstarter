<?= $this->extend('templates/template_admin'); ?>

<?= $this->section('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Diri</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Diri</li>
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
                        <div class="float-sm-right"><a href="<?php echo base_url('data_diri/tambah') ?>" class="btn btn-sm btn-success"><span class="fa fa-plus"></span> Tambah Data Diri</a></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>No. Telp</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($diri as $row) : ?>
                                    <tr>
                                        <td><?= $no++; ?>.</td>
                                        <td><?= $row->nama; ?></td>
                                        <td><?= $row->nik; ?></td>
                                        <td><?= $row->jk; ?></td>
                                        <td><?= $row->email; ?></td>
                                        <td><?= $row->no_telp; ?></td>
                                        <td><?= $row->alamat; ?></td>
                                        <td>
                                            <a class="btn btn-success btn-sm" href="<?php echo base_url('data_diri/detail/' . $row->id) ?>">
                                                Detail
                                            </a>
                                            <a class="btn btn-warning btn-sm" href="<?php echo base_url('data_diri/edit/' . $row->id) ?>">
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="<?php echo base_url('data_diri/delete/' . $row->id) ?>" onclick="return confirm('Yakin ingin menghapus kategori ini?')">
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
                                    <th>NIK</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>No. Telp</th>
                                    <th>Alamat</th>
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