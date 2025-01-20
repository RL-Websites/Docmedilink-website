<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form class="w-full max-w-[400px]" method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <h2 class="text-center text-2xl font-bold mb-4 auth-title auth-underline">Log In to Docmedilink</h2>
        </div>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address *')" class="!text-lg mb-2" />
            <x-text-input id="email" class="block mt-1 w-full focus:outline-1 outline-primary shadow-none border-none rounded-md bg-[#E8E8E8] h-[56px] px-3"  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password *')" class="!text-lg mb-2" />
            <x-text-input id="password" class="block mt-1 w-full focus:outline-1 outline-primary shadow-none border-none rounded-md bg-[#E8E8E8] h-[56px] px-3 "
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}

            <x-primary-button class="dml-btn dml-btn__primary hover:!bg-transparent focus:!outline-none focus:!bg-transparent focus:!shadow-none  w-full capitalize !py-4 " style="box-shadow: none !important;">
                {{ __('Login') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
