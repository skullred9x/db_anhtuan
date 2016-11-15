<?php
class lichcongtac extends Controller {
	public function index(){
		$dulieu['chitiet'] = tb_lichcongtac::OrderBy('lct_tuan','desc')->first();		
		$dulieu['danhsach'] = tb_lichcongtac::where('lct_trangthai',1)->get();
		return View::make('lichcongtac', $dulieu);
	}
	
	public function XuLy(){
		$dulieu['danhsach'] = tb_lichcongtac::where('lct_trangthai',1)->get();
		$dulieu['chitiet'] = tb_lichcongtac::where('lct_id',Input::get('lct_id'))->where('lct_trangthai',1)->first();
		return View::make('lichcongtac', $dulieu);
	}
}