@extends('layouts.login')

@section('content')
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf

        <img class="mb-4" src="https://getbootstrap.com/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        @if ($errors->any())
            <div class="alert alert-danger mb-3" role="alert">
                <ul class="list-unstyled mb-0 text-left">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" placeholder={{ __('E-Mail Address') }} class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <label for="password" class="sr-only">{{ __('Password') }}</label>
        <input id="password" type="password" placeholder={{ __('Password') }} class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        <div class="checkbox mb-3">
            <label class="form-check-label" for="remember">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                {{ __('Remember Me') }}
            </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Login') }}</button>

        {{-- @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif --}}
    </form>
@endsection
