@extends('khungtrang.bacot')

@section('Head')
<title>Lịch công tác</title>
<meta name="description" content="Lịch công tác">
<meta name="keywords" content="Lịch công tác">

<link rel="stylesheet" type="text/css" href="{{ asset('public/css/vgtnotice.css') }}">
@endsection

@section('NoiDung')		
		<div class="main">
			<div class="breadcrumbs">
				
			</div>
		</div>
		
        <div class=" m-bottom">
			<img alt="{{ Session::get('ch_don_vi') }}" src="{{ Session::get('ch_anh_noi_bat') }}" style="width: 560px; height: 193px;"><br><br>
		</div>

		@if (count($danhsach) > 0)
		<div class="clear"></div>
		
		<form id="search_n" method="post" align="center" action="{{ Request::url() }}">
			<div align="center">	
				<select name="lct_id">
					<option value="">Chọn tuần</option>
					@foreach ($danhsach as $item)
					<option value="{{ $item->lct_id }}" @if (isset($chitiet) && $chitiet->lct_id == $item->lct_id) selected @endif>Tuần {{ $item->lct_tuan }} - Từ ngày {{ $item->lct_tungay }} đến ngày {{ $item->lct_denngay }}</option>
					@endforeach
				</select>
				<button id="button_submit" type="submit">Xem lịch</button>
			</div>
		</form>
		
		<div class="thongbao">
			<h3>Lịch làm việc tuần: @if (isset($chitiet)){{ $chitiet->lct_tuan }}@endif</h3>
		</div>
		@else
			<h2>Hiện tại chưa có lịch làm việc.</h2>
		@endif
		
		@if (isset($chitiet))
		<div class="thongbao"><h1>{{ Session::get('ch_don_vi') }}</h1></div>
		<div class="thongbao">
			<h2>Từ ngày {{ $chitiet->lct_tungay }} đến ngày {{ $chitiet->lct_denngay }} </h2>
		</div>
		<br>
		<div class="lichcongtac">
			{{ $chitiet->lct_noidung }}
		</div>
		<!--
		<table class="tieude" style="border-collapse:collapse;border-color:#999999" cellpadding="2" cellspacing="2" width="100%" border="1">
			<tbody>
				<tr class="header_n">
					<td width="10%"></td>
					<td width="43%">Sáng</td>
					<td width="43%">Chiều</td>
				</tr>
				<tr class="content_n">
					<td>Thứ 2</td>
					<td><div style="text-align: justify;"></div></td>
					<td><div style="text-align: justify;"></div></td>
				</tr>
				<tr class="content_n">
					<td>Thứ 3</td>
					<td><div style="text-align: justify;"></div></td>
					<td><div style="text-align: justify;"></div></td>
				</tr>
				<tr class="content_n">
					<td>Thứ 4</td>
					<td><div style="text-align: justify;"></div></td>
					<td><div style="text-align: justify;"></div></td>
				</tr>
				<tr class="content_n">
					<td>Thứ 5</td>
					<td><div style="text-align: justify;"></div></td>
					<td><div style="text-align: justify;"></div></td>
				</tr>
				<tr class="content_n">
					<td>Thứ 6</td>
					<td><div style="text-align: justify;"></div></td>
					<td><div style="text-align: justify;"></div></td>
				</tr>
				<tr class="content_n">
					<td>Thứ 7</td>
					<td><div style="text-align: justify;"></div></td>
					<td><div style="text-align: justify;"></div></td>
				</tr>			
				<tr class="content_n">
					<td>Chủ nhật</td>
					<td><div style="text-align: justify;"></div></td>
					<td><div style="text-align: justify;"></div></td>
				</tr>
			</tbody>
		</table>
		-->
		@endif
		<div class="clear"></div>
@endsection