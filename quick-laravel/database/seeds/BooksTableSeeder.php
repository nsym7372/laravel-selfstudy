<?php

use App\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $book = new Book();
        $book->fill([
            "title" => "タイトル１",
            "price" => 1000,
            "publisher" => "翔泳社",
            "published" => '2020-01-01'
        ]);
        $book->save();

        $book1 = new Book();
        $book1->fill([
            "title" => "タイトル２",
            "price" => 1000,
            "publisher" => "翔泳社",
            "published" => '2020-01-01'
        ]);
        $book1->save();
    }
}
