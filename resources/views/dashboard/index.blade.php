@extends('dashboard.layout.master')

@section('title', 'Trang Admin')

@section('body')
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Xin chào, <b>Admin</b></p>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">Latest Hits</h2>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">Performance</h2>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller">
                        <h2 class="tm-block-title">Storage Information</h2>
                        <div id="pieChartContainer">
                            <canvas id="pieChart" class="chartjs-render-monitor" width="200" height="200"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow">
                        <h2 class="tm-block-title">Thông báo đơn hàng</h2>
                        <div class="tm-notification-items">
                        @foreach($show_orderdetails as $show_orderdetail)
                            <div class="media tm-notification-item">
                                <!-- <div class="tm-gray-circle"><img src="img/notification-01.jpg" alt="Avatar Image" class="rounded-circle"></div> -->
                                <div class="media-body">
                                    <p class="mb-2"><b>{{$show_orderdetail->full_name}}</b> đã đặt hàng vào lúc<b> {{$show_orderdetail->created_at}}</b> mã đơn đặt hàng là ( {{$show_orderdetail->id}} ) tại địa chỉ hãy kiểm tra email để xác nhận
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">Đơn đặt hàng</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Số thứ tự</th>
                                    <th scope="col">Mã đơn đặt hàng</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Tổng hóa đơn</th>
                                    <!-- <th scope="col">DISTANCE</th> -->
                                    <th scope="col">Ngày mua</th>
                                    <!-- <th scope="col">EST DELIVERY DUE</th> -->
                                </tr>
                            </thead>
                            @foreach($show_orders as $show_order)
                            <tbody>
                                <tr>
                                    <th scope="row"><b>{{$show_order->id}}</b></th>
                                    <td>
                                        <div class="tm-status-circle moving">
                                        </div>{{$show_order->order_id}}
                                    </td>
                                    <td><b>{{$show_order->qty}}</b></td>
                                    <td><b>{{number_format($show_order->total)}} VND</b></td>
                                    <!-- <td><b>485 km</b></td> -->
                                    <td>{{$show_order->created_at}}</td>
                                    <!-- <td>{{$show_order->update_at}}</td> -->
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endsection
