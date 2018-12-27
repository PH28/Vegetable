@extends('admin.layouts.master')

@section('title', 'Edit Order')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-8">
			<form action="{{ route('admin.orders.update', $order->id) }}" method="POST" role="form" enctype="multipart/form-data">
				@csrf
				@method('PUT')

				<legend>Sửa thông tin đơn hàng{{ $order->id }}</legend>

				<div class="form-group">
					<label for="">Tên Khách Hàng</label>
					<input name="name" value="{{ $order->user_id }}. {{ $user->name }}" type="text" class="form-control" id="" placeholder="Input field">
				</div>
				<div class="form-group">
					<label for="">Tổng Tiền</label>
					<input name="total" value="{{ $order->total }}" type="number" class="form-control" id="" placeholder="Input field">
				</div>
				<div class="form-group">
					<label for="">Địa Chỉ</label>
					<input name="address" value="{{ $order->address }}" type="number" class="form-control" id="" placeholder="Input field">
				</div>
				<div class="form-group">
					<label for="">Mã Số Thanh Toán</label>
					<input name="type_payment_id" value="{{ $order->type_payment_id }}" type="number" class="form-control" id="" placeholder="Input field">
				</div>

				<div class="form-group">
					<label for="">Mô Tả</label>
					<textarea class="form-group" name="note" id="" cols="100" rows="10" placeholder="Input field">{{ $order->note }}</textarea>
				<div class="form-group">
					<label for="">Ngày Tạo</label>
					<input name="created_at" value="{{ $order->created_at }}" type="number" class="form-control" id="" placeholder="Input field">
				</div>

				

				<button type="submit" class="btn btn-primary">Cập nhật giỏ hàng</button>
			</form>

		</div>
	</div>
</div>



@endsection