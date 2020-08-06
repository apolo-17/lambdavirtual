<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    protected $fillable = ['name','deploy_exam','finish_exam','duration','active','number_questions','number_subsections','description','questionary','user_id'];

    protected $cast = [
        'questionary' => 'array'
    ];

    public function examStudent()
    {
        return $this->hasMany(ExamStudent::class);
    }
}
