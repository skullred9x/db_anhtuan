<?php

//File Controller quản lý quảng cáo
class HienMau extends Controller {
	
	//Hiển thị danh sách ra ngoài tầng View
	public function index(){
		$danhsach = DB::table('tb_hienmau')->orderBy('id', 'desc')->get();
		$dulieu['danhsach']=$danhsach;
		return View::make('QuanTri.HienMau.DanhSach',$dulieu);
	} 
		
	//Hiển thị form thêm mới
	public function HienThem(){
		return View::make('QuanTri.HienMau.CapNhat');
	}
	
	//Xử lý khi thêm mới
	public function XuLyThem(){
		$DieuKien = array(
					'hoten'			=> 'required',
					'gioitinh' 		=> 'required',
					'ngaysinh' 		=> 'required|numeric',
					'thangsinh' 	=> 'required|numeric',
					'namsinh' 		=> 'required|numeric',
					'cmnd' 			=> 'required|numeric',
					'email' 		=> 'required|email',
					'nhommau' 		=> 'required',
					'chieucao' 		=> 'required',
					'cannang' 		=> 'required',
					'solanhien' 	=> 'required|numeric',
					//'thoigianhien'	=> 'date_format:d/m/Y',
		);
	
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $DieuKien);
		
		if ($xacnhan->fails()){
			return Redirect::to('quantri/hien-mau/them-moi')->withErrors($xacnhan)->withInput();
		}else{
			//Lấy dữ liệu từ phương thức POST
			$dauvao = array(
					'hoten'			=> Input::get('hoten'),
					'gioitinh' 		=> Input::get('gioitinh'),
					'ngaysinh' 		=> Input::get('ngaysinh'),
					'thangsinh' 	=> Input::get('thangsinh'),
					'namsinh' 		=> Input::get('namsinh'),
					'cmnd' 			=> Input::get('cmnd'),
					'dienthoai1' 	=> Input::get('dienthoai1'),
					'dienthoai2' 	=> Input::get('dienthoai2'),
					'email' 		=> Input::get('email'),
					'nhommau' 		=> Input::get('nhommau'),
					'chieucao' 		=> Input::get('chieucao'),
					'cannang' 		=> Input::get('cannang'),
					'solanhien' 	=> Input::get('solanhien'),
					'thoigianhien'	=> Input::get('thoigianhien'),
					'nguyenquan'	=> Input::get('nguyenquan'),
					'tamtru' 		=> Input::get('tamtru'),
					'donvi' 		=> Input::get('donvi'),
					'ghichu' 		=> Input::get('ghichu'),
					'trangthai' 	=> 1,
					'ngaythem'		=> date('Y-m-d G:i:s'),
			);
			
			//Lưu vào CSDL
			DB::table('tb_hienmau')->insert($dauvao);
			return Redirect::to("quantri/hien-mau");
		}
	}
	
	//Hiển thị form sửa
	public function HienSua($id){
		//Hiển thị form sửa
		$chitiet = DB::table('tb_hienmau')->where('id', $id)->first();
		$dulieu['chitiet'] = $chitiet;
		return View::make('QuanTri.HienMau.CapNhat',$dulieu);
	}
	
	//Xử lý khi sửa
	public function XuLySua($id){
		$DieuKien = array(
					'hoten'			=> 'required',
					'gioitinh' 		=> 'required',
					'ngaysinh' 		=> 'required|numeric',
					'thangsinh' 	=> 'required|numeric',
					'namsinh' 		=> 'required|numeric',
					'cmnd' 			=> 'required|numeric',
					'email' 		=> 'required|email',
					'nhommau' 		=> 'required',
					'chieucao' 		=> 'required',
					'cannang' 		=> 'required',
					'solanhien' 	=> 'required|numeric',
					//'thoigianhien'	=> 'date_format:d/m/Y',
		);
		
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $DieuKien);
		
		if ($xacnhan->fails()){
			return Redirect::to("quantri/hien-mau/sua-{$id}")->withErrors($xacnhan)->withInput();;
		}else{
			//Lấy dữ liệu từ phương thức POST
			$hinhanh = Input::get('hinhanh');
			if(!$hinhanh) $hinhanh=Input::get('txtAnh');
			$dauvao = array(
					
					'hoten'			=> Input::get('hoten'),
					'gioitinh' 		=> Input::get('gioitinh'),
					'ngaysinh' 		=> Input::get('ngaysinh'),
					'thangsinh' 	=> Input::get('thangsinh'),
					'namsinh' 		=> Input::get('namsinh'),
					'cmnd' 			=> Input::get('cmnd'),
					'dienthoai1' 	=> Input::get('dienthoai1'),
					'dienthoai2' 	=> Input::get('dienthoai2'),
					'email' 		=> Input::get('email'),
					'nhommau' 		=> Input::get('nhommau'),
					'chieucao' 		=> Input::get('chieucao'),
					'cannang' 		=> Input::get('cannang'),
					'solanhien' 	=> Input::get('solanhien'),
					'thoigianhien'	=> Input::get('thoigianhien'),
					'nguyenquan'	=> Input::get('nguyenquan'),
					'tamtru' 		=> Input::get('tamtru'),
					'donvi' 		=> Input::get('donvi'),
					'ghichu' 		=> Input::get('ghichu'),
					'trangthai' 	=> 1,
					'ngaysua'		=> date('Y-m-d G:i:s'),
			);
			
			//Lưu vào CSDL
			DB::table('tb_hienmau')
				->where('id', $id)
				->update($dauvao);
			return Redirect::to("quantri/hien-mau");
		}
	}
	
	//Xóa 1 mục
	public function Xoa($id){
		DB::table('tb_hienmau')->where('id', '=', $id)->delete();
		return Redirect::to("quantri/hien-mau");
	}
	
	//Xóa mục chọn và xóa tất cả
	public function XoaNhieu(){
		if(isset($_POST['XoaMucChon'])){
			$list=$_POST['Chon'];
			foreach($list as $item)
				DB::table('tb_hienmau')->where('id', '=', $item)->delete();
		}elseif(isset($_POST['XoaTatCa'])){
			DB::table('tb_hienmau')->delete();
		}
		return Redirect::to("quantri/hien-mau");
	}
	
	public function XuatExcel(){
		Excel::create('danh-sach-hien-mau', function($excel) {
	    	$excel->sheet('Danh sách đăng ký hiến máu', function($sheet) {
				/*
				$sheet->setFont(array(
					'family'     => 'Times New Roman',
					'size'       => '12',
				));
				*/
				$sheet->fromArray(array('STT', 'Họ và tên', 'Giới tính', 'Ngày sinh', 'CMND', 'Điện thoại 1', 'Điện thoại 2', 'Email', 'Nhóm máu', 'Chiều cao', 'Cân nặng', 'Số lần hiến', 'Thời gian hiến gần nhất', 'Nguyên quán', 'Tạm trú', 'Đơn vị công tác', 'Ghi chú'), null, 'A1', false, false);
				$sheet->cell('A1:Q1', function($cells) {
					$cells->setFontWeight('bold');
					$cells->setAlignment('center');
				});
				
				$danhsach = tb_hienmau::orderBy('id', 'asc')->get();
				$stt=1;
				foreach ($danhsach as $item){
					$sheet->row($stt+1, array(
						 ($stt),
						 $item->hoten,
						 $item->gioitinh==1?'Nam':'Nữ',
						 $item->ngaysinh.'/'.$item->thangsinh.'/'.$item->namsinh,
						 $item->cmnd,
						 $item->dienthoai1,
						 $item->dienthoai2,
						 $item->email,
						 $item->nhommau=='0'?'Chưa xác định':$item->nhommau,
						 $item->chieucao,
						 $item->cannang,
						 $item->solanhien,
						 $item->thoigianhien,
						 $item->nguyenquan,
						 $item->tamtru,
						 $item->donvi,
						 $item->ghichu,
					));
					$stt++;
				}
			});
		})->download('xls');
		return Redirect::to("quantri/hien-mau");
	}
}
