{{ thuvien::LayModule(1) }}

<!------------------ Tích hợp bản đồ Google Maps ------------------>
<!--
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&language=vi"></script>

<script type="text/javascript">
var map;
function initialize() {
      var myLatlng = new google.maps.LatLng({{ Session::get('ch_ban_do') }});
      var myOptions = {
    zoom: 16,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
}
map = new google.maps.Map(document.getElementById("div_id"), myOptions); 
// Biến text chứa nội dung sẽ được hiển thị
var text;
text= '<b style="color:#F00; align:center">Hội chữ thập đỏ tỉnh Thái Nguyên<br />ĐC:  Số 969 đường Bắc Kạn - TP. Thái Nguyên - T. Thái Nguyên<br>ĐT: 0280.3.855.242</b>';
   var infowindow = new google.maps.InfoWindow(
    { content: text,
        size: new google.maps.Size(100,50),
        position: myLatlng
    });
       infowindow.open(map);    
    var marker = new google.maps.Marker({
      position: myLatlng, 
      map: map,
      title:"Hội chữ thập đỏ tỉnh Thái Nguyên"
  });
}
</script>
<!------------------ Kết thúc tích hợp bản đồ Google Maps ------------------>

<!------------------ CSS, JS menu dọc đa cấp ------------------>
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/ddsmoothmenu.css') }}">
<script type="text/javascript" src="{{ asset('public/js/ddsmoothmenu.js') }}"></script> 
<script type="text/javascript">
ddsmoothmenu.init({
	arrowimages: {down:['downarrowclass', '{{ asset('public/images/ddsmoothmenu/down.gif') }}', 23], right:['rightarrowclass', '{{ asset('public/images/ddsmoothmenu/right.gif') }}']},
	mainmenuid: "smoothmenu_2",
	zIndex: 200,
	orientation: 'v',
	classname: 'ddsmoothmenu-v',
	contentsource: "markup"
});
</script>
<!------------------ Kết thúc CSS, JS menu dọc đa cấp ------------------>

<!------------------ CSS, JS tin mới ------------------>
<style type="text/css">
	.other_blocknews {
	}
	.other_blocknews ul{
		margin:0;
	}
	.other_blocknews ul li{color:#900201; border-bottom:1px solid #900201;
	
	}
	.other_blocknews ul li a{color:#900201;
	}
	.other_blocknews ul li img{
		padding:2px;
		border:1px solid #F7F7F7;
		width:60px;
		float:left;
		margin-right:4px;
	}
	.other_blocknews ul li.bg{
	
	}
</style>
	
<style type="text/css">
	#marqueecontainer{
	position: relative;
	width:100%; /*marquee width */
	height: 250px; /*marquee height */
	
	overflow: hidden;
	
	padding: 2px;
	padding-left: 4px;
}
</style>
	
<script type="text/javascript">
/***********************************************
* Cross browser Marquee II- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

var delayb4scroll=4000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
var marqueespeed=2 //Specify marquee scroll speed (larger is faster 1-10)
var pauseit=1 //Pause marquee onMousever (0=no. 1=yes)?

////NO NEED TO EDIT BELOW THIS LINE////////////

var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var actualheight=''

function scrollmarquee(){
if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8))
cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px"
else
cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
}

function initializemarquee(){
cross_marquee=document.getElementById("vmarquee")
cross_marquee.style.top=0
marqueeheight=document.getElementById("marqueecontainer").offsetHeight
actualheight=cross_marquee.offsetHeight
if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
cross_marquee.style.height=marqueeheight+"px"
cross_marquee.style.overflow="scroll"
return
}
setTimeout('lefttime=setInterval("scrollmarquee()",100)', delayb4scroll)
}

if (window.addEventListener)
window.addEventListener("load", initializemarquee, false)
else if (window.attachEvent)
window.attachEvent("onload", initializemarquee)
else if (document.getElementById)
window.onload=initializemarquee
</script>
<!------------------ Kết thúc CSS, JS tin mới ------------------>
<!--
<div class="box-border m-bottom">
	<div class="header-block1">
		<h3><span>Bộ đếm</span></h3>
	</div>
	<div class="content-box">
		<div class="block-stat">
			<ul>
				<li class="online"> Đang truy cập: <strong>4</strong> </li>
				<li class="guest"> Khách viếng thăm: <strong>1</strong> </li>
				<li class="today"> Hôm nay: <strong>1152</strong> </li>
				<li class="statistics"> Tổng lượt truy cập: <strong>1465419</strong> </li>
			</ul>
		</div>
	</div>
</div>

<div class="box-border m-bottom">
	<div class="header-block1">
		<h3><span>Thăm dò ý kiến</span></h3>
	</div>
	<div class="content-box">
		<form action="" method="post">
			<div class="block-vote">
				<p> <strong>Điều bạn quan tâm?</strong> </p>
				<p>
					<input type="radio" name="option" value="9">
					Giao diện đẹp </p>
				<p>
					<input type="radio" name="option" value="10">
					Thông tin mới nhất </p>
				<p>
					<input type="radio" name="option" value="11">
					Bài viết hay </p>
				<p>
					<input type="radio" name="option" value="12">
					Ý kiến khác </p>
				<div class="f-action">
					<input class="button" type="button" value="Bình chọn" onclick="nv_sendvoting(this.form, &#39;3&#39;, &#39;1&#39;, &#39;376047e0c6fe8a8acba394cbc3105aa4&#39;, &#39;Bạn cần chọn 1 phương án &#39;);">
					<a title="Kết quả" href="javascript:void(0);" onclick="nv_sendvoting(this.form, &#39;3&#39;, 0, &#39;376047e0c6fe8a8acba394cbc3105aa4&#39;, &#39;&#39;);">&nbsp; Kết quả</a> </div>
			</div>
		</form>
	</div>
</div>
-->