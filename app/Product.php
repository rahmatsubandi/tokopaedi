<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'users_id', 'categories_id', 'price', 'description', 'slug'
    ];

    protected $hidden = [
        // 
    ];

    // Memberikan relasi ke tabel products_galleries
    public function galleries()
    {
        /**
         * Contoh code jika data terhapus namun tetap bisa di panggil atau di tampilkan
         * return $this->hasMany(ProductGallery::class, 'products_id', 'id')->withTrashed();
         */
        return $this->hasMany(ProductGallery::class, 'products_id', 'id')->withTrashed();
    }

    // Memberikan relasi ke tabel users
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    // Memberikan relasi ke tabel categories
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}
