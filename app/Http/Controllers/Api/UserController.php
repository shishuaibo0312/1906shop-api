<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class UserController extends Controller
{
    //登陆的接口
    function login(){
    	$data=request()->all();
    	print_r($data);
    	$name=request()->name;
    	$pass=request()->pass;
    	// $url=env('PASSPORT_APP_NAME').'/api/login';
    	$url='http://passport.1906.com/api/login';
     		$client=new Client();
			$response = $client->request('POST', $url, [
				'form_params' => [
					        'name'  => $name,
							'pass' =>$pass ,
					        ]
					    
					 
                
			]);
			echo 'possport的相应数据';
			echo '<hr>';
			$res=$response->getBody();
			$res=json_decode($res,true);
			print_r($res);
			
    }

    //退出的接口
    function  logout(){
    	$name=request()->name;
    	//echo $name;
    	$url='http://passport.1906.com/api/logout';
     		$client=new Client();
			$response = $client->request('POST', $url, [
				'form_params' => [
					        'name'  => $name			
					        ]		 
                
			]);
			$res=$response->getBody();
			//echo $res;
			$res=json_decode($res,true);
			print_r($res);

    }


    //测试
     function test(){
     	$a=5;


     	// function add(){
     	// 	static $a;
     	// 	return $a++;
     	// 	echo "<br>";
     	// }
     	// echo $a;
     	// ++$a;
     	// echo add();
     	// echo "<br>";
     	// echo add();
  

     	// function add(&$a){
     	// 	$a=6;
     	// }
     	// add($a);    //只能传变量，，不能穿常数
     	// echo  $a;
     	

     	// function  &add(){
     	// 	static $b=10;
     	// 	return $b;
     	// }
     	// echo add();
      //   echo "<br>";
     	// $b=&add();
     	// $b=99;
     	// echo add();


     	// $time=time();
     	// echo $time;

     	// echo "<hr>";
     	// echo sprintf("%u\n", ip2long("157.23.56.90"));
     	// echo "<hr>";
     	// $ip_long = 2635544666;
      //   echo long2ip($ip_long) . "\n";

//      	$sites = array('Google'=>'$ser', 'Runoob'=>'1111', 'Facebook'=>333);
// //序列化
// $serialized_data = serialize($sites);
// echo  $serialized_data;
// //反序列化
// $a = unserialize($serialized_data);
// var_dump($a);
// 
     	$num = 4999.9;
$formattedNum = number_format($num,3);
echo $formattedNum;


     }
    
}
