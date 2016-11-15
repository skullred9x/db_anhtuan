@extends('khungtrang.bacot')

@section('Head')
<title>Trang chủ</title>
<meta name="description" content="Chữ thập đỏ tỉnh thái nguyên">
<meta name="keywords" content="Chữ thập đỏ tỉnh thái nguyên">
@endsection

@section('NoiDung')
	<div class=" m-bottom">
	@if (count($slide)>0)
		<div id="lofslidecontent45" class="lof-slidecontent">
			<div class="preload" style="display: none;">
				<div></div>
			</div>
			<div class="lof-main-outer">
				<ul class="lof-main-wapper lof-opacity">
					@foreach ($slide as $item)
					<li style="opacity: 0;"> 
						<!--
						<a class="lightbox" href="{{ $item->bv_anhdaidien }}"> <img src="{{ $item->bv_anhdaidien }}" alt="{{ $item->bv_tieude }}" title="{{ $item->bv_tieude }}"></a>
						-->
						<img src="{{ $item->bv_anhdaidien }}" alt="{{ $item->bv_tieude }}" title="{{ $item->bv_tieude }}">
						<div class="lof-main-item-desc">
							<h3>{{ thuvien::CatChuoi($item->bv_tieude, 90) }}</h3>
							<p>@if (!empty($item->bv_tomtat)){{ thuvien::CatChuoi($item->bv_tomtat, 155) }} @else {{ thuvien::CatChuoi(trim(strip_tags($item->bv_noidung)), 155) }} @endif</p>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="lof-navigator-outer" style="height: 210px; width: 196px;">
				<ul class="lof-navigator" style="height: 700px; top: -210px;">
					@foreach ($slide as $item)
					<li class="" style="height: 70px; width: 196px;">
						<div> 
							<img src="{{ $item->bv_anhdaidien }}" alt="{{ $item->bv_tieude }}">
							<h3><a title="{{ $item->bv_tieude }}" href="{{ url('tin-tuc/'.Str::slug($item->bv_tieude).'-'.$item->bv_id.'.html') }}">{{ thuvien::CatChuoi($item->bv_tieude, 125) }}</a></h3>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	@endif
	</div>
	
	<div class=" m-bottom">
		<img alt="{{ Session::get('ch_don_vi') }}" src="{{ Session::get('ch_anh_noi_bat') }}" style="width: 560px; height: 193px;"><br><br>
	</div>
	<div class="clear"> </div>
	
	@foreach ($danhmuc as $dm)
	<?php
		$tinmoi = tb_baiviet::where('dm_id',$dm->dm_id)->where('bv_kieu',1)->where('bv_trangthai',1)->orderBy('bv_id', 'desc')->first();
		$tinkhac = tb_baiviet::where('dm_id',$dm->dm_id)->where('bv_kieu',1)->where('bv_trangthai',1)->orderBy('bv_id', 'desc')->skip(1)->take(Session::get('ch_chuyen_muc'))->get();
	?>
	@if (count($tinmoi)>0)
	<div class="cat-box-header">
		<div class="cat-nav"> <a title="" class="current-cat" href="{{ url(Str::slug($dm->dm_tieude).'-'.$dm->dm_id.'.html') }}">{{ $dm->dm_tieude }}</a> </div>
	</div>
	<div class="box-border-shadow m-bottom">
		<div class="cat-news clearfix">
			<div class="news-full">
				<div class="content-box clearfix">
					<div class="m-bottom">
						<h4><a title="{{ $tinmoi->bv_tieude }}" href="{{ url('tin-tuc/'.Str::slug($tinmoi->bv_tieude).'-'.$tinmoi->bv_id.'.html') }}">{{ $tinmoi->bv_tieude }}</a></h4>
						<p class="small"> Đăng lúc: {{ date('d-m-Y h:m', strtotime($tinmoi->bv_ngaythem)) }} </p>
					</div>
					<a title="{{ $tinmoi->bv_tieude }}" href="{{ url('tin-tuc/'.Str::slug($tinmoi->bv_tieude).'-'.$tinmoi->bv_id.'.html') }}"><img class="s-border fl left" src="{{ $tinmoi->bv_anhdaidien }}" alt="{{ $tinmoi->bv_tieude }}" width="100"></a>
					<p>@if (!empty($tinmoi->bv_tomtat)){{ thuvien::CatChuoi($tinmoi->bv_tomtat, 370) }} @else {{ thuvien::CatChuoi(trim(strip_tags($tinmoi->bv_noidung)), 370) }} @endif</p>
					<div class="aright"> <a title="Xem tiếp..." class="more" href="{{ url('tin-tuc/'.Str::slug($tinmoi->bv_tieude).'-'.$tinmoi->bv_id.'.html') }}">Xem tiếp...</a> </div>
				</div>
			</div>
			
			@if (count($tinkhac)>0)
			<div class="ot-news-full">
				<ul>				
					@foreach ($tinkhac as $item)
					<li> <a title="{{ $item->bv_tieude }}" href="{{ url('tin-tuc/'.Str::slug($item->bv_tieude).'-'.$item->bv_id.'.html') }}">{{ $item->bv_tieude }}</a> </li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
	@endif
	@endforeach
	
	<div class="clear"> </div>
	
	<script type="text/javascript">
		$('a.lightbox').divbox();
	</script> 
@endsection