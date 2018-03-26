@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Edit Permissions Details</h1>
      </div>
        <div class="column">
        <a href="{{route('permissions.edit', $permission->id)}}" class="button is-info is-pulled-right"><i class="fa fa-edit"></i>Edit Permissions</a>
       </div>
    </div>
    <hr class="m-t-0">

    <form action="{{route('permissions.update', $permission->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}

        <div class="field">
            <label for="display_name"><strong>Name</strong> <small>(Display Name)</small></label>
            <p class="control">
                <input type="text" class="input" name="display_name" id="display_name" value="{{$permission->display_name}}">
            </p>
        </div>

        <div class="field">
                <label for="name"><strong>Slug</strong> <small>(Can not be change)</small> </label>
                <p class="control">
                    <input type="text" class="input" name="name" id="name" value="{{$permission->name}}">
                </p>
        </div>

            <div class="field">
                    <label for="description"><strong>Permission Description</strong></label>
                    <p class="control">
                        <input type="text" class="input" name="description" value="{{$permission->description}}">
                    </p>
            </div>

            <button class="button is-primary">Save changes</button>
    </form>


  </div> <!-- end of .flex-container -->
@endsection
