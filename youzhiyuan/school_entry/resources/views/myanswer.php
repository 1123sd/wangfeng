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
		<title>我的提问</title>

		<body>
			<div class="header">
				<span>我的提问</span>
				<a href="ask.html" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="img/self-report.png">
			</div>
			<div class="contain">
				<div class="myanswer-box">
						<!-- <ul class="myanswer">
							<a href="#">
							<li> -->
							<span id="divCustomers"></span>
								<!-- <span class="route-icon"><i class="iconfont icon-zixun"></i></span>
								<span class="route-word">请问怎样才能申请助学贷款？</span>
								<span class="goin">2016-08-25</span> -->
							<!-- </li>
							</a> -->
							<!-- <li>
								<span class="route-icon"><i class="iconfont icon-zixun"></i></span>
								<span class="route-word">请问怎样才能申请助学贷款？</span>
								<span class="goin">2016-08-25</span>
							</li>
							<li>
								<span class="route-icon"><i class="iconfont icon-zixun"></i></span>
								<span class="route-word">请问怎样才能申请助学贷款？</span>
								<span class="goin">2016-08-25</span>
							</li>
							<li>
								<span class="route-icon"><i class="iconfont icon-zixun"></i></span>
								<span class="route-word">请问怎样才能申请助学贷款？</span>
								<span class="goin">2016-08-25</span>
							</li>
							<li>
								<span class="route-icon"><i class="iconfont icon-zixun"></i></span>
								<span class="route-word">请问怎样才能申请助学贷款？</span>
								<span class="goin">2016-08-25</span>
							</li> -->
						<!-- </ul> -->
					</div>
				</div>
			</div>

			<script src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/basic.js"></script>
			<script type="text/javascript" src="js/rem.js"></script>
		</body>

</html>
<script>
var token = '97b6facf5bd0faa9cbd2fbb3e1aa3b18';
var url = "<?php echo APP_URL;?>";
$.getJSON(url+"?r=help/myquestion&token="+token+"&jsoncallback=?", function(data) {
    //console.log(data['data'].length);
    var html = '<ul class="myanswer">';
    for(var i = 0; i < data['data'].length; i++)
    {
        html += '<li><span class="route-icon"><i class="iconfont icon-zixun"></i></span>';
        html += '<span class="route-word">'+data['data'][i]['question']+'</span>';
        html += '<span class="goin">'+data['data'][i]['time']+'</span></li>';
    }
    html += '</ul>';
    
    $('#divCustomers').html(html);
})
</script>