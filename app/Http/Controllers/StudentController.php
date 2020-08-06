<?php

namespace App\Http\Controllers;

use App\ExamStudent;
use App\StudentProfile;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = StudentProfile::with(['user','university'])->get();

        return view('adminUsers.admin-users-index')->with(['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student_profile = StudentProfile::find($id)->load(['user','university','country','schoolCycle','academicDegree','englishLevel']);

        $student_exam =ExamStudent::where('student_profile_id',$student_profile->id)->with(['exam'])->get();
        return view('adminUsers.admin-users-show')->with(['student' => $student_profile, 'exams' => $student_exam]);
    }

    public function showExamProfileResult($id)
    {
        $exam = ExamStudent::find($id);
        $questionary = json_decode($exam->questionary);
        return view('adminUsers.admin-users-show-exam-profile-result')->with(['questionary' => $questionary]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
