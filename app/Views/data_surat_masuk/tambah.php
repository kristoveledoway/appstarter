<?= $this->extend('templates/template_admin'); ?>

<?= $this->section('content'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Data Surat Masuk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Data Surat Masuk</li>
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
                        <h3 class="card-title">Form Tambah Data Surat Masuk</h3>
                        <!-- Success Upload -->
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('data_surat_masuk/tambah') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="col-md control-label">No. Surat Masuk<span class="text-danger">*</span></label>
                                        <div class="col-sm">
                                            <input type="text" name="no_surat_masuk" id="no_surat_masuk" class="form-control" value="<?= $no_surat; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm control-label">Tanggal Surat<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                                <input placeholder="Masukan Tanggal Surat" type="text" class="form-control datepicker" name="tgl_surat">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm control-label">Tanggal Surat Diterima<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                                <input placeholder="Masukan Tanggal Surat Diterima" type="text" class="form-control datepicker" name="tgl_diterima">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="col-md control-label">Perihal Surat<span class="text-danger">*</span></label>
                                        <div class="col-sm">
                                            <input type="text" name="perihal" id="perihal" class="form-control" placeholder="Masukan Perihal Surat">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md control-label">Sifat Surat<span class="text-danger">*</span></label>
                                        <div class="col-sm">
                                            <input type="text" name="sifat" id="sifat" class="form-control" placeholder="Masukan Sifat Surat">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md control-label">Lampiran Surat<span class="text-danger">*</span></label>
                                        <div class="col-sm">
                                            <input type="text" name="lampiran" id="lampiran" class="form-control" placeholder="Masukan Lampiran Surat">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile">File Surat</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Cari file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="btn-group">
                                        <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Simpan Data</button>
                                        <button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i> Reset</button>
                                        <a href="<?php echo base_url('data_surat_masuk') ?>" class="btn btn-secondary btn-lg" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>