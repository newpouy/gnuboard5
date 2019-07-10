<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

global $is_admin;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$visit_skin_url.'/style.css">', 0);
?>
<script src="https://cdn.jsdelivr.net/npm/countup@1.8.2/dist/countUp.min.js"></script>
<!-- 접속자집계 시작 { -->

<style media="screen">
  .size_big_round {
  background: black;
  background-size: cover;
  padding: 0 10px;
  margin: 10px 10px;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  line-height: 50px;
  font-size: 1em;
  color: white;
  };

</style>


<div class="container mx-auto text-center">
  <ul  class="text-center ml-auto"style="display:flex; justify-content:center">
      <li class=" size_big_round  " ><strong  id="countup1"></strong><br>
      <span class="color_1"></span>오늘</li>

      <li class=" size_big_round  " ><strong id="countup2"></strong><br>
      <span class=""></span> 어제</li>

      <li class=" size_big_round  ">  <strong id="countup3"></strong><br>
        <span class="color_3"></span> 최대</li>

      <li class=" size_big_round  "><strong  id="countup4"></strong><br>
        <span class="color_4"></span> 전체</li>
    </ul>
</div>









<script src="<?=G5_URL?>/js/countUp.min.js"></script>
<script>
var options = {
    useEasing: true,
    useGrouping: true,
    separator: ',',
    decimal: '.',
};
var countup1 = new CountUp('countup1', 0, <?php echo number_format($visit[1]) ?>, 0, 5,options);
countup1.start();
var countup2 = new CountUp('countup2', 0, <?php echo number_format($visit[2]) ?>, 0, 5,options);
countup2.start();
var countup3 = new CountUp('countup3', 0, <?php echo number_format($visit[3]) ?>, 0, 5,options);
countup3.start();
var countup4 = new CountUp('countup4', 0, <?php echo number_format($visit[4]) ?>, 0, 5,options);
countup4.start();
</script>
<!-- } 접속자집계 끝 -->
