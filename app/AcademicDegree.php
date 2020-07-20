<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicDegree extends Model
{
    public function studentProfile()
    {
        return $this->hasOne(StudentProfile::class);
    }
}
