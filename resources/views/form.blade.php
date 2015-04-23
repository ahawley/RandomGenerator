@extends ('_master')
@section ('title')
    This isn't a working title!
@stop

@section('content')
    <h1>This is an awesome site!</h1>
    <p>Indicate the max integer you want to get a random number for</p>
    <form method = "post" action = "/form">
        Max <input type= "text" name= "max"/>
        <input type= "submit" value="Gooo!"/>
        <input type = 'hidden' name = '_token' value = '{{ csrf_token() }}'/>
    </form>
@stop