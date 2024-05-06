<!-- Content Header (Page header) -->
<style>
.btn-green {
    background-color: #0F7571;
    color: #fff;
}

.btn-green:hover {
    background-color: #0F7571;
    color: #fff;
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
                    <h3 class="card-title">Data Keamanan & Ketertiban</h3>
                    <?= $this->session->flashdata('message') ?>
                    <div class="d-flex justify-content-end">
                        <a href="#" data-toggle="modal" data-target="#addKartib" class="btn btn-green btn-sm"><i
                                class="fas fa-plus"></i> Tambah Keamanan & Ketertiban</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="pimpinan" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Alamat</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_kartib as $kartib) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $kartib->nama ?></td>
                                <td><?= $kartib->jabatan ?></td>
                                <td><?= $kartib->alamat ?></td>
                                <td>
                                    <?php if(!empty($kartib->foto)) : ?>
                                    <a href="<?= base_url('upload/bidang/' . $kartib->foto) ?>" target="_blank">
                                        <img src="<?= base_url('upload/bidang/' . $kartib->foto) ?>" width="100"
                                            alt="">
                                    </a>
                                    <?php else: ?>
                                    <img src="<?= base_url('upload/default.png') ?>" width="100" alt="">
                                    <?php endif; ?>

                                </td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#edit_kartib<?= $kartib->id_kartib ?>"
                                        class="m-1 btn btn-info btn-sm"><i class="fas fa-fw fa-edit"></i>
                                        Ubah</a>
                                    <a href="" data-toggle="modal"
                                        data-target="#hapus_kartib<?= $kartib->id_kartib ?>"
                                        class="btn-delete m-1 btn btn-danger btn-sm"
                                        data-text="<?= $kartib->nama; ?>"><i class="fas fa-fw fa-trash"></i>
                                        Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>

<!-- modal add -->
<div class="modal fade" id="addKartib" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Keamanan & Ketertiban
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/kartib/simpan_data') ?>" method="POST"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" id="jabatan">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat">
                    </div>
                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="file" class="form-control" name="foto" id="foto">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-green"><i class="fas fa-save"></i> Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- modal edit -->
<?php foreach($data_kartib as $kartib) : ?>
<div class="modal fade" id="edit_kartib<?= $kartib->id_kartib ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit kartib & Kerumahtanggaan
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/kartib/update_data/'.$kartib->id_kartib) ?>" method="POST"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="hidden" name="id_kartib" value="<?= $kartib->id_kartib ?>">
                        <input type="text" class="form-control" value="<?= $kartib->nama ?>" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input type="text" class="form-control"value="<?= $kartib->jabatan ?>" name="jabatan" id="jabatan">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" value="<?= $kartib->alamat ?>" name="alamat" id="alamat">
                    </div>
                    <div class="form-group">
                        <label for="">Foto Sebelumnya</label>
                        <img src="<?= base_url('upload/bidang/'.$kartib->foto) ?>" width="30%" alt="<?= $kartib->nama ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="hidden" name="old_foto" value="<?= $kartib->foto ?>">
                        <input type="file" class="form-control" name="foto" id="foto">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-green"><i class="fas fa-save"></i> Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- Modal Delete -->
<?php foreach($data_kartib as $kartib) : ?>
<div class="modal fade" id="hapus_kartib<?= $kartib->id_kartib ?>" tabindex="-1" role="dialog"
    aria-labelledby="hapus_kartib<?= $kartib->id_kartib ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapus_kartib<?= $kartib->id_kartib ?>">Apakah kamu ingin menghapus
                    data ini?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/kartib/delete/'.$kartib->id_kartib) ?>" method="POST"
                    enctype="multipart/form-data">
                    <input type="hidden" id="id_kartib" name="id_kartib" value="<?= $kartib->id_kartib ?>">
                    <p class="text-danger">Menghapus Data Keamanan & Ketertiban yang bernama :
                        <b><?= $kartib->nama; ?></b>
                    </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>