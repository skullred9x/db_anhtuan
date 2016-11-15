@extends('QuanTri/KhungTrang/QuanTri')

@section('NoiDung')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		{{{ isset($chitiet) ? 'Sửa module' : 'Thêm module' }}}
		<!--<small>Control panel</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('quantri') }}"><i class="fa fa-dashboard"></i> Bảng quản trị</a></li>
		<li><a href="{{ url('quantri/module') }}">Module</a></li>
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
					<h3 class="box-title">Thông tin module</h3>
					<form action="{{ Request::url() }}" method="post">
					<div class="button-option">
						<div class="button">
							<button type="submit" name="btnCapnhat" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
							<button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
						</div>
						<a href="{{ url('quantri/module') }}" class="btn btn-primary" title="Quay lại"><i class="fa  fa-list"></i><span> Xem danh sách</span> </a>
					</div>
					<!--/.button-option--> 
				</div><!-- /.box-header -->
				
				<!-- form start -->
					<div class="box-body">	
						@if (count($errors->all()) > 0)
							<div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ!</div>
						@endif
						
						<div class="form-group">
							<label for="md_tieude">Tiêu đề (*)</label>
							<input type="text" class="form-control" id="md_tieude" name="md_tieude" placeholder="Tiêu đề" value="@if (count($errors->all()) > 0){{ Form::old('md_tieude') }}@elseif(isset($chitiet)){{ $chitiet->md_tieude }}@endif">
							<p class="warning"><?php echo $errors->first('md_tieude'); ?></p>
						</div>
						
						 <div class="form-group">
							<label>Kiểu (*)</label>
							<select class="form-control" name="md_kieu">
								<option value="1" @if (isset($chitiet) && $chitiet->md_kieu==1) selected @endif>Tin tức mới</option>
								<option value="2" @if (isset($chitiet) && $chitiet->md_kieu==2) selected @endif>Trang mới</option>
								<option value="3" @if (isset($chitiet) && $chitiet->md_kieu==3) selected @endif>Video mới</option>
								<option value="4" @if (isset($chitiet) && $chitiet->md_kieu==4) selected @endif>Ảnh mới</option>
								<option value="5" @if (isset($chitiet) && $chitiet->md_kieu==5) selected @endif>Văn bản mới</option>
								<option value="6" @if (isset($chitiet) && $chitiet->md_kieu==6) selected @endif>Quảng cáo</option>
								<option value="7" @if (isset($chitiet) && $chitiet->md_kieu==7) selected @endif>Menu dọc đa cấp</option>
								<option value="8" @if (isset($chitiet) && $chitiet->md_kieu==8) selected @endif>Dự báo thời tiết</option>
								<option value="9" @if (isset($chitiet) && $chitiet->md_kieu==9) selected @endif>Bản đồ Google Maps</option>
								<option value="10" @if (isset($chitiet) && $chitiet->md_kieu==10) selected @endif>Thống kê lượt truy cập</option>
								<option value="11" @if (isset($chitiet) && $chitiet->md_kieu==11) selected @endif>Tỷ giá ngoại tệ</option>
							</select>
						</div>
						
						<div class="form-group">
							<label>Vị trí (*)</label>
							<select class="form-control" name="md_vitri">
								<option value="1" @if (isset($chitiet) && $chitiet->md_vitri==1) selected @endif>Khung bên trái trang</option>
								<option value="2" @if (isset($chitiet) && $chitiet->md_vitri==2) selected @endif>Khung bên phải trang</option>
							</select>
						</div>
						
						<div class="form-group">
							<label for="md_thutu">Thứ tự sắp xếp</label>
							<input type="text" class="form-control" id="md_thutu" name="md_thutu" placeholder="Thứ tự" value="@if (count($errors->all()) > 0){{ Form::old('md_thutu') }}@elseif(isset($chitiet)){{ $chitiet->md_thutu }}@endif">
							<p class="warning"><?php echo $errors->first('md_thutu'); ?></p>
						</div>
						
						<div class="form-group">
							<label>Trạng thái (*)</label>
							<select class="form-control" name="md_trangthai">
								<option value="1" 
									@if (count($errors->all()) > 0 &&  Form::old('md_trangthai')==1)
										selected
									@elseif (isset($chitiet) && $chitiet->md_trangthai==1) 
										selected
									@endif
								>Hiện</option>
								<option value="0" 
									@if (count($errors->all()) > 0 &&  Form::old('md_trangthai')==0)
										selected
									@elseif (isset($chitiet) && $chitiet->md_trangthai==0) 
										selected
									@endif
								>Ẩn</option>
							</select>	
						</div><!-- /.form group --> 
					</div><!-- /.box-body -->
				</div><!-- /.box -->
				
				 <button type="submit" name="btnCapnhat" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
				 <button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
			 </form>
		 </div>
	</div>
</section><!-- /.content -->	
@endsection