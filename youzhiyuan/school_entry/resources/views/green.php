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
		<title>绿色通道</title>
		<body>
			<div class="header">
				<span>绿色通道</span>
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
							<span class="book-tit">申请类型</span>
							<input type="text" name="name" placeholder="请选择您的申请类型" disabled="disabled" id="reply_type" />
						</div>
						<div class="checkshow">
							<h4 class="ta-center">申请类型</h4>
							<p class="fee">缓交学费</p>
							<p class="fee">助学贷款</p>
							<p class="fee">免交学费</p>
							<span class="close">关闭</span>
						</div>
					</li>
				</ul>
				<div class="greenway">
					<ul class="hd clearfix">
						<li class="active">个人信息</li>
						<li>家庭情况</li>
						<li>申请原因</li>
						<li>证明材料</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit">姓名</span>
									<input type="text" name="name" placeholder="请输入姓名" id="name" />
									<div class="sex">
										<label class="sex-check">男</label>
										<label>女</label>
									</div>
								</li>
								<li>
									<span class="book-tit">民族</span>
									<input type="text" name="nation" placeholder="请填写您的民族类别" id="nation" />
								</li>
								<li>
									<span class="book-tit">手机</span>
									<input type="text" name="name" placeholder="请填写您的个人手机号码" id="phone" />
								</li>
								<li>
									<span class="book-tit">出生年月</span>
									<input type="text" name="name" placeholder="请填写您的出生日期" id="born" />
								</li>
								<li>
									<span class="book-tit">身份证号</span>
									<input type="text" name="name" placeholder="请填写您的身份证号码" id="card" />
								</li>
								<li>
									<span class="book-tit">联系手机</span>
									<input type="text" name="name" placeholder="请填写您的手机联系号码" id="cellphone" />
								</li>
								<li>
									<div class="show-btn">
										<span class="book-tit">户籍类型</span>
										<input type="text" name="name" placeholder="请选择您的户籍类型" disabled="disabled" />
									</div>
									<span class="goin"><i class="iconfont icon-right"></i></span>
									<div class="checkshow">
										<h4 class="ta-center">户籍类型</h4>
										<p class="checked">是</p>
										<p>否</p>
										<span class="close">关闭</span>
									</div>
								</li>
								<li>
									<div class="show-btn">
										<span class="book-tit">政治面貌</span>
										<input type="text" name="name" placeholder="请选择您的政治面貌" disabled="disabled" />
									</div>
									<span class="goin"><i class="iconfont icon-right"></i></span>
									<div class="checkshow">
										<p class="checked">群众</p>
										<p>团员</p>
										<p>党员</p>
										<span class="close">关闭</span>
									</div>
								</li>
								<li>
									<a href="adress.html">
										<span class="book-tit">居住地址</span>
										<input type="text" name="name" placeholder="请所在地地址" disabled="disabled" id="address" />
									</a>
									<span class="goin"><i class="iconfont icon-right"></i></span>
								</li>
								<li>
									<span class="book-tit">详细地址</span>
									<input type="text" name="name" placeholder="请填写您的详细地址" id="detailed" />
								</li>
							</ul>
						</div>
						<div>
							<ul class="dorm-book">
								<li>
									<span class="book-tit house">家庭成员1</span>
									<input type="text" name="name" placeholder="请填写家庭成员1的姓名" class="house-input" id="member1" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="name" placeholder="请填写您与家庭成员1的关系" class="house-input" id="guanxi1" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="name" placeholder="请填写家庭成员1的工作单位" class="house-input" id="danwei1" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="name" placeholder="请填写家庭成员1的年收入情况" class="house-input" id="shouru1" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员2</span>
									<input type="text" name="name" placeholder="请填写家庭成员2的姓名" class="house-input" id="member2" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="name" placeholder="请填写您与家庭成员2的关系" class="house-input" id="guanxi2" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="name" placeholder="请填写家庭成员2的工作单位" class="house-input" id="danwei2" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="name" placeholder="请填写家庭成员2的年收入情况" class="house-input" id="shouru2" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员3</span>
									<input type="text" name="name" placeholder="请填写家庭成员3的姓名" class="house-input" id="member3" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="name" placeholder="请填写您与家庭成员3的关系" class="house-input" id="guanxi3" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="name" placeholder="请填写家庭成员3的工作单位" class="house-input" id="danwei3" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="name" placeholder="请填写家庭成员3的年收入情况" class="house-input" id="shouru3" />
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea  placeholder="请您在此输入您的申请原因，以便通过审核" id="reason"></textarea>
						</div>
						<div class="prove clearfix">
							<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
								<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
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
			<script src="js/md5.min.js"></script>
		</body>
</html>
<script src="js/getJson.js"></script>
<script>
function tj()
{
	var name = $("#name").val();   var nation = $("#nation").val();    var phone = $("#phone").val();
	var cellphone = $("#cellphone").val();          var born = $("#born").val();           var card = $('#card').val();
	var detailed = $("#detailed").val();   /******用户信息********/

	/************************家庭情况************************************/
	var member1 = $("#member1").val();      var guanxi1 = $("#guanxi1").val();      var danwei1 = $("#danwei1").val();
	var shouru1 = $("#shouru1").val();		var member2 = $("#member2").val();      var guanxi2 = $("#guanxi2").val();     
	var danwei2 = $("#danwei2").val();		var shouru2 = $("#shouru2").val();		var member3 = $("#member3").val();      
	var guanxi3 = $("#guanxi3").val();      var danwei3 = $("#danwei3").val();		var shouru3 = $("#shouru3").val();
	/************************家庭情况************************************/

	var reason = $("#reason").val(); /********申请原因**********/

	 var arr = {"name":name,"nation":nation,"phone":phone,"cellphone":cellphone,"born":born,"card":card,"detailed":detailed,"member1":member1,"guanxi1":guanxi1,"danwei1":danwei1,"shouru1":shouru1,
	 	"member2":member2,"guanxi2":guanxi2,"danwei2":danwei2,"shouru2":shouru2,
	 	"member3":member3,"guanxi3":guanxi3,"danwei3":danwei3,"shouru3":shouru3};
	 var app_url = "<?php echo APP_URL;?>";
	 var token = '97b6facf5bd0faa9cbd2fbb3e1aa3b18';
	 var contro = 'report';
	 var action = 'index';

	 var aa = bb(arr,token,app_url,contro,action);
	 console.log(aa);
}
</script>