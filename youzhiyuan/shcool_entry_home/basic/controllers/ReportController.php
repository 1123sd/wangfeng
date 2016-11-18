<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\controllers\CommonController;

class ReportController extends Controller
{
    public function actionIndex()
    {
    	$name = htmlspecialchars(isset($_GET['name'])?$_GET['name']:'');  
    	$nation = htmlspecialchars(isset($_GET['nation'])?$_GET['nation']:'');   
    	$phone = htmlspecialchars(isset($_GET['phone'])?$_GET['phone']:'');
    	$cellphone = htmlspecialchars(isset($_GET['cellphone'])?$_GET['cellphone']:'');  
    	$born = htmlspecialchars(isset($_GET['born'])?$_GET['born']:'');   
    	$card = htmlspecialchars(isset($_GET['card'])?$_GET['card']:'');
    	$reason = htmlspecialchars(isset($_GET['reason'])?$_GET['reason']:'');
    	$detailed = htmlspecialchars(isset($_GET['detailed'])?$_GET['detailed']:'');
        $time = htmlspecialchars(isset($_GET['time'])?$_GET['time']:'');
    	$arr = array('name'=>$name,'nation'=>$nation,'phone'=>$phone,'cellphone'=>$cellphone,'born'=>$born,'card'=>$card,'detailed'=>$detailed);


    	/*$code= '200';
        $msg='添加成功';
		$arr=array(  
            'data'=>'你好你好'
        );
        $obj_data =new CommonController($code,$msg,$arr);
        //$string = (string)$obj_data;
        //$json_data = json_encode($string);
        //$aa = $json_data->index($code,$msg,$arr);
		echo $obj_data;die;*/


    	//print_r($name);die;
    	$connection = \Yii::$app->db;
    	$user = $connection->createCommand()->insert('user', ['username' => $name,'nation' => $nation,'phone' => $phone,'cellphone' => $cellphone,'born' => $born,'IDcard' => $card,'detailed' => $detailed])->execute();
    	if($user){
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
    	}else{
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

    public function actionDelay()
    {
    	$connection = \Yii::$app->db;
    	$name = htmlspecialchars(isset($_GET['name'])?$_GET['name']:'');  
    	$nation = htmlspecialchars(isset($_GET['nation'])?$_GET['nation']:'');   
    	$phone = htmlspecialchars(isset($_GET['phone'])?$_GET['phone']:'');
    	$cellphone = htmlspecialchars(isset($_GET['cellphone'])?$_GET['cellphone']:'');  
    	$born = htmlspecialchars(isset($_GET['born'])?$_GET['born']:'');   
    	$card = htmlspecialchars(isset($_GET['card'])?$_GET['card']:'');
    	$reason = htmlspecialchars(isset($_GET['reason'])?$_GET['reason']:'');
    	$detailed = htmlspecialchars(isset($_GET['detailed'])?$_GET['detailed']:'');
    	$arr = array('name'=>$name,'nation'=>$nation,'phone'=>$phone,'cellphone'=>$cellphone,'born'=>$born,'card'=>$card,'detailed'=>$detailed);

    	$connection = \Yii::$app->db;
    	$user = $connection->createCommand()->insert('tc_user', ['tc_name' => $name,'tc_kaohao' => $nation,'tc_college' => $phone,'tc_major' => $cellphone,'tc_card' => $born,'tc_time' => $card,'tc_reason'=>$reason])->execute();
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
    	}else{
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
}