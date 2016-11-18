<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\controllers\Json;

class IndexController extends Controller
{
    public function actionIndex()
    {
    	$connection = \Yii::$app->db;
    	$command = $connection->createCommand("SELECT img_path FROM `index`");
		$posts = $command->queryAll();
		//print_r($posts);die;
		$arr =array();
		foreach($posts as $v){
			if($v['img_path'] != ''){
				$arr[] = $v;
			}
		}
		echo json_encode($arr);
		//print_r($arr);die;
		//$code = 200;
		//$msg = '成功';
		//json数据
		//print_r($aa);die;
		//$aa = json_encode($arr);
		//print_r($json_data);die;
		//echo $json_data;die;
		//$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
		//$json_data = '$json_data';
		//echo $json_data;die;
		//$json_data = json_encode($arr);
		//echo $json_data;die;
		//$json_data = '[{"img_path":"img\/banner1.png"}]';
		//echo $json_data;die;
		//$json_data = "'$json_data'";
		//获取回调函数名
		//$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);
		//$json_data = '{"code":200,"message":"\u6210\u529f","data":[{"img_path":"img\/banner1.png"}]}';
		//输出jsonp格式的数据
		//echo $jsoncallback . "(" . $json_data . ")";
    }

    public function actionNews()
    {
    	$connection = \Yii::$app->db;
    	$command = $connection->createCommand("SELECT img_path,content,time FROM `school_news`");
		$posts = $command->queryAll();
		//print_r($posts);die;
		$arr =array();
		foreach($posts as $v){
			if($v['img_path'] != ''){
				$arr[] = $v;
			}
		}
		echo json_encode($arr);
		/*$code = 200;
		$msg = '成功';
		$code = 200;
		$ar = Yii::$app->runAction('common/index/',['code'=>$code,'msg'=>'成功','data'=>$arr[1]['img_path']]);
		echo $ar;
		$aa =new CommonController($code,$msg,$arr);
		echo $aa;*/
		//echo $aa;						
    }

    public function actionMenu()
    {
    	$connection = \Yii::$app->db;
    	$command = $connection->createCommand("SELECT url FROM `school_menu`");
		$posts = $command->queryAll();
		//print_r($posts);die;
		$arr =array();
		foreach($posts as $v){
			if($v['url'] != ''){
				$arr[] = $v;
			}
		}
		$code = 200;
		$msg = '成功';
		$aa =new CommonController($code,$msg,$arr);
		echo $aa;
    }
}