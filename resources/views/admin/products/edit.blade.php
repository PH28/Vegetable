@extends('admin.layouts.master')

@section('title', 'Edit Product')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-8">
			<form action="{{ route('admin.products.update', $product->id) }}" method="POST" role="form" enctype="multipart/form-data">
				@csrf
				@method('PUT')

				<legend>Sửa thông tin Sản phẩm {{ $product->id }}. {{ $product->name }}</legend>

				<div class="form-group">
					<label for="">Tên Sản Phẩm</label>
					<input name="name" value="{{ $product->name }}" type="text" class="form-control" id="" placeholder="Input field">
				</div>
				<div class="form-group">
					<label for="">Giá</label>
					<input name="price" value="{{ $product->price }}" type="number" class="form-control" id="" placeholder="Input field">
				</div>
				<div class="form-group">
					<label for="">Số Lượng</label>
					<input name="quantity" value="{{ $product->quantity }}" type="number" class="form-control" id="" placeholder="Input field">
				</div>
				<div class="form-group">
					<label for="">Mô Tả</label>
					<textarea class="form-group" name="description" id="" cols="100" rows="10" placeholder="Input field">{{ $product->description }}</textarea>
				</div>
				<div class="form-group">
					<label for="">Danh mục</label>
					<select class="c-select">
						<option selected>Chọn danh mục</option>
						@foreach($categories as $category)
						@if($category->id == $product->category_id)
						<option value="{{ $category->id }}" selected>{{ $category->id }}. {{ $category->name }}</option>
						@else
						<option value="{{ $category->id }}">{{ $category->id }}. {{ $category->name }}</option>
						@endif
						@endforeach
					</select>	
				</div>
				<!-- lỗi khi không thêm hình mới -->
				<div class="form-group">
					<label for="">Thêm Hình Ảnh</label>
					@foreach($images as $image)
					<img style="height: 300px" src="{{ asset($image->path) }}" alt="">
					@endforeach
					<input name="image" type="file" class="form-control" id="" placeholder="Input field">
				</div>
				

				<button type="submit" class="btn btn-primary">Cập nhật Sản Phẩm</button>
			</form>

		</div>
	</div>
</div>



@endsection