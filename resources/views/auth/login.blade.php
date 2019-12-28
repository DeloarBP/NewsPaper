@extends('layouts.app')

@section('content')
<div class="h-screen w-screen" style="background: url('./images/login/bg-login.svg'); background-size: 80%; background-position: center center; background-repeat: no-repeat;">
    <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0">
        <div class="flex rounded-lg shadow-lg w-full sm:w-3/4 lg:w-1/2 bg-white sm:mx-0" style="height: 500px">
            <div class="flex flex-col w-full md:w-1/2 p-4">
                <div class="flex flex-col flex-1 justify-center mb-8">
                    <h1 class="text-4xl text-center font-thin">{{ config('app.name') }}</h1>
                    <div class="w-full mt-4">
                        <form class="form-horizontal w-3/4 mx-auto" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="flex flex-col mt-4">
                                <input id="email" type="text" 
                                        class="flex-grow h-8 px-2 border rounded border-grey-400 @error('email') border-red-500 @enderror" 
                                        name="email" value="{{ old('email') }}" 
                                        required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="text-red-500" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="flex flex-col mt-4">
                                <input id="password" type="password" class="flex-grow h-8 px-2 rounded border border-grey-400 @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="text-red-500" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="flex items-center mt-4">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="mr-2"> 
                                <label for="remember" class="text-sm text-grey-dark">{{ __('Remember Me') }}</label>
                            </div>
                            <div class="flex flex-col mt-8">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded">
                                {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="hidden md:block md:w-1/2 rounded-r-lg border-l-2" 
                style="background: url('./images/login/login-card.svg'); background-size: 80%; background-position: center center; background-repeat: no-repeat;">
            </div>
        </div>
    </div>
</div>
@endsection
