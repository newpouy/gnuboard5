<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/head.php');
    return;
}


include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
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

<br><br><br>


<div id="wrapper">

    <div id="container">
    <?php if (!defined("_INDEX_")) { ?><h2 id="container_title" class="top" title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></h2><?php } ?>
