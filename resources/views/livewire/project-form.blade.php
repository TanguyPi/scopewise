<div>

    @if($currentStep == 0)

     <h1 class="text-4xl font-extrabold mb-36 text-white">TRY THE BETA SOLUTION!</h1>

    <div class="mx-auto max-w-3xl text-center mb-6">
        <a class="btn" wire:click="nextStep">Get Started</a>
    </div>

    @elseif($currentStep == 1)

    <div>
        <h1 class="text-4xl font-extrabold text-white">Step 1</h1>
        <p class="text-white font-bold mt-4 mb-12">No worries it won't be long..</p>
    </div>

      <div class="flex items-center justify-center mb-6">

            <div class="mb-4">
            <label class="block text-white font-bold text-left mb-2">How many people will be involve in the project? *</label>
            <select class="rounded-md" wire:model="team">
                <option>--Team member--</option>
                <option value="Alone">I'm alone</option>
                <option value="1-5">1-5</option>
                <option value="5-10">5-10</option>
                <option value="10-20">10-20</option>
                <option value="20+">20+</option>
            </select>
            @error('team') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>

        </div>

        <div class="flex items-center justify-center mb-6">

            <div class="mb-4">
            <label class="block text-white font-bold text-left mb-2">What is the level of experience of the people involved in the project ? *</label>
            <select class="rounded-md" wire:model="experience">
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

        </div>

        <div class="flex items-center justify-center mb-6">

            <div class="mb-4">
                <label class="block text-white font-bold text-left mb-2">Choose your Stack *</label>
                <div class="flex flex-wrap justify-center mb-3">
                    <input class="border-2 border-indigo-500 my-1 mx-3" type="checkbox" wire:model="stack" value="vanilla js"><label class="block text-white font-bold mb-2 pt-1">Vanilla JS</label>
                    <input class="border-2 border-indigo-500 my-1 mx-3" type="checkbox" wire:model="stack" value="react"><label class="block text-white font-bold mb-2 pt-1">React</label>
                    <input class="border-2 border-indigo-500 my-1 mx-3" type="checkbox" wire:model="stack" value="jQuery"><label class="block text-white font-bold mb-2 pt-1">jQuery</label>
                    <input class="border-2 border-indigo-500 my-1 mx-3" type="checkbox" wire:model="stack" value="next js"><label class="block text-white font-bold mb-2 pt-1">Next JS</label>
                    <input class="border-2 border-indigo-500 my-1 mx-3" type="checkbox" wire:model="stack" value="vue js"><label class="block text-white font-bold mb-2 pt-1">Vue JS</label>
                    <input class="border-2 border-indigo-500 my-1 mx-3" type="checkbox" wire:model="stack" value="angular"><label class="block text-white font-bold mb-2 pt-1">Angular</label>
                 </div>
                <div class="flex flex-wrap justify-center mb-3">
                    <input class="border-2 border-indigo-500 mx-3" type="checkbox" wire:model="stack" value="node js"><label class="block text-white font-bold mb-2 pt-1">Node JS</label>
                    <input class="border-2 border-indigo-500 mx-3" type="checkbox" wire:model="stack" value="php"><label class="block text-white font-bold mb-2 pt-1">PHP</label>
                    <input class="border-2 border-indigo-500 mx-3" type="checkbox" wire:model="stack" value="symfony"><label class="block text-white font-bold mb-2 pt-1">Symfony</label>
                    <input class="border-2 border-indigo-500 mx-3" type="checkbox" wire:model="stack" value="laravel"><label class="block text-white font-bold mb-2 pt-1">Laravel</label>
                    <input class="border-2 border-indigo-500 mx-3" type="checkbox" wire:model="stack" value="wordpress"><label class="block text-white font-bold mb-2 pt-1">Wordpress</label>
                    <input class="border-2 border-indigo-500 mx-3" type="checkbox" wire:model="stack" value="go"><label class="block text-white font-bold mb-2 pt-1">Go</label>
                </div>
                <div class="flex flex-wrap justify-center">
                    <input class="border-2 border-indigo-500 mx-3" type="checkbox" wire:model="stack" value="python"><label class="block text-white font-bold mb-2 pt-1">Python</label>
                    <input class="border-2 border-indigo-500 mx-3" type="checkbox" wire:model="stack" value="django"><label class="block text-white font-bold mb-2 pt-1">Django</label>
                    <input class="border-2 border-indigo-500 mx-3" type="checkbox" wire:model="stack" value=".net"><label class="block text-white font-bold mb-2 pt-1">.Net</label>
                    <input class="border-2 border-indigo-500 mx-3" type="checkbox" wire:model="stack" value="ruby on rails"><label class="block text-white font-bold mb-2 pt-1">Ruby on Rails</label>
                    <input class="border-2 border-indigo-500 mx-3" type="checkbox" wire:model="stack" value="null"><label class="block text-white font-bold mb-2 pt-1">I don't see my stack here</label>
                </div>
                @error('stack') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>
        
        </div>

    <div class="mt-6">
        <button class="btn" wire:click="nextStep">Next step</button>
    </div>

    @elseif($currentStep == 2)

      <div>
        <h1 class="text-4xl font-extrabold text-white">Step 2</h1>
        <p class="text-white font-bold mt-4 mb-12">It's almost done..</p>
      </div>

        <div class="flex items-center justify-center mb-6">

            <div class="mb-4">
                <label class="block text-white font-bold text-left mb-2">Are you going to design the app? *</label>
                    <div class="flex justify-center flex-wrap mb-2">
                        <input class="border-2 border-double border-indigo-500 mx-3" type="radio" wire:model="design" value="yes"><label class="block text-white font-semibold mb-2 pt-1">Yes</label>
                        <input class="border-2 border-double border-indigo-500 mx-3" type="radio" wire:model="design" value="no"><label class="block text-white font-semibold mb-2 pt-1">No</label>
                    </div>
                    @error('design') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>
    
         </div>

         <div class="flex items-center justify-center mb-6">

            <div class="mb-4">
                <label class="block text-white font-bold text-left mb-2">Describes quickly the project *</label>
                <textarea class="border-2 border-double border-indigo-500" wire:model="description" placeholder="You have 500 characters"></textarea>
                <small class="text-white font-bold" x-text="$wire.description.length"></small>
                @error('description') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>

        </div>

        <div class="flex items-center justify-center mb-6">

            <div class="mb-4">
                <label class="block text-white font-bold text-left mb-2">Tell us more about the main features of the app *</label>
                <textarea class="border-2 border-double border-indigo-500" wire:model="features" placeholder="You have 800 characters"></textarea>
                <small class="text-white font-bold" x-text="$wire.features.length"></small>
                @error('features') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>

        </div>

            <div class="flex items-center justify-center mb-6 gap-4">
                <button class="btn" wire:click="previousStep">Previous step</button>
                <button class="btn" wire:click="nextStep">Next step</button>
            </div>
        

    @elseif($currentStep == 3)

     <div>
        <h1 class="text-4xl font-extrabold text-white">Step 3</h1>
        <p class="text-white font-bold mt-4 mb-12">This is the last step!</p>
      </div>

        <div class="flex items-center justify-center mb-6">

            <div class="mb-4">
            <label class="block text-white font-bold text-left mb-2">Are you going to run automated tests? *</label>
                <div class="flex justify-center flex-wrap mb-2">
                    <input class="border-2 border-double border-indigo-500 mx-3" type="radio" wire:model="qa" value="yes"><label class="block text-white font-semibold mb-2 pt-1">Yes</label>
                    <input class="border-2 border-double border-indigo-500 mx-3" type="radio" wire:model="qa" value="no"><label class="block text-white font-semibold mb-2 pt-1">No</label>
                </div>
                @error('qa') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>

        </div>

        <div class="flex items-center justify-center mb-6">

            <div class="mb-4">
            <label class="block text-white font-bold text-left mb-2">Are you going to dockerize the app? *</label>
                <div class="flex justify-center flex-wrap mb-2">
                    <input class="border-2 border-double border-indigo-500 mx-3" type="radio" wire:model="docker" value="yes"><label class="block text-white font-semibold mb-2 pt-1">Yes</label>
                    <input class="border-2 border-double border-indigo-500 mx-3" type="radio" wire:model="docker" value="no"><label class="block text-white font-semibold mb-2 pt-1">No</label>
                </div>
                @error('docker') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>

        </div>

        <div class="flex items-center justify-center mb-6">

            <div class="mb-4">
                <label class="block text-white font-bold text-left mb-2">Where is the application hosted? *</label>
                <div class="flex flex-wrap justify-center mb-3">
                    <input class="border-2 border-indigo-500 my-1 mx-3" type="checkbox" wire:model="hosting" value="aws"><label class="block text-white font-bold mb-2 pt-1">AWS</label>
                    <input class="border-2 border-indigo-500 my-1 mx-3" type="checkbox" wire:model="hosting" value="azure"><label class="block text-white font-bold mb-2 pt-1">Microsoft Azure</label>
                    <input class="border-2 border-indigo-500 my-1 mx-3" type="checkbox" wire:model="hosting" value="digital ocean"><label class="block text-white font-bold mb-2 pt-1">Digital Océan</label>
                    <input class="border-2 border-indigo-500 my-1 mx-3" type="checkbox" wire:model="hosting" value="ovh"><label class="block text-white font-bold mb-2 pt-1">OVH</label>
                    <input class="border-2 border-indigo-500 my-1 mx-3" type="checkbox" wire:model="hosting" value="hostinger"><label class="block text-white font-bold mb-2 pt-1">Hostinger</label>
                 </div>
                 <div class="flex flex-wrap justify-center mb-3">
                    <input class="border-2 border-indigo-500 mx-3" type="checkbox" wire:model="hosting" value="google clound"><label class="block text-white font-bold mb-2 pt-1">Google cloud</label>
                    <input class="border-2 border-indigo-500 my-1 mx-3" type="checkbox" wire:model="hosting" value="own infrastructure"><label class="block text-white font-bold mb-2 pt-1">I have my own infra</label>
                    <input class="border-2 border-indigo-500 my-1 mx-3" type="checkbox" wire:model="hosting" value="others"><label class="block text-white font-bold mb-2 pt-1">Others</label>
                </div>
                @error('hosting') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>
        
        </div>

        <div class="flex items-center justify-center mb-6">

            <div class="mb-4">
            <label class="block text-white font-bold text-left mb-2">Do you have a devops? *</label>
                <div class="flex justify-center flex-wrap mb-2">
                    <input class="border-2 border-double border-indigo-500 mx-3" type="radio" wire:model="devops" value="yes"><label class="block text-white font-semibold mb-2 pt-1">Yes</label>
                    <input class="border-2 border-double border-indigo-500 mx-3" type="radio" wire:model="devops" value="no"><label class="block text-white font-semibold mb-2 pt-1">No</label>
                    <input class="border-2 border-double border-indigo-500 mx-3" type="radio" wire:model="devops" value="not necessary"><label class="block text-white font-semibold mb-2 pt-1">Not necessary</label>
                </div>
                @error('devops') <p class="text-red-400 font-semibold">{{ $message }}</p> @enderror
            </div>

        </div>

        <div class="flex items-center justify-center mb-6 gap-4">
            <button class="btn" wire:click="previousStep">Previous step</button>
             <button type="submit" class="btn" wire:click="submitForm">Submit !</button>
        </div>

 
   
@endif

</div>



