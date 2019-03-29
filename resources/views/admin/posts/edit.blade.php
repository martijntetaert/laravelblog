@extends('layouts.admin')
@section('content')
    <h1>edit post</h1>
    {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true]) !!}
    <div class="row">
        <div class="col-md-3">
            <img src="{{$post->photo ? asset($post->photo->file) : 'https://via.placeholder.com/100x100'}}" height="100"
                 class="img-circle" alt="">
            <div class="form-group">
                {!! Form::label('photo_id','Photo:') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="col-md-9">
            <div class="form-group">
                {!! Form::label('title','Title:') !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body','body:') !!}
                {!! Form::text('body',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id','Categorie:') !!}
                {!! Form::select('category_id',[''=>'choose options']+ $categories,null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('update post',['class'=>'btn btn-primary col-md-6']) !!}
            </div>
            {!! Form::close() !!}
            {!! Form::open(['action' => ['AdminPostsController@destroy',$post->id], 'method' => 'DELETE']) !!}
            <div class="form-group">
                {!! Form::submit('delete post',['class'=>'btn btn-danger col-md-6']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    </div

    ved



    @include('includes.formd_error')
@stop
