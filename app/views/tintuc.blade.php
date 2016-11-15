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
<div class="clear"> </div>

@if (count($danhsach) > 0)
@foreach ($danhsach as $item)
<div class="box-border-shadow m-bottom listz-news">
	<div class="content-box">
		<a href="{{ url('tin-tuc/'.Str::slug($item->bv_tieude).'-'.$item->bv_id.'.html') }}" title="{{ $item->bv_tieude }}"><img class="s-border fl left" alt="{{ $item->bv_tieude }}" src="{{ $item->bv_anhdaidien }}" width="100"></a>
		<h4><a href="{{ url('tin-tuc/'.Str::slug($item->bv_tieude).'-'.$item->bv_id.'.html') }}" title="{{ $item->bv_tieude }}">{{ $item->bv_tieude }}</a></h4>
		<p>
			{{ $item->bv_tomtat }}
		</p>
		<div class="aright">
			<a title="Xem tiếp..." class="more" href="{{ url('tin-tuc/'.Str::slug($item->bv_tieude).'-'.$item->bv_id.'.html') }}">Xem tiếp...</a>
		</div>
		<div class="clear"> </div>
	</div>
	<?php
		$muc = tb_danhmuc::where('dm_id',$item->dm_id)->where('dm_trangthai',1)->first();
	?>
	<div class="info small"> 
		Đăng lúc: {{ date('d-m-Y h:m', strtotime($item->bv_ngaythem)) }} | Đã xem: {{ $item->bv_luotxem }} | Chuyên mục: <a title="{{ $muc->dm_tieude }}" href="{{ url(Str::slug($muc->dm_tieude).'-'.$muc->dm_id.'.html') }}" class="highlight">{{ $muc->dm_tieude }}</a>
	</div>
</div>
@endforeach
@else
	<h2>Không có tin nào trong mục này.</h2>
@endif
<!--
<div class="other-news">
	<h4>Các tin khác</h4>
	<ul>
		<li> <a href="#" title="Hoạt động chữ thập đỏ về cứu trợ khẩn cấp và trợ giúp nhân đạo">Hoạt động chữ thập đỏ về cứu trợ khẩn cấp và trợ giúp nhân đạo</a> <span class="small date">(15/01/2014)</span> </li>
	</ul>
</div>
-->
<div class="generate_page">
    <?php echo with(new phantrang($danhsach))->render(); ?>
</div>
<div class="clear"> </div>
@endsection