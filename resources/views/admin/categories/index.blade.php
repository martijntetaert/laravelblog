@extends('layouts.admin')
@section('content')

    <div class="col-md-6">
        <h1>all categories</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">name</th>
                <th scope="col">created at</th>
                <th scope="col">updated at</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody>
            @if ($categories)
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at->diffForHumans()}}</td>
                        <td>{{$category->updated_at->diffForHumans()}}</td>
                        <td>
                        <td>
                            <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary w-100">Edit</a>
                        </td>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <h2>Make post</h2>
        {!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('create categorie',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop
