@extends('khungtrang.haicot')

@section('Head')
<title>{{ $chitiet->bv_title }}</title>
<meta name="description" content="{{ $chitiet->bv_description }}">
<meta name="keywords" content="{{ $chitiet->bv_keyword }}">
@endsection

@section('NoiDung')
        <div class=" m-bottom">
			<img alt="{{ Session::get('ch_don_vi') }}" src="{{ Session::get('ch_anh_noi_bat') }}" style="width: 560px; height: 193px;"><br><br>
		</div>


		<div class="clear">
		</div>
        <div class="box-border">
    <div class="page-header">
        <h2>{{ $chitiet->bv_tieude }}</h2>
        <span class="small">Được thêm vào: {{ date('d-m-Y h:m', strtotime($chitiet->bv_ngaythem)) }}</span>
        <div class="clear">
        </div>
    </div>
    <div class="content-box">
        <div class="content-page">
            <p align="justify" class="articlehometext">{{ $chitiet->bv_noidung }}</p>
        </div>
		
		@if (count($tinkhac) > 0)		
		<div class="other-news" style="border-top: 1px solid #d8d8d8;">
			<ul style="margin:10px;">
				@foreach ($tinkhac as $item)
				<li>
					<a title="{{ $item->bv_tieude }}" href="{{ url('trang/'.Str::slug($item->bv_tieude).'-'.$item->bv_id.'.html') }}">{{ $item->bv_tieude }}</a>
				</li>
				@endforeach
			</ul>
		</div>
        @endif
    </div>
</div>
&nbsp;
<div class="clear">
</div>
@endsection