@extends('layouts.layoutAdmin.master')
@section('head')
<style>
    body, html {
    /* height: 100%; */
    }

    .bg {
    /* The image used */
    background-image: url("assets/images/bgbg.png");

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }
</style>
@endsection
@section('content')
<div class="wrapper">
    <div class="container-fluid">
    
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Program Loket</a></li>
                        <li class="breadcrumb-item active">Konten Manajemen</li>
                    </ol>
                </div>
                <h4 class="page-title">Konten Manajemen</h4>
            </div>
        </div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-xl-6 col-md-6">
            <div class="card" style="box-shadow: 10px;">
                <div class="card-body">
                    <button type="button" data-toggle="modal" data-target="#formuser2" class="btn btn-primary waves-effect waves-light "> <i class="fa fa-plus"></i> Tambah Gambar </button>
                </div>
                <div class="card-body mini-stat m-b-30">
                    <div class="table-responsive">
                        <table id="datatablex" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-md-6">
            <div class="card" style="box-shadow: 10px;">
                <div class="card-body">
                    <button type="button" data-toggle="modal" data-target="#formuser3" class="btn btn-primary waves-effect waves-light "> <i class="fa fa-plus"></i> Tambah Video </button>
                </div>
                <div class="card-body mini-stat m-b-30">
                    <div class="table-responsive">
                        <table id="datatablez" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Video</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="col-sm-6 col-md-3 m-t-30">
    <!--  Modal content for the above example -->
    <div class="modal fade bs-example-modal-md"  id="formuser2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Form Konten</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formkonten" class="was-validated" method="post" enctype="multipart/form-data">@csrf
                        
                        <div class="form-body">
                            <div class="form-group">
                                {{--<label type="hidden" class="control-label col-md-3">Kode</label>--}}
                                <div class="col-md-9">
                                    <input id="kode" name="kode" type="hidden" class="form-control" type="text"
                                           placeholder="Kode">
                                </div>
                                <div class="col-md-9">
                                    <input name="user_id" type="hidden" class="form-control" type="text"
                                           placeholder="Kode">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama<span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="name"  id="nama"  placeholder="Masukan Nama..."required>
                                    <div class="valid-feedback">Valid</div>
                                    <div class="invalid-feedback">HARUS DIISI</div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">File Gambar<span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <input class="form-control" type="file" accept="image/*" name="gambar"  id="gambar"  placeholder="Pilih Gambar..."required>
                                    <div class="valid-feedback">Valid</div>
                                    <div class="invalid-feedback">HARUS DIISI</div>
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="submit" id="btnSave" class="btn btn-primary">Save <i class="fa fa-save"></i>
                                </button>
                                <button type="button" onclick="reload();" class="btn btn-danger"
                                        data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

<div class="col-sm-6 col-md-3 m-t-30">
    <!--  Modal content for the above example -->
    <div class="modal fade bs-example-modal-md"  id="formuser3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Form Konten</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formkontenv" class="was-validated" method="post" enctype="multipart/form-data">@csrf
                        
                        <div class="form-body">
                            <div class="form-group">
                                {{--<label type="hidden" class="control-label col-md-3">Kode</label>--}}
                                <div class="col-md-9">
                                    <input id="kode" name="kode" type="hidden" class="form-control" type="text"
                                           placeholder="Kode">
                                </div>
                                <div class="col-md-9">
                                    <input name="user_id" type="hidden" class="form-control" type="text"
                                           placeholder="Kode">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama<span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="name"  id="nama"  placeholder="Masukan Nama..."required>
                                    <div class="valid-feedback">Valid</div>
                                    <div class="invalid-feedback">HARUS DIISI</div>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-2 col-form-label">File Video<span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <input class="form-control" type="file" accept="video/*" name="video"  id="gambar"  placeholder="Pilih Gambar..."required>
                                    <div class="valid-feedback">Valid</div>
                                    <div class="invalid-feedback">HARUS DIISI</div>
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="submit" id="btnSavev" class="btn btn-primary">Save <i class="fa fa-save"></i>
                                </button>
                                <button type="button" onclick="reload();" class="btn btn-danger"
                                        data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

{{-- delete --}}
<div class="col-sm-6 col-md-3 m-t-30">
    <!--  Modal content for the above example -->
    <div class="modal fade bs-example-modal-md"  id="formuserini" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Form Konten</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formusers" class="was-validated" method="post">@csrf
                        
                        <div class="form-body">
                            <div class="form-group text-center text-danger">
                                {{--<label type="hidden" class="control-label col-md-3">Kode</label>--}}
                                <input type="hidden" id="id" name="id" value="">
                                <p>YAKIN AKAN MENGHAPUS USER TERSEBUT ? </p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="btndel" class="btn btn-danger">Hapus <i class="fa fa-trash"></i>
                                </button>
                                <button type="button" onclick="reload();" class="btn btn-success"
                                        data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script>
        // $('#formuser2').on('show.bs.modal', function(event) {
            $('#formkonten').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('post.konten') }}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                
                    toastr.success(data.success);
                    console.log(data);
                    var oTable = $('#datatablex').dataTable();
                    oTable.fnDraw(false);
                    $('#formuser2').modal('hide');
                    document.getElementById("formkonten").reset();
                },
                error: function(data){
                console.log(data);
                }
                }); 
            });
        // })
        $('#formuser3').on('show.bs.modal', function(event) {
            $('#formkontenv').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('post.video') }}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                
                    toastr.success(data.success);
                    console.log(data);
                    var oTable = $('#datatablez').dataTable();
                    oTable.fnDraw(false);
                    $('#formuser3').modal('hide');
                    document.getElementById("formkontenv").reset();
                },
                error: function(data){
                console.log(data);
                }
                }); 
            });
        })
        //hapus konten
        $('#formuserini').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var modal = $(this)
        // modal.find('.modal-title').text('DETAIL USER');
        modal.find('.modal-body #id').val(id);
        })
        $('#formusers').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('dell.konten')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    
                    toastr.success(data.danger);
                    $("#formuserini").modal('hide');
                    var oTable = $('#datatablex').dataTable();
                    oTable.fnDraw(false);
                    $("#btndel").html('submit');
                    $("#btndel"). attr("disabled", false);
                },
                error: function(data){
                console.log(data);
                }
                });
            });
        
        //get konten table
        $(document).ready(function() {
            $('#datatablex').DataTable({
            //karena memakai yajra dan template maka di destroy dulu biar ga dobel initialization
            destroy: true,
            processing: true,
            serverSide: true,
            ajax: {
                url:'{{ route("get.konten") }}',
            },
            columns: [
                {
                data:'img',
                name:'img'
                },
                {
                data:'name',
                name:'name'
                },
                {
                    data: 'Actions', 
                    name: 'Actions',
                    orderable:false,
                    serachable:false,
                    sClass:'text-center'
                }
            ]
            });

            $('#datatablez').DataTable({
            //karena memakai yajra dan template maka di destroy dulu biar ga dobel initialization
            destroy: true,
            processing: true,
            serverSide: true,
            ajax: {
                url:'{{ route("get.video") }}',
            },
            columns: [
                {
                data:'img',
                name:'img'
                },
                {
                data:'name',
                name:'name'
                },
                {
                    data: 'Actions', 
                    name: 'Actions',
                    orderable:false,
                    serachable:false,
                    sClass:'text-center'
                }
            ]
            });
        });
    </script>
@endsection