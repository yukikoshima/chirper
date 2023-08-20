<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    // データベースに保存できるプロパティを指定
    protected $fillable = [
        'message',
    ];
}
