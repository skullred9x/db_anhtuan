<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0030)http://chuthapdophutho.org.vn/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="content-language" content="vi">
	<meta name="language" content="vietnamese">
	<meta name="author" content="Lê Minh Thành - 0972 567 600 - minhthanh.hvu@gmail.com">
	<meta name="copyright" content="Lê Minh Thành - 0972 567 600 - minhthanh.hvu@gmail.com">
	<meta name="robots" content="index, archive, follow, noodp">
	<meta name="googlebot" content="index,archive,follow,noodp">
	<meta name="msnbot" content="all,index,follow">
	<meta name="generator" content="Lê Minh Thành">
	<link rel="canonical" href="{{ url('trang-chu.html') }}">
	<link rel="shortcut icon" type="image/png" href="{{ Session::get('ch_favicon') }}"/>
	
	@yield('Head')
	
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/reset.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/screen.css') }}" media="screen">
	<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('public/css/icons.css') }}">
	<link rel="StyleSheet" href="{{ asset('public/css/news.css" type="text/css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/real.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/tab_info.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/shadowbox.css') }}">
	
	<script src="http://jwpsrv.com/library/8NWEZmYgEeSTxgoORWfmyA.js"></script>
	<script type="text/javascript" src="{{ asset('public/js/vi.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/jquery.min.js') }}"></script>
	<script type="text/javascript">
	//<![CDATA[
	var nv_siteroot="/",nv_sitelang="vi",nv_name_variable="nv",nv_fc_variable="op",nv_lang_variable="language",nv_module_name="news",nv_my_ofs=7,nv_my_abbr="ICT",nv_cookie_prefix="nv3c_Lvulw",nv_area_admin=0;
	//]]>
	</script>
	<script type="text/javascript" src="{{ asset('public/js/global.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/user.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/style_yahoo.css') }}">
	<script type="text/javascript" src="{{ asset('public/js/jquery.easing.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/script.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/divbox.css') }}">
	<script type="text/javascript" src="{{ asset('public/js/divbox.js') }}"></script>
	<script type="text/javascript">
	 $(document).ready( function(){	
		$('#lofslidecontent45').lofJSidernews({	
			interval:4000,
			direction:'opacity',
			duration:1000,
			easing:'easeInOutSine'} 
		);						
	});
	</script>
	<script type="text/javascript" src="{{ asset('public/js/shadowbox.js') }}"></script>
	<script type="text/javascript">Shadowbox.init();</script><script type="text/javascript" src="{{ asset('public/js/user(1).js') }}"></script>
</head>

<body>
<noscript>
	<div id="nojavascript">
		Trình duyệt của bạn đã tắt chức năng hỗ trợ JavaScript.<br />
		Website chỉ làm việc khi bạn bật nó trở lại.
	</div>
</noscript>
<div class="wrapper">
<div class="header">
	<div class="logo">
		<div class="m-bottom">
			<a href="{{ url('trang-chu.html') }}" title="{{ Session::get('ch_don_vi') }}"><img alt="{{ Session::get('ch_don_vi') }}" src="{{ Session::get('ch_banner') }}" style="height:200px; width:1000px" /></a>
		</div>
	</div>
	<div class="clear"> </div>
	<div class="topadv">
		<div class="topbar">
			<div class="topbarleft"> </div>
			<div class="top">
				{{ thuvien::loadmenu() }}
				<form action="{{ url('tim-kiem.html') }}" method="post">
				<div class="q-search fr">
					<input type="text" class="txt-qs" name="txtTukhoa" id="topmenu_search_query" maxlength="60" value="@if (Session::has('txtTukhoa')){{ Session::get('txtTukhoa') }}@endif" placeholder="Từ khóa tìm kiếm">
					<input type="submit" class="submit-qs" value="" name="btnTimkiem" id="topmenu_search_submit">
				</div>
				</form>
			</div>
			<div class="clear"> </div>
		</div>
	</div>
	<div class="chuchay">
		<marquee direction="left" scrolldelay="60" scrollamount="3">
			{{ Session::get('ch_chu_chay') }}
		</marquee>
  </div>
</div>
<div class="main margin">
