@extends('layouts.adminlayout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">All Users</h1>
        </div>
    </div>

    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Role</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>
            @if($users)
                @foreach($users as $user)

                    @if($user->role_id !=1)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td><img height="50" width="50" src="http://placehold.it/400x400" alt="no photo"></td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->contact}}</td>
                        <td>

                            @if($user->role_id == 1)
                                Admin
                            @endif
                            @if($user->role_id == 2)
                                Client
                            @endif
                            @if($user->role_id == 3)
                                Owner
                            @endif

                        </td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                    </tr>

                    @endif
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection