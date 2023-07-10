@extends('admin.layouts.layout')

@section('content')
        <!-- page title area end -->
        <div class="main-content-inner">
            
            <!-- overview area start -->
            <div class="row mt-5 mb-5">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="header-title mb-0">Overview</h4>
                                <select class="custome-select border-0 pr-3">
                                    <option selected>Last 24 Hours</option>
                                    <option value="0">01 July 2018</option>
                                </select>
                            </div>
                            <div id="verview-shart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- overview area end -->
            <!-- row area start -->
            <div class="row">
                <!-- Live Crypto Price area start -->
                <div class="col-lg-4">
                    <button onclick="test()">HALOOOO</button>
                </div>
                <!-- Live Crypto Price area end -->
                <!-- trading history area start -->
                <div class="col-lg-8 mt-sm-30 mt-xs-30">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <h4 class="header-title">Trading History</h4>
                                <div class="trd-history-tabs">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#buy_order" role="tab">Buy Order</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#sell_order" role="tab">Sell Order</a>
                                        </li>
                                    </ul>
                                </div>
                                <select class="custome-select border-0 pr-3">
                                    <option selected>Last 24 Hours</option>
                                    <option value="0">01 July 2018</option>
                                </select>
                            </div>
                            <div class="trad-history mt-4">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="buy_order" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="dbkit-table">
                                                <tr class="heading-td">
                                                    <td>Trading ID</td>
                                                    <td>Time</td>
                                                    <td>Status</td>
                                                    <td>Amount</td>
                                                    <td>Last Trade</td>
                                                </tr>
                                                <tr>
                                                    <td>78211</td>
                                                    <td>4.00 AM</td>
                                                    <td>Pending</td>
                                                    <td>$758.90</td>
                                                    <td>$05245.090</td>
                                                </tr>
                                                <tr>
                                                    <td>782782</td>
                                                    <td>4.00 AM</td>
                                                    <td>Pending</td>
                                                    <td>$77878.90</td>
                                                    <td>$7778.090</td>
                                                </tr>
                                                <tr>
                                                    <td>89675978</td>
                                                    <td>4.00 AM</td>
                                                    <td>Pending</td>
                                                    <td>$0768.90</td>
                                                    <td>$0945.090</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sell_order" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="dbkit-table">
                                                <tr class="heading-td">
                                                    <td>Trading ID</td>
                                                    <td>Time</td>
                                                    <td>Status</td>
                                                    <td>Amount</td>
                                                    <td>Last Trade</td>
                                                </tr>
                                                <tr>
                                                    <td>8964978</td>
                                                    <td>4.00 AM</td>
                                                    <td>Pending</td>
                                                    <td>$445.90</td>
                                                    <td>$094545.090</td>
                                                </tr>
                                                <tr>
                                                    <td>89675978</td>
                                                    <td>4.00 AM</td>
                                                    <td>Pending</td>
                                                    <td>$78.90</td>
                                                    <td>$074852945.090</td>
                                                </tr>
                                                <tr>
                                                    <td>78527878</td>
                                                    <td>4.00 AM</td>
                                                    <td>Pending</td>
                                                    <td>$0768.90</td>
                                                    <td>$65465.090</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- trading history area end -->
            </div>
            <!-- row area end -->
            <div class="row mt-5">
                <!-- latest news area start -->
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Latest News</h4>
                            <div class="letest-news mt-5">
                                <div class="single-post mb-xs-40 mb-sm-40">
                                    <div class="lts-thumb">
                                        <img src="{{asset('assets/img/blog/post-thumb1.jpg')}}" alt="post thumb">
                                    </div>
                                    <div class="lts-content">
                                        <span>Admin Post</span>
                                        <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="lts-thumb">
                                        <img src="{{asset('assets/img/blog/post-thumb2.jpg')}}" alt="post thumb">
                                    </div>
                                    <div class="lts-content">
                                        <span>Admin Post</span>
                                        <h2><a href="blog.html">Sed ut perspiciatis unde omnis iste.</a></h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- latest news area end -->
            </div>
            <!-- row area start-->
        </div>
    </div>
    <!-- main content area end -->

@stop