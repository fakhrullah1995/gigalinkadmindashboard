@extends('layouts.manage')

@section('content')

<div class="flex-container">
        <div class="columns  m-l-30 m-t-30">
            <div class="column">
                <h1 class="title">View User Details</h1>
            </div>
            <div class="column">
                    <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user- m-r-10"></i>Edit User</a>
        </div>
    </div>
        <hr class="m-t-0">

        <div class="columns m-l-30">
            <div class="column">
            {{--Display user name--}}
            <div class="field">
                    <label for="name" class="label">Name</label>
                    <pre>{{$user->name}}</pre>
                </div>
    
                {{--Display user email--}}
                <div class="field">
                    <label for="email" class="label">Email</label>
                    <pre>{{$user->email}}</pre>
                </div>
            </div>
        </div>
    </div>

@endsection