<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="alert-success m-3 md:m-0">
                <p >Sharing a scoping to the client can be a nightmare. The purpose of the app is to make it easier saving time for most important task we daily deal with.</p>
                <p >As the application is in Bêta test right now, we need to get feedback from your user to try to build the most useful product possible. So please, don't be shy let's get in touch!</p>
            </div>

            <livewire:ideas>

        </div>
    </div>

    <!-- Close div full height -->
    </div>
    
</x-app-layout>
