@extends('admin.layouts.master')

@section('title', 'Order Detail')

@section('page', 'Orders')

@section('content')


<div class="container-fluid">
	<div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="clearfix">
                    <div class="pull-left mb-3">
                        <img src="assets/images/logo.png" alt="" height="28">
                    </div>

                    <div class="pull-right">
                        <h4 class="m-0 d-print-none">Order <q>{{ $order->id }}</q> Detail</h4>
                    </div>
                </div>


                <div class="row">
                    <div class="col-6 offset-1">
                        <div class="pull-left mt-3">
                            <p><b>Hello, {{ $order->fullname }}</b></p>
                            <p class="text-muted">Thanks a lot because you keep purchasing our products. Our company
                                promises to provide high quality products for you as well as outstanding
                                customer service for every transaction. </p>
                        </div>

                    </div><!-- end col -->
                    <div class="col-4 ">
                        <div class="mt-3 pull-right">
                            <p class="m-b-10"><strong>Order Date: </strong> {{ $order->created_at }}</p>
                            <p class="m-b-10"><strong>Order Status: </strong> <span class="badge badge-{{ $order->status_id == 1 ? 'warning' : ($order->status_id == 2 ? 'info' : ($order->status_id == 3 ? 'success' : 'danger')) }}">{{ $order->status->name }}</span></p>
                            <p class="m-b-10"><strong>Order ID: </strong> #{{ $order->id }}</p>
                            <p class="m-b-10"><strong>Hình Thức Thanh Toán: </strong> {{ $order->typePayment->name }}</p>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                <div class="row mt-3">
                    <div class="col-6">
                        <h6>Shipping Address</h6>
                        <address class="line-h-24">
                        	<strong>{{ $order->fullname }}</strong><br>
                        	{{ $order->address }} <br>
                            
                            <abbr title="Phone Number">Phone:</abbr> {{$order->phone}}
                        </address>
                    </div>

                    <div class="col-6">
                       

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table mt-4">
                                <thead>
                                <tr><th>#</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Unit Cost</th>
                                    <th class="text-right">Total</th>
                                </tr></thead>
                                <tbody>
                                	<?php $subtotal = 0; ?>
                                @foreach($order->orderDetails as $orderDetail)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><strong>{{ $orderDetail->product->name }}</strong></td>
                                    <td>{{ $orderDetail->quantity }}</td>
                                    <td>{{ $orderDetail->product->price }}</td>
                                    <td class="text-right">{{ $orderDetail->product->price*$orderDetail->quantity }}</td>
                                </tr>
                                <?php $subtotal += $orderDetail->product->price*$orderDetail->quantity; ?>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="clearfix pt-5">
                            <h6 class="text-muted">Notes:</h6>

                            <small>
                                {{$order->note}}
                            </small>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="float-right">
                            <p><b>Sub-total:</b> {{$subtotal}}</p>
                            <p><b>VAT (10%):</b> {{$subtotal*0.1}}</p>
                            <h3>{{ $subtotal*1.1 }} <span>VNĐ</span></h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="hidden-print mt-4 mb-4">
                	
                    <div class="text-right">
                    	<div class="row">
	                    	<div class="col-sm-2 offset-sm-3">
	                        <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-print m-r-5"></i> Print</a>
	                        </div>
	                        @switch($order->status_id)
		                        @case(1)
			                        <!-- <a href="#" class="btn btn-info waves-effect waves-light">Submit</a> -->
			                        <div class="col-sm-2">
			                        <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" role="form">
										@csrf
										@method('PUT')
										<input type="hidden" name="status_id" value="2" class="form-control" id="" placeholder="Input field">
										<button data-toggle="tooltip" data-original-title="Duyệt Đơn" type="submit" class="btn btn-success"><!-- <i class="  fa fa-calendar-check-o"></i> -->Duyệt Đơn</button>
									</form>
									</div>
                                    <div class="col-sm-2">
                                        <a class="btn btn-warning" href="{{ route('admin.orders.edit', $order->id) }}" data-toggle="tooltip" data-original-title="Chỉnh Sửa"><i  class="fa fa-edit"></i>Sửa Đơn</a>
                                    </div>
									<div class="col-sm-2">
									<form action="{{ route('admin.orders.update', $order->id) }}" method="POST" role="form">
										@csrf
										@method('PUT')
										<input type="hidden" name="status_id" value="4" class="form-control" id="" placeholder="Input field">
										<button data-toggle="tooltip" data-original-title="Huỷ Đơn" type="submit" class="btn btn-danger"><!-- <i class="  fa fa-calendar-check-o"></i> -->Huỷ Đơn</button>
									</form>
									</div>
								@break

								@case(2)
									<div class="col-sm-2">
			                        <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" role="form">
										@csrf
										@method('PUT')
										<input type="hidden" name="status_id" value="3" class="form-control" id="" placeholder="Input field">
										<button data-toggle="tooltip" data-original-title="Xác Nhận Hoàn Thành" type="submit" class="btn btn-success"><!-- <i class="  fa fa-calendar-check-o"></i> -->Hoàn Thành</button>
									</form>
									</div>
									<div class="col-sm-2">
									<form action="{{ route('admin.orders.update', $order->id) }}" method="POST" role="form">
										@csrf
										@method('PUT')
										<input type="hidden" name="status_id" value="4" class="form-control" id="" placeholder="Input field">
										<button data-toggle="tooltip" data-original-title="Huỷ Đơn" type="submit" class="btn btn-danger"><!-- <i class="  fa fa-calendar-check-o"></i> -->Huỷ Đơn</button>
									</form>
									</div>
								@break

								@case(3)
									
								@break
							@endswitch
	                    </div>
                	</div>
                </div>
            </div>

        </div>

    </div>
    <!-- end row -->
</div>

@endsection