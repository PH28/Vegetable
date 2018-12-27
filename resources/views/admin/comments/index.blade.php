@extends('admin.layouts.master')

@section('title', 'List Comments')

@section('page', 'Comments')

@section('link_top')
	

	<!-- DataTables -->
    <link href="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')




<div class="container-fluid">
	<div class="row">
	    <div class="col-12">
	        <div class="card-box table-responsive">
	            <h4 class="m-t-0 header-title">List Comment</h4>

	            <table id="datatable" class="table table-bordered">
	                <thead>
	                <tr>
	                    <th>ID</th>
	                    <th>Username</th>
	                    <th>Sản Phẩm</th>
	                    <th>Title</th>
	                    <th>Content</th>
	                    <th>Created At</th>
	                    <th colspan="2">Action</th>
	                </tr>
	                </thead>


	                <tbody>
	                @foreach($comments as $comment)
					<tr>
						<td>{{ $comment->id }}</td>
						<td><a href="{{ route('admin.users.show', $comment->user->id) }}">{{ $comment->user->username }}</a></td>
						<td><a href="{{ route('admin.products.show', $comment->product->id) }}">{{ $comment->product->name }}</a></td>
						<td>{{ $comment->title }}</td>
						<td>{{ $comment->content }}</td>
						<td>{{ $comment->created_at }}</td>
						<td>
							@if($comment->is_active == 1)
							<form action="{{ route('admin.comments.update', $comment->id) }}" method="POST" role="form">
								@csrf
								@method('PUT')
								<input type="hidden" name="is_active" value="0" class="form-control" id="" placeholder="Input field">
								<button type="submit" class="btn btn-success">Un Approve</button>
							</form>
							@else
							<form action="{{ route('admin.comments.update', $comment->id) }}" method="POST" role="form">
								@csrf
								@method('PUT')
								<input type="hidden" name="is_active" value="1" class="form-control" id="" placeholder="Input field">
								<button type="submit" class="btn btn-info">Approve</button>
							</form>
							@endif
						</td>

						<td>
							<form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST" role="form">
								@csrf
								@method('DELETE')					
								<button type="submit" class="btn btn-danger">Delete</button>
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

<div  class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
	       {{$comments->links()}}
	    </div>
	</div>
</div>

@endsection

@section('link_bottom')

 	<!-- Required datatable js -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/buttons.print.min.js') }}"></script>
@endsection