@extends('khungtrang.haicot')

@section('Head')
<title>HỘI CHỮ THẬP ĐỎ TỈNH PHÚ THỌ</title>
<meta name="description" content="Website chính thức của Hội chữ thập đỏ tỉnh Phú Thọ">
<meta name="keywords" content="chu thap do,chu thap do phu tho">

<link rel="StyleSheet" href="{{ asset('public/css/contact.css" type="text/css') }}">
@endsection

@section('NoiDung')
<div class=" m-bottom">
	<img alt="{{ Session::get('ch_don_vi') }}" src="{{ Session::get('ch_anh_noi_bat') }}" style="width: 560px; height: 193px;"><br><br>
</div>
<div class="clear"> </div>
<div class="box-border">
	<div class="content-box">
		<form id="fcontact" action="{{ Request::url() }}" method="post">
			@if (count($errors->all()) > 0)
				<p class="error">Dữ liệu nhập vào không hợp lệ!</p>
			@endif
			<div class="contact-form box-border content-box">
				<p class="rows"> Tiêu đề: <br>
					<input type="text" maxlength="255" value="@if (count($errors->all()) > 0){{ Form::old('lh_tieude') }}@endif" name="lh_tieude" class="input">
					<span class="warning">{{ $errors->first('lh_tieude') }}</span>
				</p>
				<p class="rows"> Họ và tên: <br>
					<input type="text" maxlength="100" value="@if (count($errors->all()) > 0){{ Form::old('lh_hoten') }}@endif" name="lh_hoten" class="input">
					<span class="warning">{{ $errors->first('lh_hoten') }}</span>
				</p>
				<p class="rows"> Địa chỉ email: <br>
					<input type="text" maxlength="60" value="@if (count($errors->all()) > 0){{ Form::old('lh_email') }}@endif" name="lh_email" class="input">
					<span class="warning">{{ $errors->first('lh_email') }}</span>
				</p>
				<p class="rows"> Điện thoại: <br>
					<input type="text" maxlength="60" value="@if (count($errors->all()) > 0){{ Form::old('lh_dienthoai') }}@endif" name="lh_dienthoai" class="input">
					<span class="warning">{{ $errors->first('lh_dienthoai') }}</span>
				</p>
				<p class="rows"> Nội dung: <br>
					<textarea cols="4" rows="3" name="lh_noidung" onkeyup="return nv_ismaxlength(this, 1000);">@if (count($errors->all()) > 0){{ Form::old('lh_noidung') }}@endif</textarea>
					<span class="warning">{{ $errors->first('lh_noidung') }}</span>
				</p>
				<p class="rows">
					<input type="submit" value="Gửi thông tin" name="btnGui" class="button">
					&nbsp;
					<input type="reset" value="Xóa trắng" class="button-2">
				</p>
				<!--
				<p class="rows"> &nbsp;Mã chống spam:&nbsp;
					<img height="22" src="{{ asset('public/images/mabaomat/mabaomat.php') }}" title="Mã chống spam" alt="Mã chống spam" id="mabaomat"> <img alt="Thay mới" src="{{ asset('public/images/refresh.png') }}" width="16" height="16" class="refresh">
					<input type="text" maxlength="6" value="" name="txtMachongspam" class="input capcha">
					<script>
					$(document).ready(function(e) {
						$('.refresh').click(function(e) {
							$("#mabaomat").attr('src','{{ asset('public/images/mabaomat/mabaomat.php') }}');
						});
					});
					</script>
					<input type="submit" value="Gửi thông tin" name="btnGui" class="button">
					&nbsp;
					<input type="reset" value="Xóa trắng" class="button-2">
					<span class="warning"><br>{{ $errors->first('txtMachongspam') }}</span>
				</p>
				-->
			</div>
		</form>
	</div>
</div>
&nbsp;
<div class="clear"> </div>
@endsection