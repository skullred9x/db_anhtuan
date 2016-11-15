@extends('khungtrang.bacot')

@section('Head')
<title>{{ $danhmuc->dm_title }}</title>
<meta name="description" content="{{ $danhmuc->dm_keyword }}">
<meta name="keywords" content="{{ $danhmuc->dm_description }}">

<link rel="stylesheet" type="text/css" href="{{ asset('public/css/albums.css') }}">
@endsection

@section('NoiDung')
<div class="main">
	<div class="breadcrumbs">
		{{ thuvien::PhanCapDM($danhmuc->dm_id) }}
	</div>
</div>
		
	<div class=" m-bottom">
		<img alt="{{ Session::get('ch_don_vi') }}" src="{{ Session::get('ch_anh_noi_bat') }}" style="width: 560px; height: 193px;"><br><br>
	</div>


	<div class="clear">
	</div>
	
@foreach ($dsdanhmuc as $dm)
<?php
$anh = tb_baiviet::where('dm_id',$dm->dm_id)
					->where('bv_kieu',4)
					->where('bv_trangthai',1)
					->orderBy('bv_id', 'desc')
					->get();
?>
@if (count($anh)>0)
<div id="albums" style="margin-bottom:5px">
  <div class="mod_title">
	<a href="{{ url(Str::slug($dm->dm_tieude).'-'.$dm->dm_id.'.html') }}" title="{{ $dm->dm_tieude }}">{{ $dm->dm_tieude }}</a> 
	<span style="font-size:11px; color:#999; font-weight:normal">{{ count($anh) }} ảnh<!-- | 13 lượt xem--></span>
  </div>
  
  <div class="mod_content">
	<div class="items_rows">
		@foreach ($anh as $item)
		<div class="items_cell">
			<a class="lightbox" href="{{ $item->bv_anhdaidien }}" title="{{ $item->bv_tieude }}" rel="shadowbox[miss]"><img src="{{ $item->bv_anhdaidien }}" alt="{{ $item->bv_tieude }}" style="width:113px; height:75px"></a><br>
			<span class="title_links">{{ $item->bv_tieude }}</span><br>
		</div>
		@endforeach
		<div class="clear"></div>
		
	</div>
  </div>
  <!--
  <div class="viewall">
	<a href="{{ url(Str::slug($dm->dm_tieude).'-'.$dm->dm_id.'.html') }}" title="Xem tất cả">Xem tất cả</a> 
  </div>
  -->
</div>
@endif
@endforeach
<div class="clear"></div>

<script type="text/javascript">
	$('a.lightbox').divbox();
</script> 
@endsection