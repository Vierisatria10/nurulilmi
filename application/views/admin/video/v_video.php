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
                    <h3 class="card-title">Data Video</h3>
                    <?= $this->session->flashdata('message') ?>
                    <div class="d-flex justify-content-end">
                        <a href="" data-toggle="modal" data-target="#add_video" class="btn btn-green btn-sm"><i
                                class="fas fa-plus"></i> Tambah Video</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="kat_video" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Video</th>
                                <th>Nama Kategori</th>
                                <th>Link Video</th>
                                <th>Tanggal Update</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_video as $video) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $video->judul ?></td>
                                <td><?= $video->nama_video ?></td>
                                <td><?= $video->link ?></td>
                                <td><?= $video->tanggal ?></td>
                                <td>
                                    <a href="" data-toggle="modal" data-target="#edit_video<?= $video->id_video ?>"
                                        class="m-1 btn btn-info btn-sm"><i class="fas fa-fw fa-edit"></i>
                                        Ubah</a>
                                    <a href="" data-toggle="modal" data-target="#hapus_video<?= $video->id_video ?>"
                                        class="btn-delete m-1 btn btn-danger btn-sm"
                                        data-text="<?= $video->nama_video; ?>"><i class="fas fa-fw fa-trash"></i>
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
<div class="modal fade" id="add_video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/video/tambah_video') ?>" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Judul Video</label>
                                <input type="text" class="form-control" name="judul">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <select name="id_kat_video" class="form-control" id="id_kat_video">
                                    <option value="">Pilih Kategori</option>
                                    <?php foreach($data_kategori as $kategori) : ?>
                                    <option value="<?= $kategori->id_kat_video ?>"><?= $kategori->nama_video ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Link Video</label>
                                <input type="text" class="form-control" placeholder="http//youtube.com/" name="link"
                                    id="link">
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