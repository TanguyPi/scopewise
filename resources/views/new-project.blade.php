<x-app-layout>
    <x-slot name="header">

        <h1 class="font-semibold text-xl text-white leading-tight">
            {{ __('New project') }}
        </h1>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 background">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden">
        
 
                <livewire:project-form/>

        </div>
        </div>

        </div>
    </div>
</x-app-layout>
