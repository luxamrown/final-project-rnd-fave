<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
<div class = "mt-4">

    <!-- Nomor Telepon -->
    <div>
        <label for="phoneNumber" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
        <input id="phoneNumber" type="tel" name="phoneNumber" pattern="^08[0-9]{9,12}$" value="{{ old('phoneNumber') }}" required autocomplete="tel" class="mt-1 p-2 w-full border rounded-md">
    </div>
    {{-- Date of birth --}}
    <div>
        <label for="dateOfBirth" class="block text-sm font-medium text-gray-700">dateOfBirth (Format DD-MM-YYYY)</label>
        <input id="dateOfBirth" type="text" name="dateOfBirth" value="{{ old('dateOfBirth') }}" required class="mt-1 p-2 w-full border rounded-md">
    </div>

      <!-- Role -->
      {{-- <div>
        <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
        <select id="role" name="role" class="mt-1 p-2 w-full border rounded-md">
            <option value="User" selected>User</option>
            <!-- Tambahkan opsi lain jika diperlukan -->
        </select>
    </div> --}}
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('You already have an account?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
