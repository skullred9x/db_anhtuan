@extends('QuanTri/KhungTrang/QuanTri')

@section('NoiDung')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Xem liên hệ
		<!--<small>Control panel</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('quantri') }}"><i class="fa fa-dashboard"></i> Bảng quản trị</a></li>
		<li><a href="{{ url('quantri/lien-he') }}">Liên hệ</a></li>
		<li class="active">Xem</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">
			<div class="box box-danger">
			<!-- general form elements -->
				<div class="box-header">
					<h3 class="box-title">Thông tin liên hệ</h3>
				</div><!-- /.box-header -->
				
				<!-- form start -->
					<div class="box-body">
						<div class="form-group">
							<label>Tiêu đề </label>
							<small class="help-block">{{ $chitiet->lh_tieude }}</small>
						</div>
						<div class="form-group">
							<label>Họ tên </label>
							<small class="help-block">{{ $chitiet->lh_hoten }}</small>
						</div>
						<div class="form-group">
							<label>Email </label>
							<small class="help-block">{{ $chitiet->lh_email }}</small>
						</div>
						<div class="form-group">
							<label>Điện thoại </label>
							<small class="help-block">{{ $chitiet->lh_dienthoai }}</small>
						</div>
						<div class="form-group">
							<label>Nội dung </label>
							<small class="help-block">{{ $chitiet->lh_noidung }}</small>
						</div>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
				
				<a href="{{ url('quantri/lien-he') }}" class="btn btn-primary" title="Xem danh sách"><i class="fa  fa-list"></i><span> Xem danh sách</span> </a>
			 </form>
		 </div>
	</div>
</section><!-- /.content -->

<script src="{{asset('public/quantri/js/tg-make-slug.js') }}" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#lh_tieude").slug({ 
			slug:'slug' , /* class of input / span that contains the generated slug */
			hide: false , /* hide the text input, true by default */
		});
	});
</script>	
@endsection