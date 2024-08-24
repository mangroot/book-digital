<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogUsers extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'action_name',
        'action_detail'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id');  // Assuming User model has 'id' as primary key
    }
    
}
