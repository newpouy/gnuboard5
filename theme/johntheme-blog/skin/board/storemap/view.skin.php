<?php include_once(G5_LIB_PATH . '/thumbnail.lib.php'); ?>

<style>
div.view_skin{
	min-height: 400px;
	margin-top: 40px;
}
div.view_skin > h1{
	height: 50px;
	padding: 0px 20px;
	border-top: 1px solid #333333;
	border-bottom: 1px solid #E1E1E1;
	background-color: #F5F5F5;
	font-size: 18px;
	font-weight: normal;
	line-height: 50px;
}
div.view_skin > table{
	width: 100%;
	border-collapse: collapse;
}
div.view_skin > table > tbody > tr > td{
	width: 120px;
	height: 50px;
	padding: 0px 20px;
	border-bottom: 1px solid #E1E1E1;
	color: #999999;
	font-size: 14px;
}
div.view_skin > table > tbody > tr > td.auto{
	width: auto;
}
div.view_skin > table > tbody > tr > td > span{
	margin-left: 10px;
	font-size: 14px;
}
div.view_skin > p.button{
	margin-top: 40px;
	text-align: center;
}
div.view_skin > p.button > a{
	display: inline-block;
	width: 150px;
	height: 50px;
	border-style: none;
	background-color: #333333;
	color: #FFFFFF;
	font-size: 14px;
	line-height: 50px;
	text-decoration: none;
}
@media(max-width: 768px){
	div.view_skin{
		min-height: auto;
		margin: 20px 10px;
	}
	div.view_skin > h1{
		height: auto;
		padding: 10px;
		font-size: 14px;
		line-height: 130%;
	}
	div.view_skin > table > tbody > tr > td{
		width: 90px;
		height: 30px;
		padding: 0px 10px;
		font-size: 10px;
	}
	div.view_skin > table > tbody > tr > td > span{
		margin-left: 5px;
		font-size: 10px;
	}
	div.view_skin > p.button{
		margin-top: 20px;
	}
	div.view_skin > p.button > a{
		width: 90px;
		height: 30px;
		font-size: 12px;
		line-height: 30px;
	}
}
</style>

<?php include(G5_THEME_PATH)."/headForPicture.php"; ?>

<div class="container">

<h1 id="page"><?php echo $board['bo_subject']; ?></h1>
<div id="body">
	<div class="view_skin">
		<h1><?php echo $view['wr_subject']; ?></h1>
		<table>
			<tbody>
				<tr>
					<td class="auto">
						주소
						<span><?php echo $view['wr_content']; ?> <?php echo $view['wr_1']; ?></span>
					</td>
				</tr>
				<tr>
					<td class="auto">
						전화번호
						<span><?php echo $view['wr_2']; ?></span>
					</td>
				</tr>
				<tr>
					<td class="auto">
						부가서비스
						<span>
							<?php if($view['wr_5']) echo '배달'; ?>
							<?php if($view['wr_6']) echo '테이크아웃'; ?>
							<?php if($view['wr_7']) echo '홀전문'; ?>
						</span>
					</td>
				</tr>
			</tbody>
		</table>
		<p class="button">
			<?php if($delete_href){ ?>
			<a href="<?php echo $delete_href; ?>" onclick="del($(this).attr('href')); return false;">삭제하기</a>
			<?php } ?>
			<?php if($update_href){ ?>
			<a href="<?php echo $update_href; ?>">수정하기</a>
			<?php } ?>
			<a href="<?php echo $list_href; ?>">목록보기</a>
		</p>
	</div>
</div>

</div>
