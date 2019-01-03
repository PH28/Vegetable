@extends('admin.layouts.master')

@section('title', 'List Orders')

@section('page', 'Orders')

@section('link_top')
	

	<!-- DataTables -->
    <link href="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<div class="container">
	<div class="row">
		<div class="col-sm-8">
			@if($message = Session::get('success'))
				<div class="alert alert-success">
					<strong>{{ $message }}</strong>
				</div>
			@endif
			@if($message = Session::get('danger'))
				<div class="alert alert-danger">
					<strong>{{ $message }}</strong>
				</div>
			@endif
		</div>
		<div class="col-sm-4">
			<a href="{{ route('admin.products.create') }}" class="btn btn-primary pull-right">Thêm mới Đơn Hàng</a>
		</div>
	</div>
</div>


<div class="container-fluid">
	<div class="row">
	    <div class="col-12">
	        <div class="card-box table-responsive">
	            <h4 class="m-t-0 header-title">List Đơn Hàng</h4>

	            <table id="datatable" class="table table-bordered">
	                <thead>
	                <tr>
	                    <th>ID</th>
	                    <th>Tên Khách Hàng</th>
	                    <th>Tổng Tiền</th>
	                    <th>Địa Chỉ</th>
	                    <th>Số Điện Thoại</th>
	                    <th>Phương Thức Thanh Toán</th>
	                    <th>Sửa</th>
	                    <th>Xoá</th>
	                </tr>
	                </thead>


	                <tbody>
	                @foreach($orders as $order)
					<tr>
						<td><a href="{{ route('admin.orders.show', $order->id) }}"><strong>{{ $order->id }}</strong></a></td>
						<td><a href="{{ route('admin.users.show', $order->user->id) }}"><strong>{{ $order->user->first_name }}</strong></a></td>
						<td>{{ $order->total }}</td>
						<td>{{ $order->address }}</td>
						<td>{{ $order->phone }}</td>
						<td>{{ $order->typePayment->name }}</td>
						<td><a class="btn btn-info" href="{{ route('admin.orders.edit', $order->id) }}" data-toggle="tooltip" data-original-title="Chỉnh Sửa"><i  class="fa fa-edit"></i></a>
						</td>
						<td>
							<form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" role="form">
                                @csrf
                                @method('DELETE')                   
                                <button onclick="return confirm('Bạn có chắc chắn muốn xoá đơn hàng này?')" data-toggle="tooltip" data-original-title="Xoá Product" type="submit" class="btn btn-danger"><i class="dripicons-trash"></i></button>
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



@endsection

@section('link_bottom')

 	<!-- Required datatable js -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

@endsection

@section('codescript')
	<script type="text/javascript">
        $(document).ready(function() {

            // Default Datatable
            $('#datatable').DataTable();

            

            table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        } );

    </script>
@endsection