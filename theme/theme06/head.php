<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}


include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="../img/TU-1.jpg" style="width:100%">
  <a href="../#company" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>Company</p>
  </a>
  <a href="../#Business" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>Business</p>
  </a>
  <a href="../#Service" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>Service</p>
  </a>
  <a href="./board.php?bo_table=gallery" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
<i class="fa fa-file-picture-o" style="font-size:40px"></i>
    <p>Gallery</p>
  </a>
    <a href="./board.php?bo_table=notice" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
<i class="fa fa-book" style="font-size:36px"></i>
    <p>Board</p>
  </a>
   <a href="../#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>Contact</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="../#company" class="w3-bar-item w3-button" style="width:25% !important">Company</a>
    <a href="../#Business" class="w3-bar-item w3-button" style="width:25% !important">Business</a>
    <a href="../#Service" class="w3-bar-item w3-button" style="width:25% !important">Service</a>
    <a href="./board.php?bo_table=gallery" class="w3-bar-item w3-button" style="width:25% !important">Gallery</a>
    <a href="./board.php?bo_table=notice" class="w3-bar-item w3-button" style="width:25% !important">Board</a>
    <a href="../#contact" class="w3-bar-item w3-button" style="width:25% !important">Contact</a>
  </div>
</div>


<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
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

            <?php if(G5_COMMUNITY_USE) { ?>
            <li class="tnb_left tnb_shop"><a href="<?php echo G5_SHOP_URL; ?>/"><i class="fa fa-shopping-bag" aria-hidden="true"></i> 쇼핑몰</a></li>
            <li class="tnb_left tnb_community"><a href="<?php echo G5_URL; ?>/"><i class="fa fa-home" aria-hidden="true"></i> 커뮤니티</a></li>
            <?php } ?>

        </ul>
  
    </div>
    
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
  