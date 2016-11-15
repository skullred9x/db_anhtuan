<?php
class chitiettrang extends Controller {
	public function index($baiviet, $idbv){
		$dulieu['chitiet'] = tb_baiviet::where('bv_id',$idbv)->where('bv_kieu',2)->where('bv_trangthai',1)->first();
		if (!empty($dulieu['chitiet'])){
			$dulieu['tinkhac'] = tb_baiviet::where('dm_id',$dulieu['chitiet']->dm_id)->where('bv_id','<>',$idbv)->where('bv_kieu',2)->where('bv_trangthai',1)->take(10)->get();
			return View::make('chitiettrang',$dulieu);
		}else
			return View::make("loi404");
	}
}
