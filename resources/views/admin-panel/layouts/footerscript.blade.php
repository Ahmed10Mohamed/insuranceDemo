
<script src="{{asset('adminFiles/vendor/libs/jquery/jquery.js')}}"></script>

<script src="{{asset('adminFiles/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('adminFiles/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('adminFiles/vendor/libs/node-waves/node-waves.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="{{asset('adminFiles/vendor/libs/@algolia/autocomplete-js.js')}}"></script>

<script src="{{asset('adminFiles/vendor/libs/pickr/pickr.js')}}"></script>

<script src="{{asset('adminFiles/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<script src="{{asset('adminFiles/vendor/libs/hammer/hammer.js')}}"></script>

<script src="{{asset('adminFiles/vendor/libs/i18n/i18n.js')}}"></script>

<script src="{{asset('adminFiles/vendor/js/menu.js')}}"></script>
<script src="{{asset('adminFiles/js/custom.js')}}"></script>


<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('adminFiles/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{asset('adminFiles/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('adminFiles/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('adminFiles/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('adminFiles/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{asset('adminFiles/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{asset('adminFiles/vendor/libs/bloodhound/bloodhound.js')}}"></script>


@yield('script')

<script type="text/javascript" src="{{asset('js/toaster.js')}}"></script>
<!-- BEGIN PAGE LEVEL JS-->
        @if(session()->has('success') )
        <script>toastr.success('{{ session()->get("success") }}')</script>


        @endif
        @if(session()->has('fail') || $errors->any() )

        <script>
        let failMessage = "{{ $errors->first() ?: session()->get('fail') }}" ;
        let failTitle = "Ops!"
        toastr.error(failMessage, failTitle);
        </script>


        @endif


<!-- Main JS -->

<script src="{{asset('adminFiles/js/main.js')}}"></script>

</body>
</html>


