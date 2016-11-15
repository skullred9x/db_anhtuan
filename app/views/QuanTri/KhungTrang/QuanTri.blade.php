<?php
	$idtk = Session::get('dangnhap');
	$dangnhap = DB::table('tb_taikhoan')->where('tk_id',$idtk)->where('tk_trangthai',1)->first();
?>

<!DOCTYPE html>
<html><head>

        <meta charset="UTF-8">
        <title>Quản trị website</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<link rel="shortcut icon" type="image/png" href="{{ Session::get('ch_favicon') }}"/>
		
        <link href="{{ asset('public/quantri/css/plus.css') }}" rel="stylesheet" type="text/css" />
		
        <!-- bootstrap 3.0.2 -->
        <link href="{{ asset('public/quantri/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="{{ asset('public/quantri/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="{{ asset('public/quantri/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
          <!-- DATA TABLES -->
        <link href="{{ asset('public/quantri/css/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />        
        <!-- Theme style -->
        <link href="{{ asset('public/quantri/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
        <!--Date picker-->
        <link rel="stylesheet" type="text/css" href="{{ asset('public/quantri/css/datepicker.css') }}">
        <link rel="shortcut icon" type="image/icon" href=""  />  


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    
		<!-- iCheck -->
		<script src="{{ asset('public/quantri/js/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
        
        <!--Check Form-->
        <script type="text/javascript" src="{{ asset('public/quantri/js/check.js') }}"></script>  
        <!--Ckeditor-->
        <script type="text/javascript" src="{{ asset('public/quantri/ckeditor/ckeditor.js') }}"></script>
		<script src="{{ asset('public/quantri/js/action.js') }}"></script>
		 <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>   
		
		<script src="{{ asset('public/quantri/js/ckfinder_v1.js') }}" type="text/javascript"></script>
		<script type="text/javascript">
			function BrowseServer( inputId )
			{
				var finder = new CKFinder() ;
				finder.BasePath = '{{ asset('public/quantri/ckeditor/ckfinder') }}' ;
				finder.SelectFunction = SetFileField ;
				finder.SelectFunctionData = inputId ;
				finder.Popup() ;
			}
			 
			function SetFileField( fileUrl, data )
			{
				document.getElementById( data["selectActionData"] ).value = fileUrl;
				document.getElementById("xImage").src = fileUrl;
			}
		</script>
		
		 <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="{{ asset('public/quantri/js/jquery.min_202.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('public/quantri/js/bootstrap.min.js') }}" type="text/javascript"></script>
         <script src="{{ asset('public/quantri/js/jquery-ui-1.10.3.min.js') }}" type="text/javascript"></script>
        
   	  <!-- DATA TABES SCRIPT -->
        <script src="{{ asset('public/quantri/js/plugins/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/quantri/js/plugins/datatables/dataTables.bootstrap.js') }}" type="text/javascript"></script>  
         <!-- AdminLTE App -->
    <script src="{{ asset('public/quantri/js/AdminLTE/app.js') }}" type="text/javascript"></script>
	<!--
	<script type="text/javascript" src="{{ asset('public/quantri/js/js_Validation/jquery.validationEngine-vi.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/quantri/js/js_Validation/jquery.validationEngine.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/quantri/js/js_Validation/validationEngine.jquery.css') }}">
	-->
	<script type="text/javascript">
            $(function() {
				//CKEDITOR.replaceClass = 'ckeditor';
                $(".textarea").wysihtml5();
            });
        </script>
    </head>
	
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="http://congnghesohungvuong.com" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                CNS Hùng Vương
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>{{ $dangnhap->tk_hoten }} <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="{{ $dangnhap->tk_anhdaidien }}" class="img-circle" alt="{{ $dangnhap->tk_hoten }}" />
                                    <p>
                                        {{ $dangnhap->tk_hoten }}
                                        <small>Gia nhập ngày {{ date('d/m/Y', strtotime($dangnhap->tk_ngaythem)) }}</small>
                                    </p>
                                </li>
								
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{ url('quantri/tai-khoan/sua-'.$dangnhap->tk_id) }}" class="btn btn-default btn-flat">Thông tin cá nhân</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ url('dang-xuat') }}" class="btn btn-default btn-flat">Đăng xuất</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ $dangnhap->tk_anhdaidien }}" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>{{ $dangnhap->tk_hoten }}</p>
                            <a href="{{ url('quantri/tai-khoan/sua-'.$dangnhap->tk_id) }}"><i class="fa fa-cog text-success"></i> Thông tin cá nhân</a>
                        </div>
                    </div>
                    <!-- search form -->
					<!--
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Tìm kiếm..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
					-->
                    <!-- /.search form -->
					
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li @if (strpos(Request::url(),'quantri/')===false) class="active" @endif>
                            <a href="{{ url('quantri') }}">
                                <i class="fa fa-dashboard"></i> <span>Bảng quản trị</span>
                            </a>
                        </li>
						
                        <li class="treeview @if (strpos(Request::url(),'bai-viet') || strpos(Request::url(),'chuyen-muc') || strpos(Request::url(),'binh-luan')) active @endif">
                            <a href="quantri/bai-viet">
                                <i class="fa fa-edit"></i>
                                <span>Bài viết</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li @if (strpos(Request::url(),'bai-viet') && strpos(Request::url(),'bai-viet/them-moi')===false) class="active" @endif><a href="{{ url('quantri/bai-viet') }}"><i class="fa fa-angle-double-right"></i> Tất cả bài viết</a></li>
                               <li @if (strpos(Request::url(),'bai-viet/them-moi')) class="active" @endif><a href="{{ url('quantri/bai-viet/them-moi') }}"><i class="fa fa-angle-double-right"></i> Viết bài mới</a></li>
                                <li @if (strpos(Request::url(),'chuyen-muc')) class="active" @endif><a href="{{ url('quantri/chuyen-muc') }}"><i class="fa fa-angle-double-right"></i> Chuyên mục</a></li>
                            </ul>
                        </li>
						
						<li class="treeview @if (strpos(Request::url(),'trinh-don') || strpos(Request::url(),'trinh-don')) active @endif">
                            <a href="quantri/trinh-don">
                                <i class="fa fa-bars"></i>
                                <span>Trình đơn (Menu)</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li @if (strpos(Request::url(),'trinh-don') && strpos(Request::url(),'trinh-don/')===false) class="active" @endif><a href="{{ url('quantri/trinh-don') }}"><i class="fa fa-angle-double-right"></i> Tất cả trình đơn</a></li>
                                <li @if (strpos(Request::url(),'trinh-don/them-moi')) class="active" @endif><a href="{{ url('quantri/trinh-don/them-moi') }}"><i class="fa fa-angle-double-right"></i> Trình đơn mới</a></li>
                            </ul>
                        </li>
						
                        <li class="treeview @if (strpos(Request::url(),'tai-khoan') || strpos(Request::url(),'tai-khoan')) active @endif">
                            <a href="quantri/tai-khoan">
                                <i class="fa fa-users"></i>
                                <span>Người dùng</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
							
                            <ul class="treeview-menu">
                                <li @if (strpos(Request::url(),'tai-khoan') && strpos(Request::url(),'tai-khoan/')===false) class="active" @endif><a href="{{ url('quantri/tai-khoan') }}"><i class="fa fa-angle-double-right"></i> Tất cả người dùng</a></li>
                                <li @if (strpos(Request::url(),'tai-khoan/them-moi')) class="active" @endif><a href="{{ url('quantri/tai-khoan/them-moi') }}"><a href="{{ url('quantri/tai-khoan/them-moi') }}"><i class="fa fa-angle-double-right"></i> Thêm người dùng</a></li>
                                <li @if (strpos(Request::url(),'quantri/tai-khoan/sua-'.Session::get('dangnhap'))) class="active" @endif><a href="{{ url('quantri/tai-khoan/sua-'.Session::get('dangnhap')) }}"><i class="fa fa-angle-double-right"></i> Hồ sơ của bạn</a></li>
                            </ul>
                        </li>
						
                        <li>
                            <a href="{{ url('quantri/lien-he') }}">
                                <i class="fa fa-envelope"></i> <span>Liên hệ</span>
								@if (Session::has('lhchuaxem'))<small class="badge pull-right bg-yellow">{{ Session::get('lhchuaxem') }}</small> @endif
                            </a>
                        </li>
						
						<li class="treeview @if (strpos(Request::url(),'module') || strpos(Request::url(),'module')) active @endif">
                            <a href="quantri/module">
                                <i class="fa fa-desktop"></i>
                                <span>Module</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li @if (strpos(Request::url(),'module') && strpos(Request::url(),'module/')===false) class="active" @endif><a href="{{ url('quantri/module') }}"><i class="fa fa-angle-double-right"></i> Tất cả module</a></li>
                                  <li @if (strpos(Request::url(),'module/them-moi')) class="active" @endif><a href="{{ url('quantri/module/them-moi') }}"><i class="fa fa-angle-double-right"></i> Thêm module</a></li>
                            </ul>
                        </li>
						
						<li class="treeview @if (strpos(Request::url(),'quang-cao') || strpos(Request::url(),'quang-cao')) active @endif">
                            <a href="quantri/quang-cao">
                                <i class="fa fa-bullhorn"></i>
                                <span>Quảng cáo</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li @if (strpos(Request::url(),'quang-cao') && strpos(Request::url(),'quang-cao/')===false) class="active" @endif><a href="{{ url('quantri/quang-cao') }}"><i class="fa fa-angle-double-right"></i> Tất cả quảng cáo</a></li>
                                  <li @if (strpos(Request::url(),'quang-cao/them-moi')) class="active" @endif><a href="{{ url('quantri/quang-cao/them-moi') }}"><i class="fa fa-angle-double-right"></i> Thêm quảng cáo</a></li>
                            </ul>
                        </li>
						
						<li class="treeview @if (strpos(Request::url(),'hien-mau') || strpos(Request::url(),'hien-mau')) active @endif">
                            <a href="quantri/hien-mau">
                                <i class="fa fa-stethoscope"></i>
                                <span>Đăng ký hiến máu</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li @if (strpos(Request::url(),'hien-mau') && strpos(Request::url(),'hien-mau/')===false) class="active" @endif><a href="{{ url('quantri/hien-mau') }}"><i class="fa fa-angle-double-right"></i> Danh sách thành viên</a></li>
                                  <li @if (strpos(Request::url(),'hien-mau/them-moi')) class="active" @endif><a href="{{ url('quantri/hien-mau/them-moi') }}"><i class="fa fa-angle-double-right"></i> Thêm thành viên</a></li>
                            </ul>
                        </li>
						
						<li class="treeview @if (strpos(Request::url(),'lich-cong-tac') || strpos(Request::url(),'lich-cong-tac')) active @endif">
                            <a href="quantri/lich-cong-tac">
                                <i class="fa fa-calendar"></i>
                                <span>Lịch công tác tuần</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li @if (strpos(Request::url(),'lich-cong-tac') && strpos(Request::url(),'lich-cong-tac/')===false) class="active" @endif><a href="{{ url('quantri/lich-cong-tac') }}"><i class="fa fa-angle-double-right"></i> Tất cả lịch công tác</a></li>
                                  <li @if (strpos(Request::url(),'lich-cong-tac/them-moi')) class="active" @endif><a href="{{ url('quantri/lich-cong-tac/them-moi') }}"><i class="fa fa-angle-double-right"></i> Thêm lịch công tác</a></li>
                            </ul>
                        </li>
						
						<li>
                            <a href="javascript:void(BrowseServer())">
                                <i class="fa fa-camera"></i> <span>Tệp tin</span>
                            </a>
                        </li>
						
						<li @if (strpos(Request::url(),'cau-hinh')) class="active" @endif>
                            <a href="{{ url('quantri/cau-hinh') }}">
                                <i class="fa fa-cog"></i> <span>Cấu hình website</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
				@yield('NoiDung')
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
		
		
		<script type="text/javascript">
            $(function() {

                "use strict";

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"]').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass: 'iradio_minimal-blue'
                });

                //When unchecking the checkbox
                $("#check-all").on('ifUnchecked', function(event) {
                    //Uncheck all checkboxes
                    $("input[type='checkbox']", ".table").iCheck("uncheck");
                });
                //When checking the checkbox
                $("#check-all").on('ifChecked', function(event) {
                    //Check all checkboxes
                    $("input[type='checkbox']", "#example1").iCheck("check");
                });
            });
        </script>
    </body>
</html>
