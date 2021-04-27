@extends('backend.layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title text-uppercase font-medium font-14">Dashboard</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ml-auto">
                    <li><a href="#">Dashboard</a></li>
                </ol>
                <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank"
                    class="btn btn-danger  d-none d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade
                    to Pro</a>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Three charts -->
    <!-- ============================================================== -->
    <div class="row justify-content-center">
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Current %</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter">0</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info1">
                <h3 class="box-title">Current Bank</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash2"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter text-purple">None</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info2">
                <h3 class="box-title">Total Income</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter text-info">USD 0.00</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info3">
                <h3 class="box-title">Available CMU</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter text-info">0</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info4">
                <h3 class="box-title">Fund Avl.</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter text-info">USD 0.00</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info5">
                <h3 class="box-title">POX Wallet(Withdrawal)</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter text-info">USD 0.00</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info6">
                <h3 class="box-title">Team Income</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter text-info">USD 0.00</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info7">
                <h3 class="box-title">Direct Inc.</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter text-info">USD 0.00</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info8">
                <h3 class="box-title">CMU Output</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter text-info">POX 0.00</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info9">
                <h3 class="box-title">Priviege Income</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter text-info">USD 0.00</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info10">
                <h3 class="box-title">Reward Income</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter text-info">USD 0.00</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="white-box analytics-info11">
                <h3 class="box-title">Withdrawal Applicable</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ml-auto"><span class="counter text-info">USD 0.00</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- PRODUCTS YEARLY SALES -->
    <!-- ============================================================== -->
    <div class="row mt-4">
        <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
            <div class="white-box py-1">
                <h3 class="box-title">Products Yearly Sales</h3>
                <div id="ct-visits" style="height: 405px;">
                    <div class="chartist-tooltip" style="top: -17px; left: -12px;"><span
                            class="chartist-tooltip-value">6</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-4 position-relative bg-white">
                    <div class="card-body">
                        <span class="display-6"><span class="font-normal">23</span></span>
                        <h4 class="pb-2 mb-0">Thursday</h4>
                        <span class="weight-border"></span>
                        <h5 class="pt-3">March 2017</h5>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bg-light text-muted">
                        <div class="table-responsive">
                            <table class="calendar-schedule-table">
                                <tbody>
                                    <tr>
                                        <td colspan="5">
                                            <h1 class="month-option text-dark">March</h1>
                                        </td>
                                        <td></td>
                                        <td><a href="#" class="font-24"><i class="ti-plus text-dark"></i></a></td>
                                    </tr>
                                    <tr class="text-uppercase">
                                        <td>Sun</td>
                                        <td>Mon</td>
                                        <td>Tue</td>
                                        <td>Wed</td>
                                        <td>Thu</td>
                                        <td>Fri</td>
                                        <td>Sat</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                        <td>12</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                        <td>19</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>22</td>
                                        <td class="cal-active">23</td>
                                        <td>24</td>
                                        <td>25</td>
                                        <td>26</td>
                                        <td>27</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>29</td>
                                        <td>30</td>
                                        <td>31</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Recent Comments -->
    <!-- ============================================================== -->
    <div class="row mt-4">
        <!-- .col -->
        <div class="col-md-12 col-lg-8 col-sm-12">

            <div class="white-box">
                <h3>Today Notification</h3>
                <div class="comment-center">
                    <div class="comment-body d-flex">
                        <div class="mail-contnet">
                            <span class="time">10:20 AM 20 may 2016</span>
                            <br>
                            <div class="mb-3 mt-3">
                                <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque
                                    pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui
                                    pellentesque molestie feugiat. Aenean commodo dui </span>
                            </div>
                        </div>
                    </div>
                    <div class="comment-body d-flex">
                        <div class="mail-contnet">
                            <span class="time">10:20 AM 20 may 2016</span>
                            <br>
                            <div class="mb-3 mt-3">
                                <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque
                                    pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui
                                    pellentesque molestie feugiat. Aenean commodo dui </span>
                            </div>
                        </div>
                    </div>
                    <div class="comment-body d-flex border-0">

                        <div class="mail-contnet">
                            <span class="time">10:20 AM 20 may 2016</span>
                            <br>
                            <div class="mb-3 mt-3">
                                <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque
                                    pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui
                                    pellentesque molestie feugiat. Aenean commodo dui </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-heading">
                    My Team
                </div>
                <div class="card-body">
                    <ul class="chatonline mb-0">
                        <li>
                            <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                    src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle">
                                <div class="ml-2">
                                    <span class="text-dark text-muted">Varun Dhavan
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                    src="plugins/images/users/genu.jpg" alt="user-img" class="img-circle">
                                <div class="ml-2">
                                    <span class="text-dark text-muted">Genelia
                                        Deshmukh
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                    src="plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle">
                                <div class="ml-2">
                                    <span class="text-dark text-muted">Ritesh
                                        Deshmukh
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                    src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle">
                                <div class="ml-2">
                                    <span class="text-dark text-muted">Arijit
                                        Sinh
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                    src="plugins/images/users/govinda.jpg" alt="user-img" class="img-circle">
                                <div class="ml-2">
                                    <span class="text-dark text-muted">Govinda
                                        Star
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                    src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle">
                                <div class="ml-2">
                                    <span class="text-dark text-muted">John
                                        Abraham
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@endsection