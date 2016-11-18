function bb(arr,token,url,contro,action)
{
	var message_arr = arr;
	///alert(url);die;
	//去空
	for(var i = 0 ;i<message_arr.length;i++)
	 {
	     if(message_arr[i] == "" || typeof(message_arr[i]) == "undefined")
	     {
	        message_arr.splice(i,1);
	        i= i-1;
	     }
	 }

	//alert(hex_md5('张三1234'));die;
	 //拼接   把参数用&符以键值形式进行拼接
	 var content='';
	 for(var key in message_arr){
	 	 content += key+'='+message_arr[key]+'&';
	 }
	 var message_str = content.substr(0,content.length-1);

	 //生成签名
	 var timestamp = new Date().getTime();
	 var sign  = hex_md5(timestamp+token);

	 var str ='';
	$.getJSON(url+"?r="+contro+"/"+action+"&"+message_str+"&sign="+sign+"&time="+timestamp+"&jsoncallback=?", function(data) {
		 //str += data['message'];
    		alert(data['message']);
	});
	alert(str)
}


/*function cc()
{

}*/