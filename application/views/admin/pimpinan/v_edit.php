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
                    <h3 class="card-title">Edit Pimpinan</h3>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/pimpinan') ?>" class="btn btn-info btn-sm"><i
                                class="fas fa-backward"></i> Kembali</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="<?= base_url('admin/pimpinan/update/' . $pimpinan['id_pimpinan']) ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="hidden" name="id_pimpinan" value="<?= $pimpinan['id_pimpinan'] ?>">
                            <input type="text" name="nama" id="nama" value="<?= $pimpinan['nama'] ?>"
                                class="form-control">
                            <?= form_error('nama', '<small class="text-danger ">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Jabatan</label>
                            <input name="jabatan" type="text" id="jabatan" value="<?= $pimpinan['jabatan'] ?>"
                                class="form-control">
                            <?= form_error('jabatan', '<small class="text-danger ">', '</small>'); ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Gambar Sebelumnya</label>
                                    <br>
                                    <img src="<?= base_url('upload/pimpinan/'. $pimpinan['foto']) ?>" width="100" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Upload Foto</label>
                                    <input name="foto" id="foto" type="file" value="<?= set_value('foto') ?>"
                                        class="form-control">
                                    <?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
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