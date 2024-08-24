<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class BookCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name_category'];

    public function books()
    {
        return $this->hasMany(Book::class, 'id');
    }
}
