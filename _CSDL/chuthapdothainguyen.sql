/*
Navicat MySQL Data Transfer

Source Server         : Xampp
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : chuthapdothainguyen

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2014-12-25 14:20:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_baiviet`
-- ----------------------------
DROP TABLE IF EXISTS `tb_baiviet`;
CREATE TABLE `tb_baiviet` (
  `bv_id` int(11) NOT NULL AUTO_INCREMENT,
  `dm_id` int(11) DEFAULT NULL,
  `tk_id` int(11) DEFAULT NULL,
  `bv_kieu` tinyint(10) DEFAULT NULL,
  `bv_sohieu` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bv_tieude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bv_tomtat` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bv_noidung` mediumtext COLLATE utf8_unicode_ci,
  `bv_anhdaidien` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bv_ngaythem` timestamp NULL DEFAULT NULL,
  `bv_ngaysua` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `bv_luotxem` int(11) DEFAULT NULL,
  `bv_thutu` int(11) DEFAULT NULL,
  `bv_trangthai` tinyint(1) DEFAULT NULL,
  `bv_title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bv_keyword` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bv_description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`bv_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_baiviet
-- ----------------------------
INSERT INTO `tb_baiviet` VALUES ('1', '1', '1', '2', null, 'Giới thiệu', null, null, null, '2014-10-21 07:35:08', '2014-11-11 15:35:55', '2', null, '1', 'Giới thiệu', 'Giới thiệu', 'Giới thiệu');
INSERT INTO `tb_baiviet` VALUES ('2', '1', '1', '2', null, 'Hệ thống tổ chức', null, null, null, '2014-11-10 10:45:28', '2014-11-11 15:35:56', '4', null, '1', 'Hệ thống tổ chức', 'Hệ thống tổ chức', 'Hệ thống tổ chức');
INSERT INTO `tb_baiviet` VALUES ('3', '1', '1', '2', null, 'Lĩnh vực hoạt động', null, null, null, '2014-11-10 10:46:12', '2014-11-11 15:35:56', '3', null, '1', 'Lĩnh vực hoạt động', 'Lĩnh vực hoạt động', 'Lĩnh vực hoạt động');
INSERT INTO `tb_baiviet` VALUES ('9', '28', '1', '3', null, 'Phóng sự nhận diện Biểu tượng Chữ thập đỏ', null, 'http://www.youtube.com/watch?v=K5gEzMyNrRA', '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/13_5_09_r-cross.jpg', '2014-11-10 14:21:49', '2014-11-11 15:35:56', '6', null, '1', 'Phóng sự nhận diện Biểu tượng Chữ thập đỏ', 'Phóng sự nhận diện Biểu tượng Chữ thập đỏ', 'Phóng sự nhận diện Biểu tượng Chữ thập đỏ');
INSERT INTO `tb_baiviet` VALUES ('10', '25', '1', '1', null, 'Thắng Argentina ở hiệp phụ, Đức vô địch World Cup 2014', 'Pha làm bàn của Gotze ở phút 113 giúp Đức thắng 1-0 trong trận chung kết trên sân Maracana và trở thành đại diện châu Âu đầu tiên vô địch thế giới trên đất châu Mỹ.', ' <p class=\"Normal\" style=\"text-align: justify;\"> Bàn thắng quyết định số phận trận đấu đến ở thời điểm mà hai đội tưởng chừng phải dùng đến loạt đá luân lưu cân não để xác định chủ nhân chiếc Cup vàng. Hệ thống phòng ngự Argentina, vốn chơi rất tốt suốt 112 phút trước đó, bỗng nhiên hớ hênh một cách lạ thường và Đức đã không bỏ qua dịp may. Schurrle tăng tốc bên cánh trái rồi treo bóng bổng vào ngay trước cầu môn, nơi Gotze trong thế không bị kèm cặp, thoải mái đỡ ngực rồi bắt vô-lê căng hạ Romero.</p><p class=\"Normal\" style=\"text-align: justify;\"> Pha làm bàn đó đặt dấu chấm hết cho hy vọng lên ngôi của Messi và đồng đội, nối dài thêm cơn khát chức vô địch World Cup của bóng đá Argentina kể từ lần lên ngôi năm 1986.&nbsp;Nhưng bên kia chiến tuyến, bàn thắng của Gotze đã mở ra một trang sử mới vẻ vang cho bóng đá Đức. Cơn khát một danh hiệu lớn kéo dài suốt 18 năm tính từ lần đăng quang ở Euro 1996, 24 năm đằng đẵng chờ đợi chức vô địch World Cup thứ tư sau lần lên ngôi thứ ba hồi 1990 rồi cũng được khép lại, nhường chỗ cho vầng hào quang chiến thắng khi&nbsp;Lahm và đồng đội của anh nâng cao chiếc Cup vàng trên sân Maracana huyền thoại.</p><p class=\"Normal\" style=\"text-align: justify;\"> Vô địch World Cup 2014 là đoạn kết có hậu cho Đức. Cuộc cách mạng lối chơi và trẻ hóa triệt để trên bình diện cả nền bóng đá bắt đầu từ đầu những năm 2000 đã giúp tuyển Đức lột xác, trở thành một trong những đội tuyển chơi hay và ổn định bậc nhất thế giới trong khoảng một thập niên trở lại đây. Nhưng cuộc cách mạng ấy vẫn bị cho là dang dở, vì tuyển Đức vẫn chưa thể làm nên một cú rướn quyết định để đi đến cái đích cuối cùng và cao nhất - đỉnh vinh quang ở các giải đấu lớn. Họ từng về nhì ở&nbsp;World Cup 2002, Euro 2008, dừng bước tại bán kết World Cup 2006, 2010 và Euro 2012.&nbsp;</p><p class=\"Normal\" style=\"text-align: justify;\"> Tuy nhiên, cú rướn lịch sử ấy đã đến tại World Cup 2014 lần này, nơi Đức chứng tỏ họ là đội bóng hay nhất, có chất lượng chiều sâu, biến hóa và chơi ổn định hơn cả trong suốt một tháng tranh tài.&nbsp;</p><p class=\"Normal\" style=\"text-align: justify;\"> Trên đường vào trận chung kết trên sân Maracana hôm qua, Đức vẫn có những chệch choạc nhất định, thể hiện qua ba trận đấu chật vật, hòa Ghana 2-2, thắng Mỹ 1-0&nbsp;ở cuối vòng bảng và phần nào đó là trận thắng Algeria 2-1 ở vòng 1/8. Nhưng họ cũng sở hữu hai trong số ít trận thắng đậm nhất giải, với các màn hủy diệt Bồ Đào Nha 4-0 ngày ra quân và Brazil 7-1 ở bán kết. Sau những cú vấp ngã đau, Đức cũng tự rút ra bài học để thay đổi hợp lý, kịp thời, mà rõ nhất là việc HLV Joachim Low trả đội trưởng Lahm trở lại vị trí hậu vệ biên và tạm gác việc chơi tấn công kiểu tận hiến để cho Đức chơi thực dụng hơn kể từ trận tứ kết gặp Pháp.</p><p class=\"Normal\" style=\"text-align: justify;\"> Một đội bóng như thế không đáng thua trong trận chung kết, nhất là khi đối thủ của họ không cho thấy quá nhiều yếu tố đặc biệt. Argentina có Messi - người đang khao khát một chức vô địch World Cup để thật sự sánh ngang với những huyền thoại cỡ Pele, Maradona, Beckenbauer hay Zidane. Nhưng phía sau Messi là cả một khoảng trống lớn, bởi chất lượng bất tương xứng của phần còn lại. Bản thân Messi cũng chỉ chơi tốt ở bốn trận đầu, khi anh chưa gặp phải những thách thức thật sự lớn. Phong độ chói sáng bất ngờ của một số ít cá nhân trong hệ thống phòng ngự như Romero, Demichelis hay Mascherano chỉ đủ giúp Argentina gồng mình đi đến trận đấu cuối cùng, nơi họ bộc lộ rõ những hạn chế trước đội bóng chơi hay và ổn định nhất giải.</p><p class=\"Normal\" style=\"text-align: justify;\"> Trên sân Maracana, Đức sớm chịu tổn thất ngay trước giờ bóng lăn với ca chấn thương trong lúc khởi động của tiền vệ trụ cột Sami Khedira. Với cầu thủ trẻ mới đá 12 phút từ đầu giải Christoph Kramer đá thay, đại diện châu Âu tỏ ra rất ảnh mong manh, dễ vỡ, khác hẳn hình ảnh về một khối rắn chắn, tiềm ẩn sự bùng nổ như hai trận đấu trước đó. Argentina, bằng tốc độ của Messi và Lavezzi, liên tục có những pha phản công nguy hiểm, xuất phát từ trung lộ, đánh thẳng vào vị trí hậu vệ trái của Howedes - mắt xích yếu nhất trong hệ thống phòng ngự Đức - làm đối phương lắm phen giật mình thot thót.</p><table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"width: 90.9091%;\"> <tbody> <tr> <td style=\"text-align: center;\"> <img alt=\"Higuain.jpg\" data-natural-=\"\" data-pwidth=\"660\" data-width=\"600\" src=\"http://m.f1.img.vnecdn.net/2014/07/14/Higuain-2049-1405295215.jpg\"></td> </tr> <tr> <td> <p class=\"Image\" style=\"text-align: center;\"> Argentina gục ngã trước đỉnh vinh quang vì không tận dụng được những cơ hội ngon đầu trận. Ảnh: <em>Reuters</em>.</p> </td> </tr> </tbody></table><p class=\"Normal\" style=\"text-align: justify;\"> Nhưng các học trò của HLV Sabella sẽ phải tự trách bản thân vì không thể tạo nên khác biệt trong thời gian này. Higuain, người chơi cao nhất bên phía Argentina, đươc trao đến ba cơ hội chỉ trong 30 phút đầu. Nhưng chân sút đang khoác áo Napoli này một lần sút chệch cột từ góc hẹp, một lần hỏng ăn khi đối mặt với Neuer ở vị trí trực diện khung thành và một lần khác bị từ chối bàn thắng vì lỗi việt vị, dù đã đưa bóng nằm gọn trong lưới đối thủ.</p><p class=\"Normal\" style=\"text-align: justify;\"> Việc Kramer dính chấn thương không thể thi đấu tiếp vô tình giúp Đức chơi tốt lên, khi HLV Low đưa Schurrle vào đá cánh trái, kéo Ozil về đá tiền vệ con thoi bên cạnh Schweinsteiger. Tốc độ của cầu thủ Chelsea đã thổi một luồng gió mới vào cách chơi của tuyển Đức, để họ thật sự làm chủ trận đấu trong khoảng 15 phút cuối. Chỉ nhờ thủ môn Romero phản xạ xuất thần từ chối Schurrle, Toni Kroos sút quá nhẹ trong pha dọn cỗ thông minh của Ozil và nhờ cột dọc từ chối cú đánh đầu của Howedes, Argentina mới không bị thủng lưới trước giờ nghỉ giải lao.</p><p class=\"Normal\" style=\"text-align: justify;\"> Ở thời điểm khó khăn, Argentina hẳn sẽ chờ đợi ngôi sao số một của họ tỏa sáng làm nên khác biệt. Messi đã được trao một cơ hội bằng vàng để chứng tỏ vị thế đầu tàu ấy, khi nhận đường chọc khe thông minh của Biglia ngay phút 47. Nhưng chân sút từng đoạt bốn Quả Bóng Vàng này lại kết thúc chệch cột khi đối mặt với Neuer. Đến phút 75, Messi lại có cơ hội với pha cầm bóng từ biên vào trung lộ rồi dứt điểm sở trường, nhưng anh tiếp tục gây thất vọng khi cứa lòng chệch đích.</p><p class=\"Normal\" style=\"text-align: justify;\"> Argentina về sau gần như dồn toàn lực chơi phòng ngự, dù HLV Sabella làm mới hàng công bằng sự xuất hiện của Aguero rồi Palacio ở đầu và nửa cuối hiệp hai. Palacio cũng được trao cơ hội ở giữa hiệp phụ thứ nhất, nhưng tiền đạo của Inter cũng chẳng mắn duyên hơn là bao so với người mà anh vào thay Higuain, khi lốp bóng ra ngoài trong tình huống đối mặt với Neuer. Đức trong khi đó càng đá càng nguy hiểm với tốc độ của Schurrle và các pha di chuyển lắt léo của Gotze, người vào thay trung phong Klose từ phút 88. Chính bộ đôi này là những người tạo ra hai tình huống nguy hiểm nhất của Đức ở hai hiệp phụ và một trong số đó mang lại bàn quyết định. Schurrle hỏng ăn với pha dứt điểm thẳng vào tay Romero ở phút 91, nhưng chuộc lỗi với tình huống dốc bóng bên cánh trái rồi kiến tạo cho Gotze làm tung lưới Argentina ở phút 113.</p><table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"width: 90.9091%;\"> <tbody> <tr> <td style=\"text-align: center;\"> <img alt=\"Gozet.jpg\" data-natural-=\"\" data-pwidth=\"660\" data-width=\"600\" src=\"http://m.f1.img.vnecdn.net/2014/07/14/Gozet-8272-1405295215.jpg\"></td> </tr> <tr> <td> <p class=\"Image\" style=\"text-align: center;\"> Gotze trong pha làm bàn quyết định số phận trận chung kết World Cup 2014. Ảnh: <em>Reuters</em>.</p> </td> </tr> </tbody></table><p class=\"Normal\" style=\"text-align: justify;\"> <strong>Đội hình thi đấu</strong>:</p><p class=\"Normal\" style=\"text-align: justify;\"> <strong>Đức</strong>: Neuer - Lahm, Boateng, Hummels, Howedes - Kramer (Schurrle 32), Schweinsteiger – Muller, Kroos, Ozil (Mertesacker 119), Klose (Gotze 88).</p><p class=\"Normal\" style=\"text-align: justify;\"> Dự bị không sử dụng: Zieler, Grosskreutz, Ginter, Schurrle, Podolski, Draxler, Durm, Khedira, Weidenfeller.</p><p class=\"Normal\" style=\"text-align: justify;\"> Thẻ vàng: Schweinsteiger, Howedes.</p><p class=\"Normal\" style=\"text-align: justify;\"> Bàn thắng: Gotze 113.</p><p class=\"Normal\" style=\"text-align: justify;\"> <strong>Argentina</strong>: Romero - Zabaleta, Demichelis, Garay, Rojo - Biglia, Mascherano, Perez (Gago 86) - Messi, Higuain (Palacio 78), Lavezzi (Aguero 46).</p><p class=\"Normal\" style=\"text-align: justify;\"> Dự bị không sử dụng: Orion, Campagnaro, Di Maria, Rodriguez, Augusto Fernandez, Federico Fernandez, Alvarez, Basanta, Andujar.</p><p class=\"Normal\" style=\"text-align: justify;\"> Thẻ vàng: Mascherano, Aguero.</p><p class=\"Normal\" style=\"text-align: justify;\"> Trọng tài: Nicola Rizzoli (Italy)</p><p class=\"Normal\" style=\"text-align: center;\"> &nbsp;</p>', 'http://chuthapdophutho.org.vn/uploads/hoat-dong/2014_07/duc-5728-1405292650.jpg', '2014-11-10 15:06:08', '2014-11-11 15:35:57', '12', null, '1', 'Thắng Argentina ở hiệp phụ, Đức vô địch World Cup 2014', 'Thắng Argentina ở hiệp phụ, Đức vô địch World Cup 2014', 'Thắng Argentina ở hiệp phụ, Đức vô địch World Cup 2014');
INSERT INTO `tb_baiviet` VALUES ('11', '7', '1', '1', null, 'Bộ trưởng Nội vụ nói về dự án tuyển chọn trí thức trẻ', 'Bộ trưởng Bộ Nội vụ Nguyễn Thái Bình đã trả lời những băn khoăn của sinh viên, thanh niên trí thức về các dự án đưa trí thức trẻ về địa phương trong chương trình “Dân hỏi-Bộ trưởng trả lời” ngày 13/4.', '<div style=\"text-align: justify;\"> <em>Thưa Bộ trưởng, xin được bắt đầu với một câu hỏi của một trí thức trẻ thuộc Dự án 600 Phó Chủ tịch xã, hiện đang làm việc tại một xã miền núi có điều kiện khó khăn: \"Hiện tôi được hưởng mức lương 2,34 cùng với một số phụ cấp khác, tổng thu nhập khoảng 5 triệu đồng/tháng. Mức này ở vùng miền núi như tôi chỉ đủ tiền ăn ở, đi lại, không đủ để trang trải các chi phí khám chữa bệnh, tiền học cho con ... Gia đình, bạn bè cũng đang tạo điều kiện cho tôi về một công việc khác ở miền xuôi. Đôi lúc tôi cũng rất băn khoăn, nếu cứ kéo dài tình trạng này thì tôi tự cảm thấy mình không thể toàn tâm toàn ý với dự án. Xin Bộ trưởng cho biết tôi phải làm gì\"?<br> &nbsp;</em></div><p style=\"text-align: justify;\"> <strong>Bộ trưởng Nguyễn Thái Bình:</strong>&nbsp;Mục tiêu của Dự án 600 Phó Chủ tịch xã là tăng cường đội ngũ trí thức trẻ có trình độ đại học về các xã thuộc 64 huyện nghèo cùng với Đảng bộ, chính quyền và nhân dân các địa phương đẩy mạnh phát triển kinh tế-xã hội, xóa đói giảm nghèo, xây dựng nông thôn mới. Qua đó, đào tạo, bồi dưỡng tạo nguồn cán bộ trẻ cho các địa phương.</p><p style=\"text-align: justify;\"> Đến thời điểm này dự án đã thu hút 580 trí thức trẻ, đảm bảo đạt yêu cầu, tiến độ đề ra. Kết quả sơ kết bước 1 cho thấy đa số trí thức trẻ tiếp cận nhanh đối với công việc, được cấp ủy, chính quyền địa phương, nhân dân đồng tình ủng hộ. Điều đó thể hiện chủ trương, chính sách của Đảng, pháp luật của Nhà nước là luôn quan tâm, tin tưởng và tạo mọi điều kiện để trí thức trẻ phát triển, học tập, cống hiến và trưởng thành.</p><p style=\"text-align: justify;\"> Xung quanh vấn đề bạn trẻ đang quan tâm, chúng tôi có thể nêu hai vấn đề như thế này. Thứ nhất, theo chế độ chính sách hiện hành thì Phó Chủ tịch UBND xã nằm trong dự án có mức thu nhập thấp nhất là 5,8 triệu đồng/tháng và người có thu nhập cao nhất là 8 triệu đồng/tháng tùy theo từng vùng, từng khu vực.</p><p style=\"text-align: justify;\"> Vấn đề thứ hai, các Phó Chủ tịch xã trẻ nằm trong dự án, thuộc biên chế Nhà nước. Do đó việc bố trí theo các chức danh cán bộ, công chức, viên chức sau này tùy thuộc vào mức độ phấn đấu hoàn thành nhiệm vụ tu dưỡng về phẩm chất đạo đức, nâng cao trình độ năng lực của từng trí thức trẻ.</p><p style=\"text-align: justify;\"> <em>Một sinh viên (quê ở miền núi) sắp ra trường cho biết rất muốn được về&nbsp; cống hiến cho quê hương gửi câu hỏi: \"Được biết ngoài Dự án 600 Phó Chủ tịch xã, còn có Đề án tuyển chọn trí thức trẻ tình nguyện về các xã tham gia phát triển nông thôn miền núi. Em rất thích được tham gia Đề án này, nhưng em có thắc mắc là hiện các hoạt động sinh viên tình nguyện hằng năm diễn ra rất mạnh mẽ, thời gian kéo&nbsp;dài. Liệu có sự trùng lặp giữa hai hình thức này và liệu vai trò là trí thức trẻ tình nguyện thì tiếng nói của những trí thức trẻ có được lắng nghe đầy đủ hay không\"?</em></p><p style=\"text-align: justify;\"> <strong>Bộ trưởng Nguyễn Thái Bình:</strong>&nbsp;Tôi có thể khẳng định rằng những đề án, dự án trí thức trẻ tình nguyện do Bộ Nội vụ chủ trì triển khai thực hiện không có sự chồng chéo, trùng lắp với bất cứ một chương trình thanh niên tình nguyện nào do tổ chức Đoàn các cấp đang thực hiện.</p><p style=\"text-align: justify;\"> Hiện nay, Bộ Nội vụ đang hoàn thành công tác khảo sát xác định nhu cầu của từng địa phương, trên cơ sở đó có tuyển chọn, bố trí đội ngũ công chức viên chức xã theo như dự kiến trong chương trình, kế hoạch.</p><p style=\"text-align: justify;\"> <em>Một trường hợp khác hỏi: \"Tôi là sinh viên xuất sắc ngành kinh tế, tôi có nghe các cơ quan báo đài nói về Đề án thu hút, tạo nguồn cán bộ từ sinh viên tốt nghiệp xuất sắc nhưng tôi không thấy nhà trường thông báo và hướng dẫn gì? Nếu nhà trường không thông báo, hướng dẫn thì tôi tự đăng ký liệu có đúng quy trình không? Bởi tôi được biết nếu không có trường giới thiệu, xác nhận thì coi như bị loại ngay từ đầu. Vì sao mục tiêu đến năm 2020 mà chỉ tuyển 1.000 sinh viên, như vậy có quá ít hay không, thưa Bộ trưởng\"?</em></p><p style=\"text-align: justify;\"> &nbsp;<strong>Bộ trưởng Nguyễn Thái Bình:</strong><em>&nbsp;</em>Ngoài dự án 600 Phó Chủ tịch xã và Dự án 500 công chức xã, vừa qua Bộ Chính trị ban hành kết luận về chính sách tạo nguồn cán bộ từ sinh viên tốt nghiệp xuất sắc, cán bộ khoa học trẻ.</p><p style=\"text-align: justify;\"> Theo mục tiêu chung của dự án, từ nay đến năm 2020, chúng ta tuyển chọn được ít nhất 1.000 sinh viên tốt nghiệp xuất sắc, các cán bộ khoa học trẻ vào công tác tại các cơ quan của Đảng, Nhà nước, lực lượng vũ trang, Tập đoàn, Tổng công ty của Nhà nước.</p><p style=\"text-align: justify;\"> Vấn đề các bạn trẻ đang quan tâm sẽ được Bộ Nội vụ hướng dẫn cụ thể về quy trình, thủ tục, tiêu chuẩn và điều kiện từ khâu phát hiện, tuyển chọn, bồi dưỡng, sử dụng, đãi ngộ, tôn vinh. Bộ Nội vụ đang hoàn thiện văn bản để trình Chính phủ, Thủ tướng Chính phủ phê duyệt để thực hiện kết luận của Bộ Chính trị.</p>', 'http://chuthapdophutho.org.vn/uploads/hoat-dong/2014_04/nguyen-thai-binh.png', '2014-11-10 15:09:40', '2014-11-11 15:35:57', '5', null, '1', 'Bộ trưởng Nội vụ nói về dự án tuyển chọn trí thức trẻ', 'Bộ trưởng Nội vụ nói về dự án tuyển chọn trí thức trẻ', 'Bộ trưởng Nội vụ nói về dự án tuyển chọn trí thức trẻ');
INSERT INTO `tb_baiviet` VALUES ('12', '22', '1', '5', '143/GM-CTDPT', 'Giấy mời họp giao ban Quý III/2014', null, '/chuthapdothainguyen/public/uploads/files/giay-moi-giao-ban-9-thang-2014_1.doc', null, '2014-11-10 20:25:31', '2014-11-11 15:35:57', '15', null, '1', 'Giấy mời họp giao ban Quý III/2014', 'Giấy mời họp giao ban Quý III/2014', 'Giấy mời họp giao ban Quý III/2014');
INSERT INTO `tb_baiviet` VALUES ('13', '22', '1', '5', '144/CV-CTDPT', 'Khảo sát tổ chức Hội cơ sở', null, '/chuthapdothainguyen/public/uploads/files/cv-khao-sat.doc', null, '2014-11-10 20:27:05', '2014-11-11 15:35:58', '9', null, '1', 'Khảo sát tổ chức Hội cơ sở', 'Khảo sát tổ chức Hội cơ sở', 'Khảo sát tổ chức Hội cơ sở');
INSERT INTO `tb_baiviet` VALUES ('14', '30', '1', '4', null, 'Bản đồ tỉnh Thái Nguyên', null, '', '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/epresshcthainguyen.jpg', '2014-11-10 20:55:28', '2014-11-11 15:35:58', '6', null, '1', null, null, null);
INSERT INTO `tb_baiviet` VALUES ('15', '30', '1', '4', null, 'Ngày sơ cứu thế giới 18/09', null, '', '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/ngay-so-cuu-the-gioi.jpg', '2014-11-10 20:57:28', '2014-11-11 15:35:58', '8', null, '1', null, null, null);
INSERT INTO `tb_baiviet` VALUES ('16', '24', '1', '1', '', 'Vịnh Hạ Long “nổi như cồn” trên bản đồ du lịch thế giới. Vịnh Hạ Long “nổi như cồn” trên bản đồ du lịch thế giới. ', 'Vịnh Hạ Long được báo chí quốc tế hết lời khen ngợi là một trong những địa danh lãng mạn nhất cho các cặp tình nhân, nằm trong top 100 điểm dừng chân nên đến trong đời cũng như trong top 10 điểm du thuyền hấp dẫn nhất thế giới…', '<p><span style=\"font-family:times new roman; font-size:12pt\">Gần đ&acirc;y, trang web cộng đồng du lịch nổi tiếng VirtualTourist đ&atilde; b&igrave;nh chọn Hạ Long l&agrave; một trong những điểm du thuyền hấp dẫn nhất tr&ecirc;n thế giới. </span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:times new roman; font-size:12pt\">Theo trang VirtualTourist, nếu bạn đến Việt Nam v&agrave; muốn trải nghiệm cảm gi&aacute;c thư gi&atilde;n tr&ecirc;n chiếc thuyền du lịch, h&atilde;y đến với Vịnh Hạ Long, nơi đ&atilde; được UNESCO c&ocirc;ng nhận l&agrave; di sản thi&ecirc;n nhi&ecirc;n thế giới.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:times new roman; font-size:12pt\">Nhấp nh&ocirc; trong l&agrave;n nước trong xanh m&agrave;u ngọc b&iacute;ch l&agrave; hơn 1,600 h&ograve;n đảo lớn nhỏ, trong đ&oacute; nhiều đảo chưa được đặt t&ecirc;n. C&aacute;c đảo tr&ecirc;n vịnh Hạ Long c&oacute; những h&igrave;nh th&ugrave; ri&ecirc;ng, kh&ocirc;ng giống bất kỳ h&ograve;n đảo n&agrave;o ven biển Việt Nam v&agrave; kh&ocirc;ng đảo n&agrave;o giống đảo n&agrave;o. C&oacute; chỗ đảo quần tụ lại nh&igrave;n xa ngỡ chồng chất l&ecirc;n nhau, nhưng cũng c&oacute; chỗ đảo đứng dọc ngang xen kẽ nhau, tạo th&agrave;nh tuyến chạy d&agrave;i h&agrave;ng chục km như một bức tường th&agrave;nh. </span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:times new roman; font-size:12pt\">Đ&oacute; l&agrave; một thế giới sinh linh ẩn hiện trong những h&igrave;nh h&agrave;i bằng đ&aacute; đ&atilde; được huyền thoại h&oacute;a. Đảo th&igrave; giống khu&ocirc;n mặt ai đ&oacute; đang hướng về đất liền (h&ograve;n Đầu Người); đảo th&igrave; giống như một con rồng đang bay lượn tr&ecirc;n mặt nước (h&ograve;n Rồng); đảo th&igrave; lại giống như một &ocirc;ng l&atilde;o đang ngồi c&acirc;u c&aacute; (h&ograve;n L&atilde; Vọng); ph&iacute;a xa l&agrave; hai c&aacute;nh buồm n&acirc;u đang rẽ s&oacute;ng nước ra khơi (h&ograve;n C&aacute;nh Buồm); đảo lại l&uacute;p x&uacute;p như m&acirc;m x&ocirc;i c&uacute;ng (h&ograve;n M&acirc;m X&ocirc;i); rồi hai con g&agrave; đang &acirc;u yếm vờn nhau tr&ecirc;n s&oacute;ng nước (h&ograve;n Trống M&aacute;i).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:times new roman; font-size:12pt\">B&ecirc;n cạnh c&aacute;c đảo được đặt t&ecirc;n căn cứ v&agrave;o h&igrave;nh d&aacute;ng, l&agrave; c&aacute;c đảo đặt t&ecirc;n theo sự t&iacute;ch d&acirc;n gian (n&uacute;i B&agrave;i Thơ, hang Trinh Nữ, đảo Tuần Ch&acirc;u), hoặc căn cứ v&agrave;o c&aacute;c đặc sản c&oacute; tr&ecirc;n đảo hay v&ugrave;ng biển quanh đảo (h&ograve;n Ngọc Vừng, h&ograve;n Kiến V&agrave;ng, đảo Khỉ&hellip;)</span></p>\r\n\r\n<div>\r\n<div style=\"text-align: center;\"><span style=\"font-family:times new roman; font-size:12pt\"><img alt=\"Vịnh Hạ Long có hơn 1,600 hòn đảo lớn nhỏ\" src=\"http://dantri4.vcmedia.vn/WFlAOO9qUlZOQGiSlDZ/Image/2014/03/halong2279-8a495.jpg\" style=\"margin:5px; width:430px\" /></span></div>\r\n\r\n<div style=\"text-align: center;\"><span style=\"font-family:times new roman; font-size:12pt\"><span style=\"font-family:tahoma; font-size:10pt\">Vịnh Hạ Long c&oacute; hơn 1,600 h&ograve;n đảo lớn nhỏ</span></span></div>\r\n</div>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:times new roman; font-size:12pt\">Nhiều th&agrave;nh vi&ecirc;n của VirtualTourist đ&atilde; đặt tour khởi h&agrave;nh từ H&agrave; Nội v&agrave; dừng ch&acirc;n tại Vịnh Hạ Long để chi&ecirc;m ngưỡng kỳ quan thi&ecirc;n nhi&ecirc;n nổi tiếng n&agrave;y. Nếu c&oacute; nhiều thời gian, bạn sẽ c&oacute; cơ hội kh&aacute;m ph&aacute; nơi đ&acirc;y nhiều hơn để thấy được vẻ đẹp của một điểm đến đ&atilde; được truyền th&ocirc;ng thế giới hết lời ca ngợi.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:times new roman; font-size:12pt\">Trang cộng đồng du lịch VirtualTourist cho rằng sẽ l&agrave; một chuyến đi tuyệt vời nếu bạn l&ecirc;nh đ&ecirc;nh tr&ecirc;n Vịnh Hạ Long bằng xuồng kaiac để kh&aacute;m ph&aacute; những hang động v&agrave; những ng&ocirc;i l&agrave;ng ch&agrave;i tr&ecirc;n vịnh hay chỉ đơn giản l&agrave; ngắm mặt trời mọc tr&ecirc;n vịnh.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:times new roman; font-size:12pt\">Trước đ&oacute;, tạp ch&iacute; nổi tiếng của Mỹ National Geographic cũng xếp Vịnh Hạ Long l&agrave; một trong 10 điểm đến l&atilde;ng mạn nhất cho c&aacute;c cặp t&igrave;nh nh&acirc;n v&agrave;o ng&agrave;y Lễ T&igrave;nh y&ecirc;u trong năm 2014 cũng bởi vẻ quyến rũ tưởng như kh&oacute; cưỡng lại của cảnh sắc nơi đ&acirc;y.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:times new roman; font-size:12pt\">Vịnh Hạ Long cũng được đ&aacute;nh gi&aacute; l&agrave; một trong 12 địa điểm chụp ảnh đẹp nhất thế giới c&ugrave;ng với h&ograve;n đảo thi&ecirc;n đường Bora Bora (Ph&aacute;p), đảo Ba li (Indonesia), th&agrave;nh phố Rio de Janeiro (Brazil), đỉnh Everest (Nepal)&hellip;</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:times new roman; font-size:12pt\">Trang Bussiness Insider của Mỹ vừa c&ocirc;ng bố Vịnh Hạ Long đứng thứ 26 trong top 100 địa danh n&ecirc;n đến trong đời. Vịnh Hạ Long được khuy&ecirc;n l&agrave; nơi du kh&aacute;ch khắp thế giới n&ecirc;n đến v&agrave; &quot;trải nghiệm một đ&ecirc;m bềnh bồng tr&ecirc;n một chiếc thuyền buồm ngo&agrave;i khơi&quot;.</span></p>\r\n\r\n<div>\r\n<div style=\"text-align: center;\"><span style=\"font-family:times new roman; font-size:12pt\"><img alt=\"Vịnh Hạ Long có hơn 1,600 hòn đảo lớn nhỏ\" src=\"http://dantri4.vcmedia.vn/WFlAOO9qUlZOQGiSlDZ/Image/2014/03/milford-0a769.JPG\" style=\"margin:5px; width:450px\" /></span></div>\r\n\r\n<div style=\"text-align: center;\"><span style=\"font-family:times new roman; font-size:12pt\"><span style=\"font-family:tahoma; font-size:10pt\">Eo biển Milford Sound cũng c&oacute; trong top 10 điểm du thuyền hấp dẫn nhất thế giới do VirtualTourist b&igrave;nh chọn</span></span></div>\r\n</div>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:times new roman; font-size:12pt\">Trở lại với top 10 điểm du thuyền hấp dẫn nhất thế giới do VirtualTourist b&igrave;nh chọn, Mỹ dẫn đầu danh s&aacute;ch với nhiều điểm du thuyền th&uacute; vị nhất, bao gồm: tuyến du thuyền của c&ocirc;ng ty Ph&agrave; Cổng V&agrave;ng tại Vịnh San Francisco (Mỹ), tuyến ph&agrave; từ th&agrave;nh phố Anacortes đến Quần San Juan v&agrave; tuyến du thuyền từ đảo St Thomas đến đảo St John thuộc Quần đảo Virgin.</span></p>\r\n\r\n<div style=\"text-align: justify;\"><span style=\"font-family:times new roman; font-size:12pt\">C&aacute;c địa danh kh&aacute;c c&oacute; t&ecirc;n trong top 10 l&agrave; eo biển Milford Sound của New Zealand, tuyến ph&agrave; Star Ferry (Hong Kong), thuyền m&aacute;y chở kh&aacute;ch du lịch tại th&agrave;nh phố Venice (&Yacute;); tuyến ph&agrave; từ bến cảng Circular đến b&atilde;i biển Manl (&Uacute;c); tuyến du thuyền từ Downtown Newport đến đảo Block thuộc v&ugrave;ng New England, ph&iacute;a đ&ocirc;ng bắc của Mỹ v&agrave; S&ocirc;ng Ranh (Thụy Sĩ).</span></div>\r\n', 'http://chuthapdophutho.org.vn/uploads/hoat-dong/2014_03/halong-bay-68761.jpg', '2014-11-10 21:29:14', '2014-11-19 09:20:22', '5', '0', '1', 'Vịnh Hạ Long “nổi như cồn” trên bản đồ du lịch thế giới', 'Vịnh Hạ Long “nổi như cồn” trên bản đồ du lịch thế giới', 'Vịnh Hạ Long “nổi như cồn” trên bản đồ du lịch thế giới');
INSERT INTO `tb_baiviet` VALUES ('17', '24', '1', '1', '', 'Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm Nghiệm ', '13h30 ngày 22/3, tàu ngầm kilo HQ 183 - TP Hồ Chí Minh được đưa khỏi tàu vận tải Rolldock Star và lai dắt vào quân cảng Cam Ranh (Khánh Hòa).', '<p style=\"text-align:justify\">Mặc d&ugrave; m&acirc;y m&ugrave; d&agrave;y đặc, c&oacute; mưa v&agrave; s&oacute;ng biển lớn, nhưng s&aacute;ng 22/3 lực lượng chức năng vẫn&nbsp;bơm nước v&agrave;o khoang t&agrave;u vận tải Rolldock Star&nbsp;để đưa t&agrave;u ngầm Kilo HQ 183 TP&nbsp;Hồ Ch&iacute; Minh hạ thủy.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"width:1px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><img alt=\"T2-1-1328-1395477309.jpg\" src=\"http://m.f29.img.vnecdn.net/2014/03/22/T2-1-1328-1395477309.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\">T&agrave;u TP Hồ Ch&iacute; Minh l&agrave; t&agrave;u ngầm thế hệ thứ 3 thuộc Dự &aacute;n 636 Varshavyanka (NATO gọi l&agrave; Kilo), đồng thời l&agrave; chiếc thứ hai m&agrave; Nga đ&oacute;ng v&agrave; b&agrave;n giao cho Việt Nam trong hợp đồng gồm 6 chiếc</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"width:1px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><img alt=\"T1-1-2671-1395477309.jpg\" src=\"http://m.f29.img.vnecdn.net/2014/03/22/T1-1-2671-1395477309.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\">Sau hơn một th&aacute;ng l&ecirc;nh đ&ecirc;nh tr&ecirc;n biển, t&agrave;u ngầm thứ hai của Việt Nam đ&atilde; được đưa về vịnh Cam Ranh h&ocirc;m 19/3.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"width:1px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><img alt=\"T8-3672-1395477309.jpg\" src=\"http://m.f29.img.vnecdn.net/2014/03/22/T8-3672-1395477309.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\">Lực lượng chức năng đ&atilde; đợi sẵn để&nbsp;lai dắt t&agrave;u ngầm rời khỏi vị tr&iacute; ở ph&iacute;a trước mũi Hời, v&ugrave;ng nước gi&aacute;p ranh giữa cảng d&acirc;n sự v&agrave; qu&acirc;n cảng Cam Ranh để đưa t&agrave;u v&agrave;o qu&acirc;n cảng Cam Ranh.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"width:1px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><img alt=\"T-10-5562-1395477309.jpg\" src=\"http://m.f29.img.vnecdn.net/2014/03/22/T-10-5562-1395477309.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\">13h30, t&agrave;u Kilo HQ 183 đ&atilde; được lai dắt v&agrave;o qu&acirc;n cảng Cam Ranh an to&agrave;n.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\" class=\"tplCaption\" style=\"width:1px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"text-align:center\"><img alt=\"T9-4140-1395477309.jpg\" src=\"http://m.f29.img.vnecdn.net/2014/03/22/T9-4140-1395477309.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p style=\"text-align:justify\">Cờ đỏ sao v&agrave;ng tung bay tr&ecirc;n n&oacute;c t&agrave;u ngầm Kilo thứ hai của Việt Nam.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'http://chuthapdophutho.org.vn/uploads/hoat-dong/2014_03/t3-1-7372-1395477308.jpg', '2014-11-10 21:30:52', '2014-11-19 09:23:58', '13', '0', '1', 'Hạ thủy tàu ngầm kilo TP Hồ Chí Minh', 'Hạ thủy tàu ngầm kilo TP Hồ Chí Minh', 'Hạ thủy tàu ngầm kilo TP Hồ Chí Minh');
INSERT INTO `tb_baiviet` VALUES ('18', '31', '1', '4', null, 'Kỷ niệm ngày thành lập hội', null, null, '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/dsc0641.jpg', '2014-11-10 21:44:46', '2014-11-11 15:36:00', '3', null, '1', 'Kỷ niệm ngày thành lập hội', 'Kỷ niệm ngày thành lập hội', 'Kỷ niệm ngày thành lập hội');
INSERT INTO `tb_baiviet` VALUES ('19', '32', '1', '4', null, 'Hiến máu nhân đạo', null, null, '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/1322709418_hotbac.jpg', '2014-11-10 21:46:19', '2014-11-11 15:36:01', '6', null, '1', 'Hiến máu nhân đạo', 'Hiến máu nhân đạo', 'Hiến máu nhân đạo');

-- ----------------------------
-- Table structure for `tb_cauhinh`
-- ----------------------------
DROP TABLE IF EXISTS `tb_cauhinh`;
CREATE TABLE `tb_cauhinh` (
  `ch_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `md_id` int(11) DEFAULT NULL,
  `ch_ma` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch_kieu` tinyint(4) DEFAULT NULL,
  `ch_tieude` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch_noidung` text COLLATE utf8_unicode_ci,
  `ch_thutu` int(11) DEFAULT NULL,
  `ch_trangthai` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_cauhinh
-- ----------------------------
INSERT INTO `tb_cauhinh` VALUES ('1', '13', 'ch_don_vi', '0', 'Tên đơn vị', 'Hội chữ thập đỏ tỉnh Thái Nguyên', '1', '1');
INSERT INTO `tb_cauhinh` VALUES ('2', '14', 'ch_favicon', '3', 'Favicon (Ảnh PNG, kích thước 16 x 16 px)', '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/favicon.png', '0', '1');
INSERT INTO `tb_cauhinh` VALUES ('3', '13', 'ch_email', '0', 'Email (người dùng sẽ gửi liên hệ vào Email này)', 'minhthanh.hvu@gmail.com', '3', '1');
INSERT INTO `tb_cauhinh` VALUES ('5', '15', 'ch_slide', '0', 'Số lượng tin tối đa hiển thị trên Slide', '10', '1', '1');
INSERT INTO `tb_cauhinh` VALUES ('6', '15', 'ch_chuyen_muc', '0', 'Số lượng tin tức hiển thị cho mỗi chuyên mục', '3', '2', '1');
INSERT INTO `tb_cauhinh` VALUES ('7', '14', 'ch_banner', '3', 'Banner (Kích thước 200 x 1000 px)', '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/banner(1).jpg', '1', '1');
INSERT INTO `tb_cauhinh` VALUES ('8', '14', 'ch_tin_moi', '0', 'Số lượng tin hiển thị trong phần \"Tin mới\"', '5', '3', '1');
INSERT INTO `tb_cauhinh` VALUES ('9', '14', 'ch_van_ban_moi', '0', 'Số lượng văn bản hiển thị trong phần \"Văn bản mới\"', '5', '4', '1');
INSERT INTO `tb_cauhinh` VALUES ('10', '14', 'ch_ban_do', '0', 'Tọa độ của đơn vị (ngăn cách nhau bởi dấu \",\"), hiển thị trong phần phần \"Bản đồ\"', '21.598884,105.834511', '5', '1');
INSERT INTO `tb_cauhinh` VALUES ('11', '14', 'ch_cuoi_trang', '2', 'Nội dung cuối trang', '<div style=\"margin-left: 40px;\"><strong>HỘI CHỮ THẬP ĐỎ TỈNH TH&Aacute;I NGUY&Ecirc;N</strong><br />\r\nĐịa chỉ: Số 969 đường Bắc Kạn - TP. Th&aacute;i Nguy&ecirc;n - T. Th&aacute;i Nguy&ecirc;n<br />\r\nĐiện thoại: 0280.3.855.242</div>\r\n\r\n<div style=\"margin-left: 40px;\">Email: thainguyenredcross@gmail.com<br />\r\nT&agrave;i khoản: 9527.2.1034669&nbsp;Kho bạc Nh&agrave; nước tỉnh Th&aacute;i Nguy&ecirc;n</div>\r\n', '7', '1');
INSERT INTO `tb_cauhinh` VALUES ('12', '16', 'ch_tin_tuc', '0', 'Số lượng tin tức hiển thị trên 1 trang', '10', '1', '1');
INSERT INTO `tb_cauhinh` VALUES ('13', '17', 'ch_tin_tuc_khac', '0', 'Số lượng tin tức khác', '10', '1', '1');
INSERT INTO `tb_cauhinh` VALUES ('14', '18', 'ch_video_khac', '0', 'Số lượng video khác', '10', '1', '1');
INSERT INTO `tb_cauhinh` VALUES ('15', '14', 'ch_anh_noi_bat', '3', 'Ảnh tuyên truyền, vận động trên toàn bộ website (Kích thước 620 x 220 px)', '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/ngay-so-cuu-the-gioi.jpg', '6', '1');
INSERT INTO `tb_cauhinh` VALUES ('16', '19', 'ch_van_ban', '0', 'Số lượng văn bản hiển thị trên 1 trang', '10', '1', '1');
INSERT INTO `tb_cauhinh` VALUES ('17', '14', 'ch_chu_chay', '0', 'Chữ chạy phần đầu trang', 'Chào mừng các bạn đến với hội chữ thập đỏ tỉnh Thái Nguyên', '2', '1');
INSERT INTO `tb_cauhinh` VALUES ('18', '20', 'ch_dieu_khoan', '2', 'Nội dung các điều khoản', 'Nội dung các điều khoản...', '1', '1');

-- ----------------------------
-- Table structure for `tb_danhmuc`
-- ----------------------------
DROP TABLE IF EXISTS `tb_danhmuc`;
CREATE TABLE `tb_danhmuc` (
  `dm_id` int(11) NOT NULL AUTO_INCREMENT,
  `dm_cha` int(11) DEFAULT NULL,
  `dm_kieu` tinyint(10) DEFAULT NULL,
  `dm_tieude` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dm_title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dm_keyword` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dm_description` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dm_ngaythem` datetime DEFAULT NULL,
  `dm_ngaysua` datetime DEFAULT NULL,
  `dm_trangthai` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`dm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_danhmuc
-- ----------------------------
INSERT INTO `tb_danhmuc` VALUES ('1', '0', '2', 'Các trang chính', 'Các trang chính', 'Các trang chính', 'Các trang chính', '2014-11-10 09:07:43', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('5', '0', '1', 'Dòng sự kiện', 'Dòng sự kiện', 'Dòng sự kiện', 'Dòng sự kiện', '2014-11-10 09:09:51', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('6', '5', '1', 'Công tác tuyên truyền - huấn luyện', 'Công tác tuyên truyền - huấn luyện', 'Công tác tuyên truyền - huấn luyện', 'Công tác tuyên truyền - huấn luyện', '2014-11-10 09:10:53', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('7', '5', '1', 'Công tác xã hội', 'Công tác xã hội', 'Công tác xã hội', 'Công tác xã hội', '2014-11-10 09:11:09', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('8', '5', '1', 'Công tác chăm sóc sức khỏe nhân dân dựa vào cộng đồng', 'Công tác chăm sóc sức khỏe nhân dân dựa vào cộng đồng', 'Công tác chăm sóc sức khỏe nhân dân dựa vào cộng đồng', 'Công tác chăm sóc sức khỏe nhân dân dựa vào cộng đồng', '2014-11-10 20:48:12', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('9', '5', '1', 'Tuyên truyền xây dựng quỹ hội', 'Tuyên truyền xây dựng quỹ hội', 'Tuyên truyền xây dựng quỹ hội', 'Tuyên truyền xây dựng quỹ hội', '2014-11-10 09:12:21', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('10', '5', '1', 'Phòng ngừa ứng phó với thảm họa, thiên tai', 'Phòng ngừa ứng phó với thảm họa, thiên tai', 'Phòng ngừa ứng phó với thảm họa, thiên tai', 'Phòng ngừa ứng phó với thảm họa, thiên tai', '2014-11-10 09:13:06', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('11', '5', '1', 'Công tác thanh thiếu niên, tình nguyện viên', 'Công tác thanh thiếu niên, tình nguyện viên', 'Công tác thanh thiếu niên, tình nguyện viên', 'Công tác thanh thiếu niên, tình nguyện viên', '2014-11-10 09:13:52', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('12', '5', '1', 'Đối ngoại, phát triển', 'Đối ngoại, phát triển', 'Đối ngoại, phát triển', 'Đối ngoại, phát triển', '2014-11-10 09:14:38', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('13', '0', '1', 'Cuộc vận động', 'Cuộc vận động', 'Cuộc vận động', 'Cuộc vận động', '2014-11-10 09:31:14', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('14', '13', '1', 'Nội dung cuộc vân động \"Mỗi tổ chức, mỗi cá nhân gắn với 1 địa chỉ nhân đạo\"', 'Nội dung cuộc vân động \"Mỗi tổ chức, mỗi cá nhân gắn với một địa chỉ nhân đạo\"', 'Nội dung cuộc vân động \"Mỗi tổ chức, mỗi cá nhân gắn với một địa chỉ nhân đạo\"', 'Nội dung cuộc vân động \"Mỗi tổ chức, mỗi cá nhân gắn với một địa chỉ nhân đạo\"', '2014-11-10 20:49:22', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('15', '13', '1', 'Kế hoạch tiến hành cuộc vận động', 'Kế hoạch tiến hành cuộc vận động', 'Kế hoạch tiến hành cuộc vận động', 'Kế hoạch tiến hành cuộc vận động', '2014-11-10 09:31:47', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('16', '13', '1', 'Danh sách tổng hợp các đối tượng cần được gắn địa chỉ nhân đạo', 'Danh sách tổng hợp các đối tượng cần được gắn địa chỉ nhân đạo', 'Danh sách tổng hợp các đối tượng cần được gắn địa chỉ nhân đạo', 'Danh sách tổng hợp các đối tượng cần được gắn địa chỉ nhân đạo', '2014-11-10 20:49:48', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('17', '13', '1', 'Danh sách các tổ chức, cá nhân đã được gắn địa chỉ nhân đạo', 'Danh sách các tổ chức, cá nhân đã được gắn địa chỉ nhân đạo', 'Danh sách các tổ chức, cá nhân đã được gắn địa chỉ nhân đạo', 'Danh sách các tổ chức, cá nhân đã được gắn địa chỉ nhân đạo', '2014-11-10 20:50:11', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('18', '0', '1', 'Địa chỉ nhân đạo', 'Địa chỉ nhân đạo', 'Địa chỉ nhân đạo', 'Địa chỉ nhân đạo', '2014-11-10 09:35:33', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('19', '0', '5', 'Văn bản', 'Văn bản', 'Văn bản', 'Văn bản', '2014-11-10 15:54:43', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('20', '19', '5', 'Văn bản tỉnh Hội', 'Văn bản tỉnh Hội', 'Văn bản tỉnh Hội', 'Văn bản tỉnh Hội', '2014-11-10 15:54:44', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('21', '19', '5', 'Văn bản trung ương hội', 'Văn bản trung ương hội', 'Văn bản trung ương hội', 'Văn bản trung ương hội', '2014-11-10 15:54:44', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('22', '19', '5', 'Văn bản có liên quan', 'Văn bản có liên quan', 'Văn bản có liên quan', 'Văn bản có liên quan', '2014-11-10 15:54:45', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('23', '0', '5', 'Mục phụ trợ', 'Mục phụ trợ', 'Mục phụ trợ', 'Mục phụ trợ', '2014-11-10 15:54:47', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('24', '23', '1', 'Tìm kiếm kiến thức', 'Tìm kiếm kiến thức', 'Tìm kiếm kiến thức', 'Tìm kiếm kiến thức', '2014-11-10 09:54:18', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('25', '23', '1', 'Tin mới cập nhật', 'Tin mới cập nhật', 'Tin mới cập nhật', 'Tin mới cập nhật', '2014-11-10 10:03:46', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('26', '23', '4', 'Các file ảnh', 'Các file ảnh', 'Các file ảnh', 'Các file ảnh', '2014-11-10 13:20:09', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('27', '23', '3', 'Các file video', 'Các file video', 'Các file video', 'Các file video', '2014-11-10 13:20:12', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('28', '27', '3', 'Hoạt động', 'Hoạt động', 'Hoạt động', 'Hoạt động', '2014-11-10 14:29:07', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('30', '26', '4', 'HÌNH ẢNH KHÁC', 'Hình ảnh khác', 'Hình ảnh khác', 'Hình ảnh khác', '2014-11-10 21:34:35', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('31', '26', '4', 'CƠ QUAN TỈNH HỘI', 'CƠ QUAN TỈNH HỘI', 'CƠ QUAN TỈNH HỘI', 'CƠ QUAN TỈNH HỘI', '2014-11-10 21:38:11', null, '1');
INSERT INTO `tb_danhmuc` VALUES ('32', '26', '4', 'HOẠT ĐỘNG HỘI', 'HOẠT ĐỘNG HỘI', 'HOẠT ĐỘNG HỘI', 'HOẠT ĐỘNG HỘI', '2014-11-10 21:38:19', null, '1');

-- ----------------------------
-- Table structure for `tb_hienmau`
-- ----------------------------
DROP TABLE IF EXISTS `tb_hienmau`;
CREATE TABLE `tb_hienmau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` tinyint(4) DEFAULT NULL,
  `ngaysinh` int(11) DEFAULT NULL,
  `thangsinh` int(11) DEFAULT NULL,
  `namsinh` int(11) DEFAULT NULL,
  `cmnd` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai1` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai2` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nhommau` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chieucao` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cannang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `solanhien` int(11) DEFAULT NULL,
  `thoigianhien` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguyenquan` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tamtru` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `donvi` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` tinyint(4) DEFAULT NULL,
  `ngaythem` timestamp NULL DEFAULT NULL,
  `ngaysua` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_hienmau
-- ----------------------------
INSERT INTO `tb_hienmau` VALUES ('1', 'Lê Minh Thành', '1', '29', '10', '1991', '0123123213', '123213', '0123123123', 'minhthanh.hvu@gmail.com', 'AB', '1m63', '62 kg', '0', '29/10/1991', 'Đoan Hùng - Phú Thọ', 'Đoan Hùng', 'CNS HV', 'Không', '1', null, '2014-11-19 16:12:17');
INSERT INTO `tb_hienmau` VALUES ('2', 'Phùng Quang Tuấn', '2', '12', '8', '1966', '1231231', '0123123', '009123812', 'tuan@gmail.com', '0', '1m63', '12kg', '2', '35/10/2004', 'ádasd', 'ádads', 'ádas', 'zad', '1', '2014-11-19 16:02:58', '2014-11-19 16:04:51');

-- ----------------------------
-- Table structure for `tb_kieumenu`
-- ----------------------------
DROP TABLE IF EXISTS `tb_kieumenu`;
CREATE TABLE `tb_kieumenu` (
  `kmn_id` int(11) NOT NULL AUTO_INCREMENT,
  `kmn_duongdan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kmn_tieude` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kmn_thutu` int(11) DEFAULT NULL,
  `kmn_trangthai` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`kmn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_kieumenu
-- ----------------------------
INSERT INTO `tb_kieumenu` VALUES ('1', 'tin-tuc', 'Tin tức', '7', '1');
INSERT INTO `tb_kieumenu` VALUES ('2', 'trang', 'Trang', '2', '1');
INSERT INTO `tb_kieumenu` VALUES ('3', 'video', 'Video', '3', '1');
INSERT INTO `tb_kieumenu` VALUES ('4', 'anh', 'Ảnh', '4', '1');
INSERT INTO `tb_kieumenu` VALUES ('5', 'van-ban', 'Văn bản', '5', '1');
INSERT INTO `tb_kieumenu` VALUES ('6', 'lien-ket', 'Liên kết', '6', '1');
INSERT INTO `tb_kieumenu` VALUES ('7', 'chuyen-muc', 'Chuyên mục', '1', '1');
INSERT INTO `tb_kieumenu` VALUES ('8', 'trang-chu', 'Trang chủ', '8', '1');
INSERT INTO `tb_kieumenu` VALUES ('9', 'dang-ky-hien-mau', 'Trang đăng ký hiến máu', '9', '1');
INSERT INTO `tb_kieumenu` VALUES ('10', 'lich-cong-tac', 'Trang lịch công tác', '10', '1');
INSERT INTO `tb_kieumenu` VALUES ('11', 'lien-he', 'Trang liên hệ', '11', '1');
INSERT INTO `tb_kieumenu` VALUES ('12', 'tim-kiem', 'Trang tìm kiếm', '12', '1');

-- ----------------------------
-- Table structure for `tb_lichcongtac`
-- ----------------------------
DROP TABLE IF EXISTS `tb_lichcongtac`;
CREATE TABLE `tb_lichcongtac` (
  `lct_id` int(11) NOT NULL AUTO_INCREMENT,
  `lct_tuan` int(11) DEFAULT NULL,
  `lct_tungay` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lct_denngay` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lct_noidung` text COLLATE utf8_unicode_ci,
  `lct_ngaythem` datetime DEFAULT NULL,
  `lct_ngaysua` datetime DEFAULT NULL,
  `lct_trangthai` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`lct_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_lichcongtac
-- ----------------------------
INSERT INTO `tb_lichcongtac` VALUES ('1', '1', '01/11/2014', '29/11/2014', '<table border=\"1\" cellpadding=\"2\" cellspacing=\"2\" class=\"tieude\" style=\"border-collapse:collapse; border-color:#999999; width:100%\">\r\n	<thead>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>S&aacute;ng</td>\r\n			<td>Chiều</td>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>Thứ 2</td>\r\n			<td>\r\n			<div style=\"text-align: justify;\">&aacute;d</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"text-align: justify;\">&aacute;d</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thứ 3</td>\r\n			<td>\r\n			<div style=\"text-align: justify;\">&aacute;ddddddddddddddddddddddddddddddddddddddddddddddddddđ</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"text-align: justify;\">ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thứ 4</td>\r\n			<td>\r\n			<div style=\"text-align: justify;\">&nbsp;</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"text-align: justify;\">&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thứ 5</td>\r\n			<td>\r\n			<div style=\"text-align: justify;\">&nbsp;</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"text-align: justify;\">&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thứ 6</td>\r\n			<td>\r\n			<div style=\"text-align: justify;\">&nbsp;</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"text-align: justify;\">&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Thứ 7</td>\r\n			<td>\r\n			<div style=\"text-align: justify;\">&nbsp;</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"text-align: justify;\">&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Chủ nhật</td>\r\n			<td>\r\n			<div style=\"text-align: justify;\">&aacute;dasd</div>\r\n			</td>\r\n			<td>\r\n			<div style=\"text-align: justify;\">&nbsp;</div>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2014-11-14 09:33:01', null, '1');

-- ----------------------------
-- Table structure for `tb_lienhe`
-- ----------------------------
DROP TABLE IF EXISTS `tb_lienhe`;
CREATE TABLE `tb_lienhe` (
  `lh_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lh_tieude` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lh_hoten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lh_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lh_dienthoai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lh_noidung` text COLLATE utf8_unicode_ci,
  `lh_thoigian` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `lh_trangthai` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`lh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tb_lienhe
-- ----------------------------
INSERT INTO `tb_lienhe` VALUES ('2', 'test', 'Thành', 'ptuan@gmail.com', '0123123213', 'ádasd sdasd', '2014-11-12 23:29:19', '1');
INSERT INTO `tb_lienhe` VALUES ('3', 'test', 'Thành', 'ptuan@gmail.com', '0123123213', 'áđá', '2014-11-06 12:54:27', '0');

-- ----------------------------
-- Table structure for `tb_menu`
-- ----------------------------
DROP TABLE IF EXISTS `tb_menu`;
CREATE TABLE `tb_menu` (
  `mn_id` int(11) NOT NULL AUTO_INCREMENT,
  `mn_tieude` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kmn_id` tinyint(4) DEFAULT NULL,
  `mn_trang` int(11) DEFAULT NULL,
  `mn_lienket` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mn_molienket` tinyint(4) DEFAULT NULL,
  `mn_cha` int(11) DEFAULT NULL,
  `mn_vitri` tinyint(10) DEFAULT NULL,
  `mn_thutu` int(11) DEFAULT NULL,
  `mn_trangthai` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`mn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_menu
-- ----------------------------
INSERT INTO `tb_menu` VALUES ('1', 'Trang chủ', '8', null, null, '0', '0', '0', '1', '1');
INSERT INTO `tb_menu` VALUES ('2', 'Giới thiệu', '2', '1', null, '0', '0', '0', '2', '1');
INSERT INTO `tb_menu` VALUES ('3', 'Dòng sự kiện', '7', '5', null, '0', '0', '0', '3', '1');
INSERT INTO `tb_menu` VALUES ('4', 'Đăng ký hiến máu', '9', null, null, '0', '0', '0', '4', '1');
INSERT INTO `tb_menu` VALUES ('5', 'Lịch công tác', '10', null, null, '0', '0', '0', '5', '1');
INSERT INTO `tb_menu` VALUES ('6', 'Liên hệ', '11', null, null, '0', '0', '0', '6', '1');
INSERT INTO `tb_menu` VALUES ('7', 'Các trang chính', '7', '1', null, '0', '0', '1', '1', '1');
INSERT INTO `tb_menu` VALUES ('8', 'Giới thiệu', '2', '1', null, '0', '7', '1', '1', '1');
INSERT INTO `tb_menu` VALUES ('9', 'Hệ thống tổ chức', '2', '2', null, '0', '7', '1', '2', '1');
INSERT INTO `tb_menu` VALUES ('10', 'Lĩnh vực hoạt động', '2', '3', null, '0', '7', '1', '3', '1');
INSERT INTO `tb_menu` VALUES ('11', 'Dòng sự kiện', '7', '5', null, '0', '0', '1', '2', '1');
INSERT INTO `tb_menu` VALUES ('12', 'Công tác tuyên truyền - huấn luyện', '7', '6', null, '0', '11', '1', '1', '1');
INSERT INTO `tb_menu` VALUES ('13', 'Công tác xã hội', '7', '7', null, '0', '11', '1', '2', '1');
INSERT INTO `tb_menu` VALUES ('14', 'Công tác chăm sóc sức khỏe nhân dân dựa vào cộng đồng', '7', '8', null, '0', '11', '1', '3', '1');
INSERT INTO `tb_menu` VALUES ('15', 'Tuyên truyền xây dựng quỹ hội', '7', '9', null, '0', '11', '1', '4', '1');
INSERT INTO `tb_menu` VALUES ('16', 'Phòng ngừa ứng phó với thảm họa, thiên tai', '7', '10', null, '0', '11', '1', '5', '1');
INSERT INTO `tb_menu` VALUES ('17', 'Công tác thanh thiếu niên, tình nguyện viên', '7', '11', null, '0', '11', '1', '6', '1');
INSERT INTO `tb_menu` VALUES ('18', 'Đối ngoại, phát triển', '7', '12', null, '0', '11', '1', '6', '1');
INSERT INTO `tb_menu` VALUES ('19', 'Cuộc vận động', '7', '13', null, '0', '0', '1', '3', '1');
INSERT INTO `tb_menu` VALUES ('20', 'Nội dung cuộc vân động \"Mỗi tổ chức, mỗi cá nhân gắn với 1 địa chỉ nhân đạo\"', '7', '14', null, '0', '19', '1', '1', '1');
INSERT INTO `tb_menu` VALUES ('21', 'Kế hoạch tiến hành cuộc vận động', '7', '15', null, '0', '19', '1', '2', '1');
INSERT INTO `tb_menu` VALUES ('22', 'Danh sách tổng hợp các đối tượng cần được gắn địa chỉ nhân đạo', '7', '16', null, '0', '19', '1', '3', '1');
INSERT INTO `tb_menu` VALUES ('23', 'Danh sách các tổ chức, cá nhân đã được gắn địa chỉ nhân đạo', '7', '17', null, '0', '19', '1', '4', '1');
INSERT INTO `tb_menu` VALUES ('24', 'Địa chỉ nhân đạo', '7', '18', null, '0', '0', '1', '4', '1');
INSERT INTO `tb_menu` VALUES ('25', 'Văn bản', '7', '19', null, '0', '0', '1', '5', '1');
INSERT INTO `tb_menu` VALUES ('26', 'Văn bản tỉnh Hội', '7', '20', null, '0', '25', '1', '1', '1');
INSERT INTO `tb_menu` VALUES ('27', 'Văn bản trung ương hội', '7', '21', null, '0', '25', '1', '2', '1');
INSERT INTO `tb_menu` VALUES ('28', 'Văn bản có liên quan', '7', '22', null, '0', '25', '1', '3', '1');
INSERT INTO `tb_menu` VALUES ('29', 'Lịch công tác', '10', null, null, '0', '0', '1', '6', '1');
INSERT INTO `tb_menu` VALUES ('30', 'Mục phụ trợ', '0', '23', null, '0', '0', '1', '7', '1');
INSERT INTO `tb_menu` VALUES ('31', 'Tìm kiếm kiến thức', '7', '24', null, '0', '30', '1', '1', '1');
INSERT INTO `tb_menu` VALUES ('32', 'Tin mới cập nhật', '7', '25', null, '0', '30', '1', '2', '1');
INSERT INTO `tb_menu` VALUES ('33', 'Các file ảnh', '7', '26', null, '0', '30', '1', '3', '1');
INSERT INTO `tb_menu` VALUES ('34', 'Các file video', '7', '27', null, '0', '30', '1', '4', '1');

-- ----------------------------
-- Table structure for `tb_module`
-- ----------------------------
DROP TABLE IF EXISTS `tb_module`;
CREATE TABLE `tb_module` (
  `md_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_tieude` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `md_kieu` tinyint(4) DEFAULT NULL,
  `md_vitri` tinyint(4) DEFAULT NULL,
  `md_thutu` int(11) DEFAULT NULL,
  `md_trangthai` tinyint(4) DEFAULT NULL,
  `md_ngaythem` datetime DEFAULT NULL,
  `md_ngaysua` datetime DEFAULT NULL,
  PRIMARY KEY (`md_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_module
-- ----------------------------
INSERT INTO `tb_module` VALUES ('1', 'Tỷ giá ngoại tệ', '11', '2', '5', '1', '2014-11-09 15:37:23', '2014-11-09 15:37:26');
INSERT INTO `tb_module` VALUES ('2', 'Menu dọc đa cấp', '10', '1', '1', '1', '2014-11-09 15:31:42', '2014-11-09 15:31:45');
INSERT INTO `tb_module` VALUES ('3', 'Tin mới', '1', '1', '2', '1', '2014-11-09 15:31:48', '2014-11-09 15:31:51');
INSERT INTO `tb_module` VALUES ('4', 'Văn bản mới', '5', '1', '3', '1', '2014-11-09 15:33:19', '2014-11-09 15:33:22');
INSERT INTO `tb_module` VALUES ('5', 'Liên kết', '6', '1', '4', '1', '2014-11-09 15:33:14', '2014-11-09 15:33:17');
INSERT INTO `tb_module` VALUES ('6', 'Dự báo thời tiết', '8', '1', '5', '1', '2014-11-09 15:33:08', '2014-11-09 15:33:11');
INSERT INTO `tb_module` VALUES ('7', 'Thống kê', '7', '1', '6', '1', '2014-11-09 15:33:03', '2014-11-09 15:33:05');
INSERT INTO `tb_module` VALUES ('8', 'Tỉnh Thái Nguyên', '9', '2', '1', '1', '2014-11-09 15:32:57', '2014-11-09 15:33:00');
INSERT INTO `tb_module` VALUES ('9', 'Video', '3', '2', '2', '1', '2014-11-09 15:32:51', '2014-11-09 15:32:54');
INSERT INTO `tb_module` VALUES ('10', 'Vận động nguồn lực', '6', '2', '3', '1', '2014-11-09 15:32:18', '2014-11-09 15:32:21');
INSERT INTO `tb_module` VALUES ('11', 'Đăng ký hiến máu', '6', '2', '4', '1', '2014-11-09 15:32:44', '2014-11-09 15:32:47');
INSERT INTO `tb_module` VALUES ('12', 'Đơn vị phối hợp', '6', '2', '5', '1', '2014-11-09 15:34:01', '2014-11-09 15:34:04');
INSERT INTO `tb_module` VALUES ('13', 'Thông tin đơn vị', '0', '0', '1', '1', '2014-11-09 15:31:37', '2014-11-09 15:31:40');
INSERT INTO `tb_module` VALUES ('14', 'Cài đặt chung cho các trang', '0', '0', '2', '1', '2014-11-09 21:02:34', '2014-11-09 21:02:37');
INSERT INTO `tb_module` VALUES ('15', 'Cài đặt trang chủ', '0', '0', '3', '1', '2014-11-09 20:40:01', '2014-11-09 20:40:04');
INSERT INTO `tb_module` VALUES ('16', 'Cài đặt trang danh sách tin tức', '0', '0', '4', '1', '2014-11-09 21:19:09', '2014-11-09 21:19:11');
INSERT INTO `tb_module` VALUES ('17', 'Cài đặt trang xem chi tiết tin tức', '0', '0', '5', '1', '2014-11-09 21:22:32', '2014-11-09 21:22:34');
INSERT INTO `tb_module` VALUES ('18', 'Cài đặt trang xem chi tiết video', '0', '0', '6', '1', '2014-11-09 21:33:08', '2014-11-09 21:33:12');
INSERT INTO `tb_module` VALUES ('19', 'Cài đặt trang văn bản', '0', '0', '7', '1', '2014-11-09 21:52:41', '2014-11-09 21:52:43');
INSERT INTO `tb_module` VALUES ('20', 'Cài đặt trang \"Đăng ký hiến máu\"', '0', '0', '8', '1', '2014-11-11 19:22:39', '2014-11-11 19:22:42');

-- ----------------------------
-- Table structure for `tb_quangcao`
-- ----------------------------
DROP TABLE IF EXISTS `tb_quangcao`;
CREATE TABLE `tb_quangcao` (
  `qc_id` int(11) NOT NULL AUTO_INCREMENT,
  `md_id` int(11) DEFAULT NULL,
  `qc_tieude` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qc_hinhanh` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qc_lienket` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qc_molienket` tinyint(4) DEFAULT NULL,
  `qc_thutu` int(11) DEFAULT NULL,
  `qc_ngaythem` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `qc_ngaysua` timestamp NULL DEFAULT NULL,
  `qc_trangthai` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`qc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_quangcao
-- ----------------------------
INSERT INTO `tb_quangcao` VALUES ('1', '5', 'Hội chữ thập đỏ việt nam', '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/1381127514875_redcrossbanner.png', 'http://redcross.org.vn', '1', '1', '2014-11-10 13:55:53', '2014-11-09 14:40:59', '1');
INSERT INTO `tb_quangcao` VALUES ('2', '5', 'Trang thông tin điện tử của UBND tỉnh Thái Nguyên', '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/banner-cong-thong-tin-thai-nguyen.png', 'http://www.thainguyen.gov.vn/', '1', '2', '2014-11-10 13:55:11', '2014-11-09 14:41:02', '1');
INSERT INTO `tb_quangcao` VALUES ('3', '5', 'Báo điện tử tỉnh Thái Nguyên', '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/banner-bao-dien-tu-thai-nguyen.png', 'http://www.baothainguyen.org.vn/', '1', '3', '2014-11-10 13:58:56', '2014-11-10 13:58:58', '1');
INSERT INTO `tb_quangcao` VALUES ('4', '11', 'Đăng ký hiến máu', '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/chuan3-3.jpg', 'http://chuthapdothainguyen.org.vn/dang-ky-hien-mau.html', '0', '1', '2014-11-10 14:05:52', '2014-11-10 14:05:54', '1');
INSERT INTO `tb_quangcao` VALUES ('5', '12', 'Cổng thông tin điện tử chính phủ', '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/cp.jpg', 'http://chinhphu.vn', '1', '1', '2014-11-10 14:09:03', '2014-11-10 14:09:01', '1');

-- ----------------------------
-- Table structure for `tb_taikhoan`
-- ----------------------------
DROP TABLE IF EXISTS `tb_taikhoan`;
CREATE TABLE `tb_taikhoan` (
  `tk_id` int(11) NOT NULL AUTO_INCREMENT,
  `tk_tendangnhap` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tk_matkhau` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tk_hoten` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tk_anhdaidien` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tk_email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tk_dienthoai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tk_ngaythem` datetime DEFAULT NULL,
  `tk_ngaysua` datetime DEFAULT NULL,
  `tk_trangthai` tinyint(4) DEFAULT NULL,
  `tk_makichhoat` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tk_quyen` tinyint(10) DEFAULT NULL,
  PRIMARY KEY (`tk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tb_taikhoan
-- ----------------------------
INSERT INTO `tb_taikhoan` VALUES ('1', 'admin', '4a3df7eb368cdb1fc44f8cab8a351612', 'Chữ thập đỏ TN', '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/13_5_09_r-cross.jpg', 'thainguyenredcross@gmail.com', '02803855242', '2014-10-19 01:59:43', '2014-11-12 14:08:30', '1', null, null);
INSERT INTO `tb_taikhoan` VALUES ('2', 'thanh', '4a3df7eb368cdb1fc44f8cab8a351612', 'Lê Minh Thành', '/chuthapdothainguyen/public/uploads/images/Thu%20vien%20anh/13_5_09_r-cross.jpg', 'minhthanh.hvu@gmail.com', '0972567600', '2014-10-20 02:32:41', '2014-11-12 16:29:01', '1', null, null);

-- ----------------------------
-- Table structure for `tb_truycap`
-- ----------------------------
DROP TABLE IF EXISTS `tb_truycap`;
CREATE TABLE `tb_truycap` (
  `tc_id` int(11) NOT NULL AUTO_INCREMENT,
  `tc_ma` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tc_ip` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tc_thoigian` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`tc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tb_truycap
-- ----------------------------
