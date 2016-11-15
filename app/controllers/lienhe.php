<?php
class lienhe extends Controller {
	public function index(){
		return View::make('lienhe');
	}
	
	public function Gui(){
		$dieukien = array(
					'lh_tieude'		=> 'required',
					'lh_email' 		=> 'required|email',
					'lh_dienthoai' 	=> 'numeric',
					'lh_noidung' 	=> 'required',
					//'txtMachongspam'=> 'required',
		);
	
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $dieukien);
		
		//$machongspam = Input::get('txtMachongspam');
		//Session::flash('machongspam', 'Sai mã chống Spam');
		//if ($xacnhan->fails() || $machongspam != Session::get('sercode'))
		
		if ($xacnhan->fails())
			return Redirect::to('lien-he.html')->withErrors($xacnhan)->withInput();
		else{
			//Lấy dữ liệu từ phương thức POST
			$dauvao = array(
					'lh_tieude'		=> Input::get('lh_tieude'),
					'lh_hoten' 		=> Input::get('lh_hoten'),
					'lh_email' 		=> Input::get('lh_email'),
					'lh_dienthoai' 	=> Input::get('lh_dienthoai'),
					'lh_noidung' 	=> Input::get('lh_noidung'),
					'lh_trangthai' 	=> 0,
					'lh_thoigian'	=> date('Y-m-d G:i:s'),
			);
			
			//Lưu vào CSDL
			DB::table('tb_lienhe')->insert($dauvao);
			
			Mail::send('email.lienhe', array('lh_tieude'=>Input::get('lh_tieude'), 'lh_hoten'=>Input::get('lh_hoten'), 'lh_email'=>Input::get('lh_email'), 'lh_dienthoai'=>Input::get('lh_dienthoai'), 'lh_noidung'=>Input::get('lh_noidung')), function($message){
				$message->to(Session::get('ch_email'), Session::get('ch_don_vi'))->subject(Input::get('lh_tieude'));
			});
			
			return Redirect::to("lien-he.html");
		}
	}
}
