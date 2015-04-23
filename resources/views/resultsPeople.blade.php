@extends ('_master')
@section ('title')
    Your Results
@stop

@section('content')
    <div id="results">
    <h1>Your Results</h1>
    @for($i = 0; $i < count($names); $i++)
        <div id = "cool">
        <p>{{$names[$i]}}</p>
        @if($birthdays)
            <p>Born: {{$birthdays[$i]}}</p>
        @endif
        @if($descriptions)
            <p>{{$descriptions[$i]}}</p>
        @endif
        </div>
    @endfor
    </div>
@stop