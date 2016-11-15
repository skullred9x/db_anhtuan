@extends('QuanTri/KhungTrang/QuanTri')

@section('NoiDung')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		{{{ isset($chitiet) ? 'Sửa quảng cáo' : 'Thêm quảng cáo' }}}
		<!--<small>Control panel</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('quantri') }}"><i class="fa fa-dashboard"></i> Bảng quản trị</a></li>
		<li><a href="{{ url('quantri/quang-cao') }}">Quảng cáo</a></li>
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
					<h3 class="box-title">Thông tin quảng cáo</h3>
					<form action="{{ Request::url() }}" method="post">
					<div class="button-option">
						<div class="button">
							 <button type="submit" name="btnCapnhat" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
							 <button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
						</div>
						<a href="{{ url('quantri/quang-cao') }}" class="btn btn-primary" title="Quay lại"><i class="fa  fa-list"></i><span> Xem danh sách</span> </a>
					</div>
					<!--/.button-option--> 
				</div><!-- /.box-header -->
				
				<!-- form start -->
					<div class="box-body">	
						@if (count($errors->all()) > 0)
							<div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ!</div>
						@endif
						
						<div class="form-group">
							<label for="qc_tieude">Tiêu đề (*)</label>
							<input type="text" class="form-control" id="qc_tieude" name="qc_tieude" placeholder="Tiêu đề" value="@if (count($errors->all()) > 0){{ Form::old('qc_tieude') }}@elseif(isset($chitiet)){{ $chitiet->qc_tieude }}@endif">
							<p class="warning"><?php echo $errors->first('qc_tieude'); ?></p>
						</div>
						
						<div class="form-group">
							<label>Vị trí đặt quảng cáo (*)</label>
							<select class="form-control" name="md_id">
								@foreach ($module as $item)
								<option value="{{ $item->md_id }}" @if (isset($chitiet) && $item->md_id==$chitiet->md_id) selected @endif>{{ $item->md_tieude }}</option>
								@endforeach
							</select>
						</div>
						
						<div class="form-group">
							<label for="xImagePath">Hình ảnh (*)</label><br>						
							<img src="@if (count($errors->all()) > 0){{ Form::old('qc_hinhanh') }}@elseif(isset($chitiet)){{ $chitiet->qc_hinhanh }}@endif" style="max-width:285px; max-height:100px; border:#ccc 1px solid; margin-bottom:10px" id="xImage">
							<input type="hidden" value="@if(isset($chitiet)){{ $chitiet->qc_hinhanh }}@endif" name="txtAnh" id="txtAnh">
							<input id="xImagePath" name="qc_hinhanh" type="text" class="form-control" value="@if (count($errors->all()) > 0){{ Form::old('qc_hinhanh') }}@elseif(isset($chitiet)){{ $chitiet->qc_hinhanh }}@endif" placeholder="Hình ảnh" />
							<p class="warning"><?php echo $errors->first('qc_hinhanh'); ?></p>
							<input type="button"  value="Duyệt máy chủ" title="Duyệt ảnh trên máy chủ" class="btn btn-info btn-sm" onclick="BrowseServer( 'xImagePath' );"/>
						</div><!-- /.form group -->  
						
						<div class="form-group">
							<label for="">Liên kết khi kích vào quảng cáo</label>
							<input type="text" class="form-control" id="qc_lienket" name="qc_lienket" placeholder="Liên kết khi kích vào quảng cáo" value="@if (count($errors->all()) > 0){{ Form::old('qc_lienket') }}@elseif(isset($chitiet)){{ $chitiet->qc_lienket }}@endif">
							<p class="warning"><?php echo $errors->first('qc_lienket'); ?></p>
						</div>
						
						<div class="form-group">
							<label>Mở liên kết (*)</label>
							<select class="form-control" name="qc_molienket">
								<option value="0" @if (isset($chitiet) && $chitiet->qc_molienket==0) selected @endif>Trong trang hiện tại</option>
								<option value="1" @if (isset($chitiet) && $chitiet->qc_molienket==1) selected @endif>Trong Tab mới</option>
							</select>
						</div>
						
						<div class="form-group">
							<label for="qc_thutu">Thứ tự sắp xếp</label>
							<input type="text" class="form-control" id="qc_thutu" name="qc_thutu" placeholder="Thứ tự" value="@if (count($errors->all()) > 0){{ Form::old('qc_thutu') }}@elseif(isset($chitiet)){{ $chitiet->qc_thutu }}@endif">
							<p class="warning"><?php echo $errors->first('qc_thutu'); ?></p>
						</div>
						
						<div class="form-group">
							<label>Trạng thái (*)</label>
							<select class="form-control" name="qc_trangthai">
								<option value="1" 
									@if (count($errors->all()) > 0 &&  Form::old('qc_trangthai')==1)
										selected
									@elseif (isset($chitiet) && $chitiet->qc_trangthai==1) 
										selected
									@endif
								>Hiện</option>
								<option value="0" 
									@if (count($errors->all()) > 0 &&  Form::old('qc_trangthai')==0)
										selected
									@elseif (isset($chitiet) && $chitiet->qc_trangthai==0) 
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
@endsection