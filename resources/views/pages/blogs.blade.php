@extends('pages.layout')

@section('blogsection')

	@foreach($vari as $varis)

	<h1><a href="">{{$varis->title}}</a></h1>
	</br>
	{{$varis->description}}
	</br>
	@endforeach

@stop