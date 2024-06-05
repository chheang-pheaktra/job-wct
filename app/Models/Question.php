<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Translation\t;

class Question extends Model
{
    use HasFactory;
    protected $fillable=[
        'quiz_id',
        'career_id',
        'question_text',
        'answer',
        'score'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function careers()
    {
        return $this->belongsTo(Career::class,'career_id');
    }
    public function quiz()
    {
        return $this->belongsTo(Quiz::class,'quiz_id');
    }
    public function choice()
    {
        return $this->hasMany(Choice::class);
    }

}
