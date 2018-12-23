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
		<div class="col-sm-12">
			<table class="table table-inverse">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên Khách Hàng</th>
						<th>Địa chỉ</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Avatar</th>
						<th>Giới tính</th>
						<th>Ngày Sinh</th>
						<th>Ngày Đăng ký</th>
						
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->first_name }}</td>
						<td>{{ $user->address }}</td>
						<td>{{ $user->phone }}</td>
						<td>{{ $user->email }}</td>
						<td><img src="{{ $user->avatar }}" alt=""></td>
						<td>{{ $user->gender }}</td>
						<td>{{ $user->dob }}</td>
						<td>{{ $user->created_at }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>


@endsection
