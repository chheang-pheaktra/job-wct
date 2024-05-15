<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $fillable=[
        'category_id',
        'bank_name',
        'position',
        'location',
        'available_position',
        'salary',
        'thumbnail',
        'description'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,);
    }
}
