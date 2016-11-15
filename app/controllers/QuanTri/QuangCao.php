<?php
//File Controller quản lý quảng cáo
class QuangCao extends Controller {
	
	//Hiển thị danh sách ra ngoài tầng View
	public function index(){
		$danhsach = DB::table('tb_quangcao')->orderBy('qc_id', 'desc')->get();
		$dulieu['danhsach']=$danhsach;
		return View::make('QuanTri.QuangCao.DanhSach',$dulieu);
	} 
		
	//Hiển thị form thêm mới
	public function HienThem(){
		$dulieu['module'] = DB::table('tb_module')->where('md_kieu',6)->orderBy('md_thutu', 'asc')->get();
		return View::make('QuanTri.QuangCao.CapNhat', $dulieu);
	}
	
	//Xử lý khi thêm mới
	public function XuLyThem(){
		$DieuKien = array(
					'qc_tieude'		=> 'required',
					'qc_hinhanh' 	=> 'required',
					'md_id' 		=> 'required',
					'qc_thutu' 		=> 'numeric',
					'qc_molienket' 	=> 'required',
					'qc_trangthai' 	=> 'required',
		);
	
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $DieuKien);
		
		if ($xacnhan->fails()){
			return Redirect::to('quantri/quang-cao/them-moi')->withErrors($xacnhan)->withInput();
		}else{
			//Lấy dữ liệu từ phương thức POST
			$dauvao = array(
					'qc_tieude'		=> Input::get('qc_tieude'),
					'qc_hinhanh' 	=> Input::get('qc_hinhanh'),
					'md_id' 		=> Input::get('md_id'),
					'qc_molienket' 	=> Input::get('qc_molienket'),
					'qc_lienket' 	=> Input::get('qc_lienket'),
					'qc_thutu'	 	=> Input::get('qc_thutu'),
					'qc_trangthai' 	=> Input::get('qc_trangthai'),
					'qc_ngaythem'  	=> date('Y-m-d G:i:s')
			);
			
			//Lưu vào CSDL
			DB::table('tb_quangcao')->insert($dauvao);
			return Redirect::to("quantri/quang-cao");
		}
	}
	
	//Hiển thị form sửa
	public function HienSua($id){
		//Hiển thị form sửa
		$dulieu['module'] = DB::table('tb_module')->where('md_kieu',6)->orderBy('md_thutu', 'asc')->get();
		$chitiet = DB::table('tb_quangcao')->where('qc_id', $id)->first();
		$dulieu['chitiet'] = $chitiet;
		return View::make('QuanTri.QuangCao.CapNhat',$dulieu);
	}
	
	//Xử lý khi sửa
	public function XuLySua($id){
		$DieuKien = array(
					'qc_tieude'		=> 'required',
					'qc_hinhanh' 	=> 'required',
					'md_id' 		=> 'required',
					'qc_thutu' 		=> 'numeric',
					'qc_molienket' 	=> 'required',
					'qc_trangthai' 	=> 'required',
		);
		
		//Kiểm tra dữ liệu
		$xacnhan = Validator::make(Input::all(), $DieuKien);
		
		if ($xacnhan->fails()){
			return Redirect::to("quantri/quang-cao/sua-{$id}")->withErrors($xacnhan)->withInput();;
		}else{
			//Lấy dữ liệu từ phương thức POST
			$hinhanh = Input::get('qc_hinhanh');
			if(!$hinhanh) $hinhanh=Input::get('txtAnh');
			$dauvao = array(
					'qc_tieude'		=> Input::get('qc_tieude'),
					'qc_hinhanh' 	=> $hinhanh,
					'md_id' 		=> Input::get('md_id'),
					'qc_molienket' 	=> Input::get('qc_molienket'),
					'qc_lienket' 	=> Input::get('qc_lienket'),
					'qc_thutu' 		=> Input::get('qc_thutu'),
					'qc_trangthai' 	=> Input::get('qc_trangthai'),
			);
			
			//Lưu vào CSDL
			DB::table('tb_quangcao')
				->where('qc_id', $id)
				->update($dauvao);
			return Redirect::to("quantri/quang-cao");
		}
	}
	
	//Xóa 1 mục
	public function Xoa($id){
		DB::table('tb_quangcao')->where('qc_id', '=', $id)->delete();
		return Redirect::to("quantri/quang-cao");
	}
	
	//Xóa mục chọn và xóa tất cả
	public function XoaNhieu(){
		if(isset($_POST['XoaMucChon'])){
			$list=$_POST['Chon'];
			foreach($list as $item)
				DB::table('tb_quangcao')->where('qc_id', '=', $item)->delete();
		}elseif(isset($_POST['XoaTatCa'])){
			DB::table('tb_quangcao')->delete();
		}
		return Redirect::to("quantri/quang-cao");
	}
}
