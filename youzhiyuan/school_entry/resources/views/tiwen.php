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
		<title>我要提问</title>

		<body>
			<div class="header">
				<span>我要提问</span>
				<a href="ask.html" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain"  style="padding-top:3%;">
				 <div class="reason">	
				<textarea  placeholder="请您在此输入您的申请原因，以便通过审核" id="question"></textarea>
			</div><br/>
			<div class="step-btn">
				<a href="javascript:void(0)" class="ta-center db" onclick="tiwen()">提交</a>
			</div><!-- dorm-book.html -->
			</div>
			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
		</body>
</html>
<script>
function tiwen()
{
	var question = $("#question").val();
	var token = '97b6facf5bd0faa9cbd2fbb3e1aa3b18';
	var url = "<?php echo APP_URL;?>";
	$.getJSON(url+"?r=help/index&question="+question+"&token="+token+"&jsoncallback=?", function(data) {
	    //console.log(data);
	    alert(data['message']);
	    history.go(0);
	})
}
</script>

