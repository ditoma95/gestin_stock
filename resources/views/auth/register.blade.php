<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="relative">
            <input type="text" id="name" class="champs_input peer" placeholder=" "  name="name" :value="old('name')" required autofocus autocomplete="name"  />
            <label for="name" class="champs_label">Name</label>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

        </div>

        <!-- Email Address -->
        <div class="relative mt-4">
            <input type="email" id="floating_filled" class="champs_input peer" placeholder=" "  name="email" :value="old('email')" required autofocus autocomplete="username"  />
            <label for="floating_filled" class="champs_label">Email</label>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->

        <div class="relative mt-4">
            <input type="password" id="floating_filled" class="champs_input peer" placeholder=" "  name="password" :value="old('password')" required autofocus autocomplete="new-password" />
            <label for="floating_filled" class="champs_label">Password</label>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="relative mt-4">
            <input type="password" id="password_confirmation" class="champs_input peer" placeholder=" "
            name="password_confirmation" :value="old('password')" required autofocus autocomplete="new-password" />
            <label for="password_confirmation" class="champs_label">Confirm password</label>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    {{ __('Register') }}
                </span>
            </button>

        </div>
    </form>
    <div class="flex items-center justify-between mt-4">
        <div>
            <p>Vous avez déjà un compte?</p>
        </div>
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('login') }}">
            {{ __('cliquer ici') }}
        </a>


    </div>
</x-guest-layout>
