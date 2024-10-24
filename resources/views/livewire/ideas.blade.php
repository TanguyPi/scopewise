@section('meta')
    <meta name="description" content="{{ $metaDescription }}">
@endsection

<div class="mt-4">

    <h2 class="text-white font-semibold my-6">Vote for the next feature!</h2>

        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">


        @if(session()->has('message'))
            <div class="alert alert-success mb-12">
                {{ session('message') }}
            </div>
        @endif 

        </div>

    
    @forelse($ideas as $idea)


        <!-- On vérifie si l'user a deja voté -->
        @php $hasVoted = $idea->votes->firstWhere('user_id',auth()->user()->id) @endphp

            @if(!$hasVoted)

            <div x-data="{ open: false }" class="flex items-center flex-wrap ml-6">

                    <p class="text-white my-4 mr-1">{{$idea->name}} :</p>

                    <input class="rounded-md bg-transparent text-indigo-500 border-indigo-500 mx-2" type="radio" value="Yes" wire:model="answer.{{$idea->id}}"><label class="block text-white text-sm ">👍​</label>
                    <input class="rounded-md bg-transparent text-indigo-500 border-indigo-500 mx-2" type="radio" value="No"  wire:model="answer.{{$idea->id}}"><label class="block text-white text-sm ">👎​</label>
                    <div class="text-center mr-2"><button type="submit" class="text-white underline mx-2"  wire:click="submitVotes({{$idea->id}})">Vote</button></div> 
                    <span class="text-white mr-2"> - 👍  {{ $idea->countYes() }}</span>
                    <span class="text-white"> 👎 {{ $idea->countNo() }}</span> 
                    @error('answer') <p class="text-red-400 font-semibold ml-2">{{ $message }}</p> @enderror 
                  
            </div>

            @else

            <div class="flex items-center flex-wrap ml-6 ">
                <p class="text-white my-3 mr-2">{{$idea->name}} : You has voted for this idea.</p>
                <span class="text-white mr-2"> 👍 {{ $idea->countYes() }}</span>
                <span class="text-white"> 👎 {{ $idea->countNo() }}</span>
            </div>

            @endif


    @empty
    @endforelse

    </div>

</div>
