<x-guest-layout>
    @foreach ($resumes as $resume)
    <div class="flex justify-center items-center ">
        <div class="w-full h-full a4 shadow-md border border-gray-300 my-10">
            <div id="content">
                <div class="flex items-center justify-between">
                    <div class="flex justify-center items-center mt-6 ml-6">
                        <img src="{{$resume->photo ? asset('storage/'. $resume->photo) : asset('/img/default.png')}}" style="width: 120px; height:120px; border-radius: 50%; "></div>
                    <div class="blue-bg-color mt-6 pl-3 pr-6 text-white" style="width: 450px; height:120px; ">
                        <h1 class="text-xl">{{$resume->name}}</h1>
                        <h2 class="">{{$resume->title}}</h2>
                        <div class="mt-1 small-text" style="line-height: 100%;">{{$resume->pitch}}</div>
                    </div>
                </div>

                <div class="mr-6 ml-6 mt-2">
                    <div class="float-left justify-start" style="width: 144px;">
                        <div>
                            <div class="mt-2">
                                <div class="ml-1"><img src="{{ asset('img/resume-email.png') }}" height="10px" width="20px"></div>
                                <div class="small-text mt-1" style="overflow-wrap:break-word; max-width:130px">{{$resume->email}}</div>
                            </div>
                            
                            <div class="mt-2">
                                <div><img src="{{ asset('img/phone.png') }}" height="10px" width="20px"></div>
                                <div class="small-text mt-1" style="overflow-wrap:break-word; max-width:130px">+{{$resume->phone}}</div>
                            </div>
    
                            <div class="mt-2">
                                <div><img src="{{ asset('img/home.png') }}" height="10px" width="20px"></div>
                                <div class="small-text mt-1" style="overflow-wrap:break-word; max-width:130px">{{$resume->address}}</div>
                            </div>
                            
                            <div class="mt-2">
                                <div><img src="{{ asset('img/location.png') }}" height="10px" width="20px"></div>
                                <div class="small-text mt-1" style="overflow-wrap:break-word; max-width:130px">{{$resume->city}}, {{$resume->country}}</div>
                            </div>
    
                            <div class="mt-2">
                                <div><img src="{{ asset('img/linkedin.png') }}" height="10px" width="20px"></div>
                                <div class="small-text mt-1" style="overflow-wrap:break-word; max-width:130px">{{$resume->url}}</div>
                            </div>
                        </div>


                        <div class="mt-2 mr-2">
                            <div>
                                <h3 class="text-md blue-text-color" >
                                    Soft Skills
                                </h3>
                                <hr style="border: 1px solid #38b6ff; margin-top:5px"/>

                                <div class="small-text flex flex-wrap items-center justify-between ">
                                    <x-label>
                                        {{$resume->sskill1}}
                                    </x-label>

                                    @unless ($resume->sskill2 === null)
                                    <x-label>
                                        {{$resume->sskill2}}
                                    </x-label>
                                    @endunless

                                    @unless ($resume->sskill3 === null)
                                    <x-label>
                                        {{$resume->sskill3}}
                                    </x-label>
                                    @endunless

                                    @unless ($resume->sskill4 === null)
                                    <x-label>
                                        {{$resume->sskill4}}
                                    </x-label>
                                    @endunless

                                    @unless ($resume->sskill5 === null)
                                    <x-label>
                                        {{$resume->sskill5}}
                                    </x-label>
                                    @endunless


                                        
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 mr-2">
                            <div>
                                <h3 class="text-md blue-text-color" >
                                    Techincal&nbsp;Skills
                                </h3>
                                <hr style="border: 1px solid #38b6ff; margin-top:5px"/>

                                <div class="small-text flex flex-wrap items-center justify-between ">
                                    <x-label>
                                        {{$resume->tskill1}}
                                    </x-label>

                                    @unless ($resume->tskill2 === null)
                                    <x-label>
                                        {{$resume->tskill2}}
                                    </x-label>
                                    @endunless

                                    @unless ($resume->tskill3 === null)
                                    <x-label>
                                        {{$resume->tskill3}}
                                    </x-label>
                                    @endunless

                                    @unless ($resume->tskill4 === null)
                                    <x-label>
                                        {{$resume->tskill4}}
                                    </x-label>
                                    @endunless

                                    @unless ($resume->tskill5 === null)
                                    <x-label>
                                        {{$resume->tskill5}}
                                    </x-label>
                                    @endunless

                                    @unless ($resume->tskill6 === null)
                                    <x-label>
                                        {{$resume->tskill6}}
                                    </x-label>
                                    @endunless

                                    @unless ($resume->tskill7 === null)
                                    <x-label>
                                        {{$resume->tskill7}}
                                    </x-label>
                                    @endunless

                                    @unless ($resume->tskill8 === null)
                                    <x-label>
                                        {{$resume->tskill8}}
                                    </x-label>
                                    @endunless

                                    @unless ($resume->tskill9 === null)
                                    <x-label>
                                        {{$resume->tskill9}}
                                    </x-label>
                                    @endunless

                                    @unless ($resume->tskill10 === null)
                                    <x-label>
                                        {{$resume->tskill10}}
                                    </x-label>
                                    @endunless

                                </div>
                            </div>
                        </div>

                        <div class="mt-5 mr-2">
                            <div>
                                <h3 class="text-md blue-text-color" >
                                    Languages
                                </h3>
                                <hr style="border: 1px solid #38b6ff; margin-top:5px"/>

                                <div class="small-text inline-block ">
                                    <div class="mt-2">{{$resume->lan1}}</div>
                                    <div class="xsmall-text blue-text-color-simple" >{{$resume->lancat1}}</div>
                                </div>


                                @unless ($resume->lan2 === null)
                                    <div class="small-text inline-block ">
                                        <div class="mt-2">{{$resume->lan2}}</div>
                                        <div class="xsmall-text blue-text-color-simple" >{{$resume->lancat2}}</div>
                                    </div>
                                @endunless

                                @unless ($resume->lan3 === null)
                                    <div class="small-text inline-block ">
                                        <div class="mt-2">{{$resume->lan3}}</div>
                                        <div class="xsmall-text blue-text-color-simple" >{{$resume->lancat3}}</div>
                                    </div>
                                @endunless


                                
                            </div>
                        </div>
                    </div>



                    <div class="float-right" style="width: 426px">

                        {{-- Education --}}


                        <div class="mt-2">
                            <div>
                                <h3 class="text-lg ml-3 blue-text-color" >
                                    Education
                                </h3>
                                <hr style="border: 1px solid #38b6ff; margin-top:5px"/>

                                <div class="ml-3">
                                    <div class="text-sm">
                                        <div class="mt-3 blue-text-color">{{$resume->program1}}</div>
                                        <div class="text-xs" >{{$resume->school1}}</div>

                                        <div class="mt-2 flex items-center justify-between xsmall-text blue-text-color-simple italic">
                                            <div>
                                                <div class="flex items-center justify-between">
                                                    <div class="mr-5">
                                                        Start: {{$resume->programDateFrom1}}
                                                    </div>
                                                    <div>
                                                        End: {{$resume->programDateTo1}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    {{$resume->insCity1}}, {{$resume->insCountry1}}
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="text-xs mt-2">
                                            <div class="font-bold">
                                                Achievements / Grades
                                            </div>
                                            <div class="mt-1">
                                                {{$resume->info1}}
                                            </div>
                                        </div>


                                        @unless ($resume->program2 === null)
                                        <div class="mt-3 blue-text-color">{{$resume->program2}}</div>
                                        <div class="text-xs" >{{$resume->school2}}</div>

                                        <div class="mt-2 flex items-center justify-between xsmall-text blue-text-color-simple italic">
                                            <div>
                                                <div class="flex items-center justify-between">
                                                    <div class="mr-5">
                                                        Start: {{$resume->programDateFrom2}}
                                                    </div>
                                                    <div>
                                                        End: {{$resume->programDateTo2}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    {{$resume->insCity2}}, {{$resume->insCountry2}}
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="text-xs mt-2">
                                            <div class="font-bold">
                                                Achievements / Grades
                                            </div>
                                            <div class="mt-1">
                                                {{$resume->info2}}
                                            </div>
                                        </div>
                                        @endunless


                                        @unless ($resume->program3 === null)
                                        <div class="mt-3 blue-text-color">{{$resume->program3}}</div>
                                        <div class="text-xs" >{{$resume->school3}}</div>

                                        <div class="mt-2 flex items-center justify-between xsmall-text blue-text-color-simple italic">
                                            <div>
                                                <div class="flex items-center justify-between">
                                                    <div class="mr-5">
                                                        Start: {{$resume->programDateFrom3}}
                                                    </div>
                                                    <div>
                                                        End: {{$resume->programDateTo3}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    {{$resume->insCity3}}, {{$resume->insCountry3}}
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="text-xs mt-2">
                                            <div class="font-bold">
                                                Achievements / Grades
                                            </div>
                                            <div class="mt-1">
                                                {{$resume->info3}}
                                            </div>
                                        </div>
                                        @endunless


                                    </div>  
                                </div>
                            </div>
                        </div> 


                        {{-- Work Experience --}}

                        <div class="mt-5">
                            <div>
                                <h3 class="text-lg ml-3 blue-text-color" >
                                    Work Experience
                                </h3>
                                <hr style="border: 1px solid #38b6ff; margin-top:5px"/>

                                <div class="ml-3">
                                    <div class="text-sm">
                                        <div class="mt-3 blue-text-color">{{$resume->position1}} - {{$resume->mode1}}</div>
                                        <div class="text-xs" >{{$resume->company1}}</div>

                                        <div class="mt-2 flex items-center justify-between xsmall-text blue-text-color-simple italic">
                                            <div>
                                                <div class="flex items-center justify-between">
                                                    <div class="mr-5">
                                                        Start: {{$resume->workDateFrom1}}
                                                    </div>
                                                    <div>
                                                        End: {{$resume->workDateTo1}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    {{$resume->workCity1}}, {{$resume->workCountry1}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-xs mt-2">
                                            <div class="font-bold">
                                                Company Description / Tasks
                                            </div>
                                            <div class="mt-1">
                                                {{$resume->workInfo1}}
                                            </div>
                                        </div>


                                        @unless ($resume->position2 === null)
                                            
                                        <div class="mt-3 blue-text-color">{{$resume->position2}} - {{$resume->mode2}}</div>
                                        <div class="text-xs" >{{$resume->company2}}</div>

                                        <div class="mt-2 flex items-center justify-between xsmall-text blue-text-color-simple italic">
                                            <div>
                                                <div class="flex items-center justify-between">
                                                    <div class="mr-5">
                                                        Start: {{$resume->workDateFrom2}}
                                                    </div>
                                                    <div>
                                                        End: {{$resume->workDateTo2}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    {{$resume->workCity2}}, {{$resume->workCountry2}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-xs mt-2">
                                            <div class="font-bold">
                                                Company Description / Tasks
                                            </div>
                                            <div class="mt-1">
                                                {{$resume->workInfo2}}
                                            </div>
                                        </div>
                                            
                                        @endunless


                                        
                                        @unless ($resume->position3 === null)
                                            
                                        <div class="mt-3 blue-text-color">{{$resume->position3}} - {{$resume->mode3}}</div>
                                        <div class="text-xs" >{{$resume->company3}}</div>

                                        <div class="mt-2 flex items-center justify-between xsmall-text blue-text-color-simple italic">
                                            <div>
                                                <div class="flex items-center justify-between">
                                                    <div class="mr-5">
                                                        Start: {{$resume->workDateFrom3}}
                                                    </div>
                                                    <div>
                                                        End: {{$resume->workDateTo3}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div>
                                                    {{$resume->workCity3}}, {{$resume->workCountry3}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-xs mt-2">
                                            <div class="font-bold">
                                                Company Description / Tasks
                                            </div>
                                            <div class="mt-1">
                                                {{$resume->workInfo3}}
                                            </div>
                                        </div>
                                            
                                        @endunless

                                        
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    

    <div class="container text-center" style="margin-bottom: 3rem;">
        <a href="{{url('resume/delete/'.$resume->user_id)}}"><button class="mr-10 px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-s text-gray-500 uppercase tracking-widest shadow-sm disabled:opacity-50 transition ease-in-out duration-150">Delete</button>
        </a>
        <button onclick="generatePDF()" class="px-4 py-2 blue-bg-color border border-transparent rounded-md font-semibold text-s text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Download</button>
        </div>
    
</x-guest-layout>