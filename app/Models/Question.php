<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question', 'categories_id'
    ];

    public function categories(){
        return $this->belongsTo(Category::class);
    }
    public function answers(){
        return $this->hasMany(Answer::class, 'questions_id');
    }
}
