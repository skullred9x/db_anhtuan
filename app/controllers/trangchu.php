<?php
class trangchu extends Controller {
	public function index(){
		$dulieu['danhmuc'] = tb_danhmuc::where('dm_trangthai',1)->orderBy('dm_id', 'desc')->get();
		$dulieu['slide'] = tb_baiviet::where('bv_kieu',1)->where('bv_trangthai',1)->orderBy('bv_id', 'desc')->take(Session::get('ch_slide'))->get();
		return View::make("trangchu", $dulieu);
	}
}
