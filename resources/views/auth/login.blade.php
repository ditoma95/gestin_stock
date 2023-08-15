<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="relative">
            <input type="email" id="floating_filled" class="champs_input peer" placeholder=" "  name="email" :value="old('email')" required autofocus autocomplete="username"  />
            <label for="floating_filled" class="champs_label">Email</label>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Password -->

        <div class="relative mt-4">
            <input type="password" id="floating_filled" class="champs_input peer" placeholder=" "  name="password" :value="old('password')" required autofocus autocomplete="username" />
            <label for="floating_filled" class="champs_label">Password</label>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-900">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between  mt-4">

            <div>
                <p>Mot de passe oublier?</p>
            </div>
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('cliquer ici') }}
                </a>
            @endif

        </div>

        <div class="flex items-center justify-end mt-4">
            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    {{ __('connexion') }}
                </span>
            </button>
        </div>

        <div class="flex items-center justify-between  mt-4">
            <div>
                <p>Pas de compte?</p>
            </div>
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('register') }}">
                    {{ __('cliquer ici') }}
                </a>
            @endif
        </div>
    </form>
</x-guest-layout>
