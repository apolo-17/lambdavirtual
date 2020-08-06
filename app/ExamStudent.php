<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamStudent extends Model
{
    protected $fillable = ['student_id','exam_id','questionary','start','finish','done'];

    protected $dates = ['start','finish'];

    protected $appends = ['result'];

    //protected $with = ['studentProfiles'];

    public function studentProfiles()
    {
        return $this->belongsTo(StudentProfile::class,'student_id');
    }

    public function exam()
    {
        return $this->belongsTo(Exams::class);
    }

    public function getResultAttribute()
    {
        $exam = Exams::find($this->exam_id);
        $exam_questionary = json_decode($exam->questionary);
        $exam_student_questionary = json_decode($this->questionary);

        $answerselected = [];
        $answercorrect = [];
        foreach ($exam_questionary as $value) {
            array_push($answercorrect,$value->answer_correct);
        }

        foreach ($exam_student_questionary as $value) {
            array_push($answerselected,$value->answer_selected);
        }

        $answer_correct = 0;
        for ($i=0; $i < count($answercorrect); $i++) {
            ($answercorrect[$i] == $answerselected[$i]) ? ++$answer_correct : null ;
        }

        return 20*$answer_correct;
    }

}
