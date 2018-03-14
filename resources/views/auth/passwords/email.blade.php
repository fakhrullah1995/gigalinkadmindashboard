@extends('layouts.app')

@section('content')
  @if (session('status'))
      <div class="notification is-success">
          {{ session('status') }}
      </div>
  @endif

  
  <div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
      <div class="card">
        <div class="card-content">
          <h1 class="title has-text-centered">Forget Password?</h1>

          <form action="{{route('password.email')}}" method="POST" role="form">
            {{csrf_field()}}

          <div class="field">
            <label for="email" class="label">Email Address</label>
            <p class="control">
              <input class="input {{$errors->has('email') ? 'is-danger' : ''}}"type="text" name="email" id="email" value="{{old('email')}}" placeholder="name@example.com"required>
            </p>
              @if($errors->has('email'))
                <p class="help is-danger">{{$errors->first('email')}}</p>
              @endif
          </div>

        <button class="button is-primary is-outlined is-fullwidth m-t-30">Reset</button>
          </form>
      </div> <!--end of card-content-->
      </div>
        <h5 class="has-text-centered m-t-20"><a class="is-muted" href="{{route('login')}}"> <i class="fa fa-caret-left"> Back to Login?</i></a></h5>
    </div>
  </div>








@endsection





{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
