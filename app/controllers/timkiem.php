<?php
class timkiem extends Controller {
	public function index(){
		return View::make('timkiem');
	}
	
	public function TimKiem(){
		$tukhoa = Input::get('txtTukhoa');
		$dulieu['danhsach'] = tb_baiviet::where('bv_tieude', 'LIKE', "%$tukhoa%")->where('bv_noidung', 'LIKE', "%$tukhoa%")->where('bv_tomtat', 'LIKE', "%$tukhoa%")->where('bv_kieu', 1)->where('bv_trangthai', 1)->get();
		Session::put('txtTukhoa',$tukhoa);
		return View::make('timkiem',$dulieu);
	}
}
