@extends('layouts.layoutAdmin.master')
@section('content')
<div class="wrapper bg">
    <div class="container-fluid">
    
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Program Loket</a></li>
                        <li class="breadcrumb-item active">User Manajemen</li>
                    </ol>
                </div>
                <h4 class="page-title">User Manajemen</h4>
            </div>
        </div>
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card" style="box-shadow: 10px;">
                <div class="card-body">
                    <button type="button" onclick="add()" class="btn btn-primary waves-effect waves-light "> <i class="fa fa-plus"></i> Tambah User </button>
                </div>
                <div class="card-body mini-stat m-b-30">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Role</th>
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
    {{-- modal --}}
    <div class="col-sm-6 col-md-3 m-t-30">
        <!--  Modal content for the above example -->
        <div class="modal fade bs-example-modal-md"  id="modal_form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Form User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formuser" class="was-validated" method="post">@csrf
                            {{csrf_field()}}
                            <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}"/>
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
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Password<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="password" name="password"  id="password"  placeholder="Masukan Password..."required>
                                        <div class="valid-feedback">Valid</div>
                                        <div class="invalid-feedback">HARUS DIISI</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Role<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="role"
                                                name="role" required>
                                            <option value="">Silahkan Pilih</option>
                                            <option value="loket">Loket1</option>
                                            <option value="loket2">Loket2</option>
                                        </select>
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
    {{-- modal hapus --}}
    <div class="col-sm-6 col-md-3 m-t-30">
        <!--  Modal content for the above example -->
        <div class="modal fade bs-example-modal-md"  id="formuser2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Form User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="formusers" class="was-validated" method="post">@csrf
                            {{csrf_field()}}
                            <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}"/>
                            <div class="form-body">
                                <div class="form-group text-center text-danger">
                                    {{--<label type="hidden" class="control-label col-md-3">Kode</label>--}}
                                    <input type="hidden" id="id" name="id" value="">
                                    <p>YAKIN AKAN MENGHAPUS USER TERSEBUT ? </p>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama<span class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <input class="form-control" readonly type="text" name="name"  id="id2"  placeholder="Masukan Name..."required>
                                        <div class="valid-feedback">Valid</div>
                                        <div class="invalid-feedback">HARUS DIISI</div>
                                    </div>
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
</div>
</div>

@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script>
        function add() {
            save_method = 'add';
            $('#formuser')[0].reset(); // reset form on modals
            $('#modal_form').modal('show'); // show bootstrap moda
        }
        //save user
        $('#formuser').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
            type:'POST',
            url: "{{ route('save.user')}}",
            data: formData,
            cache:false,
            contentType: false,
            processData: false,
            success: (data) => {
                $("#formuser")[0].reset();
                toastr.success(data.success);
                $("#modal_form").modal('hide');
                var oTable = $('#datatable').dataTable();
                oTable.fnDraw(false);
                $("#btnSave").html('submit');
                $("#btnSave"). attr("disabled", false);
            },
            error: function(data){
            console.log(data);
            }
            });
        });
        //hapus user
        $('#formuser2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var id2 = button.data('id2')
        var modal = $(this)
        // modal.find('.modal-title').text('DETAIL USER');
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #id2').val(id2);
        })
        $('#formusers').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('del.user')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    
                    toastr.success(data.danger);
                    $("#formuser2").modal('hide');
                    var oTable = $('#datatable').dataTable();
                    oTable.fnDraw(false);
                    $("#btndel").html('submit');
                    $("#btndel"). attr("disabled", false);
                },
                error: function(data){
                console.log(data);
                }
                });
            });


        //get user
        $(document).ready(function() {
            $('#datatable').DataTable({
            //karena memakai yajra dan template maka di destroy dulu biar ga dobel initialization
            destroy: true,
            processing: true,
            serverSide: true,
            ajax: {
                url:'{{ route("get.user") }}',
            },
            columns: [
                {
                data:'name',
                name:'name'
                },
                {
                data:'username',
                name:'username'
                },
                {
                data:'role',
                name:'role'
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