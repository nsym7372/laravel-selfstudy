<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    //
    public function create()
    {
        return view('save.create');
    }

    public function store(Request $request)
    {
        $b = new Book();
        $b->fill($request->except('_token'))->save();
        return redirect('save/create');
    }
}
