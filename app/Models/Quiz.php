<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'score',
        'category_id',
        'career_id'
    ];
    public function careers()
    {
        return $this->belongsTo(Career::class,'career_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function question()
    {
        return $this->hasMany(Question::class);
    }

}
