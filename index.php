<!DOCTYPE html>
<html lang="en">
	<?php session_start();?>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Empty Page - Ace Admin</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/css/font-awesome.css" />
		<!-- page specific plugin styles -->
		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/ace-fonts.css" />
		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />
		<!--js 文件 -->
		<script src="assets/js/jquery.js"></script>
		<script src="js/daka.js" ></script>

		<?php if(!isset($_COOKIE['user'])){echo "<script type='text/javascript'>alert('登录状态超时,请重新登录');window.location.href='login.php'</script>";}?>
	</head>

	<body class="no-skin">
		<div class="main-container" id="main-container">

			<div class="main-content">
				<!-- #section:basics/content.breadcrumbs -->
				<div class="page-content">
					<!-- /section:settings.box -->
					<div class="page-header">
						<h1 style="text-align: center;margin-left: 150px;">
							7班打卡管理
							<label>
								<h5 style="width: 90px;margin-right: 10px;">
									<?php echo date("Y-m-d")?>
								</h5>
							</label>
							<label class="" style="width: 60px;">
								<h5 style="margin: 0 auto;">
									<?php echo $_COOKIE['username'];?>
								</h5>
							</label>
						</h1>
					</div><!-- /.page-header -->
					<h3 style="text-align: center;">
						一级任务
					</h3>
					<div class="row">
						<div class="col-xs-12">
							<table id="simple-table" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th class="center">每天5道高数题目</th>
										<th class="center">每天不吃外卖泡面</th>
										<th class="center">每天八杯水</th>
										<th class="center">每天叠被子</th>
										<th class="center">提前进课堂</th>
										<th class="center">相约晚自习</th>
										<th class="center">拒绝垃圾食品</th>
									</tr>
								</thead>

								<tbody id="pvBody">
									<tr>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="一1" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="一2" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="一3" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="一4" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="一5" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="一6" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="一7" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										
									</tr>

								</tbody>
							</table>
						</div><!-- /.span -->
						<h3 style="text-align: center;">
							二级任务
						</h3>
						<div class="col-xs-12">
							<table id="simple-table" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th class="center">不少于50个单词</th>
										<th class="center">20个俯卧撑 50个仰卧起做</th>
										<th class="center">可运行代码60行</th>
										<th class="center">我是清洁小能手</th>
										<th class="center">吃完早饭进教室</th>
									</tr>
								</thead>

								<tbody id="pvBody">
									<tr>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="二1" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="二2" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="二3" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="二4" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="二5" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
									</tr>
								</tbody>
							</table>
						</div><!-- /.span -->
						<h3 style="text-align: center;">
							三级任务
						</h3>
						<!--三级任务-->
						<div class="col-xs-12">
							<table id="simple-table" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th class="center">不晚于11点睡觉不早于7点起床</th>
										<th class="center">步数大于一万两千步</th>
										<th class="center">每天上课不玩手机</th>
									</tr>
								</thead>

								<tbody id="pvBody">
									<tr>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="三1" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="三2" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
										<td class="center">
											<label class="pos-rel">
												<input type="checkbox" name="choice" value="三3" style="width: 30px;" class="ace" />
												<span class="lbl"></span>
											</label>
										</td>
									</tr>
								</tbody>
							</table>
						</div><!-- /.span -->
					</div><!-- /.row -->
				</div>
				<!-- /.page-content -->
				<div style="margin: 0 auto;width: 7%;">
					<button class="btn btn-sm btn-primary btn-white btn-round"
						style="width: 110	px;height: 35px" onclick="daka()" type="button">
					打卡
					<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
					</button>
				</div>
			</div>
			<!-- /.main-content -->
		</div>
		<!-- /.main-container -->
	</body>
</html>