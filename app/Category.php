<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    // Proctected fillable fields
    protected $fillable = [
        'name',
        'photo',
        'slug',
    ];

    // menyembunyikan model saat di panggil
    protected $hidden = [];
}
