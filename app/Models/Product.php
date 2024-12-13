<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'serial_number',
        'brand_id',
        'category_id',
        'subcategory_id', // foreign keys, not 'category' and 'subcategory'
    ];


    protected $casts = [
        'images' => 'array',
    ];

    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }

    // Relationship with documents
    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Category::class, 'subcategory_id');
    }
}
