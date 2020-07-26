<?php

namespace App\Http\Controllers;

use App\Exams;
use App\ExamStudent;
use App\StudentProfile;
use Illuminate\Http\Request;

class ExamStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($exam_id)
    {
        $student = StudentProfile::where('user_id',auth()->user()->id)->first();
        $exam = Exams::find($exam_id);
        $message = false;
        $exam_student = ExamStudent::where([['student_id',$student->id],['exam_id',$exam_id],['done',true]])->first();
        if ($exam_student != null) {
            $message = true;
            $exam_ready = false;
            return view('exam')->with(['exam_id' => $exam_id, 'message' => $message, 'exam_ready' => $exam_ready]);
        }
        //Only temporary
        if (ExamStudent::where([['student_id',$student->id],['exam_id',$exam_id],['done',false]])->first() != null) {
            $exam_created = ExamStudent::where([['student_id',$student->id],['exam_id',$exam_id],['done',false]])->first();
            return view('exam')->with(['exam_id' => $exam_id, 'message' => $message, 'exam_ready' => $exam_created]);
        }
        $questionary = $this->structuringExam($exam->questionary);
        $exam_ready = ExamStudent::create([
            'student_id' => $student->id,
            'exam_id' => $exam_id,
            'questionary' => $questionary,
            'done' => false
        ]);

        return view('exam')->with(['exam_id' => $exam_id, 'message' => $message, 'exam_ready' => $exam_ready->questionary]);
    }

    public function structuringExam($exam)
    {
        $exam = json_decode($exam);

        foreach ($exam as $question) {
            foreach ($question->answers as $answer) {
                $answer->value = false;
            }
        }

        return json_encode($exam);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        dd($request->all());
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
     * @param  \App\ExamStudent  $examStudent
     * @return \Illuminate\Http\Response
     */
    public function show(ExamStudent $examStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExamStudent  $examStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamStudent $examStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExamStudent  $examStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExamStudent $examStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExamStudent  $examStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamStudent $examStudent)
    {
        //
    }
}
