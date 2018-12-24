@extends('admin.layouts.master')

@section('title', 'List Categories')

@section('content')

<ol class="breadcrumb bc-colored bg-theme" id="breadcrumb">
    <li class="breadcrumb-item ">
        <a href="">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Danh Mục Sản Phẩm</li>
</ol>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h3>Danh sách Danh mục Sản phẩm</h3>
		</div>
		<div class="col-sm-4">
			<a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Thêm mới danh mục</a>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-10 push-sm-2">
			<table class="table table-inverse">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên Danh Mục</th>
						<th>Action</th>
					</tr>
				</thead>
				<!-- Lay tat ca danh muc -->
				<tbody>
					@foreach ($categories as $category)
						@if($category->parent_id == null)
							<tr>
								<td>{{ $category->id }}</td>
								<td>{{ $category->name }}</td>
								<td><a href="{{ route('admin.categories.edit', $category->id) }}">Edit</a></td>
							</tr>
							@foreach ($category->children as $child)
								<tr>
									<td class="text-center">{{ $child->id }}</td>
									<td>{{ $child->name }}</td>
									<td><a href="{{ route('admin.categories.edit', $child->id) }}">Edit</a></td>
								</tr>
							@endforeach
						@endif
					@endforeach
				</tbody>

				<!-- Chi lay danh muc chinh -->
				<!-- <tbody>
					@foreach ($categories as $category)
						@if($category->children->count())
							<tr>
								<td>{{ $category->id }}</td>
								<td>{{ $category->name }}</td>
								<td><a href="{{ route('admin.categories.edit', $category->id) }}">Edit</a></td>
							</tr>
						@endif
					@endforeach
				</tbody> -->


			</table>
			
		</div>
	</div>
</div>

@endsection
