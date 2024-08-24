<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notifications extends Model
{
    use HasFactory, SoftDelete;

    protected $fillable = ['user_id', 'title', 'text', 'is_read'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
