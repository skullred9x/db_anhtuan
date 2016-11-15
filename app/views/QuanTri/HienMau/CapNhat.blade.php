@extends('QuanTri/KhungTrang/QuanTri')

@section('NoiDung')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		{{{ isset($chitiet) ? 'Sửa thành viên đăng ký hiến máu' : 'Thêm thành viên đăng ký hiến máu' }}}
		<!--<small>Control panel</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url('quantri') }}"><i class="fa fa-dashboard"></i> Bảng quản trị</a></li>
		<li><a href="{{ url('quantri/hien-mau') }}">Đăng ký hiến máu</a></li>
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
					<h3 class="box-title">Thông tin thành viên đăng ký</h3>
					<form action="{{ Request::url() }}" method="post">
					<div class="button-option">
						<div class="button">
							 <button type="submit" name="btnCapnhat" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
							 <button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
						</div>
						<a href="{{ url('quantri/hien-mau') }}" class="btn btn-primary" title="Quay lại"><i class="fa  fa-list"></i><span> Xem danh sách</span> </a>
					</div>
					<!--/.button-option--> 
				</div><!-- /.box-header -->
				
				<!-- form start -->
					<div class="box-body">	
						@if (count($errors->all()) > 0)
							<div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ!</div>
							@foreach ($errors->all('<li>:message</li>') as $message)
								{{ $message }}
							@endforeach
						@endif
						
						<div class="form-group">
							<label for="hoten">Họ tên (*)</label>
							<input type="text" class="form-control" id="hoten" name="hoten" value="@if (count($errors->all()) > 0){{ Form::old('hoten') }}@elseif(isset($chitiet)){{ $chitiet->hoten }}@endif">
							<p class="warning"><?php echo $errors->first('hoten'); ?></p>
						</div>
						
						<div class="form-group">
							<label>Giới tính (*)</label>
							<select class="form-control" name="gioitinh">
								<option value="1" @if ((count($errors->all()) > 0 && Form::old('gioitinh')==1) || (isset($chitiet) && $chitiet->gioitinh==1)) selected @endif>Nam</option>		
								<option value="2" @if ((count($errors->all()) > 0 && Form::old('gioitinh')==2) || (isset($chitiet) && $chitiet->gioitinh==2)) selected @endif>Nữ</option>								
							</select>
							<p class="warning"><?php echo $errors->first('gioitinh'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="ngaysinh">Ngày sinh (*)</label>
							<select name="ngaysinh" id="ngaysinh" class="form-control">
							  <option value="">Chọn ngày</option>
							  @for ($i=1; $i<=31; $i++)
							  <option value="{{$i}}" @if ((count($errors->all()) > 0 && Form::old('ngaysinh')==$i) || (isset($chitiet) && $chitiet->ngaysinh==$i)) selected @endif>{{$i}}</option>
							  @endfor
							</select>
							<p class="warning"><?php echo $errors->first('ngaysinh'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="thangsinh">Tháng sinh (*)</label>
							<select name="thangsinh" id="thangsinh" class="form-control">
							  <option value="">Chọn tháng</option>
							  @for ($i=1; $i<=12; $i++)
							  <option value="{{$i}}" @if ((count($errors->all()) > 0 && Form::old('thangsinh')==$i) || (isset($chitiet) && $chitiet->thangsinh==$i)) selected @endif>{{$i}}</option>
							  @endfor
							</select>
							<p class="warning"><?php echo $errors->first('thangsinh'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="namsinh">Năm sinh (*)</label>
							<select name="namsinh" id="namsinh" class="form-control">
							  <option value="">Chọn năm</option>
							  @for ($i=date("Y")-60; $i<=date("Y")-17; $i++)
							  <option value="{{$i}}" @if ((count($errors->all()) > 0 && Form::old('namsinh')==$i) || (isset($chitiet) && $chitiet->namsinh==$i)) selected @endif>{{$i}}</option>
							  @endfor
							</select>
							<p class="warning"><?php echo $errors->first('namsinh'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="cmnd">Số CMND (*)</label>
							<input type="text" class="form-control" id="cmnd" name="cmnd" value="@if (count($errors->all()) > 0){{ Form::old('cmnd') }}@elseif(isset($chitiet)){{ $chitiet->cmnd }}@endif">
							<p class="warning"><?php echo $errors->first('cmnd'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="dienthoai1">Điện thoại 1</label>
							<input type="text" class="form-control" id="dienthoai1" name="dienthoai1" value="@if (count($errors->all()) > 0){{ Form::old('dienthoai1') }}@elseif(isset($chitiet)){{ $chitiet->dienthoai1 }}@endif">
							<p class="warning"><?php echo $errors->first('dienthoai1'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="dienthoai2">Điện thoại 2</label>
							<input type="text" class="form-control" id="dienthoai2" name="dienthoai2" value="@if (count($errors->all()) > 0){{ Form::old('dienthoai2') }}@elseif(isset($chitiet)){{ $chitiet->dienthoai2 }}@endif">
							<p class="warning"><?php echo $errors->first('dienthoai2'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="email">Email (*)</label>
							<input type="text" class="form-control" id="email" name="email" value="@if (count($errors->all()) > 0){{ Form::old('email') }}@elseif(isset($chitiet)){{ $chitiet->email }}@endif">
							<p class="warning"><?php echo $errors->first('email'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="nhomau">Nhóm máu (*)</label>
							<select id="nhommau" name="nhommau" class="form-control">
								<option value="">Chọn nhóm máu</option>
								<option value="A" @if ((count($errors->all()) > 0 && Form::old('nhommau')=='A') || (isset($chitiet) && $chitiet->nhommau=='A')) selected @endif> A </option>
								<option value="B" @if ((count($errors->all()) > 0 && Form::old('nhommau')=='B') || (isset($chitiet) && $chitiet->nhommau=='B')) selected @endif> B </option>
								<option value="AB" @if ((count($errors->all()) > 0 && Form::old('nhommau')=='AB') || (isset($chitiet) && $chitiet->nhommau=='AB')) selected @endif> AB </option>
								<option value="O" @if ((count($errors->all()) > 0 && Form::old('nhommau')=='O') || (isset($chitiet) && $chitiet->nhommau=='O')) selected @endif> O </option>
								<option value="0" @if ((count($errors->all()) > 0 && Form::old('nhommau')=='0') || (isset($chitiet) && $chitiet->nhommau=='0')) selected @endif> Chưa xác định </option>
							</select>
							<p class="warning"><?php echo $errors->first('nhomau'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="chieucao">Chiều cao (*)</label>
							<input type="text" class="form-control" id="chieucao" name="chieucao" value="@if (count($errors->all()) > 0){{ Form::old('chieucao') }}@elseif(isset($chitiet)){{ $chitiet->chieucao }}@endif">
							<p class="warning"><?php echo $errors->first('chieucao'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="cannang">Cân nặng (*)</label>
							<input type="text" class="form-control" id="cannang" name="cannang" value="@if (count($errors->all()) > 0){{ Form::old('cannang') }}@elseif(isset($chitiet)){{ $chitiet->cannang }}@endif">
							<p class="warning"><?php echo $errors->first('cannang'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="solanhien">Số lần hiến (*)</label>
							<input type="text" class="form-control" id="solanhien" name="solanhien" value="@if (count($errors->all()) > 0){{ Form::old('solanhien') }}@elseif(isset($chitiet)){{ $chitiet->solanhien }}@endif">
							<p class="warning"><?php echo $errors->first('solanhien'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="thoigianhien">Lần hiến gần nhất (Định dạng dd/mm/yyyy)</label>
							<input type="text" class="form-control" id="thoigianhien" name="thoigianhien" value="@if (count($errors->all()) > 0){{ Form::old('thoigianhien') }}@elseif(isset($chitiet)){{ $chitiet->thoigianhien }}@endif">
							<p class="warning"><?php echo $errors->first('thoigianhien'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="nguyenquan">Nguyên quán </label>
							<input type="text" class="form-control" id="nguyenquan" name="nguyenquan" value="@if (count($errors->all()) > 0){{ Form::old('nguyenquan') }}@elseif(isset($chitiet)){{ $chitiet->nguyenquan }}@endif">
							<p class="warning"><?php echo $errors->first('nguyenquan'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="tamtru">Tạm trú </label>
							<input type="text" class="form-control" id="tamtru" name="tamtru" value="@if (count($errors->all()) > 0){{ Form::old('tamtru') }}@elseif(isset($chitiet)){{ $chitiet->tamtru }}@endif">
							<p class="warning"><?php echo $errors->first('tamtru'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="donvi">Đơn vị công tác </label>
							<input type="text" class="form-control" id="donvi" name="donvi" value="@if (count($errors->all()) > 0){{ Form::old('donvi') }}@elseif(isset($chitiet)){{ $chitiet->donvi }}@endif">
							<p class="warning"><?php echo $errors->first('donvi'); ?></p>
						</div>
						
						<div class="form-group">
							<label for="ghichu">Ghi chú </label>
							<input type="text" class="form-control" id="ghichu" name="ghichu" value="@if (count($errors->all()) > 0){{ Form::old('ghichu') }}@elseif(isset($chitiet)){{ $chitiet->ghichu }}@endif">
							<p class="warning"><?php echo $errors->first('ghichu'); ?></p>
						</div>
						
						<!--
						<div class="form-group">
							<label>Trạng thái (*)</label>
							<select class="form-control" name="trangthai">
								<option value="1" 
									@if (count($errors->all()) > 0 &&  Form::old('trangthai')==1)
										selected
									@elseif (isset($chitiet) && $chitiet->trangthai==1) 
										selected
									@endif
								>Hiện</option>
								<option value="0" 
									@if (count($errors->all()) > 0 &&  Form::old('trangthai')==0)
										selected
									@elseif (isset($chitiet) && $chitiet->trangthai==0) 
										selected
									@endif
								>Ẩn</option>
							</select>	
						</div>
						-->
					</div><!-- /.box-body -->
				</div><!-- /.box -->
				
				 <button type="submit" name="btnCapnhat" class="btn btn-primary"><i class="fa  fa-check-square-o"></i><span> Cập nhật</span></button>
				 <button type="reset" class="btn btn-primary" value="Nhập lại" ><i class="fa  fa-refresh"></i><span> Nhập lại</span></button>
			 </form>
		 </div>
	</div>
</section><!-- /.content -->	
@endsection