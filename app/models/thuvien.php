<?php
class thuvien extends Eloquent
{
	public static function loadmenu($vitri=0, $cha=0)
	{
		$danhsach = tb_menu::where('mn_cha',$cha)->where('mn_vitri',$vitri)->where('mn_trangthai',1)->orderBy('mn_thutu','asc')->get();
		if (count($danhsach) > 0){
			echo '<ul>';
			foreach ($danhsach as $item)
			{
				$kieumenu = tb_kieumenu::where('kmn_id',$item->kmn_id)->where('kmn_trangthai',1)->first();
				if (!empty($kieumenu)){
					switch ($kieumenu->kmn_duongdan){
						case 'chuyen-muc': 
											$link = url(Str::slug($item->mn_tieude).'-'.$item->mn_trang.'.html');
											break;
						case 'tin-tuc': 
											$link = url('tin-tuc/'.Str::slug($item->mn_tieude).'-'.$item->mn_trang.'.html');
											break;
						case 'trang': 
											$link = url('trang/'.Str::slug($item->mn_tieude).'-'.$item->mn_trang.'.html');
											break;
						case 'video': 
											$link = url('video/'.Str::slug($item->mn_tieude).'-'.$item->mn_trang.'.html');
											break;
						case 'anh': 
											$link = url('anh/'.Str::slug($item->mn_tieude).'-'.$item->mn_trang.'.html');
											break;
						case 'van-ban': 
											$link = url('van-ban/'.Str::slug($item->mn_tieude).'-'.$item->mn_trang.'.html');
											break;
						case 'lien-ket': 
											$link = $item->mn_lienket;
											break;
						default:
											
											$link = url(Str::slug($kieumenu->kmn_duongdan).'.html');
					}
				}else{
					$link = '#';
				}
				if ($item->mn_molienket == 1)
					$molienket = 'target="_blank"';
				else
					$molienket = '';
				echo '<li>';
				
				echo '<a href="'.$link.'" '.$molienket.'>'.$item->mn_tieude.'</a>';
				thuvien::loadmenu($vitri, $item->mn_id);
				echo '</li>';
			}
			echo '</ul>';
		}
	}
	public static function PhanCapDM($parent, $quantri=false){
		$str='';
		$check=true;
		while ($parent != 0){
			$danhmuc = tb_danhmuc::where('dm_id', $parent)->where('dm_trangthai', 1)->first();
			$parent=$danhmuc->dm_cha;
			if ($quantri){
				if($check)
					$str = $danhmuc->dm_tieude.$str;
				else
					$str = $danhmuc->dm_tieude." &raquo; ".$str;
				$check=false;
			}else{
				$str = '
					<span class="spector">&nbsp;</span> 
					<a class="highlight" href="'.url(Str::slug($danhmuc->dm_tieude).'-'.$danhmuc->dm_id.'.html').'" title="'.$danhmuc->dm_tieude.'">'.$danhmuc->dm_tieude.'</a>'.$str
				;
			}
		}
		if (!$quantri){
			$str='
				<a title="Trang chủ" href="'.url('trang-chu.html').'">
					<img src="'.asset('public/images/icons/home.png').'" alt="Trang chủ">
				</a>'.$str
			;
		}
		return $str;
	}
	
	
	//Điều kiện lấy ra danh sách danh mục con
	public static function MangDieuKien($cha=0, $kieu=1, $first=true)
	{
		if ($first){
			Session::put('mangdm',array($cha));
			$first = false;
		}else
			Session::put('mangdm', array_merge( (array) Session::get('mangdm'), (array) $cha) );
		$danhsach = tb_danhmuc::where('dm_cha',$cha)->where('dm_kieu',$kieu)->where('dm_trangthai',1)->get();
		if (count($danhsach) > 0){
			foreach ($danhsach as $item)
			{
				thuvien::MangDieuKien($item->dm_id, $kieu, $first);
			}
		}
		return Session::get('mangdm');
	}
	
	public static function LayModule($vitri){
		$danhsach = tb_module::where('md_vitri',$vitri)->where('md_trangthai',1)->orderBy('md_thutu','asc')->get();
		foreach ($danhsach as $item){
			switch ($item->md_kieu){
				case 1:
						if (count(Session::get('sb_tinmoi')) > 0){
							echo '
								<div class="box-border m-bottom">
									<div class="header-block1">
										<h3><span>'.$item->md_tieude.'</span></h3>
									</div>
									<div class="content-box">
										<div id="tickerContainer">
											<div id="marqueecontainer" onmouseover="copyspeed=pausespeed" onmouseout="copyspeed=marqueespeed">
												<div id="vmarquee" style="position: absolute; width: 98%; top: -250px;">
													<div class="other_blocknews">
														<ul>';
							foreach (Session::get('sb_tinmoi') as $item){
								echo '
															<li class="clearfix "> 
																<a href="'.url("tin-tuc/".Str::slug($item->bv_tieude)."-".$item->bv_id.".html").'" title="'. $item->bv_tieude .'">
																	<img src="'. $item->bv_anhdaidien .'" alt="'. $item->bv_tieude .'">
																</a>
																<a href="'.url("tin-tuc/".Str::slug($item->bv_tieude)."-".$item->bv_id.".html").'" title="'. $item->bv_tieude .'">'. $item->bv_tieude .'</a> 
															</li>
								';
							}
						echo '
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						';
						}
						break;
				
				case 3:
						$video = tb_baiviet::where('bv_kieu',3)->where('bv_trangthai',1)->orderBy('bv_id','desc')->first();
						if (count($video) > 0){
							echo '
								<div class="box-border m-bottom">
									<div class="header-block1">
										<h3><span>'.$item->md_tieude.'</span></h3>
									</div>
									<div class="content-box">								
										<div id="sb_video"></div>
										<span style="align:center; color:blue; font-size:11px"><a href="'.url("video/".Str::slug($video->bv_tieude)."-".$video->bv_id.".html").'" title="'.$video->bv_tieude.'">'.$video->bv_tieude.'</a></span>
									</div>
								</div>
								
								<script>
									jwplayer("sb_video").setup({
										file: "'. trim(strip_tags($video->bv_noidung)) .'",
										image: "'. $video->bv_anhdaidien .'",
										width: 186,
										height: 120
									});
								</script>
							';
						}
						break;
						
				case 5:
						if (count(Session::get('sb_vanbanmoi')) > 0){
							echo '
								<div class="box-border m-bottom">
									<div class="header-block1">
										<h3><span>'.$item->md_tieude.'</span></h3>
									</div>
									<div class="content-box">
										<div class="sliver2">
											<ul class="l-down">
							';
							foreach (Session::get('sb_vanbanmoi') as $item){
								echo '
												<li><a href="'.url("van-ban/".Str::slug($item->bv_tieude)."-".$item->bv_id.".html").'"><img src="'. asset('public/images/file.png') .'"> Số:<strong style="color:red">&nbsp;'.$item->bv_sohieu.'</strong> <img src="'. asset('public/images/newnew.gif') .'" height="14"><br>
													Tên:<span style="align:center; color:blue; font-size:11px">&nbsp;'.$item->bv_tieude.'</span></a><br>
													<span style="color:#666; font-size:11px">Ngày BH:&nbsp;'.date('d/m/Y', strtotime($item->bv_ngaythem)).'</span> <br>
												</li>
									';
							}
							echo '
												
											</ul>
										</div>
									</div>
								</div>
							';
						}
						break;
						
				case 6:
						$quangcao = tb_quangcao::where('md_id',$item->md_id)->where('qc_trangthai',1)->orderBy('qc_thutu','asc')->get();
						if (count($quangcao) > 0){
							echo '
								<div class="box-border m-bottom">
									<div class="header-block1">
										<h3><span>'.$item->md_tieude.'</span></h3>
									</div>
									<div class="content-box"> 
							';
							foreach ($quangcao as $qc){
								if ($qc->qc_molienket == 1)
									$molienket = 'target="_blank"';
								else
									$molienket = '';
								echo '
										<a href="'.$qc->qc_lienket.'" '.$molienket.' title="'.$qc->qc_tieude.'"><img alt="'.$qc->qc_tieude.'" src="'.$qc->qc_hinhanh.'" style="width: 186px; height: auto;"></a><br><br>
								';
							}
							echo '
									</div>
								</div>
							';
						}
						break;
				
				case 7:
						$luottruycap = thuvien::LuotTruyCap();
						echo '
							<div class="box-border m-bottom">
								<div class="header-block1">
									<h3><span>'.$item->md_tieude.'</span></h3>
								</div>
								<div class="content-box">
									<div class="block-stat">
										<ul>
											<li class="online"> Đang truy cập: <strong>'.$luottruycap['online'].'</strong> </li>
											<li class="today"> Hôm nay: <strong>'.$luottruycap['homnay'].'</strong> </li>
											<li class="statistics"> Tổng lượt truy cập: <strong>'.$luottruycap['truycap'].'</strong> </li>
										</ul>
									</div>
								</div>
							</div>
						';
						break;
						
				case 8:
						echo '
							<div class="box-border m-bottom">
								<div class="header-block1">
									<h3><span>'.$item->md_tieude.'</span></h3>
								</div>
								<div class="content-box"> 
									<script type="text/javascript">
										var lang = "vi_VN", locdef = "91888417", imgdef = "/", numday = "3";
									</script> 
									<script type="text/javascript" src="'. asset('public/js/weather.min.js ') .'"></script>
									<div>
										<select id="loc" onchange="show_me();" style="width:120px">
											<option value="1252556">Phú Thọ</option>
											<option value="1252353">Cao Bằng</option>
											<option value="1229284">Bắc Giang</option>
											<option value="91888417" selected="selected">Hà Nội</option>
											<option value="1236690">Hải Phòng</option>
											<option value="1252437">Quảng Ninh</option>
											<option value="1252523">Ninh Bình</option>
											<option value="1252512">Nam Định</option>
											<option value="1252438">Thừa Thiên Huế</option>
											<option value="1252376">Đà Nẵng</option>
											<option value="91883001">Nha Trang</option>
											<option value="1252431">Hồ Chí Minh</option>
											<option value="1252672">Vũng Tàu</option>
										</select>
										<div id="showWeather">
										
										</div>
									</div>
								</div>
							</div>';
						break;
				
				case 9: 
						//Module bản đồ
						echo '
							<div class="box-border m-bottom">
								<div class="header-block1">
									<h3><span>'.$item->md_tieude.'</span></h3>
								</div>
								<div class="content-box">
									<img style="width:180px; height:242px;" src="'.asset('/public/uploads/images/Thu%20vien%20anh/epresshcthainguyen.jpg').'">
								</div>
							</div>
						';
						break;
								
				case 10: 
						echo '
							<div class=" m-bottom">
								<div class="ddsmoothmenu-v" id="smoothmenu_2">
								';
									thuvien::loadmenu(1);						
						echo '
								</div>
							<div class="clear"></div>
						</div>
						';
						break;
				
				case 11:
						echo '
							<div class="box-border m-bottom">
								<div class="header-block1">
									<h3><span>'.$item->md_tieude.'</span></h3>
								</div>
								<div class="content-box">
									<iframe frameborder="0" marginwidth="0" marginheight="0" src="http://thienduongweb.com/tool/weather/?size=187&fsize=12&bg=images/bg.png&repeat=repeat-x&r=1&w=0&g=1&col=1&d=0" width="187" height="185" scrolling="no"></iframe>
								</div>
							</div>
						';
						break;
			}
		}
	}
	
	public static function LayDuLieu(){
		//Lấy ra tin mới nhất (Sử dụng trên Sidebar)
		$sb_tinmoi = tb_baiviet::where('bv_kieu',1)->where('bv_trangthai',1)->orderBy('bv_id','desc')->take(10)->get();
		Session::put('sb_tinmoi',$sb_tinmoi);
		
		//Lấy ra văn bản mới nhất (Sử dụng trên Sidebar)
		$sb_vanbanmoi = tb_baiviet::where('bv_kieu',5)->where('bv_trangthai',1)->orderBy('bv_id','desc')->take(5)->get();
		Session::put('sb_vanbanmoi',$sb_vanbanmoi);
		
		//Lấy ra video nhất (Sử dụng trên Sidebar)
		$sb_videomoi = tb_baiviet::where('bv_kieu',3)->where('bv_trangthai',1)->orderBy('bv_id','desc')->first();
		Session::put('sb_videomoi',$sb_videomoi);
		
		//Lấy ra danh sách cấu hình
		$dscauhinh = tb_cauhinh::where('ch_trangthai',1)->get();
		$cauhinh = array();
		foreach ($dscauhinh as $item){
			Session::put($item->ch_ma, $item->ch_noidung);
		}
	}
	
	public static function CatChuoi($text, $total = 30) {
		$text=strip_tags($text);
        if(strlen($text) > $total) {
            $cutString = substr($text,0,$total);
            $words = substr($text, 0, strrpos($cutString, ' '));
            $text=$words;
			return $text.'...';
        }
        return $text;
  	}
	
	public static function LstDanhMuc($kieudm='',$iddm='', $cha=0)
	{
		$danhsach = tb_danhmuc::where('dm_cha',$cha)->where('dm_trangthai',1)->orderBy('dm_id','asc')->get();
		if (count($danhsach) > 0){
			foreach ($danhsach as $item)
			{
				if ($kieudm == $item->dm_kieu || $kieudm == ''){
					if ($iddm == $item->dm_id)
						$selected = ' selected ';
					else
						$selected = '';
					if ($item->dm_cha == 0)
						$cap = '';
					else
						$cap = '---- ';
					echo '
						<option value="'.$item->dm_id.'" '.$selected.'>'.$cap.$item->dm_tieude.'</option>
					';
			}
				thuvien::LstDanhMuc($kieudm, $iddm, $item->dm_id);
			}
		}
	}
	
	public static function LstMenu($vitri='',$idhientai='', $cha=0)
	{
		if ($vitri == '')
			$danhsach = tb_menu::where('mn_cha',$cha)->where('mn_trangthai',1)->orderBy('mn_id','asc')->get();
		else
			$danhsach = tb_menu::where('mn_cha',$cha)->where('mn_vitri',$vitri)->where('mn_trangthai',1)->orderBy('mn_id','asc')->get();
		if (count($danhsach) > 0){
			foreach ($danhsach as $item)
			{
				if ($idhientai == $item->mn_id)
					$selected = ' selected ';
				else
					$selected = '';
				if ($item->mn_cha == 0)
					$cap = '';
				else
					$cap = '---- ';
				echo '
					<option value="'.$item->mn_id.'" '.$selected.'>'.$cap.$item->mn_tieude.'</option>
				';
				thuvien::LstMenu($vitri, $idhientai, $item->mn_id);
			}
		}
	}
	
	public static function LstBaiViet($kieu='', $idhientai='')
	{
		$danhsach = tb_baiviet::where('bv_kieu',$kieu)
								->where('bv_trangthai',1)
								->orderBy('bv_id', 'desc')
								->get();
		if (count($danhsach) > 0){
			foreach ($danhsach as $item)
			{
				if ($idhientai == $item->bv_id)
					$selected = ' selected ';
				else
					$selected = '';
				echo '
					<option value="'.$item->bv_id.'" '.$selected.'>'.$item->bv_tieude.'</option>
				';
			}
		}
	}
	
	//Đếm lượt truy cập
	public static function LuotTruyCap()
	{
		$ip=getenv("REMOTE_ADDR");
		$time=time();//Lấy về thời gian hiện tại trên hệ thống (tính bằng giây)
		//Nếu lần đầu vào website
		if(!Session::has('counter')){
			Session::put('counter', md5($time.$ip.rand()));
			//Thêm dữ liệu vào bảng tb_truycap
			DB::table('tb_truycap')->insert(
				array('tc_ma' => Session::get('counter'), 'tc_ip' => $ip, 'tc_thoigian' => $time)
			);
		}else{
			DB::table('tb_truycap')
				->where('tc_ma', Session::get('counter'))
				->update(array('tc_thoigian' => $time));
		}
		//Lấy ra Số lượt truy cập
		$truycap = DB::table('tb_truycap')->get();
		$tongtruycap = count($truycap);
		
		//Lấy ra Số người đang online
		$min=$time-30*15;
		$online = DB::table('tb_truycap')->where('tc_thoigian','>=',$min)->where('tc_thoigian','<=',$time)->get();
		$tongonline = count($online);
		
		//Lấy ra lượt truy cập trong ngày
		$homnay = DB::table('tb_truycap')
					->where('tc_thoigian', '>=', time() - (24*60*60))
					->where('tc_thoigian', '<=', time() + (24*60*60))
					->get();
		if(empty($homnay))
			$tonghomnay = 0;
		else
			$tonghomnay = count($homnay);
		
		//Lấy ra IP của người đang truy cập
		$ip=$_SERVER['REMOTE_ADDR'];

		//Lấy ra lượt truy cập hôm nay
		$online = DB::table('tb_truycap')->where('tc_thoigian','>=',$min)->get();
		return array('truycap'=>$tongtruycap, 'homnay'=>$tonghomnay, 'online'=>$tongonline, 'ip'=>$ip);
	}
}