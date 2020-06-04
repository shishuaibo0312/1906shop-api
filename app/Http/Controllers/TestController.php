<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
class TestController extends Controller
{
    //简单的秒杀设计
    function seckill(){
    	$list_name='seckill';      //队列的key

    	//假如有50个人秒杀5个商品
    	for ($i=0; $i < 100; $i++) { 
    		$user_name=Str::random(8);  //随机生成用户名
    		$goods_num=5;             //商品的数量

    		//由于只有5个商品 所以队列的长度不得大于5
    		if(Redis::lLen($list_name)<$goods_num){
    			Redis::rPush($list_name,$user_name);
    			echo "恭喜用户".$user_name."：秒杀成功";
    			echo "<br>";
    		}else{
    			echo "对不起,秒杀已经结束";
    			echo "<br>";
    		}
    	}

    }



    //git推送到github后浏览器自动拉取pull
    function pull(){
    	echo "自动上线已开启";
        $cmd=('cd /wwwroot/api && git pull');
        //var_dump($cmd);
        $res=shell_exec($cmd);
        var_dump($res);
    }


    //抽奖的简单设计
     function lucky(){
     	return view('lucky');
     }

    //判断是否中奖
    function getlucky(){
    	$lucky_num=rand(1,1000);
    	//return $lucky_num;
    	if($lucky_num==1){
    		$result='恭喜您抽中一等奖';
    	}else if($lucky_num==2 || $lucky_num==3){
    		$result='恭喜您抽中二等奖';
    	}else if($lucky_num==4 || $lucky_num==5 || $lucky_num==6){
    		$result='恭喜您抽中三等奖';
    	}else{
    		$result='谢谢参与';
    	}

    	return $result;
    }
}
