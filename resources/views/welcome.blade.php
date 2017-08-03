
<!DOCTYPE html>
<html lang="vi">
<head >
 <script>
 // If we have Navigation Timing, make everything relative to navigationStart. Ow, get a time value as early as possible.
 var t_start = (window.performance ? Math.round(performance.timing.navigationStart) : new Date().getTime());
 var t_image, t_after_image;

 function send_beacon() {
 var t_onload_handler = t_image - t_start;
 var t_inline_script = t_after_image - t_start;
 var t_custom_metric = Math.max(t_onload_handler, t_inline_script);

 (new Image()).src = "//beacon.marathon.mesos.vn/?site=" + window.location.hostname + "&time=" + t_custom_metric + "ms";
 }

 if (window.addEventListener) { // W3C standard
 window.addEventListener('load', send_beacon, false);
 }
 else if (window.attachEvent) { // Microsoft
 window.attachEvent('onload', send_beacon);
 }
</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Kênh tin Game lớn nhất, thư viện Game đầy đủ nhất | GameK</title>
<meta id="newskeywords" name="news_keywords" content="tin mới nhất về game, game, game mạng xã hội, game nhập vai, game chiến thuật, game pc, game ps 3, game fps, game online, game offline, esport,bang hội, game mới, event, sự kiện, nhà phát hành, game thủ, offline, server, lag, disconect, hack, dupe đồ, nạp tiền" />
<meta id="metaDes" name="description" content="Kênh Game với thông tin mới nhất, đánh giá các Game hay đang chơi, công nghệ Game trong nước và thế giới cực nhanh, cùng thư viên trò chơi đầy đủ nhất" />
<link rel="canonical" href="http://gamek.vn/" />
<link rel="alternate" type="application/rss+xml" href="http://gamek.vn/home.rss" title="Kênh tin Game lớn nhất, thư viện Game đầy đủ nhất" />
<link rel="alternate" media="only screen and (max-width: 640px)" href="http://m.gamek.vn/" />
<link rel="alternate" media="handheld" href="http://m.gamek.vn/" />
<meta property="og:type" content="article" />
<meta prefix="fb: http://ogp.me/ns/fb#" property="fb:app_id" content="618158328194206" />
<meta name="google-site-verification" content="NgbCFZLmDys4ULmhMD3ZJFUyEFnejG9wCKV7gLlMrco" />
<meta name="alexaVerifyID" content="nuA3hXzaOM0q6XwpfhnGpni_9Ck" />
<meta name="msvalidate.01" content="20B5D8998E147A8345B895C1F21F891A" />
<meta name="generator" content="VCCorp.vn" />
<meta name="copyright" content="Công ty cổ phần Truyền Thông Việt Nam - Vccorp" />
<meta http-equiv="audience" content="General" />
<meta name="resource-type" content="Document" />
<meta name="distribution" content="Global" />
<meta name="revisit-after" content="1 days" />
<meta name="page-topic" content="Kênh thông tin mới nhất về công nghệ Game trong nước và thế giới" /><meta name="RATING" content="GENERAL" />
<meta name="robots" content="index,follow" />
<meta name="Googlebot" content="index,follow,archive" />
<meta property="fb:pages" content="152595292913" />
<meta id="fbImage" itemprop="thumbnailUrl" property="og:image" content="http://kenh14cdn.com/channel-icon/gamek-1200x630.jpg" />
<meta name="apple-mobile-web-app-title" content="GameK" />
<meta name="application-name" content="GameK" />
<link rel="shortcut icon" href="http://gamekcdn.com/web_images/gamek32.png" type="image/png" />
<link rel="apple-touch-icon" sizes="57x57" href="http://gamekcdn.com/web_images/gamek57.png" />
<link rel="apple-touch-icon" sizes="60x60" href="http://gamekcdn.com/web_images/gamek60.png" />
<link rel="apple-touch-icon" sizes="72x72" href="http://gamekcdn.com/web_images/gamek72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="http://gamekcdn.com/web_images/gamek76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="http://gamekcdn.com/web_images/gamek114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="http://gamekcdn.com/web_images/gamek120.png" />
<link rel="apple-touch-icon" sizes="128x128" href="http://gamekcdn.com/web_images/gamek128.png" />
<link rel="apple-touch-icon" sizes="144x144" href="http://gamekcdn.com/web_images/gamek144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="http://gamekcdn.com/web_images/gamek152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="http://gamekcdn.com/web_images/gamek180.png" />
<link rel="icon" type="image/png" href="http://gamekcdn.com/web_images/gamek32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="http://gamekcdn.com/web_images/gamek192.png" sizes="192x192" />
<link rel="icon" type="image/png" href="http://gamekcdn.com/web_images/gamek96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="http://gamekcdn.com/web_images/gamek16.png" sizes="16x16" />
<link rel="stylesheet" type="text/css" href="{{asset('newspa/css/main-20170717v2.min.css')}}" />
<script async type="text/javascript" src="{{asset('newspa/js/20170717v1.min.js')}}"></script>

<div class="wp1000 wfull">

<style>
/*.header.noel .logo{margin-right: 0}
.header.noel .logo a{ background: url("http://gamekcdn.com/web_images/logo_noel.png") no-repeat 0 0;width: 259px;}
.header.noel .menu li.normal{padding: 0 14px}*/

/*.header.tet .logo{ margin-right: 0;position: absolute;left: 0}
.header.tet .logo a{ background: url("http://gamekcdn.com/web_images/logo_tet_01.png") no-repeat 0 0;width: 259px;}
.header.tet .hoamai{width: 259px;height: 50px;position: absolute;top: 0;left: 100px;background: url("http://gamekcdn.com/web_images/logo_tet_02.png") no-repeat 0 0 }
.header.tet{position: relative}
.header.tet .menu{ padding-left: 233px;box-sizing: border-box}*/
</style>
<div class="wp1000">
<div class="header">
<div class="sharetop">
<a href="https://www.facebook.com/gamek.vn" class="facebook" target="_blank" rel="nofollow"></a><a href="https://www.youtube.com/channel/UCBEwTpFOP44fyi_7PbFYgXg" target="_bank" class="youtube"></a><a href="/rss.chn" class="rss"></a>
</div>

<div class="menu">
<ul>
<li class="hoamai"></li>
<li class="logo">
<h1>
<a href="/" title="Kênh thông tin mới nhất về Game trong nước và thế giới"></a>
</h1>
</li>
<li class="normal"><a href="/">HOME</a></li>


<li class="normal"><a title="GAME ONLINE" href="/game-online.chn">GAME ONLINE</a></li>




<li class="normal"><a title="KHÁM PHÁ" href="/kham-pha.chn">KHÁM PHÁ</a></li>



<li class="normal"><a title="PC/CONSOLE" href="/pc-console.chn">PC/CONSOLE</a></li>



<li class="normal"><a title="eSPORT" href="/esport.chn">eSPORT</a></li>



<li class="normal"><a title="MOBILE &amp; SOCIAL" href="/mobile-social.chn">MOBILE</a></li>

<li class="search">
<input id="searchinput" type="text" value="Tìm kiếm..." onfocus="HideText();" onblur="ShowText();" onkeypress="return BBEnterPress1(event);" />
<a href="javascript:void(0)" class="btsearch" onclick="ValidateSearch();"></a>
</li>
</ul>
</div>
<div class="menunews">
<ul>



<li><a href="/game-viet.chn">GAME VIỆT</a></li>



<li><a href="/trai-nghiem.chn">TRẢI NGHIỆM</a></li>




<li><a href="/gaming-gear.chn">GAMING GEAR</a></li>








<li><a href="/manga-film.chn">MANGA/FILM</a></li>





<li><a title="THỊ TRƯỜNG" href="/thi-truong.chn">THỊ TRƯỜNG</a></li>



<li><a href="/video.chn">VIDEO</a></li>



</ul>
</div>
</div>

<script type="text/javascript">
var mHref = document.location.pathname.split('/');

(runinit = window.runinit || []).push(function () {
var newsUrlMenu = $("#hdNewsUrl").val();
if (typeof (newsUrlMenu) != "undefined")
mHref = newsUrlMenu.split('/');

if (document.location.pathname == '/')
$('.menu li a[href="/"]').parent().addClass('active');

if (mHref[1] == 'gift-code.htm')
$('.menunews li a[href="/gift-code.htm"]').parent().addClass('active');

if (mHref.length > 2) {
$('.menu li a[href^="/' + mHref[1] + '"]').parent().addClass('active');
$('.menunews li a[href^="/' + mHref[1] + '"]').parent().addClass('active');
}

var linkTag = window.location.href;
if (linkTag.indexOf('/e3-2017.htm') > 0) {
$('.tagfocus').addClass('active');
}
});
</script>
</div>


<div class="wp1000">
<div class="topbanner">


<div id="admzone57"></div>
<script>
admicroAD.unit.push(function () { admicroAD.show('admzone57') });
</script>
</div>
</div>
<div class="content">

<div class="contentleft">

<div class="wptopleft">
<div class="topleft" data-boxtype="homenewsposition">
<a title="Vì sao ping cao, không có tiếng Việt mà hàng triệu game thủ vẫn quyết chơi game nước ngoài?" href="/vi-sao-ping-cao-khong-co-tieng-viet-ma-hang-trieu-game-thu-van-quyet-choi-game-nuoc-ngoai-20170726195618441.chn"><img onload="t_image = new Date().getTime();" src="http://genknews.genkcdn.vn/zoom/399_262/2017/photo-0-1501073660746.jpg" alt="Vì sao ping cao, không có tiếng Việt mà hàng triệu game thủ vẫn quyết chơi game nước ngoài?" width="399px" height="262px" /><script>t_after_image = new Date().getTime();</script></a>
<h2><a data-linktype='newsdetail' data-id='20170726195618441' title="Vì sao ping cao, không có tiếng Việt mà hàng triệu game thủ vẫn quyết chơi game nước ngoài?" href="/vi-sao-ping-cao-khong-co-tieng-viet-ma-hang-trieu-game-thu-van-quyet-choi-game-nuoc-ngoai-20170726195618441.chn">Vì sao ping cao, không có tiếng Việt mà hàng triệu game thủ vẫn quyết chơi game nước ngoài?</a></h2>
</div>
<div class="topleft2" data-boxtype="homenewsposition">
<a title="Top 4 vị tướng nhận được buff khủng trong phiên bản 7.15, hứa hẹn sẽ trở thành hot pick trong thời gian sắp tới" href="/top-4-vi-tuong-nhan-duoc-buff-khung-trong-phien-ban-715-hua-hen-se-tro-thanh-hot-pick-trong-thoi-gian-sap-toi-20170725234707082.chn"><img src="http://genknews.genkcdn.vn/zoom/399_163/2017/photo-4-1501000632695.jpg" alt="Top 4 vị tướng nhận được buff khủng trong phiên bản 7.15, hứa hẹn sẽ trở thành hot pick trong thời gian sắp tới" width="399px" height="163px" /></a>
<h2><a data-linktype='newsdetail' data-id='20170725234707082' title="Top 4 vị tướng nhận được buff khủng trong phiên bản 7.15, hứa hẹn sẽ trở thành hot pick trong thời gian sắp tới" href="/top-4-vi-tuong-nhan-duoc-buff-khung-trong-phien-ban-715-hua-hen-se-tro-thanh-hot-pick-trong-thoi-gian-sap-toi-20170725234707082.chn">Top 4 vị tướng nhận được buff khủng trong phiên bản 7.15, hứa hẹn sẽ trở thành hot pick trong thời gian sắp tới</a></h2>
</div>

<div class="topleft3">
<ul>

<li class="left" data-boxtype="homenewsposition">

<a href="/thanh-lep-tung-mv-ngan-ty-chuyen-gai-trai-nhung-ai-cung-chi-chu-y-cap-mong-cua-nam-phu-20170726170819457.chn" title="&quot;Thánh lép&quot; tung MV ngàn tỷ: Chuyện gái trai nhưng ai cũng chỉ chú ý… cặp mông của nam phụ">
<img alt="&quot;Thánh lép&quot; tung MV ngàn tỷ: Chuyện gái trai nhưng ai cũng chỉ chú ý… cặp mông của nam phụ" 
src="http://genknews.genkcdn.vn/zoom/192_129/2017/7777-1501063592293.jpg"
width="192px" height="129px" 

/>
</a>
<h2><a data-linktype='newsdetail' data-id=20170726170819457 title="&quot;Thánh lép&quot; tung MV ngàn tỷ: Chuyện gái trai nhưng ai cũng chỉ chú ý… cặp mông của nam phụ" href="/thanh-lep-tung-mv-ngan-ty-chuyen-gai-trai-nhung-ai-cung-chi-chu-y-cap-mong-cua-nam-phu-20170726170819457.chn">
&quot;Thánh lép&quot; tung MV ngàn tỷ: Chuyện gái trai nhưng ai cũng chỉ chú ý… cặp mông của nam phụ</a></h2>
</li>

<li data-boxtype="homenewsposition">

<a href="/su-that-dang-sau-10-chien-dich-moi-cua-dysnasty-warriors-unleashed-20170726135741113.chn" title="Sự thật đằng sau 10 chiến dịch mới của Dysnasty Warriors: Unleashed">
<img alt="Sự thật đằng sau 10 chiến dịch mới của Dysnasty Warriors: Unleashed"
src="http://genknews.genkcdn.vn/zoom/192_129/2017/http-channel-vcmedia-vn-prupload-156-2017-07-img20170726105614563-1501052308081.jpg"
width="192px" height="129px"

/>
</a>
<h2><a data-linktype='newsdetail' data-id=20170726135741113 title="Sự thật đằng sau 10 chiến dịch mới của Dysnasty Warriors: Unleashed" href="/su-that-dang-sau-10-chien-dich-moi-cua-dysnasty-warriors-unleashed-20170726135741113.chn">
Sự thật đằng sau 10 chiến dịch mới của Dysnasty Warriors: Unleashed</a></h2>
</li>
<li class="clear"></li>

<li class="left" data-boxtype="homenewsposition">
<span class="label">Gaming Gear</span>
<a href="/buc-anh-bao-like-vi-noi-dung-noi-kho-cua-cac-game-thu-da-co-vo-con-20170726175621269.chn" title="Bức ảnh bão like vì nói đúng nỗi khổ của các game thủ đã có vợ con">
<img alt="Bức ảnh bão like vì nói đúng nỗi khổ của các game thủ đã có vợ con" 
src="http://genknews.genkcdn.vn/zoom/192_129/2017/20374428-477911422545572-7498216006676881610-n-1501062306193-crop-1501062326915.jpg"
width="192px" height="129px" 

/>
</a>
<h2><a data-linktype='newsdetail' data-id=20170726175621269 title="Bức ảnh bão like vì nói đúng nỗi khổ của các game thủ đã có vợ con" href="/buc-anh-bao-like-vi-noi-dung-noi-kho-cua-cac-game-thu-da-co-vo-con-20170726175621269.chn">
Bức ảnh bão like vì nói đúng nỗi khổ của các game thủ đã có vợ con</a></h2>
</li>

<li data-boxtype="homenewsposition">
<span class="label">ChinaJoy 2017</span>
<a href="/nong-mat-voi-bo-anh-cosplay-tuyet-dep-cua-vindictus-mobile-truoc-them-chinajoy-2017-20170726175728519.chn" title="Nóng mắt với bộ ảnh cosplay tuyệt đẹp của Vindictus Mobile trước thềm ChinaJoy 2017">
<img alt="Nóng mắt với bộ ảnh cosplay tuyệt đẹp của Vindictus Mobile trước thềm ChinaJoy 2017"
src="http://genknews.genkcdn.vn/zoom/192_129/2017/41065-5762934-564139-1501066415811.jpg"
width="192px" height="129px"

/>
</a>
<h2><a data-linktype='newsdetail' data-id=20170726175728519 title="Nóng mắt với bộ ảnh cosplay tuyệt đẹp của Vindictus Mobile trước thềm ChinaJoy 2017" href="/nong-mat-voi-bo-anh-cosplay-tuyet-dep-cua-vindictus-mobile-truoc-them-chinajoy-2017-20170726175728519.chn">
Nóng mắt với bộ ảnh cosplay tuyệt đẹp của Vindictus Mobile trước thềm ChinaJoy 2017</a></h2>
</li>
<li class="clear"></li>

<li class="left" data-boxtype="homenewsposition">

<a href="/che-choi-game-on-2-co-gai-tre-danh-nhau-lot-do-ngay-giua-quan-net-20170726174815691.chn" title="Chê chơi game ồn, 2 cô gái trẻ đánh nhau, lột đồ ngay giữa quán Net">
<img alt="Chê chơi game ồn, 2 cô gái trẻ đánh nhau, lột đồ ngay giữa quán Net" 
src="http://genknews.genkcdn.vn/zoom/192_129/2017/19-1501065887721.jpg"
width="192px" height="129px" 

/>
</a>
<h2><a data-linktype='newsdetail' data-id=20170726174815691 title="Chê chơi game ồn, 2 cô gái trẻ đánh nhau, lột đồ ngay giữa quán Net" href="/che-choi-game-on-2-co-gai-tre-danh-nhau-lot-do-ngay-giua-quan-net-20170726174815691.chn">
Chê chơi game ồn, 2 cô gái trẻ đánh nhau, lột đồ ngay giữa quán Net</a></h2>
</li>

<li data-boxtype="homenewsposition">

<a href="/game-thu-6-ngay-13-dinh-tin-don-bi-nsx-bo-roi-vi-khong-ra-tien-20170726164633222.chn" title="Game Thứ 6 ngày 13 dính tin đồn bị NSX &quot;bỏ rơi&quot; vì không ra tiền">
<img alt="Game Thứ 6 ngày 13 dính tin đồn bị NSX &quot;bỏ rơi&quot; vì không ra tiền"
src="http://genknews.genkcdn.vn/zoom/192_129/2017/2-1501062269955.jpg"
width="192px" height="129px"

/>
</a>
<h2><a data-linktype='newsdetail' data-id=20170726164633222 title="Game Thứ 6 ngày 13 dính tin đồn bị NSX &quot;bỏ rơi&quot; vì không ra tiền" href="/game-thu-6-ngay-13-dinh-tin-don-bi-nsx-bo-roi-vi-khong-ra-tien-20170726164633222.chn">
Game Thứ 6 ngày 13 dính tin đồn bị NSX &quot;bỏ rơi&quot; vì không ra tiền</a></h2>
</li>
<li class="clear"></li>


</ul>
</div>
</div>
<div class="wptopright">
<div class="topright" data-boxtype="homenewsposition">
<a title="Top 4 game mobile mới tuyệt hay, chơi là không dứt ra được" href="/top-4-game-mobile-moi-tuyet-hay-choi-la-khong-dut-ra-duoc-20170726203149066.chn"><img src="http://genknews.genkcdn.vn/zoom/278_262/2017/photo-0-1501074365521.jpg" alt="Top 4 game mobile mới tuyệt hay, chơi là không dứt ra được" width="278px" height="262px" /></a>
<h2 class="black_rp"><a data-linktype='newsdetail' data-id='20170726203149066' title="Top 4 game mobile mới tuyệt hay, chơi là không dứt ra được" href="/top-4-game-mobile-moi-tuyet-hay-choi-la-khong-dut-ra-duoc-20170726203149066.chn">Top 4 game mobile mới tuyệt hay, chơi là không dứt ra được</a></h2>
</div>
<div class="topright2 mgt15" data-boxtype="homenewsposition">
<a title="Liên Quân Mobile: Hé lộ vị tướng mới là một Thiên Sứ, lượng máu càng “trâu” thì sát thương càng kinh khủng." href="/lien-quan-mobile-he-lo-vi-tuong-moi-la-mot-thien-su-luong-mau-cang-trau-thi-sat-thuong-cang-kinh-khung-20170726194213175.chn"><img src="http://genknews.genkcdn.vn/zoom/278_163/2017/photo-1-1501072691876.jpg" alt="Liên Quân Mobile: Hé lộ vị tướng mới là một Thiên Sứ, lượng máu càng “trâu” thì sát thương càng kinh khủng." width="278px" height="163px" /></a>
<h2 class="black_rp"><a data-linktype='newsdetail' data-id='20170726194213175' title="Liên Quân Mobile: Hé lộ vị tướng mới là một Thiên Sứ, lượng máu càng “trâu” thì sát thương càng kinh khủng." href="/lien-quan-mobile-he-lo-vi-tuong-moi-la-mot-thien-su-luong-mau-cang-trau-thi-sat-thuong-cang-kinh-khung-20170726194213175.chn">Liên Quân Mobile: Hé lộ vị tướng mới là một Thiên Sứ, lượng máu càng “trâu” thì sát thương càng kinh khủng.</a></h2>
</div>


<div class="trainghiemnews mgt15">
<div class="labeltop">
<h2><a class="mgl10" href="/trai-nghiem.chn">VIDEO ĐÁNG CHÚ Ý<span></span></a></h2>
</div>
<ul>

<li class="top">
<a href="/trai-nghiem-bum-chiu-game-nhap-vai-toa-do-hap-dan-20170418181436791.chn" title="Trải nghiệm Bùm Chíu - Game nhập vai tọa độ hấp dẫn">
<img 
src="http://genknews.genkcdn.vn/zoom/80_50/2017/7-1492512435035.jpg"
alt="Trải nghiệm Bùm Chíu - Game nhập vai tọa độ hấp dẫn" width="80px" height="50px"

/>
</a>
<a class="ion" href="/trai-nghiem-bum-chiu-game-nhap-vai-toa-do-hap-dan-20170418181436791.chn" title="Trải nghiệm Bùm Chíu - Game nhập vai tọa độ hấp dẫn"></a>
<h3><a href="/trai-nghiem-bum-chiu-game-nhap-vai-toa-do-hap-dan-20170418181436791.chn" title="Trải nghiệm Bùm Chíu - Game nhập vai tọa độ hấp dẫn">Trải nghiệm Bùm Chíu - Game nhập vai tọa độ hấp dẫn</a></h3>
</li>

<li class="end">
<a href="/trai-nghiem-alice-3d-xu-huong-moi-cua-the-loai-game-thoi-trang-20170503140224845.chn" title="Trải nghiệm Alice 3D - Xu hướng mới của thể loại game thời trang">
<img 
src="http://genknews.genkcdn.vn/zoom/80_50/2017/4-1493788797091.jpg"
alt="Trải nghiệm Alice 3D - Xu hướng mới của thể loại game thời trang" width="80px" height="50px"

/>
</a>
<a class="ion" href="/trai-nghiem-alice-3d-xu-huong-moi-cua-the-loai-game-thoi-trang-20170503140224845.chn" title="Trải nghiệm Alice 3D - Xu hướng mới của thể loại game thời trang"></a>
<h3><a href="/trai-nghiem-alice-3d-xu-huong-moi-cua-the-loai-game-thoi-trang-20170503140224845.chn" title="Trải nghiệm Alice 3D - Xu hướng mới của thể loại game thời trang">Trải nghiệm Alice 3D - Xu hướng mới của thể loại game thời trang</a></h3>
</li>

</ul>
</div>
<div class="trainghiemnews mgt0">
<div class="labeltop">
<h2><a class="mgl10" href="/danh-gia-game.htm">ĐÁNH GIÁ</a>/<a href="/gioi-thieu-game.htm">GIỚI THIỆU<span></span></a></h2>
</div>
<ul>

<li class="top">
<a href="/cung-soi-hotsteps-2-game-vu-dao-cuc-hot-trong-ngay-ra-mat-tai-viet-nam-20170726153206347.chn" title="Cùng soi HotSteps 2 - Game vũ đạo cực hot trong ngày ra mắt tại Việt Nam">
<img 
src="http://genknews.genkcdn.vn/zoom/80_50/2017/27-1501057667601.jpg"
alt="Cùng soi HotSteps 2 - Game vũ đạo cực hot trong ngày ra mắt tại Việt Nam" 
title="Cùng soi HotSteps 2 - Game vũ đạo cực hot trong ngày ra mắt tại Việt Nam" 
width="80px" 
height="50px"

/>
</a>
<h3><a href="/cung-soi-hotsteps-2-game-vu-dao-cuc-hot-trong-ngay-ra-mat-tai-viet-nam-20170726153206347.chn" title="Cùng soi HotSteps 2 - Game vũ đạo cực hot trong ngày ra mắt tại Việt Nam">Cùng soi HotSteps 2 - Game vũ đạo cực hot trong ngày ra mắt tại Việt Nam</a></h3>
</li>

<li class="">
<a href="/thuy-chien-phien-ban-di-dong-cua-world-of-warships-cap-ben-viet-nam-20170718144935684.chn" title="Thủy Chiến - Phiên bản di động của &quot;World of Warships&quot; cập bến Việt Nam">
<img 
src="http://genknews.genkcdn.vn/zoom/80_50/2017/2-1500364362731.jpg"
alt="Thủy Chiến - Phiên bản di động của &quot;World of Warships&quot; cập bến Việt Nam" 
title="Thủy Chiến - Phiên bản di động của &quot;World of Warships&quot; cập bến Việt Nam" 
width="80px" 
height="50px"

/>
</a>
<h3><a href="/thuy-chien-phien-ban-di-dong-cua-world-of-warships-cap-ben-viet-nam-20170718144935684.chn" title="Thủy Chiến - Phiên bản di động của &quot;World of Warships&quot; cập bến Việt Nam">Thủy Chiến - Phiên bản di động của "World of Warships" cập bến Việt Nam</a></h3>
</li>

<li class="">
<a href="/cung-soi-thien-nu-mobile-game-moi-cua-vng-trong-ngay-dau-ra-mat-tai-viet-nam-20170717171522778.chn" title="Cùng soi Thiện Nữ Mobile - Game mới của VNG trong ngày đầu ra mắt tại Việt Nam">
<img 
src="http://genknews.genkcdn.vn/zoom/80_50/2017/8-1500286279271.jpg"
alt="Cùng soi Thiện Nữ Mobile - Game mới của VNG trong ngày đầu ra mắt tại Việt Nam" 
title="Cùng soi Thiện Nữ Mobile - Game mới của VNG trong ngày đầu ra mắt tại Việt Nam" 
width="80px" 
height="50px"

/>
</a>
<h3><a href="/cung-soi-thien-nu-mobile-game-moi-cua-vng-trong-ngay-dau-ra-mat-tai-viet-nam-20170717171522778.chn" title="Cùng soi Thiện Nữ Mobile - Game mới của VNG trong ngày đầu ra mắt tại Việt Nam">Cùng soi Thiện Nữ Mobile - Game mới của VNG trong ngày đầu ra mắt tại Việt Nam</a></h3>
</li>

<li class="">
<a href="/thieu-nien-tay-du-game-the-tuong-cuc-hap-dan-chinh-thuc-cap-ben-viet-nam-20170712175655486.chn" title="Thiếu Niên Tây Du - Game thẻ tướng cực hấp dẫn chính thức cập bến Việt Nam">
<img 
src="http://genknews.genkcdn.vn/zoom/80_50/2017/2-1499859080810.jpg"
alt="Thiếu Niên Tây Du - Game thẻ tướng cực hấp dẫn chính thức cập bến Việt Nam" 
title="Thiếu Niên Tây Du - Game thẻ tướng cực hấp dẫn chính thức cập bến Việt Nam" 
width="80px" 
height="50px"

/>
</a>
<h3><a href="/thieu-nien-tay-du-game-the-tuong-cuc-hap-dan-chinh-thuc-cap-ben-viet-nam-20170712175655486.chn" title="Thiếu Niên Tây Du - Game thẻ tướng cực hấp dẫn chính thức cập bến Việt Nam">Thiếu Niên Tây Du - Game thẻ tướng cực hấp dẫn chính thức cập bến Việt Nam</a></h3>
</li>

<li class="">
<a href="/danh-gia-secret-world-legends-tua-game-online-mien-phi-dang-choi-nhat-o-thoi-diem-hien-tai-20170712171639127.chn" title="Đánh giá Secret World Legends - Tựa game online miễn phí đáng chơi nhất ở thời điểm hiện tại">
<img 
src="http://genknews.genkcdn.vn/zoom/80_50/2017/7-1499854254159.jpg"
alt="Đánh giá Secret World Legends - Tựa game online miễn phí đáng chơi nhất ở thời điểm hiện tại" 
title="Đánh giá Secret World Legends - Tựa game online miễn phí đáng chơi nhất ở thời điểm hiện tại" 
width="80px" 
height="50px"

/>
</a>
<h3><a href="/danh-gia-secret-world-legends-tua-game-online-mien-phi-dang-choi-nhat-o-thoi-diem-hien-tai-20170712171639127.chn" title="Đánh giá Secret World Legends - Tựa game online miễn phí đáng chơi nhất ở thời điểm hiện tại">Đánh giá Secret World Legends - Tựa game online miễn phí đáng chơi nhất ở thời điểm hiện tại</a></h3>
</li>

</ul>
</div>
</div>
<script type="text/javascript">
(runinit = window.runinit || []).push(function () {
prNews.homeFocus();
});
</script>


<div class="sukiengame">
<div class="left"><h2><span>ĐÁNG CHÚ Ý</span></h2></div>
<p><p><strong><a class="link-inline-content" draggable="false" href="http://gamek.vn/cong-thanh-chien-mobile.htm">Công Thành Chiến Mobile</a></strong> Open Beta, hồi sinh ký ức Webgame SLG Tam Quốc</p></p>
<a class="viewall" href="http://gamek.vn/cong-thanh-chien-mobile-chinh-thuc-ra-mat-hoi-sinh-ki-uc-slg-webgame-tam-quoc-co-dien-20170726103454035.chn" target="_blank">Chi tiết</a>
</div>
<div class="dongsukiengame">

<div class="right fl">

<div class="box-dong">
<div class="menu-dong">
<ul>
<li class="dong-Game"><a class="sprite" href="javascript:voild(0)">DANH SÁCH GAME</a></li>
<li class="active normal normalx" id="liid0"><a href="javascript:loadGameVote('0')">MỚI</a></li>
<li class="normal normalx" id="liid1"><a href="javascript:loadGameVote('1')">GAME CÀI ĐẶT</a></li>
<li class="normal normalx" id="liid2"><a href="javascript:loadGameVote('2')">WEB GAME</a></li>
<li class="normal normalx" id="liid3"><a href="javascript:loadGameVote('3')" class="positionrelative">GAME MOBILE<span class="sprite mobileNew"></span></a></li>
<li class="normal normalx fr"><a href="http://hoso.gamek.vn/" class="fwnormal">Xem tất cả...</a></li>
</ul>
</div>
<div>
<div class="conten-dong" id="horiz_container_outer">
<ul id="horiz_container">

<li class="gv1" data="">
<span class="sprite notification"></span>
<a href="/kiem-the-mobile.htm" title="Kiếm Thế Mobile">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2016/photo-0-1475475804440-crop-1475476420461.jpg"
alt="Kiếm Thế Mobile" width="120px" height="90px"
 />
</a>
<h3>
<a href="/kiem-the-mobile.htm" title="Kiếm Thế Mobile" class="tgame-name classXanh">
Kiếm Thế Mobile</a></h3>
<p>
<span class="tscore-game">7.0đ</span>
<span class="tvote-gamex">/</span>
<span class="tvote-game">4 vote</span>
</p>
<p>
<span class="tview tviewCrcIms" data-crc="1442448826">35224</span>

<span class="tvote-game">lượt xem</span>
</p>
</li>

<li class="gv2" data="">
<span class="sprite notification"></span>
<a href="/lien-minh-huyen-thoai.htm" title="Liên Minh Huyền Thoại">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2015/ava-1418293414681-1421491095136.jpg"
alt="Liên Minh Huyền Thoại" width="120px" height="90px"
 />
</a>
<h3>
<a href="/lien-minh-huyen-thoai.htm" title="Liên Minh Huyền Thoại" class="tgame-name classXanh">
Liên Minh Huyền Thoại</a></h3>
<p>
<span class="tscore-game">8.5đ</span>
<span class="tvote-gamex">/</span>
<span class="tvote-game">1403 vote</span>
</p>
<p>
<span class="tview tviewCrcIms" data-crc="2774796294">132929499</span>

<span class="tvote-game">lượt xem</span>
</p>
</li>

<li class="gv3" data="">
<span class="notification-hide"></span>
<a href="/lien-quan-mobile.htm" title="Liên Quân Mobile">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2016/2-1478845016553.png"
alt="Liên Quân Mobile" width="120px" height="90px"
 />
</a>
<h3>
<a href="/lien-quan-mobile.htm" title="Liên Quân Mobile" class="tgame-name classXanh">
Liên Quân Mobile</a></h3>
<p>
<span class="tscore-game">8.0đ</span>
<span class="tvote-gamex">/</span>
<span class="tvote-game">29 vote</span>
</p>
<p>
<span class="tview tviewCrcIms" data-crc="159024075">214337</span>

<span class="tvote-game">lượt xem</span>
</p>
</li>

<li class="gv4" data="">
<span class="notification-hide"></span>
<a href="/iga.htm" title="iGà">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2014/logo-1417074567543.jpg"
alt="iGà" width="120px" height="90px"
 />
</a>
<h3>
<a href="/iga.htm" title="iGà" class="tgame-name classXanh">
iGà</a></h3>
<p>
<span class="tscore-game">8.0đ</span>
<span class="tvote-gamex">/</span>
<span class="tvote-game">539 vote</span>
</p>
<p>
<span class="tview tviewCrcIms" data-crc="2491425848">860768</span>

<span class="tvote-game">lượt xem</span>
</p>
</li>

<li class="gv5" data="2">
<span class="notification-hide"></span>
<a href="/heroes-truyen-ky.htm" title="Heroes Truyền Kỳ">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/3-1497428882206.jpg"
alt="Heroes Truyền Kỳ" width="120px" height="90px"
 />
</a>
<h3>
<a href="/heroes-truyen-ky.htm" title="Heroes Truyền Kỳ" class="tgame-name classXanh">
Heroes Truyền Kỳ</a></h3>
<p>
<span class="tscore-game">0.0đ</span>
<span class="tvote-gamex">/</span>
<span class="tvote-game">0 vote</span>
</p>
<p>
<span class="tview tviewCrcIms" data-crc="2283717762">0</span>

<span class="tvote-game">lượt xem</span>
</p>
</li>

<li class="gv6" data="2">
<span class="notification-hide"></span>
<a href="/fantasy-land-luc-dia-huyen-bi.htm" title="Fantasy Land - Lục Địa Huyền Bí">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/avatar-1483946920152.png"
alt="Fantasy Land - Lục Địa Huyền Bí" width="120px" height="90px"
 />
</a>
<h3>
<a href="/fantasy-land-luc-dia-huyen-bi.htm" title="Fantasy Land - Lục Địa Huyền Bí" class="tgame-name classXanh">
Fantasy Land - Lục Địa Huyền Bí</a></h3>
<p>
<span class="tscore-game">9.0đ</span>
<span class="tvote-gamex">/</span>
<span class="tvote-game">20 vote</span>
</p>
<p>
<span class="tview tviewCrcIms" data-crc="1627388712">212506</span>

<span class="tvote-game">lượt xem</span>
</p>
</li>

<li class="gv7" data="">
<span class="notification-hide"></span>
<a href="/fifa-online-3.htm" title="FIFA Online 3">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/lHsw7z29HzTthO5JJezxBZllcQ6Qs/Image/2013/06/fifa-online-3-ea5ae.jpg"
alt="FIFA Online 3" width="120px" height="90px"
 />
</a>
<h3>
<a href="/fifa-online-3.htm" title="FIFA Online 3" class="tgame-name classXanh">
FIFA Online 3</a></h3>
<p>
<span class="tscore-game">8.5đ</span>
<span class="tvote-gamex">/</span>
<span class="tvote-game">1051 vote</span>
</p>
<p>
<span class="tview tviewCrcIms" data-crc="634855230">8528749</span>

<span class="tvote-game">lượt xem</span>
</p>
</li>

<li class="gv8" data="">
<span class="notification-hide"></span>
<a href="/tay-du-ky.htm" title="Tây du ký">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2015/tay-du-ky-1423049731249.jpg"
alt="Tây du ký" width="120px" height="90px"
 />
</a>
<h3>
<a href="/tay-du-ky.htm" title="Tây du ký" class="tgame-name classXanh">
Tây du ký</a></h3>
<p>
<span class="tscore-game">9.0đ</span>
<span class="tvote-gamex">/</span>
<span class="tvote-game">103 vote</span>
</p>
<p>
<span class="tview tviewCrcIms" data-crc="534834735">1474016</span>

<span class="tvote-game">lượt xem</span>
</p>
</li>

<li class="gv9" data="">
<span class="notification-hide"></span>
<a href="/chinh-do-1-mobile.htm" title="Chinh Đồ 1 Mobile">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/1-1497425604512.jpg"
alt="Chinh Đồ 1 Mobile" width="120px" height="90px"
 />
</a>
<h3>
<a href="/chinh-do-1-mobile.htm" title="Chinh Đồ 1 Mobile" class="tgame-name classXanh">
Chinh Đồ 1 Mobile</a></h3>
<p>
<span class="tscore-game">0.0đ</span>
<span class="tvote-gamex">/</span>
<span class="tvote-game">0 vote</span>
</p>
<p>
<span class="tview tviewCrcIms" data-crc="3373152318">0</span>

<span class="tvote-game">lượt xem</span>
</p>
</li>

<li class="clearboth"></li>
</ul>
</div>
<div class="clearboth"></div>
<div id="scrollbar" style="width: 690px!important; margin-top: -33px">
<a id="left_scroll" class="mouseover_left nodisplay" href="#"></a>
<div id="track">
<div id="dragBar"></div>
</div>
<a id="right_scroll" class="mouseover_right nodisplay" href="#"></a>
</div>
</div>
<div class="clearboth">
</div>
</div>





</div>


</div>

<style>
.iconcomment {
display: none;
}
</style>
<div class="newsupdate">
<h2 class="top">
<a href="#">MỚI CẬP NHẬT</a></h2>
<ul id="fistUpload1">


<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156070" data-order="0" id="flagLi1">
<a href="/kiem-the-mobile-se-duoc-phat-hanh-duoi-ten-kiem-the-truyen-ky-tai-viet-nam-20170727022836738.chn" title="Kiếm Thế Mobile sẽ được phát hành dưới tên Kiếm Thế Truyền Kỳ tại Việt Nam">
<img alt="Kiếm Thế Mobile sẽ được phát hành dưới tên Kiếm Thế Truyền Kỳ tại Việt Nam"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/2-1501097154208.png"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170727022836738 title="Kiếm Thế Mobile sẽ được phát hành dưới tên Kiếm Thế Truyền Kỳ tại Việt Nam" href="/kiem-the-mobile-se-duoc-phat-hanh-duoi-ten-kiem-the-truyen-ky-tai-viet-nam-20170727022836738.chn">Kiếm Thế Mobile sẽ được phát hành dưới tên Kiếm Thế Truyền Kỳ tại Việt Nam</a></h3>
<p>VTC Mobile xác nhận sẽ phát hành sản phẩm dành cho người đam mê game Kiếm Thế trên nền tảng di động và lấy tên chính thức là Kiếm Thế Truyền Kỳ. Siêu phẩm xứng danh ‘Vua game kiếm hiệp trở lại’ hứa hẹn sẽ tạo nên ‘cơn sốt’ trên nền tảng Smartphone trong thời gian tới.</p>
<p class="time">
<a href="javascript:void(0);" class="author">MaxSpeed</a>
 - 
<a href="/mobile-social.chn" class="categame">Mobile & Social</a>
27/07/2017 09:00
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156068" data-order="1" id="">
<a href="/lmht-khong-phai-yasuo-hay-lee-sin-nhung-vi-tuong-nay-xung-dang-co-trang-phuc-moi-ma-riot-mai-khong-chiu-201707270033303.chn" title="LMHT: Không phải Yasuo hay Lee Sin, những vị tướng này xứng đáng có trang phục mới mà Riot mãi không chịu">
<img alt="LMHT: Không phải Yasuo hay Lee Sin, những vị tướng này xứng đáng có trang phục mới mà Riot mãi không chịu"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/photo-0-1501089959778-crop-1501090092852.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=201707270033303 title="LMHT: Không phải Yasuo hay Lee Sin, những vị tướng này xứng đáng có trang phục mới mà Riot mãi không chịu" href="/lmht-khong-phai-yasuo-hay-lee-sin-nhung-vi-tuong-nay-xung-dang-co-trang-phuc-moi-ma-riot-mai-khong-chiu-201707270033303.chn">LMHT: Không phải Yasuo hay Lee Sin, những vị tướng này xứng đáng có trang phục mới mà Riot mãi không chịu</a></h3>
<p>Những vị tướng xứng đáng được Riot cho một trang phục mới mà Riot mãi... không chịu.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Triệu Tử Long</a>
 - 
<a href="/esport.chn" class="categame">Esport</a>
27/07/2017 00:00
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156057" data-order="2" id="">
<a href="/point-blank-strike-ban-mobile-cua-fps-dinh-dam-se-ra-mat-tai-khu-vuc-dong-nam-a-20170726212956597.chn" title="Point Blank: Strike - Bản Mobile của FPS đình đám sẽ ra mắt tại khu vực Đông Nam Á">
<img alt="Point Blank: Strike - Bản Mobile của FPS đình đám sẽ ra mắt tại khu vực Đông Nam Á"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/hinh-2-1501079091795-crop-1501079245814.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726212956597 title="Point Blank: Strike - Bản Mobile của FPS đình đám sẽ ra mắt tại khu vực Đông Nam Á" href="/point-blank-strike-ban-mobile-cua-fps-dinh-dam-se-ra-mat-tai-khu-vuc-dong-nam-a-20170726212956597.chn">Point Blank: Strike - Bản Mobile của FPS đình đám sẽ ra mắt tại khu vực Đông Nam Á</a></h3>
<p>Như vậy là phiên bản Mobile của siêu phẩm Point Blank sẽ chính thức được vận hành trong thời gian tới.</p>
<p class="time">
<a href="javascript:void(0);" class="author">MaxSpeed</a>
 - 
<a href="/mobile-social.chn" class="categame">Mobile & Social</a>
26/07/2017 21:28
</p>
</li>




<li class="" data-boxtype="timelineposition" data-locked="false" data-posid="156029" data-order="3" id="">
<a href="/router-wifi-d-link-dsl-2700u-nho-ma-co-vo-cho-game-thu-viet-20170726170654222.chn" title="Router wifi D-Link DSL-2700U - Nhỏ mà có võ cho game thủ Việt">
<img alt="Router wifi D-Link DSL-2700U - Nhỏ mà có võ cho game thủ Việt"
src="http://genknews.genkcdn.vn/zoom/220_160/2017/2-1501063375701-crop-1501063493641.png"
width="220px"
height="160px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726170654222 title="Router wifi D-Link DSL-2700U - Nhỏ mà có võ cho game thủ Việt" href="/router-wifi-d-link-dsl-2700u-nho-ma-co-vo-cho-game-thu-viet-20170726170654222.chn">Router wifi D-Link DSL-2700U - Nhỏ mà có võ cho game thủ Việt</a></h3>
<p>Đáng chú ý, router DSL-2700U được trang bị anten có công suất 5dpi, cao hơn so với các sản phẩm thông thường hiện tại đang sử dụng loại Anten 3dpi</p>
<p class="time">
<a href="javascript:void(0);" class="author">Nút Chuối</a>
 - 
<a href="/gaming-gear.chn" class="categame">Gaming Gear</a>
26/07/2017 21:00
</p>
</li>




<li class="" data-boxtype="timelineposition" data-locked="false" data-posid="156047" data-order="4" id="">
<a href="/thanh-lep-tung-mv-ngan-ty-chuyen-gai-trai-nhung-ai-cung-chi-chu-y-cap-mong-cua-nam-phu-20170726170819457.chn" title="&quot;Thánh lép&quot; tung MV ngàn tỷ: Chuyện gái trai nhưng ai cũng chỉ chú ý… cặp mông của nam phụ">
<img alt="&quot;Thánh lép&quot; tung MV ngàn tỷ: Chuyện gái trai nhưng ai cũng chỉ chú ý… cặp mông của nam phụ"
src="http://genknews.genkcdn.vn/zoom/220_160/2017/7777-1501063592293.jpg"
width="220px"
height="160px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726170819457 title="&quot;Thánh lép&quot; tung MV ngàn tỷ: Chuyện gái trai nhưng ai cũng chỉ chú ý… cặp mông của nam phụ" href="/thanh-lep-tung-mv-ngan-ty-chuyen-gai-trai-nhung-ai-cung-chi-chu-y-cap-mong-cua-nam-phu-20170726170819457.chn">&quot;Thánh lép&quot; tung MV ngàn tỷ: Chuyện gái trai nhưng ai cũng chỉ chú ý… cặp mông của nam phụ</a></h3>
<p>Một MV rất dễ thương than thở về chuyện bình đẳng nam nữ của cô nàng đáng yêu Hậu Hoàng đã khiến cộng đồng vô cùng thích thú, tuy nhiên tâm điểm của mọi sự chú ý lại nằm ở…</p>
<p class="time">
<a href="javascript:void(0);" class="author">Đô Đô</a>
 - 
<a href="/mobile-social.chn" class="categame">Mobile & Social</a>
26/07/2017 20:00
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156049" data-order="5" id="">
<a href="/lien-quan-mobile-tham-khao-doi-hinh-lay-cam-hung-tu-biet-doi-sieu-anh-hung-20170726193446003.chn" title="Liên Quân Mobile: Tham khảo đội hình lấy cảm hứng từ Biệt Đội Siêu Anh Hùng">
<img alt="Liên Quân Mobile: Tham khảo đội hình lấy cảm hứng từ Biệt Đội Siêu Anh Hùng"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/1-1501072334965.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726193446003 title="Liên Quân Mobile: Tham khảo đội hình lấy cảm hứng từ Biệt Đội Siêu Anh Hùng" href="/lien-quan-mobile-tham-khao-doi-hinh-lay-cam-hung-tu-biet-doi-sieu-anh-hung-20170726193446003.chn">Liên Quân Mobile: Tham khảo đội hình lấy cảm hứng từ Biệt Đội Siêu Anh Hùng</a></h3>
<p>Đây là một đội hình rất dị trong Liên Quân Mobile khi không có một vị tướng sát thủ nào.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Quyết Một Phen</a>
 - 
<a href="/mobile-social.chn" class="categame">Mobile & Social</a>
26/07/2017 19:34
</p>
</li>




<li class="" data-boxtype="timelineposition" data-locked="false" data-posid="156045" data-order="6" id="">
<a href="/so-tai-voi-dai-gia-bang-nhung-cap-doi-tuong-nho-ma-co-vo-trong-heroes-truyen-ky-phan-2-20170726160007175.chn" title="So tài với đại gia bằng những cặp đôi tướng “nhỏ mà có võ” trong Heroes Truyền Kỳ (Phần 2)">
<img alt="So tài với đại gia bằng những cặp đôi tướng “nhỏ mà có võ” trong Heroes Truyền Kỳ (Phần 2)"
src="http://genknews.genkcdn.vn/zoom/220_160/2017/photo-1-1501057804794.jpg"
width="220px"
height="160px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726160007175 title="So tài với đại gia bằng những cặp đôi tướng “nhỏ mà có võ” trong Heroes Truyền Kỳ (Phần 2)" href="/so-tai-voi-dai-gia-bang-nhung-cap-doi-tuong-nho-ma-co-vo-trong-heroes-truyen-ky-phan-2-20170726160007175.chn">So tài với đại gia bằng những cặp đôi tướng “nhỏ mà có võ” trong Heroes Truyền Kỳ (Phần 2)</a></h3>
<p>Trong phần này, chúng ta sẽ đến với 2 vị tướng không được nhiều người chơi để ý nhưng lại sở hữu sức mạnh khủng khiếp.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Nipp</a>
 - 
<a href="/mobile-social.chn" class="categame">Mobile & Social</a>
26/07/2017 19:30
</p>
</li>




<li class="" data-boxtype="timelineposition" data-locked="false" data-posid="155976" data-order="7" id="">
<a href="/su-that-dang-sau-10-chien-dich-moi-cua-dysnasty-warriors-unleashed-20170726135741113.chn" title="Sự thật đằng sau 10 chiến dịch mới của Dysnasty Warriors: Unleashed">
<img alt="Sự thật đằng sau 10 chiến dịch mới của Dysnasty Warriors: Unleashed"
src="http://genknews.genkcdn.vn/zoom/220_160/2017/http-channel-vcmedia-vn-prupload-156-2017-07-img20170726105614563-1501052308081.jpg"
width="220px"
height="160px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726135741113 title="Sự thật đằng sau 10 chiến dịch mới của Dysnasty Warriors: Unleashed" href="/su-that-dang-sau-10-chien-dich-moi-cua-dysnasty-warriors-unleashed-20170726135741113.chn">Sự thật đằng sau 10 chiến dịch mới của Dysnasty Warriors: Unleashed</a></h3>
<p>Đại Chiến Xích Bích 2 tiếp tục đưa người chơi hiểu rõ tường tận hơn về những “thâm cung bí sử” đằng sau trận chiến huyền thoại này.</p>
<p class="time">
<a href="javascript:void(0);" class="author">A.D</a>
 - 
<a href="/mobile-social.chn" class="categame">Mobile & Social</a>
26/07/2017 19:30
</p>
</li>




<li class="" data-boxtype="timelineposition" data-locked="false" data-posid="156031" data-order="8" id="">
<a href="/hotsteps-2-se-dua-game-nhay-tren-pc-tro-lai-thoi-hoang-kim-20170726171103207.chn" title="Hotsteps 2 sẽ đưa game nhảy trên PC trở lại thời hoàng kim?">
<img alt="Hotsteps 2 sẽ đưa game nhảy trên PC trở lại thời hoàng kim?"
src="http://genknews.genkcdn.vn/zoom/220_160/2017/http-channel-vcmedia-vn-prupload-156-2017-07-img20170726170505445-1501063849006.jpg"
width="220px"
height="160px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726171103207 title="Hotsteps 2 sẽ đưa game nhảy trên PC trở lại thời hoàng kim?" href="/hotsteps-2-se-dua-game-nhay-tren-pc-tro-lai-thoi-hoang-kim-20170726171103207.chn">Hotsteps 2 sẽ đưa game nhảy trên PC trở lại thời hoàng kim?</a></h3>
<p>Game nhảy trên PC Hotsteps 2 đã chính thức ra mắt game thủ Việt vào lúc 10h00 ngày 26/07 và ngay lập tức nhận được sự ủng hộ nhiệt tình của các tín đồ vũ đạo - âm nhạc. Đã rất lâu rồi mới lại có một sản phẩm game nhảy trên PC tạo được ấn tượng tốt tại thị trường Việt Nam đến thế.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Bút Sa</a>
 - 
<a href="/game-online.chn" class="categame">Game Online</a>
26/07/2017 18:30
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156041" data-order="9" id="">
<a href="/fifa-online-3-nhung-dieu-con-dong-lai-sau-giai-dau-eacc-summer-2017-20170726182222535.chn" title="FIFA Online 3: Những điều còn đọng lại sau giải đấu EACC Summer 2017">
<img alt="FIFA Online 3: Những điều còn đọng lại sau giải đấu EACC Summer 2017"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/photo-2-1501067525958.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726182222535 title="FIFA Online 3: Những điều còn đọng lại sau giải đấu EACC Summer 2017" href="/fifa-online-3-nhung-dieu-con-dong-lai-sau-giai-dau-eacc-summer-2017-20170726182222535.chn">FIFA Online 3: Những điều còn đọng lại sau giải đấu EACC Summer 2017</a></h3>
<p>EACC là giải đấu lớn nhất của EsportsTM FIFA Online 3 được tổ chức hai dịp Mùa Hè và Mùa Đông từ năm 2016 (tiền thân là ASIAN Cup).</p>
<p class="time">
<a href="javascript:void(0);" class="author">Vào Sân Thay Người</a>
 - 
<a href="/esport.chn" class="categame">Esport</a>
26/07/2017 18:22
</p>
</li>
<div id="admzone14072"></div><script>admicroAD.unit.push(function () { admicroAD.show('admzone14072') });</script>



<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156037" data-order="10" id="">
<a href="/monkey-king-hero-is-back-tung-trailer-hoanh-trang-xung-danh-god-of-war-cua-trung-quoc-20170726174749957.chn" title="Monkey King: Hero is Back tung trailer hoành tráng, xứng danh “God of War” của Trung Quốc">
<img alt="Monkey King: Hero is Back tung trailer hoành tráng, xứng danh “God of War” của Trung Quốc"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/2-1501065917733.png"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726174749957 title="Monkey King: Hero is Back tung trailer hoành tráng, xứng danh “God of War” của Trung Quốc" href="/monkey-king-hero-is-back-tung-trailer-hoanh-trang-xung-danh-god-of-war-cua-trung-quoc-20170726174749957.chn">Monkey King: Hero is Back tung trailer hoành tráng, xứng danh “God of War” của Trung Quốc</a></h3>
<p>Monkey King: Hero is Back là tựa game được xây dựng dựa theo bộ phim cùng tên của đạo diễn Tian Xiao Peng (phát hành năm 2015). Trò chơi là thành quả hợp tác giữa Sony Entertainment và hai đơn vị khác là October Media (Trung Quốc) và Oasis Games (Mỹ).</p>
<p class="time">
<a href="javascript:void(0);" class="author">Nga0Du</a>
 - 
<a href="/pc-console.chn" class="categame">PC/Console</a>
26/07/2017 17:56
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156039" data-order="11" id="">
<a href="/nong-mat-voi-bo-anh-cosplay-tuyet-dep-cua-vindictus-mobile-truoc-them-chinajoy-2017-20170726175728519.chn" title="Nóng mắt với bộ ảnh cosplay tuyệt đẹp của Vindictus Mobile trước thềm ChinaJoy 2017">
<img alt="Nóng mắt với bộ ảnh cosplay tuyệt đẹp của Vindictus Mobile trước thềm ChinaJoy 2017"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/41065-5762934-564139-1501066415811.jpg"
width="310px"
height="200px"
 />

</a>
<span class="pb_top">ChinaJoy 2017</span>
<h3><a data-linktype='newsdetail'data-id=20170726175728519 title="Nóng mắt với bộ ảnh cosplay tuyệt đẹp của Vindictus Mobile trước thềm ChinaJoy 2017" href="/nong-mat-voi-bo-anh-cosplay-tuyet-dep-cua-vindictus-mobile-truoc-them-chinajoy-2017-20170726175728519.chn">Nóng mắt với bộ ảnh cosplay tuyệt đẹp của Vindictus Mobile trước thềm ChinaJoy 2017</a></h3>
<p>Ngay trước thềm ChinaJoy 2017, Vindictus Mobile đã bất ngờ tung ra bộ ảnh cosplay cực gợi cảm giới thiệu về một class nhân vật của mình.</p>
<p class="time">
<a href="javascript:void(0);" class="author">SmiLe</a>
 - 
<a href="/mobile-social.chn" class="categame">Mobile & Social</a>
26/07/2017 17:55
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156035" data-order="12" id="">
<a href="/buc-anh-bao-like-vi-noi-dung-noi-kho-cua-cac-game-thu-da-co-vo-con-20170726175621269.chn" title="Bức ảnh bão like vì nói đúng nỗi khổ của các game thủ đã có vợ con">
<img alt="Bức ảnh bão like vì nói đúng nỗi khổ của các game thủ đã có vợ con"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/20374428-477911422545572-7498216006676881610-n-1501062306193-crop-1501062326915.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726175621269 title="Bức ảnh bão like vì nói đúng nỗi khổ của các game thủ đã có vợ con" href="/buc-anh-bao-like-vi-noi-dung-noi-kho-cua-cac-game-thu-da-co-vo-con-20170726175621269.chn">Bức ảnh bão like vì nói đúng nỗi khổ của các game thủ đã có vợ con</a></h3>
<p>Chắc hẳn game thủ nào đã có gia đình đều hiểu được những nỗi khổ không tên ngày ngày giữ mình lại không thể nào tiến đến gần.</p>
<p class="time">
<a href="javascript:void(0);" class="author">RED</a>
 - 
<a href="/gaming-gear.chn" class="categame">Gaming Gear</a>
26/07/2017 17:55
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156033" data-order="13" id="">
<a href="/che-choi-game-on-2-co-gai-tre-danh-nhau-lot-do-ngay-giua-quan-net-20170726174815691.chn" title="Chê chơi game ồn, 2 cô gái trẻ đánh nhau, lột đồ ngay giữa quán Net">
<img alt="Chê chơi game ồn, 2 cô gái trẻ đánh nhau, lột đồ ngay giữa quán Net"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/19-1501065887721.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726174815691 title="Chê chơi game ồn, 2 cô gái trẻ đánh nhau, lột đồ ngay giữa quán Net" href="/che-choi-game-on-2-co-gai-tre-danh-nhau-lot-do-ngay-giua-quan-net-20170726174815691.chn">Chê chơi game ồn, 2 cô gái trẻ đánh nhau, lột đồ ngay giữa quán Net</a></h3>
<p>Một câu chuyện khá hài hước đã bất ngờ được ghi nhận tại quán Net Trung Quốc, khi 2 cô gái trẻ tuổi bất ngờ lao vào đánh nhau ầm ĩ chỉ vì một xích mích nhỏ.</p>
<p class="time">
<a href="javascript:void(0);" class="author">SmiLe</a>
 - 
<a href="/game-online.chn" class="categame">Game Online</a>
26/07/2017 17:47
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156043" data-order="14" id="">
<a href="/dai-chien-gia-toc-luc-dia-huyen-bi-tung-giftcode-ra-mat-nhung-ly-do-nhat-dinh-phai-choi-2017072612455891.chn" title="Đại Chiến Gia Tộc - Lục Địa Huyền Bí tung Giftcode ra mắt, những lý do nhất định phải chơi!">
<img alt="Đại Chiến Gia Tộc - Lục Địa Huyền Bí tung Giftcode ra mắt, những lý do nhất định phải chơi!"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/giphy-1501047908149.gif.png"
width="310px"
height="200px"
class='lazy' data-original='http://genknews.genkcdn.vn/zoom/310_200/2017/giphy-1501047908149.gif' />

</a>

<h3><a data-linktype='newsdetail'data-id=2017072612455891 title="Đại Chiến Gia Tộc - Lục Địa Huyền Bí tung Giftcode ra mắt, những lý do nhất định phải chơi!" href="/dai-chien-gia-toc-luc-dia-huyen-bi-tung-giftcode-ra-mat-nhung-ly-do-nhat-dinh-phai-choi-2017072612455891.chn">Đại Chiến Gia Tộc - Lục Địa Huyền Bí tung Giftcode ra mắt, những lý do nhất định phải chơi!</a></h3>
<p>Để chào mừng bản Update Gia Tộc Đại Chiến, Lục Địa Huyền Bí xin được gửi tặng các game thủ bộ Giftcode giá trị.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Đô Đô</a>
 - 
<a href="/mobile-social.chn" class="categame">Mobile & Social</a>
26/07/2017 17:30
</p>
</li>




<li class="" data-boxtype="timelineposition" data-locked="false" data-posid="156013" data-order="15" id="">
<a href="/chinh-do-1-mobile-mach-nuoc-game-thu-cach-tang-sao-trang-bi-20170726160148097.chn" title="Chinh Đồ 1 Mobile “mách nước&quot; game thủ cách tăng sao trang bị">
<img alt="Chinh Đồ 1 Mobile “mách nước&quot; game thủ cách tăng sao trang bị"
src="http://genknews.genkcdn.vn/zoom/220_160/2017/http-channel-vcmedia-vn-prupload-156-2017-07-img20170726152858855-1501059694113.jpg"
width="220px"
height="160px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726160148097 title="Chinh Đồ 1 Mobile “mách nước&quot; game thủ cách tăng sao trang bị" href="/chinh-do-1-mobile-mach-nuoc-game-thu-cach-tang-sao-trang-bi-20170726160148097.chn">Chinh Đồ 1 Mobile “mách nước&quot; game thủ cách tăng sao trang bị</a></h3>
<p>Trang bị là yếu tố quan trọng trong việc phô diễn sức mạnh của nhân vật, tuy nhiên không phải người chơi nào cũng có khả năng để sở hữu một bộ trang bị hoàn hảo với những chỉ số đáng mơ ước. Chinh Đồ 1 Mobile sẽ “bỏ nhỏ” cho game thủ bí kíp để có một bộ trang bị hấp dẫn thông qua bài viết dưới đây.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Pink</a>
 - 
<a href="/mobile-social.chn" class="categame">Mobile & Social</a>
26/07/2017 17:30
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156027" data-order="16" id="">
<a href="/game-thu-6-ngay-13-dinh-tin-don-bi-nsx-bo-roi-vi-khong-ra-tien-20170726164633222.chn" title="Game Thứ 6 ngày 13 dính tin đồn bị NSX &quot;bỏ rơi&quot; vì không ra tiền">
<img alt="Game Thứ 6 ngày 13 dính tin đồn bị NSX &quot;bỏ rơi&quot; vì không ra tiền"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/2-1501062269955.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726164633222 title="Game Thứ 6 ngày 13 dính tin đồn bị NSX &quot;bỏ rơi&quot; vì không ra tiền" href="/game-thu-6-ngay-13-dinh-tin-don-bi-nsx-bo-roi-vi-khong-ra-tien-20170726164633222.chn">Game Thứ 6 ngày 13 dính tin đồn bị NSX &quot;bỏ rơi&quot; vì không ra tiền</a></h3>
<p>Nguồn cơn của thông tin trên đến từ việc Illfonic đang phát triển một dự án mới có tên “Dead Alliance”. Không những vậy, vì doanh thu sụt giảm của trò chơi (Friday The 13th đã bị crack) nên tin đồn trên càng có cơ sở. Điều này khiến người hâm mộ không khỏi lo lắng.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Nga0Du</a>
 - 
<a href="/pc-console.chn" class="categame">PC/Console</a>
26/07/2017 17:07
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156025" data-order="17" id="">
<a href="/bo-vu-khi-phuong-hoang-moi-duoc-cap-nhat-vao-dot-kich-hot-den-co-nao-20170726170342785.chn" title="Bộ vũ khí Phượng Hoàng mới được cập nhật vào Đột Kích “hot” đến cỡ nào?">
<img alt="Bộ vũ khí Phượng Hoàng mới được cập nhật vào Đột Kích “hot” đến cỡ nào?"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/photo-3-1501063218654.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726170342785 title="Bộ vũ khí Phượng Hoàng mới được cập nhật vào Đột Kích “hot” đến cỡ nào?" href="/bo-vu-khi-phuong-hoang-moi-duoc-cap-nhat-vao-dot-kich-hot-den-co-nao-20170726170342785.chn">Bộ vũ khí Phượng Hoàng mới được cập nhật vào Đột Kích “hot” đến cỡ nào?</a></h3>
<p>Tiếp nối theo 2 “Tân binh” trước là “COP .357 Derringer” và “M18 Smoke”, Đột Kích đã cập nhật vào game 3 “thành viên” mới của Gia đình Gold Phoenix.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Hoàng Hôn</a>
 - 
<a href="/esport.chn" class="categame">Esport</a>
26/07/2017 17:00
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156023" data-order="18" id="">
<a href="/bong-mat-voi-cac-nu-chien-binh-dot-kich-cuc-goi-cam-cua-tap-chi-fhm-20170726170158691.chn" title="Bỏng mắt với các nữ chiến binh Đột Kích cực gợi cảm của tạp chí FHM">
<img alt="Bỏng mắt với các nữ chiến binh Đột Kích cực gợi cảm của tạp chí FHM"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/avatar-1501063233896.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726170158691 title="Bỏng mắt với các nữ chiến binh Đột Kích cực gợi cảm của tạp chí FHM" href="/bong-mat-voi-cac-nu-chien-binh-dot-kich-cuc-goi-cam-cua-tap-chi-fhm-20170726170158691.chn">Bỏng mắt với các nữ chiến binh Đột Kích cực gợi cảm của tạp chí FHM</a></h3>
<p>Có lẽ, với các nữ chiến binh gợi cảm như dưới đây thì việc game thủ Trung Quốc thích chơi Đột Kích cũng là điều dễ hiểu mà thôi.</p>
<p class="time">
<a href="javascript:void(0);" class="author">SmiLe</a>
 - 
<a href="/game-online.chn" class="categame">Game Online</a>
26/07/2017 17:00
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156021" data-order="19" id="">
<a href="/co-the-ban-chua-biet-tua-game-tuong-nhu-nham-nhi-nay-lai-la-tro-choi-dat-nhat-trong-lich-su-steam-voi-gia-150-trieu-vnd-20170726160238894.chn" title="Có thể bạn chưa biết: Tựa game tưởng như nhảm nhì này lại là trò chơi đắt nhất trong lịch sử Steam với giá 150 triệu VNĐ">
<img alt="Có thể bạn chưa biết: Tựa game tưởng như nhảm nhì này lại là trò chơi đắt nhất trong lịch sử Steam với giá 150 triệu VNĐ"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/4-1501059405205.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726160238894 title="Có thể bạn chưa biết: Tựa game tưởng như nhảm nhì này lại là trò chơi đắt nhất trong lịch sử Steam với giá 150 triệu VNĐ" href="/co-the-ban-chua-biet-tua-game-tuong-nhu-nham-nhi-nay-lai-la-tro-choi-dat-nhat-trong-lich-su-steam-voi-gia-150-trieu-vnd-20170726160238894.chn">Có thể bạn chưa biết: Tựa game tưởng như nhảm nhì này lại là trò chơi đắt nhất trong lịch sử Steam với giá 150 triệu VNĐ</a></h3>
<p>Để sở hữu chọn bộ trò chơi này, bạn sẽ phải bỏ ra 6631$ (~ 150 triệu VNĐ).</p>
<p class="time">
<a href="javascript:void(0);" class="author">Nga0Du</a>
 - 
<a href="/pc-console.chn" class="categame">PC/Console</a>
26/07/2017 16:36
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156019" data-order="20" id="">
<a href="/su-dung-video-game-trong-dieu-tri-benh-tat-co-the-tro-thanh-tuong-lai-cua-y-hoc-20170726162144347.chn" title="Sử dụng video game trong điều trị bệnh tật có thể trở thành tương lai của y học">
<img alt="Sử dụng video game trong điều trị bệnh tật có thể trở thành tương lai của y học"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/11-1501060426635.png"
width="310px"
height="200px"
 />

</a>
<span class="pb_top">Khám phá</span>
<h3><a data-linktype='newsdetail'data-id=20170726162144347 title="Sử dụng video game trong điều trị bệnh tật có thể trở thành tương lai của y học" href="/su-dung-video-game-trong-dieu-tri-benh-tat-co-the-tro-thanh-tuong-lai-cua-y-hoc-20170726162144347.chn">Sử dụng video game trong điều trị bệnh tật có thể trở thành tương lai của y học</a></h3>
<p>Đó là những thông tin được một công ty có tên Akili, cùng với Đại học California rất chú ý đến. Akili là một công ty công nghệ có trụ sở ở Boston, sử dụng công nghệ lõi thần kinh để phát triển một game mobile có tên Project: EVO.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Nguyễn Tuấn Tài</a>
 - 
<a href="/kham-pha.chn" class="categame">Khám phá</a>
26/07/2017 16:35
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156017" data-order="21" id="">
<a href="/de-nghi-choi-amumu-di-rung-hlv-truong-cua-kt-rolster-bi-score-to-thai-do-nhu-the-nay-day-20170726162755613.chn" title="Đề nghị chơi Amumu đi rừng, HLV trưởng của KT Rolster bị Score tỏ thái độ như thế này đây">
<img alt="Đề nghị chơi Amumu đi rừng, HLV trưởng của KT Rolster bị Score tỏ thái độ như thế này đây"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/20292773-1514794175247861-4386154695364753680-n-1501061238782.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726162755613 title="Đề nghị chơi Amumu đi rừng, HLV trưởng của KT Rolster bị Score tỏ thái độ như thế này đây" href="/de-nghi-choi-amumu-di-rung-hlv-truong-cua-kt-rolster-bi-score-to-thai-do-nhu-the-nay-day-20170726162755613.chn">Đề nghị chơi Amumu đi rừng, HLV trưởng của KT Rolster bị Score tỏ thái độ như thế này đây</a></h3>
<p>Nội dung bài viết là cuộc phỏng vấn với HLV trưởng của KT Rolster về meta đi rừng sau khi giành chiến thắng trước SSG với tỷ số 2-1.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Hoàng Hôn</a>
 - 
<a href="/esport.chn" class="categame">Esport</a>
26/07/2017 16:30
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156015" data-order="22" id="">
<a href="/khong-nghi-ngo-gi-nua-day-la-game-kiem-hiep-dep-nhat-lich-su-20170726162231332.chn" title="Không nghi ngờ gì nữa, đây là game kiếm hiệp đẹp nhất lịch sử">
<img alt="Không nghi ngờ gì nữa, đây là game kiếm hiệp đẹp nhất lịch sử"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/20170724145559a0es17xtir151fky-1501060180988.png"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726162231332 title="Không nghi ngờ gì nữa, đây là game kiếm hiệp đẹp nhất lịch sử" href="/khong-nghi-ngo-gi-nua-day-la-game-kiem-hiep-dep-nhat-lich-su-20170726162231332.chn">Không nghi ngờ gì nữa, đây là game kiếm hiệp đẹp nhất lịch sử</a></h3>
<p>Game online kiếm hiệp nổi tiếng Cổ Kiếm Kỳ Đàm Online đã tung ra bản cập nhật đồ hoạ biến trò chơi đã đẹp còn trở nên lung linh hơn nữa.</p>
<p class="time">
<a href="javascript:void(0);" class="author">RED</a>
 - 
<a href="/game-online.chn" class="categame">Game Online</a>
26/07/2017 16:21
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156011" data-order="23" id="">
<a href="/kham-pha-tat-tan-tat-ve-nhung-loai-mat-co-trong-series-naruto-20170726160427628.chn" title="Khám phá tất tần tật về những loại mắt có trong series Naruto">
<img alt="Khám phá tất tần tật về những loại mắt có trong series Naruto"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/photo-5-1501059026151.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726160427628 title="Khám phá tất tần tật về những loại mắt có trong series Naruto" href="/kham-pha-tat-tan-tat-ve-nhung-loai-mat-co-trong-series-naruto-20170726160427628.chn">Khám phá tất tần tật về những loại mắt có trong series Naruto</a></h3>
<p>Thế giới trong Naruto không chỉ gây ấn tượng với người xem bởi những Ninja với nhiều Nhẫn thuật đỉnh cao mà còn bởi những con mắt sở hữu thứ sức mạnh bá đạo đến kinh ngạc.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Mẹ Sề</a>
 - 
<a href="/manga-film.chn" class="categame">Manga/Film</a>
26/07/2017 16:04
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156004" data-order="24" id="">
<a href="/san-pham-moi-nhat-cua-hang-game-atari-mu-bong-chay-tich-hop-loa-ngoai-20170726153216863.chn" title="Sản phẩm mới nhất của hãng game Atari: Mũ bóng chày tích hợp loa ngoài">
<img alt="Sản phẩm mới nhất của hãng game Atari: Mũ bóng chày tích hợp loa ngoài"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/atari-speakerhat-750x562-1501057016113.jpg"
width="310px"
height="200px"
 />

</a>
<span class="pb_top">Khám phá</span>
<h3><a data-linktype='newsdetail'data-id=20170726153216863 title="Sản phẩm mới nhất của hãng game Atari: Mũ bóng chày tích hợp loa ngoài" href="/san-pham-moi-nhat-cua-hang-game-atari-mu-bong-chay-tich-hop-loa-ngoai-20170726153216863.chn">Sản phẩm mới nhất của hãng game Atari: Mũ bóng chày tích hợp loa ngoài</a></h3>
<p>Chúng ta đã được giới thiệu nhiều về những công nghệ có thể mặc trên người, từ chiếc quần jean, đến chiếc áo khoác tự làm khô và áo khoác sử dụng năng lượng mặt trời… nhưng không có gì đơn giản như chiếc “Loa Mũ” này.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Nguyễn Tuấn Tài</a>
 - 
<a href="/kham-pha.chn" class="categame">Khám phá</a>
26/07/2017 15:59
</p>
</li>
<div id="admzone14073"></div><script>admicroAD.unit.push(function () { admicroAD.show('admzone14073') });</script>



<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156009" data-order="25" id="">
<a href="/khong-chi-trang-phuc-riot-con-tung-ra-ban-do-summoners-rift-gia-lap-cuc-chat-choi-20170726160022675.chn" title="Không chỉ trang phục, Riot còn tung ra bản đồ Summoner's Rift Giả Lập cực chất chơi">
<img alt="Không chỉ trang phục, Riot còn tung ra bản đồ Summoner's Rift Giả Lập cực chất chơi"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/photo-5-1501058774173.png"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726160022675 title="Không chỉ trang phục, Riot còn tung ra bản đồ Summoner's Rift Giả Lập cực chất chơi" href="/khong-chi-trang-phuc-riot-con-tung-ra-ban-do-summoners-rift-gia-lap-cuc-chat-choi-20170726160022675.chn">Không chỉ trang phục, Riot còn tung ra bản đồ Summoner's Rift Giả Lập cực chất chơi</a></h3>
<p>Riot còn quyết định đưa cả bản đồ Summoner's Rift trở về tuổi thơ với bản đồ Giả Lập tuyệt đẹp, chưa từng có trong lịch sử Liên Minh Huyền Thoại.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Hoàng Hôn</a>
 - 
<a href="/esport.chn" class="categame">Esport</a>
26/07/2017 15:55
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156006" data-order="26" id="">
<a href="/cung-ngam-cosplay-mai-shiranui-cuc-goi-cam-don-tim-fan-ham-mo-20170726154503363.chn" title="Cùng ngắm cosplay Mai Shiranui cực gợi cảm đốn tim fan hâm mộ">
<img alt="Cùng ngắm cosplay Mai Shiranui cực gợi cảm đốn tim fan hâm mộ"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/23-1501058448194.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726154503363 title="Cùng ngắm cosplay Mai Shiranui cực gợi cảm đốn tim fan hâm mộ" href="/cung-ngam-cosplay-mai-shiranui-cuc-goi-cam-don-tim-fan-ham-mo-20170726154503363.chn">Cùng ngắm cosplay Mai Shiranui cực gợi cảm đốn tim fan hâm mộ</a></h3>
<p>Dưới đây là bộ ảnh cosplay tuyệt đẹp về cô nàng Mai Shiranui này.</p>
<p class="time">
<a href="javascript:void(0);" class="author">SmiLe</a>
 - 
<a href="/pc-console.chn" class="categame">PC/Console</a>
26/07/2017 15:44
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156002" data-order="27" id="">
<a href="/danh-gia-nhanh-fortnite-game-sinh-ton-chong-zombie-hot-nhat-the-gioi-vua-ra-mat-20170726151314847.chn" title="Đánh giá nhanh Fortnite - Game sinh tồn chống zombie hot nhất thế giới vừa ra mắt">
<img alt="Đánh giá nhanh Fortnite - Game sinh tồn chống zombie hot nhất thế giới vừa ra mắt"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/6-1501056638491.png"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726151314847 title="Đánh giá nhanh Fortnite - Game sinh tồn chống zombie hot nhất thế giới vừa ra mắt" href="/danh-gia-nhanh-fortnite-game-sinh-ton-chong-zombie-hot-nhat-the-gioi-vua-ra-mat-20170726151314847.chn">Đánh giá nhanh Fortnite - Game sinh tồn chống zombie hot nhất thế giới vừa ra mắt</a></h3>
<p>Với lối chơi độc đáo, tiết tấu nhanh, mạnh, kèm theo đó là những yếu tố hài hước, thú vị, Fortnite đang nhận được rất nhiều kỳ vọng.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Nga0Du</a>
 - 
<a href="/pc-console.chn" class="categame">PC/Console</a>
26/07/2017 15:44
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="156000" data-order="28" id="">
<a href="/goc-gia-dinh-ngay-cang-nhieu-bo-me-choi-game-cung-con-cai-thay-vi-chi-ngoi-xem-tv-201707261433498.chn" title="Góc gia đình: Ngày càng nhiều bố mẹ chơi game cùng con cái thay vì chỉ ngồi xem TV">
<img alt="Góc gia đình: Ngày càng nhiều bố mẹ chơi game cùng con cái thay vì chỉ ngồi xem TV"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/family-minecraft-xbox-1501054039440.jpg"
width="310px"
height="200px"
 />

</a>
<span class="pb_top">Khám phá</span>
<h3><a data-linktype='newsdetail'data-id=201707261433498 title="Góc gia đình: Ngày càng nhiều bố mẹ chơi game cùng con cái thay vì chỉ ngồi xem TV" href="/goc-gia-dinh-ngay-cang-nhieu-bo-me-choi-game-cung-con-cai-thay-vi-chi-ngoi-xem-tv-201707261433498.chn">Góc gia đình: Ngày càng nhiều bố mẹ chơi game cùng con cái thay vì chỉ ngồi xem TV</a></h3>
<p>Bạn nghĩ sao nếu tất cả thành viên trong gia đình cùng lập một party để luyện cấp, hay cùng tham gia một phòng để chơi CS:GO?</p>
<p class="time">
<a href="javascript:void(0);" class="author">Nguyễn Tuấn Tài</a>
 - 
<a href="/kham-pha.chn" class="categame">Khám phá</a>
26/07/2017 15:43
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="155998" data-order="29" id="">
<a href="/cung-soi-hotsteps-2-game-vu-dao-cuc-hot-trong-ngay-ra-mat-tai-viet-nam-20170726153206347.chn" title="Cùng soi HotSteps 2 - Game vũ đạo cực hot trong ngày ra mắt tại Việt Nam">
<img alt="Cùng soi HotSteps 2 - Game vũ đạo cực hot trong ngày ra mắt tại Việt Nam"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/27-1501057667601.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726153206347 title="Cùng soi HotSteps 2 - Game vũ đạo cực hot trong ngày ra mắt tại Việt Nam" href="/cung-soi-hotsteps-2-game-vu-dao-cuc-hot-trong-ngay-ra-mat-tai-viet-nam-20170726153206347.chn">Cùng soi HotSteps 2 - Game vũ đạo cực hot trong ngày ra mắt tại Việt Nam</a></h3>
<p>Vào ngày hôm nay 26/07, game online HotSteps 2 đã chính thức mở cửa rộng rãi đón người chơi tại Việt Nam. Được biết, đây đã là phiên bản chính thức của HotSteps 2 và sẽ không reset tài khoản.</p>
<p class="time">
<a href="javascript:void(0);" class="author">SmiLe</a>
 - 
<a href="/game-online.chn" class="categame">Game Online</a>
26/07/2017 15:30
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="155996" data-order="30" id="">
<a href="/davor-suker-world-legend-vua-pha-luoi-world-cup-trong-fifa-online-3-20170726152919941.chn" title="Davor Suker World Legend: Vua phá lưới World Cup trong FIFA Online 3">
<img alt="Davor Suker World Legend: Vua phá lưới World Cup trong FIFA Online 3"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/image0-1501057010238.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726152919941 title="Davor Suker World Legend: Vua phá lưới World Cup trong FIFA Online 3" href="/davor-suker-world-legend-vua-pha-luoi-world-cup-trong-fifa-online-3-20170726152919941.chn">Davor Suker World Legend: Vua phá lưới World Cup trong FIFA Online 3</a></h3>
<p>Siêu tiền đạo Croatia từng là một trong những chân sút hay nhất thế giới những năm 1990 lại nhận được nhiều ý kiến chỉ trích từ game thủ FIFA Online 3.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Nhà Thơ Đá Bóng</a>
 - 
<a href="/esport.chn" class="categame">Esport</a>
26/07/2017 15:29
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="155994" data-order="31" id="">
<a href="/reset-cuoc-giai-cuu-dem-nguoc-tua-phim-hanh-dong-trung-quoc-kich-tinh-20170726152750378.chn" title="Reset - Cuộc giải cứu đếm ngược, tựa phim hành động Trung Quốc kịch tính">
<img alt="Reset - Cuộc giải cứu đếm ngược, tựa phim hành động Trung Quốc kịch tính"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/image005-1501057229978-crop-1501057608732.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726152750378 title="Reset - Cuộc giải cứu đếm ngược, tựa phim hành động Trung Quốc kịch tính" href="/reset-cuoc-giai-cuu-dem-nguoc-tua-phim-hanh-dong-trung-quoc-kich-tinh-20170726152750378.chn">Reset - Cuộc giải cứu đếm ngược, tựa phim hành động Trung Quốc kịch tính</a></h3>
<p>Reset - Cuộc giải cứu đếm ngược là tựa phim hành động kịch tính của Dương Mịch và Hoắc Kiến Hoa vừa được ra mắt.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Kandy K</a>
 - 
<a href="/manga-film.chn" class="categame">Manga/Film</a>
26/07/2017 15:27
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="155992" data-order="32" id="">
<a href="/bi-bat-nat-den-muc-phai-bo-viec-binh-luan-vien-noi-tieng-the-gioi-quyet-chong-lai-nan-tre-trau-20170726152553707.chn" title="Bị bắt nạt đến mức phải bỏ việc, bình luận viên nổi tiếng thế giới quyết chống lại nạn trẻ trâu">
<img alt="Bị bắt nạt đến mức phải bỏ việc, bình luận viên nổi tiếng thế giới quyết chống lại nạn trẻ trâu"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/photo-0-1501057359276.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726152553707 title="Bị bắt nạt đến mức phải bỏ việc, bình luận viên nổi tiếng thế giới quyết chống lại nạn trẻ trâu" href="/bi-bat-nat-den-muc-phai-bo-viec-binh-luan-vien-noi-tieng-the-gioi-quyet-chong-lai-nan-tre-trau-20170726152553707.chn">Bị bắt nạt đến mức phải bỏ việc, bình luận viên nổi tiếng thế giới quyết chống lại nạn trẻ trâu</a></h3>
<p>Tài năng bình luận viên của làng Call of Duty này năm nay mới 21 tuổi, thế nhưng sức ép của cộng đồng mạng đã khiến cho anh phải bỏ dở những dự định của bản thân</p>
<p class="time">
<a href="javascript:void(0);" class="author">Nút Chuối</a>
 - 
<a href="/game-online.chn" class="categame">Game Online</a>
26/07/2017 15:25
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="155990" data-order="33" id="">
<a href="/day-la-tua-game-ban-sung-co-nhieu-con-gai-choi-nhat-the-gioi-anh-em-con-cho-gi-nua-2017072615245266.chn" title="Đây là tựa game bắn súng có nhiều con gái chơi nhất thế giới, anh em còn chờ gì nữa?">
<img alt="Đây là tựa game bắn súng có nhiều con gái chơi nhất thế giới, anh em còn chờ gì nữa?"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/ava-1501057447796.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=2017072615245266 title="Đây là tựa game bắn súng có nhiều con gái chơi nhất thế giới, anh em còn chờ gì nữa?" href="/day-la-tua-game-ban-sung-co-nhieu-con-gai-choi-nhat-the-gioi-anh-em-con-cho-gi-nua-2017072615245266.chn">Đây là tựa game bắn súng có nhiều con gái chơi nhất thế giới, anh em còn chờ gì nữa?</a></h3>
<p>Đây chính là kết quả của một cuộc khảo sát xem đâu là tựa game bắn súng đông con gái chơi nhất.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Hoàng Hôn</a>
 - 
<a href="/esport.chn" class="categame">Esport</a>
26/07/2017 15:25
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="155988" data-order="34" id="">
<a href="/nhung-dieu-thu-vi-xay-ra-trong-tap-phim-game-of-thrones-vua-qua-20170726151030894.chn" title="Những điều thú vị xảy ra trong tập phim Game of Thrones vừa qua">
<img alt="Những điều thú vị xảy ra trong tập phim Game of Thrones vừa qua"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/5-copy-1501056391100-crop-1501056549195.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726151030894 title="Những điều thú vị xảy ra trong tập phim Game of Thrones vừa qua" href="/nhung-dieu-thu-vi-xay-ra-trong-tap-phim-game-of-thrones-vua-qua-20170726151030894.chn">Những điều thú vị xảy ra trong tập phim Game of Thrones vừa qua</a></h3>
<p>Cùng điểm lại những tình tiết hài hước nhất trong Game of Thrones tuần vừa qua.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Kandy K</a>
 - 
<a href="/manga-film.chn" class="categame">Manga/Film</a>
26/07/2017 15:09
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="155986" data-order="35" id="">
<a href="/xuat-hien-website-giup-game-thu-dung-cau-hinh-may-tinh-cuc-chuan-theo-game-yeu-thich-20170726144827472.chn" title="Xuất hiện website giúp game thủ dựng cấu hình máy tính cực chuẩn theo game yêu thích">
<img alt="Xuất hiện website giúp game thủ dựng cấu hình máy tính cực chuẩn theo game yêu thích"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/3-build-may-choi-game-1501054974417.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726144827472 title="Xuất hiện website giúp game thủ dựng cấu hình máy tính cực chuẩn theo game yêu thích" href="/xuat-hien-website-giup-game-thu-dung-cau-hinh-may-tinh-cuc-chuan-theo-game-yeu-thich-20170726144827472.chn">Xuất hiện website giúp game thủ dựng cấu hình máy tính cực chuẩn theo game yêu thích</a></h3>
<p>Tiện ích vô cùng hữu dụng và tiện lợi cho game thủ lựa chọn bộ máy tính chiến game phù hợp với bản thân mình.</p>
<p class="time">
<a href="javascript:void(0);" class="author">RED</a>
 - 
<a href="/gaming-gear.chn" class="categame">Gaming Gear</a>
26/07/2017 14:48
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="155984" data-order="36" id="">
<a href="/dota-2-top-5-hero-thu-nha-sieu-hang-20170726143142863.chn" title="DOTA 2: Top 5 hero thủ nhà siêu hạng">
<img alt="DOTA 2: Top 5 hero thủ nhà siêu hạng"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/anh5-1501054040795.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726143142863 title="DOTA 2: Top 5 hero thủ nhà siêu hạng" href="/dota-2-top-5-hero-thu-nha-sieu-hang-20170726143142863.chn">DOTA 2: Top 5 hero thủ nhà siêu hạng</a></h3>
<p>DOTA 2 là game phá nhà, chính vì thế và rất nhiều chiến thuật đẩy nhà nhanh đã ra đời để phục vụ mục đích tối thượng này, và như một lẽ đương nhiên, tựa game này cũng có rất nhiều hero sinh ra để phòng thủ nhà cực kì tuyệt vời.</p>
<p class="time">
<a href="javascript:void(0);" class="author">MissingMiddle</a>
 - 
<a href="/esport.chn" class="categame">Esport</a>
26/07/2017 14:32
</p>
</li>




<li class="" data-boxtype="timelineposition" data-locked="false" data-posid="155968" data-order="37" id="">
<a href="/tai-mien-phi-nhung-thuy-chien-lai-ban-code-20170726134634566.chn" title="Tải miễn phí nhưng Thủy Chiến lại bán code">
<img alt="Tải miễn phí nhưng Thủy Chiến lại bán code"
src="http://genknews.genkcdn.vn/zoom/220_160/2017/http-channel-vcmedia-vn-prupload-156-2017-07-img20170726104719550-1501051641631.jpg"
width="220px"
height="160px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726134634566 title="Tải miễn phí nhưng Thủy Chiến lại bán code" href="/tai-mien-phi-nhung-thuy-chien-lai-ban-code-20170726134634566.chn">Tải miễn phí nhưng Thủy Chiến lại bán code</a></h3>
<p>Khi phản ứng của cộng đồng đã rõ ràng, VTC Mobile công bố Thủy Chiến sẽ cho phép tải miễn phí, tuy nhiên NPH này lại tung ra bán Code khiến cộng đồng một lần nữa dậy sóng.</p>
<p class="time">
<a href="javascript:void(0);" class="author">A.D</a>
 - 
<a href="/mobile-social.chn" class="categame">Mobile & Social</a>
26/07/2017 14:30
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="155982" data-order="38" id="">
<a href="/lmht-vua-roi-khoi-gam-sergh-da-gia-nhap-ffq-cua-qtv-20170726142418175.chn" title="LMHT: Vừa rời khỏi GAM, Sergh đã gia nhập FFQ của QTV">
<img alt="LMHT: Vừa rời khỏi GAM, Sergh đã gia nhập FFQ của QTV"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/page-1501053764424.jpg"
width="310px"
height="200px"
 />

</a>

<h3><a data-linktype='newsdetail'data-id=20170726142418175 title="LMHT: Vừa rời khỏi GAM, Sergh đã gia nhập FFQ của QTV" href="/lmht-vua-roi-khoi-gam-sergh-da-gia-nhap-ffq-cua-qtv-20170726142418175.chn">LMHT: Vừa rời khỏi GAM, Sergh đã gia nhập FFQ của QTV</a></h3>
<p>Cựu hỗ trợ của đương kim vô địch MDCS sẽ chính thức gia nhập đội tuyển ROG Friends.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Triệu Tử Long</a>
 - 
<a href="/esport.chn" class="categame">Esport</a>
26/07/2017 14:24
</p>
</li>




<li class="top" data-boxtype="timelineposition" data-locked="false" data-posid="155980" data-order="39" id="">
<a href="/doan-clip-duoc-xem-nhieu-nhat-tren-twitch-bo-dang-choi-outlast2-thi-bi-con-gai-doa-het-hon-20170726135059175.chn" title="Đoạn clip được xem nhiều nhất trên Twitch - bố đang chơi Outlast2 thì bị con gái dọa hết hồn">
<img alt="Đoạn clip được xem nhiều nhất trên Twitch - bố đang chơi Outlast2 thì bị con gái dọa hết hồn"
src="http://genknews.genkcdn.vn/zoom/310_200/2017/twitch-clip-796x397-1501051542600.jpg"
width="310px"
height="200px"
 />

</a>
<span class="pb_top">Khám phá</span>
<h3><a data-linktype='newsdetail'data-id=20170726135059175 title="Đoạn clip được xem nhiều nhất trên Twitch - bố đang chơi Outlast2 thì bị con gái dọa hết hồn" href="/doan-clip-duoc-xem-nhieu-nhat-tren-twitch-bo-dang-choi-outlast2-thi-bi-con-gai-doa-het-hon-20170726135059175.chn">Đoạn clip được xem nhiều nhất trên Twitch - bố đang chơi Outlast2 thì bị con gái dọa hết hồn</a></h3>
<p>Từ năm 2016, trang web này đưa vào sử dụng tính năng Clips, cho phép người dùng có thể cắt và chia sẻ những pha highlight của mình.</p>
<p class="time">
<a href="javascript:void(0);" class="author">Nguyễn Tuấn Tài</a>
 - 
<a href="/kham-pha.chn" class="categame">Khám phá</a>
26/07/2017 14:23
</p>
</li>
<div id="admzone14074"></div><script>admicroAD.unit.push(function () { admicroAD.show('admzone14074') });</script>


<script type="text/javascript">
(runinit = window.runinit || []).push(function () {
newsLock.relation();
// groupItem.eachOrderNews("fistUpload1", 1, 1, 15);
groupItem.eachOrderNews("fistUpload1", 2, 1, 30);
});
</script>


</ul>
</div>
<div class="per100 fl mgt10">
<div id="paging" class="clearfix"><a class="load_more" href="javascript:void(0)">Xem thêm </a></div>

</div>
<input name="ctl00$ContentPlaceHolder1$DanhSachTin_Home1$hfListNewsId" type="hidden" id="hfListNewsId" value="20170726195618441,20170726203149066,20170725234707082,20170726194213175" />
<input name="ctl00$ContentPlaceHolder1$DanhSachTin_Home1$hdUrl" type="hidden" id="hdUrl" value="home" />
<input name="ctl00$ContentPlaceHolder1$DanhSachTin_Home1$PageIndex" type="hidden" id="PageIndex" value="2" />
<script type="text/javascript">
(runinit = window.runinit || []).push(function () {
prNews.homeList();
homeNews.init();

$.ajax({
type: 'get',
url: apiUrl + '/Ajax/HomeBox_Video.aspx',
timeout: 1000 * 60 * 2,
data: {},
success: function (data) {
if (data != "") {
$("#" + "fistUpload1" + " li:eq(" + "15" + ")").after(data);
reloadSlderNew();
reloadSliderHot();
}
},
error: function (x, t, m) { }
});

$(document).ready(function () {
videoIframe.init('.newsupdate ul');
});
});
</script>



<ul id="loadgame_1" class="nodisplay">

<li><a href="/blade-and-soul.htm" title="Blade and Soul">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/3-1496118615844.jpg"
alt="Blade and Soul" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/blade-and-soul.htm" title="Blade and Soul" class="tgame-name">
Blade and Soul</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/ngao-kiem-vo-song-2.htm" title="Ngạo Kiếm Vô Song 2">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/1-1497799834697.png"
alt="Ngạo Kiếm Vô Song 2" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/ngao-kiem-vo-song-2.htm" title="Ngạo Kiếm Vô Song 2" class="tgame-name">
Ngạo Kiếm Vô Song 2</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/hotsteps-2.htm" title="HotSteps 2">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/1-1499860076149.png"
alt="HotSteps 2" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/hotsteps-2.htm" title="HotSteps 2" class="tgame-name">
HotSteps 2</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/huyet-chien-tam-quoc.htm" title="Huyết Chiến Tam Quốc">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/20-1500026161894.png"
alt="Huyết Chiến Tam Quốc" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/huyet-chien-tam-quoc.htm" title="Huyết Chiến Tam Quốc" class="tgame-name">
Huyết Chiến Tam Quốc</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/vo-dao.htm" title="Võ Đạo">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/12-560029-1487071951090.png"
alt="Võ Đạo" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/vo-dao.htm" title="Võ Đạo" class="tgame-name">
Võ Đạo</a></h3>
<p>
<span class="tscore-game">
10.0đ</span>/<span class="tvote-game">2
vote</span></p>

</li>

<li><a href="/chinh-do-2.htm" title="Chinh Đồ 2">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2016/avatar-1483005648113.png"
alt="Chinh Đồ 2" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/chinh-do-2.htm" title="Chinh Đồ 2" class="tgame-name">
Chinh Đồ 2</a></h3>
<p>
<span class="tscore-game">
10đ</span>/<span class="tvote-game">1
vote</span></p>

</li>

<li><a href="/cuu-kiem-2.htm" title="Cửu Kiếm 2">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2016/12-1482465690057-crop-1482465749494.jpg"
alt="Cửu Kiếm 2" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/cuu-kiem-2.htm" title="Cửu Kiếm 2" class="tgame-name">
Cửu Kiếm 2</a></h3>
<p>
<span class="tscore-game">
10.0đ</span>/<span class="tvote-game">2
vote</span></p>

</li>

<li><a href="/lien-quan-mobile.htm" title="Liên Quân Mobile">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2016/2-1478845016553.png"
alt="Liên Quân Mobile" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/lien-quan-mobile.htm" title="Liên Quân Mobile" class="tgame-name">
Liên Quân Mobile</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/mu-viet-nam.htm" title="MU Việt Nam">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2016/15027637-1141709715944414-6098985486924537553-n-1479806982523.png"
alt="MU Việt Nam" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/mu-viet-nam.htm" title="MU Việt Nam" class="tgame-name">
MU Việt Nam</a></h3>
<p>
<span class="tscore-game">
8.5đ</span>/<span class="tvote-game">8
vote</span></p>

</li>

<li><a href="/pham-nhan-tu-tien.htm" title="Phàm Nhân Tu Tiên">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2016/673x373-1478581706636-crop-1478581752243.png"
alt="Phàm Nhân Tu Tiên" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/pham-nhan-tu-tien.htm" title="Phàm Nhân Tu Tiên" class="tgame-name">
Phàm Nhân Tu Tiên</a></h3>
<p>
<span class="tscore-game">
8.5đ</span>/<span class="tvote-game">35
vote</span></p>

</li>

<li class="clearboth"></li>
</ul>


<ul id="loadgame_2" class="nodisplay">

<li><a href="/cuu-am-truyen-ky.htm" title="Cửu Âm Truyền Kỳ">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/1-1500364729318.png"
alt="Cửu Âm Truyền Kỳ" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/cuu-am-truyen-ky.htm" title="Cửu Âm Truyền Kỳ" class="tgame-name">
Cửu Âm Truyền Kỳ</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/game-of-dragons.htm" title="Game of Dragons">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/1-1500891827061.png"
alt="Game of Dragons" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/game-of-dragons.htm" title="Game of Dragons" class="tgame-name">
Game of Dragons</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/huyet-kiem.htm" title="Huyết Kiếm">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/1-1498819858069.png"
alt="Huyết Kiếm" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/huyet-kiem.htm" title="Huyết Kiếm" class="tgame-name">
Huyết Kiếm</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/dai-kiem-vuong.htm" title="Đại Kiếm Vương">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/4-1495442178839-crop-1495442388354.png"
alt="Đại Kiếm Vương" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/dai-kiem-vuong.htm" title="Đại Kiếm Vương" class="tgame-name">
Đại Kiếm Vương</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/bleach-online.htm" title="Bleach Online">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/3-1495221171794.png"
alt="Bleach Online" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/bleach-online.htm" title="Bleach Online" class="tgame-name">
Bleach Online</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/one-piece-dai-chien.htm" title="One Piece Đại Chiến">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/6-1495451230221.jpg"
alt="One Piece Đại Chiến" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/one-piece-dai-chien.htm" title="One Piece Đại Chiến" class="tgame-name">
One Piece Đại Chiến</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/vo-song-chien-ky.htm" title="Vô Song Chiến Ký">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/photo-1-1486620388815-crop-1486620544346.jpg"
alt="Vô Song Chiến Ký" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/vo-song-chien-ky.htm" title="Vô Song Chiến Ký" class="tgame-name">
Vô Song Chiến Ký</a></h3>
<p>
<span class="tscore-game">
5.0đ</span>/<span class="tvote-game">8
vote</span></p>

</li>

<li><a href="/vo-lam-truyen-ky-web.htm" title="Võ Lâm Truyền Kỳ Web">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/14-1493366934704.jpg"
alt="Võ Lâm Truyền Kỳ Web" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/vo-lam-truyen-ky-web.htm" title="Võ Lâm Truyền Kỳ Web" class="tgame-name">
Võ Lâm Truyền Kỳ Web</a></h3>
<p>
<span class="tscore-game">
6.0đ</span>/<span class="tvote-game">16
vote</span></p>

</li>

<li><a href="/thanh-long-dao.htm" title="Thanh Long Đao">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/4-1493720463886.jpg"
alt="Thanh Long Đao" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/thanh-long-dao.htm" title="Thanh Long Đao" class="tgame-name">
Thanh Long Đao</a></h3>
<p>
<span class="tscore-game">
7.0đ</span>/<span class="tvote-game">5
vote</span></p>

</li>

<li><a href="/nhat-thong-giang-ho.htm" title="Nhất Thống Giang Hồ">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/4-1488531231518.jpg"
alt="Nhất Thống Giang Hồ" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/nhat-thong-giang-ho.htm" title="Nhất Thống Giang Hồ" class="tgame-name">
Nhất Thống Giang Hồ</a></h3>
<p>
<span class="tscore-game">
5.5đ</span>/<span class="tvote-game">4
vote</span></p>

</li>

<li class="clearboth"></li>
</ul>


<ul id="loadgame_3" class="nodisplay">

<li><a href="/thieu-nien-tay-du.htm" title="Thiếu Niên Tây Du">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/1-1499860197486.png"
alt="Thiếu Niên Tây Du" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/thieu-nien-tay-du.htm" title="Thiếu Niên Tây Du" class="tgame-name">
Thiếu Niên Tây Du</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/thuy-chien.htm" title="Thủy Chiến">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/22-1500364247653.jpg"
alt="Thủy Chiến" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/thuy-chien.htm" title="Thủy Chiến" class="tgame-name">
Thủy Chiến</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/ky-si-rong-dragon-knights.htm" title="Kỵ Sĩ Rồng - Dragon Knights">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/200x200-1500034939585.gif.png"
alt="Kỵ Sĩ Rồng - Dragon Knights" width="120px" height="90px"
class='lazy' data-original='http://genknews.genkcdn.vn/zoom/120_90/2017/200x200-1500034939585.gif'
/>
</a>
<h3 class="pdt10">
<a href="/ky-si-rong-dragon-knights.htm" title="Kỵ Sĩ Rồng - Dragon Knights" class="tgame-name">
Kỵ Sĩ Rồng - Dragon Knights</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/the-queen.htm" title="The Queen">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/200x200-1499335776843.png"
alt="The Queen" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/the-queen.htm" title="The Queen" class="tgame-name">
The Queen</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/chinh-do-1-mobile.htm" title="Chinh Đồ 1 Mobile">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/1-1497425604512.jpg"
alt="Chinh Đồ 1 Mobile" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/chinh-do-1-mobile.htm" title="Chinh Đồ 1 Mobile" class="tgame-name">
Chinh Đồ 1 Mobile</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/sword-and-magic.htm" title="Sword and Magic">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/1-1497567775456.png"
alt="Sword and Magic" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/sword-and-magic.htm" title="Sword and Magic" class="tgame-name">
Sword and Magic</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/cong-thanh-chien-mobile.htm" title="Công Thành Chiến Mobile">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/673x373-1-1500034623970.jpg"
alt="Công Thành Chiến Mobile" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/cong-thanh-chien-mobile.htm" title="Công Thành Chiến Mobile" class="tgame-name">
Công Thành Chiến Mobile</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/heroes-truyen-ky.htm" title="Heroes Truyền Kỳ">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/3-1497428882206.jpg"
alt="Heroes Truyền Kỳ" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/heroes-truyen-ky.htm" title="Heroes Truyền Kỳ" class="tgame-name">
Heroes Truyền Kỳ</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li><a href="/thien-nu-mobile.htm" title="Thiện Nữ Mobile">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/4-1493687078639.jpg"
alt="Thiện Nữ Mobile" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/thien-nu-mobile.htm" title="Thiện Nữ Mobile" class="tgame-name">
Thiện Nữ Mobile</a></h3>
<p>
<span class="tscore-game">
10đ</span>/<span class="tvote-game">1
vote</span></p>

</li>

<li><a href="/quan-van-truong-mobile.htm" title="Quan Vân Trường Mobile">
<img
src="http://genknews.genkcdn.vn/zoom/120_90/2017/10-1497515096295.jpg"
alt="Quan Vân Trường Mobile" width="120px" height="90px"

/>
</a>
<h3 class="pdt10">
<a href="/quan-van-truong-mobile.htm" title="Quan Vân Trường Mobile" class="tgame-name">
Quan Vân Trường Mobile</a></h3>
<p>
<span class="tscore-game">
0.0đ</span>/<span class="tvote-game">0
vote</span></p>

</li>

<li class="clearboth"></li>
</ul>


</div>

<div class="contentright adm-rightsection">
<div id="mingid_comments_rightbar"></div>
  

 <div>

<div id="admzone59"></div>
<div id="admzone498"></div>
</div>
<div>

<div id="admzone60"></div>
<div id="admzone962"></div>
</div>
<div>

<div id="admzone360"></div>

</div>
</div>
<script>
admicroAD.unit.push(function () { admicroAD.show('admzone59') });
admicroAD.unit.push(function () { admicroAD.show('admzone498') });
admicroAD.unit.push(function () { admicroAD.show('admzone60') });
admicroAD.unit.push(function () { admicroAD.show('admzone962') });
admicroAD.unit.push(function () { admicroAD.show('admzone360') });
</script>

</div>
<div class="clearboth" id="admStickyFooter"></div>
</div>

<div class="footer fl">
<div class="bottom_menu">
<div class="wp980-mauto">
 
<ul>
<li><a title="TRANG CHỦ" href="/">TRANG CHỦ</a></li>
<li><a title="GAME ONLINE" href="/game-online.chn">GAME ONLINE</a></li>
<li><a title="THỊ TRƯỜNG" href="/thi-truong.chn">THỊ TRƯỜNG</a></li>
<li><a title="PC CONSOLE" href="/pc-console.chn">PC CONSOLE</a></li>
<li><a title="eSPORT" href="/esport.chn">eSPORT</a></li>
<li><a title="MOBILE &amp; SOCIAL" href="/mobile-social.chn">MOBILE &amp; SOCIAL</a></li>
  
<li><a title="RSS GameK" href="/rss.chn">RSS</a></li>
</ul>
</div>
</div>
<div class="info">
<div class="wp980-mauto">
<div class="left_info">
<a href="http://www.vccorp.vn/" target="_blank" rel="nofollow" title="Vccorp.vn - Công ty cổ phần truyền thông Việt Nam" style="display: block;width: 140px;">
<span class="sprite vcclogo"></span>
</a>
<p>
<br/>
© Copyright 2007 - 2017 – <b>Công ty Cổ phần VCCorp</b><br />
Tầng 17, 19, 20, 21 Toà nhà Center Building - Hapulico Complex, Số 1 Nguyễn Huy Tưởng, Thanh Xuân, Hà Nội.<br />
Giấy phép thiết lập trang thông tin điện tử tổng hợp trên internet số 1395/GP-TTĐT do Sở <br /> Thông tin và Truyền thông TP Hà Nội cấp ngày 15/8/2012
</p>
</div>
<div class="center_info">
<h3>Ban biên tập GameK:</h3>
<p>
Tầng 21, Tòa nhà Center Building - Hapulico Complex, Số 1 Nguyễn Huy Tưởng, Thanh Xuân, Hà Nội.
<br />Điện thoại: 024.7309.5555 Máy lẻ 41301 <br/> Email: <a href="mailto:info@gamek.vn" rel="nofollow">info@gamek.vn</a>
<br />Chịu trách nhiệm quản lý nội dung: Bà Nguyễn Bích Minh
<br />VPĐD tại TP.HCM: Tầng 6 Tòa nhà 123
<br />123 Võ Văn Tần, phường 6, quận 3, Tp. HCM
</p>
</div>
<div class="right_info">
<p>
<span class="lienhequangcaofooter">Liên hệ quảng cáo:</span>
<span class="lienhequangcaofooterAdmicro">Admicro</span>
<br />Hotline hỗ trợ quảng cáo: 0942.86.11.33
<br />Email: giaitrixahoi@admicro.vn
<br /><strong>Hỗ trợ & CSKH: Admicro</strong>

<br />Address: Tầng 20, Tòa nhà Center Building - Hapulico Complex, Số 1 Nguyễn Huy Tưởng, Thanh Xuân, Hà Nội.
</p>
</div>
</div>
</div>
</div>

<div id="VID_taskbar" class="VID_taskbar" rel="0e279e8e03d18c297341deb9313b79d3"></div>
</div>
</form>
<script>
var _laq = _laq || [];
_laq.push(['_setApp', 'LA-140348453-12']);
_laq.push(['_trackPageview']);
(runinit = window.runinit || []).push(function () {
(function () {
var la = document.createElement('script'); la.type = 'text/javascript'; la.async = true;
la.src = "http://reporting.gamek.channelvn.net/scripts/log.js";
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(la, s);
})();
});

</script>


</body>
</html><!--s: 7/27/2017 10:02:06 AM-->