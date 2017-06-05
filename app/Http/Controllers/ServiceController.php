<?php

namespace App\Http\Controllers;
use App\Models\ServiceModel;

class ServiceController extends Controller
{
    public function index(){
        //此处调用model
        $str=ServiceModel::test();
        //调用视图并加载数据
        return view('service/service',['str'=>$str]);//
    }
}