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
                    <h3 class="card-title">Data Ibadah dan Dakwah</h3>
                    <?= $this->session->flashdata('message') ?>
                    <div class="d-flex justify-content-end">
                        <a href="#" data-toggle="modal" data-target="#addDakwah" class="btn btn-green btn-sm"><i
                                class="fas fa-plus"></i> Tambah Ibadah Dakwah</a>
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
                            <?php foreach ($data_dakwah as $dakwah) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $dakwah->nama ?></td>
                                <td><?= $dakwah->jabatan ?></td>
                                <td><?= $dakwah->alamat ?></td>
                                <td>
                                    <?php if(!empty($dakwah->foto)) : ?>
                                    <a href="<?= base_url('upload/bidang/' . $dakwah->foto) ?>" target="_blank">
                                        <img src="<?= base_url('upload/bidang/' . $dakwah->foto) ?>" width="100"
                                            alt="">
                                    </a>
                                    <?php else: ?>
                                    <img src="<?= base_url('upload/default.png') ?>" width="100" alt="">
                                    <?php endif; ?>

                                </td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#edit_dakwah<?= $dakwah->id_dakwah ?>"
                                        class="m-1 btn btn-info btn-sm"><i class="fas fa-fw fa-edit"></i>
                                        Ubah</a>
                                    <a href="" data-toggle="modal"
                                        data-target="#hapus_dakwah<?= $dakwah->id_dakwah ?>"
                                        class="btn-delete m-1 btn btn-danger btn-sm"
                                        data-text="<?= $dakwah->nama; ?>"><i class="fas fa-fw fa-trash"></i>
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
<div class="modal fade" id="addDakwah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Ibadah & Dakwah
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/ibadahdakwah/simpan_data') ?>" method="POST"
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
<?php foreach($data_dakwah as $dakwah) : ?>
<div class="modal fade" id="edit_dakwah<?= $dakwah->id_dakwah ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Ibadah & Dakwah
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/ibadahdakwah/update_data/'.$dakwah->id_dakwah) ?>" method="POST"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="hidden" name="id_dakwah" value="<?= $dakwah->id_dakwah ?>">
                        <input type="text" class="form-control" value="<?= $dakwah->nama ?>" name="nama" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input type="text" class="form-control"value="<?= $dakwah->jabatan ?>" name="jabatan" id="jabatan">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" value="<?= $dakwah->alamat ?>" name="alamat" id="alamat">
                    </div>
                    <div class="form-group">
                        <label for="">Foto Sebelumnya</label>
                        <img src="<?= base_url('upload/bidang/'.$dakwah->foto) ?>" width="30%" alt="<?= $dakwah->nama ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Foto</label>
                        <input type="hidden" name="old_foto" value="<?= $dakwah->foto ?>">
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
<?php foreach($data_dakwah as $dakwah) : ?>
<div class="modal fade" id="hapus_dakwah<?= $dakwah->id_dakwah ?>" tabindex="-1" role="dialog"
    aria-labelledby="hapus_dakwah<?= $dakwah->id_dakwah ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapus_dakwah<?= $dakwah->id_dakwah ?>">Apakah kamu ingin menghapus
                    data ini?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/ibadahdakwah/delete/'.$dakwah->id_dakwah) ?>" method="POST"
                    enctype="multipart/form-data">
                    <input type="hidden" id="id_dakwah" name="id_dakwah" value="<?= $dakwah->id_dakwah ?>">
                    <p class="text-danger">Menghapus Data Ibadah & Dakwah yang bernama :
                        <b><?= $dakwah->nama; ?></b>
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