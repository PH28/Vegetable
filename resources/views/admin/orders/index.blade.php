@extends('admin.layouts.master')

@section('title', 'List Order')

@section('page', 'Orders')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h3>Danh Sách Đơn Hàng</h3>
		</div>
		<div class="col-sm-4">
			<a href="{{ route('admin.products.create') }}" class="btn btn-primary pull-right">Thêm Mới Đơn Hàng</a>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-inverse">
				<thead>
					<tr>
						<th>ID Khách Hàng</th>
						<th>Tổng Tiền</th>
						<th>Địa Chỉ</th>
						<th>SĐT</th>
						<th>Ngày Tạo</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($orders as $order)
					<tr>
						<td>{{ $order->id }}</td>
						<td>{{ $order->user_id }}</td>
						<td>{{ $order->total}}</td>
						<td>{{ $order->address}}</td>
						<td>{{ $order->phone}}</td>
						<td>{{ $product->created_at }}</td>
						<td><a href="{{ route('admin.orders.edit', $order->id) }}">Edit</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<div  class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
	       {{$orders->links()}}
	    </div>
	</div>
</div>

@endsection