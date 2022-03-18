<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <div>
            <button id="teacher"><span>Register as Teacher </span></button>
            <button id="user"><span >Register as User</span></button>

        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form id="formTeacher" method="POST" class="displayNone" action="{{ url('teacher/register') }}">
            @csrf
            <h3>Teacher</h3>

            <!-- Username -->
            <div>
                <x-label for="username" :value="__('username')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>

            <!-- First name -->
            <div>
                <x-label for="firstName" :value="__('First Name')" />

                <x-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" :value="old('firstName')" required autofocus />
            </div>

            <!-- Last name -->
            <div>
                <x-label for="lastName" :value="__('Last Name')" />

                <x-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" :value="old('lastName')" required autofocus />
            </div>

            <!-- phone -->
            <div>
                <x-label for="lastName" :value="__('Phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            </div>
            <!-- Name -->
            <div>
                <x-label for="profession" :value="__('Profession')" />

                <x-input id="profession" class="block mt-1 w-full" type="text" name="profession" :value="old('profession')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ url('teacher/register') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>

{{--second--}}
        <form id="formUser" method="POST" class="displayNone" action="{{route('register') }}">
        @csrf
            <h3>User</h3>
        <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="username" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
{{--            <div class="mt-4">--}}
{{--                <x-label for="role" :value="__('Role')" />--}}
{{--                <select name="role" class="block mt-1 w-full" required>--}}
{{--                    --}}{{--                    @foreach($countries as $id => $entry)--}}
{{--                    --}}{{--                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>--}}
{{--                    <option value="" >choose</option>--}}
{{--                    <option value="admin" >admin</option>--}}
{{--                    <option value="teacher" >teacher</option>--}}
{{--                    <option value="user" >user</option>--}}
{{--                    --}}{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                         type="password"
                         name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>

    </x-auth-card>
</x-guest-layout>
<style>
    .displayNone {
        display: none;
    }
    span{
        margin: 2px 32px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>


<script>
    $(document).ready(function(){
        $( "#teacher" ).click(function() {
            $("#formTeacher").removeClass('displayNone');
            $("#formUser").addClass('displayNone');
        });
        $( "#user" ).click(function() {
            $("#formTeacher").addClass('displayNone');
            $("#formUser").removeClass('displayNone');
        });
    });


</script>
