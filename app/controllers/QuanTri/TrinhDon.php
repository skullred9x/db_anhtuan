<?php
//File Controller quản lý trình đơn
class TrinhDon extends Controller {
	
	//Hiển thị danh sách ra ngoài tầng View
	public function index(){
		$danhsach = DB::table('tb_menu')->orderBy('mn_id', 'desc')->get();
		$dulieu['danhsach']=$danhsach;
		return View::make('QuanTri.TrinhDon.DanhSach',$dulieu);
	} 
		
	//Hiển thị form thêm mới
	public function HienThem(){
		$dulieu['kieumenu'] = DB::table('tb_kieumenu')->where('kmn_trangthai',1)->orderBy('kmn_thutu', 'asc')->get();
		$dulieu['danhmuc'] = DB::table('tb_danhmuc')->where('dm_trangthai',1)->orderBy('dm_id', 'desc')->get();
		$dulieu['baiviet'] = DB::table('tb_baiviet')->where('bv_trangthai',1)->orderBy('bv_thutu', 'asc')->orderBy('bv_id', 'desc')->get();
		return View::make('QuanTri.TrinhDon.CapNhat',$dulieu);
	}
	
	//Xử lý khi thêm mới
	public function XuLyThem(){
		$DieuKien = array(
					'mn_tieude'		=> 'required',
					'kmn_id' 		=> 'required',
					'mn_vitri' 		=> 'required',
					'mn_molienket' 	=> 'required',
					'mn_trangthai' 	=> 'required',
		);
	
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $DieuKien);
		
		if ($xacnhan->fails()){
			return Redirect::to('quantri/trinh-don/them-moi')->withErrors($xacnhan)->withInput();
		}else{
			//Lấy dữ liệu từ phương thức POST
			$dauvao = array(
					'mn_tieude'		=> Input::get('mn_tieude'),
					'kmn_id'		=> Input::get('kmn_id'),
					'mn_trang'		=> Input::get('mn_trang'),
					'mn_vitri' 		=> Input::get('mn_vitri'),
					'mn_lienket' 	=> Input::get('mn_lienket'),
					'mn_molienket' 	=> Input::get('mn_molienket'),
					'mn_trangthai' 	=> Input::get('mn_trangthai'),
					'mn_cha' 		=> Input::get('mn_cha'),
					'mn_thutu' 		=> Input::get('mn_thutu'),
			);
			
			//Lưu vào CSDL
			DB::table('tb_menu')->insert($dauvao);
			return Redirect::to("quantri/trinh-don");
		}
	}
	
	//Hiển thị form sửa
	public function HienSua($id){
		//Hiển thị form sửa
		$dulieu['danhmuc'] = DB::table('tb_danhmuc')->where('dm_trangthai',1)->orderBy('dm_id', 'desc')->get();
		$dulieu['baiviet'] = DB::table('tb_baiviet')->where('bv_trangthai',1)->orderBy('bv_thutu', 'asc')->orderBy('bv_id', 'desc')->get();
		
		$dulieu['chitiet'] = DB::table('tb_menu')->where('mn_id', $id)->first();
		$dulieu['kieumenu'] = DB::table('tb_kieumenu')->where('kmn_trangthai',1)->orderBy('kmn_thutu', 'asc')->get();
		return View::make('QuanTri.TrinhDon.CapNhat',$dulieu);
	}
	
	//Xử lý khi sửa
	public function XuLySua($id){
		$DieuKien = array(
					'mn_tieude'		=> 'required',
					'kmn_id' 		=> 'required',
					'mn_vitri' 		=> 'required',
					'mn_molienket' 	=> 'required',
					'mn_trangthai' 	=> 'required',
		);
		
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $DieuKien);
		
		if ($xacnhan->fails()){
			return Redirect::to("quantri/trinh-don/sua-{$id}")->withErrors($xacnhan)->withInput();;
		}else{
			//Lấy dữ liệu từ phương thức POST
			$dauvao = array(
					'mn_tieude'		=> Input::get('mn_tieude'),
					'kmn_id'		=> Input::get('kmn_id'),
					'mn_trang'		=> Input::get('mn_trang'),
					'mn_vitri' 		=> Input::get('mn_vitri'),
					'mn_lienket' 	=> Input::get('mn_lienket'),
					'mn_molienket' 	=> Input::get('mn_molienket'),
					'mn_trangthai' 	=> Input::get('mn_trangthai'),
					'mn_cha' 		=> Input::get('mn_cha'),
					'mn_thutu' 		=> Input::get('mn_thutu'),
			);
			
			//Lưu vào CSDL
			DB::table('tb_menu')
				->where('mn_id', $id)
				->update($dauvao);
			return Redirect::to("quantri/trinh-don");
		}
	}
	
	//Xóa 1 mục
	public function Xoa($id){
		DB::table('tb_menu')->where('mn_id', $id)->delete();
		return Redirect::to("quantri/trinh-don");
	}
	
	//Xóa mục chọn và xóa tất cả
	public function XoaNhieu(){
		if(isset($_POST['XoaMucChon'])){
			$list=$_POST['Chon'];
			foreach($list as $item)
				DB::table('tb_menu')->where('mn_id', '=', $item)->delete();
		}elseif(isset($_POST['XoaTatCa'])){
			DB::table('tb_menu')->delete();
		}
		return Redirect::to("quantri/trinh-don");
	}
}
