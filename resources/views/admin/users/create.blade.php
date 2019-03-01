@extends('layouts.admin')
@section('content')
    <h1>Create user</h1>
    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email','email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role_id','role:') !!}
        {!! Form::select('role_id',[''=>'choose options']+ $roles,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('is_active','status:') !!}
        {!! Form::select('is_active',array(1=>'active',0=>'not active'),0,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','password:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id','Photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('create user',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    @include('includes.formd_error')
@stop
