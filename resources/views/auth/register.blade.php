<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <img src="{{ asset('img/jobify.png') }}" alt="Company Logo">
        </x-slot>

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                {{-- <x-input-label for="name" :value="__('Name')" /> --}}
                <x-text-input id="name" class="block mt-5 w-full" type="text" name="name" :value="old('name')" required placeholder='Enter your Full Name' />
                
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <!-- Email Address -->
            <div class="mt-4">
                {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder='Enter your Email Address' />
                
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />


            <!-- Password -->
            <div class="mt-4">
                {{-- <x-input-label for="password" :value="__('Password')" /> --}}

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="Enter a Password for your Account"
                                required autocomplete="new-password" />

               
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <!-- Confirm Password -->
            <div class="mt-4">
                {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" 
                                placeholder="Re-Enter the Password for Confirmation"
                                required />

                
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            <!-- Profile Photo -->
            {{-- <div class="flex mt-4 items-center justify-between">
                <x-input-label for="photo" :value="__('Profile Photo:')" />
                <x-text-input id="photo" class=" mt-1 border p-2" type="file" name="photo" :value="old('photo')"  />
                <x-input-error :messages="$errors->get('photo')" class="mt-2" />
            </div> --}}

            <div class="flex items-center justify-center mt-5">
                <x-primary-button>
                    {{ __('SIGN UP') }}
                </x-primary-button>
            </div>

            <br/><hr/>

            <div>
                <input type="hidden" id="role" name="role" value={{$role}} >
            </div>


            <div class="flex items-center justify-center mt-5"><p>Already have an account?
                <a class="text-md blue-text-color hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Log In') }}
            </a></p></div>

        </form>
    </x-auth-card>
</x-guest-layout>
