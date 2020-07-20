<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    public function studentProfile()
    {
        return $this->hasOne(StudentProfile::class);
    }
}
