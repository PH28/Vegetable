@extends('admin.layouts.master')

@section('title', 'List User')

@section('content')
<ol class="breadcrumb bc-colored bg-theme" id="breadcrumb">
    <li class="breadcrumb-item ">
        <a href="">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Users</li>
</ol>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
			<form action="{{ route('admin.users.store') }}" method="POST" role="form" enctype="multipart/form-data">
				@csrf
				<legend>Create User</legend>

				<div class="form-group">
					<label for="">Tên</label>
					<input name="first_name" value="{{ $user->first_name }}" type="text" class="form-control" id="" placeholder="Input field">
				</div>
				@if($errors->has('first_name'))
					<div class="alert alert-danger">
						<span class="strong">{{ $errors->first('name') }}</span>
					</div>
				@endif

				<div class="form-group">
					<label for="">Username</label>
					<input name="username" value="{{ $user->username }}" type="text" class="form-control" id="" placeholder="Input field">
				</div>
				@if($errors->has('username'))
					<div class="alert alert-danger">
						<span class="strong">{{ $errors->first('username') }}</span>
					</div>
				@endif

				<div class="form-group">
					<label for="">Email</label>
					<input name="email" value="{{ $user->email }}" type="email" class="form-control" id="" placeholder="Input field">
				</div>
				@if($errors->has('email'))
					<div class="alert alert-danger">
						<span class="strong">{{ $errors->first('email') }}</span>
					</div>
				@endif

				<div class="form-group">
					<label for="">Mật Khẩu</label>
					<input name="password" value="{{ $user->password }}" type="password" class="form-control" id="" placeholder="Input field">
				</div>
				@if($errors->has('password'))
					<div class="alert alert-danger">
						<span class="strong">{{ $errors->first('password') }}</span>
					</div>
				@endif

				<div class="form-group">
					<label for="">Di Động</label>
					<input name="phone" value="{{ $user->phone }}" type="text" class="form-control" id="" placeholder="Input field">
				</div>
				@if($errors->has('phone'))
					<div class="alert alert-danger">
						<span class="strong">{{ $errors->first('phone') }}</span>
					</div>
				@endif


				<div class="form-group">
					<label for="">Địa Chỉ</label>
					<input name="address" value="{{ $user->address }}" type="text" class="form-control" id="" placeholder="Input field">
				</div>
				@if($errors->has('address'))
					<div class="alert alert-danger">
						<span class="strong">{{ $errors->first('address') }}</span>
					</div>
				@endif

				<div class="form-group">
					<label for="">Loại Tài Khoản:  </label>
					<select name="role_id" class="c-select">
						@foreach($roles as $role)
							@if($role->id ==2)
							<option value="{{ $role->id }}" selected> {{ $role->name }}</option>
							@else
							<option value="{{ $role->id }}"> {{ $role->name }}</option>
							@endif
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="">Ngày sinh</label>
					<input name="dob" value="{{ $user->dob }}" type="date" class="form-control" id="" placeholder="Input field">
				</div>
				@if($errors->has('dob'))
					<div class="alert alert-danger">
						<span class="strong">{{ $errors->first('dob') }}</span>
					</div>
				@endif

				<div class="container">     <!-- div gender -->
					<div class="row">
						<div class="col-sm-3 form-group">
							<label for="">Giới Tính:</label>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
									<input type="radio" name="gender" id="gender" value="1" checked>
									Nam
								</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
									<input type="radio" name="gender" id="gender" value="2" checked>
									Nữ
								</label>
							</div>
						</div>
					</div>
				</div>   		<!-- end div gender -->

				<div class="form-group">
					<label for="avatar">Ảnh đại diện</label>
					<input name="avatar" type="file" class="form-control" id="avatar" placeholder="Input field">
				</div>
				@if($errors->has('avatar'))
					<div class="alert alert-danger">
						<span class="strong">{{ $errors->first('avatar') }}</span>
					</div>
				@endif

				<button type="submit" class="btn btn-primary">Thêm người dùng</button>
			</form>
		</div>
	</div>
	
</div>


@endsection
