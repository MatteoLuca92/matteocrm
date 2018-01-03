@extends('layouts.admin')

@section('content')
<h1>Crea Utente</h1>


{!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store']) !!}


<div class="form-group">

{!! Form::label('name','Nome:') !!}
{!! Form::text('name',null,['class'=>'form-control']) !!}

</div>

<div class="form-group">

        {!! Form::label('email','Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
        
</div>

<div class="form-group">

        {!! Form::label('role_id','Ruolo:') !!}
        {!! Form::select('role_id',$roles,1,['class'=>'form-control']) !!}
        
</div>

<div class="form-group">

        {!! Form::label('is_active','Stato:') !!}
        {!! Form::select('is_active', array(1=>'Attivo', 0=>'Non attivo'),0, ['class'=>'form-control']) !!}
        
</div>

<div class="form-group">

        {!! Form::label('password','Password:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
        
</div>


<div class="form-group">
{!! Form::submit('create User',['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}


@include('includes.formerror')


@stop