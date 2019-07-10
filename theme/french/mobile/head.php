<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
add_javascript('<script src="'.G5_THEME_JS_URL.'/jquery.sidr.min.js"></script>', 0);
add_javascript('<script src="'.G5_THEME_JS_URL.'/unslider.min.js"></script>', 10);
?>

<!-- header start { -->
<header id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div class="to_content"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_MOBILE_PATH.'/newwin.inc.php'; // 팝업레이어
    } ?>

    <div id="hd_wrapper">
		<button type="button" id="btn_hdcate" class="gnb_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only">전체메뉴열기</span></button>     
        
        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/m_logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>
        
        <div id="tnb">
	        <ul>
	            <?php if ($is_member) {  ?> 
	            <li class="lgu tnb_device_pc"><a href="<?php echo G5_BBS_URL ?>/logout.php"><span class="tnb_pc">로그아웃</span><span class="tnb_m"><i class="fa fa-sign-out" aria-hidden="true"></i></span></a></li>
	            <?php } else {  ?>
	            <li class="tnb_device_pc"><a href="<?php echo G5_BBS_URL ?>/register.php"><span class="tnb_pc">회원가입</span></a></li>
	            <li class="tnb_device_pc"><a href="<?php echo G5_BBS_URL ?>/login.php"><span class="tnb_pc">로그인</span><span class="tnb_m"><i class="fa fa-sign-in" aria-hidden="true"></i></span></a></li>
	            <?php }  ?>
	        </ul>
	    </div>
		
		<button class="op_search"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
        <div class="hd_sch_wr">
            <fieldset id="hd_sch">
                <h2>사이트 내 전체검색</h2>
                <form name="fsearchbox" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);" method="get">
                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                <input type="hidden" name="sop" value="and">
                <input type="text" name="stx" id="sch_stx" placeholder="검색어를 입력하세요!" required maxlength="20">
                <button type="submit" value="검색" id="sch_submit"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
                </form>

                <script>
                function fsearchbox_submit(f)
                {
                    if (f.stx.value.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                    var cnt = 0;
                    for (var i=0; i<f.stx.value.length; i++) {
                        if (f.stx.value.charAt(i) == ' ')
                            cnt++;
                    }

                    if (cnt > 1) {
                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    return true;
                }
                </script>
			</fieldset>
			<button class="cls_search"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">검색 닫기</span></button>
		</div>
	</div>
	<script>
	$(".cls_search").on("click", function() {
        $(".hd_sch_wr").hide();
    });

    $(".op_search").on("click", function() {
        $(".hd_sch_wr").show();
    })

    $("#hd_sch .btn_close").on("click", function() {
        $("#hd_sch").hide();
    })
    $(document).ready(function() {
      $('#btn_hdcate, .gnb_close_btn').sidr();
    });
    </script>  
</header>
<!-- } header 끝 -->       


<!-- wrapper start { -->
<div id="wrapper">
	<?php if(defined('_INDEX_')) { ?>
	<!--메인배너-->
	<div id="main_bn">
	    <ul class="bn_ul">
	        <li class="bn_bg2">
	            <div class="bn_wr">
	                <div class="bn_txt">
	                    <h2>MEDIA</h2>
	                    <p>Agency happenings, press, and perspectives on branding</p>
	                    <a href="#none">VIEW <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
	                </div>
	            </div>
	        </li>
	        <li class="bn_bg1">
	            <div class="bn_wr">
	                <div class="bn_txt">
	                    <h2>MEDIA</h2>
	                    <p>Agency happenings, press, and perspectives on branding</p>
	                    <a href="#none">VIEW <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
	                </div>
	            </div>
	        </li>
	    </ul>
	    <div class="bn_btn">
	        <a href="#" class="unslider-arrow prev">Previous slide</a>
	        <a href="#" class="unslider-arrow next">Next slide</a>
	    </div>
	</div>
	<!--메인배너-->
	<script>
	$(function() {
	    var unslider = $("#main_bn").unslider({
	        speed: 700,   //  The speed to animate each slide (in milliseconds)
	        delay: 5000,  //  The delay between slide animations (in milliseconds)
	        keys: true,   //  Enable keyboard (left, right) arrow shortcuts
	        dots: false,  //  Display dot navigation
	        fluid: false  //  Support responsive design. May break non-responsive designs
	    });
	    
	    $('.unslider-arrow').click(function() {
	        var fn = this.className.split(' ')[1];
	
	        //  Either do unslider.data('unslider').next() or .prev() depending on the className
	        unslider.data('unslider')[fn]();
	        });
	    });
	</script>
	<?php } ?>
	
	<!-- container_wr start { -->
    <div id="container_wr">
    	
	   	<!-- container start { -->
	    <div id="container">
			<?php if (!defined("_INDEX_") && !$wr_id) { ?><h2 id="container_title" class="top" title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></h2><?php } ?>
