<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamStudent extends Model
{
    protected $fillable = ['student_id','exam_id','questionary','done'];

    public function studentProfiles()
    {
        return $this->belongsToMany(StudentProfile::class);
    }

    public function exams()
    {
        return $this->belongsToMany(Exams::class);
    }
}
