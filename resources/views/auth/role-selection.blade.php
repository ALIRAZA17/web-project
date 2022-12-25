<x-guest-layout>
    <x-role-card>
        <x-slot name="logo">
            <img src="{{ asset('img/jobify.png') }}" alt="Company Logo">
        </x-slot>

        <div class="flex items-center justify-center mt-3 text-xl font-bold">
            <h1>Sign Up as Employer or Applicant</h1>
        </div>
        <form method="GET" action="{{ route('register') }}">
            @csrf

            <!-- Role -->

            <div class="mt-5">
            <div class="flex items-center justify-between border border-gray-300 px-3 py-4 md:px-6 md:py-6 rounded-lg text-lg font-semibold hover:border-blue-400">
                <span><img src="{{ asset('img/search.png') }}" alt="Employer badge" width="50" height="50" class="mr-5 md:inline">
                    <h2 class="md:inline mt-2 md:mt-0">I'm an Employer, looking for talent.</h2></span>
                <input class="border-gray-500 border-2 cursor-pointer scale-125 md:scale-150 hover:border-blue-500" type="radio" name="role" id="role1" value="employer" required/>
            </div>
            
            <div class="flex items-center justify-between border border-gray-300 px-4 py-2 md:px-6 md:py-6 rounded-lg text-lg font-semibold hover:border-blue-400 mt-4">
                <span><img src="{{ asset('img/resume.png') }}" alt="Applicant badge" width="50" height="50" class="mr-5 md:inline"><h2 class="md:inline mt-2 md:mt-0">I'm an Applicant, looking for job.</h2></span>
                <input class="border-gray-500 border-2 cursor-pointer scale-125 md:scale-150 hover:border-blue-500" type="radio" name="role" id="role2" value="applicant" required/>
            </div>
            </div>

            <div id="change" class="flex items-center justify-center mt-6">
                <x-primary-button>
                    {{ __('Join Platform') }}
                </x-primary-button>
            </div>

            <br/><hr/>


            <div class="flex items-center justify-center mt-5"><p>Already have an account?
                <a class="text-md blue-text-color hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Log In') }}
            </a></p></div>
        </form>

    </x-role-card>
</x-guest-layout>
    