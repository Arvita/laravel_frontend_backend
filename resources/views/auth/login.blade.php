@extends('backend/layouts.login')

@section('content')
      <!-- start: LOGIN BOX -->
      <div class="box-login">
        <h3>Sign in to your account</h3>
        <p>
          Please enter your username and password to log in.
        </p>
        <form method="POST" action="{{ route('login') }}">
                        @csrf
            <fieldset>
            <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
              <span class="input-icon"><i class="fa fa-user"></i>
              <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="{{ old('username') }}">
              @if ($errors->has('username'))
                  <span class="help-block" for="username">
                      {{ $errors->first('username') }}
                  </span>
              @endif
          </span>
            </div>
            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
              <span class="input-icon">
                <i class="fa fa-lock"></i>
                <input type="password" class="form-control password" name="password" placeholder="Password">
                @if ($errors->has('password'))
                      <span class="help-block" for="password">
                          {{ $errors->first('password') }}
                      </span>
                  @endif
              </span>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-orange pull-right">
                Login <i class="fa fa-arrow-circle-right"></i>
              </button>
            </div>
          </fieldset>
        </form>
      </div>
      <!-- end: LOGIN BOX -->
@endsection
