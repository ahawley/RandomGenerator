@extends ('_master')
@section ('title')
    Random People!!
@stop

@section('content')
    <div id = "body">
        <form method = "post" action = "/people" id = "myForm">
            Number of People: <br/>
            <input type = "text" name = "number"/><br/>
            </br>
            Birthdays?
            <input type = "checkbox" name = "hasBirthday"/><br/>
            Descriptions? 
            <input type = "checkbox" name = "hasDescription"/><br/>
            <br/>
            <input type = "submit" value = "Generate"/>
            <input type = 'hidden' name = '_token' value = '{{ csrf_token() }}'/>
        </form>
    </div>
@stop