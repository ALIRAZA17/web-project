<x-guest-layout>
    <x-card>
        <x-slot name="logo">
            <img src="{{ asset('img/jobify.png') }}" alt="Company Logo">
        </x-slot>

        <form method="POST" action="{{ url('/save') }}" enctype="multipart/form-data">
            @csrf

            <!-- Company Name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Company Name')" />
                <x-text-input id="name" class="block mt-3 w-full" type="text" name="name" :value="old('name')" required placeholder='e.g. Microsoft' />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Job title -->
            <div class="mt-4">
                <x-input-label for="title" :value="__('Job Title')" />
                <x-text-input id="title" class="block mt-3 w-full" type="text" name="title" :value="old('title')" required placeholder='e.g. Junior Backend Engineer' />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <!-- Job location -->
            <div class="mt-4">
                <x-input-label for="location" :value="__('Job Location')" />
                <x-text-input id="location" class="block mt-3 w-full" type="text" name="location" :value="old('location')" required placeholder='e.g. Lahore, Pakistan' />
                <x-input-error :messages="$errors->get('location')" class="mt-2" />
            </div>

            <!-- Job Mode -->
            <div class="mt-4">
                <x-input-label :value="__('Job Mode')" /><br/>
                
                <div class="flex items-center justify-between mt-2 border border-gray-300 rounded-md shadow-sm px-2 py-2 ">

                <div>
                    <x-text-input id="remote" class="border-gray-500 mr-1 cursor-pointer hover:border-blue-500" type="radio" name="mode" value="Remote" required/>
                <x-input-label for="remote" :value="__('Remote')"/>
                </div>

                <div>
                    <x-text-input id="hybrid" class="border-gray-500 mr-1 cursor-pointer hover:border-blue-500" type="radio" name="mode" value="Hybrid" required/>
                <x-input-label for="hybrid" :value="__('Hybrid')"/>
                </div>


                <div>
                    <x-text-input id="onsite" class="border-gray-500 mr-1 cursor-pointer hover:border-blue-500" type="radio" name="mode" value="Onsite" required/>
                <x-input-label for="onsite" :value="__('On-Site')"/>
                </div>

                </div>


                <x-input-error :messages="$errors->get('mode')" class="mt-2" />
            </div>

            <!-- Job Category -->
            <div class="mt-4">
                <x-input-label for="category" :value="__('Job category')" />
                {{-- <x-text-input id="category" class="block mt-3 w-full" type="text" name="category" :value="old('category')" required placeholder='e.g. Development & IT, Graphic Design, etc' /> --}}
                <select name="category" id="category" class="block mt-3 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" :value="old('category')" required>
                    <option value="" disabled selected hidden>Choose a category</option>
                    <option value="dev">Development & IT</option>
                    <option value="design">Design & Creative</option>
                    <option value="sales">Sales & Marketing</option>
                    <option value="writing">Writing & Translation</option>
                    <option value="admin">Admin & Customer Support</option>
                    <option value="admin">Finance & Accounting</option>
                    <option value="admin">HR & Training</option>
                    <option value="other">Other</option>
                  </select>
                <x-input-error :messages="$errors->get('category')" class="mt-2" />
            </div>

            <!-- Deadline -->
            <div class="mt-4">
                <x-input-label for="deadline" :value="__('Deadline to Apply')" />
                <x-text-input id="deadline" class="block mt-3 w-full " type="date" name="deadline" :value="old('deadline')" required min="" onfocus="this.min=new Date().toISOString().split('T')[0]" />
                <x-input-error :messages="$errors->get('deadline')" class="mt-2" />
            </div>

            <!-- url -->
            <div class="mt-4">
                <x-input-label for="url" :value="__('Company\'s Website URL')" />
                <x-text-input id="url" class="block mt-3 w-full" type="url" name="url" :value="old('url')" required placeholder='e.g. https://www.microsoft.com' />
                <x-input-error :messages="$errors->get('url')" class="mt-2" />
            </div>

            <!-- tags -->
            <div class="mt-4">
                <x-input-label for="tags" :value="__('Tags (Comma Separated)')" />
                <x-text-input id="tags" class="block mt-3 w-full" type="text" name="tags" :value="old('tags')" required placeholder='e.g. php,python,sql' />
                <x-input-error :messages="$errors->get('tags')" class="mt-2" />
            </div>
            
            <!-- Company Logo -->
            <div class="mt-4">
                <x-input-label for="logo" :value="__('Company Logo')" />
                <x-text-input id="logo" class="block w-full mt-3 border p-2" type="file" name="logo" required accept=".png, .jpeg, .jpg" />
                <x-input-error :messages="$errors->get('logo')" class="mt-2" />
            </div>

            <!-- desc -->
            <div class="mt-4">
                <x-input-label for="desc" :value="__('Job Description')" />
                <textarea id="desc" class="block rounded-md border-gray-300 mt-3 w-full" type="text" name="desc" rows="5" :value="old('desc')" required placeholder='e.g. Include tasks, requirements, salary, limitations, expectations, etc' ></textarea>
                <x-input-error :messages="$errors->get('desc')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center mt-5">
                <x-primary-button>
                    {{ __('Post Job') }}
                </x-primary-button>
            </div>


        </form>
    </x-card>
</x-guest-layout>
