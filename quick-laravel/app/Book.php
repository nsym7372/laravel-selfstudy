<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    protected $fillable = ['isbn', 'title', 'prise', 'publisher', 'published'];
    //
    public function reviews()
    {
        return $this->HasMany('App\Review');
    }
}
