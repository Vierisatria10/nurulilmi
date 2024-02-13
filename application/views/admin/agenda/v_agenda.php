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
                    <h3 class="card-title">Data Agenda</h3>
                    <?= $this->session->flashdata('message') ?>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/agenda/tambah') ?>" class="btn btn-green btn-sm"><i
                                class="fas fa-plus"></i> Tambah Agenda</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="imam" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Jam Awal</th>
                                <th>Jam Akhir</th>
                                <th>Lokasi</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Pembuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_agenda as $agenda) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $agenda->judul ?></td>
                                <td><?= $agenda->jam_awal ?></td>
                                <td><?= $agenda->jam_akhir ?></td>
                                <td><?= $agenda->lokasi ?></td>
                                <td><?= strip_tags(character_limiter($agenda->deskripsi, 100)) ?></td>
                                <td>
                                    <?php if(!empty($agenda->gambar)) : ?>
                                        <a href="<?= base_url('upload/agenda/' . $agenda->gambar) ?>" target="_blank">
                                            <img src="<?= base_url('upload/agenda/' . $agenda->gambar) ?>" width="100"
                                            alt="">
                                        </a>
                                    <?php else: ?>
                                        <img src="<?= base_url('upload/default.png') ?>" width="100" alt="">
                                    <?php endif; ?>
                                </td>
                                <td><?= $agenda->user; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/agenda/edit/'). $agenda->id_agenda ?>"
                                        class="m-1 btn btn-info btn-sm"><i class="fas fa-fw fa-edit"></i>
                                        Ubah</a>
                                    <a href="" data-toggle="modal" data-target="#hapus_agenda<?= $agenda->id_agenda ?>"
                                        class="btn-delete m-1 btn btn-danger btn-sm"
                                        data-text="<?= $agenda->user; ?>"><i class="fas fa-fw fa-trash"></i>
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
<?php foreach($data_agenda as $agenda) : ?>
<div class="modal fade" id="hapus_agenda<?= $agenda->id_agenda ?>" tabindex="-1" role="dialog"
    aria-labelledby="hapus_agenda<?= $agenda->id_agenda ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapus_agenda<?= $agenda->id_agenda ?>">Apakah kamu ingin menghapus
                    data ini?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/agenda/delete/'.$agenda->id_agenda) ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="id_agenda" name="id_agenda" value="<?= $agenda->id_agenda ?>">
                    <p class="text-danger">Menghapus Data Agenda dengan judul :
                        <b><?= $agenda->judul; ?></b>
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