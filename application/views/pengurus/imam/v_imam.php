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
                    <h3 class="card-title">Data Imam & Muadzin</h3>
                    <?= $this->session->flashdata('message') ?>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('pengurus/imam/tambah') ?>" class="btn btn-green btn-sm"><i
                                class="fas fa-plus"></i> Tambah Imam</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="imam" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Foto</th>
                                <th>Tanggal Update</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_imam as $imam) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $imam->nama ?></td>
                                <td><?= $imam->jabatan ?></td>
                                <td>
                                    <?php if(!empty($imam->foto)) : ?>
                                        <a href="<?= base_url('upload/imam/' . $imam->foto) ?>" target="_blank">
                                            <img src="<?= base_url('upload/imam/' . $imam->foto) ?>" width="100"
                                            alt="">
                                        </a>
                                    <?php else: ?>
                                        <img src="<?= base_url('upload/default.png') ?>" width="100" alt="">
                                    <?php endif; ?>
                                </td>
                                <td><?= $imam->tanggal; ?></td>
                                <td>
                                    <a href="<?= base_url('pengurus/imam/edit/'). $imam->id_imam ?>"
                                        class="m-1 btn btn-info btn-sm"><i class="fas fa-fw fa-edit"></i>
                                        Ubah</a>
                                    <a href="" data-toggle="modal" data-target="#hapus_imam<?= $imam->id_imam ?>"
                                        class="btn-delete m-1 btn btn-danger btn-sm"
                                        data-text="<?= $imam->nama; ?>"><i class="fas fa-fw fa-trash"></i>
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

<!-- Modal Delete -->
<?php foreach($data_imam as $imam) : ?>
<div class="modal fade" id="hapus_imam<?= $imam->id_imam ?>" tabindex="-1" role="dialog"
    aria-labelledby="hapus_imam<?= $imam->id_imam ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapus_imam<?= $imam->id_imam ?>">Apakah kamu ingin menghapus
                    data ini?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('pengurus/imam/delete/'.$imam->id_imam) ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="id_imam" name="id_imam" value="<?= $imam->id_imam ?>">
                    <p class="text-danger">Menghapus Data Imam & Muadzin yang bernama :
                        <b><?= $imam->nama; ?></b>
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

<!-- /.content -->