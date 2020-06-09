<?php
namespace app\index\controller;

use think\Controller;
use think\Build;
use think\Request;
use think\View;
use think\Config;
use think\Db;
use think\Model;

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

       //var_dump(config('wn')) ;
       //
       //var_dump(config('database'));
        // $user = model('User');
        // $list=[
        //     ['username'=>'wn','password'=>'wn'],
        //     ['username'=>'wy','password'=>'wy'],
        // ];
        // //var_dump($user->name);
        // $user->allowField(true)->saveAll($list);
        return view();

      
    }
}
