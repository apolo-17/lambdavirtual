@extends('layouts.dashboardAdmin.app')

@section('content')

<div class="mt-16 w-full">
    @foreach($questionary as $question)
        <div class="flex ml-16 p-2">
            <div class="w-1/2 p-2">
                <label class="block uppercase tracking-wide text-gray-700 text-lg font-bold mb-2">{{ $question->question }}</label>
                @foreach($question->answers as $answer)
                    @if($question->answer_selected == $answer->id)
                        <div class="ml-16 w-1/2">
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" value="{{ $answer->answer }}" readonly>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
</div>

@endsection
