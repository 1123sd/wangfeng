<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class CommonController extends Controller
{
    public function __construct($code,$msg,$data=array()){
        if(!is_numeric($code)){
            echo '';exit;
        }
        $result=array(
                'code'=>$code,
                'message'=>$msg,
                'data'=>$data
            );
        //print_r($result);exit;
        //$aa = json_encode($result);exit;  
        //echo "'$aa'";
        echo json_encode($result);
    }
}