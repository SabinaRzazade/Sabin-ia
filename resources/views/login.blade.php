@extends('layouts.app')

@section('title', 'SABIN | Login')


@section('content')



<section class="login-section">
      <div class="login-card">
        <h2>WELCOME BACK</h2>
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="you@example.com"
              required
            />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              id="password"
              placeholder="••••••••"
              required
            />
          </div>
          <button type="submit" class="btn btn-login mt-3">Login</button>
          <div class="register-link mt-3">
            Don't have an account? <a href="#">Sign up here</a>
          </div>
        </form>
      </div>
    </section>
@endsection
