@extends('khungtrang.bacot')

@section('Head')
<title>{{ $danhmuc->dm_title }}</title>
<meta name="description" content="{{ $danhmuc->dm_keyword }}">
<meta name="keywords" content="{{ $danhmuc->dm_description }}">
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

@if (count($danhsach) > 0)
<div class="other-news">
	<ul>
		@foreach ($danhsach as $item)
		<li>
			<a title="{{ $item->bv_tieude }}" href="{{ url('trang/'.Str::slug($item->bv_tieude).'-'.$item->bv_id.'.html') }}">{{ $item->bv_tieude }}</a>
			<span class="date">({{ date('d-m-Y', strtotime($item->bv_ngaythem)) }})</span>
		</li>
		@endforeach
	</ul>
</div>
@endif
<div class="clear">
</div>
        
@endsection