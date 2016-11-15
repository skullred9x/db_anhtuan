<?php
class chitietvanban extends Controller {
	public function index($baiviet, $idbv){
		$dulieu['chitiet'] = tb_baiviet::where('bv_id',$idbv)->where('bv_kieu',5)->where('bv_trangthai',1)->first();
		if (!empty($dulieu['chitiet'])){
			return View::make('chitietvanban',$dulieu);
		}else
			return View::make("loi404");
	}
}
