<?php
class chitietvideo extends Controller {
	public function index($baiviet, $idbv){
		$dulieu['chitiet'] = tb_baiviet::where('bv_id',$idbv)->where('bv_kieu',3)->where('bv_trangthai',1)->first();
		if (!empty($dulieu['chitiet'])){
			//Đếm lượt xem
			$dauvao = array(
					'bv_luotxem' 		=> $dulieu['chitiet']->bv_luotxem + 1,
			);
			//Sửa lượt xem trong CSDL
			DB::table('tb_baiviet')
				->where('bv_id', $idbv)
				->update($dauvao);
			
			
			//Hiển thị chi tiết video
			$dulieu['tinkhac'] = tb_baiviet::where('dm_id',$dulieu['chitiet']->dm_id)->where('bv_id','<>',$idbv)->where('bv_kieu',3)->where('bv_trangthai',1)->take(Session::get('ch_video_khac'))->get();
			return View::make('chitietvideo',$dulieu);
		}else
			return View::make("loi404");
	}
}
