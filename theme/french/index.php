<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

	<div class="latest_top">
	    <!-- 사진 최신글1 { -->
	    <?php
	    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
	    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
	    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
	    echo latest('theme/pic_basic', 'free', 4, 30);
	    ?>
	    <!-- } 사진 최신글1 끝 -->
	
	    <!-- 사진 최신글2 { -->
	    <?php
	    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
	    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
	    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
	    echo latest('theme/pic_basic', 'gallery', 4, 30);
	    ?>
	    <!-- } 사진 최신글2 끝 -->
	</div>

	
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>