<?php
session_start();//Khoi dong sesssion
//md5: hàm mã hóa ko dịch ngược luôn trả về 32 ký tự
//$_SERVER['REMOTE_ADDR']: Địa chỉ IP của người dùng
//rand(): Hàm random ra 1 con số từ 0- 32k (đơn vị)
//time(): THời gian hiện tại tính bằng giây từ năm 1970
$str=md5(time().$_SERVER['REMOTE_ADDR'].rand());
//substr: Sử dụng hàm cắt chuỗi để lấy 6 ký tự trong 32 ký tự bị mã hóa
$code=substr($str,rand(0,25),6);
//Lưu mã 6 ký tự trên vào biến SESSION
$_SESSION['sercode']=$code;
//Sử dụng các hàm PHP làm việc với ảnh
//imagecreatefromgif: Lệnh tạo 1 tài nguyên ảnh từ 1 hình ảnh đã có: đối số là đường dẫn ảnh
$img=imagecreatefromgif('cross.gif');
//ĐỊnh nghĩa 1 mã màu để sử dụng làm màu sắc cho mã bảo mật khi vẽ lên ảnh
$color=imagecolorallocate($img,255,110,0);//Màu RGB
$font='arial.ttf';//Đường dẫn đến file FOnt (font chữ cho mã bảo mật: chú ý: nên chọn font nào uốn éo tí)
//Lệnh vẽ 1 đoạn văn bản lên 1 đối tượng ảnh
imagefttext($img,15,5,7,25,$color,$font,$code);
//Chạy lệnh thay đổi kiểu FIle này (file code.php thành file ảnh PNG)
header('Content-type: image/png');
//Chạy lệnh tạo ra nội dung của file ảnh
imagepng($img);
//Hủy biển $img:
imagedestroy($img);
?>