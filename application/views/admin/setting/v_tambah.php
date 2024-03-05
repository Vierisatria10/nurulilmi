<!-- Content Header (Page header) -->
<style>
.btn-green {
    background-color: #0F7571;
    color: #fff;
}

.editor_misi {
    min-height: 400px;
}
</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?= $judul; ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><?= $judul; ?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="col-12">
            <!-- /.card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Setting</h3>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/setting') ?>" class="btn btn-info btn-sm"><i
                                class="fas fa-backward"></i> Kembali</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="<?= base_url('admin/setting/tambah') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Masjid</label>
                                    <input type="text" name="nama_masjid" id="nama_masjid"
                                        value="<?= set_value('nama_masjid') ?>" class="form-control">
                                    <?= form_error('nama_masjid', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">No Hp</label>
                                    <input type="text" name="no_hp" id="no_hp" value="<?= set_value('no_hp') ?>"
                                        class="form-control">
                                    <?= form_error('no_hp', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Logo</label>
                                    <input type="file" name="userfile[]" id="logo" value="<?= set_value('logo') ?>"
                                        class="form-control">
                                    <small class="text-danger">*Tidak Wajib Diisi</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Upload Banner 1</label>
                                    <input name="userfile[]" id="banner1" type="file"
                                        value="<?= set_value('banner1') ?>" class="form-control">
                                    <small class="text-danger">*File Upload wajib jpg,jpeg,png,JPEG,JPG !!</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Upload Banner 2</label>
                                    <input name="userfile[]" id="banner2" type="file"
                                        value="<?= set_value('banner2') ?>" class="form-control">
                                    <small class="text-danger">*File Upload wajib jpg,jpeg,png,JPEG,JPG !!</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Upload Banner 3</label>
                                    <input name="userfile[]" id="banner3" type="file"
                                        value="<?= set_value('banner3') ?>" class="form-control">
                                    <small class="text-danger">*File Upload wajib jpg,jpeg,png,JPEG,JPG !!</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Judul 1</label>
                                    <input name="judul1" id="judul1" type="text" value="<?= set_value('judul1') ?>"
                                        class="form-control">
                                    <?= form_error('judul1', '<small class="text-danger">', '</small>'); ?>
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Judul 2</label>
                                    <input name="judul2" id="judul2" type="text" value="<?= set_value('judul2') ?>"
                                        class="form-control">
                                    <?= form_error('judul2', '<small class="text-danger">', '</small>'); ?>
                                    <small></small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Judul 3</label>
                                    <input name="judul3" id="judul3" type="text" value="<?= set_value('judul3') ?>"
                                        class="form-control">
                                    <?= form_error('judul3', '<small class="text-danger">', '</small>'); ?>
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Link Facebook</label>
                                    <input name="sosmed1" id="sosmed1" type="text" value="<?= set_value('sosmed1') ?>"
                                        class="form-control">
                                    <?= form_error('sosmed1', '<small class="text-danger">', '</small>'); ?>
                                    <small></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Link Instagram</label>
                                    <input name="sosmed2" id="sosmed2" type="text" value="<?= set_value('sosmed2') ?>"
                                        class="form-control">
                                    <?= form_error('sosmed2', '<small class="text-danger">', '</small>'); ?>
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Link Youtube</label>
                                    <input name="sosmed3" id="sosmed3" type="text" value="<?= set_value('sosmed3') ?>"
                                        class="form-control">
                                    <?= form_error('sosmed3', '<small class="text-danger">', '</small>'); ?>
                                    <small></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jadwal Shalat</label>
                                    <select name="id_jadwal" class="form-control" id="id_jadwal">
                                        <option value="">Pilih Jadwal Shalat</option>
                                        <?php foreach($data_jadwal as $jadwal) : ?>
                                        <option value="<?= $jadwal->id_jadwal ?>"><?= $jadwal->waktu_shalat ?> -
                                            <?= $jadwal->jam ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" id="editor" cols="30" class="form-control"></textarea>
                                    <?= form_error('alamat', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>

<!-- /.content -->