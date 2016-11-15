@extends('QuanTri/KhungTrang/QuanTri')

@section('NoiDung')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		{{{ isset($chitiet) ? 'Sửa tài khoản' : 'Thêm tài khoản' }}}
		<!--<small>Control panel</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('quantri') }}"><i class="fa fa-dashboard"></i> Bảng quản trị</a></li>
		<li><a href="{{ url('quantri/tai-khoan') }}">Tài khoản</a></li>
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
					<h3 class="box-title">Thông tin tài khoản</h3>
					<form action="{{ Request::url() }}" method="post">
					<div class="button-option">
						<div class="button">
							 <button type="submit" name="btnCapnhat" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
							 <button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
						</div>
						<a href="{{ url('quantri/tai-khoan') }}" class="btn btn-primary" title="Quay lại"><i class="fa  fa-list"></i><span> Xem danh sách</span> </a>
					</div>
					<!--/.button-option--> 
				</div><!-- /.box-header -->
				
				<!-- form start -->
					<div class="box-body">	
						@if (count($errors->all()) > 0)
						
							<div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ!
							<?php foreach ($errors->all('<li>:message</li>') as $message)
							{
								echo $message;
							}
							?>
							</div>
						@endif
						<div class="form-group">
							<label for="tk_tendangnhap">Tên đăng nhập *</label>
							<input type="text" class="form-control" id="tk_tendangnhap" name="tk_tendangnhap" placeholder="Tên đăng nhập" value="@if (count($errors->all()) > 0){{ Form::old('tk_tendangnhap') }}@elseif(isset($chitiet)){{ $chitiet->tk_tendangnhap }}@endif">
							<p class="warning"><?php echo $errors->first('tk_tendangnhap'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="tk_matkhau">Mật khẩu *</label>
							<input type="password" class="form-control" id="tk_matkhau" name="tk_matkhau" placeholder="Mật khẩu" value="@if (count($errors->all()) > 0){{ Form::old('tk_matkhau') }}@elseif(isset($chitiet)){{ $chitiet->tk_matkhau }}@endif">
							<input type="hidden" name="tk_matkhaucu" value="@if (isset($chitiet)){{ $chitiet->tk_matkhau }}@endif">
							<p class="warning"><?php echo $errors->first('tk_matkhau'); ?></p>							
						</div>
						
						<div class="form-group">
							<label for="tk_matkhau_confirmation">Nhập lại mật khẩu *</label>
							<input type="password" class="form-control" id="tk_matkhau_confirmation" name="tk_matkhau_confirmation" placeholder="Nhập lại mật khẩu" value="@if (count($errors->all()) > 0){{ Form::old('tk_matkhau_confirmation') }}@elseif(isset($chitiet)){{ $chitiet->tk_matkhau }}@endif">
							<p class="warning"><?php echo $errors->first('tk_matkhau_confirmation'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="tk_hoten">Họ tên</label>
							<input type="text" class="form-control" id="tk_hoten" name="tk_hoten" placeholder="Họ tên" value="@if (count($errors->all()) > 0){{ Form::old('tk_hoten') }}@elseif(isset($chitiet)){{ $chitiet->tk_hoten }}@endif">
							<p class="warning"><?php echo $errors->first('tk_hoten'); ?></p>
						</div>
						
						 <div class="form-group">
							<label for="xImagePath">Ảnh đại diện </label><br>						
							<img src="@if (count($errors->all()) > 0){{ Form::old('tk_anhdaidien') }}@elseif(isset($chitiet)){{ $chitiet->tk_anhdaidien }}@endif" style="max-width:285px; max-height:100px; border:#ccc 1px solid; margin-bottom:10px" id="xImage">
							<input type="hidden" value="@if(isset($chitiet)){{ $chitiet->tk_anhdaidien }}@endif" name="txtAnh" id="txtAnh">
							<input id="xImagePath" name="tk_anhdaidien" type="text" class="form-control" value="@if (count($errors->all()) > 0){{ Form::old('tk_anhdaidien') }}@elseif(isset($chitiet)){{ $chitiet->tk_anhdaidien }}@endif" />
							<input type="button"  value="Duyệt máy chủ" title="Duyệt ảnh trên máy chủ" class="btn btn-info btn-sm" onclick="BrowseServer( 'xImagePath' );" style="margin-top:10px;" />
							<p class="warning"><?php echo $errors->first('tk_anhdaidien'); ?></p>
						</div><!-- /.form group -->  
						
						<div class="form-group">
							<label for="tk_email">Email</label>
							<input type="text" class="form-control" id="tk_email" name="tk_email" placeholder="Email" value="@if (count($errors->all()) > 0){{ Form::old('tk_email') }}@elseif(isset($chitiet)){{ $chitiet->tk_email }}@endif">
							<p class="warning"><?php echo $errors->first('tk_email'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="tk_dienthoai">Điện thoại</label>
							<input type="text" class="form-control" id="tk_dienthoai" name="tk_dienthoai" placeholder="Điện thoai"  value="@if (count($errors->all()) > 0){{ Form::old('tk_dienthoai') }}@elseif(isset($chitiet)){{ $chitiet->tk_dienthoai }}@endif">
							<p class="warning"><?php echo $errors->first('tk_dienthoai'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="tk_trangthai">Trạng thái *</label>
							<select class="form-control" name="tk_trangthai">
								<option value="1" 
									@if (count($errors->all()) > 0 &&  Form::old('tk_trangthai')==1)
										selected
									@elseif (isset($chitiet) && $chitiet->tk_trangthai==1) 
										selected
									@endif
								>Kích hoạt</option>
								<option value="0" 
									@if (count($errors->all()) > 0 &&  Form::old('tk_trangthai')==0)
										selected
									@elseif (isset($chitiet) && $chitiet->tk_trangthai==0) 
										selected
									@endif
								>Khóa</option>
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