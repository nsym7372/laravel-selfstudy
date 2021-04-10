<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'msg' => 'こんにちは世界',
            'records' => Book::all(),
        ];

        return view('hello.view', $data);
    }

    public function escape()
    {
        return view('hello.escape', [
            'msg' => '<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ" /> <p>Wingsへようこそ</p>'
        ]);
    }

    public function directive()
    {
        return view('hello.directive', [
            'random' => random_int(0, 100),
            'msg' => 'hello world',
            'random2' => random_int(0, 5),
            'weeks' => ['月', '火', '水', '木', '金', '土', '日']
        ]);
    }

    public function master()
    {
        return view('hello.master', [
            'msg' => '個別View側のレイアウトです'
        ]);
    }

    public function comp()
    {
        return view('hello.comp');
    }

    // post
    public function postfunc()
    {
        return view('hello.master', ['msg' => 'post method']);
    }

    // get
    public function getfunc()
    {
        return view('hello.master', ['msg' => 'get method']);
    }

    // get with param
    public function getidfunc(int $id)
    {
        return view('hello.master', ['msg' => 'get method : id = $id']);
    }
}
