@extends('admin.layouts.master')

@section('title', 'List Products')

@section('content')
<ol class="breadcrumb bc-colored bg-theme" id="breadcrumb">
    <li class="breadcrumb-item ">
        <a href="">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Products</li>
</ol>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h3>Sản phẩm {{ $product->id }}. {{ $product->name }}</h3>
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
					<tr>
						<td>{{ $product->id }}</td>
						<td>{{ $product->name }}</td>
						<td>{{ $product->price }}</td>
						<td>{{ $product->quantity }}</td>
						<td>{{ $product->description }}</td>
						<td>{{ $product->created_at }}</td>
						<td><a href="{{ route('admin.products.edit', $product->id) }}">Edit</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection	