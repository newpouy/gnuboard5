<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
add_javascript('<script src="'.G5_THEME_JS_URL.'/jquery.sidr.min.js"></script>', 0);
?>

<!-- 상단 시작 { -->
<header id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
    <div id="hd_wrapper">
    	
    	<button type="button" id="btn_hdcate" class="gnb_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only">전체메뉴열기</span></button>     
        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>

        <div id="tnb">
	        <ul>
	            <?php if ($is_member) {  ?> 
	            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"><i class="fa fa-cog" aria-hidden="true"></i> 정보수정</a></li>
	            <li><a href="<?php echo G5_BBS_URL ?>/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> 로그아웃</a></li>
	            <?php if ($is_admin) {  ?>
	            <li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>"><b><i class="fa fa-user-circle" aria-hidden="true"></i> 관리자</b></a></li>
	            <?php }  ?>
	            <?php } else {  ?>
	            <li><a href="<?php echo G5_BBS_URL ?>/register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> 회원가입</a></li>
	            <li><a href="<?php echo G5_BBS_URL ?>/login.php"><b><i class="fa fa-sign-in" aria-hidden="true"></i> 로그인</b></a></li>
	            <?php }  ?>
	
	        </ul>
	    </div>

		<button class="op_search"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
        <div class="hd_sch_wr">
            <fieldset id="hd_sch">
                <legend>사이트 내 전체검색</legend>
                <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                <input type="hidden" name="sop" value="and">
                <label for="sch_stx" class="sound_only">검색어 필수</label>
                <input type="text" name="stx" id="sch_stx" maxlength="20" placeholder="검색어를 입력해주세요">
                <button type="submit" id="sch_submit" value="검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
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
                
            <?php echo popular('theme/basic'); // 인기검색어, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정  ?>
        </div>
        
        <!-- <ul id="hd_qnb">
            <li><a href="<?php echo G5_BBS_URL ?>/faq.php"><i class="fa fa-question" aria-hidden="true"></i><span>FAQ</span></a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/qalist.php"><i class="fa fa-comments" aria-hidden="true"></i><span>1:1문의</span></a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/current_connect.php" class="visit"><i class="fa fa-users" aria-hidden="true"></i><span>접속자</span><strong class="visit-num"><?php echo connect('theme/basic'); // 현재 접속자수, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정  ?></strong></a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/new.php"><i class="fa fa-history" aria-hidden="true"></i><span>새글</span></a></li>
        </ul> -->
    </div>

    <script>
    
    // $(function(){
        // $(".gnb_menu_btn").click(function(){
            // $("#gnb_all").show();
        // });
        // $(".gnb_close_btn").click(function(){
            // $("#gnb_all").hide();
        // });
    // });
	
	$("#btn_hdcate").on("click", function() {
        $("#category").show();
    });

    $(".menu_close").on("click", function() {
        $(".menu").hide();
    });
     $(".cate_bg").on("click", function() {
        $(".menu").hide();
    });

    $("#btn_hdsch").on("click", function() {
        $("#hd_sch").show();
    })

    $("#hd_sch .btn_close").on("click", function() {
        $("#hd_sch").hide();
    })
    $(document).ready(function() {
      $('#btn_hdcate').sidr();
    });
    </script>
</header>
<!-- } 상단 끝 -->


<!-- wrapper start { -->
<div id="wrapper">
	
	<!-- container_wr start { -->
    <div id="container_wr">
    	
	   	<!-- container start { -->
	    <div id="container">
	        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php } ?>

