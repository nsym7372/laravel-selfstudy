<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StateController extends Controller
{
    //
    public function recCookie()
    {
        # code...
        return response()
            ->view('state.view')
            ->cookie('app_title', 'laravel', 60 * 24 * 30);
    }

    public function readCookie(Request $req)
    {
        # code...
        return view('state.readcookie', [
            'app_title' => $req->cookie('app_title')
        ]);
    }

    public function session_put(Request $req)
    {
        # code...
        $req->session()->put('series', '速習シリーズ');
        return '保存しました';
    }

    public function session_get(Request $req)
    {
        $series = $req->session()->get('series', '未定');
        return 'シリーズ : ' . $series;
    }

    public function form()
    {
        # code...
        return view('state.flash');
    }

    public function flash(Request $req)
    {
        $name = $req->name;

        if (empty($name) || mb_strlen($name) > 10) 
        {
            return redirect('state/form')
                ->withInput()
                ->with('alert', '名前は必須、または10文字以内');
        }

        return view('state.flash', [
            'result' => "こんにちは、$name さん"
        ]);
    }
}
