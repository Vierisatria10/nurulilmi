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
                    <h3 class="card-title">Data Masukan</h3>
                    <?= $this->session->flashdata('message') ?>
                    <div class="d-flex justify-content-end">

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="imam" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No Hp</th>
                                <th>Subject</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_kontak as $kontak) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $kontak->nama ?></td>
                                <td><?= $kontak->no_hp ?></td>
                                <td>
                                    <?= $kontak->subject ?>
                                </td>
                                <td><?= $kontak->pesan; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/kontak/kirim_wa') ?>"
                                        class="m-1 btn btn-green btn-sm"><i class="fas fa-fw fa-envelope"></i>
                                        Kirim Wa</a>
                                    <a href="" data-toggle="modal" data-target="#hapus_kontak<?= $kontak->id ?>"
                                        class="btn-delete m-1 btn btn-danger btn-sm"
                                        data-text="<?= $kontak->nama; ?>"><i class="fas fa-fw fa-trash"></i>
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
<?php foreach($data_kontak as $kontak) : ?>
<div class="modal fade" id="hapus_kontak<?= $kontak->id ?>" tabindex="-1" role="dialog"
    aria-labelledby="hapus_kontak<?= $kontak->id ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapus_kontak<?= $kontak->id ?>">Apakah kamu ingin menghapus
                    data ini?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/kontak/delete/'.$kontak->id) ?>" method="POST"
                    enctype="multipart/form-data">
                    <input type="hidden" id="id_del" name="id_del" value="<?= $kontak->id ?>">
                    <p class="text-danger">Menghapus Data Kontak Masukan yang bernama :
                        <b><?= $kontak->nama; ?></b>
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