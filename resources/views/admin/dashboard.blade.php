@extends('admin.layouts.master')

@section('title', 'Dashboard')

@section('content')
<!-- Breadcrumb -->
            <ol class="breadcrumb bc-colored bg-theme" id="breadcrumb">
                <li class="breadcrumb-item ">
                    <a href="">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>

            </ol>


            <div class="container-fluid">

                <div class="animated fadeIn">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="ecom-widget-chart-full">
                                <div class="chart-full-header">
                                    <div class="header-text">
                                        <div class="heading">Dashboard</div>
                                    </div>

                                    <div class="text-center chart-full-toolbar">
                                        <button class="btn btn-theme btn-sm">1 Month</button>
                                        <button class="btn btn-dark btn-sm">3 Months</button>
                                        <button class="btn btn-theme btn-sm">6 Months</button>
                                        <button class="btn btn-theme btn-sm">1 Year</button>
                                    </div>
                                    <div class="ecom-widget-chart-text text-center">$3,500,000</div>
                                    <div class="chart-full-period text-center">Total Sales :- Aug 2017 - Oct 2017 </div>
                                    <canvas class="chart-full-canvas" id="canvas-full-chart-light"></canvas>
                                </div>
                            </div>
                            <!-- end ecom-widget-chart-full -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <div class=" row row-margin-up">
                        <div class="col-md-3">
                            <div class="card ecom-widget-sales">
                                <div class="card-body">

                                    <div class="ecom-sales-icon text-center">
                                        <i class="mdi mdi-cart-outline"></i>
                                    </div>
                                    <!-- end ecom-sales-icon -->
                                    <h5 class="text-center">Tổng Đơn Hàng</h5>
                                    <ul>
                                        <li>Completed
                                            <span>276</span>
                                        </li>
                                        <li>Abondoned
                                            <span>276</span>
                                        </li>
                                        <li>Tax(%)
                                            <span>11%</span>
                                        </li>
                                        <li>Pending
                                            <span class="badge badge-theme">5</span>
                                        </li>
                                        <li>Sales
                                            <span>$ 200,125.12</span>
                                        </li>
                                    </ul>

                                    <div class="text-center btn-tool-bar">
                                        <button class="btn btn-theme ">More Details</button>
                                    </div>
                                    <!-- end btn-tool-bar -->
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end ecom-widget-sales -->
                        </div>
                        <!-- end col -->
                        <div class="col-md-3 ">
                            <div class="card ecom-widget-sales">
                                <div class="card-body">
                                    <div class="ecom-sales-icon text-center">
                                        <i class="mdi mdi-currency-usd"></i>
                                    </div>
                                    <!-- end ecom-sales-icon -->
                                    <h5 class="text-center">Đơn Hàng Mới</h5>

                                    <ul>
                                        <li>Completed
                                            <span>276</span>
                                        </li>
                                        <li>Carts
                                            <span>276</span>
                                        </li>
                                        <li>Tax(%)
                                            <span>11%</span>
                                        </li>
                                        <li>Pending
                                            <span class="badge badge-theme">5</span>
                                        </li>
                                        <li>Sales
                                            <span>$ 200,125.12</span>
                                        </li>
                                    </ul>

                                    <div class="text-center btn-tool-bar">
                                        <button class="btn btn-theme ">More Details</button>
                                    </div>
                                    <!-- end btn-tool-bar -->
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- ecom-widget-sales -->
                        </div>
                        <!-- end col -->

                        <div class="col-md-3 ">
                            <div class="card ecom-widget-sales">
                                <div class="card-body">

                                    <div class="ecom-sales-icon text-center">
                                        <i class="mdi mdi-cube-outline"></i>
                                    </div>
                                    <!-- end ecom-sales-icon -->
                                    <h5 class="text-center">Sản Phẩm</h5>
                                    <ul>
                                        <li>Orders
                                            <span>276</span>
                                        </li>
                                        <li>Abondoned
                                            <span>276</span>
                                        </li>
                                        <li>Tax(%)
                                            <span>11%</span>
                                        </li>
                                        <li>Pending
                                            <span class="badge badge-theme">5</span>
                                        </li>
                                        <li>Sales
                                            <span>$ 200,125.12</span>
                                        </li>
                                    </ul>

                                    <div class="text-center btn-tool-bar">
                                        <button class="btn btn-theme ">More Details</button>
                                    </div>
                                    <!-- end btn-tool-bar -->
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end ecom-widget-sales  -->
                        </div>
                        <!-- end col -->

                        <div class="col-md-3 ">
                            <div class="card ecom-widget-sales">
                                <div class="card-body">

                                    <div class="ecom-sales-icon text-center">
                                        <i class="mdi mdi-fingerprint"></i>
                                    </div>
                                    <!-- end ecom-sales-icon -->
                                    <h5 class="text-center">Tổng Khách Hàng</h5>
                                    <ul>
                                        <li>Completed
                                            <span>276</span>
                                        </li>
                                        <li> Carts
                                            <span>276</span>
                                        </li>
                                        <li>Tax(%)
                                            <span>11%</span>
                                        </li>
                                        <li>Pending
                                            <span class="badge badge-theme">5</span>
                                        </li>
                                        <li>Sales
                                            <span>$ 200,125.12</span>
                                        </li>
                                    </ul>

                                    <div class="text-center btn-tool-bar">
                                        <button class="btn btn-theme ">More Details</button>
                                    </div>
                                    <!-- end btn-tool-bar -->
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end  ecom-widget-sales -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-accent-theme users-count">
                                <div class="card-body">
                                    <i class="mdi mdi-account-circle"></i>
                                    <div class="count">2564</div>
                                    <div class="heading">Online</div>
                                    <p class="text-disabled">Number of all Online Users Who have
                                        <br/>Logged into the Website at the moment</p>

                                    <div class="row">
                                        <div class="col-md-4  online-users">
                                            <div class="count-small">2564</div>
                                            <div class="heading-small">Online</div>
                                        </div>
                                        <!-- online-users -->
                                        <div class="col-md-4 offline-users">
                                            <div class="count-small">10256</div>
                                            <div class="heading-small">Offline</div>
                                        </div>
                                        <!-- end offline-users -->
                                        <div class="col-md-4 pending-users">
                                            <div class="count-small">100</div>
                                            <div class="heading-small">Pending</div>
                                        </div>
                                        <!-- end pending users -->
                                    </div>
                                    <!-- end inside row -->

                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card users-count -->
                        </div>
                        <!-- end col -->
                        <div class="col-md-8">
                            <div class="card card-accent-theme">
                                <div class="card-body">
                                    <div class="h5 text-dark">
                                        <strong>Transaction History</strong>
                                    </div>
                                    <small class="text-theme">BASED ON LAST 30 DAYS</small>
                                    <div id="area-chart"></div>
                                </div>

                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card history-transaction card-accent-theme">
                                <div class="card-body">
                                    <div class="header">
                                        <div class="heading">History</div>
                                        <div class="pull-right header-tool">
                                            <ul>
                                                <li>
                                                    <a href="" class="active">Today</a>
                                                </li>
                                                <li>
                                                    <a href="">Yesterday</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="transaction-list">
                                        <a href="">
                                            <div class="details">
                                                <div class="u-img">
                                                    <img src="http://via.placeholder.com/100x100" alt="user" />

                                                </div>
                                                <i class="mdi mdi-arrow-bottom-left text-danger"></i>
                                                <div class="heading">0.85 USD</div>
                                                <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. orem, ipsum dolor
                                                    sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="transaction-list">
                                        <a href="">
                                            <div class="details">
                                                <div class="u-img">
                                                    <img src="http://via.placeholder.com/100x100" alt="user" />

                                                </div>
                                                <i class="mdi mdi-arrow-bottom-left text-warning"></i>
                                                <div class="heading">5.85 GPD</div>
                                                <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. orem, ipsum dolor
                                                    sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="transaction-list">
                                        <a href="">
                                            <div class="details">
                                                <div class="u-img">
                                                    <img src="http://via.placeholder.com/100x100" alt="user" />

                                                </div>
                                                <i class="mdi mdi-arrow-top-right text-success"></i>
                                                <div class="heading">1.23 LKR</div>
                                                <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. orem, ipsum dolor
                                                    sit amet consectetur adipisicing elit. </p>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="text-center">
                                        <button class="btn btn-theme btn-sm">Show More</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-accent-theme sales-category-widget">
                                <div class="card-body">
                                    <div class="header">
                                        <div class="heading">Category</div>
                                        <div class="pull-right header-tool">
                                            <ul>
                                                <li>
                                                    <a href="" class="active">Today</a>
                                                </li>
                                                <li>
                                                    <a href="">Yesterday</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- header -->

                                    <div class="chart text-center">
                                        <input class="knob" data-width="200" data-min="-100" value="48%" data-fgColor="#0358C7" data-thickness=.1 data-angleOffset=-125
                                            data-angleArc=250 data-rotation="anticlockwise">
                                    </div>

                                    <div class="category-progress">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="category-progress">
                                                    <strong>80%</strong>
                                                    <small class="pull-right">Food</small>

                                                    <div class="progress xs ">
                                                        <div class="progress-bar bg-warning" style="width: 80%; " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end category-process -->
                                            </div>
                                            <!-- end inside col -->
                                            <div class="col-md-6">
                                                <div class="category-progress">
                                                    <strong>30%</strong>
                                                    <small class="pull-right">House</small>

                                                    <div class="progress xs ">
                                                        <div class="progress-bar bg-success" style="width: 30%; " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end category-process -->
                                            </div>
                                            <!-- end inside col -->
                                        </div>
                                        <!-- end inside row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="category-progress">
                                                    <strong>40%</strong>
                                                    <small class="pull-right">Car</small>

                                                    <div class="progress xs ">
                                                        <div class="progress-bar bg-danger" style="width: 40%; " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="category-progress">
                                                    <strong>90%</strong>
                                                    <small class="pull-right">food</small>

                                                    <div class="progress xs ">
                                                        <div class="progress-bar bg-info" style="width: 90%; " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button class="btn btn-theme btn-sm"> More Details</button>
                                        </div>

                                    </div>
                                    <!-- end category-process -->
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end sales-category-widget -->
                        </div>
                        <!-- end col -->
                        <div class="col-md-4">
                            <div class=" card ecom-widget-payments card-accent-theme">
                                <div class="card-body">
                                    <h5>Payments</h5>
                                    <small>Top Payments Methods by Category (7 day)</small>

                                    <ul>
                                        <li class="credit">Credit
                                            <span>$329,99</span>
                                        </li>
                                        <li class="cash">Cash
                                            <span>$229,99</span>
                                        </li>
                                        <li class="other">Other
                                            <span>$69,99</span>
                                        </li>
                                    </ul>

                                    <ul>
                                        <li class="cash">Food
                                            <span>$229,99</span>
                                        </li>
                                        <li class="other">Petty
                                            <span>$69,99</span>
                                        </li>
                                    </ul>
                                    <div class="text-center">
                                        <button class="btn btn-theme btn-sm"> More Details</button>
                                    </div>
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- ecom-widget-payments  -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-md-7">
                            <div class="card card-accent-theme">
                                <div class=" products-widget">
                                    <div class="header">
                                        <div class="heading">Category</div>
                                        <div class="pull-right header-tool">
                                            <ul>
                                                <li>
                                                    <a href="" class="active">Today</a>
                                                </li>
                                                <li>
                                                    <a href="">Yesterday</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end header -->
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tr>
                                                <td class="doc-img">
                                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                                </td>
                                                <td class="document">
                                                    <a href="">
                                                        <div class="heading">Sofa Brown</div>
                                                        <p class="description">ABC Network </p>
                                                    </a>
                                                </td>
                                                <td class="date">26/04/2017</td>

                                                <td class="status">
                                                    <span class="badge badge-boxed badge-warning">Checkin</span>
                                                </td>
                                                <td class="user">

                                                    <div class="heading">Natalie Well</div>
                                                    <br/>
                                                    <small>20/04/2017 </small>

                                                </td>
                                                <td class="action">
                                                    <button class="btn btn-theme btn-sm">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </button>
                                                </td>

                                            </tr>
                                            <!-- end tr -->

                                            <tr>
                                                <td class="doc-img">
                                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                                </td>
                                                <td class="document">
                                                    <a href="">
                                                        <div class="heading">Stand</div>
                                                        <p class="description">Builders </p>
                                                    </a>
                                                </td>
                                                <td class="date">26/04/2017</td>

                                                <td class="status">
                                                    <span class="badge badge-boxed badge-success">Delevired</span>
                                                </td>
                                                <td class="user">

                                                    <div class="heading">John Doe</div>
                                                    <br/>
                                                    <small>20/04/2017 </small>

                                                </td>
                                                <td class="action">
                                                    <button class="btn btn-theme btn-sm">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- end tr -->

                                            <tr>
                                                <td class="doc-img">
                                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                                </td>
                                                <td class="document">
                                                    <a href="">
                                                        <div class="heading">Table</div>
                                                        <p class="description">ABC Network </p>
                                                    </a>
                                                </td>
                                                <td class="date">26/04/2017</td>

                                                <td class="status">
                                                    <span class="badge badge-boxed badge-danger">Returned</span>
                                                </td>
                                                <td class="user">

                                                    <div class="heading">Natalie Well</div>
                                                    <br/>
                                                    <small>20/04/2017 </small>

                                                </td>
                                                <td class="action">
                                                    <button class="btn btn-theme btn-sm">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- end tr -->

                                            <tr>
                                                <td class="doc-img">
                                                    <img src="http://via.placeholder.com/100x100" alt="user" />
                                                </td>
                                                <td class="document">
                                                    <a href="">
                                                        <div class="heading">Chair</div>
                                                        <p class="description">Suman Co. </p>
                                                    </a>
                                                </td>
                                                <td class="date">26/04/2017</td>

                                                <td class="status">
                                                    <span class="badge badge-boxed badge-info">Progress</span>
                                                </td>
                                                <td class="user">

                                                    <div class="heading">Natalie Well</div>
                                                    <br/>
                                                    <small>20/04/2017 </small>

                                                </td>
                                                <td class="action">
                                                    <button class="btn btn-theme btn-sm">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                                <!-- end product-widget -->

                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end-col -->

                        <div class="col-md-5 summary-widgets">

                            <div class="card card-accent-theme">

                                <div class="card-body">
                                    <h6 class="text-theme">Summary</h6>
                                    <div class="row">
                                        <div class="col-md-6 summary-widget-1">
                                            <div class="card ">
                                                <div class="card-body">
                                                    <div class="number">21</div>
                                                    <small>Active Users</small>
                                                    <div class="progress xs ">
                                                        <div class="progress-bar bg-info" style="width: 80%; " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 summary-widget-1">
                                            <div class="card ">
                                                <div class="card-body">
                                                    <div class="number">38</div>
                                                    <small>Over Due</small>
                                                    <div class="progress xs ">
                                                        <div class="progress-bar bg-danger" style="width: 60%; " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 summary-widget-1">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="number">120</div>
                                                    <small>Sales</small>
                                                    <div class="progress xs ">
                                                        <div class="progress-bar bg-success" style="width: 60%; " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 summary-widget-1">
                                            <div class="card ">
                                                <div class="card-body">
                                                    <div class="number">12</div>
                                                    <small>expense</small>
                                                    <div class="progress xs ">
                                                        <div class="progress-bar bg-warning" style="width: 60%; " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 summary-widget-1">
                                            <div class="card ">
                                                <div class="card-body">
                                                    <div class="number">21</div>
                                                    <small>Active Users</small>
                                                    <div class="progress xs ">
                                                        <div class="progress-bar bg-info" style="width: 10%; " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 summary-widget-1">
                                            <div class="card ">
                                                <div class="card-body">
                                                    <div class="number">10</div>
                                                    <small>Over Due</small>
                                                    <div class="progress xs ">
                                                        <div class="progress-bar bg-danger" style="width: 20%; " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end col summery widget -->

                    </div>
                    <!-- end row -->
                </div>
                <!-- end animated fadeIn -->
            </div>
            <!-- end container-fluid -->
@endsection