@extends('QuanTri/KhungTrang/QuanTri')

@section('NoiDung')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Quản lý bài viết
		<!--<small>Control panel</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('quantri') }}"><i class="fa fa-dashboard"></i> Bảng quản trị</a></li>
		<li class="active">Bài viết</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<form action="{{ url('quantri/bai-viet/xoa') }}" method="post">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Danh sách</h3>
					<div class="box-title">
						<select name="bv_kieu" onChange="top.location.href=this.options[this.selectedIndex].value;">
							<option value="{{ url('quantri/bai-viet') }}">Tất cả bài viết</option>
							@foreach ($kieubv as $item)
							<option value="{{ url('quantri/bai-viet/chon-kieu-'.$item->kmn_id) }}" @if (isset($bv_kieu) && $bv_kieu==$item->kmn_id) selected @endif>{{ $item->kmn_tieude }}</option>
							@endforeach
						</select>
					</div>
					
					<div class="button-option"> <a href="{{ url('quantri/bai-viet/them-moi') }}" class="btn btn-success btn-flat" title="Thêm mới"><i class="fa  fa-plus-square-o"></i><span> Thêm mới</span> </a>
						
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
								<th>Chuyên mục</th>
								<th>Ngày đăng</th>
								<th>Trạng thái</th>
								<th>Thao tác</th>
							</tr>
						</thead>
						<tbody id="show">
							@foreach ($danhsach as $item)
							<tr>
								<td><input type="checkbox" name="Chon[]" value="{{ $item->bv_id }}"></td>
								<td><a href="{{ url('quantri/bai-viet/sua-') }}{{ $item->bv_id }}" title="Sửa">{{ $item->bv_tieude }}</i></td>
								<td>{{ thuvien::PhanCapDM($item->dm_id,true) }}</td>
								<td>{{ $item->bv_ngaythem }}</td>
								<td>
									{{ $item->bv_trangthai }}
								</td>
								<td><a href="{{ url('quantri/bai-viet/sua-') }}{{ $item->bv_id }}" title="Sửa"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a href="{{ url('quantri/bai-viet/xoa-') }}{{ $item->bv_id }}" title="Xóa" onClick="return checkdelete();"><i class="fa fa-trash-o"></i></a></td>
							</tr>
							@endforeach
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
			"aoColumns": [ { "bSortable": false },null,null,null,null,{ "bSortable": false }]
		});
		</script> 
	</div>
</section><!-- /.content -->
@endsection