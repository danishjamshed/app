@extends('pages.layout')

@section('contact')
<h2>This is only for contact page</h2>
@stop
@section('about')
@if($first=='danishh')
<h4>This is about section in conatact page </h4>
@else
<p>else section</p>

@endif

@stop