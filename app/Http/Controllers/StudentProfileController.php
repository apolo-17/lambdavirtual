<?php

namespace App\Http\Controllers;

use App\AcademicDegree;
use App\Country;
use App\EnglishLevel;
use App\SchoolCycle;
use App\StudentProfile;
use App\University;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $student = StudentProfile::where('user_id', auth()->user()->id)->with(['user','country','university','schoolCycle','academicDegree','englishLevel'])->first();

        if ($student != null) {
            return view('studentprofile_index')->with(['student' => $student]);
        }
        return redirect()->route('student-profile-create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::get();
        $universities = University::get();
        $school_ciclies = SchoolCycle::get();
        $academic_degrees = AcademicDegree::get();
        $english_levels = EnglishLevel::get();

        return view('studentprofile_create')->with(['countries' => $countries, 'universities' => $universities, 'school_ciclies' => $school_ciclies,
        'academic_degrees' => $academic_degrees, 'english_levels' => $english_levels]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = StudentProfile::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'country_id' => $request->country_id,
            'department' => $request->department,
            'province' => $request->province,
            'district' => $request->district,
            'born_date' => $request->born_date,
            'gender' => $request->gender,
            'dni' => $request->dni,
            'university_id' => $request->university_id,
            'school_cycle_id' => $request->school_cycle_id,
            'academic_degree_id' => $request->academic_degree_id,
            'english_level_id' => $request->english_level_id,
            'work' => $request->work
        ]);
        //return $student;
        return redirect()->route('student-profile-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function show(StudentProfile $studentProfile)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentProfile $studentProfile)
    {
        /* $studient = auth()->user()->studentProfile;
        dd($studient); */
        //return view('studientprofile_edit')->with(['studient' => $studient]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentProfile $studentProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudentProfile  $studentProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentProfile $studentProfile)
    {
        //
    }
}
