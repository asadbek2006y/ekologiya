<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Bestworker;


class MainController extends Controller
{
public function index()
{
    $new = News::all();
    return view('welcome',compact('new'));

}
public function single($id)
{
    $new = News::find($id);
    return view('single',compact('new'));

}
public function best()
{
    $best = Bestworker::all();
    return view('footer',compact('best'));


}

}
