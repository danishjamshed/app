@extends('pages.layout')

@section('createarticle')

<h1>Create New Article</h1>
<hr>
{!! Form::open(['url' => 'wpblog']) !!}

<div class="form-group">

{!! Form::label('title','Title') !!}
{!! Form::text('title',null,['class' => 'form-control']) !!}

</div>

<div class="form-group">
	
	{!! Form::label('description','Body')!!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}

</div>

<div class="form-group">
	
	
    {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}

</div>

{!!Form::close() !!}

@stop

@stop