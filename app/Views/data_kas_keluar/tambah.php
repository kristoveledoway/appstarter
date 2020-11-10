<?= $this->extend('templates/template_admin'); ?>

<?= $this->section('content'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Data Kas Keluar</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Data Kas Keluar</li>
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
                        <h3 class="card-title">Form Tambah Data Kas Keluar</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('data_kas_keluar/tambah') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                            <input type="hidden" name="kode">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="col-md control-label">Keterangan Kas Keluar<span class="text-danger">*</span></label>
                                        <div class="col-sm">
                                            <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Masukan Keterangan Kas Keluar">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Tanggal Kas Keluar<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                                <input placeholder="Masukan Tanggal Kas Keluar" type="text" class="form-control datepicker" name="tgl">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Jumlah Kas Keluar<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="jumlah_keluar" id="jumlah_keluar" class="form-control" placeholder="Masukan Jumlah Kas Keluar">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Jenis Kas<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                        <select name="jenis" class="custom-select custom-select-sm-12">
                                            <option value="Dana Kas Anggota">Dana Kas Anggota</option>
                                            <option value="Dana Kas Umum">Dana Kas Umum</option>
                                        </select>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm control-label"></label>
                                    <div class="col-sm-12">
                                        <div class="btn-group">
                                            <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Simpan Data</button>
                                            <button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i> Reset</button>
                                            <a href="<?php echo base_url('data_kas_keluar') ?>" class="btn btn-secondary btn-lg" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</a>
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