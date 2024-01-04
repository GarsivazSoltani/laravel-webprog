<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    // protected $table = 'articles_Garsi';
    // public $timestamps = false;
    protected $fillable = ['title', 'body'];
    // protected $guarded = ['title', 'body'];
}
