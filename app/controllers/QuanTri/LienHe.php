<?php
//File Controller quản lý liên hệ
class LienHe extends Controller {
	
	//Hiển thị danh sách ra ngoài tầng View
	public function index(){
		$danhsach = DB::table('tb_lienhe')->orderBy('lh_id', 'desc')->get();
		$dulieu['danhsach']=$danhsach;
		return View::make('QuanTri.LienHe.DanhSach',$dulieu);
	} 
		
	//Hiển thị form thêm mới
	public function HienThem(){
		return View::make('QuanTri.LienHe.CapNhat');
	}
	
	//Hiển thị form xem
	public function HienSua($id){
		//Hiển thị form sửa
		$chitiet = DB::table('tb_lienhe')->where('lh_id', $id)->first();
		$dulieu['chitiet'] = $chitiet;
		DB::table('tb_lienhe')
				->where('lh_id', $id)
				->update(array('lh_trangthai' => 1));
		return View::make('QuanTri.LienHe.CapNhat',$dulieu);
	}
	
	//Xử lý khi xem
	public function XuLySua($id){
		
	}
	
	//Xóa 1 mục
	public function Xoa($id){
		DB::table('tb_lienhe')->where('lh_id', '=', $id)->delete();
		return Redirect::to("quantri/lien-he");
	}
	
	//Xóa mục chọn và xóa tất cả
	public function XoaNhieu(){
		if(isset($_POST['XoaMucChon'])){
			$list=$_POST['Chon'];
			foreach($list as $item)
				DB::table('tb_lienhe')->where('lh_id', '=', $item)->delete();
		}elseif(isset($_POST['XoaTatCa'])){
			DB::table('tb_lienhe')->delete();
		}
		return Redirect::to("quantri/lien-he");
	}
}
