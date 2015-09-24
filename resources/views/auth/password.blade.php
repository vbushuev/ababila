@extends('master')
@section('title', 'reset password')
@section('sidebar')
    @include('menubar')
@endsection
@section('content')
    <div class="content">
        <div class="title">Reset password</div>
        <form method="POST" action="/password/email">
          {!! csrf_field() !!}
          <div>
            Email
            <input type="email" name="email" value="{{ old('email') }}">
          </div>

          <div>
            <button type="submit">
              Send Password Reset Link
            </button>
          </div>
      </form>
    </div>
@endsection
