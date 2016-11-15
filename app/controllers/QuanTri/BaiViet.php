<?php
//File Controller quản lý bài viết
class BaiViet extends Controller {
	//Hiển thị danh sách ra ngoài tầng View
	public function index(){
		$dulieu['kieubv'] = DB::table('tb_kieumenu')->where('kmn_trangthai',1)->orderBy('kmn_id', 'asc')->take(5)->get();
		$danhsach = DB::table('tb_baiviet')->orderBy('bv_id', 'desc')->get();
		$dulieu['danhsach']=$danhsach;
		$dulieu['bv_kieu'] = '';
		return View::make('QuanTri.BaiViet.DanhSach',$dulieu);
	} 
	
	//Hiển thị danh sách theo kiểu bài viết đã chọn
	public function ChonKieu($kieu){
		$dulieu['kieubv'] = DB::table('tb_kieumenu')->where('kmn_trangthai',1)->orderBy('kmn_id', 'asc')->take(5)->get();
		$danhsach = DB::table('tb_baiviet')->where('bv_kieu',$kieu)->orderBy('bv_id', 'desc')->get();
		$dulieu['danhsach']=$danhsach;
		$dulieu['bv_kieu'] = $kieu;
		return View::make('QuanTri.BaiViet.DanhSach',$dulieu);
	} 
		
	//Hiển thị form thêm mới
	public function HienThem(){
		$dulieu['kieubv'] = DB::table('tb_kieumenu')->where('kmn_trangthai',1)->orderBy('kmn_id', 'asc')->take(5)->get();
		return View::make('QuanTri.BaiViet.CapNhat',$dulieu);
	}
	
	//Xử lý khi thêm mới
	public function XuLyThem(){
		$DieuKien = array(
				'dm_id' 		=> 'required',
				'bv_kieu'		=> 'required',
				'bv_tieude'		=> 'required',
				'bv_trangthai' 	=> 'required',
				'bv_thutu'		=> 'numeric',
		);
	
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $DieuKien);
		
		if ($xacnhan->fails()){
			return Redirect::to('quantri/bai-viet/them-moi')->withErrors($xacnhan)->withInput();
		}else{
			//Lấy dữ liệu từ phương thức POST
			$dauvao = array(
					'dm_id' 		=> Input::get('dm_id'),
					'bv_kieu'		=> Input::get('bv_kieu'),
					'bv_sohieu'		=> Input::get('bv_sohieu'),
					'bv_tieude'		=> Input::get('bv_tieude'),
					'bv_noidung'	=> Input::get('bv_noidung'),
					'bv_anhdaidien' => Input::get('bv_anhdaidien'),
					'bv_tomtat' 	=> Input::get('bv_tomtat'),
					'bv_thutu'		=> Input::get('bv_thutu'),
					'bv_trangthai' 	=> Input::get('bv_trangthai'),
					'bv_title' 		=> Input::get('bv_title'),
					'bv_keyword' 	=> Input::get('bv_keyword'),
					'bv_description'=> Input::get('bv_description'),
					'tk_id'			=> Session::get('dangnhap'),
					'bv_luotxem'  	=> 0,
					'bv_ngaythem'  	=> date('Y-m-d G:i:s')
			);
			
			//Lưu vào CSDL
			DB::table('tb_baiviet')->insert($dauvao);
			return Redirect::to("quantri/bai-viet");
		}
	}
	
	//Hiển thị form sửa
	public function HienSua($id){
		$dulieu['kieubv'] = DB::table('tb_kieumenu')->where('kmn_trangthai',1)->orderBy('kmn_id', 'asc')->take(5)->get();
		//Hiển thị form sửa
		$chitiet = DB::table('tb_baiviet')->where('bv_id', $id)->first();
		$dulieu['chitiet'] = $chitiet;
		return View::make('QuanTri.BaiViet.CapNhat',$dulieu);
	}
	
	//Xử lý khi sửa
	public function XuLySua($id){
		$DieuKien = array(
				'dm_id' 		=> 'required',
				'bv_kieu'		=> 'required',
				'bv_tieude'		=> 'required',
				'bv_trangthai' 	=> 'required',
				'bv_thutu'		=> 'numeric',
		);
		
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $DieuKien);
		
		if ($xacnhan->fails()){
			return Redirect::to("quantri/bai-viet/sua-{$id}")->withErrors($xacnhan)->withInput();;
		}else{
			//Lấy dữ liệu từ phương thức POST
			$anhdaidien = Input::get('bv_anhdaidien');
			if(!$anhdaidien) $anhdaidien=Input::get('txtAnh');
			$dauvao = array(
					'dm_id' 		=> Input::get('dm_id'),
					'bv_kieu'		=> Input::get('bv_kieu'),
					'bv_sohieu'		=> Input::get('bv_sohieu'),
					'bv_tieude'		=> Input::get('bv_tieude'),
					'bv_noidung'	=> Input::get('bv_noidung'),
					'bv_anhdaidien' => Input::get('bv_anhdaidien'),
					'bv_tomtat' 	=> Input::get('bv_tomtat'),
					'bv_thutu'		=> Input::get('bv_thutu'),
					'bv_trangthai' 	=> Input::get('bv_trangthai'),
					'bv_title' 		=> Input::get('bv_title'),
					'bv_keyword' 	=> Input::get('bv_keyword'),
					'bv_description'=> Input::get('bv_description'),
					'tk_id'			=> Session::get('dangnhap'),
					'bv_ngaysua'  	=> date('Y-m-d G:i:s')
			);
			
			//Lưu vào CSDL
			DB::table('tb_baiviet')
				->where('bv_id', $id)
				->update($dauvao);
			return Redirect::to("quantri/bai-viet");
		}
	}
	
	//Xóa 1 mục
	public function Xoa($id){
		DB::table('tb_baiviet')->where('bv_id', '=', $id)->delete();
		return Redirect::to("quantri/bai-viet");
	}
	
	//Xóa mục chọn và xóa tất cả
	public function XoaNhieu(){
		if(isset($_POST['XoaMucChon'])){
			$list=$_POST['Chon'];
			foreach($list as $item)
				DB::table('tb_baiviet')->where('bv_id', '=', $item)->delete();
		}elseif(isset($_POST['XoaTatCa'])){
			DB::table('tb_baiviet')->delete();
		}
		return Redirect::to("quantri/bai-viet");
	}
}
