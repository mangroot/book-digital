<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_role',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
