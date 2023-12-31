<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'subtitle', 'image', 'description'];


    public function getGetDataAttribute()
    {
        return $this->title . '-' . $this->description;
    }
}
