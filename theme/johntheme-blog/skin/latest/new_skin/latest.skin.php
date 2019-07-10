
<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">', 0);

$thumb_width = 270;
$thumb_height = 200;
?>


<style>
  .owl-nav{
    text-align: center;
    font-size: 28px;
    margin: -30px;
    visibility: hidden;
  }
  .owl-dots{
    text-align: center;
  }
  .owl-carousel .owl-item img {
    display: block;
    width: 126%;
  }
</style>





    <div class="container mt-2 mb-1" >


      <div class="owl-carousel owl-theme" >

    <?php
    for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" width="'.$thumb_width.'" height="'.$thumb_height.'" style="margin-bottom: 5px; height: 90%;">';


    ?>


            <div class="item container">
              <div class="hovereffect" >
                <img class="img-responsive" src="<?php echo $img; ?>" alt="<?php echo $thumb['alt'];  ?>">
                    <div class="overlay">

                        <p style="text-align:center;">
                          <br><br>
                          <a href="<?php echo $list[$i]['href'] ?>"  style="text-decoration:none; color:white;">
                            <?php if ($list[$i]['is_notice'])
                              echo "<strong>".$list[$i]['subject']."</strong>";
                                  else
                              echo $list[$i]['subject'];  ?> </a>
                        </p>

                      </div>
              </div>

            <?php


            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

             //echo $list[$i]['icon_reply']." ";
            // if ($list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
            //if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;


            ?>





           </div>

    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>

      </div>
      </div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
<script>
var owl = $('.owl-carousel');

console.log( owl );

owl.owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});
</script>
