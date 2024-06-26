<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable =[
                'name'
    ];
    public function careers()
    {
        return $this->hasMany(Career::class);
    }
    public function quiz()
    {
        return $this->hasMany(Quiz::class);
    }

}
