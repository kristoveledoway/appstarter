<?= $this->extend('templates/template_admin'); ?>

<?= $this->section('content'); ?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Data Diri</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Data Diri</li>
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
                        <h3 class="card-title">Form Tambah Data Diri</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('data_diri/tambah') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                            <input type="hidden" name="id">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="col-md control-label">Nama Lengkap<span class="text-danger">*</span></label>
                                        <div class="col-sm">
                                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Tempat Lahir<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Jenis Kelamin<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                        <select name="jk" class="custom-select custom-select-sm-12">
                                            <option value="Laki-Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Agama<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                        <select name="agama" class="custom-select custom-select-sm-12">
                                            <option value="Kristen Protestan">Kristen Protestan</option>
                                            <option value="Kristen Katholik">Kristen Katholik</option>
                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Email<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Masukan E-mail">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Alamat<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Provinsi<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                        <select name="provinsi" class="custom-select custom-select-sm-12">
                                            <option value="PAPUA">PAPUA</option>
                                            <option value="PAPUA BARAT">PAPUA BARAT</option>
                                        </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm control-label">Kecamatan<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="kecamatan" id="kecamatan" class="form-control" placeholder="Masukan Kecamatan">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Sekolah<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="sekolah" id="sekolah" class="form-control" placeholder="Masukan Sekolah">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Program Studi<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="prodi" id="prodi" class="form-control" placeholder="Masukan Program Studi">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="col-md control-label">NIK<span class="text-danger">*</span></label>
                                        <div class="col-sm">
                                            <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan NIK">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Tahun-Bulan-Tanggal Lahir<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <div class="input-group date">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                                <input placeholder="Masukan Tahun-Bulan-Tanggal Lahir" type="text" class="form-control datepicker" name="tanggal_lahir">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Kewarganegaraan<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                        <select name="kewarganegaraan" class="custom-select custom-select-sm-12">
                                            <option value="Warga Negara Indonesia (WNI)">Warga Negara Indonesia (WNI)</option>
                                            <option value="Warga Negara Asing (WNA)">Warga Negara Asing (WNA)</option>
                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Nama Ibu<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" placeholder="Masukan Nama Ibu">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">No. Telp / No.Hp<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Masukan No.Telp / No. HP">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Kode Pos<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="kode_pos" id="kode_pos" class="form-control" placeholder="Masukan Kode Pos">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Kabupaten<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="kabupaten" id="kabupaten" class="form-control" placeholder="Masukan Kabupaten">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Pendidikan Terakhir<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="pendidikan" id="pendidikan" class="form-control" placeholder="Masukan Pendidikan Terakhir">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm control-label">Universitas / Kampus<span class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input type="text" name="kampus" id="kampus" class="form-control" placeholder="Masukan Univeritas / Kampus">
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
                                            <a href="<?php echo base_url('data_diri') ?>" class="btn btn-secondary btn-lg" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</a>
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