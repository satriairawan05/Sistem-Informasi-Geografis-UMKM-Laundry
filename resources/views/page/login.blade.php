@extends('layouts.main')

@section('content')
  <div class="container my-lg-5">
    <main class="form-signin w-100 m-lg-auto">
      <form action="{{  route('login') }}" method="post">
        @method('post')
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>

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

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        {{-- <p class="mt-5 mb-3 text-muted">&copy; 2022 Politani Samarinda WebGIS Team, Inc</p> --}}
      </form>
    </main>
  </div>
@endsection
