<x-app-layout>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <x-slot name="header">
        <h2 class="text-light font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div style="font-family: Courier Prime; letter-spacing:4px; background-color:#000; display:flex; justify-content:center;">
        <div>
            <p style="overflow:hidden; white-space:nowrap; border-right:2px solid white; 
            animation:typing 3s steps(22) forwards, blink 0.4s step-end infinite alternate;" 
            class="text-center fs-2">WELCOME <span style="color:maroon;">{{ strtoupper(auth()->user()->name) }}</span></p>
        </div>
    </div>
</x-app-layout>
