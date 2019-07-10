<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>
    </div>
  </div>
</div>
<!-- } 콘텐츠 끝 -->
<br><br><br>

<!-- 하단 시작 { -->

<div  class="aboutMeBackgroundTail parallax ">
<div class="overlay">

<br><br><br><br><br>
  <p class="text-center"style="color:white;  display: block;
    line-height: 50px;
    font-family: 'Rozha One';
    font-size: 44px;
    text-transform: uppercase;
    text-shadow: 3px 1px 3px rgba(0,0,0,0.1); ">Write anything you want </p>

</div>
</div>
<style media="screen">

.overlay {
	width: 100%;
	height: 280px;
	position: absolute;
	z-index: 3;
	background-color: rgba(0, 0, 0, 0.4);
}




.aboutMeBackgroundTail.parallax {
  background: url("https://www.dualmonitorbackgrounds.com/albums/WPbrutality/view_from_burj_khalifa_dubai-wallpaper-2560x1024.jpg")  fixed top;
  width: 100%;
  height: 280px;

  }


</style>

<div class="" style="padding: 100px 0;background-color: #232220;color: #bdbdbd;">


    <div class="container mx-auto text-center" >


            <?php if ($is_member) {  ?>
          <div class="d-inline p-2   "><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"><i class="fa fa-cog"  style="color:white;"aria-hidden="true"></i> <span  style="color:white;">정보수정</span> </a></div>
          <div class="d-inline p-2  "><a href="<?php echo G5_BBS_URL ?>/logout.php"><i class="fa fa-sign-out" style="color:white;" aria-hidden="true"></i> <span  style="color:white;">로그아웃</span></a></div>
          <?php if ($is_admin) {  ?>
            <div class="d-inline p-2  "><a href="<?php echo G5_ADMIN_URL ?>"><b><i class="fa fa-user-circle" style="color:white;" aria-hidden="true"></i><span  style="color:white;">&nbsp; 관리자</span></b></a></div>
          <?php }  ?>
          <?php } else {  ?>
            <div class="d-inline p-2 "><a href="<?php echo G5_BBS_URL ?>/register.php"><i class="fa fa-user-plus"style="color:white;" aria-hidden="true"></i> <span  style="color:white;">회원가입</span></a></div>
            <div class="d-inline p-2 "  data-toggle="modal" data-target="#exampleModal"><a href="<?php echo G5_BBS_URL ?>/login.php"><b><i class="fa fa-sign-in" style="color:white;" aria-hidden="true"></i> <span  style="color:white;">로그인</span></b></a></div>        <?php }  ?>

<br>
        <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div>
        <div id="ft_copy">Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</div>
    </div>

    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
        <script>

        $(function() {
            $("#top_btn").on("click", function() {
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            });
        });
        </script>

        <!-- Modal -->
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-body"></div>

           </div>
         </div>
       </div>

       <script>
       jQuery(function($) {
         $(document).on("click", "a", function(e){

           var link_href = $(this).attr("href"),
               pattern = /bbs\/login.php$/;

               console.log(link_href);


               if( link_href && pattern.test(link_href) ){    // true 이면 로그인링크를 클릭한것임
                   e.preventDefault();

                   $.ajax({
                     url:link_href
                   }).done(function(data){

                     $(".modal-body").html(data);
                   });

               }

         });
       });
       </script>




<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
<br>
</div>
