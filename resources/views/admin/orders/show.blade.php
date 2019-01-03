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
                    <div class="col-6">
                        <div class="pull-left mt-3">
                            <p><b>Hello, Stanley Jones</b></p>
                            <p class="text-muted">Thanks a lot because you keep purchasing our products. Our company
                                promises to provide high quality products for you as well as outstanding
                                customer service for every transaction. </p>
                        </div>

                    </div><!-- end col -->
                    <div class="col-4 offset-2">
                        <div class="mt-3 pull-right">
                            <p class="m-b-10"><strong>Order Date: </strong> {{ $order->created_at }}</p>
                            <p class="m-b-10"><strong>Order Status: </strong> <span class="badge badge-success">{{ $order->status->name }}</span></p>
                            <p class="m-b-10"><strong>Order ID: </strong> #{{ $order->id }}</p>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                <div class="row mt-3">
                    <div class="col-6">
                        <h6>Shipping Address</h6>
                        {{ $order->address }}

                        <address class="line-h-24">
                            
                            <abbr title="Phone">P:</abbr> {{$order->phone}}
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
                                @foreach($order->orderDetails as $orderDetail)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><strong>{{ $orderDetail->product->name }}</strong></td>
                                    <td>{{ $orderDetail->quantity }}</td>
                                    <td>{{ $orderDetail->product->price }}</td>
                                    <td class="text-right">{{ $orderDetail->product->price*$orderDetail->quantity }}</td>
                                </tr>
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
                                All accounts are to be paid within 7 days from receipt of
                                invoice. To be paid by cheque or credit card or direct payment
                                online. If account is not paid within 7 days the credits details
                                supplied as confirmation of work undertaken will be charged the
                                agreed quoted fee noted above.
                            </small>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="float-right">
                            <p><b>Sub-total:</b> $4120.00</p>
                            <p><b>VAT (12.5):</b> $515</p>
                            <h3>$4635.00 USD</h3>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="hidden-print mt-4 mb-4">
                    <div class="text-right">
                        <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-print m-r-5"></i> Print</a>
                        <a href="#" class="btn btn-info waves-effect waves-light">Submit</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- end row -->
</div>

@endsection