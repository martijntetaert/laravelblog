@extends('layouts.admin')
@section('content')
    <h1>all posts</h1>
    <p>aantal: {{$aantal}}</p>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col">user</th>
            <th scope="col">category</th>
            <th scope="col">title</th>
            <th scope="col">body</th>
            <th scope="col">post link</th>
            <th scope="col">comments</th>
            <th scope="col">created at</th>
            <th scope="col">updated at</th>
            <th scope="col">opties</th>
        </tr>
        </thead>
        <tbody>
        @if ($posts)
            @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>
                            <img src="{{$post->photo ? asset($post->photo->file) : 'https://via.placeholder.com/100x100'}}"
                                 alt="" width="100">
                        </td>
                        </td>
                        <td>{{$post->user->name}}</td>
                        <td>{{$post->category->name}}</td>
                        <td>a{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>psot link</td>
                        <td>comments</td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                        <th>
                            <a href="{{route('posts.edit', $post->slug)}}" class="btn w-100 btn-primary">Edit</a>
                        </th>
                    </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="row">
        <div class="col-12">
            {{$posts->links()}}
        </div>
    </div>
@stop
