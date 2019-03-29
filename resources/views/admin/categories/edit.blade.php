@extends('layouts.admin')
@section('content')
    <h1>edit user</h1>
    {!! Form::model($categorie,['method'=>'PATCH','action'=>['AdminCategoriesController@update',$categorie->id]])
     !!}
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('update categorie',['class'=>'btn btn-primary col-md-6']) !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['action' => ['AdminCategoriesController@destroy',$categorie->id], 'method' => 'DELETE']) !!}
            <div class="form-group">
                {!! Form::submit('delete user',['class'=>'btn btn-danger col-md-6']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>



    @include('includes.formd_error')
@stop
