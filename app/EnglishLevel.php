<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnglishLevel extends Model
{
    public function studentProfile()
    {
        return $this->hasOne(StudentProfile::class);
    }
}
