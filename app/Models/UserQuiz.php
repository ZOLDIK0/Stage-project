<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuiz extends Model
{
    use HasFactory;
    protected $table = "users_quiz";
    protected $casts = [
        'answers' => 'object',
    ];
    protected $guarded = [];

    public function quiz(){
        return $this->belongsTo(Quiz::class, 'quiz_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}