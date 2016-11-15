@extends('QuanTri/KhungTrang/QuanTri')

@section('NoiDung')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Quản lý thành viên đăng ký hiến máu
		<!--<small>Control panel</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('quantri') }}"><i class="fa fa-dashboard"></i> Bảng quản trị</a></li>
		<li class="active">Đăng ký hiến máu</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<form action="{{ url('quantri/hien-mau/xoa') }}" method="post">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Danh sách thành viên</h3>
					<div class="button-option">
						<a href="{{ url('quantri/hien-mau/xuat-excel') }}" class="btn btn-success btn-flat" title="Thêm mới"><i class="fa fa-table"></i><span> Xuất Excel</span> </a>
						
						<a href="{{ url('quantri/hien-mau/them-moi') }}" class="btn btn-success btn-flat" title="Thêm mới"><i class="fa  fa-plus-square-o"></i><span> Thêm mới</span> </a>
						
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
								<th><input type="checkbox" id="ChonTat" disabled /></th>
								<th>Họ và tên</th>
								<th>Giới tính</th>
								<th>Nhóm máu</th>
								<th>Email</th>
								<th>Điện thoại</th>
								<th>Địa chỉ</th>
								<th>Thao tác</th>
							</tr>
						</thead>
						<tbody id="show">
							@if(count($danhsach) > 0)
							@foreach ($danhsach as $item)
							<tr>
								<td><input type="checkbox" name="Chon[]" id="chk" value="{{ $item->id }}" /></td>
								<td><a href="{{ url('quantri/hien-mau/sua-') }}{{ $item->id }}" title="Sửa">{{ $item->hoten }}</a></td>
								<td>
									@if ($item->gioitinh==1)
										Nam
									@else
										Nữ
									@endif
								</td>
								<td> {{ $item->nhommau=='0'?'Chưa xác định':$item->nhommau }}</td>
								<td>{{ $item->email }}</td>
								<td>{{ $item->dienthoai1 }} @if (!empty($item->dienthoai2))- {{ $item->dienthoai2 }} @endif</td>
								<td>{{ $item->nguyenquan }}</td>
								<td><a href="{{ url('quantri/hien-mau/sua-') }}{{ $item->id }}" title="Sửa"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a href="{{ url('quantri/hien-mau/xoa-') }}{{ $item->id }}" title="Xóa" onClick="return checkdelete();"><i class="fa fa-trash-o"></i></a></td>
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
			"aoColumns": [ { "bSortable": false },null,null,null,null,null,null,{ "bSortable": false }]
		});
		</script> 
	</div>
</section><!-- /.content -->
@endsection