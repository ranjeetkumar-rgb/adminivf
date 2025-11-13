<!-- JAVASCRIPT -->
<script src="{{ URL::asset('/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/metismenu/metismenu.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/node-waves/node-waves.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/feather-icons/feather-icons.min.js') }}"></script>
<!-- SweetAlert2 js -->
<script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- SweetAlert Utilities -->
<script src="{{ URL::asset('/assets/js/sweetalert-utils.js') }}"></script>
<!-- Page Loader -->
<script src="{{ URL::asset('/assets/js/page-loader.js') }}"></script>
<!-- pace js -->
<script src="{{ URL::asset('assets/libs/pace-js/pace-js.min.js') }}"></script>
<!-- App js -->
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
<!-- Debug script (remove in production) -->
<script src="{{ URL::asset('/assets/js/debug-sidebar.js') }}"></script>
@yield('script')
@yield('script-bottom')
@stack('scripts')

