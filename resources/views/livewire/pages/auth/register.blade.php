<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);
        $validated['password'] = Hash::make($validated['password']);
        event(new Registered($user = User::create($validated)));
        Auth::login($user);
        session()->flash('message', 'Thanks for signing up! From now you can get an estimaton for your project!');
        $this->redirect(RouteServiceProvider::HOME, navigate: true);
    }
}; ?>

<div>
            <h1 class="text-4xl font-extrabold text-white text-center">SIGN UP QUICKLY AND GET STARTED</h1>
            <p class="text-white font-bold mt-4 mb-10 text-center">Fill out only this 4 fields and it's done!</p>
            
    <form wire:submit="register">
        <!-- Name -->
        <div>
            <x-input-label class="text-white font-bold mb-2" for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block w-full rounded-md text-white bg-transparent border-indigo-500 focus:border-green-300" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label class="text-white font-bold mb-2" for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block w-full rounded-md text-white bg-transparent border-indigo-500 focus:border-green-300" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label class="text-white font-bold mb-2" for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block w-full rounded-md text-white bg-transparent border-indigo-500 focus:border-green-300"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label class="text-white font-bold mb-2" for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block w-full rounded-md text-white bg-transparent border-indigo-500 focus:border-green-300"
                            type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div>
