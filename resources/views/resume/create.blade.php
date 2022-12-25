<x-guest-layout>
    <x-card>
        <x-slot name="logo">
            <img src="{{ asset('img/jobify.png') }}" alt="jobify Logo">
        </x-slot>

        <form method="POST" action="{{ route('resume/save') }}" enctype="multipart/form-data">
            @csrf
            <!-- Personal Information -->
            <div id="61" class="block">
                <div class="text-lg flex font-bold justify-center mt-4">Personal Information</div>
            <!-- Name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Full Name')" />
                <x-text-input id="name" class="block mt-3 w-full" type="text" name="name" :value="old('name')" required placeholder='e.g. Dawood Mehmood' />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <!-- Profile Photo -->
            <div class="mt-4">
                <x-input-label for="photo" :value="__('Profile Photo (optional)')" />
                <x-text-input id="photo" class=" mt-3 border p-2 w-full " type="file" name="photo" :value="old('photo')" accept=".png, .jpeg, .jpg"/>
                <x-input-error :messages="$errors->get('photo')" class="mt-2" />
            </div>
            <!-- Professional title -->
            <div class="mt-4">
                <x-input-label for="title" :value="__('Professional title')" />
                <x-text-input id="title" class="block mt-3 w-full" type="text" name="title" :value="old('title')" required placeholder='e.g. Fresh Graduate, Front-end Developer' />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
             <!-- pitch -->
             <div class="mt-4">
                <x-input-label for="pitch" :value="__('Engaging Pitch about Yourself (300 characters)')" />
                <textarea id="pitch" class="block rounded-md border-gray-300 mt-3 w-full" type="text" name="pitch" rows="5" :value="old('pitch')" required maxlength="300" placeholder='e.g. Effective Student committed to learning, developing skills in web, app and game development and team contribution...' ></textarea>
                <x-input-error :messages="$errors->get('pitch')" class="mt-2" />
            </div>
            </div>


            <!-- Contact Information -->

            <div id="62" class="hidden">
                <div class="text-lg flex font-bold justify-center mt-4">Contact Information</div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email Address')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder='e.g. dawood@gmail.com' />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
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
            <!-- url -->
            <div class="mt-4">
                <x-input-label for="url" :value="__('LinkedIn Account')" />
                <x-text-input id="url" class="block mt-3 w-full" type="text" name="url" :value="old('url')" required placeholder='e.g. linked.com/in/Dawood Mehmood' />
                <x-input-error :messages="$errors->get('url')" class="mt-2" />
            </div>
        </div>


            <!-- Languages -->


            <div id="63" class="hidden">
                <div class="text-lg flex font-bold justify-center mt-4">Languages</div>
            <p class="mt-4 flex items-center justify-center">(You can add upto 3)</p>
            {{-- language#1 --}}
            <div id="11" class="mt-4">
                <x-input-label for="lan1" :value="__('Language # 1')" />
                <x-text-input id="lan1" class="block mt-3 w-full" type="text" name="lan1" :value="old('lan1')" required placeholder='e.g. English' />
                <x-input-error :messages="$errors->get('lan1')" class="mt-2" />
                <select name="lancat1" id="lancat1" class="block mt-3 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                    <option value="" disabled selected hidden>Choose Proficiency</option>
                    <option value="Elementary Proficiency (1/5)">Elementary Proficiency (1/5)</option>
                    <option value="Limited Working Proficiency (2/5)">Limited Working Proficiency (2/5)</option>
                    <option value="Professional Working Proficiency (3/5)">Professional Working Proficiency (3/5)</option>
                    <option value="Full Professional Proficiency (4/5)">Full Professional Proficiency (4/5)</option>
                    <option value="Native or Bilingual Proficiency (5/5)">Native or Bilingual Proficiency (5/5)</option>
                  </select>
            </div>
            <br/><hr/>
            {{-- language#2 --}}
            <div id="12" class="mt-4 hidden">
                <x-input-label for="lan2" :value="__('Language # 2 (optional)')" />
                <x-text-input id="lan2" class="block mt-3 w-full" type="text" name="lan2" :value="old('lan2')" placeholder='e.g. Urdu' />
                <x-input-error :messages="$errors->get('lan2')" class="mt-2" />
                <select name="lancat2" id="lancat2" class="block mt-3 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" >
                    <option value="" disabled selected hidden>Choose Proficiency</option>
                    <option value="Elementary Proficiency (1/5)">Elementary Proficiency (1/5)</option>
                    <option value="Limited Working Proficiency (2/5)">Limited Working Proficiency (2/5)</option>
                    <option value="Professional Working Proficiency (3/5)">Professional Working Proficiency (3/5)</option>
                    <option value="Full Professional Proficiency (4/5)">Full Professional Proficiency (4/5)</option>
                    <option value="Native or Bilingual Proficiency (5/5)">Native or Bilingual Proficiency (5/5)</option>
                  </select>
            <br/><hr/>
            </div>
            {{-- language#3 --}}
            <div id="13" class="mt-4 hidden">
                <x-input-label for="lan3" :value="__('Language # 3 (optional)')" />
                <x-text-input id="lan3" class="block mt-3 w-full" type="text" name="lan3" :value="old('lan3')" placeholder='e.g. German' />
                <x-input-error :messages="$errors->get('lan3')" class="mt-2" />
                <select name="lancat3" id="lancat3" class="block mt-3 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" >
                    <option value="" disabled selected hidden>Choose Proficiency</option>
                    <option value="Elementary Proficiency (1/5)">Elementary Proficiency (1/5)</option>
                    <option value="Limited Working Proficiency (2/5)">Limited Working Proficiency (2/5)</option>
                    <option value="Professional Working Proficiency (3/5)">Professional Working Proficiency (3/5)</option>
                    <option value="Full Professional Proficiency (4/5)">Full Professional Proficiency (4/5)</option>
                    <option value="Native or Bilingual Proficiency (5/5)">Native or Bilingual Proficiency (5/5)</option>
                  </select>
            <br/><hr/>
            </div>
            <div class="mt-4 flex justify-end">
                <button type="button" onclick="subLan()" id="sublan"  class="hover:bg-gray-700 cursor-pointer mr-3 w-8 h-8 bg-gray-300 border border-transparent rounded-md font-bold text-lg text-white uppercase tracking-widest transition ease-in-out duration-150">-</button>
                <button type="button" onclick="addLan()" id="addlan"  class="hover:bg-gray-700 cursor-pointer w-8 h-8 blue-bg-color border border-transparent rounded-md font-bold text-lg text-white uppercase tracking-widest transition ease-in-out duration-150">+</button>
            </div>
        </div>
            

            <!-- Soft Skills -->

            <div id="64" class="hidden">
                <div class="text-lg flex font-bold justify-center mt-4">Soft Skills</div>
            <!-- Soft skills -->
            <p class="mt-4 flex items-center justify-center">(You can add upto 5)</p>
            <div class="mt-4">
                {{-- <x-input-label :value="__('Soft Skills (You can Add upto 5)')" /> --}}
                <x-text-input id="1" class="block mt-3 w-full" type="text" name="sskill1" :value="old('sskill1')" required placeholder='Soft skill #1' />
                <x-input-error :messages="$errors->get('sskill1')" class="mt-2" />
                
                    <x-text-input id="2" class="block mt-3 w-full hidden" type="text" name="sskill2" :value="old('sskill2')"  placeholder='Soft skill #2' />
                <x-input-error :messages="$errors->get('sskill2')" class="mt-2" />

                    <x-text-input id="3" class="block mt-3 w-full hidden" type="text" name="sskill3" :value="old('sskill3')" placeholder='Soft skill #3' />
                <x-input-error :messages="$errors->get('sskill3')" class="mt-2" />

                    <x-text-input id="4" class="block mt-3 w-full hidden" type="text" name="sskill4" :value="old('sskill4')" placeholder='Soft skill #4' />
                <x-input-error :messages="$errors->get('sskill4')" class="mt-2" />

                    <x-text-input id="5" class="block mt-3 w-full hidden" type="text" name="sskill5" :value="old('sskill5')" placeholder='Soft skill #5' />
                <x-input-error :messages="$errors->get('sskill5')" class="mt-2" />
            </div>
            <br/><hr/>
            <div class="mt-4 flex justify-end">
                <button type="button" onclick="subSkill()" id="subskill"  class="hover:bg-gray-700 cursor-pointer mr-3 w-8 h-8 bg-gray-300 border border-transparent rounded-md font-bold text-lg text-white uppercase tracking-widest transition ease-in-out duration-150">-</button>
                <button type="button" onclick="addSkill()" id="addskill"  class="hover:bg-gray-700 cursor-pointer w-8 h-8 blue-bg-color border border-transparent rounded-md font-bold text-lg text-white uppercase tracking-widest transition ease-in-out duration-150">+</button>
            </div>
        </div>


            <!-- Technical Skills -->


            <div id="65" class="hidden">
                <div class="text-lg flex font-bold justify-center mt-4">Technical Skills</div>
                <!-- Technical skills -->
                <p class="mt-4 flex items-center justify-center">(You can add upto 10)</p>
                <div class="mt-4">
                    {{-- <x-input-label :value="__('Technical Skills (You can Add upto 10)')" /> --}}
                    <x-text-input id="31" class="block mt-3 w-full" type="text" name="tskill1" :value="old('tskill1')" required placeholder='Techincal skill #1' />
                    <x-input-error :messages="$errors->get('tskill1')" class="mt-2" />
                    
                        <x-text-input id="32" class="block mt-3 w-full hidden" type="text" name="tskill2" :value="old('tskill2')"  placeholder='Techincal skill #2' />
                    <x-input-error :messages="$errors->get('tskill2')" class="mt-2" />
    
                        <x-text-input id="33" class="block mt-3 w-full hidden" type="text" name="tskill3" :value="old('tskill3')" placeholder='Techincal skill #3' />
                    <x-input-error :messages="$errors->get('tskill3')" class="mt-2" />
    
                        <x-text-input id="34" class="block mt-3 w-full hidden" type="text" name="tskill4" :value="old('tskill4')" placeholder='Techincal skill #4' />
                    <x-input-error :messages="$errors->get('tskill4')" class="mt-2" />
    
                        <x-text-input id="35" class="block mt-3 w-full hidden" type="text" name="tskill5" :value="old('tskill5')" placeholder='Techincal skill #5' />
                    <x-input-error :messages="$errors->get('tskill5')" class="mt-2" />
    
                        <x-text-input id="36" class="block mt-3 w-full hidden" type="text" name="tskill6" :value="old('tskill6')" placeholder='Techincal skill #6' />
                    <x-input-error :messages="$errors->get('tskill6')" class="mt-2" />
                    
                        <x-text-input id="37" class="block mt-3 w-full hidden" type="text" name="tskill7" :value="old('tskill7')"  placeholder='Techincal skill #7' />
                    <x-input-error :messages="$errors->get('tskill7')" class="mt-2" />
    
                        <x-text-input id="38" class="block mt-3 w-full hidden" type="text" name="tskill8" :value="old('tskill8')" placeholder='Techincal skill #8' />
                    <x-input-error :messages="$errors->get('tskill8')" class="mt-2" />
    
                        <x-text-input id="39" class="block mt-3 w-full hidden" type="text" name="tskill9" :value="old('tskill9')" placeholder='Techincal skill #9' />
                    <x-input-error :messages="$errors->get('tskill9')" class="mt-2" />
    
                        <x-text-input id="40" class="block mt-3 w-full hidden" type="text" name="tskill10" :value="old('tskill10')" placeholder='Techincal skill #10' />
                    <x-input-error :messages="$errors->get('tskill10')" class="mt-2" />
                </div>
                <br/><hr/>
                <div class="mt-4 flex justify-end">
                    <button type="button" onclick="subtSkill()" id="subtskill"  class="hover:bg-gray-700 cursor-pointer mr-3 w-8 h-8 bg-gray-300 border border-transparent rounded-md font-bold text-lg text-white uppercase tracking-widest transition ease-in-out duration-150">-</button>
                    <button type="button" onclick="addtSkill()" id="addtskill"  class="hover:bg-gray-700 cursor-pointer w-8 h-8 blue-bg-color border border-transparent rounded-md font-bold text-lg text-white uppercase tracking-widest transition ease-in-out duration-150">+</button>
                </div>
            </div>


                    <!-- Education -->


            <div id="66" class="hidden">
                <div class="text-lg flex font-bold justify-center mt-4">Education</div>
                <!-- Education -->
                <p class="mt-4 flex items-center justify-center">(Most Recent first. You can add upto 3)</p>
                <div id="41" class="mt-4">
                    <div class="font-bold text-md text-gray-900" >Education #1</div>
                    {{-- <x-input-label for="education1" :value="__('Education #1')" /> --}}
                    <x-text-input id="program1" class="block mt-3 w-full" type="text" name="program1" :value="old('program1')" required placeholder='Study Program' />
                    <x-input-error :messages="$errors->get('program1')" class="mt-2" />
                    <x-text-input id="school1" class="block mt-3 w-full" type="text" name="school1" :value="old('school1')" required placeholder='Institution' />
                    <x-input-error :messages="$errors->get('school1')" class="mt-2" />
                    <div class="flex flex-wrap items-center justify-between mt-3">
                        <div>
                            <x-input-label for="programDateFrom1" :value="__('Program Starting Date')"/>
                            <x-text-input id="programDateFrom1" class="block mt-3 w-half " type="date" name="programDateFrom1" :value="old('programDateFrom1')" required max="" onfocus="this.max=new Date().toISOString().split('T')[0]"  />
                            <x-input-error :messages="$errors->get('programDateFrom1')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="programDateTo1" :value="__('Program Ending Date')"/>
                            <x-text-input id="programDateTo1" class="block mt-3 w-half " type="date" name="programDateTo1" :value="old('programDateTo1')" required  />
                            <x-input-error :messages="$errors->get('programDateTo1')" class="mt-2" />
                        </div>
                    </div>
                    {{-- <x-input-label for="insCity1" :value="__('Institute City')"/> --}}
                    <x-text-input id="insCity1" class="block mt-3 w-full " type="text" name="insCity1" :value="old('insCity1')" required placeholder="Institute City"/>
                    <x-input-error :messages="$errors->get('insCity1')" class="mt-2" />
    
                    {{-- <x-input-label for="insCountry1" :value="__('Institute Country')"/> --}}
                    <x-text-input id="insCountry1" class="block mt-3 w-full " type="text" name="insCountry1" :value="old('insCountry1')" required placeholder="Institute Country" />
                    <x-input-error :messages="$errors->get('insCountry1')" class="mt-2" />
    
                    <!-- Related info -->
                    <div class="mt-4">
                        <x-input-label for="info1" :value="__('Related Information (200 characters - optional)')" />
                        <textarea id="info1" class="block rounded-md border-gray-300 mt-3 w-full" type="text" name="info1" rows="4" :value="old('info1')" maxlength="200" placeholder='e.g. Include achievements, grades, extra-curricular activities, etc' ></textarea>
                        <x-input-error :messages="$errors->get('info1')" class="mt-2" />
                    </div>
                    <br/><hr/>
                </div>
    
                
                <div id="42" class="mt-4 hidden">
                    <div class="font-bold text-md text-gray-900" >Education #2</div>
                    {{-- <x-input-label for="education2" :value="__('Education #2')" /> --}}
                    <x-text-input id="program2" class="block mt-3 w-full" type="text" name="program2" :value="old('program2')" placeholder='Study Program' />
                    <x-input-error :messages="$errors->get('program2')" class="mt-2" />
                    <x-text-input id="school2" class="block mt-3 w-full" type="text" name="school2" :value="old('school2')" placeholder='Institution' />
                    <x-input-error :messages="$errors->get('school2')" class="mt-2" />
                    <div class="flex flex-wrap items-center justify-between mt-3">
                        <div>
                            <x-input-label for="programDateFrom2" :value="__('Program Starting Date')"/>
                            <x-text-input id="programDateFrom2" class="block mt-3 w-half " type="date" name="programDateFrom2" :value="old('programDateFrom2')" max="" onfocus="this.max=new Date().toISOString().split('T')[0]"  />
                            <x-input-error :messages="$errors->get('programDateFrom2')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="programDateTo2" :value="__('Program Ending Date')"/>
                            <x-text-input id="programDateTo2" class="block mt-3 w-half " type="date" name="programDateTo2" :value="old('programDateTo2')"  />
                            <x-input-error :messages="$errors->get('programDateTo2')" class="mt-2" />
                        </div>
                    </div>
    
                    {{-- <x-input-label for="insCity2" :value="__('Institute City')"/> --}}
                    <x-text-input id="insCity2" class="block mt-3 w-full " type="text" name="insCity2" :value="old('insCity2')" placeholder="Institute City"/>
                    <x-input-error :messages="$errors->get('insCity2')" class="mt-2" />
    
                    {{-- <x-input-label for="insCountry2" :value="__('Institute Country')"/> --}}
                    <x-text-input id="insCountry2" class="block mt-3 w-full " type="text" name="insCountry2" :value="old('insCountry2')" placeholder="Institute Country" />
                    <x-input-error :messages="$errors->get('insCountry2')" class="mt-2" />
    
                    <!-- Related info -->
                    <div class="mt-4">
                        <x-input-label for="info2" :value="__('Related Information (200 characters - optional)')" />
                        <textarea id="info2" class="block rounded-md border-gray-300 mt-3 w-full" type="text" name="info2" rows="4" :value="old('info2')" maxlength="200" placeholder='e.g. Include achievements, grades, extra-curricular activities, etc' ></textarea>
                        <x-input-error :messages="$errors->get('info2')" class="mt-2" />
                    </div>
                    <br/><hr/>
                </div>
    
    
    
    
                <div id="43" class="mt-4 hidden">
                    <div class="font-bold text-md text-gray-900" >Education #3</div>
                    {{-- <x-input-label for="education3" :value="__('Education #3')" /> --}}
                    <x-text-input id="program3" class="block mt-3 w-full" type="text" name="program3" :value="old('program3')" placeholder='Study Program' />
                    <x-input-error :messages="$errors->get('program3')" class="mt-2" />
                    <x-text-input id="school3" class="block mt-3 w-full" type="text" name="school3" :value="old('school3')" placeholder='Institution' />
                    <x-input-error :messages="$errors->get('school3')" class="mt-2" />
                    <div class="flex flex-wrap items-center justify-between mt-3">
                        <div>
                            <x-input-label for="programDateFrom3" :value="__('Program Starting Date')"/>
                            <x-text-input id="programDateFrom3" class="block mt-3 w-half " type="date" name="programDateFrom3" :value="old('programDateFrom3')" max="" onfocus="this.max=new Date().toISOString().split('T')[0]"  />
                            <x-input-error :messages="$errors->get('programDateFrom3')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="programDateTo3" :value="__('Program Ending Date')"/>
                            <x-text-input id="programDateTo3" class="block mt-3 w-half " type="date" name="programDateTo3" :value="old('programDateTo3')"  />
                            <x-input-error :messages="$errors->get('programDateTo3')" class="mt-2" />
                        </div>
                    </div>
    
                    {{-- <x-input-label for="insCity3" :value="__('Institute City')"/> --}}
                    <x-text-input id="insCity3" class="block mt-3 w-full " type="text" name="insCity3" :value="old('insCity3')" placeholder="Institute City"/>
                    <x-input-error :messages="$errors->get('insCity3')" class="mt-2" />
    
                    {{-- <x-input-label for="insCountry3" :value="__('Institute Country')"/> --}}
                    <x-text-input id="insCountry3" class="block mt-3 w-full " type="text" name="insCountry3" :value="old('insCountry3')" placeholder="Institute Country" />
                    <x-input-error :messages="$errors->get('insCountry3')" class="mt-2" />
    
                    <!-- Related info -->
                    <div class="mt-4">
                        <x-input-label for="info3" :value="__('Related Information (200 characters - optional)')" />
                        <textarea id="info3" class="block rounded-md border-gray-300 mt-3 w-full" type="text" name="info3" rows="4" :value="old('info3')" maxlength="200" placeholder='e.g. Include achievements, grades, extra-curricular activities, etc' ></textarea>
                        <x-input-error :messages="$errors->get('info3')" class="mt-2" />
                    </div>
                    <br/><hr/>
                </div>
    
                <div class="mt-4 flex justify-end">
                    <button type="button" onclick="subEdu()" id="subedu"  class="hover:bg-gray-700 cursor-pointer mr-3 w-8 h-8 bg-gray-300 border border-transparent rounded-md font-bold text-lg text-white uppercase tracking-widest transition ease-in-out duration-150">-</button>
                    <button type="button" onclick="addEdu()" id="addedu"  class="hover:bg-gray-700 cursor-pointer w-8 h-8 blue-bg-color border border-transparent rounded-md font-bold text-lg text-white uppercase tracking-widest transition ease-in-out duration-150">+</button>
                </div>
            </div>


            <!-- Work Experience -->

            

            <div id="67" class="hidden">
                <div class="text-lg flex font-bold justify-center mt-4">Work Experience</div>
                <!-- Work Experience -->
                <p class="mt-4 flex items-center justify-center">(Most Recent first. You can add upto 3)</p>
                <div id="51" class="mt-4">
                    <div class="font-bold text-md text-gray-900" >Work #1</div>
                    {{-- <x-input-label for="work1" :value="__('Work #1')" /> --}}
                    <x-text-input id="position1" class="block mt-3 w-full" type="text" name="position1" :value="old('position1')" required placeholder='Title or Position' />
                    <x-input-error :messages="$errors->get('position1')" class="mt-2" />
                    <x-text-input id="company1" class="block mt-3 w-full" type="text" name="company1" :value="old('company1')" required placeholder='Company or Workplace' />
                    <x-input-error :messages="$errors->get('company1')" class="mt-2" />
                    <div class="flex flex-wrap items-center justify-between mt-3">
                        <div>
                            <x-input-label for="workDateFrom1" :value="__('Work Starting Date')"/>
                            <x-text-input id="workDateFrom1" class="block mt-3 w-half " type="date" name="workDateFrom1" :value="old('workDateFrom1')" required max="" onfocus="this.max=new Date().toISOString().split('T')[0]"  />
                            <x-input-error :messages="$errors->get('workDateFrom1')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="workDateTo1" :value="__('Work Ending Date')"/>
                            <x-text-input id="workDateTo1" class="block mt-3 w-half " type="date" name="workDateTo1" :value="old('workDateTo1')" required  />
                            <x-input-error :messages="$errors->get('workDateTo1')" class="mt-2" />
                        </div>
                    </div>
    
                    {{-- <x-input-label for="workCity1" :value="__('Work City')"/> --}}
                    <x-text-input id="workCity1" class="block mt-3 w-full " type="text" name="workCity1" :value="old('workCity1')" required placeholder="Work City"/>
                    <x-input-error :messages="$errors->get('workCity1')" class="mt-2" />
    
                    {{-- <x-input-label for="workCountry1" :value="__('Work Country')"/> --}}
                    <x-text-input id="workCountry1" class="block mt-3 w-full " type="text" name="workCountry1" :value="old('workCountry1')" required placeholder="Work Country" />
                    <x-input-error :messages="$errors->get('workCountry1')" class="mt-2" />
    
                    <!-- Work Mode -->
                    <div class="mt-4">
                        <x-input-label :value="__('Work Mode')" /><br/>
                        <div class="flex items-center justify-between mt-2 border border-gray-300 rounded-md shadow-sm px-2 py-2 ">
                        <div>
                            <x-text-input id="remote1" class="border-gray-500 mr-1 cursor-pointer hover:border-blue-500" type="radio" name="mode1" value="Remote" required />
                            <x-input-label for="remote1" :value="__('Remote')"/>
                        </div>
                        <div>
                            <x-text-input id="hybrid1" class="border-gray-500 mr-1 cursor-pointer hover:border-blue-500" type="radio" name="mode1" value="Hybrid" required />
                            <x-input-label for="hybrid1" :value="__('Hybrid')"/>
                        </div>
                        <div>
                            <x-text-input id="onsite1" class="border-gray-500 mr-1 cursor-pointer hover:border-blue-500" type="radio" name="mode1" value="Onsite" required />
                            <x-input-label for="onsite1" :value="__('On-Site')"/>
                        </div>
                        </div>
                        <x-input-error :messages="$errors->get('mode1')" class="mt-2" />
                    </div>
    
                    <!-- Related info -->
                    <div class="mt-4">
                        <x-input-label for="workInfo1" :value="__('Related Information (300 characters - optional)')" />
                        <textarea id="workInfo1" class="block rounded-md border-gray-300 mt-3 w-full" type="text" name="workInfo1" rows="4" :value="old('workInfo1')" maxlength="300" placeholder="e.g. Include company descrition, accomplishments, responsibilities or tasks, contact info of the company's focal person etc" ></textarea>
                        <x-input-error :messages="$errors->get('workInfo1')" class="mt-2" />
                    </div>
                    <br/><hr/>
                </div>
    
    
                <div id="52" class="mt-4 hidden">
                    <div class="font-bold text-md text-gray-900" >Work #2</div>
                    {{-- <x-input-label for="work2" :value="__('Work #2')" /> --}}
                    <x-text-input id="position2" class="block mt-3 w-full" type="text" name="position2" :value="old('position2')" placeholder='Title or Position' />
                    <x-input-error :messages="$errors->get('position2')" class="mt-2" />
                    <x-text-input id="company2" class="block mt-3 w-full" type="text" name="company2" :value="old('company2')" placeholder='Company or Workplace' />
                    <x-input-error :messages="$errors->get('company2')" class="mt-2" />
                    <div class="flex flex-wrap items-center justify-between mt-3">
                        <div>
                            <x-input-label for="workDateFrom2" :value="__('Work Starting Date')"/>
                            <x-text-input id="workDateFrom2" class="block mt-3 w-half " type="date" name="workDateFrom2" :value="old('workDateFrom2')" max="" onfocus="this.max=new Date().toISOString().split('T')[0]"  />
                            <x-input-error :messages="$errors->get('workDateFrom2')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="workDateTo2" :value="__('Work Ending Date')"/>
                            <x-text-input id="workDateTo2" class="block mt-3 w-half " type="date" name="workDateTo2" :value="old('workDateTo2')"  />
                            <x-input-error :messages="$errors->get('workDateTo2')" class="mt-2" />
                        </div>
                    </div>
    
                    {{-- <x-input-label for="workCity2" :value="__('Work City')"/> --}}
                    <x-text-input id="workCity2" class="block mt-3 w-full " type="text" name="workCity2" :value="old('workCity2')" placeholder="Work City"/>
                    <x-input-error :messages="$errors->get('workCity2')" class="mt-2" />
    
                    {{-- <x-input-label for="workCountry1" :value="__('Work Country')"/> --}}
                    <x-text-input id="workCountry2" class="block mt-3 w-full " type="text" name="workCountry2" :value="old('workCountry2')" placeholder="Work Country" />
                    <x-input-error :messages="$errors->get('workCountry2')" class="mt-2" />
                    
                    <!-- Work Mode -->
                    <div class="mt-4">
                        <x-input-label :value="__('Work Mode')" /><br/>
                        <div class="flex items-center justify-between mt-2 border border-gray-300 rounded-md shadow-sm px-2 py-2 ">
                        <div>
                            <x-text-input id="remote2" class="border-gray-500 mr-1 cursor-pointer hover:border-blue-500" type="radio" name="mode2" value="Remote" />
                            <x-input-label for="remote2" :value="__('Remote')"/>
                        </div>
                        <div>
                            <x-text-input id="hybrid2" class="border-gray-500 mr-1 cursor-pointer hover:border-blue-500" type="radio" name="mode2" value="Hybrid" />
                            <x-input-label for="hybrid2" :value="__('Hybrid')"/>
                        </div>
                        <div>
                            <x-text-input id="onsite2" class="border-gray-500 mr-1 cursor-pointer hover:border-blue-500" type="radio" name="mode2" value="Onsite" />
                            <x-input-label for="onsite2" :value="__('On-Site')"/>
                        </div>
                        </div>
                        <x-input-error :messages="$errors->get('mode2')" class="mt-2" />
                    </div>
    
                    <!-- Related info -->
                    <div class="mt-4">
                        <x-input-label for="workInfo2" :value="__('Related Information (300 characters - optional)')" />
                        <textarea id="workInfo2" class="block rounded-md border-gray-300 mt-3 w-full" type="text" name="workInfo2" rows="4" :value="old('workInfo2')" maxlength="300" placeholder="e.g. Include company descrition, accomplishments, responsibilities or tasks, contact info of the company's focal person etc" ></textarea>
                        <x-input-error :messages="$errors->get('workInfo2')" class="mt-2" />
                    </div>
                    <br/><hr/>
                </div>
    
    
                <div id="53" class="mt-4 hidden">
                    <div class="font-bold text-md text-gray-900" >Work #3</div>
                    {{-- <x-input-label for="work3" :value="__('Work #3')" /> --}}
                    <x-text-input id="position3" class="block mt-3 w-full" type="text" name="position3" :value="old('position3')"  placeholder='Title or Position' />
                    <x-input-error :messages="$errors->get('position3')" class="mt-2" />
                    <x-text-input id="company3" class="block mt-3 w-full" type="text" name="company3" :value="old('company3')"  placeholder='Company or Workplace' />
                    <x-input-error :messages="$errors->get('company3')" class="mt-2" />
                    <div class="flex flex-wrap items-center justify-between mt-3">
                        <div>
                            <x-input-label for="workDateFrom3" :value="__('Work Starting Date')"/>
                            <x-text-input id="workDateFrom3" class="block mt-3 w-half " type="date" name="workDateFrom3" :value="old('workDateFrom3')"  max="" onfocus="this.max=new Date().toISOString().split('T')[0]"  />
                            <x-input-error :messages="$errors->get('workDateFrom3')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="workDateTo3" :value="__('Work Ending Date')"/>
                            <x-text-input id="workDateTo3" class="block mt-3 w-half " type="date" name="workDateTo3" :value="old('workDateTo3')"   />
                            <x-input-error :messages="$errors->get('workDateTo3')" class="mt-2" />
                        </div>
                    </div>
    
                    {{-- <x-input-label for="workCity3" :value="__('Work City')"/> --}}
                    <x-text-input id="workCity3" class="block mt-3 w-full " type="text" name="workCity3" :value="old('workCity3')"  placeholder="Work City"/>
                    <x-input-error :messages="$errors->get('workCity3')" class="mt-2" />
    
                    {{-- <x-input-label for="workCountry3" :value="__('Work Country')"/> --}}
                    <x-text-input id="workCountry3" class="block mt-3 w-full " type="text" name="workCountry3" :value="old('workCountry3')"  placeholder="Work Country" />
                    <x-input-error :messages="$errors->get('workCountry3')" class="mt-2" />
                    
                    <!-- Work Mode -->
                    <div class="mt-4">
                        <x-input-label :value="__('Work Mode')" /><br/>
                        <div class="flex items-center justify-between mt-2 border border-gray-300 rounded-md shadow-sm px-2 py-2 ">
                        <div>
                            <x-text-input id="remote3" class="border-gray-500 mr-1 cursor-pointer hover:border-blue-500" type="radio" name="mode3" value="Remote"  />
                            <x-input-label for="remote3" :value="__('Remote')"/>
                        </div>
                        <div>
                            <x-text-input id="hybrid3" class="border-gray-500 mr-1 cursor-pointer hover:border-blue-500" type="radio" name="mode3" value="Hybrid"  />
                            <x-input-label for="hybrid3" :value="__('Hybrid')"/>
                        </div>
                        <div>
                            <x-text-input id="onsite3" class="border-gray-500 mr-1 cursor-pointer hover:border-blue-500" type="radio" name="mode3" value="Onsite"  />
                            <x-input-label for="onsite3" :value="__('On-Site')"/>
                        </div>
                        </div>
                        <x-input-error :messages="$errors->get('mode3')" class="mt-2" />
                    </div>
    
                    <!-- Related info -->
                    <div class="mt-4">
                        <x-input-label for="workInfo3" :value="__('Related Information (300 characters - optional)')" />
                        <textarea id="workInfo3" class="block rounded-md border-gray-300 mt-3 w-full" type="text" name="workInfo3" rows="4" :value="old('workInfo3')" maxlength="300" placeholder="e.g. Include company descrition, accomplishments, responsibilities or tasks, contact info of the company's focal person etc" ></textarea>
                        <x-input-error :messages="$errors->get('workInfo3')" class="mt-2" />
                    </div>
                    <br/><hr/>
                </div>
                <div class="mt-4 flex justify-end">
                    <button type="button" onclick="subWork()" id="subwork" class="hover:bg-gray-700 cursor-pointer mr-3 w-8 h-8 bg-gray-300 border border-transparent rounded-md font-bold text-lg text-white uppercase tracking-widest transition ease-in-out duration-150">-</button>
                    <button type="button" onclick="addWork()" id="addwork" class="hover:bg-gray-700 cursor-pointer w-8 h-8 blue-bg-color border border-transparent rounded-md font-bold text-lg text-white uppercase tracking-widest transition ease-in-out duration-150">+</button>
                </div>

                <div class="flex items-center justify-center mt-5">
                    <x-primary-button>
                        {{ __('Save Resume') }}
                    </x-primary-button>
                </div>
            </div>

            <div id="nextPrevBtn" class="mt-4 flex justify-center">
                <button type="button" onclick="prev()" id="prevBtn" class="hidden hover:bg-gray-700 cursor-pointer mr-3 px-2 py-1 bg-gray-300 border border-transparent rounded-md font-bold text-sm text-white uppercase tracking-widest transition ease-in-out duration-150">Prev</button>
                <button type="button" onclick="next()" id="nextBtn" class="block hover:bg-gray-700 cursor-pointer px-2 py-1 blue-bg-color border border-transparent rounded-md font-bold text-sm text-white uppercase tracking-widest transition ease-in-out duration-150">Next</button>
            </div>
        </form>




        <script>
            
            function range(min, max) {
                let skills;
                return {
                    get() {
                    return skills;
                    },
                    set(newValue) {
                    skills = (newValue < min) ? min : (newValue > max) ? max : newValue;  
                    }
                };
            }

            const value = new range(2, 5);
            value.set(2);
            function addSkill(){
                document.getElementById(value.get()).setAttribute('style', 'display:block');
                value.set(value.get() + 1); 
            }
            function subSkill(){
                document.getElementById(value.get()).setAttribute('style', 'display:hidden');
                value.set(value.get() - 1);
            }

            const lans = new range(12, 13);
            lans.set(12);
            function addLan(){
                document.getElementById(lans.get()).setAttribute('style', 'display:block');
                lans.set(lans.get() + 1); 
            }
            function subLan(){
                document.getElementById(lans.get()).setAttribute('style', 'display:hidden');
                lans.set(lans.get() - 1);
            }

            const tskills = new range(32, 40);
            tskills.set(32);
            function addtSkill(){
                document.getElementById(tskills.get()).setAttribute('style', 'display:block');
                tskills.set(tskills.get() + 1); 
            }
            function subtSkill(){
                document.getElementById(tskills.get()).setAttribute('style', 'display:hidden');
                tskills.set(tskills.get() - 1);
            }

            const edus = new range(42, 43);
            edus.set(42);
            function addEdu(){
                document.getElementById(edus.get()).setAttribute('style', 'display:block');
                edus.set(edus.get() + 1); 
            }
            function subEdu(){
                document.getElementById(edus.get()).setAttribute('style', 'display:hidden');
                edus.set(edus.get() - 1);
            }

            const works = new range(52, 53);
            works.set(52);
            function addWork(){
                document.getElementById(works.get()).setAttribute('style', 'display:block');
                works.set(works.get() + 1); 
            }
            function subWork(){
                document.getElementById(works.get()).setAttribute('style', 'display:hidden');
                works.set(works.get() - 1);
            }


            const tabs = new range(61, 67);
            tabs.set(61);
            function next(){

                document.getElementById(tabs.get()).setAttribute('style', 'display:none');
                tabs.set(tabs.get() + 1);
                document.getElementById(tabs.get()).setAttribute('style', 'display:block');

                if(tabs.get() >= 62){
                    document.getElementById("prevBtn").setAttribute('style', 'display:block');
                }
                if(tabs.get() == 67){
                    document.getElementById("nextBtn").setAttribute('style', 'display:none');
                }   
            }


            function prev(){

                document.getElementById(tabs.get()).setAttribute('style', 'display:hidden');
                tabs.set(tabs.get() - 1);
                document.getElementById(tabs.get()).setAttribute('style', 'display:block');

                if(tabs.get() < 67){
                    document.getElementById("nextBtn").setAttribute('style', 'display:block');
                }

                if(tabs.get() == 61){
                    document.getElementById("prevBtn").setAttribute('style', 'display:none');
                }
            }


        </script>
    </x-card>
</x-guest-layout>






