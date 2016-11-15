@extends('QuanTri/KhungTrang/QuanTri')

@section('NoiDung')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Cấu hình website
		<!--<small>Control panel</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('quantri') }}"><i class="fa fa-dashboard"></i> Bảng quản trị</a></li>
		<li class="active">Cấu hình website</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">	
	<form action="{{ Request::url() }}" method="post">
	@if (count($danhsach) > 0)
	@foreach ($danhsach as $module)
	<?php
		$cauhinh = DB::table('tb_cauhinh')->where('md_id', $module->md_id)->where('ch_trangthai', 1)->orderBy('ch_thutu', 'asc')->get();
	?>
	@if (count($cauhinh) > 0)
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
			<div class="box box-danger">
			<!-- general form elements -->
				<div class="box-header">
					<h3 class="box-title">{{ $module->md_tieude }}</h3>
					<div class="button-option">
						<div class="button">
							 <button type="submit" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
							 <button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
						</div>
					</div>
					<!--/.button-option--> 
				</div><!-- /.box-header -->
				
				<!-- form start -->
					<div class="box-body">	
						@if (count($errors->all()) > 0)
							<div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ!</div>
						@endif
						
						@foreach ($cauhinh as $item)
						<div class="form-group">
							<label for="noidung{{ $item->ch_id }}">{{ $item->ch_tieude }}</label>
							@if ($item->ch_kieu==0)
								<input type="text" class="form-control" name="noidung{{ $item->ch_id }}" id="noidung{{ $item->ch_id }}" value="{{ $item->ch_noidung }}">
							@elseif ($item->ch_kieu==1)
								 <textarea  name="noidung{{ $item->ch_id }}" class="form-control" rows="3" placeholder="Enter ...">{{ $item->ch_noidung }}</textarea>
							@elseif ($item->ch_kieu==2)
								<textarea class="ckeditor" name="noidung{{ $item->ch_id }}" style="height: 500px;">{{ $item->ch_noidung }}</textarea>
							@elseif ($item->ch_kieu==3)
								<br>
								<img src="{{ $item->ch_noidung }}" style="max-width:285px; max-height:100px; margin-bottom:10px; border:#ccc 1px solid" id="hinhanh{{ $item->ch_id }}">
								<input id="txtanh{{ $item->ch_id }}" class="form-control" name="noidung{{ $item->ch_id }}" type="text" onClick="imageload('hinhanh{{ $item->ch_id }}', this.value)" onBlur="imageload('hinhanh{{ $item->ch_id }}', this.value)" value="{{ $item->ch_noidung }}">
								<input type="button" class="btn btn-info btn-sm" value="Duyệt máy chủ" onclick="chonanh( 'txtanh{{ $item->ch_id }}', hinhanh{{ $item->ch_id }});">
							@endif
						</div>
						@endforeach 
					</div><!-- /.box-body -->
				</div><!-- /.box -->
		 </div>
	</div>
	@endif
	@endforeach
	<button type="submit" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
	<button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
	@endif
	</form>
</section><!-- /.content -->

<script type="text/javascript">
	function imageload(id, url){
		document.getElementById( id ).src = url;	
	}
	
	function chonanh( inputId, url )
	{
		var finder = new CKFinder() ;
		finder.BasePath = '{{ asset('public/quantri/ckeditor/ckfinder') }}' ;
		finder.SelectFunction = SetFileField ;
		finder.SelectFunctionData = inputId ;
		finder.Popup() ;
	}
	 
	function SetFileField( fileUrl, data )
	{
		document.getElementById( data["selectActionData"] ).value = fileUrl;
	}
</script>
@endsection