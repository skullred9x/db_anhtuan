@extends('QuanTri/KhungTrang/QuanTri')

@section('NoiDung')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		{{{ isset($chitiet) ? 'Sửa chuyên mục' : 'Thêm chuyên mục' }}}
		<!--<small>Control panel</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('quantri') }}"><i class="fa fa-dashboard"></i> Bảng quản trị</a></li>
		<li><a href="{{ url('quantri/chuyen-muc') }}">Chuyên mục</a></li>
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
					<h3 class="box-title">Thông tin chuyên mục</h3>
					<form action="{{ Request::url() }}" method="post">
					<div class="button-option">
						<div class="button">
							 <button type="submit" name="btnCapnhat" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
							 <button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
						</div>
						<a href="{{ url('quantri/chuyen-muc') }}" class="btn btn-primary" title="Quay lại"><i class="fa  fa-list"></i><span> Xem danh sách</span> </a>
					</div>
					<!--/.button-option--> 
				</div><!-- /.box-header -->
				
				<!-- form start -->
					<div class="box-body">	
						@if (count($errors->all()) > 0)
							<div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ!</div>
						@endif
						<div class="form-group">
							<label for="dm_tieude">Tiêu đề (*)</label>
							<input type="text" class="form-control" id="dm_tieude" name="dm_tieude" placeholder="Tiêu đề" value="@if (count($errors->all()) > 0){{ Form::old('dm_tieude') }}@elseif(isset($chitiet)){{ $chitiet->dm_tieude }}@endif">
							<p class="warning"><?php echo $errors->first('dm_tieude'); ?></p>
						</div>
						
						<div class="form-group">
							<label>Kiểu chuyên mục (*)</label>
							<select class="form-control" name="dm_kieu" id="dm_kieu">
								@foreach ($kieudm as $item)
								<option value="{{ $item->kmn_id }}" @if (isset($chitiet) && $chitiet->dm_kieu==$item->kmn_id) selected @endif>{{ $item->kmn_tieude }}</option>
								@endforeach
							</select>
							<p class="warning"><?php echo $errors->first('bv_kieu'); ?></p>
						</div>
						
						<div class="form-group">
							<label>Chuyên mục cha</label>
							<select class="form-control" name="dm_cha">
								<option value="0" @if (isset($chitiet) && $chitiet->dm_cha==0) selected @endif>Không</option>
								@if (isset($chitiet))
								{{ thuvien::LstDanhMuc('',$chitiet->dm_cha) }}
								@else
								{{ thuvien::LstDanhMuc() }}
								@endif
							</select>
						</div>
						
						<div class="form-group">
							<label>Trạng thái (*)</label>
							<select class="form-control" name="dm_trangthai">
								<option value="1" 
									@if (count($errors->all()) > 0 &&  Form::old('dm_trangthai')==1)
										selected
									@elseif (isset($chitiet) && $chitiet->dm_trangthai==1) 
										selected
									@endif
								>Hiện</option>
								<option value="0" 
									@if (count($errors->all()) > 0 &&  Form::old('dm_trangthai')==0)
										selected
									@elseif (isset($chitiet) && $chitiet->dm_trangthai==0) 
										selected
									@endif
								>Ẩn</option>
							</select>	
						</div><!-- /.form group --> 
						
						<div class="form-group">
							<label for="dm_title">Title (hỗ trợ SEO)</label>
							<input type="text" class="form-control" id="dm_title" name="dm_title" placeholder="Title" value="@if (count($errors->all()) > 0){{ Form::old('dm_title') }}@elseif(isset($chitiet)){{ $chitiet->dm_title }}@endif">
							<p class="warning"><?php echo $errors->first('dm_title'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="dm_keyword">Keyword (hỗ trợ SEO)</label>
							<input type="text" class="form-control" id="dm_keyword" name="dm_keyword" placeholder="Keyword" value="@if (count($errors->all()) > 0){{ Form::old('dm_keyword') }}@elseif(isset($chitiet)){{ $chitiet->dm_keyword }}@endif">
							<p class="warning"><?php echo $errors->first('dm_keyword'); ?></p>
						</div>
						
						<div class="form-group">
							<label>Description (hỗ trợ SEO)</label>
							<textarea class="form-control" rows="3" placeholder="Description" name="dm_description">@if (count($errors->all()) > 0){{ Form::old('dm_description') }}@elseif(isset($chitiet)){{ $chitiet->dm_description }}@endif</textarea>
							<p class="warning"><?php echo $errors->first('dm_description'); ?></p>
						</div>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
				
				 <button type="submit" name="btnCapnhat" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
				 <button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
			 </form>
		 </div>
	</div>
</section><!-- /.content -->
@endsection