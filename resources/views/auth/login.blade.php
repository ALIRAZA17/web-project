<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <img src="{{ asset('img/jobify.png') }}" alt="Company Logo">
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="flex mt-4 items-center justify-between">
                {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                <img src="{{ asset('img/email.png') }}" alt="Email badge" class="mr-3 h-12 w-12">
                <x-text-input id="email" class=" w-full mt-3" type="email" name="email" :value="old('email')" placeholder="Enter your Email Address" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>


            <!-- Password -->
            <div class="flex mt-6 items-center justify-between">
                {{-- <x-input-label for="password" :value="__('Password')" /> --}}

                <img src="{{ asset('img/lock.png') }}" alt="Email badge" class="mr-3 h-11 w-12">
                <x-text-input id="password" class=" w-full"
                                type="password"
                                name="password"
                                placeholder="Enter your Password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-8">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-400 text-indigo-600 shadow-sm cursor-pointer hover:border-blue-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-blue-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-center mt-10">
                <x-primary-button>
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

            <br/><hr/>

            <div class="flex items-center justify-center mt-5"><p>Don't have an account yet?
                <a class="text-md blue-text-color hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('role') }}">
                {{ __('Sign Up') }}
            </a></p></div>
        </form>
    </x-auth-card>
</x-guest-layout>
