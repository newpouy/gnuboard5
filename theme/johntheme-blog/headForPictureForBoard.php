<br><br><br><br>

<div  class="aboutMeBackground parallax">
    <!-- <img src="img/aboutMe1.jpg" alt=""> -->
</div>
<style media="screen">
.aboutMeBackground.parallax {
  background: url("https://www.dualmonitorbackgrounds.com/albums/WPbrutality/view_from_burj_khalifa_dubai-wallpaper-2560x1024.jpg") no-repeat fixed top;
  width: 100%;
  height: 280px;
  }
</style>
<br>
<div  class="col-md-9 mx-auto">


<style media="screen">
@media only screen and (max-width: 1026px) {
  #thisIsForRemovingDiv {
      display: none;
  }
}
</style>

  <?php if (!defined("_INDEX_")) { ?>
    <h2 id="container_title">
    <span title="<?php echo get_text($g5['title']); ?>">
  <?php echo get_head_title($g5['title']); ?></span></h2><?php } ?>


<div  class="row">
  <div class="list-group list-group-flush col-md-3" id="thisIsForRemovingDiv">
    <br><br>
    <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=boardBasic" class="list-group-item list-group-item-action ">Board Basic</a>
    <a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=boardGallery" class="list-group-item list-group-item-action">Board Gallery</a>
    <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
    <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
    <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
  </div>
