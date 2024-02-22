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
                    <h3 class="card-title">Data Kategori</h3>
                    <?= $this->session->flashdata('message') ?>
                    <div class="d-flex justify-content-end">
                        <a href="" data-toggle="modal" data-target="#add_kategori" class="btn btn-green btn-sm"><i
                                class="fas fa-plus"></i> Tambah Kategori</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="kat_video" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Slug</th>
                                <th>Tanggal Update</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_kategori as $kategori) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $kategori->nama_video ?></td>
                                <td><?= $kategori->slug ?></td>
                                <td><?= $kategori->tanggal ?></td>
                                <td>
                                    <a href="" data-toggle="modal"
                                        data-target="#edit_kategori<?= $kategori->id_kat_video ?>"
                                        class="m-1 btn btn-info btn-sm"><i class="fas fa-fw fa-edit"></i>
                                        Ubah</a>
                                    <a href="" data-toggle="modal"
                                        data-target="#hapus_kategori<?= $kategori->id_kat_video ?>"
                                        class="btn-delete m-1 btn btn-danger btn-sm"
                                        data-text="<?= $kategori->nama_video; ?>"><i class="fas fa-fw fa-trash"></i>
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

<!-- Modal add -->
<div class="modal fade" id="add_kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kategori Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/video/tambah_kategori') ?>" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama Video</label>
                                <input type="text" class="form-control" name="nama_video">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" name="slug">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-green">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal edit -->
<?php foreach($data_kategori as $kategori) : ?>
<div class="modal fade" id="edit_kategori<?= $kategori->id_kat_video ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kategori Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/video/edit_kategori/'.$kategori->id_kat_video) ?>" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama Video</label>
                                <input type="hidden" name="id_kat_video" value="<?= $kategori->id_kat_video ?>"
                                    class="form-control">
                                <input type="text" class="form-control" value="<?= $kategori->nama_video ?>"
                                    name="nama_video">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" value="<?= $kategori->slug ?>" name="slug">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-green">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- Modal delete -->
<?php foreach($data_kategori as $kategori) : ?>
<div class="modal fade" id="hapus_kategori<?= $kategori->id_kat_video ?>" tabindex="-1" role="dialog"
    aria-labelledby="hapus_kategori<?= $kategori->id_kat_video ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapus_kategori<?= $kategori->id_kat_video ?>">Hapus Data Kategori Video
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/video/delete_kategori/'.$kategori->id_kat_video) ?>" method="POST">
                    <input type="hidden" id="id_del" name="id_del" value="<?= $kategori->id_kat_video ?>">
                    <p class="text-danger">Apakah anda ingin Menghapus Data Kategori Video
                        <b><?= $kategori->nama_video; ?></b> ini ?
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