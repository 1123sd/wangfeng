<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\controllers\Json;

class HelpController extends Controller
{
    public function actionIndex()
    {
    	$token = htmlspecialchars(isset($_GET['token'])?$_GET['token']:''); 
    	$question = htmlspecialchars(isset($_GET['question'])?$_GET['question']:'');
    	$arr = array('question'=>$question,'token'=>$token);
    	$connection = \Yii::$app->db;
    	$user = $connection->createCommand()->insert('user_question', $arr)->execute();
    	if($user){
            $arr=array(
            	'code'=> 200,
            	'message' => '提交成功',
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
                'message'=>'提交失败',
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

    public function actionMyquestion()
    {
    	$token = htmlspecialchars(isset($_GET['token'])?$_GET['token']:'');
    	//$arr = array('question'=>$question,'token'=>$token);
    	$connection = \Yii::$app->db;
    	$command = $connection->createCommand("SELECT * FROM `user_question` where token='$token'");
		$posts = $command->queryAll();
    	if($posts){
            $arr=array(
            	'code'=> 200,
            	'message' => '提交成功',
	            'data'=>$posts
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
                'message'=>'提交失败',
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

    public function actionAnswer()
    {
    	$token = htmlspecialchars(isset($_GET['token'])?$_GET['token']:'');
    	//$arr = array('question'=>$question,'token'=>$token);
    	$connection = \Yii::$app->db;
    	$command = $connection->createCommand("SELECT * FROM `school_answer` as sa inner join `user_question` as q on sa.qid=q.qid");
		$posts = $command->queryAll();
    	if($posts){
            $arr=array(
            	'code'=> 200,
            	'message' => '成功',
	            'data'=>$posts
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
                'message'=>'失败',
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