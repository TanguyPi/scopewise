<div class="background">

    @if($currentStep == 0)

    <div class="text-center">
        <h1 class="text-4xl font-extrabold text-white">Step 1</h1>
        <p class="text-white font-bold mt-4 mb-12">No worries it won't be long..</p>
    </div>


    <div class="mb-10">
            <label class="block text-white font-bold mb-2">Project name *</label>
            <input type="text" class="block w-full rounded-md text-white bg-transparent border-indigo-500 focus:border-green-300" wire:model="name">
            @error('name') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
    </div>

      <div class="mb-10">
            <label class="block text-white font-bold text-left mb-2">How many people will be involve in the project? *</label>
            <select class="block w-full rounded-md text-white bg-transparent border-indigo-500 focus:border-green-300" wire:model="team">
                <option>--Team member--</option>
                <option value="Alone">I'm alone</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="5-10">5-10</option>
                <option value="+10">> 10</option>
            </select>
            @error('team') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
        </div>

        <div class="mb-10">

            <label class="block text-white font-bold text-left mb-2">What is the level of experience of the people involved in the project ? *</label>
            <select class="block w-full rounded-md text-white bg-transparent border-indigo-500 focus:border-green-300" wire:model="experience">
                <option>--Experience--</option>
                <option value="junior">Junior</option>
                <option value="medium">Medium</option>
                <option value="senior">Senior</option>
                <option value="mix">Mix</option>
                <option value="more like junior">More like junior</option>
                  <option value="more like senior">More like senior</option>
            </select>
            @error('experience') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror

        </div>

        <div class="mb-10">

                <label class="block text-white font-bold mb-2">Choose your Stack *</label>
                <div class="w-full flex flex-wrap justify-center mb-3">
                    <input class="border-1 border-indigo-500 text-indigo-500 my-1 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="vanilla js"><label class="block text-white font-bold mb-2 pt-1">Vanilla JS</label>
                    <input class="border-1 border-indigo-500 text-indigo-500 my-1 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="react"><label class="block text-white font-bold mb-2 pt-1">React</label>
                    <input class="border-1 border-indigo-500 text-indigo-500 my-1 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="jQuery"><label class="block text-white font-bold mb-2 pt-1">jQuery</label>
                    <input class="border-1 border-indigo-500 text-indigo-500 my-1 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="next js"><label class="block text-white font-bold mb-2 pt-1">Next JS</label>
                </div>
                <div class="flex flex-wrap justify-center mb-3">
                    <input class="border-1 border-indigo-500 text-indigo-500 my-1 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="vue js"><label class="block text-white font-bold mb-2 pt-1">Vue JS</label>
                    <input class="border-1 border-indigo-500 text-indigo-500 my-1 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="angular"><label class="block text-white font-bold mb-2 pt-1">Angular</label>
                    <input class="border-1 border-indigo-500 text-indigo-500 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="node js"><label class="block text-white font-bold mb-2 pt-1">Node JS</label>
                    <input class="border-1 border-indigo-500 text-indigo-500 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="php"><label class="block text-white font-bold mb-2 pt-1">PHP</label>
                </div>

                <div class="flex flex-wrap justify-center mb-3">
                    <input class="border-1 border-indigo-500 text-indigo-500 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="symfony"><label class="block text-white font-bold mb-2 pt-1">Symfony</label>
                    <input class="border-1 border-indigo-500 text-indigo-500 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="laravel"><label class="block text-white font-bold mb-2 pt-1">Laravel</label>
                    <input class="border-1 border-indigo-500 text-indigo-500 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="wordpress"><label class="block text-white font-bold mb-2 pt-1">Wordpress</label>
                    <input class="border-1 border-indigo-500 text-indigo-500 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="go"><label class="block text-white font-bold mb-2 pt-1">Go</label>
                </div>

                <div class="flex flex-wrap justify-center">
                    <input class="border-1 border-indigo-500 text-indigo-500 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="python"><label class="block text-white font-bold mb-2 pt-1">Python</label>
                    <input class="border-1 border-indigo-500 text-indigo-500 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="django"><label class="block text-white font-bold mb-2 pt-1">Django</label>
                    <input class="border-1 border-indigo-500 text-indigo-500 mx-3 bg-transparent" type="checkbox" wire:model="stack" value=".net"><label class="block text-white font-bold mb-2 pt-1">.Net</label>
                    <input class="border-1 border-indigo-500 text-indigo-500 mx-3 bg-transparent" type="checkbox" wire:model="stack" value="ruby on rails"><label class="block text-white font-bold mb-2 pt-1">Ruby on Rails</label>
                </div>

                <div class="flex flex-wrap justify-center">
                    <input class="border-1 border-indigo-500 text-indigo-500 mx-3 bg-transparent" type="checkbox" wire:model.lazy="free_stack"><label class="block text-white font-bold mb-2 pt-1">I don't see my stack here</label> 
                </div>

                @if($free_stack)
                    <label class="block text-white font-bold text-left mb-2">Write your stack *</label>
                    <div class="flex flex-wrap">
                        <input class="border-2 border-indigo-500 mx-3 block" type="text" wire:model="free_stack">
                    </div>
                @else
                @endif
                @error('stack') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
                @error('free_stack') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
        
        </div>

    <div class="mt-6 text-center">
        <button class="btn" wire:click="nextStep">Next step</button>
    </div>

    @elseif($currentStep == 1)

      <div class="text-center">
        <h1 class="text-4xl font-extrabold text-white">Step 2</h1>
        <p class="text-white font-bold mt-4 mb-12">It's almost done..</p>
      </div>

        <div class="mb-10">
            <label class="block text-white font-bold mb-2">Are you in charge of the design? *</label>
                <div class="flex justify-start flex-wrap mb-2">
                    <input class="rounded-md bg-transparent text-indigo-500 border-indigo-500 mx-3" type="radio" wire:model="design" value="yes"><label class="block text-white font-semibold mb-2 pt-1">Yes</label>
                    <input class="rounded-md bg-transparent text-indigo-500 border-indigo-500 mx-3" type="radio" wire:model="design" value="no"><label class="block text-white font-semibold mb-2 pt-1">No</label>
                </div>
                @error('design') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
         </div>

         <div class="mb-10">

                <label class="block text-white font-bold text-left mb-2">Describes quickly the project *</label>
                <textarea class="border-2 border-indigo-500 rounded-md bg-transparent block w-full min-h-48 focus:border-green-300 text-white" wire:model="description" placeholder="You have 500 characters"></textarea>
                <small class="text-white font-bold" x-text="$wire.description.length"></small>
                @error('description') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
        </div>

            <div class="mb-10">

                <label class="block text-white font-bold text-left mb-2">Tell us more about the main features of the app *</label>
                <textarea class="border-2 border-indigo-500 rounded-md bg-transparent block w-full min-h-48 focus:border-green-300 text-white" wire:model="features" placeholder="You have 800 characters"></textarea>
                <small class="text-white font-bold" x-text="$wire.features.length"></small>
                @error('features') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror

            </div>

            <div class="flex items-center justify-center mb-6 gap-4">
                <button class="btn" wire:click="previousStep">Previous step</button>
                <button class="btn" wire:click="nextStep">Next step</button>
            </div>
        

    @elseif($currentStep == 2)

     <div class="text-center">
        <h1 class="text-4xl font-extrabold text-white">Step 3</h1>
        <p class="text-white font-bold mt-4 mb-12">This is the last step!</p>
      </div>

            <div class="mb-10">
            <label class="block text-white font-bold mb-2">Are you going to do unit testing *</label>
                <div class="flex justify-start flex-wrap mb-2">
                    <input class="border-indigo-500 text-indigo-500 rounded-md bg-transparent mx-3" type="radio" wire:model="unitaire" value="yes"><label class="block text-white font-semibold mb-2 pt-1">Yes</label>
                    <input class="border-indigo-500 text-indigo-500 rounded-md bg-transparent mx-3" type="radio" wire:model="unitaire" value="no"><label class="block text-white font-semibold mb-2 pt-1">No</label>
                </div>
                @error('unitaire') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>


            <div class="mb-10">
            <label class="block text-white font-bold mb-2">Are you going to run automated tests ? *</label>
                <div class="flex justify-start flex-wrap mb-2">
                    <input class="bg-transparent border-indigo-500 text-indigo-500 rounded-md mx-3" type="radio" wire:model="qa" value="yes"><label class="block text-white font-semibold mb-2 pt-1">Yes</label>
                    <input class=" bg-transparent border-indigo-500 text-indigo-500 rounded-md mx-3" type="radio" wire:model="qa" value="no"><label class="block text-white font-semibold mb-2 pt-1">No</label>
                </div>
                @error('qa') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>

            <div class="mb-10">
            <label class="block text-white font-bold mb-2">Are you going to dockerize the app? *</label>
                <div class="flex justify-start flex-wrap mb-2">
                    <input class="bg-transparent border-indigo-500 text-indigo-500 rounded-md mx-3" type="radio" wire:model="docker" value="yes"><label class="block text-white font-semibold mb-2 pt-1">Yes</label>
                    <input class="bg-transparent border-indigo-500 text-indigo-500 rounded-md mx-3" type="radio" wire:model="docker" value="no"><label class="block text-white font-semibold mb-2 pt-1">No</label>
                </div>
                @error('docker') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>

            <div class="mb-10">
                <label class="block text-white font-bold text-left mb-2">Where is the application hosted? *</label>
                <div class="flex flex-wrap justify-start mb-3">
                    <input class="bg-transparent border-indigo-500 text-indigo-500 rounded-md my-1 mx-3" type="checkbox" wire:model="hosting" value="aws"><label class="block text-white font-bold mb-2 pt-1">AWS</label>
                    <input class="bg-transparent bg-transparent text-indigo-500 rounded-md border-indigo-500 my-1 mx-3" type="checkbox" wire:model="hosting" value="azure"><label class="block text-white font-bold mb-2 pt-1">Microsoft Azure</label>
                    <input class="bg-transparent border-indigo-500 text-indigo-500 rounded-md my-1 mx-3" type="checkbox" wire:model="hosting" value="digital ocean"><label class="block text-white font-bold mb-2 pt-1">Digital Océan</label>
                 </div>
                 <div class="flex flex-wrap justify-start mb-3">
                    <input class="bg-transparent border-indigo-500 text-indigo-500 rounded-md mx-3" type="checkbox" wire:model="hosting" value="google clound"><label class="block text-white font-bold mb-2 pt-1">Google cloud</label>
                    <input class="bg-transparent border-indigo-500 text-indigo-500 rounded-md my-1 mx-3" type="checkbox" wire:model="hosting" value="hostinger"><label class="block text-white font-bold mb-2 pt-1">Hostinger</label>
                     <input class="bg-transparent border-indigo-500 text-indigo-500 rounded-md my-1 mx-3" type="checkbox" wire:model="hosting" value="ovh"><label class="block text-white font-bold mb-2 pt-1">OVH</label>
                </div>
                 <div class="flex flex-wrap justify-start mb-3">
                    <input class="bg-transparent border-indigo-500 text-indigo-500 rounded-md my-1 mx-3" type="checkbox" wire:model="hosting" value="own infrastructure"><label class="block text-white font-bold mb-2 pt-1">I have my own infra</label>
                    <input class="bg-transparent border-indigo-500 text-indigo-500 rounded-md my-1 mx-3" type="checkbox" wire:model="hosting" value="others"><label class="block text-white font-bold mb-2 pt-1">Others</label>
                </div>
                @error('hosting') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>


            <div class="mb-10">
            <label class="block text-white font-bold text-left mb-2">Do you need a devops? *</label>
                <div class="flex justify-start flex-wrap mb-2">
                    <input class="bg-transparent border-indigo-500 text-indigo-500 rounded-md mx-3" type="radio" wire:model="devops" value="yes"><label class="block text-white font-semibold mb-2 pt-1">Yes</label>
                    <input class="bg-transparent border-indigo-500 text-indigo-500 rounded-md mx-3" type="radio" wire:model="devops" value="no"><label class="block text-white font-semibold mb-2 pt-1">No</label>
                </div>
                @error('devops') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>


            <div class="mb-10">
            <label class="block text-white font-bold text-left mb-2">Level of risk *</label>
                <div class="flex justify-start flex-wrap mb-2">
                    <input class="border-1 w-full rounded-md bg-transparent border-indigo-500 mx-3" type="range" min="0" max="5" step="1" value="{{ $risk }}" wire:model.lazy="risk">
                </div>
                 @if($risk == 0)
                        <span class="text-white font-bold">{{$risk}} - The project has no risk</span>
                    @elseif($risk == 1)
                        <span class="text-white font-bold">{{$risk}} - The project is low risk</span>
                    @elseif($risk == 2)
                          <span class="text-white font-bold">{{$risk}} - The project involves some risks but these should not have a major impact on delivery</span>
                    @elseif($risk == 3)
                          <span class="text-white font-bold">{{$risk}} - The project involves risks that may affect delivery</span>
                    @elseif($risk == 4)
                          <span class="text-white font-bold">{{$risk}} - The project involves a lot of risks</span>
                    @else
                          <span class="text-white font-bold">{{$risk}} - The project is higly risky</span>
                    @endif
                    @error('risk') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>



        <div class="flex items-center justify-center mb-6 gap-4">
            <button class="btn" wire:click="previousStep">Previous step</button>
            <button type="submit" class="btn" wire:click="submitForm">Submit !</button>
        </div>

           <!-- Loader -->
        <div wire:loading wire:target="submitForm" class="text-center mb-4">
            <svg class="animate-spin h-5 w-5 text-white mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8h8a8 8 0 01-8 8v-8H4z"></path>
            </svg>
            <p class="text-white mt-2">Loading...</p>
        </div>
   
@endif

</div>



