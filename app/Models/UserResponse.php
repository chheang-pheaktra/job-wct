<?php

// app/Models/UserResponse.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'career_id',
        'quiz_id',
        'questions_id',
        'choice_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

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

    public function question()
    {
        return $this->belongsTo(Question::class, 'questions_id');
    }

    public function choice()
    {
        return $this->belongsTo(Choice::class);
    }
}

