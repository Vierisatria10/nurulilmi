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
                    <h3 class="card-title">Add Pengurus</h3>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/pimpinan') ?>" class="btn btn-info btn-sm"><i
                                class="fas fa-backward"></i> Kembali</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="<?= base_url('admin/pimpinan/tambah') ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" id="nama" value="<?= set_value('nama') ?>"
                                        class="form-control">
                                    <?= form_error('nama', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Link Facebook</label>
                                    <input type="text" name="link1" id="link1" placeholder="https://facebook.com"
                                        value="-" class="form-control">
                                    <small class="text-danger">*Tidak Wajib Diisi</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <input name="jabatan" type="text" id="jabatan" value="<?= set_value('jabatan') ?>"
                                        class="form-control">
                                    <?= form_error('jabatan', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Link Twitter</label>
                                    <input type="text" name="link2" id="link2" placeholder="https://twitter.com"
                                        value="-" class="form-control">
                                    <small class="text-danger">*Tidak Wajib Diisi</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Upload Foto</label>
                                    <input name="foto" id="foto" type="file" value="<?= set_value('foto') ?>"
                                        class="form-control">
                                    <?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
                                    <small class="text-danger">*Ekstensi Foto harus jpg,png,jpeg</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Link Instagram</label>
                                    <input name="link3" id="link3" type="text" placeholder="https://instagram.com"
                                        value="-" class="form-control">
                                    <small class="text-danger">*Tidak Wajib Diisi</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control">
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