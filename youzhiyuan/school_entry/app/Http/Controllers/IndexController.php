<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        /*$url = "http://www.09d.com/shcool_entry_home/basic/web/?r=index/index";
        //echo $url;die;
        $json = file_get_contents($url);
        //print_r($json);die;
        $img_path = json_decode($json,true);
        //print_r($img_path);die;
        $urls = "http://www.09d.com/shcool_entry_home/basic/web/?r=index/news";
        $jsons = file_get_contents($urls);
        $content = json_decode($jsons,true);
       print_r($content);die;
        return view('index',['img_path'=>$img_path,'content'=>$content]);  //王峰*/
        }
}