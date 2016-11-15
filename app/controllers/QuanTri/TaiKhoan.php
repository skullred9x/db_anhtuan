<?php
//File Controller quản lý tài khoản
class TaiKhoan extends Controller {
	
	//Hiển thị danh sách ra ngoài tầng View (Có phân trang)
	public function index(){
		$DanhSach = DB::table('tb_taikhoan')->orderBy('tk_id', 'desc')->get();
		$DuLieu['DanhSach']=$DanhSach;
		return View::make('QuanTri.TaiKhoan.DanhSach',$DuLieu);
	} 
		
	//Hiển thị form thêm mới
	public function HienThem(){
		return View::make('QuanTri.TaiKhoan.CapNhat');
	}
	
	//Xử lý khi thêm mới
	public function XuLyThem(){
		//Lấy dữ liệu từ phương thức POST
		$DauVao = array(
				'tk_tendangnhap' => Input::get('tk_tendangnhap'),
				'tk_matkhau' => md5(Input::get('tk_matkhau')),
				'tk_hoten' => Input::get('tk_hoten'),
				'tk_email' => Input::get('tk_email'),
				'tk_dienthoai' => Input::get('tk_dienthoai'),
				'tk_trangthai' => Input::get('tk_trangthai'),
				'tk_anhdaidien' => Input::get('tk_anhdaidien'),
				'tk_ngaythem'  => date('Y-m-d G:i:s')
		);
		
		$DieuKien = array(
				'tk_tendangnhap' => 'required|unique:tb_taikhoan',
				'tk_matkhau' => 'required|confirmed',
				'tk_matkhau_confirmation' => 'required',
				'tk_hoten' => 'required',
				'tk_email' => 'required|email|unique:tb_taikhoan',
				'tk_dienthoai' => 'required|numeric',
				'tk_trangthai' => 'required',
		);
	
		//Kiểm tra dữ liệu
		$XacNhan = Validator::make(Input::all(), $DieuKien);
		
		if ($XacNhan->fails()){
			return Redirect::to('quantri/tai-khoan/them-moi')->withErrors($XacNhan)->withInput();
		}else{
			//Lưu vào CSDL
			DB::table('tb_taikhoan')->insert($DauVao);
			return Redirect::to("quantri/tai-khoan");
		}
	}
	
	//Hiển thị form sửa
	public function HienSua($id){
		//Hiển thị form sửa
		$chitiet = DB::table('tb_taikhoan')->where('tk_id', $id)->first();
		$DuLieu['chitiet'] = $chitiet;
		return View::make('QuanTri.TaiKhoan.CapNhat',$DuLieu);
	}
	
	//Xử lý khi sửa
	public function XuLySua($id){
		//Lấy dữ liệu từ phương thức POST
		if(Input::get('tk_matkhau')==Input::get('tk_matkhaucu'))
			$matkhau = Input::get('tk_matkhaucu');
		else
			$matkhau = md5(Input::get('tk_matkhau'));
		$anhdaidien = Input::get('tk_anhdaidien');
		if(!$anhdaidien) $anhdaidien=Input::get('txtAnh');
		$DauVao = array(
				'tk_tendangnhap' => Input::get('tk_tendangnhap'),
				'tk_matkhau' => $matkhau,
				'tk_hoten' => Input::get('tk_hoten'),
				'tk_email' => Input::get('tk_email'),
				'tk_dienthoai' => Input::get('tk_dienthoai'),
				'tk_trangthai' => Input::get('tk_trangthai'),
				'tk_anhdaidien' => $anhdaidien,
				'tk_ngaysua'  => date('Y-m-d G:i:s')
		);
		
		$DieuKien = array(
				'tk_tendangnhap' => 'required',
				'tk_matkhau' => 'required|confirmed',
				'tk_matkhau_confirmation' => 'required',
				'tk_hoten' => 'required',
				'tk_email' => 'required|email',
				'tk_dienthoai' => 'required|numeric',
				'tk_trangthai' => 'required',
		);
		
		//Kiểm tra dữ liệu
		$XacNhan = Validator::make(Input::all(), $DieuKien);
		
		if ($XacNhan->fails()){
			return Redirect::to("quantri/tai-khoan/sua-{$id}")->withErrors($XacNhan)->withInput();;
		}else{
			//Lưu vào CSDL
			DB::table('tb_taikhoan')
				->where('tk_id', $id)
				->update($DauVao);
			return Redirect::to("quantri/tai-khoan");
		}
	}
	
	//Xóa 1 mục
	public function Xoa($id){
		DB::table('tb_taikhoan')->where('tk_id', '=', $id)->delete();
		return Redirect::to("quantri/tai-khoan");
	}
	
	//Xóa mục chọn và xóa tất cả
	public function XoaNhieu(){
		if(isset($_POST['XoaMucChon'])){
			$list=$_POST['Chon'];
			foreach($list as $item)
				DB::table('tb_taikhoan')->where('tk_id', '=', $item)->delete();
		}elseif(isset($_POST['XoaTatCa'])){
			DB::table('tb_taikhoan')->delete();
		}
		return Redirect::to("quantri/tai-khoan");
	}
}
