<?= $this->extend('templates/template_admin'); ?>

<?= $this->section('content'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Data User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Data User</li>
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
                        <h3 class="card-title">Form Tambah Data User</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('data_user/tambah') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                            <input type="hidden" name="id">
                            <div class="form-group">
                                <label class="col-md control-label">Nama<span class="text-danger">*</span></label>
                                <div class="col-sm">
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama User">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm control-label">Username<span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm control-label">Password<span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm control-label">Level<span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <input type="text" name="level" id="level" class="form-control" placeholder="Level">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm control-label"></label>
                                <div class="col-sm-12">
                                    <div class="btn-group">
                                        <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Simpan Data</button>
                                        <button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i> Reset</button>
                                        <a href="<?php echo base_url('data_user') ?>" class="btn btn-secondary btn-lg" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</a>
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