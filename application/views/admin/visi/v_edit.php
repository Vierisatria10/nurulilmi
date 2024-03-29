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
                    <h3 class="card-title">Edit Visi Misi</h3>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/visimisi') ?>" class="btn btn-info btn-sm"><i
                                class="fas fa-backward"></i> Kembali</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="<?= base_url('admin/visimisi/update/' . $visi['id_visi']) ?>" method="post">
                        <div class="form-group">
                            <label for="">Visi</label>
                            <input type="hidden" name="id_visi" value="<?= $visi['id_visi'] ?>">
                            <input type="text" name="visi" id="visi" value="<?= $visi['visi'] ?>" class="form-control">
                            <?= form_error('visi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="">Misi</label>
                            <textarea name="misi" id="editor"
                                class="form-control editor_misi"><?= $visi['misi'] ?></textarea>
                            <?= form_error('misi', '<small class="text-danger pl-3">', '</small>'); ?>
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