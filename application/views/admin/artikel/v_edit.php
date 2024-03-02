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
                    <h3 class="card-title">Add Artikel</h3>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/artikel') ?>" class="btn btn-info btn-sm"><i
                                class="fas fa-backward"></i> Kembali</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="<?= base_url('admin/artikel/update_artikel/'.$artikel->id_artikel) ?>" method="POST"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Judul Artikel</label>
                                    <input type="hidden" name="id_artikel" value="<?= $artikel->id_artikel ?>">
                                    <input type="text" name="judul" id="judul" value="<?= $artikel->judul ?>"
                                        class="form-control">
                                    <?= form_error('Judul', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kategori</label>
                                    <select name="id_kategori" id="id_kategori" class="form-control">
                                        <option value="">Pilih Kategori</option>
                                        <?php foreach($data_kategori as $kategori) : ?>
                                        <option value="<?= $kategori->id_kategori ?>"
                                            <?= ($kategori->id_kategori == $artikel->id_kategori) ? 'selected' : '' ?>>
                                            <?= $kategori->nama_kategori ?></option>

                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('Nama Kategori', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Gambar Sebelumnya</label>
                                    <br>
                                    <?php if(!empty($artikel->gambar)) : ?>
                                    <img src="<?= base_url('upload/artikel/'. $artikel->gambar) ?>" width="100" alt="">
                                    <?php else: ?>
                                    <img src="<?= base_url('upload/default.png') ?>" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Upload Gambar</label>
                                    <input type="hidden" name="old_gambar" value="<?= $artikel->gambar ?>">
                                    <input name="gambar" id="gambar" type="file" value="<?= set_value('gambar') ?>"
                                        class="form-control">
                                    <?= form_error('gambar', '<small class="text-danger">', '</small>'); ?>
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Slug</label>
                                    <input type="text" name="slug" id="slug" value="<?= $artikel->slug ?>"
                                        class="form-control">
                                    <?= form_error('slug', '<small class="text-danger ">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal Dibuat</label>
                                    <input type="date" class="form-control" value="<?= $artikel->tanggal_dibuat ?>"
                                        name="tanggal_dibuat">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <textarea name="deskripsi" id="editor" type="text" class="form-control">
                                        <?= $artikel->deskripsi ?>
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