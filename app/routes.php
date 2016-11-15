<?php
Route::pattern('id', '[0-9]+');

//Kiểm tra đăng nhập trang quản trị
Route::get('dang-nhap', 'DangNhap@index'); //Hiển thị form đăng nhập
Route::post('dang-nhap', 'DangNhap@XuLyDangNhap'); //Xử lý đăng nhập
Route::get('dang-xuat', 'DangNhap@DangXuat'); //Đăng xuất

//Xử lý Ajax
Route::controller("ajax", "AjaxController");

/************* Điều hướng cho trang quản trị *************/
Route::filter('KTDangNhap', function($route, $request)
{
	if (Session::has('dangnhap')){
	}else{
		return Redirect::to('dang-nhap');
	}
	
});

//Trang quản trị
Route::group(array('prefix' => 'quantri', 'before' => 'KTDangNhap'), function()
{
	$lhchuaxem = DB::table('tb_lienhe')->where('lh_trangthai',0)->get();
	Session::put('lhchuaxem',count($lhchuaxem));
		
	//Bảng quản trị
	Route::get('/', function()
	{
		return View::make('QuanTri.TrangChu.TrangChu');
	});
		
	//Quản lý tài khoản
	Route::group(array('prefix' => 'tai-khoan'), function()
	{
		//Hiện danh sách
		Route::get('/', 'TaiKhoan@index');
		
		//Hiện form thêm mới
		Route::get('them-moi', 'TaiKhoan@HienThem');
		//Xử lý khi thêm mới
		Route::post('them-moi', 'TaiKhoan@XuLyThem');
		
		//Hiện form sửa
		Route::get('sua-{id}', 'TaiKhoan@HienSua');
		//Xử lý khi sửa
		Route::post('sua-{id}', 'TaiKhoan@XuLySua');
		
		//Xử lý xóa
		Route::get('xoa-{id}', 'TaiKhoan@Xoa');
		//Xử lý xóa mục chọn và xóa tất cả
		Route::post('xoa', 'TaiKhoan@XoaNhieu');
	});
	
	//Quản lý chuyên mục
	Route::group(array('prefix' => 'chuyen-muc'), function()
	{
		//Hiện danh sách
		Route::get('/', 'ChuyenMuc@index');
		
		//Hiện form thêm mới
		Route::get('them-moi', 'ChuyenMuc@HienThem');
		//Xử lý khi thêm mới
		Route::post('them-moi', 'ChuyenMuc@XuLyThem');
		
		//Hiện form sửa
		Route::get('sua-{id}', 'ChuyenMuc@HienSua');
		//Xử lý khi sửa
		Route::post('sua-{id}', 'ChuyenMuc@XuLySua');
		
		//Xử lý xóa
		Route::get('xoa-{id}', 'ChuyenMuc@Xoa');
		//Xử lý xóa mục chọn và xóa tất cả
		Route::post('xoa', 'ChuyenMuc@XoaNhieu');
	});
	
	//Quản lý bài viết
	Route::group(array('prefix' => 'bai-viet'), function()
	{
		//Hiện danh sách
		Route::get('/', 'BaiViet@index');
		Route::post('/', 'BaiViet@index');
		Route::get('chon-kieu-{id}', 'BaiViet@ChonKieu'); //Chọn kiểu bài viết
		
		//Hiện form thêm mới
		Route::get('them-moi', 'BaiViet@HienThem');
		//Xử lý khi thêm mới
		Route::post('them-moi', 'BaiViet@XuLyThem');
		
		//Hiện form sửa
		Route::get('sua-{id}', 'BaiViet@HienSua');
		//Xử lý khi sửa
		Route::post('sua-{id}', 'BaiViet@XuLySua');
		
		//Xử lý xóa
		Route::get('xoa-{id}', 'BaiViet@Xoa');
		//Xử lý xóa mục chọn và xóa tất cả
		Route::post('xoa', 'BaiViet@XoaNhieu');
		 
		//Route::get('chon-kieu', 'BaiViet@ChonKieu');
	});
	
	//Quản lý liên hệ
	Route::group(array('prefix' => 'lien-he'), function()
	{
		//Hiện danh sách
		Route::get('/', 'LienHe@index');
		
		//Hiện form xem
		Route::get('sua-{id}', 'LienHe@HienSua');
		//Xử lý khi xem
		Route::post('sua-{id}', 'LienHe@XuLySua');
		
		//Xử lý xóa
		Route::get('xoa-{id}', 'LienHe@Xoa');
		//Xử lý xóa mục chọn và xóa tất cả
		Route::post('xoa', 'LienHe@XoaNhieu');
	});
	
	//Quản lý module
	Route::group(array('prefix' => 'module'), function()
	{
		//Hiện danh sách
		Route::get('/', 'Module@index');
		
		//Hiện form thêm mới
		Route::get('them-moi', 'Module@HienThem');
		//Xử lý khi thêm mới
		Route::post('them-moi', 'Module@XuLyThem');
		
		//Hiện form sửa
		Route::get('sua-{id}', 'Module@HienSua');
		//Xử lý khi sửa
		Route::post('sua-{id}', 'Module@XuLySua');
		
		//Xử lý xóa
		Route::get('xoa-{id}', 'Module@Xoa');
		//Xử lý xóa mục chọn và xóa tất cả
		Route::post('xoa', 'Module@XoaNhieu');
	});
	
	//Quản lý quảng cáo
	Route::group(array('prefix' => 'quang-cao'), function()
	{
		//Hiện danh sách
		Route::get('/', 'QuangCao@index');
		
		//Hiện form thêm mới
		Route::get('them-moi', 'QuangCao@HienThem');
		//Xử lý khi thêm mới
		Route::post('them-moi', 'QuangCao@XuLyThem');
		
		//Hiện form sửa
		Route::get('sua-{id}', 'QuangCao@HienSua');
		//Xử lý khi sửa
		Route::post('sua-{id}', 'QuangCao@XuLySua');
		
		//Xử lý xóa
		Route::get('xoa-{id}', 'QuangCao@Xoa');
		//Xử lý xóa mục chọn và xóa tất cả
		Route::post('xoa', 'QuangCao@XoaNhieu');
	});
	
	//Quản lý trình đơn
	Route::group(array('prefix' => 'trinh-don'), function()
	{
		//Hiện danh sách
		Route::get('/', 'TrinhDon@index');
		
		//Hiện form thêm mới
		Route::get('them-moi', 'TrinhDon@HienThem');
		//Xử lý khi thêm mới
		Route::post('them-moi', 'TrinhDon@XuLyThem');
		
		//Hiện form sửa
		Route::get('sua-{id}', 'TrinhDon@HienSua');
		//Xử lý khi sửa
		Route::post('sua-{id}', 'TrinhDon@XuLySua');
		
		//Xử lý xóa
		Route::get('xoa-{id}', 'TrinhDon@Xoa');
		//Xử lý xóa mục chọn và xóa tất cả
		Route::post('xoa', 'TrinhDon@XoaNhieu');
	});
	
	//Quản lý lịch công tác
	Route::group(array('prefix' => 'lich-cong-tac'), function()
	{
		//Hiện danh sách
		Route::get('/', 'LichCongTac@index');
		
		//Hiện form thêm mới
		Route::get('them-moi', 'LichCongTac@HienThem');
		//Xử lý khi thêm mới
		Route::post('them-moi', 'LichCongTac@XuLyThem');
		
		//Hiện form sửa
		Route::get('sua-{id}', 'LichCongTac@HienSua');
		//Xử lý khi sửa
		Route::post('sua-{id}', 'LichCongTac@XuLySua');
		
		//Xử lý xóa
		Route::get('xoa-{id}', 'LichCongTac@Xoa');
		//Xử lý xóa mục chọn và xóa tất cả
		Route::post('xoa', 'LichCongTac@XoaNhieu');
	});
	
	//Quản lý đăng ký hiến máu
	Route::group(array('prefix' => 'hien-mau'), function()
	{
		//Hiện danh sách
		Route::get('/', 'HienMau@index');
		
		//Hiện form thêm mới
		Route::get('them-moi', 'HienMau@HienThem');
		//Xử lý khi thêm mới
		Route::post('them-moi', 'HienMau@XuLyThem');
		
		//Hiện form sửa
		Route::get('sua-{id}', 'HienMau@HienSua');
		//Xử lý khi sửa
		Route::post('sua-{id}', 'HienMau@XuLySua');
		
		//Xử lý xóa
		Route::get('xoa-{id}', 'HienMau@Xoa');
		//Xử lý xóa mục chọn và xóa tất cả
		Route::post('xoa', 'HienMau@XoaNhieu');
		
		//Đổ dữ liệu
		Route::get('xuat-excel', 'HienMau@XuatExcel'); //Excel
	});

	//Hiện danh sách cấu hình
	Route::get('/cau-hinh', 'CauHinh@HienSua');
	//Lưu cấu hình
	Route::post('/cau-hinh', 'CauHinh@XuLySua');
});


/************* Điều hướng cho trang người dùng *************/
//Truyền dữ liệu cho Sidebar sử dụng Session
	thuvien::LayDuLieu();

//Trang chủ
Route::get('/', function(){
	return Redirect::to("trang-chu.html");
});

//Xem chi tiết tin tức
Route::get('/tin-tuc/{baiviet}-{idbv}.html', 'chitiettintuc@index')
->where(array("baiviet"=>"[a-zA-Z0-9-]+", "idbv"=>"[0-9]+"));

//Xem chi tiết trang
Route::get('/trang/{baiviet}-{idbv}.html', 'chitiettrang@index')
->where(array("baiviet"=>"[a-zA-Z0-9-]+", "idbv"=>"[0-9]+"));

//Xem chi tiết video
Route::get('/video/{baiviet}-{idbv}.html', 'chitietvideo@index')
->where(array("baiviet"=>"[a-zA-Z0-9-]+", "idbv"=>"[0-9]+"));

//Xem chi tiết văn bản
Route::get('/van-ban/{baiviet}-{idbv}.html', 'chitietvanban@index')
->where(array("baiviet"=>"[a-zA-Z0-9-]+", "idbv"=>"[0-9]+"));

//Xem chuyên mục (gồm chuyên mục tin tức, trang, video, ảnh)
Route::get('/{danhmuc}-{iddm}.html', 'chuyenmuc@index')
->where(array("danhmuc"=>"[a-zA-Z0-9-]+", "iddm"=>"[0-9]+"));

//Xem trang chủ
Route::get('/trang-chu.html', 'trangchu@index');

//Trang liên hệ
Route::get('/lien-he.html', 'lienhe@index'); //Hiển thị
Route::post('/lien-he.html', 'lienhe@Gui'); //Xử lý gửi liên hệ

//Trang đăng ký hiến máu
Route::get('/dang-ky-hien-mau.html', 'hienmau@index'); //Hiển thị
Route::post('/dang-ky-hien-mau.html', 'hienmau@Gui'); //Lưu thành viên đăng ký hiến máu

//Trang tìm kiếm
Route::get('/tim-kiem.html', 'timkiem@index'); //Hiển thị
Route::post('/tim-kiem.html', 'timkiem@TimKiem'); //Tìm kiếm

//Trang lịch công tác
Route::get('/lich-cong-tac.html', 'lichcongtac@index'); //Hiển thị
Route::post('/lich-cong-tac.html', 'lichcongtac@XuLy'); //Tìm kiếm

//Nếu không thuộc 1 trong các trang ở trên thì chuyển sang trang báo lỗi 404
Route::get('/{lienket}', 'loi404@index');