@extends('khungtrang.bacot')

@section('Head')
<title>{{ $danhmuc->dm_title }}</title>
<meta name="description" content="{{ $danhmuc->dm_keyword }}">
<meta name="keywords" content="{{ $danhmuc->dm_description }}">

<link rel="StyleSheet" href="{{ asset('public/css/laws.css') }}" type="text/css" />
@endsection

@section('NoiDung')
<div class="main">
	<div class="breadcrumbs"> {{ thuvien::PhanCapDM($danhmuc->dm_id) }} </div>
</div>
<div class=" m-bottom">
	<img alt="{{ Session::get('ch_don_vi') }}" src="{{ Session::get('ch_anh_noi_bat') }}" style="width: 560px; height: 193px;"><br><br>
</div>
<div class="clear"> </div>

@if (count($danhsach) > 0)
<!--
<script language="javascript" type="text/javascript">
function laws_swhidden(divname) {
	var a = document.getElementById(divname);
	if(a.style.display == 'none') {
		a.style.display = 'block';
	} else {
		a.style.display = 'none';
	}
}
</script>
<form method="post" action="/laws/">
	<div align="center" class="bdlaw"> <strong>Tìm văn bản: </strong>
		<input name="q" id="q" type="text" value=" " maxlength="60" style="border: 1px solid #CCCCCC; width: 200px">
		<input name="submit1" type="submit" value="Tìm kiếm">
		<a href="#" onclick="laws_swhidden('laws_search');return false;">Tìm kiếm nâng cao</a>
		<table id="laws_search" border="0" style="width:420px; display:none; margin-bottom: 0;">
			<tbody>
				<tr>
					<td colspan="2" style="text-align: center;"><strong><em>Tìm chính xác cụm từ </em></strong>
						<input type="checkbox" name="fullq" value="1"></td>
				</tr>
				<tr>
					<td style="text-align: left">Trong: </td>
					<td style="text-align: right"><select name="sein">
							<option value="0" selected="selected">Tất cả</option>
							<option value="1">Số / ký hiệu</option>
							<option value="2">Trích yếu</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="text-align: left">Ngày ban hành: </td>
					<td style="text-align: right"> Từ:
						<input id="ttime" name="ttime" style="width: 70px;" value="" type="text">
						<img src="{{ asset('public/images/calendar.jpg') }}" style="cursor: pointer; vertical-align: middle;" onclick="popCalendar.show(this, 'ttime', 'dd/mm/yyyy', true);" alt=""> &nbsp;&nbsp;Đến:
						<input id="dtime" name="dtime" style="width: 70px;" value="" type="text">
						<img src="{{ asset('public/images/calendar.jpg') }}" style="cursor: pointer; vertical-align: middle;" onclick="popCalendar.show(this, 'dtime', 'dd/mm/yyyy', true);" alt=""></td>
				</tr>
			</tbody>
		</table>
	</div>
</form>
-->

<table class="archives_list">
	<thead>
		<tr align="center">
			<td width="100px">Số/Ký hiệu</td>
			<td width="100px">Ngày BH</td>
			<td>Trích yếu</td>
			<td width="80"></td>
		</tr>
	</thead>
	<tbody>
		@foreach ($danhsach as $item)
		<tr>
			<td><a href="{{ url('van-ban/'.Str::slug($item->bv_tieude).'-'.$item->bv_id.'.html') }}">{{ $item->bv_sohieu }}</a></td>
			<td>{{ date('d/m/Y', strtotime($item->bv_ngaythem)) }}</td>
			<td><p align="justify"><a href="{{ url('van-ban/'.Str::slug($item->bv_tieude).'-'.$item->bv_id.'.html') }}">{{ $item->bv_tieude }}</a></p></td>
			<td align="center"><a href="{{ trim(strip_tags($item->bv_noidung)) }}"> <span class="archives_down doc">Tải về</span> </a></td>
		</tr>
		@endforeach
	</tbody>
</table>

<div class="page">
	<?php echo with(new phantrang($danhsach))->render(); ?>
</div>
@else
	<h2>Không có văn bản nào trong mục này.</h2>
@endif
<div class="clear"> </div>
@endsection