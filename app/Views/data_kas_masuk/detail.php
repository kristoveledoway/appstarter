<?= $this->extend('templates/template_admin'); ?>

<?= $this->section('content'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Data Kas Masuk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Detail Data Kas Masuk</li>
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
                        <h3 class="card-title">Form Detail Data Kas Masuk</h3>
                    </div>
                    <div class="card-body">
                    <fieldset disabled>
                        <form action="<?php echo base_url('data_kas_masuk/tambah') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                            <input type="hidden" name="kode">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="col-md control-label">Keterangan Kas Masuk<span class="text-danger">*</span></label>
                                        <div class="col-sm">
                                            <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Masukan Keterangan Kas Masuk" value="<?php echo $users['keterangan'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Tanggal Kas Masuk<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                                <input placeholder="Masukan Tanggal Kas Masuk" type="text" class="form-control datepicker" name="tgl" value="<?php echo $users['tgl'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Jumlah Kas Masuk<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="jumlah_masuk" id="jumlah_masuk" class="form-control" placeholder="Masukan Jumlah Kas Masuk" value="<?php echo $users['jumlah_masuk'] ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Jenis Kas<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                        <select name="jenis" class="custom-select custom-select-sm-12">
                                            <option value="Dana Kas Anggota">Dana Kas Anggota</option>
                                            <option value="Dana Kas Umum" <?php if($users['jenis']=="Dana Kas Umum") { echo "selected"; } ?>>Dana Kas Umum</option>
                                        </select>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                    </fieldset>
                            <div class="form-group">
                                <label class="col-sm control-label"></label>
                                    <div class="col-sm-12">
                                        <div class="btn-group">
                                            <a href="<?php echo base_url('data_kas_masuk') ?>" class="btn btn-secondary btn-lg" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</a>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>