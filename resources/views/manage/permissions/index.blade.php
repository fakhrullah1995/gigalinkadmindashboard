@extends('layouts.manage')

@section('content')
<div class="column is-12">
    <div class="flex-container">
            <div class="columns m-t-10">
              <div class="column">
                <h1 class="title">Manage Permissions</h1>
              </div>
              <div class="column">
                <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right">
                    <i class="fa fa-user-plus m-r-5"></i>Create New Permissions
                </a>
              </div>
            </div>
            <hr class="m-t-0">
    
            <div class="card">
                <div class="card-content">
                        <table class="table is-narrow">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th>View Permissions</th>
                                        <th>Edit Permissions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($permissions as $permission)
                                    <tr>
                                        <th>{{$permission->display_name}}</th>
                                        <th>{{$permission->name}}</th>
                                        <th>{{$permission->description}}</th>
                                        <th><a class="button is-outlined level-item" href="{{route('permissions.show',$permission->id)}}">View</a></th>
                                        <th><a class="button is-outlined level-item" href="{{route('permissions.edit',$permission->id)}}">Edit</a></th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                </div>
            </div>
    
    </div>
    
    </div>

@endsection