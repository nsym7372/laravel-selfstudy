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

    public function list()
    {
        # code...
        return view('save.list', [
            'books' => Book::all()
        ]);
    }

    public function edit(int $id)
    {
        return view('save.edit', [
            'b' => Book::findOrFail($id)
        ]);
        # code...
    }

    public function update(Request $req, int $id)
    {
        $b = Book::find($id);

        $b->fill($req->except('_token', '_method'))->save();
        return redirect('save/list');
    }

    public function show(int $id)
    {
        return view('save.detail', [
            'book' => Book::findOrFail($id)
        ]);
    }

    public function destroy(int $id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('save/list');
    }
}
