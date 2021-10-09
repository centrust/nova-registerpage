@extends('nova-registerpage::layout')

@section('content')

@include('nova-registerpage::partials.header')

<form
    class="bg-white shadow rounded-lg p-8 max-w-login mx-auto"
    method="POST"
    action="{{ route('register') }}"
>
    @csrf

    @component('nova-registerpage::partials.heading')
        {{ __('Register your account!') }}
    @endcomponent

    <div class="mb-6">
        <label class="block font-bold mb-2" for="name">{{ __('Name') }}</label>
        <input class="form-control form-input form-input-bordered w-full @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

	    @error('name')
	        <span class="invalid-feedback" role="alert">
	            <strong>{{ $message }}</strong>
	        </span>
	    @enderror
    </div>

    <div class="mb-6">
        <label class="block font-bold mb-2" for="email">{{ __('Email Address') }}</label>
        <input class="form-control form-input form-input-bordered w-full @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-6">
        <label class="block font-bold mb-2" for="password">{{ __('Password') }}</label>
        <input class="form-control form-input form-input-bordered w-full @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-6">
        <label class="block font-bold mb-2" for="password-confirm">{{ __('Confirm Password') }}</label>
        <input class="form-control form-input form-input-bordered w-full @error('password') is-invalid @enderror" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
    </div>

    <button class="w-full btn btn-default btn-primary hover:bg-primary-dark" type="submit">
        {{ __('Register') }}
    </button>
</form>
@endsection
