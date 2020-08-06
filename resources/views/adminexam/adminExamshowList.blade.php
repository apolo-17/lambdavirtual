@extends('layouts.dashboardAdmin.app')

@section('content')
<div>
    <exam-student-aplication
        :exam_aplication="{{ $exam_aplication }}"
        :country="{{ $country }}"
    ></exam-student-aplication>
</div>
@endsection
