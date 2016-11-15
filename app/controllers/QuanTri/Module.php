<?php
//File Controller quản lý quảng cáo
class Module extends Controller {
	
	//Hiển thị danh sách ra ngoài tầng View
	public function index(){
		$danhsach = DB::table('tb_module')->where('md_kieu','<>',0)->orderBy('md_id', 'desc')->get();
		$dulieu['danhsach']=$danhsach;
		return View::make('QuanTri.Module.DanhSach',$dulieu);
	} 

	//Hiển thị form thêm mới
	public function HienThem(){
		return View::make('QuanTri.Module.CapNhat');
	}
	
	//Xử lý khi thêm mới
	public function XuLyThem(){
		$DieuKien = array(
					'md_tieude'		=> 'required',
					'md_kieu' 		=> 'required',
					'md_vitri' 		=> 'required',
					'md_thutu' 		=> 'numeric',
					'md_trangthai' 	=> 'required',
		);
	
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $DieuKien);
		
		if ($xacnhan->fails()){
			return Redirect::to('quantri/module/them-moi')->withErrors($xacnhan)->withInput();
		}else{
			//Lấy dữ liệu từ phương thức POST
			$dauvao = array(
					'md_tieude'		=> Input::get('md_tieude'),
					'md_kieu' 		=> Input::get('md_kieu'),
					'md_vitri' 		=> Input::get('md_vitri'),
					'md_thutu'	 	=> Input::get('md_thutu'),
					'md_trangthai' 	=> Input::get('md_trangthai'),
					'md_ngaythem'  	=> date('Y-m-d G:i:s')
			);
			
			//Lưu vào CSDL
			DB::table('tb_module')->insert($dauvao);
			return Redirect::to("quantri/module");
		}
	}
	
	//Hiển thị form sửa
	public function HienSua($id){
		//Hiển thị form sửa
		$chitiet = DB::table('tb_module')->where('md_id', $id)->first();
		$dulieu['chitiet'] = $chitiet;
		return View::make('QuanTri.Module.CapNhat',$dulieu);
	}
	
	//Xử lý khi sửa
	public function XuLySua($id){
		$DieuKien = array(
					'md_tieude'		=> 'required',
					'md_kieu' 		=> 'required',
					'md_vitri' 		=> 'required',
					'md_thutu' 		=> 'numeric',
					'md_trangthai' 	=> 'required',
		);
		
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $DieuKien);
		
		if ($xacnhan->fails()){
			return Redirect::to("quantri/module/sua-{$id}")->withErrors($xacnhan)->withInput();;
		}else{
			//Lấy dữ liệu từ phương thức POST
			$hinhanh = Input::get('md_hinhanh');
			if(!$hinhanh) $hinhanh=Input::get('txtAnh');
			$dauvao = array(
					'md_tieude'		=> Input::get('md_tieude'),
					'md_kieu' 		=> Input::get('md_kieu'),
					'md_vitri' 		=> Input::get('md_vitri'),
					'md_thutu'	 	=> Input::get('md_thutu'),
					'md_trangthai' 	=> Input::get('md_trangthai'),
			);
			
			//Lưu vào CSDL
			DB::table('tb_module')
				->where('md_id', $id)
				->update($dauvao);
			return Redirect::to("quantri/module");
		}
	}
	
	//Xóa 1 mục
	public function Xoa($id){
		DB::table('tb_module')->where('md_id', '=', $id)->delete();
		return Redirect::to("quantri/module");
	}
	
	//Xóa mục chọn và xóa tất cả
	public function XoaNhieu(){
		if(isset($_POST['XoaMucChon'])){
			$list=$_POST['Chon'];
			foreach($list as $item)
				DB::table('tb_module')->where('md_id', '=', $item)->delete();
		}elseif(isset($_POST['XoaTatCa'])){
			DB::table('tb_module')->delete();
		}
		return Redirect::to("quantri/module");
	}
}
