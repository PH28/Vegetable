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
			<form action="{{ route('admin.categories.store') }}" method="POST" role="form">
				@csrf
				<legend>Thêm danh mục mới</legend>

				<div class="form-group">
					<label for="">Tên Danh Mục</label>
					<input name="name" type="text" class="form-control" id="" placeholder="Nhập vào tên danh mục">
				</div>
				
				@if($errors->has('name'))
				<div class="alert alert-danger">
					<span class="strong">{{ $errors->first('name') }}</span>
				</div>
				@endif

				<div class="form-group">
					<label for="">Danh Mục Cha</label>
					<select name="parent_id" id="input" class="form-control" required="required">
						<option value="">Chọn danh mục cha</option>
						<option value="">Danh mục gốc</option>
						@foreach($categories as $cate)
						@if($cate->children->count())
							<option value="{{ $cate->id }}">{{ $cate->id }}. {{ $cate->name }}</option>
						@endif
						@endforeach
					</select>
				</div>

				

				<button type="submit" class="btn btn-primary">Lưu Danh Mục</button>
			</form>
		</div>
	</div>
</div>

@endsection
