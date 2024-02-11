<!-- Content Header (Page header) -->
<style>
.btn-green {
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
                    <h3 class="card-title">Data Visi Misi</h3>
                    <?= $this->session->flashdata('message') ?>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/visimisi/tambah') ?>" class="btn btn-green btn-sm"><i
                                class="fas fa-plus"></i> Tambah Visi</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="visi_misi" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th>Tanggal Update</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_visi as $vm) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $vm['visi'] ?></td>
                                <td><?= $vm['misi'] ?></td>
                                <td><?= $vm['tanggal'] ?></td>
                                <td>
                                    <a href="<?= base_url('admin/visimisi/edit/?='). $vm['id_visi'] ?>"
                                        class="m-1 badge badge-success"><i class="fas fa-fw fa-edit"></i>
                                        Ubah</a>
                                    <a href="" data-toggle="modal" data-target="#hapus_visi<?= $vm['id_visi'] ?>"
                                        class="btn-delete m-1 badge badge-danger" data-text="<?= $vm['visi']; ?>"><i
                                            class="fas fa-fw fa-trash"></i>
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
<?php foreach($data_visi as $vm) : ?>
<div class="modal fade" id="hapus_visi<?= $vm['id_visi'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="hapus_visi<?= $vm['id_visi'] ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapus_visi<?= $vm['id_visi'] ?>">Apakah kamu ingin menghapus data ini?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/visimisi/delete') ?>" method="POST">
                    <input type="hidden" id="id_del" name="id_del" value="<?= $vm['id_visi'] ?>">
                    <p class="text-danger">Menghapus Data Visi Misi yang dibuat pada tanggal :
                        <b><?= $vm['tanggal']; ?></b>
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