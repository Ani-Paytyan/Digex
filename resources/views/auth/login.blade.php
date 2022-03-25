{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}
{{--        <div>--}}
{{--            <button id="teacherButton"><span>Log in as Teacher </span></button>--}}
{{--            <button id="userButton"><span>Log in as User</span></button>--}}

{{--        </div>--}}

        <!-- Session Status -->
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form id="loginTeacher" method="POST" class="displayNone"  action="{{ url('teacher/login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--                <p>Teacher</p>--}}
{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-3">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}

{{--        <form id="loginUser" method="POST" class="displayNone"  action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--            <p>User</p>--}}

{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                         type="password"--}}
{{--                         name="password"--}}
{{--                         required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-3">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}

{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}
{{--<style>--}}
{{--    .displayNone {--}}
{{--        display: none;--}}
{{--    }--}}
{{--    span{--}}
{{--        margin: 2px 32px;--}}
{{--    }--}}
{{--    #loginTeacher {--}}
{{--        background-color: #00bcd4;--}}
{{--    }--}}
{{--    #loginUser {--}}
{{--        background-color: #00bcd4;--}}
{{--    }--}}
{{--</style>--}}
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>


{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        $( "#teacherButton" ).click(function() {--}}
{{--            $("#loginTeacher").removeClass('displayNone');--}}
{{--            $("#loginUser").addClass('displayNone');--}}
{{--        });--}}
{{--        $( "#userButton" ).click(function() {--}}
{{--            $("#loginTeacher").addClass('displayNone');--}}
{{--            $("#loginUser").removeClass('displayNone');--}}
{{--        });--}}
{{--    });--}}


{{--</script>--}}


@extends('layouts/layoutRegistration')
    @section('content')
        <h1 class="hero-title text-center mb-5">Sign In</h1>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Teacher</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">User</label>
        <div class="login-form">
        <form id="loginTeacher" method="POST" action="{{ url('teacher/login') }}" class="sign-in-htm">
    @csrf
    <div class="group">
        {{--                <x-label for="email" :value="__('Email')" />--}}

        {{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
        <label for="user" class="label">Username</label>
        <input id="user" class="input form-control" type="email" name="email" :value="old('email')" required autofocus >
    </div>
    <div class="group">
        <label for="pass" class="label">Password</label>
        <input id="password" class="input form-control" type="password" name="password" required autocomplete="current-password">
    </div>
{{--        <div class="group">--}}
{{--            <input id="check" type="checkbox" class="check" checked>--}}
{{--            <label for="check"><span class="icon"></span> Keep me Signed in</label>--}}
{{--        </div>--}}
    <div class="group">
        <input type="submit" class="btn custom-btn form-control mt-4 mb-3" value="Sign In">
    </div>
    <div class="hr"></div>
    <div class="foot-lnk">
        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
    </div>
    </form>
        <form id="loginUser" method="POST" action="{{ route('login') }}"  class="sign-up-htm">
        @csrf
        <div class="group">
            <label for="user" class="label">Username</label>
            <input id="user" class="input form-control" type="email" name="email" :value="old('email')" required autofocus>
        </div>
        <div class="group">
            <label for="pass" class="label">Password</label>
            <input id="password" type="password" class="input form-control" name="password" required autocomplete="current-password">
        </div>
{{--        <div class="group">--}}
{{--            <input id="check" type="checkbox" class="check" checked>--}}
{{--            <label for="check"><span class="icon"></span> Keep me Signed in</label>--}}
{{--        </div>--}}
        <div class="group">
            <input type="submit" class="btn custom-btn form-control mt-4 mb-3" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
        {{--                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </div>
        </form>
        </div>
    @endsection
