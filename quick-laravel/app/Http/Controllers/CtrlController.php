<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{
    //
    public function index(Request $req)
    {
        $values = [
            // 'server' => $req->server(),
            'root' => $req->root(),
            'url' => $req->url()
        ];
        # code...
        return view('ctrl.index', ['values' => $values]);
    }

    public function index_post()
    {
        # index_post2と同じ
        return redirect()->route('redirect', ['id' => 100]);
    }

    public function index_post2()
    {
        # index_postと同じ
        return redirect()->action('CtrlController@redirect', ['id' => 200]);
    }

    public function plain()
    {
        return response('hello world!', 200)->header('Content-Type', 'text/plain');
        # code...
    }

    public function header()
    {
        return response()
            ->view('ctrl.header', ['msg' => 'hello world!'], 200)
            ->header('Content-Type', 'text/xml');
    }

    public function redirect(Request $req, int $id)
    {
        return response("function redirect : $id / $req->id", 200)->header('Content-Type', 'text/plain');
    }
}
