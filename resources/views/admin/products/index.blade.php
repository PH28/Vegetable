@extends('admin.layouts.master')

@section('title', 'List Products')

@section('page', 'Products')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h3>Danh sách Sản phẩm</h3>
		</div>
		<div class="col-sm-4">
			<a href="{{ route('admin.products.create') }}" class="btn btn-primary pull-right">Thêm mới Sản phẩm</a>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-inverse">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên</th>
						<th>Giá</th>
						<th>Số Lượng</th>
						<th>Mô Tả</th>
						<th>Ngày Tạo</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
					<tr>
						<td>{{ $product->id }}</td>
						<td>{{ $product->name }}</td>
						<td>{{ $product->price }}</td>
						<td>{{ $product->quantity }}</td>
						<td>{{ $product->description }}</td>
						<td>{{ $product->created_at }}</td>
						<td><a href="{{ route('admin.products.edit', $product->id) }}">Edit</a></td>
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
	       {{$products->links()}}
	    </div>
	</div>
</div>

@endsection