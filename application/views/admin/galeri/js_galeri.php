<!-- add modal -->
<style>
.dropzone {
    margin-top: 30px;
    width: 100%;
    height: 100%;
    border: 2px dashed #0087F7;
}
</style>
<div class="modal fade" id="modal-galeri">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Foto Galeri</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- formnya disini -->
                <form id="inputform">

                    <div class="dropzone">
                        <div class="dz-message" style="width: 100%; height: 100%;">
                            <p class="text-center">Klik atau Drop gambar disini</p>
                        </div>
                    </div>
                    <!-- <div id="actions" class="row">
                                <div class="col-lg-6">
                                    <div class="btn-group w-100">
                                        <span class="btn btn-success col fileinput-button">
                                            <i class="fas fa-plus"></i>
                                            <span>Add files</span>
                                        </span>
                                        <button type="submit" class="btn btn-primary col start">
                                            <i class="fas fa-upload"></i>
                                            <span>Start upload</span>
                                        </button>
                                        <button type="reset" class="btn btn-warning col cancel">
                                            <i class="fas fa-times-circle"></i>
                                            <span>Cancel upload</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center">
                                    <div class="fileupload-process w-100">
                                        <div id="total-progress" class="progress progress-striped active"
                                            role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                            <div class="progress-bar progress-bar-success" style="width:0%;"
                                                data-dz-uploadprogress></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table table-striped files" id="previews">
                                <div id="template" class="row mt-2">

                                    <div class="col-auto">
                                        <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <p class="mb-0">
                                            <span class="lead" data-dz-name></span>
                                            (<span data-dz-size></span>)
                                        </p>
                                        <strong class="error text-danger" data-dz-errormessage></strong>
                                    </div>

                                    <div class="col-4 d-flex align-items-center">
                                        <div class="progress progress-striped active w-100" role="progressbar"
                                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                            <div class="progress-bar progress-bar-success" style="width:0%;"
                                                data-dz-uploadprogress></div>
                                        </div>
                                    </div>
                                    <div class="col-auto d-flex align-items-center">
                                        <div class="btn-group">
                                            <button id="saveImages" type="button" class="btn btn-primary start">
                                                <i class="fas fa-upload"></i>
                                                <span>Start</span>
                                            </button>
                                            <button data-dz-remove class="btn btn-warning cancel">
                                                <i class="fas fa-times-circle"></i>
                                                <span>Cancel</span>
                                            </button>
                                            <button data-dz-remove class="btn btn-danger delete">
                                                <i class="fas fa-trash"></i>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->


            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>

            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- modal edit -->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Judul</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- formnya disini -->
                <form id="editform">
                    <div class="card card-default">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input type="text" name="enama" id="enama" class="form-control select2">
                                        <input type="hidden" name="kodedit" id="kodedit" value="">

                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto Sebelumnya</label>
                                        <br>
                                        <img src="" id="modalImage" width="100" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Upload Foto</label>
                                        <input type="hidden" name="old_foto" id="old_foto" class="form-control">
                                        <input type="file" name="foto" id="foto" class="form-control">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col -->

                                <!-- /.col -->
                            </div>
                            <!-- /.row -->


                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Edit Judul Gambar Galeri
                        </div>
                    </div>


            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" id="ebtn-simpan">Simpan</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if ($this->session->flashdata('success')) : ?>
<script>
Swal.fire({
    title: "Berhasil!",
    text: "<?= $this->session->flashdata('success') ?>",
    icon: "success",
    showConfirmButton: true,
});
</script>
<?php endif; ?>
<script>
Dropzone.autoDiscover = false;

// DropzoneJS Demo Code Start
var foto_upload = new Dropzone(".dropzone", {
    url: "<?php echo base_url('admin/galeri/upload') ?>",
    // thumbnailWidth: 80,
    // thumbnailHeight: 80,
    // parallelUploads: 20,
    maxFilesize: 10,
    method: "post",
    acceptedFiles: "image/*",
    paramName: "userfile",
    dictInvalidFileType: "Type file ini tidak dizinkan",
    addRemoveLinks: true,
});

var uploadSuccessAlert = Swal.mixin({
    title: 'Berhasil!',
    text: 'Foto Berhasil di Upload',
    icon: 'success',
    showConfirmButton: true
});

//Event ketika Memulai mengupload
foto_upload.on("sending", function(a, b, c) {
    a.token = Math.random();
    uploadSuccessAlert.fire().then(function() {
        window.location.href = '<?= base_url("admin/galeri") ?>';
        $('#modal-galeri').modal('hide');
    });
    c.append("token_foto", a.token); //Menmpersiapkan token untuk masing masing foto
});

//Event ketika foto dihapus
foto_upload.on("removedfile", function(a) {
    var token = a.token;
    $.ajax({
        type: "post",
        data: {
            token: token
        },
        url: "<?php echo base_url('admin/galeri/remove_foto') ?>",
        cache: false,
        dataType: 'json',
        success: function() {
            Swal.fire({
                title: "Berhasil!",
                text: "Foto Berhasil di hapus",
                icon: "success",
                showConfirmButton: true,
            });
            console.log("Foto terhapus");
        },
        error: function() {
            Swal.fire({
                title: "Gagal!",
                text: "Foto Gagal di hapus",
                icon: "error",
                showConfirmButton: true,
            });
            console.log("Error");

        }
    });
});

$(document).ready(function() {
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    $('#datagaleri').on('click', '.bedit', function() {
        var id = $(this).attr('data');
        var base_url = "<?= base_url('upload/galeri/') ?>";
        $.ajax({
            type: "GET",
            url: "<?php echo base_url() ?>admin/galeri/showedit",
            dataType: "JSON",
            data: {
                id: id
            },
            success: function(data) {
                $.each(data, function(galeri_nama, galeri_foto) {
                    $('#modal-edit').modal('show');
                    $('[name="kodedit"]').val(id);
                    $('#modalImage').attr('src',
                        '<?= base_url('upload/galeri/') ?>' + data
                        .galeri_foto);
                    $('[name="enama"]').val(data.galeri_nama);
                    $('[name="old_foto"]').val(data.galeri_foto);

                });
            }
        });
        return false;
    });

    $.validator.setDefaults({
        submitHandler: function() {
            var id = $("#kodedit").val();

            var judul = $("#enama").val();
            var foto  = $("#foto").val();

            $.ajax({
                type: "POST",
                url: "<?php echo base_url() ?>admin/galeri/simpanedit",
                data: {
                    'foto' : foto,
                    'judul': judul,
                    'id': id
                },
                success: function(response) {
                    if (response == "success") {
                        $('[name="enama"]').val("");
                        $('#modal-edit').modal('hide');
                        $('#datagaleri').DataTable().ajax.reload();
                        Toast.fire({
                            icon: 'success',
                            title: 'Data Sukses diedit'
                        });
                        window.location.href = "<?= base_url('admin/galeri') ?>";
                    } else {
                        Toast.fire({
                            icon: 'success',
                            title: 'Data Gagal diedit'
                        });
                    }

                    console.log(response)
                },

                error: function(response) {
                    Swal.fire({
                        type: 'error',
                        title: 'OOPS!!',
                        text: 'Server Error!'
                    });
                }
            });
        }
    });
    $('#editform').validate({
        rules: {
            eusername: {
                required: true,

            },
            epsw: {
                required: true,
                minlength: 6
            },
            enama: {
                required: true,

            },


        },
        messages: {


            enama: {
                required: "Masukan Judul",

            }

        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    datagaleri();

    function datagaleri() {
        $('#datagaleri').DataTable({
            "language": {
                "decimal": "",
                "emptyTable": "Tidak ada data",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
                "infoFiltered": "(Menyaring dari _MAX_ total data)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Menampilkan _MENU_ data",
                "loadingRecords": "Memuat...",
                "processing": "Pengolahan...",
                "search": "Cari:",
                "zeroRecords": "Tidak ada data yang cocok",
                "paginate": {
                    "first": "Awal",
                    "last": "Akhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                },
                "aria": {
                    "sortAscending": ": aktifkan untuk mengurutkan kolom yang naik",
                    "sortDescending": ": aktifkan untuk mengurutkan kolom menurun"
                }
            },
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "paging": true,

            "dom": '<"top row"<"col-md-4" l  ><"col-md-4" B  ><"col-md-4" and f>>rt<"bottom row"<"col-md-6" i> <"col-md-6" p>>',
            "buttons": ["csv", "excel", "pdf", "print"],
            "ajax": {
                url: "<?php echo base_url()?>admin/Galeri/getdata",
                type: 'GET'
            },
        });
    }

});
</script>