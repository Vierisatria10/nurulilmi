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
                    <h3 class="card-title">Data User</h3>
                    <?= $this->session->flashdata('message') ?>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/user/tambah') ?>" class="btn btn-green btn-sm"><i
                                class="fas fa-plus"></i> Tambah User</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="tbl_user" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>No Hp</th>
                                <th>Level</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_user as $user) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $user->nama ?></td>
                                <td><?= $user->username ?></td>
                                <td><?= $user->no_hp ?></td>
                                <td>
                                    <?php if($user->level == 'Administrator') : ?>
                                        <span class="badge badge-success">Administrator</span>
                                    <?php else: ?>
                                        <span class="badge badge-info">Pengurus</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if(!empty($user->foto)) : ?>
                                        <a href=" <?= base_url('upload/user/' . $user->foto) ?>" target="_blank">
                                            <img src="<?= base_url('upload/user/' . $user->foto) ?>" width="100"
                                                alt="">
                                        </a>
                                    <?php else: ?>
                                        <img src="<?= base_url('upload/default.png') ?>" width="100" alt="">
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/user/edit/'). $user->id_user ?>"
                                        class="m-1 btn btn-info btn-sm"><i class="fas fa-fw fa-edit"></i>
                                        Ubah</a>
                                    <a href="" data-toggle="modal" data-target="#hapus_user<?= $user->id_user ?>"
                                        class="btn-delete m-1 btn btn-danger btn-sm" data-text="<?= $user->nama; ?>"><i
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
<?php foreach($data_user as $user) : ?>
<div class="modal fade" id="hapus_user<?= $user->id_user ?>" tabindex="-1" role="dialog"
    aria-labelledby="hapus_user<?= $user->id_user ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapus_user<?= $user->id_user ?>">Apakah kamu ingin menghapus data ini?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/user/delete') ?>" method="POST">
                    <input type="hidden" id="id_del" name="id_del" value="<?= $user->id_user ?>">
                    <p class="text-danger">Menghapus Data User dengan Nama :
                        <b><?= $user->nama; ?></b>
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