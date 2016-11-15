<?php
//File Controller quản lý chuyên mục
class ChuyenMuc extends Controller {
	
	//Hiển thị danh sách ra ngoài tầng View
	public function index(){
		$danhsach = DB::table('tb_danhmuc')->orderBy('dm_id', 'desc')->get();
		$dulieu['danhsach']=$danhsach;
		return View::make('QuanTri.ChuyenMuc.DanhSach',$dulieu);
	} 
		
	//Hiển thị form thêm mới
	public function HienThem(){
		$dulieu['kieudm'] = DB::table('tb_kieumenu')->where('kmn_trangthai',1)->orderBy('kmn_id', 'asc')->take(5)->get();
		return View::make('QuanTri.ChuyenMuc.CapNhat',$dulieu);
	}
	
	//Xử lý khi thêm mới
	public function XuLyThem(){
		$DieuKien = array(
				'dm_tieude'		=> 'required',
				'dm_kieu'		=> 'required',
				'dm_cha' 		=> 'required',
				'dm_trangthai' 	=> 'required',
		);
	
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $DieuKien);
		
		if ($xacnhan->fails()){
			return Redirect::to('quantri/chuyen-muc/them-moi')->withErrors($xacnhan)->withInput();
		}else{
			//Lấy dữ liệu từ phương thức POST
			$dauvao = array(
					'dm_tieude'		=> Input::get('dm_tieude'),
					'dm_kieu' 		=> Input::get('dm_kieu'),
					'dm_cha' 		=> Input::get('dm_cha'),
					'dm_title' 		=> Input::get('dm_title'),
					'dm_keyword' 	=> Input::get('dm_keyword'),
					'dm_description'=> Input::get('dm_description'),
					'dm_trangthai' 	=> Input::get('dm_trangthai'),
					'dm_ngaythem'  	=> date('Y-m-d G:i:s')
			);
			
			//Lưu vào CSDL
			DB::table('tb_danhmuc')->insert($dauvao);
			return Redirect::to("quantri/chuyen-muc");
		}
	}
	
	//Hiển thị form sửa
	public function HienSua($id){
		$dulieu['kieudm'] = DB::table('tb_kieumenu')->where('kmn_trangthai',1)->orderBy('kmn_id', 'asc')->take(5)->get();
		//Hiển thị form sửa
		$chitiet = DB::table('tb_danhmuc')->where('dm_id', $id)->first();
		$dulieu['chitiet'] = $chitiet;
		return View::make('QuanTri.ChuyenMuc.CapNhat',$dulieu);
	}
	
	//Xử lý khi sửa
	public function XuLySua($id){
		$DieuKien = array(
				'dm_tieude'		=> 'required',
				'dm_kieu'		=> 'required',
				'dm_cha' 		=> 'required',
				'dm_trangthai' 	=> 'required',
		);
		
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $DieuKien);
		
		if ($xacnhan->fails()){
			return Redirect::to("quantri/chuyen-muc/sua-{$id}")->withErrors($xacnhan)->withInput();;
		}else{
			//Lấy dữ liệu từ phương thức POST
			$dauvao = array(
					'dm_tieude'		=> Input::get('dm_tieude'),
					'dm_kieu' 		=> Input::get('dm_kieu'),
					'dm_cha' 		=> Input::get('dm_cha'),
					'dm_title' 		=> Input::get('dm_title'),
					'dm_keyword' 	=> Input::get('dm_keyword'),
					'dm_description'=> Input::get('dm_description'),
					'dm_trangthai' 	=> Input::get('dm_trangthai'),
					'dm_ngaysua'  	=> date('Y-m-d G:i:s')
			);
			
			//Lưu vào CSDL
			DB::table('tb_danhmuc')
				->where('dm_id', $id)
				->update($dauvao);
			return Redirect::to("quantri/chuyen-muc");
		}
	}
	
	//Xóa 1 mục
	public function Xoa($id){
		DB::table('tb_danhmuc')->where('dm_id', '=', $id)->delete();
		return Redirect::to("quantri/chuyen-muc");
	}
	
	//Xóa mục chọn và xóa tất cả
	public function XoaNhieu(){
		if(isset($_POST['XoaMucChon'])){
			$list=$_POST['Chon'];
			foreach($list as $item)
				DB::table('tb_danhmuc')->where('dm_id', '=', $item)->delete();
		}elseif(isset($_POST['XoaTatCa'])){
			DB::table('tb_danhmuc')->delete();
		}
		return Redirect::to("quantri/chuyen-muc");
	}
}
