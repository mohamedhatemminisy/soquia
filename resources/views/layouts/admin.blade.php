<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="{{ app() -> getLocale() === 'ar' ? 'rtl' : 'ltr'}}">

<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
      <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
      <meta name="author" content="PIXINVENT">
      <title>@yield('title')</title>
      <link rel="apple-touch-icon" href="{{asset('assets/admin/images/ico/apple-icon-120.png')}}">
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/images/ico/favicon.ico')}}">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
      <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin//plugins/animate/animate.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getFolder().'/vendors.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/weather-icons/climacons.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/fonts/meteocons/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/morris.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/chartist.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/forms/selects/select2.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/chartist-plugin-tooltip.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/forms/toggle/switchery.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getFolder().'/core/menu/menu-types/vertical-menu.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getFolder().'/pages/chat-application.css')}}">

      <!-- END VENDOR CSS-->
      <!-- BEGIN MODERN CSS-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getFolder().'/app.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getFolder().'/custom-rtl.css')}}">
      <!-- END MODERN CSS-->
      <!-- BEGIN Page Level CSS-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getFolder().'/core/menu/menu-types/vertical-menu.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getFolder().'/core/colors/palette-gradient.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/fonts/simple-line-icons/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getFolder().'/core/colors/palette-gradient.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/'.getFolder().'/pages/timeline.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/cryptocoins/cryptocoins.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/extensions/datedropper.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/extensions/timedropper.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/file-uploaders/dropzone.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/plugins/file-uploaders/dropzone.css')}}">
      <!-- END Page Level CSS-->
      <!-- BEGIN Custom CSS-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/style.css')}}">
      <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <!-- END Custom CSS-->
      @yield('style')

      <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
      <style>
            body {
                  font-family: 'Cairo', sans-serif;
            }
      </style>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
      <!-- fixed-top-->
      @php
      $locale = app()->getLocale();
      @endphp
      <input type="hidden" value="{{ $locale }}" class="locale">

      <!-- begin header -->
      @include('dashboard.includes.header')
      <!-- end header -->
      <!-- begin sidebar -->
      @include('dashboard.includes.sidebare')

      <!-- end sidebar -->
      @yield('content')

      <!-- begin footer html -->
      @include('dashboard.includes.footer')

      <!-- end footer -->

      <script src="//js.pusher.com/3.1/pusher.min.js"></script>

      <!-- BEGIN VENDOR JS-->
      <script src="{{asset('assets/admin/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/vendors/js/editors/ckeditor/ckeditor.js')}}" type="text/javascript"></script>

      <!-- BEGIN VENDOR JS-->
      <script src="{{asset('assets/admin/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js')}}" type="text/javascript"></script>

      <script src="{{asset('assets/admin/vendors/js/forms/toggle/bootstrap-switch.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>

      <!-- BEGIN PAGE VENDOR JS-->
      <script src="{{asset('assets/admin/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>

      <script src="{{asset('assets/admin/vendors/js/extensions/datedropper.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script>

      <script src="{{asset('assets/admin/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/vendors/js/extensions/dropzone.min.js')}}" type="text/javascript"></script>
      <!-- END PAGE VENDOR JS-->
      <!-- BEGIN MODERN JS-->
      <script src="{{asset('assets/admin/js/core/app-menu.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/js/core/app.js')}}" type="text/javascript"></script>

      <script src="{{asset('assets/admin/js/scripts/customizer.js')}}" type="text/javascript"></script>
      <!-- END MODERN JS-->
      <!-- BEGIN PAGE LEVEL JS-->
      <script src="{{asset('assets/admin/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script>


      <script src="{{asset('assets/admin/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/js/scripts/extensions/date-time-dropper.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/vendors/js/ui/prism.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/js/scripts/pages/email-application.js')}}" type="text/javascript"></script>
      <!-- END PAGE LEVEL JS-->

      <script src="{{asset('assets/admin/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/admin/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>


 
      <script>
            var previousCounter = $('.notification-counter').text(); //8
            var notificationsCount = parseInt(previousCounter);
            // Enable pusher logging - don't include this in production
            var pusher = new Pusher('2203df2757e00ac59e6d', {
                  encrypted: true
            });
            //Pusher.logToConsole = true;
            // Subscribe to the channel we specified in our Laravel Event
            var channel = pusher.subscribe('order');
            // Bind a function to a Our Event
            channel.bind('App\\Events\\NewOrder', function(data) {
                  notificationsCount += 1;
                  $('.notification-counter').text(notificationsCount)
            });

            function confirmDelete(item_id) {
                  var locale = $(".locale").val();

                  console.log(locale);

                  if (locale == "ar") {

                        Swal.fire({
                              title: "@lang('translation.sure')",
                              text: `@lang('translation.revert')`,
                              icon: "warning",
                              showCancelButton: true,
                              confirmButtonText: "@lang('translation.delete')",
                              cancelButtonText: "@lang('translation.cancel')",
                              reverseButtons: true
                        }).then(function(result) {
                              if (result.value) {
                                    console.log(item_id);
                                    $('#' + item_id).submit();
                              } else if (result.dismiss === "cancel") {
                                    Swal.fire(
                                          "@lang('translation.canceled')",
                                          "@lang('translation.files_saved')",
                                          "error"
                                    )
                              }
                        });
                  } else if (locale == "en") {
                        Swal.fire({
                              title: "@lang('translation.sure')",
                              text: `@lang('translation.revert')`,
                              icon: "warning",
                              showCancelButton: true,
                              confirmButtonText: "@lang('translation.delete')",
                              cancelButtonText: "@lang('translation.cancel')",
                              reverseButtons: true
                        }).then(function(result) {
                              if (result.dismiss === "cancel") {
                                    console.log(item_id);
                                    $('#' + item_id).submit();
                              } else if (true) {
                                    Swal.fire(
                                          "@lang('translation.canceled')",
                                          "@lang('translation.files_saved')",
                                          "error"
                                    )
                              }
                        });
                  }

            }
      </script>

      @yield('script')
</body>

</html>