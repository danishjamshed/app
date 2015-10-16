

@extends('pages.layout')
@section('about')
@if(count($people))
<ul>
@foreach($people as $person)
	<li>{{$person}}</li></br>
@endforeach
</ul>
@endif
@stop
