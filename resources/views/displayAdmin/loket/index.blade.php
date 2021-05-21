@extends('layouts.layoutAdmin.master')
@section('head')
    {{-- head --}}
    <style>
        body, html {
        height: 100%;
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
    {{-- content --}}
    <div class="wrapper bg">
        <div class="container-fluid">
    
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box" style="text-align: center">
                        <h4 class="text-white" id="clock"></h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->
    
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card m-b-30 blog-wid">
                        <div class="card-body">
                            <div class="float-left p-1 mr-3">
                                <div class="text-center bg-primary rounded p-3">
                                    <p class="text-white mb-0" id="bln"></p>
                                    <h2 class="text-white mb-0" id="tgl"></h2>
                                    <p class="text-white mb-0" id="hari"></p>
                                </div>
                            </div>
                            <div class="post-details p-2">
                                <h6 class="mt-0"><a href="#" class="text-dark">Selamat Pagi Admin</a></h6>
                                <p class="text-muted">Semoga hari ini menjadi hari yang hebat dan menyenangkan bagi anda</p>
                                {{-- <p class="mb-0">By <a href="#" class="text-primary">Andy Suryo</a></p> --}}
                            </div>
                        </div>
                    </div>
                    @if (auth()->user()->role=='loket')
                    <div class="card mini-stat m-b-30">
                        <div class="p-3 bg-primary text-white">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-comment-multiple-outline float-right mb-0"></i>
                            </div>
                            <h5 class="text-uppercase mb-0">CUSTOM PENGUMUMAN</h5>
                        </div>
                        <div class="card-body border-bottom">
                            <div class="row">
                                <div class="form-group col-xl-12" style="margin-bottom: 25px">    
                                    <h6>PILIH SUARA</h6>
                                    <select id='voiceList1' class="form-control"></select>
                                </div>
                                {{-- <div class="form-group col-xl-8 col-8 m-t-30">
                                    <input type="text" id="txtInput1" placeholder="Masukan Kalimat" class="form-control">
                                </div>
                                <div class="form-group col-xl-4 col-4 m-t-30">
                                    <button  class="btn btn-sm btn-primary">Terapkan!</button>
                                </div> --}}
                            </div>
                        </div>
                    </div>  
                    @else
                    <div class="card mini-stat m-b-30">
                        <div class="p-3 bg-primary text-white">
                            <div class="mini-stat-icon">
                                <i class="mdi mdi-comment-multiple-outline float-right mb-0"></i>
                            </div>
                            <h5 class="text-uppercase mb-0">CUSTOM PENGUMUMAN</h5>
                        </div>
                        <div class="card-body border-bottom">
                            <div class="row">
                                <div class="form-group col-xl-12" style="margin-bottom: 25px">    
                                    <h6>PILIH SUARA</h6>
                                    <select id='voiceList2' class="form-control"></select>
                                </div>
                                {{-- <div class="form-group col-xl-8 col-8 m-t-30">
                                    <input type="text" id="txtInput2" placeholder="Masukan Kalimat" class="form-control">
                                </div>
                                <div class="form-group col-xl-4 col-4 m-t-30">
                                    <button  class="btn btn-sm btn-primary">Terapkan!</button>
                                </div> --}}
                            </div>
                        </div>
                    </div>  
                    @endif  
                </div>
                <div class="col-xl-6" >
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">History Diterimanya Karcis Antrian</h4>
                            @if(auth()->user()->role =='loket')
                                <table id="datatable1" class="table datas table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Loket</th>
                                            <th>Antrian</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            @endif
                            </ul>
                            @if(auth()->user()->role =='loket2')
                            <table id="datatable2" class="table datas table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Loket</th>
                                        <th>Antrian</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="row">
                        @if (auth()->user()->role=='loket')
                        <div class="col-lg-12">
                            <div class="card bg-primary m-b-30 text-white weather-box">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div style="text-align: center">
                                            <h1 class="dripicons-broadcast"></h1>
                                        </div>
                                        <div>
                                            <h6>NOMOR ANTRIAN</h6>
                                            <h3 id="loket1">50</h3>
                                            
                                            <h4 class="mt-4">LOKET 1</h4>
                                        </div> 
                                    </div>
                                    <div class="weather-icon">
                                        <i class="dripicons-broadcast"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-lg-12">
                            <div class="card m-b-30 text-white weather-box" style="background-color: rgb(0, 139, 173)">
                                <div class="card-body">
                                    <div class="text-center">
                                        <div style="text-align: center">
                                            <h1 class="dripicons-broadcast"></h1>
                                        </div>
                                        <div>
                                            <h6>NOMOR ANTRIAN</h6>
                                            <h3 id="loket2">50</h3>
                                            
                                            <h4 class="mt-4">LOKET 2</h4>
                                        </div>
                                    </div>
                                    <div class="weather-icon">
                                        <i class="dripicons-broadcast"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="card mini-stat m-b-30">
                        @if(auth()->user()->role =='loket')
                            <div class="p-3 bg-primary text-white">
                                <div class="mini-stat-icon">
                                    <i class="fa fa-phone float-right mb-0"></i>
                                </div>
                                <h5 class="text-uppercase mb-0">LOKET 1</h5>
                            </div>
                            <div class="card-body border-bottom" style="text-align: center">
                                <form action="javasript:void(0)" id="antrianloket1"  method="post"> @csrf
                                    <input type="hidden" id="uploket1" value="" name="id">
                                    <button class="btn btn-rounded btn-success float-left" style="text-align: left; width: 150px; margin-bottom: 10px">TERIMA <i class="mdi mdi-check-all float-right"></i></button>
                                </form>
                                <input type="hidden" id="txtloket1">
                                <form action="javasript:void(0)" id="antrianloket3" method="post"> @csrf
                                    <input type="hidden" id="uploket3" value="" name="id">
                                    <button class="btn btn-rounded btn-danger float-left" style="text-align: left;width: 150px; margin-bottom: 10px">LEWATI <i class="mdi mdi-close-circle float-right"></i></button>
                                </form>
                                <button class="btn btn-rounded btn-primary float-left" id="btnSpeak1" style="text-align: left;width: 150px;margin-bottom: 10px">PANGGIL <i class="dripicons-broadcast float-right"></i></button>
                            </div>
                        @endif
                        @if(auth()->user()->role=='loket2')
                            <div class="p-3 bg-primary text-white">
                                <div class="mini-stat-icon">
                                    <i class="fa fa-phone float-right mb-0"></i>
                                </div>
                                <h5 class="text-uppercase mb-0">LOKET 2</h5>
                            </div>
                            <div class="card-body border-bottom" style="text-align: center">
                                <form action="javasript:void(0)" id="antrianloket2" method="post"> @csrf
                                    <input type="hidden" id="uploket2" value="" name="id">
                                    <button class="btn btn-rounded btn-success" style="text-align: left; width: 150px;margin-bottom: 10px"> TERIMA <i class="mdi mdi-check-all float-right"></i></button>
                                </form>
                                <input type="hidden" id="txtloket2">
                                <form action="javasript:void(0)" id="antrianloket4" method="post"> @csrf
                                    <input type="hidden" id="uploket4" value="" name="id">
                                    <button class="btn btn-rounded btn-danger" style="text-align: left;width: 150px;margin-bottom: 10px"> LEWATI <i class="mdi mdi-close-circle float-right"></i></button>
                                </form>
                                <button class="btn btn-rounded btn-primary" id="btnSpeak2" style="text-align: left;width: 150px;margin-bottom: 10px"> PANGGIL <i class="dripicons-broadcast float-right"></i></button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->
    <input type="hidden" id="sebagai" value="{{ auth()->user()->role }}">
    <div class="col-sm-6 col-md-3 m-t-30">
        <!--  Modal content for the above example -->
        <div class="modal fade bs-example-modal-md"  id="terimal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Konfirmasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="javasript:void(0)" id="formterima2" method="post">@csrf
                            <label for="">Nomor Antrian</label>
                            <input type="text" id="antrianke" name="id" class="form-control" readonly>
                            <input type="hidden" id="status" name="status" class="form-control">
                            <div class="modal-footer">
                                <button type="submit" id="btnterima" class="btn btn-danger">Terima <i class="mdi mdi-check-all"></i>
                                </button>
                                <button type="button" class="btn btn-success"
                                        data-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
    <div class="col-sm-6 col-md-3 m-t-30">
        <!--  Modal content for the above example -->
        <div class="modal fade bs-example-modal-md"  id="terimal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Konfirmasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="javasript:void(0)" id="formterima1" method="post">@csrf
                            <label for="">Nomor Antrian</label>
                            <input type="text" id="antrianke" name="id" class="form-control" readonly>
                            <input type="hidden" id="status" name="status" class="form-control">
                            <div class="modal-footer">
                                <button type="submit" id="btnterima" class="btn btn-danger">Terima <i class="mdi mdi-check-all"></i>
                                </button>
                                <button type="button" class="btn btn-success"
                                        data-dismiss="modal">
                                    Cancel
                                </button>
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
        $(document).ready(function(){
            //datatable
            var sebagai = document.getElementById('sebagai').value;
            if (sebagai=='loket') {
                $('#datatable1').DataTable({
                "pageLength": 6,
                //karena memakai yajra dan template maka di destroy dulu biar ga dobel initialization
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url:'{{ route("history") }}',
                },
                columns: [
                    {
                    data:'tanggal',
                    name:'tanggal'
                    },
                    {
                    data:'loket_id',
                    name:'loket_id'
                    },
                    {
                    data:'antrian_ke',
                    name:'antrian_ke'
                    },
                    
                    {
                    data:'status',
                    data:'status'
                    },
                ]
                });
            } else {
                $('#datatable2').DataTable({
                "pageLength": 6,
                //karena memakai yajra dan template maka di destroy dulu biar ga dobel initialization
                destroy: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url:'{{ route("history2") }}',
                },
                columns: [
                    {
                    data:'tanggal',
                    name:'tanggal'
                    },
                    {
                    data:'loket_id',
                    name:'loket_id'
                    },
                    {
                    data:'antrian_ke',
                    name:'antrian_ke'
                    },
                    
                    {
                    data:'status',
                    name:'status'
                    },
                ]
                });
            }
            

            setInterval(function () {getRealData()}, 1000);//request every x seconds
            
            // antrian loket 1
            function getRealData() {
                var sebagai = document.getElementById('sebagai').value;
                console.log(sebagai);

                if (sebagai=="loket") {
                    $.ajax({
                    url:"{{ route('display.daftarloket1') }}",
                    type: 'get',
                    dataType: 'json',
                    success:function(data) {
                        if (typeof(data.antrian_ke)=="number"){
                            console.log(data.antrian_ke);
                            document.getElementById('loket1').innerHTML = data.antrian_ke;
                            document.getElementById('uploket1').value = data.antrian_ke;
                            document.getElementById('uploket3').value = data.antrian_ke;
                            document.getElementById('txtloket1').value = "antrian nomor " + data.antrian_ke + " menuju loket 1";
                        }else{
                            //console.log(data.antrian_ke);
                            document.getElementById('loket1').innerHTML = "TIDAK ADA ANTRIAN";
                            document.getElementById('uploket1').value = 0;
                            document.getElementById('txtloket1').value = "";
                        }
                    
                    }
                    });
                }
                else{
                    $.ajax({
                    url:"{{ route('display.daftarloket2') }}",
                    type: 'get',
                    dataType: 'json',
                    success:function(data) {
                        if (typeof(data.antrian_ke)=="number"){
                            console.log(data.antrian_ke);
                            document.getElementById('loket2').innerHTML = data.antrian_ke;
                            document.getElementById('uploket2').value = data.antrian_ke;
                            document.getElementById('uploket4').value = data.antrian_ke;
                            document.getElementById('txtloket2').value = "antrian nomor " + data.antrian_ke + " menuju loket 2";
                        }else{
                            //console.log(data.antrian_ke);
                            document.getElementById('loket2').innerHTML = "TIDAK ADA ANTRIAN";
                            document.getElementById('uploket2').value = 0;
                            document.getElementById('txtloket2').value = "";
                        }
                    }
                    });
                }
                
            }

            //update loket 1 terima antrian
            $('#antrianloket1').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('update.antrian1') }}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                
                    toastr.success(data.success);
                    console.log(data);
                    var oTable = $('#datatable1').dataTable();
                    oTable.fnDraw(false);
                    
                },
                error: function(data){
                console.log(data);
                }
                }); 
            });
            //update loket 1 lewati antrian
            $('#antrianloket3').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('update.antrian3') }}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                
                    toastr.success(data.success);
                    console.log(data);
                    var oTable = $('#datatable1').dataTable();
                    oTable.fnDraw(false);
                    
                },
                error: function(data){
                console.log(data);
                }
                }); 
            });
            //update loket 2 terima antrian
            $('#antrianloket2').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: 'kelolaantrian2',
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                
                    toastr.success(data.success);
                    console.log(data);
                    var oTable = $('#datatable2').dataTable();
                    oTable.fnDraw(false);
                },
                error: function(data){
                console.log(data);
                }
                }); 
            });
            //update loket 2 skip antrian
            $('#antrianloket4').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: "{{ route('update.antrian4') }}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                
                    toastr.success(data.success);
                    console.log(data);
                    var oTable = $('#datatable2').dataTable();
                    oTable.fnDraw(false);
                    
                },
                error: function(data){
                console.log(data);
                }
                }); 
            });
            //update loket 1 terima yang di skip
            $('#terimal1').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('antrianke')
            var status = button.data('status')
            var modal = $(this)
            modal.find('.modal-body #antrianke').val(id);
            modal.find('.modal-body #status').val(status);
            })
            $('#formterima1').submit(function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                    type:'POST',
                    url: "{{ route('update.antrian5') }}",
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                    
                        toastr.success(data.success);
                        console.log(data.antrian_ke);
                        var oTable = $('#datatable1').dataTable();
                        oTable.fnDraw(false);
                        $('#terimal1').modal('hide');
                        
                    },
                    error: function(data){
                    console.log(data);
                    }
                    }); 
                });
            //update loket 2 terima yang di skip
            $('#terimal2').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('antrianke')
            var status = button.data('status')
            var modal = $(this)
            modal.find('.modal-body #antrianke').val(id);
            modal.find('.modal-body #status').val(status);
            })
            $('#formterima2').submit(function(e) {
                    e.preventDefault();
                    var formData = new FormData(this);
                    $.ajax({
                    type:'POST',
                    url: "{{ route('update.antrian6') }}",
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                    
                        toastr.success(data.success);
                        console.log(data.antrian_ke);
                        var oTable = $('#datatable2').dataTable();
                        oTable.fnDraw(false);
                        $('#terimal2').modal('hide');
                        
                    },
                    error: function(data){
                    console.log(data);
                    }
                    }); 
                });
        });

        var sebagai = document.getElementById('sebagai').value;

        if (sebagai=='loket') {
            var txtInput = document.querySelector('#txtloket1');
            var voiceList = document.querySelector('#voiceList1');
            var btnSpeak = document.querySelector('#btnSpeak1');
            var synth = window.speechSynthesis;
            var voices = [];

            PopulateVoices();
            if(speechSynthesis !== undefined){
                speechSynthesis.onvoiceschanged = PopulateVoices;
            }

            btnSpeak.addEventListener('click', ()=> {
                var toSpeak = new SpeechSynthesisUtterance(txtInput.value);
                var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
                voices.forEach((voice)=>{
                    if(voice.name === selectedVoiceName){
                        toSpeak.voice = voice;
                    }
                });
                synth.speak(toSpeak);
            });

            function PopulateVoices(){
                voices = synth.getVoices();
                var selectedIndex = voiceList.selectedIndex < 0 ? 0 : voiceList.selectedIndex;
                voiceList.innerHTML = '';
                voices.forEach((voice)=>{
                    var listItem = document.createElement('option');
                    listItem.textContent = voice.name;
                    listItem.setAttribute('data-lang', voice.lang);
                    listItem.setAttribute('data-name', voice.name);
                    voiceList.appendChild(listItem);
                });

                voiceList.selectedIndex = selectedIndex;
            }
        } else {
            var txtInput = document.querySelector('#txtloket2');
            var voiceList = document.querySelector('#voiceList2');
            var btnSpeak = document.querySelector('#btnSpeak2');
            var synth = window.speechSynthesis;
            var voices = [];

            PopulateVoices();
            if(speechSynthesis !== undefined){
                speechSynthesis.onvoiceschanged = PopulateVoices;
            }

            btnSpeak.addEventListener('click', ()=> {
                var toSpeak = new SpeechSynthesisUtterance(txtInput.value);
                var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
                voices.forEach((voice)=>{
                    if(voice.name === selectedVoiceName){
                        toSpeak.voice = voice;
                    }
                });
                synth.speak(toSpeak);
            });

            function PopulateVoices(){
                voices = synth.getVoices();
                var selectedIndex = voiceList.selectedIndex < 0 ? 0 : voiceList.selectedIndex;
                voiceList.innerHTML = '';
                voices.forEach((voice)=>{
                    var listItem = document.createElement('option');
                    listItem.textContent = voice.name;
                    listItem.setAttribute('data-lang', voice.lang);
                    listItem.setAttribute('data-name', voice.name);
                    voiceList.appendChild(listItem);
                });

                voiceList.selectedIndex = selectedIndex;
            }
        }
        
    </script>
    {{-- TANGGAL --}}
    <script type="text/javascript">

        $(document).ready(function () {
                let location = window.location.href;
                let split_link = location.split('/');
                if (split_link[3] !== 'dashboard') {
                    setInterval(showTime, 500);
                    calender();
                }
            });
        
            function showTime() {
                var a_p = "";
                var today = new Date();
                var curr_hour = today.getHours();
                var curr_minute = today.getMinutes();
                var curr_second = today.getSeconds();
                if (curr_hour < 12) {
                    a_p = "AM";
                } else {
                    a_p = "PM";
                }
                if (curr_hour == 0) {
                    curr_hour = 12;
                }
                if (curr_hour > 12) {
                    curr_hour = curr_hour - 12;
                }
                curr_hour = checkTime(curr_hour);
                curr_minute = checkTime(curr_minute);
                curr_second = checkTime(curr_second);
                document.getElementById('clock').innerHTML = "" + " " + curr_hour + " : " + curr_minute + " : " + curr_second +
                    " " + a_p;
            }
        
            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
        
            function calender() {
                var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober',
                    'November', 'Desember'
                ];
                var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                var date = new Date();
                var day = date.getDate();
                var month = date.getMonth();
                var thisDay = date.getDay(),
                    thisDay = myDays[thisDay];
                var yy = date.getYear();
                var year = (yy < 1000) ? yy + 1900 : yy;
                // document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                console.log(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                if (thisDay !== null) {
        
                }
                document.getElementById('hari').innerHTML = thisDay;
                document.getElementById('tgl').innerHTML = day;
                document.getElementById('bln').innerHTML = months[month];
            }
        </script>
@endsection