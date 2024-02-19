<!-- Content Header (Page header) -->
<style>
.btn-green {
    background-color: #0F7571;
    color: #fff;
}

.editor_misi {
    min-height: 400px;
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
        <div class="row">
            <div class="col-md-7">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?= $agenda->judul ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <img src="<?= base_url('upload/agenda/'.$agenda->gambar) ?>" style="height: auto; width: 100%;"
                            alt="">
                        <br><br>
                        <h4 class="font-weight-bold">Deskripsi :</h4>
                        <p><?= $agenda->deskripsi; ?></p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Agenda</h3>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url('pengurus/agenda') ?>" class="btn btn-info btn-sm"><i
                                    class="fas fa-backward"></i> Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li style="list-style: none;"><span class="text-success"><i class="fas fa-user"></i></span>
                                <?= $agenda->user; ?></li>
                            <li style="list-style: none;" class="mt-2"><span class="me-2 text-success"><i
                                        class="fas fa-calendar-plus"></i></span>
                                <?= format_indo($agenda->tgl_awal); ?> <?= $agenda->jam_awal; ?> WIB
                            </li>
                            <li style="list-style: none;" class="mt-2"><span class="me-2 text-success"><i
                                        class="fas fa-clock"></i></span>
                                <?= format_indo($agenda->tgl_akhir); ?> <?= $agenda->jam_akhir; ?> WIB
                            </li>
                            <li style="list-style: none;" class="mt-2"><span class="me-2 text-success"><i
                                        class="fas fa-map-marker-alt"></i></span> <?= $agenda->lokasi; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>

<!-- /.content -->