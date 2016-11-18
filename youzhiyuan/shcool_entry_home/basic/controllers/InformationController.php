<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\controllers\ComonController;
use Memcache;

class InformationController extends Controller
{
    public function actionInformation()
    {
        /*$arr=array(
                'code'=> 200,
                'message' => '添加成功',
                'data'=>'没有'
            );
        $memcache = new Memcache;            //创建一个memcache对象
        $memcache->connect('localhost', 11211) or die ("Could not connect"); //连接Memcached服务器
        $arr = array('name'=>'zhangsan','age'=>'123');
        $memcache->set('aaa', '132');        //设置一个变量到内存中，名称是key 值是test
        $get_value = $memcache->get('aaa');   //从内存中取出key的值
        //$aa = $memcache->delete('ccc');
        //$val = $memcache->flush(); 
        print_r($get_value);*/
    	$name = htmlspecialchars(isset($_GET['name'])?$_GET['name']:'');  
    	$email = htmlspecialchars(isset($_GET['email'])?$_GET['email']:'');   
    	$phone = htmlspecialchars(isset($_GET['phone'])?$_GET['phone']:'');
    	$telephone = htmlspecialchars(isset($_GET['telephone'])?$_GET['telephone']:'');  
    	$mobile = htmlspecialchars(isset($_GET['mobile'])?$_GET['mobile']:'');   
    	$another_name = htmlspecialchars(isset($_GET['another_name'])?$_GET['another_name']:'');
    	$another_phone = htmlspecialchars(isset($_GET['another_phone'])?$_GET['another_phone']:'');
    	$relation = htmlspecialchars(isset($_GET['relation'])?$_GET['relation']:'');
    	$another_address = htmlspecialchars(isset($_GET['another_address'])?$_GET['another_address']:'');
    	$another_details = htmlspecialchars(isset($_GET['another_details'])?$_GET['another_details']:'');
    	$arr = array('name'=>$name,'email'=>$email,'cellphone'=>$phone,'telephone'=>$telephone,'mobile'=>$mobile,'another_name'=>$another_name,'another_phone'=>$another_phone,'relationship'=>$relation,'another_address'=>$another_address,'another_details'=>$another_details,'token'=>'97b6facf5bd0faa9cbd2fbb3e1aa3b18');

    	$connection = \Yii::$app->db;
    	$user = $connection->createCommand()->insert('user_infomation', $arr)->execute();
    	if($user){
            $arr=array(
            	'code'=> 200,
            	'message' => '添加成功',
	            'data'=>$arr
	        );


            //$json_data = new CommonController($code,$msg,$arr);
            $json_data = json_encode($arr);

            //获取回调函数名
			$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
			//输出jsonp格式的数据
			echo $jsoncallback . "(" . $json_data . ")";
    	} else {
    		$result=array(
                'code'=> '301',
                'message'=>'添加失败',
                'data'=>$arr
            );
            //获取回调函数名
			$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
			//json数据
			$json_data = json_encode($result);
			//输出jsonp格式的数据
			echo $jsoncallback . "(" . $json_data . ")";
    	}
    }

    public function actionDormitory()
    {
    	$school_area = htmlspecialchars(isset($_GET['school_area'])?$_GET['school_area']:'');  
    	$building_num = htmlspecialchars(isset($_GET['building_num'])?$_GET['building_num']:'');
    	$dor_type = htmlspecialchars(isset($_GET['dor_type'])?$_GET['dor_type']:'');
    	$dor_num = htmlspecialchars(isset($_GET['dor_num'])?$_GET['dor_num']:'');  
    	$berth = htmlspecialchars(isset($_GET['berth'])?$_GET['berth']:'');

    	$arr = array('school_area'=>$school_area,'building_num'=>$building_num,'dor_type'=>$dor_type,'dor_num'=>$dor_num,'berth'=>$berth,'token'=>'97b6facf5bd0faa9cbd2fbb3e1aa3b18');
    	$connection = \Yii::$app->db;
    	$user = $connection->createCommand()->insert('user_dormitory', $arr)->execute();
    	if ($user){
            //$code= 200;
            //$msg = '添加成功';
            $arr=array(
            	'code'=> 200,
            	'message' => '添加成功',
	            'data'=>$arr
	        );

            //$json_data = new CommonController($code,$msg,$arr);
            $json_data = json_encode($arr);

            //获取回调函数名
			$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
			//输出jsonp格式的数据
			echo $jsoncallback . "(" . $json_data . ")";
    	} else {
    		$result=array(
                'code'=> '301',
                'message'=>'添加失败',
                'data'=>$arr
            );
            //获取回调函数名
			$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
			//json数据
			$json_data = json_encode($result);
			//输出jsonp格式的数据
			echo $jsoncallback . "(" . $json_data . ")";
    	}
    }

    public function actionReported()
    {
    	$token = htmlspecialchars(isset($_GET['token'])?$_GET['token']:'');
    	$connection = \Yii::$app->db;
    	$command = $connection->createCommand("SELECT * FROM user_dormitory ud inner join user u on ud.token = u.token where ud.token = '$token'");
		$posts = $command->queryAll();
		$json_data = json_encode($posts);

        //获取回调函数名
		$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
		//输出jsonp格式的数据
		echo $jsoncallback . "(" . $json_data . ")";
    }

}