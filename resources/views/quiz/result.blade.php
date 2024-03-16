<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="{{asset('backend')}}/assets/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>9 Shareef Quiz Result</title>


    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">


        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{asset('frontend')}}/assets/img/logo/saab.jpg" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
<link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
<link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/vendor/css/pages/page-profile.css" />

    <!-- Helpers -->
    <script src="{{asset('backend')}}/assets/vendor/js/helpers.js"></script>
    <script src="{{asset('backend')}}/assets/js/config.js"></script>
    <style>
        @font-face {
        font-family: QyyumBook ;
        src: url({{asset('frontend')}}/assets/fonts/bangla/QyyumBook.ttf);
    }
    body{
        font-family: QyyumBook ;
    }
    </style>


</head>

<body>



    <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  layout-without-menu">
    <div class="layout-container">
      <!-- Layout container -->
      <div class="layout-page">


        <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">



        <!-- Header -->
        <div class="row">
        <div class="col-12">
            <div class="card mb-4">
            <div class="user-profile-header-banner">
                <img src="{{asset('backend')}}/assets/img/pages/saab.jpg" alt="Banner image" class="rounded-top">
            </div>
            <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                <img src="{{asset('backend')}}/assets/img/avatars/1.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                </div>
                <div class="flex-grow-1 mt-3 mt-sm-5">
                <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                    <div class="user-profile-info">
                    <h4>SAAB</h4>
                    </div>

                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!--/ Header -->

        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card table-responsive">
                    <div class="card-header">
                        <h2 class="text-center">মুবারকবাদ জানাই আপনাদের</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr style="font-weight: 650">
                                <th>নাম</th>
                                <th>মোবাইল লাস্ট ৬ ডিজিট</th>
                                <th>প্রাপ্য নাম্বার</th>
                                <th>সার্টিফিকেট</th>
                            </tr>
                            @foreach ($firsts as $first )
                                <tr style="font-weight: 500">
                                    <td>{{$first->name}}</td>
                                    <td> {{substr($first->phone, 5, 11)}}</td>
                                    <td>{{$first->score}}</td>
                                    <td class="text-center">
                                        <a href="{{route('certificate',$first->id)}}"><i class="fa-solid fa-download fa-xl"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 m-auto mt-3">
                <div class="card table-responsive">
                    <div class="card-header">
                        <h2 class="text-center">মুবারকবাদ জানাই আপনাদের</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr style="font-weight: 650">
                                <th>নাম</th>
                                <th>মোবাইল লাস্ট ৬ ডিজিট</th>
                                <th>উত্তর ১</th>
                                <th>উত্তর ২</th>
                                <th>উত্তর ৩</th>
                                <th>উত্তর ৪</th>
                                <th>উত্তর ৫</th>
                                <th>উত্তর ৬</th>
                                <th>উত্তর ৭</th>
                                <th>উত্তর ৮</th>
                                <th>উত্তর ৯</th>
                                <th>প্রাপ্য নাম্বার</th>
                            </tr>
                            @foreach ($quizers as $quizer )
                                <tr style="font-weight: 500">
                                    <td class="text-capitalize">{{$quizer->name}}</td>
                                    <td>
                                        {{substr($quizer->phone, 5, 11)}}
                                    </td>
                                    <td class="text-capitalize">{{$quizer->qs1}}</td>
                                    <td class="text-capitalize">{{$quizer->qs2}}</td>
                                    <td class="text-capitalize">{{$quizer->qs3}}</td>
                                    <td class="text-capitalize">{{$quizer->qs4}}</td>
                                    <td class="text-capitalize">{{$quizer->qs5}}</td>
                                    <td class="text-capitalize">{{$quizer->qs6}}</td>
                                    <td class="text-capitalize">{{$quizer->qs7}}</td>
                                    <td class="text-capitalize">{{$quizer->qs8}}</td>
                                    <td class="text-capitalize">{{$quizer->qs9}}</td>
                                    <td>{{$quizer->score}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

                <div class="col-lg-12 m-auto mt-3">
                    <div class="card table-responsive">
                        <div class="card-header">
                            <h2 class="text-center">প্রশ্ন ও উত্তর</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr style="font-weight: 650">
                                    <th>প্রশ্ন ১</th>
                                    <th>উত্তর ১</th>
                                    <th>প্রশ্ন ২</th>
                                    <th>উত্তর ২</th>
                                    <th>প্রশ্ন ৩</th>
                                    <th>উত্তর ৩</th>
                                    <th>প্রশ্ন ৪</th>
                                    <th>উত্তর ৪</th>
                                    <th>প্রশ্ন ৫</th>
                                    <th>উত্তর ৫</th>
                                    <th>প্রশ্ন ৬</th>
                                    <th>উত্তর ৬</th>
                                    <th>প্রশ্ন ৭</th>
                                    <th>উত্তর ৭</th>
                                    <th>প্রশ্ন ৮</th>
                                    <th>উত্তর ৮</th>
                                    <th>প্রশ্ন ৯</th>
                                    <th>উত্তর ৯</th>
                                </tr>
                                @foreach ($answers as $answer )
                                    <tr style="font-weight: 500">
                                        <td>{{$answer->qs1}}</td>
                                        <td>{{$answer->ans1}}</td>
                                        <td>{{$answer->qs2}}</td>
                                        <td>{{$answer->ans2}}</td>
                                        <td>{{$answer->qs3}}</td>
                                        <td>{{$answer->ans3}}</td>
                                        <td>{{$answer->qs4}}</td>
                                        <td>{{$answer->ans4}}</td>
                                        <td>{{$answer->qs5}}</td>
                                        <td>{{$answer->ans5}}</td>
                                        <td>{{$answer->qs6}}</td>
                                        <td>{{$answer->ans6}}</td>
                                        <td>{{$answer->qs7}}</td>
                                        <td>{{$answer->ans7}}</td>
                                        <td>{{$answer->qs8}}</td>
                                        <td>{{$answer->ans8}}</td>
                                        <td>{{$answer->qs9}}</td>
                                        <td>{{$answer->ans9}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

        </div>
        <!--/ User Profile Content -->

          </div>
          <!-- / Content -->






        </div>
        <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>










    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{asset('backend')}}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{asset('backend')}}/assets/vendor/libs/typeahead-js/typeahead.js"></script>


    <!-- endbuild -->

    <!-- Vendors JS -->



    <!-- Main JS -->
    <script src="{{asset('backend')}}/assets/js/main.js"></script>


    <!-- Page JS -->



  </body>


</html>

<!-- beautify ignore:end -->

