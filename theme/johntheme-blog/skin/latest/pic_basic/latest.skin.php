<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 320;
$thumb_height = 180;
?>
<style media="screen">


</style>

      <div class="row text-center mx-auto m-3 p-3" style="justify-content: center;">

      <?php
      for ($i=0; $i<count($list); $i++) {
      $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

      if($thumb['src']) {
          $img = $thumb['src'];
      } else {
          $youtube_key = substr($list[$i]['link'][1],-11,11);
          $img = "https://img.youtube.com/vi/$youtube_key/mqdefault.jpg";
      }
      $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
      ?>

              <a style="    margin: 0 5px;"  class="" href="<?php echo $list[$i]['href'] ?>"><?php echo $img_content; ?></a>

      <?php }  ?>

      </div>
