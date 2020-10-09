<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatabaseTest extends Model
{
    // 追加
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
