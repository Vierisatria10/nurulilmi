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
                    <h3 class="card-title">Data Sejarah</h3>
                    <?= $this->session->flashdata('message') ?>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url('admin/sejarah/tambah') ?>" class="btn btn-green btn-sm"><i
                                class="fas fa-plus"></i> Tambah Sejarah</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="imam" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <!-- <th>Pembuat</th> -->
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_sejarah as $sejarah) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td>
                                    <a href="<?= base_url('sejarah') ?>"><?= $sejarah->judul ?></a>
                                </td>
                                <td><?= strip_tags(character_limiter($sejarah->deskripsi, 100)) ?></td>
                                <td>
                                    <?php if(!empty($sejarah->gambar)) : ?>
                                    <a href=" <?= base_url('upload/sejarah/' . $sejarah->gambar) ?>" target="_blank">
                                        <img src="<?= base_url('upload/sejarah/' . $sejarah->gambar) ?>" width="100"
                                            alt="">
                                    </a>
                                    <?php else: ?>
                                    <img src="<?= base_url('upload/default.png') ?>" width="100" alt="">
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/sejarah/edit/'). $sejarah->id_sejarah ?>"
                                        class="btn btn-warning btn-sm" title="Ubah"><i class="fas fa-fw fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('admin/sejarah/detail/'). $sejarah->id_sejarah ?>"
                                        class="btn btn-primary btn-sm mt-1" title="Detail"><i
                                            class="fas fa-fw fa-eye"></i>
                                    </a>
                                    <a href="" data-toggle="modal"
                                        data-target="#hapus_sejarah<?= $sejarah->id_sejarah ?>"
                                        class="btn-delete mt-1 btn btn-danger btn-sm" title="Hapus"
                                        data-text="<?= $sejarah->judul; ?>"><i class="fas fa-fw fa-trash"></i>
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