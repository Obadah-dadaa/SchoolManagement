<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    <title>Dar Al-hekma school | Dashboard </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Bootstrap Theme, Freebies, Dashboard, MIT license">
    <meta name="description" content="Stream - Dashboard UI Kit">
    <meta name="author" content="htmlstream.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="1.png" type="image/x-icon">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Components Vendor Styles -->
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css">
    <!-- Theme Styles -->
    <link rel="stylesheet" href="../assets/css/theme.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Custom Charts -->
    <style>
        .js-doughnut-chart {
            width: 70px !important;
            height: 70px !important;
        }
    </style>
</head>
<!-- End Head -->

<body>
<!-- Header (Topbar) -->
<header class="u-header">
    <div class="u-header-left" >
        <a class="u-header-logo"  >
            <img class="u-logo-desktop" src="../assets/img/22.png" width="250px" height="110px" alt="school management">
        </a>
    </div>

    <div class="u-header-middle">
        <a class="js-sidebar-invoker u-sidebar-invoker text-danger" href="#!" data-is-close-all-except-this="true" data-target="#sidebar">
            <i class="fa fa-bars u-sidebar-invoker__icon--open"></i>
            <i class="fa fa-times u-sidebar-invoker__icon--close"></i>
        </a>

        <div class="u-header-search" data-search-mobile-invoker="#headerSearchMobileInvoker" data-search-target="#headerSearch">

            <div id="search3" class="search-box">
                <form action="/parent/search" method="GET">
                    <div class="input-group">
                        <input type="text" id="searchBar" name="search_p" placeholder="البحث">
                        <button type="submit" class="bg-gradient text-white">بحث</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="u-header-right">
        <!-- Activities -->
        <div class="dropdown mr-4">
            <a class="text-danger" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                    <span class="h3">
                        <i class="far fa-envelope"></i>
                    </span>
                <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-success"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
                <div class="card">
                    <div class="card-header d-flex align-items-center py-3">
                        <h2 class="h4 card-header-title">Inbox</h2>
                        <!-- <a class="ml-auto" href="#">Clear all</a> -->
                    </div>
                    <div class="card-footer py-3">
                        <a class="btn btn-block btn-outline-primary" href="#">View all messages</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Activities -->

        <!-- Notifications -->
        <div class="dropdown mr-3">
            <a class="text-danger" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                    <span class="h3">
                        <i class="far fa-bell"></i>
                    </span>
                <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-danger"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
                <div class="card">
                    <div class="card-header d-flex align-items-center py-3">
                        <h2 class="h4 card-header-title">Notifications</h2>
                        <a class="ml-auto" href="#">Clear all</a>
                    </div>

                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <div class="u-icon u-icon--sm rounded-circle bg-danger text-white mr-3">
                                        <i class="fab fa-dribbble"></i>
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">new notification</h4>
                                            <small class="text-muted ml-auto"></small>
                                        </div>

                                        <p class="text-truncate mb-0" style="max-width: 250px;">
                                            <span class="text-primary"></span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="card-footer py-3">
                        <a class="btn btn-block btn-outline-primary" href="#">View all notifications</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Notifications -->

        <!-- User Profile -->
        <div class="dropdown ml-2">
            <a class="link-muted d-flex align-items-center us-u-avatar-wrap" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                <img class="u-avatar--xs img-fluid rounded-circle mr-2 .bg-gradient" src="../assets/img/avatars/img1.png" alt="User Profile">
                <span class="d-none d-sm-inline-block text-danger">
                        <small class="fas fa-ellipsis-v"></small>
                    </span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink" style="width: 260px;">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-4">
                                <a class="d-flex align-items-center link-dark" href="#!">
                                    <span class="h3 mb-0"><i class="far fa-list-alt text-muted mr-3"></i></span> Settings
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center link-dark" href="{{ route('logout') }}">
                                <span class="h3 mb-0"><i class="far fa-share-square text-muted mr-3"></i></span> Sign Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End User Profile -->
    </div>
</header>
<!-- End Header (Topbar) -->

<main class="u-main" role="main">
    <!-- Sidebar -->
    <aside id="sidebar" class="u-sidebar">
        <div class="u-sidebar-inner bg-gradient bdrs-30">
            <header class="u-sidebar-header">
                <a class="u-sidebar-logo" href="index.html">
                    <img class="img-fluid" src="../assets/img/logo.png" width="124" alt="Stream Dashboard">
                </a>
            </header>

            <nav class="u-sidebar-nav">
                <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link active" href="">
                            <i class="fas fa-tachometer-alt u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title"> الصفحة الرئيسيّة</span>
                        </a>
                    </li>

                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="#!" data-target="#classes">
                            <i class="fas fa-chalkboard-teacher u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">الصفوف الدراسية</span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="classes" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('grade.view') }}">
                                    <span class="u-sidebar-nav-menu__item-title">عرض الصفوف الدراسية</span>
                                </a>
                            </li>

                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('grade.create') }}">
                                    <span class="u-sidebar-nav-menu__item-title">إضافة صف دراسي جديد</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="#!" data-target="#subMenu1">
                            <i class="fas fa-calendar-alt u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">برامج الدوام</span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="subMenu1" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="routines-accounting-add.html">
                                    <span class="u-sidebar-nav-menu__item-title"> عرض برامج دوام الطلبة  </span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="routines-accounting.html">
                                    <span class="u-sidebar-nav-menu__item-title">  عرض برامج دوام المدرسين </span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="routines-mathmetics-add.html">
                                    <span class="u-sidebar-nav-menu__item-title"> إنشاء برنامج دوام جديد  </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="#!" data-target="#marks">
                            <i class="far fa-clipboard u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">النتائج الامتحانية </span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="marks" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('exam.show') }}">
                                    <span class="u-sidebar-nav-menu__item-title">  عرض النتائج الامتحانية لمادة </span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('exam.show-marks') }}">
                                    <span class="u-sidebar-nav-menu__item-title"> عرض النتائج الامتحانية لطالب </span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('exam.create') }}">
                                    <span class="u-sidebar-nav-menu__item-title">إضافة نتائج امتحان</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="#!" data-target="#questions">
                            <i class="far fa-id-card u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">الأساتذة</span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="questions" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">

                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{route('teacher.index')}}">
                                    <span class="u-sidebar-nav-menu__item-title">عرض جميع الأساتذة</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{route('teacher.create')}}">
                                    <span class="u-sidebar-nav-menu__item-title">إضافة حساب جديد</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- parents -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="#!" data-target="#students">
                            <i class="far fa-id-card u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">أولياء الأمور</span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="students" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">

                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('parents') }}">
                                    <span class="u-sidebar-nav-menu__item-title">عرض أولياء الأمور</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('parent.create') }}">
                                    <span class="u-sidebar-nav-menu__item-title">إضافة حساب ولي أمر جديد</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="#!" data-target="#stud">
                            <i class="far fa-id-card u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">الطلّاب</span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="stud" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">

                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('students') }}">
                                    <span class="u-sidebar-nav-menu__item-title"> عرض الطلّاب</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="{{ route('attendance') }}">
                                    <span class="u-sidebar-nav-menu__item-title">عرض طلبات الغياب</span>
                                </a>
                            </li>
                        </ul>
                </ul>
                </li>
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#online-exam">
                        <i class="fas fa-money-check-alt u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title">الرسوم المالية </span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="online-exam" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="{{route('finalfee.create')}} ">
                                <span class="u-sidebar-nav-menu__item-title">إضافة رسم مالي </span>
                            </a>
                        </li>
                    </ul>


                    <!-- Profile -->
                <li class="u-sidebar-nav-menu__item">
                    <a class="u-sidebar-nav-menu__link" href="#!" data-target="#profile">
                        <i class="fa fa-user u-sidebar-nav-menu__item-icon"></i>
                        <span class="u-sidebar-nav-menu__item-title"> الحساب الشخصي</span>
                        <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                        <span class="u-sidebar-nav-menu__indicator"></span>
                    </a>

                    <ul id="profile" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="my-profile.html">
                                <span class="u-sidebar-nav-menu__item-title"الحسابات الشخصية للإادرة</span>
                            </a>
                        </li>
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="edit-my-profile.html">
                                <span class="u-sidebar-nav-menu__item-title">تعديل حسابي الشخصي</span>
                            </a>
                        </li>
                    </ul>
                </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- End Sidebar -->

    <div class="u-content">
        <div class="u-body">
            <!-- breadcumb-area -->
            <section class="breadcumb-area card bg-gradient mb-5">
                <div class="bread-cumb-content card-body d-flex align-items-center">
                    <div class="breadcumb-heading">
                        <h2 class="text-white"  >مدرسة دار الحكمة الخاصة</h2>
                    </div>
                    <div class="breadcumb-image ml-auto">
                        <img src="../assets/img/teachers.png" style="margin-top:200px;" height="350px" width="350" alt="">
                    </div>
                </div>
            </section>

{{--///////////////////////////////////////////////////////--}}
            <section class="es-form-area">
                <div class="card">
                    <div class="card-body">
                        <div class="attendances-list-wrap mt-3">
                            <div class="table-responsive">
                                <table class="table mb-6">
                                    <thead class="bg-gradient">
                                    <tr>
                                        <th scope="col" class="text-white text-center"></th>
                                        <th scope="col" class="text-white text-center">الاسم </th>
                                        <th scope="col" class="text-white text-center">رقم الهاتف</th>
                                        <th scope="col" class="text-white text-center"> <i class="far fa-id-card u-sidebar-nav-menu__item-icon"style='font-size:20px;'></i>
                                        </th>
                                        <th scope="col" class="color-white text-center" ><i class='fas fa-user-friends' style='font-size:20px;color:white'></i>
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($parents as $parent)
                                        <tr>
                                            <td  class="text-center" ><img src="assets/img/parent.png" alt="" width="40px" class="rounded-circle"></td>
                                            <td class="text-center">{{$parent->name}}</td>
                                            <td class="text-center">{{$parent->phone_number}}</td>
                                            <td class="text-center">
                                                <a href="{{ route('parent.show',['id'=>$parent->id])}}" class="btn  btn-outline-dark  es-am-btn">الحساب الشخصي</a></td>
                                            <form action="{{route('student.show',['id'=>$parent->id])}}">
                                                <input name="parent_id" value="{{$parent->id}}" hidden>
                                                <td class="text-center"> <button type="submit" class="btn  btn-outline-dark  es-am-btn"> إدارة الأبناء</button>
                                                </td>
                                            </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
{{--/////////////////////////////////////////////////////--}}



















        </div>
    </div>
</main>






<!-- Global Vendor -->
<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="../assets/js/jquery.nice-select.min.js"></script>
<script src="../assets/js/jquery-ui.min.js"></script>
<!-- Initialization  -->
<script src="../assets/js/sidebar-nav.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/dashboard-page-scripts.js"></script>
<!--<script src="../assets/js/scripts.js"></script>-->
</body>
</html>
