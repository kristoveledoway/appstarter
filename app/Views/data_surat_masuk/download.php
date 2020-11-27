<?= $this->extend('templates/template_admin'); ?>

<?= $this->section('content'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Download dan Lihat Data File</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Download dan Lihat Data File</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Download dan Lihat Data File</h3>
                        <div class="float-sm-right"><a href="<?php echo base_url('data_surat_masuk') ?>" class="btn btn-sm btn-danger"><span class="fas fa-arrow-alt-circle-left"></span> Kembali</a></div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped">
                                    <tr>
                                        <th width="100px">No Surat</th>
                                        <th width="30px">:</th>
                                        <td><?= $arsip['no_surat_masuk']; ?></td>
                                        <th width="100px">Tgl Surat Masuk</th>
                                        <th width="30px">:</th>
                                        <td><?= $arsip['tgl_surat']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Perihal Surat</th>
                                        <th>:</th>
                                        <td><?= $arsip['perihal']; ?></td>
                                        <th>Tgl Surat Diterima</th>
                                        <th>:</th>
                                        <td><?= $arsip['tgl_diterima']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sifat Surat</th>
                                        <th>:</th>
                                        <td><?= $arsip['sifat']; ?></td>
                                        <th>Lampiran Surat</th>
                                        <th>:</th>
                                        <td><?= $arsip['lampiran']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <iframe src="<?= base_url('assets/upload/dokumen/' . $arsip['file']) ?>" height="1000px" width="100%"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>