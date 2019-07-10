<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

</div>
<!-- /.container -->
<!-- } 콘텐츠 끝 -->

<!-- 하단 시작 { -->
<?php
if(defined('_INDEX_')) { // index에서만 실행
?>
	<!-- 접속자 통계 -->
	<div class="py-1 mt-2 bg-light border-top">
	  <?php echo visit('theme/basic'); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
  </div>
<?php } ?> 
 
  <!-- Footer -->
  <footer class="py-4 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; <?php echo $config['cf_title']; ?> 2018. All rights reserved.</p>
    </div>
    <!-- /.container -->
  </footer>

</main>    
<!--    
<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { 
}
?>
-->

<?php
if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>
<!-- } 하단 끝 -->

<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>

<!-- Bootstrap core JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<script>
// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>