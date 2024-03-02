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
                    <h3 class="card-title">Data Artikel</h3>
                    <?= $this->session->flashdata('message') ?>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/artikel/tambah_artikel') ?>" class="btn btn-green btn-sm"><i
                                class="fas fa-plus"></i> Tambah Artikel</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="kat_video" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_artikel as $artikel) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td>
                                    <a href="<?= base_url('blog') ?>"><?= $artikel->judul ?></a> - <?= $artikel->slug ?>
                                </td>
                                <td><?= $artikel->nama_kategori ?></td>
                                <td><?= strip_tags(character_limiter($artikel->deskripsi, 100)) ?></td>
                                <td>
                                    <?php if(!empty($artikel->gambar)) : ?>
                                    <a href="<?= base_url('upload/artikel/' . $artikel->gambar) ?>" target="_blank">
                                        <img src="<?= base_url('upload/artikel/' . $artikel->gambar) ?>" width="100"
                                            alt="">
                                    </a>
                                    <?php else: ?>
                                    <img src="<?= base_url('upload/default.png') ?>" width="100" alt="">
                                    <?php endif; ?>
                                </td>
                                <td><?= $artikel->tanggal_dibuat ?></td>
                                <td>
                                    <a href="<?= base_url('admin/artikel/edit_artikel/'.$artikel->id_artikel) ?>"
                                        class="m-1 btn btn-info btn-sm"><i class="fas fa-fw fa-edit"></i>
                                    </a>
                                    <?php if($artikel->status == 1) : ?>
                                    <a href="<?= base_url('admin/artikel/change_status/'. $artikel->id_artikel . '/0') ?>"
                                        class="btn btn-danger btn-sm mt-1" title="Nonaktif">Nonaktif
                                    </a>
                                    <?php else: ?>
                                    <a href="<?= base_url('admin/artikel/change_status/'. $artikel->id_artikel . '/1') ?>"
                                        class="btn btn-success btn-sm mt-1" title="Aktifkan">Aktifkan
                                    </a>
                                    <?php endif; ?>
                                    <a href="" data-toggle="modal"
                                        data-target="#hapus_artikel<?= $artikel->id_artikel ?>"
                                        class="btn-delete m-1 btn btn-danger btn-sm"
                                        data-text="<?= $artikel->judul; ?>"><i class="fas fa-fw fa-trash"></i>
                                    </a>
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

<!-- Modal delete -->
<?php foreach($data_artikel as $artikel) : ?>
<div class="modal fade" id="hapus_artikel<?= $artikel->id_artikel ?>" tabindex="-1" role="dialog"
    aria-labelledby="hapus_artikel<?= $artikel->id_artikel ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapus_artikel<?= $artikel->id_artikel ?>">Apakah kamu ingin menghapus
                    data ini?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/artikel/delete_artikel/'.$artikel->id_artikel) ?>" method="POST"
                    enctype="multipart/form-data">
                    <input type="hidden" id="id_artikel" name="id_artikel" value="<?= $artikel->id_artikel ?>">
                    <p class="text-danger">Menghapus Data Artikel dengan judul :
                        <b><?= $artikel->judul; ?></b>
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