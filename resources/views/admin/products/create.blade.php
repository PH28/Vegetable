@extends('admin.layouts.master')

@section('title', 'Add New Product')
@section('page', 'Products')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-8">
			<form action="{{ route('admin.products.store') }}" method="POST" role="form" enctype="multipart/form-data">
				@csrf

				<legend>Thêm mới Sản phẩm</legend>

				<div class="form-group">
					<label for="">Tên Sản Phẩm</label>
					<input name="name" type="text" class="form-control" id="" placeholder="Input field">
				</div>
				<div class="form-group">
					<label for="">Giá</label>
					<input name="price" type="number" class="form-control" id="" placeholder="Input field">
				</div>
				<div class="form-group">
					<label for="">Số Lượng</label>
					<input name="quantity" type="number" class="form-control" id="" placeholder="Input field">
				</div>
				<div class="form-group">
					<label for="">Mô Tả</label>
					<textarea class="form-group" name="description" id="" cols="100" rows="10" placeholder="Input field"></textarea>
				</div>
				<div class="form-group">
					<label for="">Danh mục</label>
					<select class="c-select">
						<option selected>Chọn danh mục</option>
						@foreach($categories as $category)
						<option value="{{ $category->id }}">{{ $category->id }}. {{ $category->name }}</option>
						@endforeach
					</select>	
				</div>
				<div class="form-group">
					<label for="">Hình Ảnh</label>
					<input name="image" type="file" class="form-control" id="" placeholder="Input field">
				</div>
				

				<button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
			</form>

		</div>
	</div>
</div>


@endsection