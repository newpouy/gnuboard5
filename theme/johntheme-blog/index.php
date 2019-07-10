<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<style media="screen">
  .carousel-item{
    height: 100vh;
    min-height: 300px;
    background: no-repeat center center scroll;
    -webkit-background-size:cover;
    background-size: cover;
  }
  .carousel-caption{
    bottom:270px;
  }
  .carousel-caption h5{
    font-size: 45px;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-top:25px;
  }
  .carousel-caption p{
    width: 75%;
    margin:auto;
    font-size: 18px;
    line-height:1.9;
  }
  .navbar-light .navbar-brand{
    color: #fff;
    font-size:25px;
    text-transform: uppercase;
    font-weight:bold;
    letter-spacing:2px;
  }


  .ml12 {
    font-weight: 200;
    font-size: 1.8em;
    text-transform: uppercase;
    letter-spacing: 0.5em;
  }

  .ml12 .letter {
    display: inline-block;
    line-height: 1em;
  }

  .ml11 {
    font-weight: 900;
    font-size: 3.5em;
  }

  .ml11 .text-wrapper {
    position: relative;
    display: inline-block;
    padding-top: 0.1em;
    padding-right: 0.05em;
    padding-bottom: 0.15em;
  }

  .ml11 .line {
    opacity: 0;
    position: absolute;
    left: 0;
    height: 100%;
    width: 3px;
    background-color: #fff;
    transform-origin: 0 50%;
  }

  .ml11 .line1 {
    top: 0;
    left: 0;
  }

  .ml11 .letter {
    display: inline-block;
    line-height: 1em;
  }




.d-block.w-100{
  max-height: 884px;
}

</style>



  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
    <div class="carousel-inner">
      <div class="carousel-item active" style="height:auto;">
        <img class="d-block w-100" src="https://images.unsplash.com/photo-1545029746-650c00560649?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1502&q=80"  alt="First slide">
        <div class="carousel-caption d-none d-md-block">
    <h5 class="ml7"><span class="text-wrapper">
      <span class="letters">GNU BOARD</span>
    </span></h5>
    <p class="ml12">Fun to learn programming</p>
  </div>
      </div>
      <div class="carousel-item" style="height:auto;">
        <img class="d-block w-100" src="https://images.unsplash.com/photo-1542959561-a1fff9c17591?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"  alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
    <h5 class="ml12">Blog</h5>
    <p class="ml7"><span class="text-wrapper">
      <span class="letters">Writing anything you want</span>
    </span></p>

  </div>
      </div>
      <div class="carousel-item" style="height:auto;">
        <img class="d-block w-100" src="https://images.unsplash.com/photo-1543253010-090dc1bef41f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjF9&auto=format&fit=crop&w=1500&q=80" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
        <h5 class="ml11"><span class="text-wrapper">
          <span class="line line1"></span>
          <span class="letters">Sharing</span>
        </span>
      </h1></h5>
        <p class="ml12">sharing your thought with anyone</p>
      </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>



<script type="text/javascript">
// Wrap every letter in a span
$('.ml7 .letters').each(function(){
$(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
.add({
  targets: '.ml7 .letter',
  translateY: ["1.1em", 0],
  translateX: ["0.55em", 0],
  translateZ: 0,
  rotateZ: [180, 0],
  duration: 750,
  easing: "easeOutExpo",
  delay: function(el, i) {
    return 50 * i;
  }
}).add({
  targets: '.ml7',
  opacity: 0,
  duration: 1000,
  easing: "easeOutExpo",
  delay: 1000
});

</script>
<script type="text/javascript">
// Wrap every letter in a span
$('.ml12').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
  .add({
    targets: '.ml12 .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: function(el, i) {
      return 500 + 30 * i;
    }
  }).add({
    targets: '.ml12 .letter',
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: function(el, i) {
      return 100 + 30 * i;
    }
  });


  // Wrap every letter in a span
$('.ml11 .letters').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
  .add({
    targets: '.ml11 .line',
    scaleY: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700
  })
  .add({
    targets: '.ml11 .line',
    translateX: [0,$(".ml11 .letters").width()],
    easing: "easeOutExpo",
    duration: 700,
    delay: 100
  }).add({
    targets: '.ml11 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: function(el, i) {
      return 34 * (i+1)
    }
  }).add({
    targets: '.ml11',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>


<div class="container mt-4 mb-4  text-center" >
<br><br>
  <p class="h2">Lorem Ipsum </p>
  <p class="h6">Lorem Ipsum is simply dummy text of the printing</p>
  <p style="width: 80px;
            height: 5px;
            background: #ddd;
            margin: 30px auto;"></p>
  <p style="font-size: 20px;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>


<br><br><br>
</div>

<div class="text-center">
  <?php echo visit('theme/basic'); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>

</div>




<hr>
<br>
<p class="h1 text-center mt-2 mb-2">Gallery</p>

<div class="mt-4 mb-3">
    <!--  사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/new_skin', 'gallery', 10, 23);
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>
<br>
<hr>

<style media="screen">
.ml7 {
position: relative;
font-weight: 900;
font-size: 3.7em;
}
.ml7 .text-wrapper {
position: relative;
display: inline-block;
padding-top: 0.2em;
padding-right: 0.05em;
padding-bottom: 0.1em;
overflow: hidden;
}
.ml7 .letter {
transform-origin: 0 100%;
display: inline-block;
line-height: 1em;
}
</style>




<div class="container-fluid text-center mb-3">
    <p class="h1 text-center mt-2 mb-2">Notice</p>
<!-- 최신글 시작 { -->

    <?php
    //  최신글
    $sql = " select bo_table
                from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
                where a.bo_device <> 'mobile' ";
    if(!$is_admin)
        $sql .= " and a.bo_use_cert = '' ";
    $sql .= " and a.bo_table in ('free') ";     //공지사항과 갤러리 게시판은 제외
    $sql .= " order by b.gr_order, a.bo_order ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {

    ?>
    <div class="">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', $row['bo_table'], 3, 30);
        ?>
    </div>
    <?php
    }
    ?>
    <!-- } 최신글 끝 -->

</div>

<div class="container-fluid text-center mt-5 mb-3">
<!-- 최신글 시작 { -->
<p class="h1 text-center mt-2 mb-2">Youtube</p>
    <?php
    //  최신글
    $sql = " select bo_table
                from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
                where a.bo_device <> 'mobile' ";
    if(!$is_admin)
        $sql .= " and a.bo_use_cert = '' ";
    $sql .= " and a.bo_table in ('youtube') ";     //공지사항과 갤러리 게시판은 제외
    $sql .= " order by b.gr_order, a.bo_order ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {
    ?>

        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/pic_basic', $row['bo_table'], 5, 30);
        ?>


</div>
<?php
};
?>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
