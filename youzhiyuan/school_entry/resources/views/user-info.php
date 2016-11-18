<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/base.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/iconfont/iconfont.css"/>
  <title>个人信息</title>
	<body>
		<div class="header">
			<span>个人信息</span>
			<a href="user-center.html" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon">2</span>
    			<p>宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon">3</span>
    			<p>抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="img/pro-line4.png"></span>
		</div>
		<ul class="dorm-book">
			<li class="upload-head ta-center">
				<span>
					<img src="img/take-photo.png">
					<input type="file" />
				</span>
				<p>上传头像</p>
			</li>
			<li>
			    <span class="book-tit">姓名</span>
			    <input type="text" name="name" placeholder="请输入姓名" id="name" /> 
			    <div class="sex">
			    	<label class="sex-check">男</label>
			    	<label>女</label>
			    </div>
			</li>
			<li>
				<span class="book-tit">邮箱</span>
		        <input type="text" name="name" placeholder="请填写您的个人邮箱地址" id="email" />  
			</li>
			<li>
				<span class="book-tit">手机</span>
		        <input type="text" name="name" placeholder="请填写您的个人手机号码" id="phone" />  
			</li>
			<li>
				<span class="book-tit">家庭主机</span>
		        <input type="text" name="name" placeholder="请填写您的家庭主机号码" id="telephone" />  
			</li>
			<li>
				<span class="book-tit">移动电话</span>
		        <input type="text" name="name" placeholder="请填写您的家庭移动电话号码" id="mobile" />  
			</li>
			<li>
				<div class="show-btn">
					<span class="book-tit">户口迁移</span>
			        <input type="text" name="name" placeholder="请选择户口是否迁移" disabled="disabled" id="hukou" />  
		       </div>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
		        <div class="checkshow">
		        	<p class="checked">是</p>
		        	<p>否</p>
		        </div>
			</li>
			<li>
				<div class="show-btn">
				<span class="book-tit">党员关系</span>
		        <input type="text" name="name" placeholder="请选择您的政治面貌" disabled="disabled" id="polity" />  
		       </div>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
		        <div class="checkshow">
		        	<p class="checked">群众</p>
		        	<p>团员</p>
		        	<p>党员</p>
		        </div>
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1姓名</span>
			    <input type="text" name="name" placeholder="请输入姓名" id="another_name" /> 
			</li><!-- 
			<li>
				<span class="book-tit">与当事人关系</span>
					        <input type="text" name="name" placeholder="请填写您与联系人1的关系" />  
			</li> -->
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1电话</span>
			    <input type="text" name="name" placeholder="请输入电话" id="another_phone" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" name="name" placeholder="请填写您与联系人1的关系" id="relation" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">所在地地址</span>
			    <input type="text" name="name" placeholder="所在地地址" disabled="disabled" id="another_address" /> 
			    <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">详细地址</span>
		        <input type="text" name="name" placeholder="请填写您的详细地址" id="another_details" />  
			</li>
		</ul>
		<div class="step-btn">
				<a href="javascript:void(0)" class="ta-center db" onclick="next()">下一步</a>
		</div><!-- dorm-book.html -->
  <script src="js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="js/basic.js"></script>	
  <script type="text/javascript" src="js/rem.js"></script>	
	</body>
</html>
<script>
function next()
{
	var name = $("#name").val();   var email = $("#email").val();  var phone = $("#phone").val();
	var telephone = $("#telephone").val();    var mobile = $("#mobile").val();
	var another_name = $("#another_name").val();    var another_phone = $("#another_phone").val();
	var relation = $("#relation").val();       var  another_address = $("#another_address").val();
	var another_details = $("#another_details").val();
	var url = "<?php echo APP_URL;?>";
	//var token = "<?php echo md5("+name+"."+phone+") ?>";
	//alert(token);die;
	//alert(url);die;
	$.getJSON(url+"?r=information/information&name="+name+"&email="+email+"&phone="+phone+"&telephone="+telephone+"&mobile="+mobile+"&another_name="+another_name+"&another_phone="+another_phone+"&relation="+relation+"&another_address="+another_address+"&another_details="+another_details+"&jsoncallback=?", function(data) {
    		//console.log(data)
    		if(data['code'] == 200){
    			location.href='dorm-book.html';
    		}else{
    			alert(data['message']);
    		}
	});
}
</script>
