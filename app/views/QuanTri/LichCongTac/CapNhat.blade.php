@extends('QuanTri/KhungTrang/QuanTri')

@section('NoiDung')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		{{{ isset($chitiet) ? 'Sửa lịch công tác' : 'Thêm lịch công tác' }}}
		<!--<small>Control panel</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('quantri') }}"><i class="fa fa-dashboard"></i> Bảng quản trị</a></li>
		<li><a href="{{ url('quantri/lich-cong-tac') }}">Lịch công tác</a></li>
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
					<h3 class="box-title">Thông tin lịch công tác</h3>
					<form action="{{ Request::url() }}" method="post">
					<div class="button-option">
						<div class="button">
							 <button type="submit" name="btnCapnhat" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
							 <button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
						</div>
						<a href="{{ url('quantri/lich-cong-tac') }}" class="btn btn-primary" title="Quay lại"><i class="fa  fa-list"></i><span> Xem danh sách</span> </a>
					</div>
					<!--/.button-option--> 
				</div><!-- /.box-header -->
				
				<!-- form start -->
					<div class="box-body">	
						@if (count($errors->all()) > 0)
							<div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ!</div>
						@endif
						
						<div class="form-group">
							<label for="lct_tuan">Tuần (*)</label>
							<input type="text" class="form-control" id="lct_tuan" name="lct_tuan" placeholder="Tuần" value="@if (count($errors->all()) > 0){{ Form::old('lct_tuan') }}@elseif(isset($chitiet)){{ $chitiet->lct_tuan }}@endif">
							<p class="warning"><?php echo $errors->first('lct_tuan'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="lct_tungay">Từ ngày (*)</label>
							<input type="text" class="form-control" id="lct_tungay" name="lct_tungay" placeholder="Từ ngày" value="@if (count($errors->all()) > 0){{ Form::old('lct_tungay') }}@elseif(isset($chitiet)){{ $chitiet->lct_tungay }}@endif">
							<p class="warning"><?php echo $errors->first('lct_tungay'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="lct_denngay">Đến ngày (*)</label>
							<input type="text" class="form-control" id="lct_denngay" name="lct_denngay" placeholder="Đến ngày" value="@if (count($errors->all()) > 0){{ Form::old('lct_denngay') }}@elseif(isset($chitiet)){{ $chitiet->lct_denngay }}@endif">
							<p class="warning"><?php echo $errors->first('lct_denngay'); ?></p>
						</div>
						
						<div class='form-group'>
							<label>Nội dung (*)</label>
							<textarea class="ckeditor" name="lct_noidung" rows="10" cols="80">
								@if (count($errors->all()) > 0)
									{{ Form::old('lct_noidung') }}
								@elseif(isset($chitiet))
									{{ $chitiet->lct_noidung }} 
								@else
									<table class="tieude" style="border-collapse:collapse;border-color:#999999" cellpadding="2" cellspacing="2" width="100%" border="1">
										<thead>
											<tr class="header_n">
												<td width="10%"></td>
												<td width="43%">Sáng</td>
												<td width="43%">Chiều</td>
											</tr>
										</thead>
										<tbody>
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
								@endif
							</textarea>
							<p class="warning"><?php echo $errors->first('lct_noidung'); ?></p>
						</div>
						
						<div class="form-group">
							<label>Trạng thái (*)</label>
							<select class="form-control" name="lct_trangthai">
								<option value="1" 
									@if (count($errors->all()) > 0 &&  Form::old('lct_trangthai')==1)
										selected
									@elseif (isset($chitiet) && $chitiet->lct_trangthai==1) 
										selected
									@endif
								>Hiện</option>
								<option value="0" 
									@if (count($errors->all()) > 0 &&  Form::old('lct_trangthai')==0)
										selected
									@elseif (isset($chitiet) && $chitiet->lct_trangthai==0) 
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

<script src="{{ asset('public/js/jquery-ui/jquery-ui.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('public/js/jquery-ui/jquery-ui.css') }}">

<script>
	 $("#lct_tungay").datepicker({ dateFormat: "dd/mm/yy" });
	 $("#lct_denngay").datepicker({ dateFormat: "dd/mm/yy" });
 </script>
@endsection