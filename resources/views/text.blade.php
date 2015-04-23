@extends ('_master')
@section ('title')
    Random Text!!
@stop

@section('content')
    <div id = "body">
        <form method = "post" action = "/text" id = "myOtherForm">
            Number of Paragraphs: <br/></br>
            <input type = "text" name = "number"/>
            <input type = "submit" value = "Generate"/>
            <input type = 'hidden' name = '_token' value = '{{ csrf_token() }}'/>
        </form>
    </div>
@stop