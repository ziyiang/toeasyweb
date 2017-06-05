<?php

namespace App\Http\Controllers;
use App\Models\IndexModel;

class IndexController extends Controller
{
    public function index(){
        //此处调用model
        $str=IndexModel::test();
        //调用视图并加载数据
        return view('index/index',['str'=>$str]);//
    }
}