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
                    <h3 class="card-title">Add Sejarah</h3>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/sejarah') ?>" class="btn btn-info btn-sm"><i
                                class="fas fa-backward"></i> Kembali</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="<?= base_url('admin/sejarah/update/'.$sejarah->id_sejarah) ?>" method="POST"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="hidden" name="user" id="user"
                                        value="<?= $this->session->userdata('nama') ?>">
                                    <input type="text" name="judul" id="judul" value="<?= $sejarah->judul ?>"
                                        class="form-control">
                                    <?= form_error('judul', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Gambar Sebelumnya</label>
                                    <br>
                                    <?php if(!empty($sejarah->gambar)) : ?>
                                    <img src="<?= base_url('upload/sejarah/'. $sejarah->gambar) ?>" width="100" alt="">
                                    <?php else: ?>
                                    <img src="<?= base_url('upload/default.png') ?>" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Upload Foto</label>
                                    <input type="hidden" name="old_gambar" value="<?= $sejarah->gambar ?>">
                                    <input name="gambar" id="gambar" type="file" value="<?= set_value('gambar') ?>"
                                        class="form-control">
                                    <?= form_error('gambar', '<small class="text-danger">', '</small>'); ?>
                                    <small class="text-danger">*Catatan : File Foto wajib berekstensi
                                        jpg,jpeg,png,JPG,JPEG!!</small>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <textarea name="deskripsi" id="editor" type="text" class="form-control">
                                        <?= $sejarah->deskripsi; ?>
                                    </textarea>
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