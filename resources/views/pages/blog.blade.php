@extends ('pages.layout')

@section ('blog')

@foreach($task as $tasks)
{{$tasks->tasks}} 
</br>
@endforeach
@stop