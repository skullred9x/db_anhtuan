<?php
//File Controller quản lý lịch công tác
class LichCongTac extends Controller {
	
	//Hiển thị danh sách ra ngoài tầng View
	public function index(){
		$danhsach = DB::table('tb_lichcongtac')->orderBy('lct_id', 'desc')->get();
		$dulieu['danhsach']=$danhsach;
		return View::make('QuanTri.LichCongTac.DanhSach',$dulieu);
	} 
		
	//Hiển thị form thêm mới
	public function HienThem(){
		return View::make('QuanTri.LichCongTac.CapNhat');
	}
	
	//Xử lý khi thêm mới
	public function XuLyThem(){
		$DieuKien = array(
					'lct_tuan'			=> 'required|numeric|unique:tb_lichcongtac',
					'lct_tungay' 		=> 'required|date_format:d/m/Y',
					'lct_denngay' 		=> 'required|date_format:d/m/Y',
					'lct_noidung' 		=> 'required',
		);
	
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $DieuKien);
		
		if ($xacnhan->fails()){
			return Redirect::to('quantri/lich-cong-tac/them-moi')->withErrors($xacnhan)->withInput();
		}else{
			//Lấy dữ liệu từ phương thức POST
			$dauvao = array(
					'lct_tuan'			=> Input::get('lct_tuan'),
					'lct_tungay' 		=> Input::get('lct_tungay'),
					'lct_denngay' 		=> Input::get('lct_denngay'),
					'lct_noidung' 		=> Input::get('lct_noidung'),
					'lct_trangthai'		=> Input::get('lct_trangthai'),
					'lct_ngaythem'  	=> date('Y-m-d G:i:s')
			);
			
			//Lưu vào CSDL
			DB::table('tb_lichcongtac')->insert($dauvao);
			return Redirect::to("quantri/lich-cong-tac");
		}
	}
	
	//Hiển thị form sửa
	public function HienSua($id){
		//Hiển thị form sửa
		$chitiet = DB::table('tb_lichcongtac')->where('lct_id', $id)->first();
		$dulieu['chitiet'] = $chitiet;
		return View::make('QuanTri.LichCongTac.CapNhat',$dulieu);
	}
	
	//Xử lý khi sửa
	public function XuLySua($id){
		$DieuKien = array(
					'lct_tuan'			=> 'required|numeric',
					'lct_tungay' 		=> 'required|date_format:d/m/Y',
					'lct_denngay' 		=> 'required|date_format:d/m/Y',
					'lct_noidung' 		=> 'required',
		);
		
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $DieuKien);
		
		if ($xacnhan->fails()){
			return Redirect::to("quantri/lich-cong-tac/sua-{$id}")->withErrors($xacnhan)->withInput();;
		}else{
			//Lấy dữ liệu từ phương thức POST
			$dauvao = array(
					'lct_tuan'			=> Input::get('lct_tuan'),
					'lct_tungay' 		=> Input::get('lct_tungay'),
					'lct_denngay' 		=> Input::get('lct_denngay'),
					'lct_noidung' 		=> Input::get('lct_noidung'),
					'lct_trangthai'		=> Input::get('lct_trangthai'),
					'lct_ngaysua'	  	=> date('Y-m-d G:i:s')
			);
			
			//Lưu vào CSDL
			DB::table('tb_lichcongtac')
				->where('lct_id', $id)
				->update($dauvao);
			return Redirect::to("quantri/lich-cong-tac");
		}
	}
	
	//Xóa 1 mục
	public function Xoa($id){
		DB::table('tb_lichcongtac')->where('lct_id', '=', $id)->delete();
		return Redirect::to("quantri/lich-cong-tac");
	}
	
	//Xóa mục chọn và xóa tất cả
	public function XoaNhieu(){
		if(isset($_POST['XoaMucChon'])){
			$list=$_POST['Chon'];
			foreach($list as $item)
				DB::table('tb_lichcongtac')->where('lct_id', '=', $item)->delete();
		}elseif(isset($_POST['XoaTatCa'])){
			DB::table('tb_lichcongtac')->delete();
		}
		return Redirect::to("quantri/lich-cong-tac");
	}
}
