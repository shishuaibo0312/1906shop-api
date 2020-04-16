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
    
}
