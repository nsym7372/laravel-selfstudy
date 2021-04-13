<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    protected $fillable = ['isbn', 'title', 'price', 'publisher', 'published'];
    //
    public function reviews()
    {
        return $this->HasMany('App\Review');
    }
}
