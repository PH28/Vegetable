@extends('admin.layouts.master')

@section('title', 'List User')
@section('page', 'Users')
@section('content')

@if($user->role_id == 1)
<div class="row">
	<div class="col-sm-8">
	</div>
	<div class="col-sm-4">
		<a href="{{ route('admin.users.create') }}" class="btn btn-primary pull-right">Thêm mới Admin</a>
	</div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="m-t-0 header-title">Admin Info</h4>
			
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
	                <tr>
	                    <th scope="row"></th>
	                    <td>{{ $user->id }}</td>
	                    <td>{{ $user->username }}</td>
	                    <td>{{ $user->email }}</td>
	                    <td><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="{{ route('admin.users.edit', $user->id) }}" data-original-title="Chỉnh sửa"><i class="fa fa-edit"></i></a></td>
	                </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
@else

<div class="row">
	<div class="col-sm-8">
		<h3>Thông tin User</h3>
	</div>
	<div class="col-sm-4">
		<a href="{{ route('admin.users.create') }}" class="btn btn-primary pull-right">Thêm mới User</a>
	</div>
</div>


<div class="row">
	<div class="col-md-4">
        <div class="text-center card-box">

            <div class="member-card pt-2 pb-2">
                <div class="thumb-lg member-thumb m-b-10 mx-auto">
                    <img src="{{ asset($user->avatar ? $user->avatar : 'http://via.placeholder.com/200'  ) }}" class="rounded-circle img-thumbnail" alt="profile-image">
                </div>
                

                <div class="">
                    <h4 class="m-b-5"> {{ $user->first_name }}</h4>
                </div>
                
                <div class="">
                	<p class="text-muted">Email <span> | </span> <span> <a href="#" class="text-pink">{{ $user->email }}</a> </span></p>
                    <p class="text-muted">Phone <span> | </span> <span> <a href="#" class="text-pink">{{ $user->phone }}</a> </span></p>
                </div>
                <div class="row">
                	<div class="col-3">
                		<p class="text-muted">ID <span> | </span> <span> <a href="#" class="text-pink">{{ $user->id }}</a> </span></p>
                	</div>
                    <div class="col-4">
                        <p class="text-muted">Status <span> | </span> <span> <a href="#" class="text-pink">{{ $user->status==1 ? 'Active' : 'In Active' }}</a> </span></p>
                    </div>
                	<div class="col-5">
                		<p class="text-muted">Username <span> | </span> <span> <a href="#" class="text-pink">{{ $user->username }}</a> </span></p>
                	</div>
                </div>
                <div class="row">
                	<div class="col-6">
                		<p class="text-muted">Giới Tính <span> | </span> <span> <a href="#" class="text-pink">{{ $user->gender }}</a> </span></p>
                	</div>
                	<div class="col-6">
                		<p class="text-muted">Ngày Sinh <span> | </span> <span> <a href="#" class="text-pink">{{ $user->dob }}</a> </span></p>
                	</div>
                </div>

                <ul class="social-links list-inline m-t-20">
                    <li class="list-inline-item">
                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="{{ route('admin.users.edit', $user->id) }}" data-original-title="Chỉnh sửa"><i class="fa fa-edit"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Xoá"><i class="fa fa-trash"></i></a>
                    </li>
                </ul>

                <a href=""><button type="button" class="btn btn-primary m-t-20 btn-rounded btn-bordered waves-effect w-md waves-light">Đơn Hàng</button></a>


            </div>

        </div>

    </div> <!-- end col -->
</div>    <!-- end row -->
@endif


@endsection
