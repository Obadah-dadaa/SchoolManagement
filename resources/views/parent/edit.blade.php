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
    <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../../assets/css/nice-select.css">
    <link rel="stylesheet" href="../../assets/css/jquery-ui.min.css">
    <!-- Theme Styles -->
    <link rel="stylesheet" href="../../assets/css/theme.css">
    <link rel="stylesheet" href="../../assets/css/style.css">

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
        <div class="u-header-left">
            <a class="u-header-logo"> 
                <img src="../../assets/img/school.png" style="padding-right: 30%" class="u-logo-desktop" width="280"alt="school management">
            </a>
        </div>

        <div class="u-header-middle">
            <a class="js-sidebar-invoker u-sidebar-invoker text-danger" href="#!" data-is-close-all-except-this="true" data-target="#sidebar">
                <i class="fa fa-bars u-sidebar-invoker__icon--open"></i>
                <i class="fa fa-times u-sidebar-invoker__icon--close"></i>
            </a>

            <div class="u-header-search" data-search-mobile-invoker="#headerSearchMobileInvoker" data-search-target="#headerSearch">
                <a id="headerSearchMobileInvoker" class="btn btn-link input-group-prepend u-header-search__mobile-invoker" href="#!">
                    <i class="fa fa-search"></i>
                </a>

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
                            <h2 class="h4 card-header-title"><a  href="#">Inbox</h2>
                        </div>
                        <div class="card-footer py-3">
                            <a class="btn btn-block btn-outline-primary" href="{{ route('contact') }}">Add  message</a>
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
                    <img class="u-avatar--xs img-fluid rounded-circle mr-2 .bg-gradient" src="../../../../assets/img/student.png" alt="User Profile">
                    <span class="d-none d-sm-inline-block text-danger">
                        <small class="fas fa-ellipsis-v"></small>
                    </span>
                </a>

                <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink" style="width: 260px;">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="d-flex align-items-center link-dark" href="{{ route('logout') }}"
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
        <section class="es-form-area" style="padding-top:20px;">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5">
                    <h2 style="padding-left:280px; font-size:40px; color:white;">تعديل معلومات حساب ولي الأمر</h2>
                </header>
                <div class="card-body col-lg-8">
                    <form action="{{route('parent.update',['id'=>$parent->id])}}" method="POST"  class="es-form es-add-form was-validated" >
                @csrf
                        <div  class="row">
                            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                <label for="title">اسم الولي</label>
                                <input name="name" value={{$parent->name}}>
                            </div>

                            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                <label for="email">البريد الاكتروني </label>
                                <input name="email"  value={{$parent->email}}>
                            </div>
                            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                <label for="title">العنوان الحالي </label>
                                <input name="address"  value={{$parent->address}}>
                            </div>
                            <div style="padding-left:60px;" class="col-lg-6  offset-lg-6 col-md-12 mb-4" >
                                <button type="submit" class="btn btn-dark align-items-center  pl-4  pr-4">تعديل </button>
                            </div>
                        </div>

                </form>
                </div>
            </div>
        </section>

    </div>
</div>
</main>

<!-- Global Vendor -->
<script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="../../assets/js/jquery.nice-select.min.js"></script>
<script src="../../assets/js/jquery-ui.min.js"></script>

<!-- Initialization  -->
<script src="../../assets/js/sidebar-nav.js"></script>
<script src="../../assets/js/main.js"></script>
<script src="../../assets/js/dashboard-page-scripts.js"></script>
<!--<script src="../../assets/js/scripts.js"></script>-->
</body>
</html>
