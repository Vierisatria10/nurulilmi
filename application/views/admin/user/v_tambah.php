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
                    <h3 class="card-title">Add User</h3>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/user') ?>" class="btn btn-info btn-sm"><i
                                class="fas fa-backward"></i> Kembali</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="<?= base_url('admin/user/tambah') ?>" method="POST" enctype="multipart/form-data">
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
                                    <label for="">Username</label>
                                    <input type="text" name="username" id="username"
                                        value="<?= set_value('username') ?>" class="form-control">
                                    <?= form_error('username', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input name="password" type="password" id="password"
                                        value="<?= set_value('password') ?>" class="form-control">
                                    <?= form_error('password', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">No. Hp</label>
                                    <input type="text" name="no_hp" id="no_hp"
                                        value="<?= set_value('no_hp') ?>" class="form-control">
                                    <?= form_error('no_hp', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Level</label>
                                    <select name="level" id="level" class="form-control">
                                        <option value="">--Pilih Level--</option>
                                        <option value="Administrator">Administrator</option>
                                        <option value="Pengurus">Pengurus</option>
                                    </select>
                                    <?= form_error('level', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Upload Foto</label>
                                    <input name="foto" id="foto" type="file" value="<?= set_value('foto') ?>"
                                        class="form-control">
                                    <?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
                                    <small></small>
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