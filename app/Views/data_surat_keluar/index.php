<?= $this->extend('templates/template_admin'); ?>

<?= $this->section('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Surat Keluar</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Surat Keluar</li>
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
                        <h3 class="card-title">Data Surat Keluar</h3>
                        <div class="float-sm-right"><a href="<?php echo base_url('data_surat_keluar/tambah') ?>" class="btn btn-sm btn-success"><span class="fa fa-plus"></span> Tambah Data Surat Keluar</a></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No. Surat Keluar</th>
                                    <th>Tanggal Surat Keluar</th>
                                    <th>Perihal</th>
                                    <th>Sifat</th>
                                    <th>Lampiran</th>
                                    <th>No. Surat Masuk</th>
                                    <th>File</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($surat_keluar as $row) : ?>
                                    <tr>
                                        <td><?= $no++; ?>.</td>
                                        <td><?= $row->no_surat_keluar; ?></td>
                                        <td><?= $row->tgl_surat; ?></td>
                                        <td><?= $row->perihal; ?></td>
                                        <td><?= $row->sifat; ?></td>
                                        <td><?= $row->lampiran; ?></td>
                                        <td><?= $row->no_surat_masuk; ?></td>
                                        <td><?= $row->file; ?></td>
                                        <td>
                                            <a class="btn btn-success btn-sm" href="<?php echo base_url('data_surat_keluar/detail/' . $row->no_surat_keluar) ?>">Detail</a>
                                            <a class="btn btn-warning btn-sm" href="<?php echo base_url('data_surat_keluar/edit/' . $row->no_surat_keluar) ?>">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="<?php echo base_url('data_surat_keluar/delete/' . $row->no_surat_keluar) ?>" onclick="return confirm('Yakin ingin menghapus kategori ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>No. Surat Keluar</th>
                                    <th>Tanggal Surat Keluar</th>
                                    <th>Perihal</th>
                                    <th>Sifat</th>
                                    <th>Lampiran</th>
                                    <th>No. Surat Masuk</th>
                                    <th>File</th>
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