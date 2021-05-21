<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>LOKET SMK 1 KRIAN</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{ ('assets/images/favicon.ico') }}">

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{ ('assets/plugins/morris/morris.css') }}">
        <!-- DataTables -->
        <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        
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
            
        #slider {
            overflow: hidden;
        }
        
        @keyframes slider {
            0% { left: 0; }
            30% { left: 0; }
            33% { left: -100%; }
            63% { left: -100%; }
            66% { left: -200%; }
            95% { left: -200%; }
            100% { left: 0; }
        }
        #slider figure {
            width:300%;
            position: relative;
            animation: 9s slider infinite;
        }
        
        #slider figure:hover {
            /*animation-play-state: paused; enable for pause on hover*/
        }
        #slider figure img {
            width: 33.333333333%;
            height : 100%;
            float: left;
        }
        </style>
    </head>


    <body>

        <!-- Loader -->
        {{-- <div id="preloader"><div id="status"><div class="spinner"></div></div></div> --}}

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div style="text-align: center">
                        <!-- Image Logo -->
                        <a href="index.html" >
                            {{-- <img src="assets/images/logo1.png" alt="" height="32" class="logo-small"> --}}
                            <img src="assets/images/logo1.png" style="margin-top: 10px" alt="" height="40" class="logo-large">
                        </a>
                        <li class="list-inline-item dropdown notification-list float-right">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-settings rounded-circle text-white rounded-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                <a class="dropdown-item" href="{{ route('display.loket') }}"><i class="dripicons-broadcast m-r-5 text-muted"></i>Display Admin</a>
                                <a class="dropdown-item" href="{{ route('display.print') }}"><i class="dripicons-view-thumb m-r-5 text-muted"></i> Display Print</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>

                        </li>
                    </div>
                    <!-- End Logo container-->
                    <div class="menu-extras topbar-custom">
                        <ul class="list-inline float-right mb-0">
                            <!-- User-->
                            
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
               
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


<div class="wrapper bg">
    <div class="container-fluid">

        <!-- Page-Title -->
        {{-- <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box" style="text-align: center">
                    <h4 class="text-white" id="clock"></h4>
                </div>
            </div>
        </div> --}}
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card">
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            {{-- <video class="col-xl-12 embed-responsive-item" controls loop autoplay>
                                <source src="{{ asset('assets/video/profile_vid.mp4') }}" type="video/mp4">
                            </video> --}}
                            {{-- <iframe src="{{ $link }}" frameborder="0"></iframe> --}}
                            {!! $link !!}
                        </div>
                    </div>
                    <div style="margin-top: 20px; padding: 2%">
                        <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">MASIH DIBUKA PEDAFTARAN PESERTA DIDIK BARU SMK KRIAN 1 SIDOARJO GEL 2 s.d 30 APRIL 2021 TAHUN PELAJARAN 2021/2022 
                        CASHBACK HINGGA Rp500.000 <br><li style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"> Tautan web Info PPDB Sekolah : <span class="text-primary">http://smkkrian1.sch.id/penerimaan-peserta-didik-baru/</span></li></p>
                    </div>
                    <div class="card">
                        <img src="{{ asset('assets/images/footer-01.png') }}" alt="">
                    </div>
                </div>
            </div> <!-- end col -->
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mini-stat" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                            <div class="p-3 bg-primary text-white">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cube-outline float-right mb-0"></i>
                                </div>
                                
                                <h6 class="text-uppercase mb-0">LOKET 1 (SATU)</h6>
                            </div>
                            <div class="card-body" style="text-align: center">
                                <span>NOMOR ANTRIAN</span>
                                <h5 id="loket1" style="font-size: 140px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">500</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card mini-stat" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                            <div class="p-3 bg-primary text-white">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cube-outline float-right mb-0"></i>
                                </div>
                                <h6 class="text-uppercase mb-0">LOKET 2 (DUA)</h6>
                            </div>
                            <div class="card-body" style="text-align: center">
                                <span>NOMOR ANTRIAN</span>
                                <h5 id="loket2" style="font-size: 140px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">500</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 m-t-10">
                        <div class="card" >
                            <div class="card">
                                <div id="slider">
                                    @if ($konten->count()==0)
                                    <div class="text-center">
                                        <h5 class="text-danger">TIDAK ADA GAMBAR</h5>
                                    </div>  
                                    @elseif($konten->count() < 3)
                                    <div class="text-center">
                                        <h5 class="text-danger">MINIMAL 3 DATA GAMBAR YANG DAPAT DITAMPILKAN</h5>
                                    </div>  
                                    @else
                                    <figure>
                                        @foreach ($konten as $item)
                                            <img src="{{ asset('gambar/'.$item->gambar) }}" style="max-height: 295px">
                                        @endforeach
                                    </figure>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>



        


        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2021 <b>SMK KRIAN 1</b><span class="d-none d-sm-inline-block">  <i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    

        <!-- jQuery  -->
        
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('assets/js/detect.js') }}"></script>
<script src="{{ asset('assets/js/fastclick.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('assets/js/waves.js') }}"></script>
<!-- skycons -->
<script src="{{ asset('assets/plugins/skycons/skycons.min.js') }}"></script>

<!-- skycons -->
<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>

<!--Morris Chart-->
{{-- <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script> --}}
<script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>

<!-- dashboard -->
{{-- <script src="{{ asset('assets/pages/dashboard.js') }}"></script> --}}

<!-- Required datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('assets/pages/datatables.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<script>
    $(document).ready(function(){
        setInterval(function () {getRealData()}, 1000);//request every x seconds
        // antrian loket 1
        function getRealData() {
            $.ajax({
                url:"{{ route('display.daftarloket1') }}",
                type: 'get',
                dataType: 'json',
                success:function(data) {
                    if (typeof(data.antrian_ke)=="number"){
                        console.log(data.antrian_ke);
                        document.getElementById('loket1').innerHTML = data.antrian_ke;
                    }else{
                        //console.log(data.antrian_ke);
                        document.getElementById('loket1').innerHTML = "0";
                    }
                
                }
                });
            
            
                $.ajax({
                url:"{{ route('display.daftarloket2') }}",
                type: 'get',
                dataType: 'json',
                success:function(data) {
                    if (typeof(data.antrian_ke)=="number"){
                        console.log(data.antrian_ke);
                        document.getElementById('loket2').innerHTML = data.antrian_ke;
                    }else{
                        //console.log(data.antrian_ke);
                        document.getElementById('loket2').innerHTML = "0";
                    }
                }
                });
        }
    });
</script>
    </body>
</html>


    
