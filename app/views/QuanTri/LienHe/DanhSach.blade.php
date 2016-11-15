@extends('QuanTri/KhungTrang/QuanTri')

@section('NoiDung')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Quản lý liên hệ
		<!--<small>Control panel</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('quantri') }}"><i class="fa fa-dashboard"></i> Bảng quản trị</a></li>
		<li class="active">Liên hệ</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<form action="{{ url('quantri/lien-he/xoa') }}" method="post">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Danh sách</h3>
					<div class="button-option">
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
								<th>Tiêu đề</th>
								<th>Email</th>
								<th>Nội dung</th>
								<th>Thao tác</th>
							</tr>
						</thead>
						<tbody id="show">
							@if(count($danhsach) > 0)
							@foreach ($danhsach as $item)
							<tr @if ($item->lh_trangthai==0) style="font-weight:bold" @endif>
								<td><input type="checkbox" name="Chon[]" value="{{ $item->lh_id }}" /></td>
								<td><a href="{{ url('quantri/lien-he/sua-') }}{{ $item->lh_id }}" title="Sửa">{{ $item->lh_tieude }}</a></td>
								<td>{{ $item->lh_email }}</td>
								<td>{{ thuvien::CatChuoi($item->lh_noidung, 200) }}</td>
								<td><a href="{{ url('quantri/lien-he/sua-') }}{{ $item->lh_id }}" title="Xem"><i class="fa fa-check"></i></a>&nbsp;&nbsp;&nbsp;<a href="{{ url('quantri/lien-he/xoa-') }}{{ $item->lh_id }}" title="Xóa" onClick="return checkdelete();"><i class="fa fa-trash-o"></i></a></td>
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