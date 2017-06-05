<?php

namespace App\Http\Controllers;
use App\Models\NewsModel;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(){
        //此处调用model
        $news = DB::table('news')->paginate(5);
        dd($news);
        //调用视图并加载数据
        return view('news/news',['str'=>$news]);//
    }
}