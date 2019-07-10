<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/head.php');
//     return;
// }
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<style media="screen">
html {overflow-y:scroll}
body {margin:0;padding:0;font-size:0.75em;font:15px/1.5 'Roboto','Malgun Gothic','Rozha One','돋움', Dotum, '굴림', Gulim, arial, sans-serif;;}
html, h1, h2, h3, h4, h5, h6, form, fieldset, img {margin:0;padding:0;border:0}
h1, h2, h3, h4, h5, h6 {font-size:1em;font-family:'Malgun Gothic', dotum, sans-serif}
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {display:block}
ul, dl,dt,dd {margin:0;padding:0;list-style:none}
legend {position:absolute;margin:0;padding:0;font-size:0;line-height:0;text-indent:-9999em;overflow:hidden}
label, input, button, select, img {vertical-align:middle;font-size:1em}
input, button {margin:0;padding:0;font-family:'Malgun Gothic', dotum, sans-serif;font-size:1em}
input[type="submit"]{cursor:pointer}
button {cursor:pointer}
textarea, select {font-family:'Malgun Gothic', dotum, sans-serif;font-size:1em}
select {margin:0}
hr{display: block};
p {margin:0;padding:0;word-break:break-all; font-family: 'Noto Sans', sans-serif;}
pre {overflow-x:scroll;font-size:1.1em}
a {color:#000;text-decoration:none}
</style>



<!-- 상단 시작 { -->
<div  class="container-fluid mx-auto">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>
    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

    <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="height: auto; background-color:rgba(255, 255, 255, 0.5);">
      <div class="container">
        <a class="navbar-brand" href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.png" style="" alt="<?php echo $config['cf_title']; ?>"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mx-auto  ml-auto mt-2 mt-lg-0">
              <li class="nav-item dropdown">
              <?php
              $sql = " select *
                          from {$g5['menu_table']}
                          where me_use = '1'
                            and length(me_code) = '2'
                          order by me_order, me_id ";
              $result = sql_query($sql, false);
              $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
              $menu_datas = array();

              for ($i=0; $row=sql_fetch_array($result); $i++) {
                  $menu_datas[$i] = $row;

                  $sql2 = " select *
                              from {$g5['menu_table']}
                              where me_use = '1'
                                and length(me_code) = '4'
                                and substring(me_code, 1, 2) = '{$row['me_code']}'
                              order by me_order, me_id ";
                  $result2 = sql_query($sql2);
                  for ($k=0; $row2=sql_fetch_array($result2); $k++) {
                      $menu_datas[$i]['sub'][$k] = $row2;
                  }
              }

              $i = 0;
              foreach( $menu_datas as $row ){
                  if( empty($row) ) continue;
              ?>
              <li class="nav-item dropdown gnb_1dli" style="z-index:<?php echo $gnb_zindex--; ?>">
                  <a href="<?php echo $row['me_link']; ?>" class="nav-link"
                    target="_<?php echo $row['me_target']; ?>" class="gnb_1da">
                    <span class="h5" style="

                                        padding: 0 20px;
                                        margin: 0;
                                        font-size: 17px;
                                        color: black;
                                        position: relative;
                                        display: inline-block;
                                        font-weight: bold;">
                    <?php echo $row['me_name'] ?></span> </a>
                  <!-- id="navbarDropdownMenuLink" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false" -->
                  <?php
                  $k = 0;
                  foreach( (array) $row['sub'] as $row2 ){

                      if( empty($row2) ) continue;

                      if($k == 0)
                          echo '<span class="bg">하위분류</span><ul class="gnb_2dul">'.PHP_EOL;
                  ?>
                      <li class="nav-item dropdown gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                  <?php
                  $k++;
                  }   //end foreach $row2

                  if($k > 0)
                      echo '</ul>'.PHP_EOL;
                  ?>
              </li>
              <?php
              $i++;
              }   //end foreach $row

              if ($i == 0) {  ?>
              <?php } ?>
          </ul>

              <form class="form-inline my-2 my-lg-0 " name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
                  <div class="form-group">
                    <input class="form-control" type="hidden" name="sfl" value="wr_subject||wr_content">
                  </div>

                  <div class="form-group">
                    <input class="form-control" type="hidden" name="sop" value="and">
                  </div>

                  <div class="form-group">
                    <label   for="sch_stx" class="sound_only">검색어 필수</label>
                    <input  class="form-control mr-sm-2" type="text" style="display:none; background-color:transparent;" name="stx" id="sch_stx" maxlength="20" placeholder="검색어를 입력해주세요">
                  </div>

                <div class="col-2 m-0">
                  <button class="btn btn-outline-primary" type="submit" id="sch_submit_decoration" value="검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
                  <button class="btn btn-outline-primary" type="submit" id="sch_submit"  style="display:none;" value="검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
                </div>
            </form>
        </div>
      </div>

    </nav>




      <script type="text/javascript">
      jQuery(function($){
        $(document).on("click", "#sch_submit_decoration", function(e){
          e.preventDefault();
          $('#sch_stx').show();
          $('#sch_submit_decoration').hide();
          $('#sch_submit').show();
        })
      });
      </script>
    <script>
    function fsearchbox_submit(f)
    {
        if (f.stx.value.length < 2) {
            alert("검색어는 두글자 이상 입력하십시오.");
            f.stx.select();
            f.stx.focus();
            return false;
        }

        // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
        var cnt = 0;
        for (var i=0; i<f.stx.value.length; i++) {
            if (f.stx.value.charAt(i) == ' ')
                cnt++;
        }

        if (cnt > 1) {
            alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
            f.stx.select();
            f.stx.focus();
            return false;
        }

        return true;
    }
    </script>
    <script>

    $(function(){
        $(".gnb_menu_btn").click(function(){
            $("#gnb_all").show();
        });
        $(".gnb_close_btn").click(function(){
            $("#gnb_all").hide();
        });
    });

    </script>
</div>
<!-- } 상단 끝 -->

<!-- 콘텐츠 시작 { -->

<div id="head_div_id" style="width:100%">
    <div>

    <div>
