@extends('QuanTri/KhungTrang/DangNhap')

@section('NoiDung')
	<div class="header">Đăng nhập</div>
		<form action="{{ Request::url() }}" method="post">
		<div class="body bg-gray">			
			@if (count($errors->all()) > 0)
				<p class="warning">Dữ liệu nhập vào không hợp lệ.</p>
			@endif
			@if ( isset($loi) && $loi)
				<p class="warning">Sai tên đăng nhập hoặc mật khẩu.</p>
			@endif
			<div class="form-group">
				<input type="text" name="tk_tendangnhap" class="form-control" placeholder="Tên đăng nhập" value="{{ Form::old('tk_tendangnhap') }}"/>
				<p class="warning"><?php echo $errors->first('tk_tendangnhap'); ?></p>
			</div>
			<div class="form-group">
				<input type="password" name="tk_matkhau" class="form-control" placeholder="Mật khẩu"/>
				<p class="warning"><?php echo $errors->first('tk_matkhau'); ?></p>
			</div> 
			<!--       
			<div class="form-group">
				<input type="checkbox" name="cbNhomatkhau"/> Ghi nhớ mật khẩu
			</div>
			-->
		</div>
		<div class="footer">                                                               
			<button type="submit" class="btn bg-olive btn-block">Đăng nhập</button>  
			<!--
			<p><a href="#">Quên mật khẩu</a></p>
			<a href="#" class="text-center">Đăng ký thành viên</a>
			-->
		</div>
	</form>
	<!--
	<div class="margin text-center">
		<span>Đăng nhập với mạng xã hội</span>
		<br/>
		<button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
		<button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
		<button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

	</div>
	-->
@endsection