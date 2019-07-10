<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>
</div>

<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">
    <?php echo popular('theme/basic'); // 인기검색어, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정  ?>
    <?php echo visit('theme/basic'); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
    <div id="ft_company">
    </div>
    <div id="ft_copy">
        <div>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보취급방침</a>
            <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">서비스이용약관</a>
            Copyright &copy; <b>Homzzang.com</b> All rights reserved.<br>
			<!-- 테마 저작권 삭제 금지 시작-->
			<a href="http://www.homzzang.com" target="_blank" id="designed">Designed by Snbi</a>			
			    <?php /*
			     ■ hz-black-free 테마 저작권 안내 (2015.12.05)
				 
			     1. 테마 제작자 링크와 저작권 규정 삭제 및 숨기지 않는 조건으로 무료 사용 허락. 
			     2. 위반 시 1차 경고 (=30일간의 수정 기간) 준 후, 무시할 경우 법적조치
				 3. 테마 제작자 삭제 원하시면, 유료 블랙 테마 (hz-black) 이용 바람.
				 
				 By 홈짱닷컴 (Homzzang.com) 신비 */
				 ?>
            <!-- 테마 저작권 삭제 금지 종료-->
            <a href="#hd" id="ft_totop">상단으로 <i class="fa fa-arrow-up fa-lg" aria-hidden="true"></i></a>
        </div>
    </div>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<a href="<?php echo get_device_change_url(); ?>" id="device_change">모바일 버전으로 보기</a>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

</div> <!--homzzang 전체박스-->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>