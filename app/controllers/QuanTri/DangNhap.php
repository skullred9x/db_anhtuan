<?php
//File Controller đăng nhập trang quản trị
class DangNhap extends Controller {
	// Hiển thị form đăng nhập
	public function index(){
		if (Session::has('dangnhap')){
			return Redirect::to('quantri');
		}else{
			return View::make('QuanTri.DangNhap.DangNhap');
		}
	} 

	// Xử lý đăng nhập
	public function XuLyDangNhap()
	{
		//Lấy dữ liệu từ phương thức POST
		$DieuKien = array(
				'tk_tendangnhap' => 'required',
				'tk_matkhau' => 'required|between:6,30',
		);
	
		//Kiểm tra dữ liệu
		$XacNhan = Validator::make(Input::all(), $DieuKien);
		if ($XacNhan->fails()){
			return Redirect::to('dang-nhap')->withErrors($XacNhan)->withInput(Input::except('tk_matkhau'));
		}else{
			$tendangnhap = Input::get('tk_tendangnhap');
			$matkhau = Input::get('tk_matkhau');
			$taikhoan = DB::table('tb_taikhoan')->where('tk_tendangnhap', $tendangnhap)->where('tk_matkhau', md5($matkhau))->where('tk_trangthai', 1)->first();
			if (count($taikhoan) > 0) {
				Session::put('dangnhap',$taikhoan->tk_id);
				/*
				if (Input::get('cbNhomatkhau')==1){
					setcookie('nhopass',$_SESSION['login']['taikhoan_id'],time()+2592000); //Lưu tài khoản trong vòng 1 tháng
				}
				*/
				return Redirect::to('quantri');
			}
			else
			{
				$data['loi'] = true;
				return View::make('QuanTri.DangNhap.DangNhap',$data);
			}
		}
	}

	// Xử lý đăng xuất
	public function DangXuat()
	{
		Session::forget('dangnhap');
		return Redirect::to('dang-nhap');
	}
}
