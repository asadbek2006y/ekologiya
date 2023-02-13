<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qonun;
use App\Comite;
use App\Huquqlar;
use App\Funksiyalar;
use App\Functian;
use App\Rahbar;
use App\Vilrahbar;
use App\Xisobot;
use App\Bestworker;
use App\News;







class FileController extends Controller
{
    public function index()
    {
        $qonun = Qonun::paginate(10);
        return view('files',compact('qonun'));

    }
    public function comit()
    {
        $qonun = Comite::all();
        return view('comit',compact('qonun'));

    }
    public function huquq()
    {
        $huquq = Huquqlar::all();
        return view('huquqiy',compact('huquq'));

    }
    public function cfunc()
    {
        $func = Funksiyalar::all();
        return view('comfunctions',compact('func'));

    }
    public function function()
    {
        $func = Functian::all();
        return view('functions',compact('func'));

    }
    public function functionshow($id)
    {
        $func = Functian::find($id);
        return view('show',compact('func'));

    }
    public function abrah($id)
    {
        $func = Vilrahbar::find($id);
        return view('abrahbar',compact('func'));

    }
    public function shxisob($id)
    {
        $func = Xisobot::find($id);
        return view('showxisob',compact('func'));

    }
    public function rahbar()
    {
        $rah = Rahbar::all();
        return view('rahbariyat',compact('rah'));

    }
    public function viloyat()
    {
        $rah = Vilrahbar::all();
        return view('viloyat',compact('rah'));

    }

    public function xisobot()
    {
        $qonun = Xisobot::paginate(10);
        return view('xisobotlar',compact('qonun'));

    }

    public function yangiliklar()
    {
        $func = News::paginate(10);
        return view('yangiliklar',compact('func'));

    }
    public function contact()
    {
        return view('contact');

    }
}
