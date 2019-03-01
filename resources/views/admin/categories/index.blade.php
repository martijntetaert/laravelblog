@extends('layouts.admin')
@section('content')
    <h1>all posts</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">name</th>
            <th scope="col">created at</th>
            <th scope="col">updated at</th>
        </tr>
        </thead>
        <tbody>
        @if ($categories)
            @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->created_at}}</td>
            <td>{{$category->updated_at}}</td>
        </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop
