@extends('layouts.manage')

@section('content')

<div class="flex-container">
        <div class="columns  m-l-30 m-t-30">
            <div class="column">
                <h1 class="title">View Permissions Details</h1>
            </div>
            <div class="column ">
                    <a href="{{route('permissions.edit', $permission->id)}}" class="button is-primary is-pulled-right "><i class="fa fa-edit- m-r-10"></i>Edit Permission</a>
        </div>
    </div>
        <hr class="m-t-0">

        <div class="columns m-l-30">
            <div class="column">
            {{--Display user name--}}
            <div class="field"> 
                <p><strong>{{$permission->display_name}}</strong>&nbsp;<small>{{$permission->name}}</small></p>
            </div>
                {{--Display user email--}}
                <div class="field">
                    <p>Allow a user to {{$permission->description}} </p>
                </div>
            </div>
        </div>
    </div>

@endsection
