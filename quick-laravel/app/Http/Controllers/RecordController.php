<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    //
    public function find()
    {
        return Book::find(3)->title;
    }

    public function where()
    {
        $ret = Book::where('publisher', '翔泳社')->get();
        return view('record.list', ['records' => $ret]);
    }

    public function first()
    {
        $ret = Book::where('publisher', '翔泳社')->first();
        return $ret->title;
    }
}
