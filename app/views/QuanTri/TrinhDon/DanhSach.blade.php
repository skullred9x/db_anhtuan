@extends('QuanTri/KhungTrang/QuanTri')

@section('NoiDung')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Quản lý trình đơn
		<!--<small>Control panel</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('quantri') }}"><i class="fa fa-dashboard"></i> Bảng quản trị</a></li>
		<li class="active">Trình đơn</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<form action="{{ url('quantri/trinh-don/xoa') }}" method="post">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Danh sách</h3>
					<div class="button-option"><a href="{{ url('quantri/trinh-don/them-moi') }}" class="btn btn-success btn-flat" title="Thêm mới"><i class="fa  fa-plus-square-o"></i><span> Thêm mới</span> </a>
						<div class="button">
							<button type="submit" class="btn btn-success btn-flat" name="XoaMucChon" value="Xóa mục chọn"   onClick="return checkdelete();" title="Xóa mục chọn"><i class="fa  fa-trash-o"></i><span> Xóa mục chọn</span></button>
							
							<button type="submit" class="btn btn-success btn-flat" name="XoaTatCa" value="Xóa tất cả" title="Xóa tất cả"  onClick="return checkdelete();"><i class="fa  fa-trash-o"></i><span> Xóa tất cả</span></button>
						</div>
					</div>
					<!--/.button-option--> 
					
				</div>
				<!-- /.box-header -->
				
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th><input type="checkbox" id="check-all" disabled /></th>
								<th>Tiêu đề</th>
								<th>Thứ tự</th>
								<th>Trạng thái</th>
								<th>Thao tác</th>
							</tr>
						</thead>
						<tbody id="show">
							@if(count($danhsach) > 0)
							@foreach ($danhsach as $item)
							<tr>
								<td><input type="checkbox" name="Chon[]" id="chk" value="{{ $item->mn_id }}" /></td>
								<td><a href="{{ url('quantri/trinh-don/sua-') }}{{ $item->mn_id }}" title="Sửa">{{ $item->mn_tieude }}</a></td>
								<td>{{ $item->mn_thutu }}</td>
								<td>{{{ $item->mn_trangthai==1 ? 'Hiện' : 'Ẩn' }}}</td>
								<td><a href="{{ url('quantri/trinh-don/sua-') }}{{ $item->mn_id }}" title="Sửa"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a href="{{ url('quantri/trinh-don/xoa-') }}{{ $item->mn_id }}" title="Xóa" onClick="return checkdelete();"><i class="fa fa-trash-o"></i></a></td>
							</tr>
							@endforeach
							@endif
						</tbody>
					</table>
				</div>
				<!-- /.box-body --> 
				
			</div>
			<!-- /.box -->
		</form>
		<script>
			listTable = $('#example1').dataTable({
			"aLengthMenu": [[10, 20, 50, -1], [10, 20, 50, "All"]],
			"sPaginationType": "full_numbers",
			"aoColumns": [ { "bSortable": false },null,null,null,{ "bSortable": false }]
		});
		</script> 
	</div>
</section><!-- /.content -->
@endsection