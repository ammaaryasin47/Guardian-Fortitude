<section style="background:#000; color:#fff;  font-family: Barlow, sans-serif;">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Quantico:ital,wght@0,400;0,700;1,400;1,700&display=swap');
    </style>
    <header>
        <h2 style="background:#000; color:maroon; font-size:1.5rem;" class="text-lg font-medium text-gray-900">
            {{ __('PROFILE INFORMATION') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("UPDATE YOUR ACCOUNT") }}
        </p><br>
    </header>

    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <!-- Name -->
    <div>
        <x-input-label style="color:#fff;" for="name" :value="__('NAME')" />
        <x-text-input style="background:#000; color:#fff;" id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required autofocus />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Profile Picture -->
    <div class="mt-4">
        <x-input-label style="color:#fff;" for="picture" :value="__('PROFILE PICTURE')" />
        <input id="picture" type="file" name="picture" class="block mt-1 w-full">
        <x-input-error :messages="$errors->get('picture')" class="mt-2" />
    </div>

    <!-- Country Code -->
    <div class="mt-4">
        <x-input-label style="color:#fff;" for="countrycode" :value="__('COUNTRY CODE')" />
        <x-text-input style="background:#000; color:#fff;" id="countrycode" class="block mt-1 w-full" type="text" name="countrycode" value="{{ old('countrycode', auth()->user()->countrycode) }}" required />
        <x-input-error :messages="$errors->get('countrycode')" class="mt-2" />
    </div>

    <!-- Contact -->
    <div class="mt-4">
        <x-input-label style="color:#fff;" for="contact" :value="__('CONTACT')" />
        <x-text-input style="background:#000; color:#fff;" id="contact" class="block mt-1 w-full" type="text" name="contact" value="{{ old('contact', auth()->user()->contact) }}" required />
        <x-input-error :messages="$errors->get('contact')" class="mt-2" />
    </div>

    <!-- Email -->
    <div class="mt-4">
        <x-input-label style="color:#fff;" for="email" :value="__('EMAIL')" />
        <x-text-input style="background:#000; color:#fff;" id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email', auth()->user()->email) }}" required />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Additional Fields -->
     <!-- Additional Fields -->
     @foreach ([
        'sector', 'nature', 'armsliscence', 'address',
        'langprefer', 'commandprefer', 'updateprefer', 'pastthreats'
    ] as $field)
        <div class="mt-4">
            <x-input-label style="color:#fff;" for="{{ $field }}" :value="__(strtoupper($field))" />
            <x-text-input style="background:#000; color:#fff;" id="{{ $field }}" class="block mt-1 w-full" type="text" name="{{ $field }}" value="{{ old($field, auth()->user()->$field) }}" />
            <x-input-error :messages="$errors->get($field)" class="mt-2" />
        </div>
    @endforeach

    <!-- Save Button -->
    <div class="flex items-center justify-end mt-4">
        <x-primary-button>
            {{ __('Save') }}
        </x-primary-button>
    </div>
</form>

</section>
