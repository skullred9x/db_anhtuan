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
		<h2>Trang bạn yêu cầu không tồn tại hoặc đã bị xóa bỏ.</h2>
	</div>
</div>
&nbsp;
<div class="clear"> </div>
@endsection