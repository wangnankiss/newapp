<?php
namespace app\admin\controller;

use think\Controller;
use think\Build;
use think\Request;
use think\View;
use think\Config;
use think\Db;

class Index extends \think\Controller
{
    public function index()
    {
   /*     $user=[];
        for ($key=0;$key<10;$key++){

            $user[]=[

                'name'=>'chester'.$key,
                'age'=>rand(20,30),
                'salary'=>rand(10000,150000)

            ];
        }

        return view('index',['user'=>$user]);*/

       var_dump(config('wn')) ;
      
    }
}
