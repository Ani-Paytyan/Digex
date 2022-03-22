{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}
{{--        <div>--}}
{{--            <button id="teacher"><span>Register as Teacher </span></button>--}}
{{--            <button id="user"><span >Register as User</span></button>--}}

{{--        </div>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form id="formTeacher" method="POST" class="displayNone" action="{{ url('teacher/register') }}">--}}
{{--            @csrf--}}
{{--            <h3>Teacher</h3>--}}

{{--            <!-- Username -->--}}
{{--            <div>--}}
{{--                <x-label for="username" :value="__('username')" />--}}

{{--                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- First name -->--}}
{{--            <div>--}}
{{--                <x-label for="firstName" :value="__('First Name')" />--}}

{{--                <x-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Last name -->--}}
{{--            <div>--}}
{{--                <x-label for="lastName" :value="__('Last Name')" />--}}

{{--                <x-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- phone -->--}}
{{--            <div>--}}
{{--                <x-label for="lastName" :value="__('Phone')" />--}}

{{--                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />--}}
{{--            </div>--}}
{{--            <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="profession" :value="__('Profession')" />--}}

{{--                <x-input id="profession" class="block mt-1 w-full" type="text" name="profession" :value="old('profession')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}
{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ url('teacher/register') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}

{{--second--}}
{{--        <form id="formUser" method="POST" class="displayNone" action="{{route('register') }}">--}}
{{--        @csrf--}}
{{--            <h3>User</h3>--}}
{{--        <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')" />--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="username" :value="old('name')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="role" :value="__('Role')" />--}}
{{--                <select name="role" class="block mt-1 w-full" required>--}}
{{--                    --}}{{----}}{{--                    @foreach($countries as $id => $entry)--}}
{{--                    --}}{{----}}{{--                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>--}}
{{--                    <option value="" >choose</option>--}}
{{--                    <option value="admin" >admin</option>--}}
{{--                    <option value="teacher" >teacher</option>--}}
{{--                    <option value="user" >user</option>--}}
{{--                    --}}{{----}}{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                         type="password"--}}
{{--                         name="password"--}}
{{--                         required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                         type="password"--}}
{{--                         name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}

{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}


@extends('layouts/layoutRegistration')
    @section('content')
        <h1 class="hero-title text-center mb-5">Sign Up</h1>

        <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Teacher</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">User</label>
                <div class="login-form">
                    <form id="formTeacher" class="sign-in-htm" method="POST" action="{{ url('teacher/register') }}">
                        @csrf
                        <div class="group">
                            <label for="username" class="label">Username</label>
                            <input id="username" class="input form-control" type="text" name="username" :value="old('username')" required autofocus>
                        </div>

                        <div class="group">
                            <label for="profession" class="label">Profession</label>
                            <input id="profession" class="input form-control" type="text" name="profession" :value="old('profession')" required autofocus>
                        </div>
                        <div class="group">
                            <label for="email" class="label">Email Address</label>
                            <input id="email" class="input form-control" type="email" name="email" :value="old('email')" required >
                        </div>
                        <div class="group">
                            <label for="password" class="label">Password</label>
                            <input id="password" type="password"  name="password" class="input form-control" required autocomplete="new-password">
                        </div>
                        <div class="group">
                            <label for="password_confirmation" class="label">Repeat Password</label>
                            <input id="password_confirmation" type="password" class="input form-control" name="password_confirmation" required >
                        </div>
                        <div class="group">
                            <input type="submit" class="btn custom-btn form-control mt-4 mb-3" value="Sign Up">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                        </div>
                    </form>
                    <form id="formUser" class="sign-up-htm" method="POST" action="{{route('register') }}">
                        @csrf
                        <div class="group">
                            <label for="username" class="label">Username</label>
                            <input id="username" class="input form-control" type="text" name="username" :value="old('username')" required autofocus>
                        </div>
                        <div class="group">
                            <label for="email" class="label">Email Address</label>
                            <input id="email" class="input form-control" type="email" name="email" :value="old('email')" required >
                        </div>
                        <div class="group">
                            <label for="password" class="label">Password</label>
                            <input id="password" type="password"  name="password" class="input form-control" required autocomplete="new-password">
                        </div>
                        <div class="group">
                            <label for="password_confirmation" class="label">Repeat Password</label>
                            <input id="password_confirmation" type="password" class="input form-control" name="password_confirmation" required >
                        </div>
                        <div class="group">
                            <input type="submit" class="btn custom-btn form-control mt-4 mb-3" value="Sign Up">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                        </div>
                    </form>
                </div>
    @endsection
