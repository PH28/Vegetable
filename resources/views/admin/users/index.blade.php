@extends('admin.layouts.master')

@section('title', 'List User')
@section('page', 'Users')
@section('content')

<div class="container-fluid">
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
                    @foreach($admins as $admin)
    	                <tr>
    	                    <th scope="row">#{{ $loop->iteration }}</th>
    	                    <td>{{ $admin->id }}</td>
    	                    <td>{{ $admin->username }}</td>
    	                    <td>{{ $admin->email }}</td>
    	                    <td><a class="btn btn-info" href="{{ route('admin.users.edit', $admin->id) }}" data-toggle="tooltip" data-original-title="Chỉnh Sửa"><i  class="fa fa-edit"></i></a></td>
    	                </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    <div class="row">
    	<div class="col-sm-8">
    	</div>
    	<div class="col-sm-4">
    		<a href="{{ route('admin.users.create') }}" class="btn btn-primary pull-right">Thêm mới User</a>
    	</div>
    </div>



    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title">User List</h4>

                <table id="datatable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Ngày Sinh</th>
                        <th class='text-center' colspan="2">Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->id }}</td>
                        <td><span class="text-capitalize">{{ $user->username }}</span></td>
                        <td><a class="text-capitalize" href="{{ route('admin.users.show', $user->id) }}">{{ $user->first_name }}</a></td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->dob }}</td>
                        <td><a class="btn btn-info" href="{{ route('admin.users.edit', $user->id) }}" data-toggle="tooltip" data-original-title="Chỉnh Sửa"><i  class="fa fa-edit"></i></a></td>
                        <td>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" role="form">
                                @csrf
                                @method('DELETE')                   
                                <button data-toggle="tooltip" data-original-title="Xoá User" type="submit" class="btn btn-danger"><i class="dripicons-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end row -->
</div>


<div  class="container-fluid p-y-md">
	<div class="row">
		<div class="col-sm-12">
	       {{$users->links()}}
	    </div>
	</div>
</div>


@endsection
