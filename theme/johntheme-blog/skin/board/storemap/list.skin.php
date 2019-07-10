<style>
div.list_skin{
	margin-top: 40px;
	padding: 20px;
	border: 1px solid #E1E1E1;
	background-color: #F5F5F5;
}
div.list_skin:after{
	display: block;
	clear: both;
	content: '';
}
div.list_skin > form{
	float: left;
	width: 50%;
}
div.list_skin > form > h1{
	margin-bottom: 10px;
	font-size: 18px;
}
div.list_skin > form > p > select{
	width: 30%;
	height: 40px;
	border: 1px solid #E1E1E1;
	background-color: #FFFFFF;
	font-size: 14px;
}
div.list_skin > form > p > input{
	width: 60%;
	height: 38px;
	border: 1px solid #E1E1E1;
	background-color: #FFFFFF;
	font-size: 14px;
}
div.list_skin > form > p > button{
	width: 30%;
	height: 38px;
	border: 1px solid #999999;
	background-color: #FFFFFF;
	font-size: 14px;
	cursor: pointer;
}
form.list_skin{
	min-height: 400px;
	margin-top: 40px;
}
form.list_skin > div{
	height: 400px;
	border: 1px solid #E1E1E1;
}
form.list_skin > h1{
	margin: 40px 0px;
	font-weight: normal;
	text-align: center;
}
form.list_skin > h1 > span{
	display: inline-block;
	margin: 0px 20px;
}
form.list_skin > h1 > span > img{
	margin-bottom: 10px;
}
form.list_skin > table{
	width: 100%;
	border-top: 1px solid #333333;
	border-bottom: 1px solid #E1E1E1;
	border-collapse: collapse;
}
form.list_skin > table > tbody > tr > td{
	width: 10%;
	min-width: 100px;
	height: 80px;
	border-top: 1px solid #E1E1E1;
	font-size: 14px;
	text-align: center;
}
form.list_skin > table > tbody > tr > td.half{
	width: 5%;
	min-width: 30px;
}
form.list_skin > table > tbody > tr > td.name{
	width: 15%;
	min-width: 160px;
	padding: 0px 10px;
	text-align: left;
}
form.list_skin > table > tbody > tr > td.icon{
	width: 15%;
	min-width: 160px;
}
form.list_skin > table > tbody > tr > td.auto{
	width: auto;
	padding: 0px 10px;
	text-align: left;
}
form.list_skin > table > tbody > tr > td > input{
	width: 17px;
	height: 17px;
	cursor: pointer;
}
form.list_skin > table > tbody > tr > td > strong{
	font-size: 14px;
	font-weight: normal;
	cursor: pointer;
}
form.list_skin > table > tbody > tr > td > span{
	font-size: 14px;
	font-weight: normal;
	cursor: pointer;
}
form.list_skin > table > tbody > tr > td > a > i{
	color: #0066CC;
	font-size: 18px;
	vertical-align: -3px;
}
form.list_skin > p{
	margin-top: 40px;
}
form.list_skin > p:after{
	display: block;
	clear: both;
	content: '';
}
form.list_skin > p > button{
	width: 150px;
	height: 50px;
	border: 1px solid #333333;
	font-size: 14px;
	cursor: pointer;
}
form.list_skin > p > button[type="submit"]{
	float: left;
	background-color: #333333;
	color: #FFFFFF;
}
form.list_skin > p > button[type="button"]{
	float: right;
	background-color: #FFFFFF;
	color: #333333;
}
nav.pg_wrap{
	margin-top: 40px;
	text-align: center;
}
nav.pg_wrap > span.pg > strong.pg_current{
	display: inline-block;
	width: 50px;
	border: 1px solid #333333;
	background-color: #333333;
	color: #FFFFFF;
	font-size: 14px;
	font-weight: normal;
	line-height: 48px;
	text-align: center;
}
nav.pg_wrap > span.pg > a.pg_page{
	display: inline-block;
	width: 50px;
	border: 1px solid #E1E1E1;
	background-color: #FFFFFF;
	font-size: 14px;
	line-height: 48px;
	text-align: center;
	text-decoration: none;
}
.sound_only{
	display: none;
}
@media(max-width: 768px){
	div.list_skin{
		margin-top: 0px;
		padding: 10px;
		border-style: none;
		border-bottom: 1px solid #E1E1E1;
	}
	div.list_skin > form{
		width: 100%;
		margin-top: 10px;
	}
	div.list_skin > form:first-child{
		margin-top: 0px;
	}
	div.list_skin > form > h1{
		margin-bottom: 5px;
		font-size: 14px;
	}
	div.list_skin > form > p > select{
		height: 30px;
		font-size: 12px;
	}
	div.list_skin > form > p > input{
		height: 28px;
		font-size: 12px;
	}
	div.list_skin > form > p > button{
		height: 28px;
		font-size: 12px;
	}
	form.list_skin{
		min-height: auto;
		margin: 0px 0px 20px 0px;
	}
	form.list_skin > div{
		height: 200px;
		border-style: none;
		border-bottom: 1px solid #E1E1E1;
	}
	form.list_skin > h1{
		margin: 20px 0px;
	}
	form.list_skin > h1 > span{
		margin: 0px;
		font-size: 10px;
	}
	form.list_skin > h1 > span > img{
		width: 50%;
		margin-bottom: 5px;
	}
	form.list_skin > table > tbody > tr > td{
		width: 25%;
		min-width: 80px;
		height: 40px;
		font-size: 12px;
	}
	form.list_skin > table > tbody > tr > td.web{
		display: none;
	}
	form.list_skin > table > tbody > tr > td.half{
		width: 10%;
		min-width: 32px;
	}
	form.list_skin > table > tbody > tr > td.name{
		width: auto;
		min-width: 64px;
		padding: 0px 5px;
	}
	form.list_skin > table > tbody > tr > td.icon{
		width: 25%;
		min-width: 80px;
	}
	form.list_skin > table > tbody > tr > td > img{
		width: 24px;
	}
	form.list_skin > table > tbody > tr > td > strong{
		font-size: 12px;
	}
	form.list_skin > table > tbody > tr > td > span{
		font-size: 12px;
	}
	form.list_skin > table > tbody > tr > td > a > i{
		font-size: 14px;
		vertical-align: -2px;
	}
	form.list_skin > p{
		margin: 20px 10px 0px 10px;
	}
	form.list_skin > p > button{
		width: 90px;
		height: 30px;
		font-size: 12px;
	}
	nav.pg_wrap{
		margin-top: 20px;
	}
	nav.pg_wrap > span.pg > strong.pg_current{
		width: 30px;
		font-size: 12px;
		line-height: 28px;
	}
	nav.pg_wrap > span.pg > a.pg_page{
		width: 30px;
		font-size: 12px;
		line-height: 28px;
	}
}
</style>

<script src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=0f2b5a56192b67b1cb3b8a36929921ce&libraries=services"></script>
<script>
var daummap;
var marker;
var display = false;
$(function(){
	daummap = new daum.maps.Map(
		document.getElementById('daummap'),
		{center: new daum.maps.LatLng(37.54794738755384, 127.10834130011972)}
	);
	daummap.addControl(new daum.maps.MapTypeControl());
	daummap.addControl(new daum.maps.ZoomControl());
	marker = new daum.maps.Marker({
		map: daummap,
		position: new daum.maps.LatLng(37.54794738755384, 127.10834130011972)
	});
});
function move_center(obj, lat, lng){
	if(lat && lng){
		$('strong.daummap').css('color', '#333333');
		$('strong.daummap').css('font-weight', 'normal');
		$('#daummap' + obj).css('color', '#C50000');
		$('#daummap' + obj).css('font-weight', 'bold');
		daummap.setCenter(new daum.maps.LatLng(lat, lng));
		marker.setMap(null);
		marker = new daum.maps.Marker({
			map: daummap,
			position: new daum.maps.LatLng(lat, lng)
		});
		document.location.hash = '#daummap';
	} else{
		window.alert('지도에서 위치를 표기할 수 없습니다.');
	}
}
function search_city(){
	$('#stx').val($('#stx1').val());
	$('#stx2 > option:gt(0)').remove();
	var array = $('#stx1').find('option:selected').attr('data-list');
	if(array){
		$(array.split('|')).each(function(key, val){
			$('#stx2').append('<option value="' + val + '">' + val + '</option>');
		});
	}
}
function select_city(){
	if($('#stx2').val()){
		$('#stx').val($('#stx1').val() + ' ' + $('#stx2').val());
	} else{
		$('#stx').val($('#stx1').val());
	}
}
function select_delete(){
	if($('input.wr_id:checked').length == 0){
		window.alert('게시글을 선택해주세요.');
		return false;
	}
	return window.confirm('정말로 삭제하시겠습니까?');
}
</script>
<?php include(G5_THEME_PATH)."/headForPicture.php"; ?>

<div class="container">

<div class="text-center mt-3 mb-2">
	<p class="h3">Lorem ipsum dolor sit amet</p>
	<p class="h2">consectetur adipiscing elit, sed do eiusmod. </p>
</div>

<br>
<div class="row mt-4 mb-4">
		<div class="col-md-4">
			<img style="width:100%" src="https://images.unsplash.com/photo-1545021826-faa6dcaa2007?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1498&q=80" alt="">
		</div>
		<div class="col-md-8">
			<p class="h5" style="margin: 0; padding: 0; word-break: break-all; font-weight: 300;">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				 Ut enim ad minim veniam.
				 <br><br>
				 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				 <br>
			<p class="h4">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
</div>


<style media="screen">
	.explanation-dt{
		display: inline-block !important;
    position: absolute;
    top: 0;
    left: 0;
    margin: 0 !important;
    padding: 0 !important;
    font-size: 0;
    line-height: 0;
    border: 0 !important;
    overflow: hidden !important;


}
	.explanation-dl{
		font-size: 14px;
    line-height: 1.6em;
    color: #667;
    overflow: hidden;
    padding: 20px;
    border: 2px dashed #ddd;
    clear: both;
    margin-bottom: 15px;
	}
	.explanation-dd{
		display: inline-block;
    padding: 10px;
		margin: 0 10px;
    color: #999;
	}
</style>

<br>
<dl class="explanation-dl">
	<dt class="explanation-dt"></dt>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>
	<dd class="explanation-dd">#good</dd>

</dl>




<p class="h1 text-center "id="page">Location</p>
<div id="body">
	<!-- <div class="list_skin">
		<form method="get">
			<h1>지역별 검색</h1>
			<p>
				<select id="stx1" onchange="search_city();">
					<option value="">시/도</option>
					<option value="서울" data-list="강남구|강동구|강북구|강서구|관악구|광진구|구로구|금천구|노원구|도봉구|동대문구|동작구|마포구|서대문구|서초구|성동구|성북구|송파구|양천구|영등포구|용산구|은평구|종로구|중구|중랑구">서울</option>
					<option value="경기" data-list="가평군|고양시|과천시|광명시|광주시|구리시|군포시|김포시|남양주시|동두천시|부천시|성남시|수원시|시흥시|안산시|안성시|안양시|양주시|양평군|여주군|연천군|오산시|용인시|의왕시|의정부시|이천시|파주시|평택시|포천군|하남시|화성시">경기</option>
					<option value="인천" data-list="강화군|계양구|남동구|부평구|연수구|옹진군|중구|서구|동구|남구">인천</option>
					<option value="강원" data-list="강릉시|동해시|삼척시|속초시|양구군|양양군|영월군|원주시|인제군|정선군|철원군|춘천시|태백시|평창군|홍천군|화천군|횡성군">강원</option>
					<option value="충남" data-list="공주시|금산군|논산시|당진시|보령시|부여군|서산시|서천군|아산시|연기군|예산군|천안시|청양군|태안군|홍성군">충남</option>
					<option value="대전" data-list="대덕구|유성구|서구|중구|동구">대전</option>
					<option value="충북" data-list="괴산군|단양군|보은군|영동군|옥천군|음성군|제천시|진천군|청원군|청주시|충주시">충북</option>
					<option value="세종" data-list="">세종</option>
					<option value="부산" data-list="강서구|금정구|기장군|남구|동구|동래구|부산진구|북구|사상구|사하구|서구|수영구|연제구|영도구|중구|해운대구">부산</option>
					<option value="울산" data-list="울주군|중구|남구|동구|북구">울산</option>
					<option value="대구" data-list="달서구|달성구|수성구|남구|중구|서구|북구|동구">대구</option>
					<option value="경북" data-list="경산시|경주시|고령군|구미시|군위군|김천시|문경시|봉화군|상주시|성주군|안동시|영덕군|영양군|영주시|영천시|예천군|울릉군|울진군|의성군|청도군|청송군|칠곡군|포항시">경북</option>
					<option value="경남" data-list="거제시|거창군|고성군|김해시|남해군|마산시 합포구|마산시 회원구|밀양시|사천시|산청군|양산시|의령군|진주시|진해시|창녕군|창원시|통영시|하동군|함안군|함양군|합천군">경남</option>
					<option value="전남" data-list="강진군|고흥군|곡성군|광양시|구례군|나주시|담양군|목포시|무안군|보성군|순천시|신안군|여수시|영광군|영암군|완도군|장성군|장흥군|진도군|함평군|해남군|화순군">전남</option>
					<option value="광주" data-list="광산구|북구|서구|남구|동구">광주</option>
					<option value="전북" data-list="고창군|군산시|김제시|남원시|무주군|부안군|순창군|완주군|익산시|임실군|장수군|전주시|정읍시|진안군">전북</option>
					<option value="제주" data-list="서귀포시|제주시">제주</option>
				</select>
				<select id="stx2" onchange="select_city();">
					<option value="">구/군</option>
				</select>
				<button type="submit">검색</button>
				<input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>" />
				<input type="hidden" name="sfl" value="wr_content" />
				<input type="hidden" id="stx" name="stx" />
			</p>
		</form>
		<form method="get">
			<h1>매장명 검색</h1>
			<p>
				<input type="text" name="stx" />
				<button type="submit">검색</button>
				<input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>" />
				<input type="hidden" name="sfl" value="wr_subject" />
			</p>
		</form>
	</div> -->
	<form method="post" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return select_delete();" class="list_skin">
		<a name="daummap"></a>
		<div id="daummap"></div>
		<h1>
			<!-- <span>
				<img src="<?php echo $board_skin_url; ?>/img/wr_5.png" /><br />
				배달
			</span>
			<span>
				<img src="<?php echo $board_skin_url; ?>/img/wr_6.png" /><br />
				테이크아웃
			</span>
			<span>
				<img src="<?php echo $board_skin_url; ?>/img/wr_7.png" /><br />
				홀전문
			</span> -->
		</h1>
		<table>
			<tbody>
				<?php foreach($list as $rows){ ?>
				<tr>
					<?php if($is_checkbox){ ?>
					<td class="half"><input type="checkbox" name="chk_wr_id[]" value="<?php echo $rows['wr_id']; ?>" class="wr_id" /></td>
					<?php } ?>
					<td class="name">
						<?php if($is_admin){ ?>
						<a href="<?php echo $rows['href']; ?>"><i class="fas fa-edit" title="관리하기"></i></a>
						<?php } ?>
						<strong id="daummap<?php echo $rows['wr_id']; ?>" class="daummap" onclick="move_center('<?php echo $rows['wr_id']; ?>', '<?php echo $rows['wr_3']; ?>', '<?php echo $rows['wr_4']; ?>');"><?php echo $rows['wr_subject']; ?></strong>
					</td>
					<td><a href="tel:<?php echo $rows['wr_2']; ?>"><?php echo $rows['wr_2']; ?></a></td>
					<td class="auto web">
						<span onclick="move_center('<?php echo $rows['wr_id']; ?>', '<?php echo $rows['wr_3']; ?>', '<?php echo $rows['wr_4']; ?>');">
							<?php echo $rows['wr_content']; ?>
							<?php echo $rows['wr_1']; ?>
						</span>
					</td>
					<td class="icon">
						<!-- <img src="<?php echo $board_skin_url; ?>/img/wr_5_<?php if($rows['wr_5']) echo 'on'; else echo 'off'; ?>.png" />
						<img src="<?php echo $board_skin_url; ?>/img/wr_6_<?php if($rows['wr_6']) echo 'on'; else echo 'off'; ?>.png" />
						<img src="<?php echo $board_skin_url; ?>/img/wr_7_<?php if($rows['wr_7']) echo 'on'; else echo 'off'; ?>.png" /> -->
						<?php if($rows['wr_3'] && $rows['wr_4']){ ?>
						<script>
						$(function(){
							if(display == false){
								display = true;
								$('#daummap<?php echo $rows['wr_id']; ?>').click();
							}
						});
						</script>
						<?php } ?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<?php echo $write_pages; ?>
		<?php if($is_checkbox || $write_href){ ?>
		<p>
			<?php if($is_checkbox){ ?>
			<button type="submit">선택삭제</button>
			<?php } ?>
			<?php if($write_href){ ?>
			<button type="button" onclick="location.href='<?php echo $write_href; ?>';">등록하기</button>
			<?php } ?>
			<input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>" />
			<input type="hidden" name="btn_submit" value="선택삭제" />
		</p>
		<?php } ?>
	</form>
</div>
</div>
