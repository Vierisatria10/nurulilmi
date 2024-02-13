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
                    <h3 class="card-title">Edit Imam & Muadzin</h3>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/imam') ?>" class="btn btn-info btn-sm"><i
                                class="fas fa-backward"></i> Kembali</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="<?= base_url('admin/imam/update/' . $imam->id_imam) ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="hidden" name="id_imam" value="<?= $imam->id_imam ?>">
                                    <input type="text" name="nama" id="nama" value="<?= $imam->nama ?>"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Link Facebook</label>
                                    <input type="text" name="link1" id="link1" placeholder="https://facebook.com"
                                    value="<?= $imam->link1 ?>" class="form-control">
                                    <small class="text-danger">*Tidak Wajib Diisi</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jabatan</label>
                                    <input name="jabatan" type="text" id="jabatan" value="<?= $imam->jabatan ?>"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Link Twitter</label>
                                    <input type="text" name="link2" id="link2" placeholder="https://twitter.com"
                                    value="<?= $imam->link2 ?>" class="form-control">
                                    <small class="text-danger">*Tidak Wajib Diisi</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Gambar Sebelumnya</label>
                                    <br>
                                    <?php if(!empty($imam->foto)) : ?>
                                        <img src="<?= base_url('upload/imam/'. $imam->foto) ?>" width="100" alt="">
                                    <?php else: ?>
                                        <img src="<?= base_url('upload/default.png') ?>" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Upload Foto</label>
                                    <input type="hidden" name="old_foto" value="<?= $imam->foto ?>">
                                    <input name="foto" id="foto" type="file" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Link Instagram</label>
                                    <input name="link3" id="link3" type="text" placeholder="https://instagram.com"
                                    value="<?= $imam->link3 ?>" class="form-control">
                                    <small class="text-danger">*Tidak Wajib Diisi</small>
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