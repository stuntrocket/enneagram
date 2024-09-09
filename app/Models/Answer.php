<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['question_id', 'answer_text', 'type_1_weight', 'type_2_weight', 'type_3_weight', 'type_4_weight', 'type_5_weight', 'type_6_weight', 'type_7_weight', 'type_8_weight', 'type_9_weight'];

    // Define the relationship: An answer belongs to a question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
