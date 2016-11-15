<?php
class chitiettintuc extends Controller {
	public function index($baiviet, $idbv){
		$dulieu['chitiet'] = tb_baiviet::where('bv_id',$idbv)->where('bv_kieu',1)->where('bv_trangthai',1)->first();
		if (!empty($dulieu['chitiet'])){
			$dulieu['tinkhac'] = tb_baiviet::where('dm_id',$dulieu['chitiet']->dm_id)->where('bv_id','<>',$idbv)->where('bv_kieu',1)->where('bv_trangthai',1)->take(Session::get('ch_tin_tuc_khac'))->get();
			
			$dulieu['taikhoan'] = tb_taikhoan::where('tk_id',$dulieu['chitiet']->tk_id)->where('tk_trangthai',1)->first();
			return View::make('chitiettintuc',$dulieu);
		}else
			return View::make("loi404");
	}
}
