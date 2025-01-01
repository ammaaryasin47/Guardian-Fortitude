<x-app-layout>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    <x-slot name="header">
        <h2 class="text-light font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div style="background-color:#000;">
        <div style="font-family: Courier Prime; letter-spacing:4px; display:flex; justify-content:center;">
            <div>
                <p style="overflow:hidden; white-space:nowrap; border-right:2px solid white; 
                animation:typing 3s steps(22) forwards, blink 0.4s step-end infinite alternate;" 
                class="text-center fs-2">WELCOME <span style="color:maroon;">{{ strtoupper(auth()->user()->name) }}</span></p>
            </div>
        </div>
        
        <div style="margin-top:5rem; justify-content:space-evenly;" class="d-flex px-5">
            <div style="background:#000; width:50%;">
                <h2 class="fs-4 text-light text-center mt-4">RECENT ORDERS</h2>
                <table></table>
            </div>

            <div style="background:#000; width:50%;">
                <h2 class="fs-4 text-light text-center mt-4">SUBSCRIPTIONS</h2>
                <table style="width:90%; text-align:center; color:white; border-collapse:collapse; margin:1rem;" class="me-5">
                    <thead>
                        <tr>
                            <th style="border-bottom:2px solid maroon; padding:0.5rem;"></th>
                            <th style="border-bottom:2px solid maroon; padding:0.5rem;">SERVICES</th>
                            <th style="border-bottom:2px solid maroon; padding:0.5rem;">VALID TILL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($subscription))
                            @foreach (['personal_protection', 'asset_protection', 'surveillance_monitoring', 'site_security', 'training_consultation', 'emergency_extraction', 'special_assault_team', 'emergency_crisis_management', 'cyber_security', 'private_detectives'] as $service)
                                <tr>
                                    <td style="padding:0.5rem; text-align:center;">
                                        <input type="checkbox" class="subscriptionCheckbox" disabled {{ $subscription->$service ? 'checked' : '' }}>
                                    </td>
                                    <td style="padding:0.5rem;">{{ ucfirst(str_replace('_', ' ', $service)) }}</td>
                                    <td style="padding:0.5rem;">
                                        {{ $subscription->{$service . '_valid_till'} ?? 'N/A' }}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
