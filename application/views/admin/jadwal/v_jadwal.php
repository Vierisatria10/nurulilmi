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
                    <h3 class="card-title">Jadwal Shalat</h3>
                    <?= $this->session->flashdata('message') ?>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-green btn-sm" data-toggle="modal" data-target="#add_jadwal">
                            <i class="fas fa-plus"></i> Tambah Jadwal
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="tbl_jadwal" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Imsak</th>
                                <th>Subuh</th>
                                <th>Dzuhur</th>
                                <th>Ashar</th>
                                <th>Maghrib</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_jadwal as $jadwal) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td>
                                    <?= $jadwal->waktu_imsak ?>
                                </td>
                                <td><?= $jadwal->waktu_subuh ?></td>
                                <td><?= $jadwal->waktu_dzuhur ?></td>
                                <td><?= $jadwal->waktu_ashar ?></td>
                                <td><?= $jadwal->waktu_maghrib ?></td>
                                <td>
                                    <a href="<?= base_url('admin/jadwal/edit/'). $jadwal->id_jadwal ?>"
                                        class="btn btn-warning btn-sm" title="Ubah"><i class="fas fa-fw fa-edit"></i>
                                    </a>
                                    <?php if($jadwal->status == 1) : ?>
                                        <a href="<?= base_url('admin/jadwal/change_status/'. $jadwal->id_jadwal . '/0') ?>"
                                            class="btn btn-danger btn-sm mt-1" title="Nonaktif">Nonaktif
                                        </a>
                                    <?php else: ?>
                                        <a href="<?= base_url('admin/jadwal/change_status/'. $jadwal->id_jadwal . '/1') ?>"
                                            class="btn btn-success btn-sm mt-1" title="Aktifkan">Aktifkan
                                        </a>
                                    <?php endif; ?>
                                    <a href="<?= base_url('admin/jadwal/detail/'). $jadwal->id_jadwal ?>"
                                        class="btn btn-primary btn-sm mt-1" title="Detail"><i
                                            class="fas fa-fw fa-eye"></i>
                                    </a>
                                    <a href="" data-toggle="modal" data-target="#hapus_jadwal<?= $jadwal->id_jadwal ?>"
                                        class="btn-delete mt-1 btn btn-danger btn-sm" title="Hapus"
                                        ><i class="fas fa-fw fa-trash"></i>
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
<!-- Modal Add -->
<!-- Modal -->
<div class="modal fade" id="add_jadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Jadwal Shalat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/jadwal/simpan') ?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Dzuhur</label>
                        <input type="time" class="form-control" name="waktu_dzuhur">
                    </div>                        
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Ashar</label>
                        <input type="time" class="form-control" name="waktu_ashar">
                    </div>                        
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Maghrib</label>
                        <input type="time" class="form-control" name="waktu_maghrib">
                    </div>                        
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Isya</label>
                        <input type="time" class="form-control" name="waktu_isya">
                    </div>                        
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Subuh</label>
                        <input type="time" class="form-control" name="waktu_subuh">
                    </div>                        
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Imsak</label>
                        <input type="time" class="form-control" name="waktu_imsak">
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


<!-- Modal Delete -->
<?php foreach($data_jadwal as $jadwal) : ?>
<div class="modal fade" id="hapus_jadwal<?= $jadwal->id_jadwal ?>" tabindex="-1" role="dialog"
    aria-labelledby="hapus_jadwal<?= $jadwal->id_jadwal ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapus_jadwal<?= $jadwal->id_jadwal ?>">Apakah kamu ingin menghapus
                    data ini?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/jadwal/delete/'.$jadwal->id_jadwal) ?>" method="POST"
                    enctype="multipart/form-data">
                    <input type="hidden" id="id_jadwal" name="id_jadwal" value="<?= $jadwal->id_jadwal ?>">
                    <p class="text-danger">Menghapus Data Jadwal Shalat :
                        <b><?= $jadwal->judul; ?></b>
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