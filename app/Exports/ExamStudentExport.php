<?php

namespace App\Exports;

use App\ExamStudent;
use Illuminate\Database\Query\Builder;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class ExamStudentExport implements FromQuery
{
    use Exportable;

    public function __construct($exam_id)
    {
        $this->exam_id = $exam_id;
    }

    /**
     * @return Builder
     */
    public function query()
    {
        return ExamStudent::query()->where('exam_id',$this->exam_id);
    }
}

/* class ExamStudentExport implements FromCollection
{

    public function collection()
    {
        return ExamStudent::all();
    }
} */
