@extends('layouts.admin')
@section('content')
    <h1>edit user</h1>
    {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
    <div class="row">
        <div class="col-md-3">
            <img src="{{$user->photo ? asset($user->photo->file) : 'https://via.placeholder.com/100x100'}}" height="100"
                 class="img-circle" alt="">
            <div class="form-group">
                {!! Form::label('photo_id','Photo:') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="col-md-9">
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
                {!! Form::select('is_active',array(1=>'active',0=>'not active'),null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password','password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('update user',['class'=>'btn btn-primary col-md-6']) !!}
            </div>
            {!! Form::open(['action' => ['AdminUsersController@destroy',$user->id], 'method' => 'DELETE']) !!}
            <div class="form-group">
            {!! Form::submit('delete user',['class'=>'btn btn-danger col-md-6']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    {!! Form::close() !!}

    @include('includes.formd_error')
@stop
