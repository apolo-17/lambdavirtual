<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolCycle extends Model
{
    public function studentProfile()
    {
        return $this->hasOne(StudentProfile::class);
    }
}
