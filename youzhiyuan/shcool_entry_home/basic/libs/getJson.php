<?php

class Json
{
    public static function get($code,$msg,$data=array())
    {
        if(!is_numeric($code)){
            echo '';exit;
        }
        $result=array(
                'code'=>$code,
                'message'=>$msg,
                'data'=>$data
            );

        echo json_encode($result);
    }
}