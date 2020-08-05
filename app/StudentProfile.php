<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class StudentProfile extends Model
{
    use Uuid;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['user_id','name','last_name','phone_number','country_id','department','province','district','born_date','gender','dni','university_id','school_cycle_id','academic_degree_id','english_level_id','work'];

    protected $appends = ['full_name','age','genero'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function schoolCycle()
    {
        return $this->belongsTo(SchoolCycle::class);
    }

    public function academicDegree()
    {
        return $this->belongsTo(AcademicDegree::class);
    }

    public function englishLevel()
    {
        return $this->belongsTo(EnglishLevel::class);
    }

    public function getFullNameAttribute()
    {
        return $this->last_name . ' ' . $this->name;
    }

    public function getAgeAttribute()
    {
        return  Carbon::parse($this->born_date)->age;
    }

    public function getGeneroAttribute()
    {
        if ($this->gender == 'F') {
            return 'Femenino';
        }

        return  'Masculino';
    }
}
