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
		<div class="col-sm-6 push-sm-2">
			<form action="{{ route('admin.categories.update', $category->id) }}" method="POST" role="form">
				@csrf
				@method('PUT')
				<legend>Edit danh mục sản phẩm: {{ $category->id }}. {{ $category->name }}</legend>

				<div class="form-group">
					<label for="">Tên Danh Mục</label>
					<input name="name" value="{{ $category->name }}" type="text" class="form-control" id="" placeholder="Input field">
				</div>
				<div class="form-group">
					<label for="">Danh Mục Cha</label>

					@if($category->children->count())			
					<select disabled name="parent_id" id="input" class="form-control" required="required">
						<option>Danh mục gốc</option>
					</select>

					@else
					<select name="parent_id" id="input" class="form-control" required="required">
						<option>Chọn danh mục cha</option>
						@foreach($categories as $cate)
						@if($cate->children->count())
							@if($cate->id == $category->parent_id)
							<option value="{{ $cate->id }}" selected="selected">{{ $cate->id }}. {{ $cate->name }}</option>
							@else
							<option value="{{ $cate->id }}">{{ $cate->id }}. {{ $cate->name }}</option>
							@endif
						@endif
						@endforeach
					</select>
					@endif


				</div>
				<button type="submit" class="btn btn-primary">Cập Nhật Danh Mục</button>
			</form>
		</div>
	</div>
</div>

@endsection
