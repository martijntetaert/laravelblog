@extends('layouts.admin')
@section('content')
    <h1>Create post</h1>
    {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title','title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','body:') !!}
        {!! Form::text('body',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('category_id','categorie:') !!}
        {!! Form::select('category_id',[''=>'choose options']+ $categories,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id','Photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('create post',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    @include('includes.formd_error')
@stop
