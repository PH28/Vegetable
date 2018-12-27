@extends('admin.layouts.master')

@section('title', 'List Products')

@section('page', 'Products')

@section('link_top')
	

	<!-- DataTables -->
    <link href="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')


<div class="container">
	<div class="row">
		<div class="col-sm-8">
			
		</div>
		<div class="col-sm-4">
			<a href="{{ route('admin.products.create') }}" class="btn btn-primary pull-right">Thêm mới Sản phẩm</a>
		</div>
	</div>
</div>


<div class="container-fluid">
	<div class="row">
	    <div class="col-12">
	        <div class="card-box table-responsive">
	            <h4 class="m-t-0 header-title">List Sản Phấm</h4>

	            <table id="datatable" class="table table-bordered">
	                <thead>
	                <tr>
	                    <th>ID</th>
	                    <th>Tên</th>
	                    <th>Giá</th>
	                    <th>Số Lượng</th>
	                    <th>Ngày Tạo</th>
	                    <th colspan="2">Action</th>
	                </tr>
	                </thead>


	                <tbody>
	                @foreach($products as $product)
					<tr>
						<td>{{ $product->id }}</td>
						<td><a href="{{ route('admin.products.show', $product->id) }}">{{ $product->name }}</a></td>
						<td>{{ $product->price }}</td>
						<td>{{ $product->quantity }}</td>
						<td>{{ $product->created_at }}</td>
						<td>
							<div class="row inline">
							<div class="col-3">
								<a style="font-size: 20px;" title="" data-placement="top" data-toggle="tooltip" class="tooltips .font-icon" href="{{ route('admin.products.edit', $product->id) }}" data-original-title="Chỉnh sửa"><i  class="fa fa-edit"></i></a>
							</div>
							<div class="col-3	">
								<form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" role="form">
		                            @csrf
		                            @method('DELETE')
		                            <button type="submit" class="btn btn-link"><a style="font-size: 20px;" title="" data-placement="top" data-toggle="tooltip" class="tooltips .font-icon" href="" data-original-title="Xoá">
		                            <i class="fa fa-trash"></i></a></button>
		                        </form>
							</div>
							</div>

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
	       {{$products->links()}}
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