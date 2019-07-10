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
?>

<div id="homzzang"><!--전체 박스-->

<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>


    <div id="hd_top">
        <div id="text_size">
            <!-- font_resize('엘리먼트id', '제거할 class', '추가할 class'); -->
            <button id="size_down" onclick="font_resize('container', 'ts_up ts_up2', '');">가</button>
            <button id="size_def" onclick="font_resize('container', 'ts_up ts_up2', 'ts_up');">가</button>
            <button id="size_up" onclick="font_resize('container', 'ts_up ts_up2', 'ts_up2');">가</button>
        </div>
        <ul id="tnb">
            <li><a href="<?php echo G5_BBS_URL ?>/faq.php"><i class="fa fa-question fa-lg fa-fw"></i> FAQ</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/qalist.php"><i class="fa fa-user-secret fa-lg fa-fw"></i> 1 :1문의</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/current_connect.php"><i class="fa fa-user fa-lg fa-fw"></i> 접속자 <?php echo connect('theme/basic'); // 현재 접속자수, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정  ?></a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/new.php"><i class="fa fa-list fa-lg fa-fw"></i> 새글</a></li>
        </ul>
        <ul id="tnb2">
            <?php if ($is_member) {  ?>
            <?php if ($is_admin) {  ?>
            <li><a href="<?php echo G5_ADMIN_URL ?>"><i class="fa fa-scribd fa-lg fa-fw"></i> <b>관리자</b></a></li>
            <?php }  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"><i class="fa fa-cog fa-lg fa-fw"></i> 정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php?url=<?=$urlencode?>"><i class="fa fa-power-off fa-lg fa-fw"></i> 로그아웃</a></li>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php"><i class="fa fa-user-plus fa-lg fa-fw"></i> 회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php"><i class="fa fa-sign-in fa-lg fa-fw"></i> <b>로그인</b></a></li>
            <?php }  ?>
        </ul>
    </div>


    <div id="hd_wrapper">
        <div id="logo"  style="float:left; width:24%; background:transparent;">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_THEME_IMG_URL ?>/logo_pc.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>
		<div class='ad_top' style="float:right; padding: 0px 0 0; text-align:right; width:73%; background:transparent;">
            <a href='http://www.homzzang.com' target="_blank"><img src="<?php echo G5_THEME_IMG_URL ?>/ad_top.png"></a>
		</div>
    </div>

    <hr>

    <nav id="gnb">
        <h2>메인메뉴</h2>
        <ul id="gnb_1dul">
            <?php
            $sql = " select *
                        from {$g5['menu_table']}
                        where me_use = '1'
                          and length(me_code) = '2'
                        order by me_order, me_id ";
            $result = sql_query($sql, false);
            $gnb_zindex = 999; // gnb_1dli z-index 값 설정용

            for ($i=0; $row=sql_fetch_array($result); $i++) {
            ?>
            <li class="gnb_1dli" style="z-index:<?php echo $gnb_zindex--; ?>">
                <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                <?php
                $sql2 = " select *
                            from {$g5['menu_table']}
                            where me_use = '1'
                              and length(me_code) = '4'
                              and substring(me_code, 1, 2) = '{$row['me_code']}'
                            order by me_order, me_id ";
                $result2 = sql_query($sql2);

                for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                    if($k == 0)
                        echo '<ul class="gnb_2dul">'.PHP_EOL;
                ?>
                    <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                <?php
                }

                if($k > 0)
                    echo '</ul>'.PHP_EOL;
                ?>
            </li>
            <?php
            }

            if ($i == 0) {  ?>
                <li id="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
            <?php } ?>
        </ul>
    </nav>


        <fieldset id="hd_sch">
            <legend>사이트 내 전체검색</legend>
            <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
            <input type="hidden" name="sfl" value="wr_subject||wr_content">
            <input type="hidden" name="sop" value="and">
            <label for="sch_stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
            <input type="text" name="stx" id="sch_stx" maxlength="20">
            <button type="submit" id="sch_submit" value="검색"><i class="fa fa-search fa-2x"></i></button>
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


</div>
<!-- } 상단 끝 -->

<hr>


<?php if (!defined('_INDEX_') && ($bo_table)) {  // index에서만 실행 ?>
<style>
#container {width:100%; /*background:rgba(255,255,255,0.03); */ padding:0px; box-sizing:border-box;}
</style>
<?php } ?>


<!-- 콘텐츠 시작 { -->
<div id="wrapper">

    <?php if(defined('_INDEX_') || !$bo_table) {  // index에서만 실행 ?>
    <div id="aside">
        <?php echo outlogin('theme/basic'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>

	    <div id="ad_side" style="margin-top:10px; padding:0; text-align:center;">
            <a href="http://www.homzzang.com"><img src="<?php echo G5_THEME_IMG_URL ?>/ad_side.png" alt="<?php echo $config['cf_title']; ?>" style="width:250px; border-radius:10px;"></a>
        </div>

        <?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
	   <div style="clear:both;"></div>
    </div>
    <?php } ?>

    <div id="container">
        <?php if ((!$bo_table || $w == 's' ) && !defined("_INDEX_")) { ?><div id="container_title"><?php echo $g5['title'] ?></div><?php } ?>

