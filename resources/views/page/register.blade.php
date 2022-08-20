@extends('layouts.main')

@section('content')
  <div class="container mt-lg-3">
    <main class="form-signin w-100 m-auto">
      <form action="{{  route('register') }}" method="post">
        @method('post')
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Please sign up</h1>

        <div class="form-floating mb-2">
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="budi" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          <label for="name">Name</label>
          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-floating mb-2">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <label for="email">Email address</label>
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-floating mb-2">
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="current-password">
          <label for="password">Password</label>
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-floating mb-2">
          <input type="password" class="form-control" id="password-confirm" placeholder="Password" name="password_confirmation" required autocomplete="new-password">
          <label for="password-confirm">Confirm Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
        {{-- <p class="mt-5 mb-3 text-muted">&copy; 2022 Politani Samarinda WebGIS Team, Inc</p> --}}
      </form>
    </main>
  </div>
@endsection

