<x-guest-layout>
    <x-card>
        <x-slot name="logo">
            <img src="{{ asset('img/jobify.png') }}" alt="Company Logo">
        </x-slot>

        <div class="flex items-center justify-center mt-3 text-xl font-bold">
            <h1>Apply for Job</h1>
        </div>

        <form method="POST" action="{{ route('job/apply') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Full Name')" />
                <x-text-input id="name" class="block mt-3 w-full" type="text" name="name" :value="old('name')" required placeholder='e.g. Dawood Mehmood' />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Contact Number -->
            <div class="mt-4">
                <x-input-label for="phone" :value="__('Contact No.')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required placeholder='e.g. 92-3106083543'  pattern="[0-9]{2}-[0-9]{10}" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
            <!-- Address -->
            <div class="mt-4">
                <x-input-label for="address" :value="__('Residence Address')" />
                <x-text-input id="address" class="block mt-3 w-full" type="text" name="address" :value="old('address')" required placeholder='e.g. House No.140 Street No.02 Bahria Town' />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>
            <!-- City -->
            <div class="mt-4">
                <x-input-label for="city" :value="__('City of Residence')" />
                <x-text-input id="city" class="block mt-3 w-full" type="text" name="city" :value="old('city')" required placeholder='e.g. Lahore' />
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>
            <!-- Country -->
            <div class="mt-4">
                <x-input-label for="country" :value="__('Country of Residence')" />
                <x-text-input id="country" class="block mt-3 w-full" type="text" name="country" :value="old('country')" required placeholder='e.g. Pakistan' />
                <x-input-error :messages="$errors->get('country')" class="mt-2" />
            </div>


            <!-- Resume -->
            <div class="mt-4">
                <x-input-label for="resume" :value="__('Upload Resume')" />
                <x-text-input id="resume" class="block w-full mt-3 border p-2" type="file" name="resume" required accept=".pdf" />
                <x-input-error :messages="$errors->get('resume')" class="mt-2" />
            </div>

            <!-- Cover Letter -->
            <div class="mt-4">
                <x-input-label for="letter" :value="__('Cover Letter')" />
                <textarea id="letter" class="block rounded-md border-gray-300 mt-3 w-full" type="text" name="letter" rows="5" :value="old('letter')" required placeholder="e.g. Explain why you're qualified for the job, show that your skills and experience match the skills and experience needed to do the job, etc" ></textarea>
                <x-input-error :messages="$errors->get('letter')" class="mt-2" />
            </div>



            <div class="flex items-center justify-center mt-5">
                <x-primary-button>
                    {{ __('Apply') }}
                </x-primary-button>
            </div>


        </form>
    </x-card>
</x-guest-layout>
