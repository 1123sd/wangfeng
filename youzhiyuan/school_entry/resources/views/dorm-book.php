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
  <title>宿舍预定</title>
	<body>
		<div class="header">
			<span>宿舍预定</span>
			<a href="index.html" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="banner">
			<img src="img/self-report.png">
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon passbg">2</span>
    			<p class="step-txt">宿舍预定</p>
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
    	<span class="pro-line"><img src="img/pro-line.png"></span>
		</div>
		<ul class="dorm-book">
			<li>
		    <span class="book-tit">校区</span>
		    <input type="text" name="name" placeholder="请选择你所在的校区" id="school_area" /> 
		    <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">楼栋号</span>
		        <input type="text" name="name" placeholder="请填写您宿舍的楼栋号" id="building_num" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">宿舍类型</span>
		        <input type="text" name="name" placeholder="请填写您的宿舍类型" id="dor_type" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">房间号</span>
		        <input type="text" name="name" placeholder="请选择您的房间号" id="dor_num" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">铺位</span>
		        <input type="text" name="name" placeholder="请选择您的床铺位置" id="berth" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			
		</ul>
		<div class="step-btn">
				<a href="user-info.html">上一步</a>
				<a href="javascript:void(0)" onclick="next()">下一步</a>
		</div><!-- arrive.html -->
	  <script src="js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="js/rem.js"></script>
      <script src="js/md5.min.js"></script>
	</body>
</html>
<script src="js/getJson.js"></script>
<script>
function next()
{
	var school_area = $("#school_area").val();    var building_num = $("#building_num").val();
	var dor_type = $("#dor_type").val();      var dor_num = $("#dor_num").val();   var berth = $('#berth').val();

	var arr = {"school_area":school_area,"building_num":building_num,"dor_type":dor_type,"dor_num":dor_num,"berth":berth};
	 var app_url = "<?php echo APP_URL;?>";
	 var token = '97b6facf5bd0faa9cbd2fbb3e1aa3b18';
	 var contro = 'information';
	 var action = 'dormitory';

	 bb(arr,token,app_url,contro,action);

}
</script>