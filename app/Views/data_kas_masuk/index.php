<?= $this->extend('templates/template_admin'); ?>

<?= $this->section('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Kas Masuk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Kas Masuk</li>
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
                        <h3 class="card-title">Data Kas Masuk</h3>
                        <div class="float-sm-right"><a href="<?php echo base_url('data_kas_masuk/tambah') ?>" class="btn btn-sm btn-success"><span class="fa fa-plus"></span> Tambah Data Kas Masuk</a></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kas Masuk</th>
                                    <th>Keterangan Kas Masuk</th>
                                    <th>Tanggal Kas Masuk</th>
                                    <th>Jumlah Kas Masuk</th>
                                    <th>Jenis Kas Masuk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($kas_masuk as $row) : ?>
                                    <tr>
                                        <td><?= $no++; ?>.</td>
                                        <td><?= $row->kode; ?></td>
                                        <td><?= $row->keterangan; ?></td>
                                        <td><?= $row->tgl; ?></td>
                                        <td><?= $row->jumlah_masuk; ?></td>
                                        <td><?= $row->jenis; ?></td>
                                        <td>
                                            <a class="btn btn-success btn-sm" href="<?php echo base_url('data_kas_masuk/detail/' . $row->kode) ?>">
                                                Detail
                                            </a>
                                            <a class="btn btn-warning btn-sm" href="<?php echo base_url('data_kas_masuk/edit/' . $row->kode) ?>">
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="<?php echo base_url('data_kas_masuk/delete/' . $row->kode) ?>" onclick="return confirm('Yakin ingin menghapus kategori ini?')">
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tr>
                                <td colspan="3" style="text-align: right; font-size: 17px; color: maroon;">Total Kas Masuk :</td>
                                <td colspan="3" style="font-size: 17px; text-align: left; ">
                                    <font style="color: green;"><?php echo "Rp. " . number_format($totaljumlah); ?>,-</font>
                                </td>
                            </tr>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kas Masuk</th>
                                    <th>Keterangan Kas Masuk</th>
                                    <th>Tanggal Kas Masuk</th>
                                    <th>Jumlah Kas Masuk</th>
                                    <th>Jenis Kas Masuk</th>
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