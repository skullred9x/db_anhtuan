@extends('khungtrang.haicot')

@section('Head')
<title>Tìm kiếm</title>
<meta name="description" content="Tìm kiếm">
<meta name="keywords" content="Tìm kiếm">

<link rel="StyleSheet" href="{{ asset('public/css/search.css') }}" type="text/css" />
@endsection

@section('NoiDung')
	<div class=" m-bottom"> 
		<img alt="{{ Session::get('ch_don_vi') }}" src="{{ Session::get('ch_anh_noi_bat') }}" style="width: 560px; height: 193px;"><br><br>
	</div>
	<div class="clear"> </div>
	<div id="id_form_search" class="box-border-shadow content-box clearfix">
		<h3 class="title-search"> Tìm kiếm </h3>
		<form action="{{ Request::url() }}" name="form_search" method="post" id="form_search">
			<div class="form">
				<div class="clearfix rows">
					<label> Từ khóa tìm kiếm: </label>
					<input type="text" class="input" id="search_query" name="txtTukhoa" value="@if (Session::has('txtTukhoa')){{ Session::get('txtTukhoa') }}@endif" maxlength="60">
					<input type="submit" id="search_submit" value="Tìm kiếm">
				</div>
			</div>
		</form>
	</div>
	
	@if (isset($danhsach))
	<div id="search_result">
		@if (count($danhsach) > 0)
		<div class="result-mod"> Kết quả tìm kiếm ({{ count($danhsach) }}): </div>
		<div class="result-frame">
			@foreach ($danhsach as $item)
			<div class="result-title"> 
				<a href="{{ url('tin-tuc/'.Str::slug($item->bv_tieude).'-'.$item->bv_id.'.html') }}">{{ $item->bv_tieude }}</a> 
			</div>
			<div class="result-content">
				{{ $item->bv_tomtat }}
			</div>
			@endforeach
		</div>
		@else
		<p>Không tìm thấy kết quả nào phù hợp.</p>
		@endif
	</div>
	@endif
	<div class="clear"> </div>
@endsection