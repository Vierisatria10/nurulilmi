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
                    <form action="<?= base_url('admin/setting/update/' . $setting->id_setting) ?>" method="POST"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Masjid</label>
                                    <input type="hidden" name="id_setting" value="<?= $setting->id_setting ?>">
                                    <input type="text" name="nama_masjid" id="nama_masjid"
                                        value="<?= $setting->nama_masjid ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">No Hp</label>
                                    <input type="text" name="no_hp" id="no_hp" value="<?= $setting->no_hp ?>"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php if(!empty($setting->logo)) : ?>
                                    <img src="<?= base_url('upload/setting/'. $setting->logo) ?>" width="100" alt="">
                                    <?php else: ?>
                                    <img src="<?= base_url('upload/default.png') ?>" alt="">
                                    <?php endif; ?>
                                    <label for="">Logo</label>
                                    <input type="hidden" name="old_logo" value="<?= $setting->logo ?>">
                                    <input type="file" name="logo" id="logo" class="form-control">
                                    <small class="text-danger">*Tidak Wajib Diisi</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php if(!empty($setting->banner1)) : ?>
                                    <img src="<?= base_url('upload/setting/'. $setting->banner1) ?>" width="100" alt="">
                                    <?php else: ?>
                                    <img src="<?= base_url('upload/default.png') ?>" alt="">
                                    <?php endif; ?>
                                    <label for="">Upload Banner 1</label>
                                    <input type="hidden" name="old_banner1" value="<?= $setting->banner1 ?>">
                                    <input name="banner1" id="banner1" type="file" value="<?= $setting->banner1 ?>"
                                        class="form-control">
                                    <small class="text-danger">*File Upload wajib jpg,jpeg,png,JPEG,JPG !!</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php if(!empty($setting->banner2)) : ?>
                                    <img src="<?= base_url('upload/setting/'. $setting->banner2) ?>" width="100" alt="">
                                    <?php else: ?>
                                    <img src="<?= base_url('upload/default.png') ?>" alt="">
                                    <?php endif; ?>
                                    <label for="">Upload Banner 2</label>
                                    <input type="hidden" name="old_banner2" value="<?= $setting->banner2 ?>">
                                    <input name="banner2" id="banner2" type="file" value="<?= $setting->banner2 ?>"
                                        class="form-control">
                                    <small class="text-danger">*File Upload wajib jpg,jpeg,png,JPEG,JPG !!</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php if(!empty($setting->banner3)) : ?>
                                    <img src="<?= base_url('upload/setting/'. $setting->banner3) ?>" width="100" alt="">
                                    <?php else: ?>
                                    <img src="<?= base_url('upload/default.png') ?>" alt="">
                                    <?php endif; ?>
                                    <label for="">Upload Banner 3</label>
                                    <input type="hidden" name="old_banner3" value="<?= $setting->banner3 ?>">
                                    <input name="banner3" id="banner3" type="file" value="<?= $setting->banner3 ?>"
                                        class="form-control">
                                    <small class="text-danger">*File Upload wajib jpg,jpeg,png,JPEG,JPG !!</small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Judul 1</label>
                                    <input name="judul1" id="judul1" type="text" value="<?= $setting->judul1 ?>"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Judul 2</label>
                                    <input name="judul2" id="judul2" type="text" value="<?= $setting->judul2 ?>"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Judul 3</label>
                                    <input name="judul3" id="judul3" type="text" value="<?= $setting->judul3 ?>"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Sosmed 1</label>
                                    <input name="sosmed1" id="sosmed1" type="text" value="<?= $setting->sosmed1 ?>"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Sosmed 2</label>
                                    <input name="sosmed2" id="sosmed2" type="text" value="<?= $setting->sosmed2 ?>"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Sosmed 3</label>
                                    <input name="sosmed3" id="sosmed3" type="text" value="<?= $setting->sosmed3 ?>"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" id="editor" class="form-control" cols="30">
                                        <?= $setting->alamat ?>
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