<?php add_javascript($editor_content_js, 0); ?>

<style>
form.write_skin{
	margin-top: 40px;
}
form.write_skin > table{
	width: 100%;
	border-top: 1px solid #333333;
	border-collapse: collapse;
}
form.write_skin > table > tbody > tr > th{
	width: 100px;
	padding: 10px 20px;
	border-bottom: 1px solid #E1E1E1;
	background-color: #FAFAFA;
	font-size: 14px;
	font-weight: normal;
}
form.write_skin > table > tbody > tr > td{
	padding: 10px 20px;
	border-bottom: 1px solid #E1E1E1;
}
form.write_skin > table > tbody > tr > td > select{
	width: 40%;
	height: 30px;
	border: 1px solid #E1E1E1;
	background-color: #FFFFFF;
	font-size: 14px;
}
form.write_skin > table > tbody > tr > td > input[type="text"]{
	width: 80%;
	height: 28px;
	border: 1px solid #E1E1E1;
	font-size: 14px;
}
form.write_skin > table > tbody > tr > td > input.half{
	width: 40%;
}
form.write_skin > table > tbody > tr > td > label{
	margin-left: 20px;
	font-size: 14px;
	cursor: pointer;
}
form.write_skin > table > tbody > tr > td > label:first-child{
	margin-left: 0px;
}
form.write_skin > table > tbody > tr > td > label > input{
	width: 17px;
	height: 17px;
	margin: 8px 0px;
	vertical-align: -4px;
	cursor: pointer;
}
form.write_skin > table > tbody > tr > td > button{
	width: 60px;
	height: 30px;
	border-style: none;
	background-color: #333333;
	color: #FFFFFF;
	cursor: pointer;
}
form.write_skin > p{
	margin-top: 40px;
	text-align: center;
}
form.write_skin > p > input{
	width: 150px;
	height: 50px;
	border: 1px solid #333333;
	font-size: 14px;
	cursor: pointer;
}
form.write_skin > p > input[type="submit"]{
	background-color: #333333;
	color: #FFFFFF;
}
form.write_skin > p > input[type="button"]{
	background-color: #FFFFFF;
	color: #333333;
}
.msg_sound_only{
	display: none;
}
.sound_only{
	display: none;
}
@media(max-width: 768px){
	form.write_skin{
		margin: 20px 0px;
	}
	form.write_skin > table > tbody > tr > th{
		padding: 10px 0px;
		background-color: #FFFFFF;
		font-size: 12px;
	}
	form.write_skin > table > tbody > tr > td{
		padding: 10px 0px;
	}
	form.write_skin > table > tbody > tr > td > select{
		font-size: 12px;
	}
	form.write_skin > table > tbody > tr > td > input[type="text"]{
		font-size: 12px;
	}
	form.write_skin > table > tbody > tr > td > input.half{
		width: 80%;
	}
	form.write_skin > table > tbody > tr > td > label{
		margin-left: 10px;
		font-size: 12px;
	}
	form.write_skin > table > tbody > tr > td > label > input{
		vertical-align: -5px;
	}
	form.write_skin > p{
		margin-top: 20px;
	}
	form.write_skin > p > input{
		width: 90px;
		height: 30px;
		font-size: 12px;
	}
}
</style>

<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
<script src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=발급키&libraries=services"></script>
<script>
function search_postcode(){
	new daum.Postcode({
		oncomplete: function(data){
			$('input[name="wr_content"]').val(data.roadAddress);
			search_geocoder(data.roadAddress);
		}
	}).open();
}
function search_geocoder(address){
	var geocoder = new daum.maps.services.Geocoder();
	geocoder.addressSearch(address, function(result, status){
		if(status === daum.maps.services.Status.OK){
			$('input[name="wr_3"]').val(result[0].y);
			$('input[name="wr_4"]').val(result[0].x);
		} else{
			window.alert('지도위치를 가져오지 못하였습니다.');
		}
	});
}
function form_submit(){
	<?php echo $editor_js; ?>
	return true;
}
</script>

<?php include(G5_THEME_PATH)."/headForPicture.php"; ?>
<div class="container">


<h1 id="page"><?php echo $board['bo_subject']; ?></h1>
<div id="body">
	<form name="fwrite" method="post" action="<?php echo $action_url; ?>" enctype="multipart/form-data" onsubmit="return form_submit();" class="write_skin">
		<table>
			<tbody>
				<?php if($board['bo_category_list']){ ?>
				<tr>
					<th>분류</th>
					<td>
						<select name="ca_name" title="분류" class="required">
							<option value="">선택하세요</option>
							<?php foreach(explode('|', $board['bo_category_list']) as $value){ ?>
							<option value="<?php echo $value; ?>" <?php if($write['ca_name'] == $value) echo 'selected="selected"'; ?>><?php echo $value; ?></option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<?php } ?>
				<tr>
					<th>매장명</th>
					<td><input type="text" name="wr_subject" value="<?php echo $write['wr_subject']; ?>" title="매장명" class="required half" /></td>
				</tr>
				<tr>
					<th>행정주소</th>
					<td>
						<input type="text" name="wr_content" value="<?php echo $write['wr_content']; ?>" readonly="readonly" title="행정주소" class="required" />
						<button type="button" onclick="search_postcode();">검색</button>
					</td>
				</tr>
				<tr>
					<th>상세주소</th>
					<td><input type="text" name="wr_1" value="<?php echo $write['wr_1']; ?>" title="상세주소" class="required" /></td>
				</tr>
				<tr>
					<th>전화번호</th>
					<td><input type="text" name="wr_2" value="<?php echo $write['wr_2']; ?>" title="전화번호" class="required telnum half" /></td>
				</tr>
				<tr>
					<th>부가서비스</th>
					<td>
						<label><input type="checkbox" name="wr_5" value="배달" <?php if($write['wr_5']) echo 'checked="checked"'; ?> /> 배달</label>
						<label><input type="checkbox" name="wr_6" value="테이크아웃" <?php if($write['wr_6']) echo 'checked="checked"'; ?> /> 테이크아웃</label>
						<label><input type="checkbox" name="wr_7" value="홀전문" <?php if($write['wr_7']) echo 'checked="checked"'; ?> /> 홀전문</label>
					</td>
				</tr>
			</tbody>
		</table>
		<p>
			<input type="button" value="목록보기" onclick="location.href='<?php echo G5_BBS_URL . "/board.php?bo_table={$bo_table}"; ?>';" />
			<input type="submit" value="저장하기" />
			<input type="hidden" name="token" />
			<input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>" />
			<input type="hidden" name="w" value="<?php echo $w; ?>" />
			<input type="hidden" name="bo_table" value="<?php echo $bo_table; ?>" />
			<input type="hidden" name="wr_id" value="<?php echo $wr_id; ?>" />
			<input type="hidden" name="wr_3" value="<?php echo $write['wr_3']; ?>" />
			<input type="hidden" name="wr_4" value="<?php echo $write['wr_4']; ?>" />
		</p>
	</form>
</div>

</div>
