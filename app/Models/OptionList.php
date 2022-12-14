<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionList extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getAnswers(){
        return $this->hasMany(AnswerList::class, 'optionId', 'id');
    }
}
