<div>
    @if($estimation->feedback == null)
            
        <div x-data="{ open: false }">

            <h3 class="text-white mb-2 text-center">Is the estimate seems right for you?</h3>

                <div class="flex justify-center flex-wrap mb-2">
                    <input class="border-2 border-double border-indigo-500 mx-3" type="radio" type="radio" value="Yes" wire:model="feedback"><label class="block text-white font-semibold mb-2 pt-1">Yes</label>
                    <input class="border-2 border-double border-indigo-500 mx-3" type="radio" type="radio" value="No" wire:model="feedback"><label class="block text-white font-semibold mb-2 pt-1">No</label>
                </div>
                <div class="text-center"><button @click="open = ! open" type="submit" class="btn-small" wire:click="submitFeedback">Submit</button></div> 
    @else
    @endif
            <div x-show="open" x-transition.delay.50ms>
                @if (session()->has('message'))
                    <div class="alert alert-info">
                        {{ session('message') }}
                    </div>
                @endif      
            </div> 
  
                
        </div>

</div>


