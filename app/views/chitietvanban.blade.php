@extends('khungtrang.bacot')

@section('Head')
<title>{{ $chitiet->bv_title }}</title>
<meta name="description" content="{{ $chitiet->bv_description }}">
<meta name="keywords" content="{{ $chitiet->bv_keyword }}">

<link rel="StyleSheet" href="{{ asset('public/css/laws.css') }}" type="text/css" />
@endsection

@section('NoiDung')
<div class="main">
	<div class="breadcrumbs">
		{{ thuvien::PhanCapDM($chitiet->dm_id) }}
	</div>
</div>

<div class=" m-bottom">
	<img alt="{{ Session::get('ch_don_vi') }}" src="{{ Session::get('ch_anh_noi_bat') }}" style="width: 560px; height: 193px;"><br><br>
</div>

<div class="clear"> </div>
<!--
<div class="archives_links"><strong>Thể loại: </strong><a title="CV" href="/laws/cat-1-CV/">CV</a></div>
-->
<table class="archives_list">
	<thead>
		<tr>
			<td colspan="2">Trích yếu : <strong style="color:red">{{ $chitiet->bv_tieude }}</strong></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td width="25%" valign="top">Số / ký hiệu</td>
			<td valign="top"><strong>{{ $chitiet->bv_sohieu }}</strong></td>
		</tr>
	</tbody>
	<tbody class="second">
		<tr>
			<td>Ngày ban hành</td>
			<td><strong>{{ date('d/m/Y', strtotime($chitiet->bv_ngaythem)) }}</strong></td>
		</tr>
	</tbody>
	<tbody>
		<tr>
			<td colspan="2"><a href="{{ trim(strip_tags($chitiet->bv_noidung)) }}"> <span class="archives_down doc">Tải về máy</span> </a> <span style="color:#666; font-size:11px; float: right">Đã xem : {{ $chitiet->bv_luotxem }}<!-- | Đã tải: <span id="numdow">0</span></span>--></td>
		</tr>
	</tbody>
</table>
<input type="button" class="button-2" value="Quay lại" onclick="history.go(-1)">
&nbsp;
<div class="clear"> </div>
@endsection