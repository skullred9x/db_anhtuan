@extends('khungtrang.haicot')

@section('Head')
<title>Đăng ký hiến máu</title>
<meta name="description" content="Đăng ký hiến máu">
<meta name="keywords" content="Đăng ký hiến máu">

<link type="text/css" href="{{ asset('public/js/ui/jquery-ui.css') }}" rel="stylesheet" />
<script type="text/javascript" src="{{ asset('public/js/ui/jquery-ui.js') }}"></script>
<script>
$(document).ready(function(e) {
    $("#thoigianhien").datepicker({ dateFormat: "dd/mm/yy" });
});
</script>
<!--
<link type="text/css" href="{{ asset('public/js/ui/jquery-ui.css') }}" rel="stylesheet" />
<link type="text/css" href="{{ asset('public/js/ui/jquery.ui.dialog.css') }}" rel="stylesheet" />
<script type="text/javascript" src="{{ asset('public/js/ui/jquery.ui.core.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/ui/jquery.ui.dialog.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/popcalendar/popcalendar.js') }}"></script>
-->
@endsection

@section('NoiDung')
		<div class=" m-bottom">
			<img alt="{{ Session::get('ch_don_vi') }}" src="{{ Session::get('ch_anh_noi_bat') }}" style="width: 560px; height: 193px;"><br><br>
		</div>
		<div class="clear"></div>
        
<script type="text/javascript">
//overlay();
</script>
@if (count($errors->all()) > 0)
	<div class="warning">
	{{ HTML::ul($errors->all()) }}
	</div>
@endif
<form action="{{ Request::url() }}" method="post">
  <table class="dangky" width="100%" border="1" cellspacing="1" cellpadding="1">
    <thead>
    <tr><th colspan="4"><h3 style="padding: 10px 0px;margin-bottom: 0px;color: black;">Đăng ký chương trình hiến máu nhân đạo</h3></th>
    </tr></thead>
	<tbody><tr>
      <td><strong>Họ tên<span style="color:red">*</span></strong></td>
      <td><input maxlength="255" style="width:100%;height:20px" type="text" name="hoten" id="hoten" value="@if (count($errors->all()) > 0){{ Form::old('hoten') }}@endif"></td>
      <td><strong>Giới tính<span style="color:red">*</span></strong> </td>
      <td><select style="width:98%" name="gioitinh" id="gioitinh">
          
		  <option value="">Chọn giới tính</option>
		  <option value="1" @if (count($errors->all()) > 0 && Form::old('gioitinh')==1) selected @endif>Nam</option>
          
		  <option value="2" @if (count($errors->all()) > 0 && Form::old('gioitinh')==2) selected @endif>Nữ</option>
          
        </select></td>
    </tr>
    <tr>
      <td><strong>Ngày tháng năm sinh<span style="color:red">*</span></strong></td>
      <td><strong>Ngày
        <select name="ngaysinh" id="ngaysinh">
          <option value="">Chọn ngày</option>
          @for ($i=1; $i<=31; $i++)
          <option value="{{$i}}" @if (count($errors->all()) > 0 && Form::old('ngaysinh')==$i) selected @endif>{{$i}}</option>
		  @endfor
        </select>
        </strong></td>
      <td><strong>Tháng
        <select name="thangsinh" id="thangsinh">
          <option value="">Chọn tháng</option>
          @for ($i=1; $i<=12; $i++)
          <option value="{{$i}}" @if (count($errors->all()) > 0 && Form::old('thangsinh')==$i) selected @endif>{{$i}}</option>
		  @endfor
        </select>
        </strong></td>
      <td><strong>Năm</strong>
        <select name="namsinh" id="namsinh">
          <option value="">Chọn năm</option>
          @for ($i=date("Y")-60; $i<=date("Y")-17; $i++)
          <option value="{{$i}}" @if (count($errors->all()) > 0 && Form::old('namsinh')==$i) selected @endif>{{$i}}</option>
		  @endfor
        </select></td>
    </tr>
    <tr>
      <td><strong>Số CMND<span style="color:red">*</span></strong></td>
      <td colspan="3"><input maxlength="10" style="width:100%;height:20px" type="text" name="cmnd" id="cmnd" value="@if (count($errors->all()) > 0){{ Form::old('cmnd') }}@endif"></td>
    </tr>
    <tr>
      <td><strong>Điện thoại 1</strong></td>
      <td colspan="3">
        <input maxlength="14" style="width:100%;height:20px" type="text" name="dienthoai1" id="dienthoai1" value="@if (count($errors->all()) > 0){{ Form::old('dienthoai1') }}@endif"></td>
    </tr>
	<tr>
      <td><strong>Điện thoại 2</strong></td>
      <td colspan="3">
        <input maxlength="14" style="width:100%;height:20px" type="text" name="dienthoai2" id="dienthoai2" value="@if (count($errors->all()) > 0){{ Form::old('dienthoai2') }}@endif"></td>
    </tr>
	<tr>
      <td><strong>Email<span style="color:red">*</span></strong></td>
      <td colspan="3">
        <input style="width:100%;height:20px" type="text" name="email" id="email" value="@if (count($errors->all()) > 0){{ Form::old('email') }}@endif"></td>
    </tr>
	<tr>
      <td><strong>Nhóm máu<span style="color:red">*</span></strong></td>
      <td colspan="3"> 
		<select id="nhommau" name="nhommau">
			<option value="">Chọn nhóm máu</option>
			<option value="A" @if (count($errors->all()) > 0 && Form::old('nhommau')=='A') selected @endif> A </option>
			<option value="B" @if (count($errors->all()) > 0 && Form::old('nhommau')=='B') selected @endif> B </option>
			<option value="AB" @if (count($errors->all()) > 0 && Form::old('nhommau')=='AB') selected @endif> AB </option>
			<option value="O" @if (count($errors->all()) > 0 && Form::old('nhommau')=='O') selected @endif> O </option>
			<option value="0" @if (count($errors->all()) > 0 && Form::old('nhommau')=='0') selected @endif> Chưa xác định </option>
			
		</select>
	  </td>
    </tr>
	<tr>
      <td><strong>Chiều cao<span style="color:red">*</span></strong></td>
      <td colspan="3">
        <input maxlength="10" style="width:100%;height:20px" type="text" name="chieucao" id="chieucao" value="@if (count($errors->all()) > 0){{ Form::old('chieucao') }}@endif"></td>
    </tr>
	<tr>
      <td><strong>Cân nặng<span style="color:red">*</span></strong></td>
      <td colspan="3">
        <input maxlength="10" style="width:100%;height:20px" type="text" name="cannang" id="cannang" value="@if (count($errors->all()) > 0){{ Form::old('cannang') }}@endif"></td>
    </tr>
	<tr>
      <td><strong>Số lần hiến<span style="color:red">*</span></strong></td>
      <td colspan="3">
        <input maxlength="3" style="width:100%;height:20px" type="text" name="solanhien" id="solanhien" value="@if (count($errors->all()) > 0){{ Form::old('solanhien') }}@endif"></td>
    </tr>
	<tr>
      <td><strong>Lần hiến gần nhất (Định dạng dd/mm/yyyy)</strong></td>
      <td colspan="3">
		 <input type="text" style="width:100%;height:20px" maxlength="10" id="thoigianhien" name="thoigianhien" class="datetimepicker" value="@if (count($errors->all()) > 0){{ Form::old('cannang') }}@endif">
		<!--
		   <img src="{{ asset('public/images/calendar.jpg') }}" width="18" height="17" style="cursor:pointer;vertical-align: middle;" onclick="popCalendar.show(this, 'thoigianhien', 'dd/mm/yyyy',  true);" alt="">
		   -->
		</td>
    </tr>
	<tr>
      <td><strong>Nguyên quán</strong></td>
      <td colspan="3">
        <input maxlength="255" style="width:100%;height:20px" type="text" name="nguyenquan" id="nguyenquan" value="{{ Form::old('nguyenquan') }}"></td>
    </tr>
	<tr>
      <td><strong>Tạm trú</strong></td>
      <td colspan="3">
        <input maxlength="255" style="width:100%;height:20px" type="text" name="tamtru" id="tamtru"  value="{{ Form::old('tamtru') }}"></td>
    </tr>
	<tr>
      <td><strong>Đơn vị công tác</strong></td>
      <td colspan="3">
        <input maxlength="255" style="width:100%;height:20px" type="text" name="donvi" id="donvi" value="{{ Form::old('donvi') }}"></td>
    </tr>
	<tr>
      <td><strong>Ghi chú</strong></td>
      <td colspan="3">
        <input maxlength="255" style="width:100%;height:20px" type="text" name="ghichu" id="ghichu" value="{{ Form::old('ghichu') }}"></td>
    </tr>
	<tr>
      <td colspan="4">
	  <p><strong>Chú ý các mục đánh dấu <span style="color:red">*</span> là bắt buộc </strong></p>
		<div style="padding: 10px;margin-bottom:10px;border:1px #ccc solid;width: 100%;overflow-y: scroll;height: 250px;width:98%">
	    	{{ Session::get('ch_dieu_khoan') }}
		</div>
		<p> 
			<input style="cursor: pointer;" type="checkbox" name="dongy" id="dongy" value="1" @if (Form::old('dongy') == 1) checked @endif">
			<label style="cursor: pointer;" for="save"><strong>Tôi đồng ý với các điều khoản ở trên.</strong><label> 
		</label></label></p>
      </td>
    </tr>
	<tr>
      <td colspan="4">
	  <div align="left">
	  	<!--
		<strong>Mã bảo mật<span style="color:red">*</span></strong>
		<input style="width:80px" type="text" maxlength="6" value="" id="fcode_iavim" name="fcode" class="txtCaptcha">
		<img style="top: 6px;position: relative;" height="22" src="/index.php?scaptcha=captcha" title="Mã bảo mật" alt="Mã bảo mật" id="vimg">
		<img alt="Thay mới" src="/images/refresh.png" width="16" height="16" class="refresh" onclick="nv_change_captcha('vimg','fcode_iavim');">
		-->
		<input type="submit" value="Gửi đi" id="btsend" name="btsend" class="bt1">&nbsp;&nbsp;<input type="reset" value="Xóa" class="bt1">
	  </div>

      </td>
    </tr>
	
  </tbody></table>
</form>
<div id="dialog"></div>
&nbsp;
		<div class="clear">
		</div>
@endsection