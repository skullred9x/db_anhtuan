@extends('QuanTri/KhungTrang/QuanTri')

@section('NoiDung')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		{{{ isset($chitiet) ? 'Sửa trình đơn' : 'Thêm trình đơn' }}}
		<!--<small>Control panel</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('quantri') }}"><i class="fa fa-dashboard"></i> Bảng quản trị</a></li>
		<li><a href="{{ url('quantri/trinh-don') }}">Trình đơn</a></li>
		<li class="active">{{{ isset($chitiet) ? 'Sửa' : 'Thêm mới' }}}</li>
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
					<h3 class="box-title">Thông tin trình đơn</h3>
					<form action="{{ Request::url() }}" method="post">
					<div class="button-option">
						<div class="button">
							 <button type="submit" name="btnCapnhat" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
							 <button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
						</div>
						<a href="{{ url('quantri/trinh-don') }}" class="btn btn-primary" title="Quay lại"><i class="fa  fa-list"></i><span> Xem danh sách</span> </a>
					</div>
					<!--/.button-option--> 
				</div><!-- /.box-header -->
				
				<!-- form start -->
					<div class="box-body">	
						@if (count($errors->all()) > 0)
							<div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ!</div>
						@endif
						
						<div class="form-group">
							<label>Kiểu menu (*)</label>
							<select class="form-control" name="kmn_id" id="kmn_id">
								@foreach ($kieumenu as $item)
									<option value="{{ $item->kmn_id }}" @if (isset($chitiet) && $chitiet->kmn_id==$item->kmn_id) selected @endif>{{ $item->kmn_tieude }}</option>
								@endforeach
							</select>
						</div>
						
						
						<div class="form-group" id="trang">
							<label>Chọn mục cần liên kết (*)</label>
							<select class="form-control" name="mn_trang" id="mn_trang"></select>
						</div>
						
						<div class="form-group">
							<label for="mn_tieude">Tiêu đề (*)</label>
							<input type="text" class="form-control" id="mn_tieude" name="mn_tieude" placeholder="Tiêu đề" value="@if (count($errors->all()) > 0){{ Form::old('mn_tieude') }}@elseif(isset($chitiet)){{ $chitiet->mn_tieude }}@endif">
							<p class="warning"><?php echo $errors->first('mn_tieude'); ?></p>
						</div>
						
						<div class="form-group" id="lienket" @if (isset($chitiet) && $chitiet->kmn_id==6)) @else style="display:none" @endif>
							<label for="mn_lienket">Liên kết</label>
							<input type="text" class="form-control" id="mn_lienket" name="mn_lienket" placeholder="Liên kết" value="@if (count($errors->all()) > 0){{ Form::old('mn_lienket') }}@elseif(isset($chitiet)){{ $chitiet->mn_lienket }}@endif">
							<p class="warning"><?php echo $errors->first('mn_lienket'); ?></p>
						</div>
						
						<div class="form-group">
							<label>Vị trí đặt trình đơn (*)</label>
							<select class="form-control" name="mn_vitri">
								<option value="0" @if (isset($chitiet) && $chitiet->mn_vitri==0) selected @endif>Menu ngang đầu trang</option>
								<option value="1" @if (isset($chitiet) && $chitiet->mn_vitri==1) selected @endif>Menu dọc đa cấp</option>
							</select>
						</div>
						
						<div class="form-group">
							<label>Trình đơn cha</label>
							<select class="form-control" name="mn_cha">
								<option value="0">Không có trình đơn cha</option>
								@if (isset($chitiet))
									{{ thuvien::LstMenu('', $chitiet->mn_cha) }}
								@else
									{{ thuvien::LstMenu() }}
								@endif
							</select>
						</div>
						
						<div class="form-group">
							<label>Mở liên kết (*)</label>
							<select class="form-control" name="mn_molienket">
								<option value="0" @if (isset($chitiet) && $chitiet->mn_molienket==0) selected @endif>Trong trang hiện tại</option>
								<option value="1" @if (isset($chitiet) && $chitiet->mn_molienket==1) selected @endif>Trong Tab mới</option>
							</select>
						</div>
						
						<div class="form-group">
							<label for="mn_thutu">Thứ tự sắp xếp</label>
							<input type="text" class="form-control" id="mn_thutu" name="mn_thutu" placeholder="Thứ tự" value="@if (count($errors->all()) > 0){{ Form::old('mn_thutu') }}@elseif(isset($chitiet)){{ $chitiet->mn_thutu }}@endif">
							<p class="warning"><?php echo $errors->first('mn_thutu'); ?></p>
						</div>
						
						<div class="form-group">
							<label>Trạng thái (*)</label>
							<select class="form-control" name="mn_trangthai">
								<option value="1" 
									@if (count($errors->all()) > 0 &&  Form::old('mn_trangthai')==1)
										selected
									@elseif (isset($chitiet) && $chitiet->mn_trangthai==1) 
										selected
									@endif
								>Hiện</option>
								<option value="0" 
									@if (count($errors->all()) > 0 &&  Form::old('mn_trangthai')==0)
										selected
									@elseif (isset($chitiet) && $chitiet->mn_trangthai==0) 
										selected
									@endif
								>Ẩn</option>
							</select>	
						</div><!-- /.form group --> 
					</div><!-- /.box-body -->
				</div><!-- /.box -->
				
				 <button type="submit" name="btnCapnhat" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
				 <button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
			 </form>
		 </div>
	</div>
</section><!-- /.content -->

<script src="{{asset('public/quantri/js/tg-make-slug.js') }}" type="text/javascript"></script>

<script>
/*
$('#mn_trang').change(function(e) {
	$('#mn_tieude').val($("#mn_trang :selected").text());
});
*/
function LoadKieuMenu(kieu){
	if (kieu <=5 || kieu == 7){
		$('#lienket').css('display','none');
		$('#kieumenu').css('display','block');
	}else if (kieu == 6){
		$('#lienket').css('display','block');
		$('#kieumenu').css('display','none');
	}else{
		$('#lienket').css('display','none');
		$('#kieumenu').css('display','none');
	}
}

function LoadAjax (kieu){
	$.get('{{ url('ajax/kieu-menu/0') }}'+kieu+'/{{ isset($chitiet) ? $chitiet->mn_trang : '0' }}', function(result){
		$('#mn_trang').html(result);
	});
}

$('#kmn_id').change(function() {
	var kieu = $(this).val();
	LoadAjax(kieu);
	LoadKieuMenu(kieu);
});

@if (isset($chitiet))
	LoadAjax ({{ $chitiet->kmn_id }});
	LoadKieuMenu({{ $chitiet->kmn_id }});
@else
	LoadAjax (7);
	LoadKieuMenu(1);
@endif
</script>
@endsection