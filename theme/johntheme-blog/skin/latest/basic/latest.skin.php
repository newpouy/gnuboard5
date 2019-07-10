<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>


<div class=" row " style="display: flex; justify-content: space-around; max-height: 223px;
    overflow: hidden;">
    <?php for ($i=0; $i<count($list); $i++) {  ?>
        <div  class="card card-body col-3">



            <?php
            echo "<a href=\"".$list[$i]['href']."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";

            else
                echo $list[$i]['subject'];
              echo "</a>";

            ?>
            <span class="lt_date"><?php echo $list[$i]['wr_content'] ?></span>

        </div>
    <?php }  ?>
</div>
