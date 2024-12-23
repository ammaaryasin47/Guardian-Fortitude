<x-app-layout>
    <x-slot name="header">
        <h2  class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background:#000; color:#fff;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Profile Picture Section -->
            <div class="flex justify-center">
                <div class="w-32 h-32 rounded-full overflow-hidden shadow-lg">
                    <img src="{{ auth()->user()->picture ?? asset('images/default-avatar.png') }}" alt="Profile Picture" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Update Profile Information -->
            <div style="background:#000; color:#fff;" class="p-4 sm:p-8  shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div style="background:#000; color:#ffff;" class="p-4 sm:p-8 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account -->
            <div style="background:#000; color:#fff;" class="p-4 sm:p-8  shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

