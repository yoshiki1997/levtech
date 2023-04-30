<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function osts()
    {
        return $this->hasMany(Posts::class);
    }
    
    public function getByCategory(int limit_count = 5)
    {
        return $this->post()->with('category')->OrderBy('updated_at','DESC')->get();
    }
}
