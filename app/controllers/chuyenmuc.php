<?php 
class chuyenmuc extends Controller {
	public function index($danhmuc, $iddm){
		$dulieu['danhmuc'] = tb_danhmuc::where('dm_id',$iddm)->where('dm_trangthai',1)->first();
		if (!empty($dulieu['danhmuc'])){
			switch ($dulieu['danhmuc']->dm_kieu){
				case 1:
						//Hiển thị danh sách tin tức (Có phân trang)
						$dulieu['danhsach'] = tb_baiviet::whereIn('dm_id', thuvien::MangDieuKien($iddm, 1))
														->where('bv_kieu',1)
														->where('bv_trangthai',1)
														->orderBy('bv_id', 'desc')
														->paginate(Session::get('ch_tin_tuc'));
						return View::make('tintuc',$dulieu);
						break;
				case 2:
						//Hiển thị danh sách trang (Có phân trang)
						$dulieu['danhsach'] = tb_baiviet::whereIn('dm_id', thuvien::MangDieuKien($iddm, 2))
														->where('bv_kieu',2)
														->where('bv_trangthai',1)
														->orderBy('bv_id', 'desc')
														->paginate(Session::get('ch_tin_tuc'));
						return View::make('trang',$dulieu);
						break;
				case 3:
						//Hiển thị danh sách video
						$dulieu['dsdanhmuc'] = tb_danhmuc::where('dm_cha',$iddm)->where('dm_trangthai',1)->orderBy('dm_id','desc')->get();
						if (count($dulieu['dsdanhmuc'])==0)
							$dulieu['dsdanhmuc'] = array($dulieu['danhmuc']);
						return View::make('video',$dulieu);
						break;
				case 4:
						//Hiển thị danh sách ảnh
						$dulieu['dsdanhmuc'] = tb_danhmuc::where('dm_cha',$iddm)->where('dm_trangthai',1)->orderBy('dm_id','desc')->get();
						if (count($dulieu['dsdanhmuc'])==0)
							$dulieu['dsdanhmuc'] = array($dulieu['danhmuc']);
						return View::make('anh',$dulieu);
						break;
				case 5:
						//Hiển thị danh sách văn bản (Có phân trang)
						$dulieu['danhsach'] = tb_baiviet::whereIn('dm_id', thuvien::MangDieuKien($iddm, 5))
														->where('bv_kieu',5)
														->where('bv_trangthai',1)
														->orderBy('bv_id', 'desc')
														->paginate(Session::get('ch_van_ban'));
						return View::make('vanban',$dulieu);
						break;
			}
						
		}else
			return View::make("loi404");
	}
}