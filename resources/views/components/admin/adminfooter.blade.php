<footer class="main-footer mt-4">
    <strong>Copyright &copy; 2019-2021&nbsp;&nbsp;</strong>
    All rights reserved. <a href="#" class="ml-4">Brikshya</a>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<!-- jQuery -->
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
{{--<script src="{{asset('/dist/js/adminlte.js')}}"></script>--}}

<!-- OPTIONAL SCRIPTS -->
{{--<script src="{{asset('/plugins/chart.js/Chart.min.js')}}"></script>--}}
<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="{{asset('/dist/js/pages/dashboard3.js')}}"></script>--}}

<script src="{{ asset('js2/lightbox-plus-jquery.js') }}"></script>
<script src="{{ asset('js2/lightbox.js') }}"></script>
<script src="{{ asset('js2/lightbox.js') }}"></script>


<script src="{{ asset('js2/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js2/popper.min.js') }}"></script>
<script src="{{ asset('js2/bootstrap.min.js') }}"></script>
<script src="{{ asset('js2/jquery.sticky.js') }}"></script>
<script src="{{ asset('js2/main.js') }}"></script>

<!-- DataTables  & Plugins -->

<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{asset('/nepali.datepicker/js/nepali.datepicker.v4.0.min.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"> </script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

<script src="{{ asset('js2/index.js') }}"></script>

@yield('scripts')

</body>
</html>