	@extends('QuanTri/KhungTrang/QuanTri')

@section('NoiDung')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		{{{ isset($chitiet) ? 'Sửa bài viết' : 'Thêm bài viết' }}}
		<!--<small>Control panel</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('quantri') }}"><i class="fa fa-dashboard"></i> Bảng quản trị</a></li>
		<li><a href="{{ url('quantri/bai-viet') }}">Bài viết</a></li>
		<li class="active">{{{ isset($chitiet) ? 'Sửa' : 'Thêm mới' }}}</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
			<div class="box box-danger">
			<!-- general form elements -->
				<div class="box-header">
					<h3 class="box-title">Thông tin bài viết</h3>
					<form id="frmCapnhat" name="frmCapnhat" action="{{ Request::url() }}" method="post">
					<div class="button-option">
						<div class="button">
							 <button type="submit" name="btnCapnhat" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
							 <button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
						</div>
						<a href="{{ url('quantri/bai-viet') }}" class="btn btn-primary" title="Quay lại"><i class="fa  fa-list"></i><span> Xem danh sách</span> </a>
					</div>
					<!--/.button-option--> 
				</div><!-- /.box-header -->
				
				<!-- form start -->
					<div class="box-body">	
						@if (count($errors->all()) > 0)
							<div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ!</div>
						@endif
						
						<div class="form-group">
							<label>Kiểu bài viết (*)</label>
							<select class="form-control" name="bv_kieu" id="bv_kieu">
								@foreach ($kieubv as $item)
								<option value="{{ $item->kmn_id }}" @if (isset($chitiet) && $chitiet->bv_kieu==$item->kmn_id) selected @endif>{{ $item->kmn_tieude }}</option>
								@endforeach
							</select>
							<p class="warning"><?php echo $errors->first('bv_kieu'); ?></p>
						</div>
						
						<div id="alert"></div>
						
						
						<div class="form-group">
							<label>Chuyên mục (*)</label>
							<select class="form-control" name="dm_id" id="dm_id">
							</select>
							<p class="warning"><?php echo $errors->first('dm_id'); ?></p>
						</div>
						
						
						<div class="form-group" id="sohieu" @if (isset($chitiet) && $chitiet->bv_kieu==5)) @else style="display:none" @endif>
							<label for="bv_sohieu">Số hiệu</label>
							<input type="text" class="form-control" id="bv_sohieu" name="bv_sohieu" placeholder="Số hiệu" value="@if (count($errors->all()) > 0){{ Form::old('bv_sohieu') }}@elseif(isset($chitiet)){{ $chitiet->bv_sohieu }}@endif">
							<p class="warning"><?php echo $errors->first('bv_sohieu'); ?></p>
						</div>
						
						<div class="form-group" id="tieude">
							<label for="bv_tieude">Tiêu đề (*)</label>
							<input type="text" class="form-control" id="bv_tieude" name="bv_tieude" placeholder="Tiêu đề" value="@if (count($errors->all()) > 0){{ Form::old('bv_tieude') }}@elseif(isset($chitiet)){{ $chitiet->bv_tieude }}@endif">
							<p class="warning"><?php echo $errors->first('bv_tieude'); ?></p>
						</div>
						
						<div class="form-group" id="anhdaidien">
							<label for="xImagePath">Hình ảnh </label><br>						
							<img src="@if (count($errors->all()) > 0){{ Form::old('bv_anhdaidien') }}@elseif(isset($chitiet)){{ $chitiet->bv_anhdaidien }}@endif" style="max-width:285px; max-height:100px; border:#ccc 1px solid; margin-bottom:10px" id="xImage">
							<input type="hidden" value="@if(isset($chitiet)){{ $chitiet->bv_anhdaidien }}@endif" name="txtAnh" id="txtAnh">
							<input id="xImagePath" name="bv_anhdaidien" type="text" class="form-control" value="@if (count($errors->all()) > 0){{ Form::old('bv_anhdaidien') }}@elseif(isset($chitiet)){{ $chitiet->bv_anhdaidien }}@endif" />
							<input type="button"  value="Duyệt máy chủ" title="Duyệt ảnh trên máy chủ" class="btn btn-info btn-sm" onclick="BrowseServer( 'xImagePath' );" style="margin-top:10px;" />
							<p class="warning"><?php echo $errors->first('bv_anhdaidien'); ?></p>
						</div><!-- /.form group -->  
						
						<div class="form-group" id="tomtat">
							<label for="bv_tomtat">Tóm tắt</label>
							<textarea class="form-control" rows="3" placeholder="Tóm tắt" name="bv_tomtat" id="bv_tomtat">@if (count($errors->all()) > 0){{ Form::old('bv_tomtat') }}@elseif(isset($chitiet)){{ $chitiet->bv_tomtat }}@endif</textarea>
							<p class="warning"><?php echo $errors->first('bv_tomtat'); ?></p>
						</div>
						
						<div class='form-group' id="noidung">
							<label>Nội dung</label>
							<textarea class="ckeditor" name="bv_noidung" rows="10" cols="80">
								@if (count($errors->all()) > 0){{ Form::old('bv_noidung') }}@elseif(isset($chitiet)){{ $chitiet->bv_noidung }}@endif
							</textarea>
							<p class="warning"><?php echo $errors->first('bv_noidung'); ?></p>
						</div>
						
						<div class="form-group" id="thutu">
							<label for="bv_tieude">Thứ tự hiển thị (nếu có)</label>
							<input type="text" class="form-control" id="bv_thutu" name="bv_thutu" placeholder="Thứ tự hiển thị" value="@if (count($errors->all()) > 0){{ Form::old('bv_thutu') }}@elseif(isset($chitiet)){{ $chitiet->bv_thutu }}@endif">
							<p class="warning"><?php echo $errors->first('bv_thutu'); ?></p>
						</div>
						
						<div class="form-group" id="trangthai">
							<label>Trạng thái (*)</label>
							<select class="form-control" name="bv_trangthai">
								<option value="1" 
									@if (count($errors->all()) > 0 &&  Form::old('bv_trangthai')==1)
										selected
									@elseif (isset($chitiet) && $chitiet->bv_trangthai==1) 
										selected
									@endif
								>Hiện</option>
								<option value="0" 
									@if (count($errors->all()) > 0 &&  Form::old('bv_trangthai')==0)
										selected
									@elseif (isset($chitiet) && $chitiet->bv_trangthai==0) 
										selected
									@endif
								>Ẩn</option>
							</select>	
						</div><!-- /.form group -->
						
						<div class="form-group" id="title">
							<label for="bv_title">Title (hỗ trợ SEO)</label>
							<input type="text" class="form-control" id="bv_title" name="bv_title" placeholder="Title" value="@if (count($errors->all()) > 0){{ Form::old('bv_title') }}@elseif(isset($chitiet)){{ $chitiet->bv_title }}@endif">
							<p class="warning"><?php echo $errors->first('bv_title'); ?></p>
						</div>
						
						<div class="form-group" id="keyword">
							<label for="bv_keyword">Keyword (hỗ trợ SEO)</label>
							<input type="text" class="form-control" id="bv_keyword" name="bv_keyword" placeholder="Keyword" value="@if (count($errors->all()) > 0){{ Form::old('bv_keyword') }}@elseif(isset($chitiet)){{ $chitiet->bv_keyword }}@endif">
							<p class="warning"><?php echo $errors->first('bv_keyword'); ?></p>
						</div>
						
						<div class="form-group" id="description">
							<label>Description (hỗ trợ SEO)</label>
							<textarea class="form-control" rows="3" placeholder="Description" name="bv_description">@if (count($errors->all()) > 0){{ Form::old('bv_description') }}@elseif(isset($chitiet)){{ $chitiet->bv_description }}@endif</textarea>
							<p class="warning"><?php echo $errors->first('bv_description'); ?></p>
						</div> 
					</div><!-- /.box-body -->
				</div><!-- /.box -->
				
				 <button type="submit" name="btnCapnhat" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
				 <button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
			 </form>
		 </div>
	</div>
</section><!-- /.content -->
						
<script type="text/javascript">
function LoadKieuBV(kieu){
	switch(kieu){
		case '1': 
				$('#noidung').css('display','block');
				$('#anhdaidien').css('display','block');
				$('#sohieu').css('display','none');
				$('#tomtat').css('display','block');
				$('#title').css('display','block');
				$('#keyword').css('display','block');
				$('#description').css('display','block');
				break;
		case '2':
				$('#noidung').css('display','block');
				$('#anhdaidien').css('display','none');
				$('#sohieu').css('display','none');
				$('#tomtat').css('display','none');
				$('#title').css('display','block');
				$('#keyword').css('display','block');
				$('#description').css('display','block')
				break;
		case '3':
				$('#noidung').css('display','block');
				$('#anhdaidien').css('display','block');
				$('#sohieu').css('display','none');
				$('#tomtat').css('display','none');
				$('#title').css('display','block');
				$('#keyword').css('display','block');
				$('#description').css('display','block')
				break;
		case '4':
				$('#noidung').css('display','none');
				$('#anhdaidien').css('display','block');
				$('#sohieu').css('display','none');
				$('#tomtat').css('display','none');
				$('#title').css('display','none');
				$('#keyword').css('display','none');
				$('#description').css('display','none');
				break;
		case '5':
				$('#noidung').css('display','block');
				$('#anhdaidien').css('display','none');
				$('#sohieu').css('display','block');
				$('#tomtat').css('display','none');
				$('#title').css('display','block');
				$('#keyword').css('display','block');
				$('#description').css('display','block');
				break;
	}
}

function LoadAjax (kieu){
	$.get('{{ url('ajax/kieu-bai-viet/0') }}'+kieu+'/{{ isset($chitiet) ? $chitiet->dm_id : '0' }}', function(result){
		$('#dm_id').html(result);
	});
}

$('#bv_kieu').change(function() {
	var kieu = $(this).val();
	LoadAjax(kieu);
	LoadKieuBV(kieu);
});

@if (isset($chitiet))
	LoadKieuBV({{ $chitiet->bv_kieu }});
	LoadAjax ({{ $chitiet->bv_kieu }});
@else
	LoadKieuBV(1);
	LoadAjax (1);
@endif
</script>
@endsection