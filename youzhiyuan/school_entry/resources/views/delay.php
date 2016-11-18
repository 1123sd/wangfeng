<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="css/slick.css" />
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css" />
		<title>推迟报到</title>

		<body>
			<div class="header">
				<span>推迟报到</span>
				<a href="index.html" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain">
				<ul class="dorm-book">
					<li class="state-box">
						申请状态：
						<span class="state-img"><img src="img/state.png"></span>
						<span class="state">审核通过</span>
					</li>
				</ul>
				<ul class="dorm-book mt3">
					<li>
						<div class="show-btn">
							<span class="book-tit delay">推迟报到类型</span>
							<input type="text" name="name" placeholder="请选择" disabled="disabled" class="delayinput"/>
						</div>
						<div class="checkshow">
							<h4 class="ta-center">推迟报到类型</h4>
							<p class="checked">事假</p>
							<p>病假</p>
							<p>服兵役</p>
							<span class="close">关闭</span>
						</div>
					</li>
				</ul>
				<div class="delayReport">
					<ul class="hd clearfix">
						<li class="active">个人申请信息</li>
						<li>申请原因</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit delay">姓名</span>
									<input type="text" name="name" placeholder="请填写您的姓名" class="delayinput" id="name" />
								</li>
								<li>
									<span class="book-tit delay">考生号</span>
									<input type="text" name="name" placeholder="请填写您的考生号" class="delayinput" id="kaohao" />
								</li>
								<li>
									<span class="book-tit delay">学院</span>
									<input type="text" name="name" placeholder="请填写您所在的学院" class="delayinput" id="college" />
								</li>
								<li>
									<span class="book-tit delay">专业</span>
									<input type="text" name="name" placeholder="请填写您的专业" class="delayinput" id="major" />
								</li>
								<li>
									<span class="book-tit delay">身份证号</span>
									<input type="text" name="name" placeholder="请填写您的身份证号码" class="delayinput" id="IDcard" />
								</li>
								<li>
									<span class="book-tit delay">推迟报到时间</span>
									<input type="text" name="name" placeholder="请填选择" class="delayinput" disabled="disabled" id="time" />
									<span class="goin"><i class="iconfont icon-right"></i></span>
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea  placeholder="请您在此输入您的申请原因，以便通过审核" id="reason"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="step-btn">
					<a href="javascript:void(0)" class="ta-center db" onclick="tj()">提交</a>
			</div>
			<div class="cover-bg"></div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
		</body>
<script src="./js/getJson.js"></script>
<script>
function tj()
{
	var name = $("#name").val();   var kaohao = $("#kaohao").val();     var college = $("#college").val();
	var major = $("#major").val();    var card = $("#card").val();     var time = $("#time").val();
	var reason = $("#reason").val();
	var aa ='123';
	var app_url = "<?php echo APP_URL;?>";

	bb(name,kaohao,college,major,card,time,reason,aa,app_url)
}
</script>