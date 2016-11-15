<?php
//File Controller cấu hình website
class CauHinh extends Controller {
	//Hiển thị form sửa
	public function HienSua(){
		$danhsach = DB::table('tb_module')->where('md_kieu',0)->where('md_vitri',0)->where('md_trangthai', 1)->orderBy('md_thutu', 'asc')->get();
		$dulieu['danhsach']=$danhsach;
		return View::make('QuanTri.CauHinh.CapNhat',$dulieu);
	}
	
	//Xử lý khi sửa
	public function XuLySua(){
		$danhsach = DB::table('tb_cauhinh')->where('ch_trangthai', 1)->orderBy('ch_id', 'desc')->get();
		foreach ($danhsach as $item){
			
			$noidung = Input::get('noidung'.$item->ch_id);
			//Lưu vào CSDL
			DB::table('tb_cauhinh')
				->where('ch_id', $item->ch_id)
				->update(array('ch_noidung' => $noidung));
		}
		return Redirect::to("quantri");
	}
}
