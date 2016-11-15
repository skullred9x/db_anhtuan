@extends('khungtrang.bacot')

@section('Head')
<title>{{ $chitiet->bv_title }}</title>
<meta name="description" content="{{ $chitiet->bv_description }}">
<meta name="keywords" content="{{ $chitiet->bv_keyword }}">

<link rel="StyleSheet" href="{{ asset('public/css/video.css') }}" type="text/css" />
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


<div class="clear"></div>
<div style="text-align: left; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bolder; color: rgb(243, 100, 0);">
	<img width="6" height="6" style="vertical-align: middle;" src="{{ asset('public/images/video/navi.gif') }}" alt="">
	<a href="{{ url('video/'.Str::slug($chitiet->bv_tieude).'-'.$chitiet->bv_id.'.html') }}" title="{{ $chitiet->bv_tieude }}"><u>{{ $chitiet->bv_tieude }}</u></a>
({{ $chitiet->bv_luotxem }} lượt xem)</div>
<br>
<div style="text-align: center;">
	<div id="myElement"></div>
	<script>
		jwplayer("myElement").setup({
			file: "{{ trim(strip_tags($chitiet->bv_noidung)) }}",
			image: "{{ $chitiet->bv_anhdaidien }}",
			width: 560,
			height: 360
		});
	</script>
</div>
<br>
<br>
<table cellspacing="4" cellpadding="4" style="width: 98%; border-top: solid 1px #cccccc; border-bottom: solid 1px #cccccc;">
	<tbody>
		<tr>
			<td>
			<div></div>
			</td>
		</tr>
	</tbody>
</table>
<br>
<br>
@if (count($tinkhac) > 0)
<div style="text-align: left; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bolder; color: rgb(243, 100, 0);">
<img width="6" height="6" style="vertical-align: middle;" src="/themes/default/images/video/navi.gif" alt=""> Video khác</div>

@foreach ($tinkhac as $item)
<div style="display:inline; float: left; margin: 5px;text-align:center;">
	<div style="width: 130px; height: 150px;border: 1px solid #cccccc;padding:10px; font-size: 11px;border-radius: 10px;-moz-border-radius: 10px;-webkit-border-radius: 10px;">
		<a style="color: #5b5b5b;" href="{{ url('video/'.Str::slug($item->bv_tieude).'-'.$item->bv_id.'.html') }}" title="{{ $item->bv_tieude }}"><img src="{{ $item->bv_anhdaidien }}" alt="{{ $item->bv_tieude }}" width="110"><br><div style="text-align: justify">{{ $item->bv_tieude }}</div></a>
		<p style="float:right; text-align: justify">Đã xem: {{ $item->bv_luotxem }}</p>
	</div>
</div>
@endforeach
@endif
<div class="clear"></div>
@endsection