@extends('admin.layouts.master')

@section('title', 'List User')
@section('page', 'Users')
@section('content')


<div class="row">
	<div class="col-sm-8">
		<h3>Danh sách Khách Hàng</h3>
	</div>
	<div class="col-sm-4">
		<a href="{{ route('admin.users.create') }}" class="btn btn-primary pull-right">Thêm mới User</a>
	</div>
</div>



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
						<th>Action</th>
						
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
						<td><img style="height: 50px" src="{{ asset($user->avatar) }}" alt=""></td>
						<td>{{ $user->gender }}</td>
						<td>{{ $user->dob }}</td>
						<td>{{ $user->created_at }}</td>
						<td><a href="{{ route('admin.users.edit', $user->id) }}">Edit</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<div  class="container-fluid p-y-md">
	<div class="row">
		<div class="col-sm-12">
	       {{$users->links()}}
	    </div>
	</div>
</div>


@endsection
