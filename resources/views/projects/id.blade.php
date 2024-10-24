<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
        Your estimation
        </h2>
    </x-slot>


    <div class="container mx-auto">
    <div class="block md:flex">

        <div class="py-4 md:py-12 md:w-10/12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg border-2  border-green-200 text-white p-12">
                        
                    <livewire:sheet :id="$id"/>

                </div>
            </div>
        </div>

        <div class="py-12 md:w-2/12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
                <livewire:feedback :id="$id"/> 
               
            </div>
        </div>

    </div>
    </div>

</x-app-layout>
