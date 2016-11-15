@extends('khungtrang.bacot')

@section('Head')
<title>{{ $chitiet->bv_title }}</title>
<meta name="description" content="{{ $chitiet->bv_description }}">
<meta name="keywords" content="{{ $chitiet->bv_keyword }}">
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
    <div class="header-details">
		<!--
        <div class="action fr right">
            <a rel="nofollow" title="Gửi bài viết qua email" href="javascript:void(0);" onclick="NewWindow('/news/sendmail/Hoat-dong-Hoi/Tap-huan-So-cap-cuu-tai-truong-Trung-hoc-pho-thong-Tu-Da-huyen-Phu-Ninh-497/','','500','400','no');return false" class="email">Gửi bài viết qua email</a>
            <br>
            <a title="In ra" href="javascript: void(0)" onclick="NewWindow('/news/print/Hoat-dong-Hoi/Tap-huan-So-cap-cuu-tai-truong-Trung-hoc-pho-thong-Tu-Da-huyen-Phu-Ninh-497/','','840','768','yes');return false" class="print">In ra</a>
            <br>
            <a class="save" title="Lưu bài viết này" href="/news/savefile/Hoat-dong-Hoi/Tap-huan-So-cap-cuu-tai-truong-Trung-hoc-pho-thong-Tu-Da-huyen-Phu-Ninh-497/">Lưu bài viết này</a>
        </div>
		-->
        <div class="title">
            <h1>{{ $chitiet->bv_tieude }}</h1>
            <span class="small">
				Đăng lúc: {{ date('d-m-Y h:m', strtotime($chitiet->bv_ngaythem)) }}
                - Người đăng bài viết: <span class="highlight">{{ $taikhoan->tk_hoten }}</span>
            
            </span>
        </div>
        <div class="clear">
        </div>
    </div>
           <div id="hometext" class="short-desc clearfix">
			{{ $chitiet->bv_tomtat }}
           	<div style="width:460px;margin:10px auto;">
                <img alt="{{ $chitiet->bv_tieude }}" src="{{ $chitiet->bv_anhdaidien }}" width="460">
                <p style="text-align: center;">
                    <em>{{ $chitiet->bv_tieude }}</em>
                </p>
            </div>
            
        </div>
    
    
    <div id="bodytext" class="details-content clearfix">
        <div style="text-align: justify;">
			{{ $chitiet->bv_noidung }}
		</div>
    </div>
    <div class="clear"></div>
    <div class="aright source"></div>
	
	{{--
	@if (!empty($chitiet->bv_tacgia))
	<div class="aright source">
		<strong>Tác giả bài viết: </strong>{{ $chitiet->bv_tacgia }}
	</div>
	@endif
    --}}
	
	@if (count($tinkhac) > 0)
	<div class="other-news">
        <h4>Các tin khác</h4>
        <ul>
			@foreach ($tinkhac as $item)
			<li>
                <a title="{{ $item->bv_tieude }}" href="{{ url('tin-tuc/'.Str::slug($item->bv_tieude).'-'.$item->bv_id.'.html') }}">{{ $item->bv_tieude }}</a>
                <span class="date">({{ date('d-m-Y', strtotime($item->bv_ngaythem)) }})</span>
            </li>
			@endforeach
        </ul>
    </div>
	@endif
		<div class="clear">
		</div>
        
@endsection