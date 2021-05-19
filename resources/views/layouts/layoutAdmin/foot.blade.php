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

@yield('script')

</body>
</html>