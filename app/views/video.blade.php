@extends('khungtrang.bacot')

@section('Head')
<title>{{ $danhmuc->dm_title }}</title>
<meta name="description" content="{{ $danhmuc->dm_keyword }}">
<meta name="keywords" content="{{ $danhmuc->dm_description }}">

<link rel="StyleSheet" href="{{ asset('public/css/video.css') }}" type="text/css" />
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

<div class="clear"></div>

@if (count($dsdanhmuc) > 0)
<div style="display: block;" id="sw_cont">
	<div style="padding: 5px; margin: 5px;">
		<div style="text-align: center; font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bolder; color: rgb(243, 100, 0);">
			<img width="56" height="70" style="vertical-align: middle; border-width: 0px;" src="{{ asset('public/images/video/youtube.gif') }}" alt="Video Clips"> Video Clips
		</div>
		<br>
		
		@foreach ($dsdanhmuc as $dm)
			<?php
				$video = tb_baiviet::where('dm_id',$dm->dm_id)
									->where('bv_kieu',3)
									->where('bv_trangthai',1)
									->orderBy('bv_id', 'desc')
									->get();
			?>
			@if (count($video)>0)
				<div class="video_cate">
					<div class="video_main">
						<img width="6" height="6" style="vertical-align: middle; margin-right: 10px;" src="{{ asset('public/images/video/navi.gif') }}" alt=""><a href="{{ url(Str::slug($dm->dm_tieude).'-'.$dm->dm_id.'.html') }}" title="{{ $dm->dm_tieude }}">{{ $dm->dm_tieude }}</a>
						<span style="float:right;">{{ count($video) }} Video<!-- | 123 lượt xem--></span>
					</div>
					@foreach ($video as $item)
						<div style="display:inline; float: left; margin: 5px;text-align:center;">
							<div style="width: 130px; height: 150px;border: 1px solid #cccccc;padding:10px; font-size: 11px;border-radius: 10px;-moz-border-radius: 10px;-webkit-border-radius: 10px;">
								<a href="{{ url('video/'.Str::slug($item->bv_tieude).'-'.$item->bv_id.'.html') }}" title="{{ $item->bv_tieude }}"><img src="{{ $item->bv_anhdaidien }}" alt="{{ $item->bv_tieude }}" width="110"></a>
								<div style="text-align: justify"><a style="color: #5b5b5b;" href="{{ url('video/'.Str::slug($item->bv_tieude).'-'.$item->bv_id.'.html') }}" title="{{ $item->bv_tieude }}">{{ $item->bv_tieude }}</a></div>
								<p style="float:right; text-align: justify;">Đã xem: {{ $item->bv_luotxem }}</p>
							</div>
						</div>
					@endforeach
				</div>
			@endif
		@endforeach
		<div class="clear"></div>
		
	</div>
</div>
@endif
	<div class="clear">
</div>
@endsection