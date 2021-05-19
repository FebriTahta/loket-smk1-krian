@extends('layouts.layoutAdmin.master')
@section('head')
    {{-- head --}}
    <style>
        body, html {
        height:100%;
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
            <div class="row" >
                <div class="col-sm-12">
                    <div class="page-title-box" style="text-align: center">
                        
                    </div>
                </div>
                <div class="col-sm-4">
    
                </div>
                <div class="col-sm-4" style="text-align: center">
                    
                </div>
                <div class="col-sm-4">
                    
                </div>
            </div>
            <div class="row" style="margin-bottom: 100px">
                <div class="col-xl-2">
                </div>
                <div class="col-xl-4" style="background: transparent">
                    <form action="javascript:void(0)" id="print" method="POST">@csrf
                        {{csrf_field()}}
                        <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}"/>
                        <input type="hidden" name="antrian_ke" value="1">
                        <input type="hidden" name="loket_id" value="1">
                        <input type="hidden" name="user_id" value="1">
                        <input type="hidden" name="status" value="0">
                        <button type="submit" id="btnloket1" style="border-radius: 60px;background: transparent">
                            <img type="submit" style="border-radius: 60px;" src="assets/images/Loket-031.png" alt="">
                        </button>
                    </form>
                </div>
                
                <div class="col-xl-4" style="background: transparent">
                    <form action="javascript:void(0)" id="print2" method="POST">@csrf
                        {{csrf_field()}}
                        <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}"/>                        
                        <input type="hidden" name="antrian_ke" value="1">
                        <input type="hidden" name="loket_id" value="2">
                        <input type="hidden" name="user_id" value="2">
                        <input type="hidden" name="status" value="0">
                        <button type="submit" id="btnloket2" style="border-radius: 60px;background: transparent">
                            <img type="submit" style="border-radius: 60px;" src="assets/images/Loket-041.png" alt="">
                        </button>
                    </form>
                </div>
                <div class="col-xl-2">
                </div>
            </div>
        </div>
    </div>
            
           
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    {{-- print loket 1 & 2 --}}
    <script>
        $(document).ready(function(){

            $('#print').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: 'displayPrint/input2',
                data: formData,
                cache:false, 
                contentType: false,
                processData: false,
                success: (data) => {
                    toastr.success(data.success);
                    console.log(data.antrian_ke);
                    document.getElementById("btnloket1").disabled = true;
                    setTimeout(function(){document.getElementById("btnloket1").disabled = false;},2000);
                },
                error: function(data){
                console.log(data);
                }
                }); 
            });

            $('#print2').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                type:'POST',
                url: 'displayPrint/input',
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                
                    toastr.success(data.success);
                    console.log(data);
                    document.getElementById("btnloket2").disabled = true;
                    setTimeout(function(){document.getElementById("btnloket2").disabled = false;},2000);
                },
                error: function(data){
                console.log(data);
                }
                }); 
            });

        })
        </script>
@endsection