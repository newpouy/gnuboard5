<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>

<div id="sidr">
	<button type="button" class="gnb_close_btn"><i class="fa fa-times" aria-hidden="true"></i></button>
	<?php echo outlogin('theme/basic'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>  
    <div id="gnb_all">
        <h2>전체메뉴</h2>
        <ul class="gnb_1dul">
	    <?php
	    $sql = " select *
	                from {$g5['menu_table']}
	                where me_mobile_use = '1'
	                  and length(me_code) = '2'
	                order by me_order, me_id ";
	    $result = sql_query($sql, false);

	    for($i=0; $row=sql_fetch_array($result); $i++) {
	    ?>
	        <li class="gnb_1dli">
	            <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
	            <?php
	            $sql2 = " select *
	                        from {$g5['menu_table']}
	                        where me_mobile_use = '1'
	                          and length(me_code) = '4'
	                          and substring(me_code, 1, 2) = '{$row['me_code']}'
	                        order by me_order, me_id ";
	            $result2 = sql_query($sql2);

	            for ($k=0; $row2=sql_fetch_array($result2); $k++) {
	                if($k == 0)
	                    echo '<button class="btn_gnb_op">하위분류</button><ul class="gnb_2dul">'.PHP_EOL;
	            ?>
	                <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><span></span><?php echo $row2['me_name'] ?></a></li>
	            <?php
	            }

	            if($k > 0)
	                echo '</ul>'.PHP_EOL;
	            ?>
	        </li>
	    <?php
	    }

	    if ($i == 0) {  ?>
	        <li id="m_gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하세요.<?php } ?></li>
	    <?php } ?>
	    </ul>
	</div>
	<ul class="shortcut">
        <li><a href="<?php echo G5_BBS_URL ?>/faq.php">자주묻는 질문</a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/new.php">새글</a></li>
        <li><a href="<?php echo G5_BBS_URL ?>/qalist.php">1:1문의</a></li>
        <li class="hd_visit">
            <a href="<?php echo G5_BBS_URL ?>/current_connect.php">접속자 <span class="visit_num"><?php echo connect('theme/basic'); // 현재 접속자수 ?></span></a>
        </li>
    </ul>
    <?php echo visit('theme/basic'); // 방문자수 ?>
</div>

<script>
$(function ($) {
	$(".btn_gnb_op").click(function(e){
	$(this).toggleClass("btn_gnb_cl").next(".gnb_2dul").slideToggle(300);
    });
});
</script>