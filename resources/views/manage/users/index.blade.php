@extends('layouts.manage')

@section('content')

<div class="column is-12">
<div class="flex-container">
        <div class="columns m-t-10">
          <div class="column">
            <h1 class="title">Manage Users</h1>
          </div>
          <div class="column">
            <a href="{{route('users.create')}}" class="button is-primary is-pulled-right">
                <i class="fa fa-user-plus m-r-5"></i>Create New User
            </a>
          </div>
        </div>
        <hr class="m-t-0">

        <div class="card">
            <div class="card-content">
                    <table class="table is-narrow">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <th>{{$user->id}}</th>
                                    <th>{{$user->name}}</th>
                                    <th>{{$user->email}}</th>
                                    <th>{{$user->created_at->toFormattedDateString()}}</th>
                                    
                                    <th><a class="button is-outlined" href="{{route('users.show',$user->id)}}">Show</a></th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
            </div>
        </div>
        {{$users->links()}}

</div>

</div>
@endsection