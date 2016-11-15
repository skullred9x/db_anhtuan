<?php
class AjaxController extends Controller{
    public function getHome(){
        return View::make("ajax");
    }
   
    public function getKieuBaiViet($id, $hientai){
		thuvien::LstDanhMuc($id, $hientai);
    }
	
    public function getKieuMenu($id, $hientai){
		if ($id <= 5){
			thuvien::LstBaiViet($id, $hientai);	
		}elseif ($id == 7){
			thuvien::LstDanhMuc('', $hientai);
		}elseif ($id==6){
			echo '<option value="0">Nhập mục cần liên kết trong trường "Liên kết"</option>';
		}else{
			echo '<option value="0">Bạn đã chọn mục cần liên kết</option>';
		}
    }
}