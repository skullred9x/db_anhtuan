<?php
class hienmau extends Controller {
	public function index(){
		return View::make('hienmau');
	}
	
	public function Gui(){
		$dieukien = array(
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
					'dongy'			=> 'required',
					//'nguyenquan'	=> Input::get('nguyenquan'),
					//'tamtru' 		=> Input::get('tamtru'),
					//'donvi' 		=> Input::get('donvi'),
					//'ghichu' 		=> Input::get('ghichu'),
		);
	
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $dieukien);
		
		if ($xacnhan->fails())
			return Redirect::to('dang-ky-hien-mau.html')->withErrors($xacnhan)->withInput();
		else{
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
			DB::table('tb_hienmau')->insert($dauvao);;
			return Redirect::to("trang-chu.html");
		}
	}
}
