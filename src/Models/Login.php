<?php

namespace LaravelLiberu\Auth\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
