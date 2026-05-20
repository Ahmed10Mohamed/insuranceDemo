  <!doctype html>

<html
  lang="ar"
  class="layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="rtl"
  data-skin="default"
  data-assets-path="https://samionc.com/adminFiles/"
  data-template="vertical-menu-template"
  data-bs-theme="dark">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>لوحة التحكم الشركة | نقليه تك</title>

    <meta name="description" content="لوحة التحكم الشركة | نقليه تك" />
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('adminFiles/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('adminFiles/vendor/fonts/iconify-icons.css')}}" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="{{asset('adminFiles/vendor/libs/node-waves/node-waves.css')}}" />

    <link rel="stylesheet" href="{{asset('adminFiles/vendor/libs/pickr/pickr-themes.css')}}" />

    <link rel="stylesheet" href="{{asset('adminFiles/vendor/libs/flatpickr/flatpickr.css')}}" />
    <link rel="stylesheet" href="{{asset('adminFiles/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('adminFiles/vendor/libs/jquery-timepicker/jquery-timepicker.css')}}" />


    <link rel="stylesheet" href="{{asset('adminFiles/vendor/css/core.css')}}" />
    <link rel="stylesheet" href="{{asset('adminFiles/css/demo.css')}}" />
    <link rel="stylesheet" href="{{asset('adminFiles/vendor/libs/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('adminFiles/vendor/libs/tagify/tagify.css')}}" />
    <link rel="stylesheet" href="{{asset('adminFiles/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
    <link rel="stylesheet" href="{{asset('adminFiles/vendor/libs/typeahead-js/typeahead.css')}}" />


    @yield('css')


    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{asset('adminFiles/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- endbuild -->

    <link rel="stylesheet" href="{{asset('adminFiles/vendor/libs/apex-charts/apex-charts.css')}}" />
    <link rel="stylesheet" href="{{asset('adminFiles/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('adminFiles/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('adminFiles/ckeditor/css/samples.css')}}">
		<link rel="stylesheet" href="{{asset('adminFiles/ckeditor/toolbarconfigurator/lib/codemirror/neo.css')}}">
    <link rel="stylesheet" href="{{asset('css/toaster.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}?v=1.0.2">


    <!-- Page CSS -->

    <link rel="stylesheet" href="{{asset('adminFiles/vendor/css/pages/app-logistics-dashboard.css')}}" />

    <!-- Helpers -->
    <script src="{{asset('adminFiles/vendor/js/helpers.js')}}"></script>

    <script src="{{asset('adminFiles/vendor/js/template-customizer.js')}}"></script>

    <script src="{{asset('adminFiles/js/config.js')}}"></script>
    @yield('js')

  </head>




