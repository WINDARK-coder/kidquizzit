<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyQuestion extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'image', 'title', 'description', 'description2', 'description3'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
