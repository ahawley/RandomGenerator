@extends('_master')
@section ('title')
    Your Results
@stop

@section('content')
    <div id="results">
    <h1>Your Results</h1>
    <ul>
    @foreach($paragraphs as $paragraph)
        <li>{{$paragraph}}</li>
    @endforeach
    </ul>
    </div>
@stop