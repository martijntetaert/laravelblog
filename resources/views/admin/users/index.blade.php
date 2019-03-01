@extends('layouts.admin')
@section('content')
    <h1>users</h1>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">photo</th>
            <th scope="col">name</th>
            <th scope="col">e-mail</th>
            <th scope="col">role</th>
            <th scope="col">active</th>
            <th scope="col">created</th>
            <th scope="col">updated</th>
            <th>opties</th>
        </tr>
        </thead>
        <tbody>

            @if ($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>
                            <img src="{{$user->photo ? asset($user->photo->file) : 'https://via.placeholder.com/100x100'}}"
                                 alt="" width="100" class="img-circle">
                        </td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role_id ? $user->role->name : 'user without role'}}</td>
                        <td>{{$user->is_active == 1 ? 'active' : 'not active'}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>
                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary w-100">Edit</a>
                        </td>
                    </tr>
                    @endforeach
            @endif

        </tbody>
    </table>
@stop
