<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Admin, Dashboard, Bootstrap, Vegetable, GreenFood, Organic Food" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Vegetable - @yield('title')</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('admin/img/favicon/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('admin/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('admin/fonts/md-fonts/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('admin/libs/animate.css/animate.min.css') }}">

    <!-- jquery-loading -->
    <link rel="stylesheet" href="{{ asset('admin/libs/jquery-loading/dist/jquery.loading.min.css') }}">
    <!-- octadmin main style -->
    <link id="pageStyle" rel="stylesheet" href="{{ asset('admin/css/style.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="app sidebar-fixed aside-menu-off-canvas aside-menu-hidden header-fixed ">
    <header class="app-header navbar">
        <div class="hamburger hamburger--arrowalt-r navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
        <!-- end hamburger -->
        <a class="navbar-brand" href="../../contents/dashboards/dashboard-sales.html">
            <strong>Vegetable</strong>
        </a>

        <div class="hamburger hamburger--arrowalt-r navbar-toggler sidebar-toggler d-md-down-none mr-auto">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
        <!-- end hamburger -->

        <div class="navbar-search">
            <button type="submit" class="navbar-search-btn">
                <i class="mdi mdi-magnify"></i>
            </button>
            <input type="text" class="navbar-search-input" placeholder="Find User a user, team, meeting ..">
        </div>
        <!-- end navbar-search -->

        <ul class="nav navbar-nav ">
            <li class="nav-item dropdown">
                <a class="nav-link " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-bell-ring"></i>
                    <span class="notification hertbit"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right notification-list animated flipInY nicescroll-box">

                    <div class="dropdown-header">
                        <strong>Notification</strong>
                        <span class="badge badge-pill badge-theme pull-right"> new 5</span>
                    </div>
                    <!--end dropdown-header -->

                    <div class="wrap">

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                </div>
                                <!-- end u-img -->
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong>A New Order has Been Placed </strong>
                                    </div>
                                    <small>2 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown-item -->

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                </div>
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong>Order Updated</strong>
                                    </div>
                                    <small>10 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown-item -->

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                </div>
                                <!-- end u-img -->
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong>A New Order has Been Placed </strong>
                                    </div>
                                    <small>30 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown -->

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                </div>
                                <!-- end u-img -->
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong> Order has Been Rated </strong>
                                    </div>
                                    <small>32 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown -->
                    </div>
                    <!-- end wrap -->

                    <div class="dropdown-footer ">
                        <a href="">
                            <strong>See all messages (150) </strong>
                        </a>
                    </div>
                    <!-- end dropdown-footer -->
                </div>
                <!-- end notification-list -->

            </li>
            <!-- end nav-item -->

            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-forum"></i>
                    <span class="notification hertbit"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right message-list animated flipInY nicescroll-box">

                    <div class="dropdown-header">
                        <strong>Messages</strong>
                        <span class="badge badge-pill badge-theme pull-right"> new 15</span>
                    </div>
                    <!-- end dropdown-header -->
                    <div class="wrap">

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                    <span class="notification online"></span>
                                </div>
                                <!-- end u-img -->
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong>Natalie Wall</strong>
                                    </div>
                                    <p class="text-muted">Anyways i would like just do it</p>
                                    <small>2 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown-item -->

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                    <span class="notification offline"></span>
                                </div>
                                <!-- end u-img -->
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong>Steve johns</strong>
                                    </div>
                                    <p class="text-muted">There is Problem inside the Application</p>
                                    <small>10 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown-item -->

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                    <span class="notification buzy"></span>
                                </div>
                                <!-- end u-img -->
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong>Taniya Jan</strong>
                                    </div>
                                    <p class="text-muted">Please Checkout The Attachment</p>
                                    <small>30 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown-item -->

                        <a href="#" class="dropdown-item">
                            <div class="message-box">
                                <div class="u-img">
                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                    <span class="notification away"></span>
                                </div>
                                <!-- end u-img -->
                                <div class="u-text">
                                    <div class="u-name">
                                        <strong>Tim Johns</strong>
                                    </div>
                                    <!-- end u-name -->
                                    <p class="text-muted">Anyways i would like just do it</p>
                                    <small>32 minuts ago</small>
                                </div>
                                <!-- end u-text -->
                            </div>
                            <!-- end message-box -->
                        </a>
                        <!-- end dropdown-item -->
                    </div>
                    <!-- end wrap -->
                    <div class="dropdown-footer ">
                        <a href="">
                            <strong>See all messages (150) </strong>
                        </a>
                    </div>
                    <!-- end dropdown-footer -->
                </div>
                <!-- end message-list -->
            </li>
            <!-- end nav-item -->


            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-cards"></i>
                    <span class="notification hertbit"></span>
                </a>
                <!-- end navlink -->
                <div class="dropdown-menu dropdown-menu-right task-list animated flipInY nicescroll-box">

                    <div class="dropdown-header">
                        <strong>Task List</strong>
                        <span class="badge badge-pill badge-theme pull-right"> new 3</span>
                    </div>
                    <!-- end dropdown-header -->
                    <div class="wrap">
                        <a href="#" class="dropdown-item">
                            <strong>Task 1</strong>
                            <small class="pull-right">50% Complete</small>
                            <div class="progress xs">
                                <div class="progress-bar bg-danger" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">

                                </div>
                            </div>
                        </a>
                        <!-- end dropdown-item -->

                        <a href="#" class="dropdown-item">
                            <strong>Task 2</strong>
                            <small class="pull-right">20% Complete</small>

                            <div class="progress xs">
                                <div class="progress-bar bg-success" style="width: 20%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">

                                </div>
                            </div>
                        </a>

                        <!-- end dropdown-item -->
                        <a href="#" class="dropdown-item">
                            <strong>Task 3</strong>
                            <small class="pull-right">80% Complete</small>

                            <div class="progress xs ">
                                <div class="progress-bar bg-warning" style="width: 80%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">

                                </div>
                            </div>
                        </a>
                        <!-- end dropdown-item -->

                        <a href="#" class="dropdown-item">
                            <strong>Task 4</strong>
                            <small class="pull-right">60% Complete</small>

                            <div class="progress xs ">
                                <div class="progress-bar bg-info" style="width: 60%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">

                                </div>
                            </div>
                        </a>
                        <!-- end dropdown-item -->
                    </div>
                    <!-- end wrap -->
                    <div class="dropdown-footer ">
                        <a href="">
                            <strong>view all task (20) </strong>
                        </a>
                    </div>
                    <!-- end dropdown-footer -->

                </div>
                <!-- dropdown-menu -->
            </li>
            <!-- end navitem -->

            <li class="nav-item dropdown">
                <a class="btn btn-round btn-theme btn-sm" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">

                    <span class="">admin
                        <i class="fa fa-arrow-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right user-menu animated flipInY ">
                    <div class="wrap">
                        <div class="dw-user-box">
                            <div class="u-img">
                                <img src="http://via.placeholder.com/100x100" alt="user" />
                            </div>
                            <div class="u-text">
                                <h5>Natalie Wall</h5>
                                <p class="text-muted">wall@gmail.com</p>
                                <a href="#" class="btn btn-round btn-theme btn-sm">View Profile</a>
                            </div>
                        </div>
                        <!-- end dw-user-box -->

                        <a class="dropdown-item" href="#">
                            <i class="fa fa-user"></i> Profile</a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-wrench"></i> Settings</a>

                        <div class="divider"></div>

                        <a class="dropdown-item" href="#">
                            <i class="fa fa-lock"></i> Logout</a>
                    </div>
                    <!-- end wrap -->
                </div>
                <!-- end dropdown-menu -->
            </li>
            <!-- end nav-item -->


        </ul>

    </header>
    <!-- end header -->

    <div class="app-body">
        <div class="sidebar" id="sidebar">
            <nav class="sidebar-nav" id="sidebar-nav-scroller">
                <ul class="nav">
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">
                            <i class="mdi mdi-gauge"></i> Dashboard
                        </a>

                    </li>


                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="{{ route('admin.categories.index') }}">
                            <i class="mdi mdi-cube-outline"></i> Danh Mục Sản Phẩm</a>

                       <!--  <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="../../contents/pages/pages-signup.html">Rau quả -Trái cây</a>
                            </li>
                        </ul> -->

                    </li>

                     <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="{{ route('admin.products.index') }}">
                            <i class="mdi mdi-food-variant"></i> Sản Phẩm
                        </a>

                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-book-open-page-variant"></i> Đơn Đặt Hàng
                        </a>

                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="{{ route('admin.users.index') }}">
                            <i class="mdi mdi-account-star"></i> Khách Hàng
                        </a>

                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-newspaper"></i> Tin Tức
                        </a>

                    </li>


                    <li class="nav-title">
                        Forms Tables & widgets
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="mdi mdi-file-document"></i> Forms</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="../../contents/forms/forms-form-layouts.html"> Form Layouts </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../contents/forms/forms-form-elements.html"> Form Elements</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../../contents/forms/forms-form-validation.html"> Form Validation</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../../contents/forms/forms-custom-elements.html"> Custom Elements </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../contents/forms/forms-form-plugins.html"> Form Plugins </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../contents/forms/forms-form-masks.html"> Form Masks </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../contents/forms/forms-form-file-upload.html"> File Upload </a>
                            </li>

                            <li class="nav-item nav-dropdown">
                                <a class="nav-link nav-dropdown-toggle" href="#"> Editors </a>
                                <ul class="nav-dropdown-items">
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../contents/forms/forms-form-editors-summernote.html"> Summernote</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="../../contents/forms/forms-form-editors-markdown.html"> Markdown</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="mdi mdi-table-large"></i> Tables</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="../../contents/tables/tables-basic-table.html"> Basic Tables</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../contents/tables/tables-table-layouts.html"> Table Layouts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../contents/tables/tables-data-table.html"> Data Tables</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="mdi mdi-widgets"></i> Widgets</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="../../contents/widgets/widgets-satistics.html"> Satistics Widget </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../contents/widgets/widgets-data.html"> Data Widget</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../contents/widgets/widgets-chart.html"> Chart Widget</a>
                            </li>

                        </ul>
                    </li>


                </ul>
            </nav>

        </div>
        <!-- end sidebar -->

        <main class="main">

            @yield('content')
        </main>
        <!-- end main -->

        
    </div>
    <!-- end app-body -->

    <footer class="app-footer">
        <a href="#" class="text-theme">Vegetable Admin</a> &copy; 2018 Vegetable.
    </footer>
    
    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('admin/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/ibs/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/libs/PACE/pace.min.js') }}"></script>
    <script src="{{ asset('admin/libs/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/libs/nicescroll/jquery.nicescroll.min.js') }}"></script>

    <script src="{{ asset('admin/libs/jquery-knob/dist/jquery.knob.min.js') }}"></script>

    <!--morris js -->
    <script src="{{ asset('admin/libs/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('admin/libs/charts-morris-chart/morris.min.js') }}"></script>

    <!-- jquery-loading -->
    <script src="{{ asset('admin/libs/jquery-loading/dist/jquery.loading.min.js') }}"></script>
    <!-- octadmin Main Script -->
    <script src="{{ asset('admin/js/app.js') }}"></script>

    <!-- dashboard-ecom script -->
    <script src="{{ asset('admin/js/dashboard-ecom-widgets.js') }}"></script>

</body>

</html>