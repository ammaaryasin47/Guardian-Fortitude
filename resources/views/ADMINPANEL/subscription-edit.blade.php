

@section('content')
<div class="container">
    <h1>Edit Subscription for {{ $user->name }}</h1>
    
    <form method="POST" action="{{ route('admin.subscriptions.update', $user->user_id) }}">
        @csrf
        @method('PUT')
        
        <div class="card mb-3">
            <div class="card-header">Security Services</div>
            <div class="card-body">
                @foreach([
                    'Personal Protection' => 'personal_protection',
                    'Asset Protection' => 'asset_protection',
                    'Surveillance Monitoring' => 'surveillance_monitoring',
                    'Site Security' => 'site_security',
                    'Training & Consultation' => 'training_consultation',
                    'Emergency Extraction' => 'emergency_extraction',
                    'Special Assault Team' => 'special_assault_team',
                    'Emergency Crisis Management' => 'emergency_crisis_management',
                    'Cyber Security' => 'cyber_security',
                    'Private Detectives' => 'private_detectives'
                ] as $label => $field)
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" 
                           id="{{ $field }}" name="{{ $field }}" value="1"
                           {{ $subscription->$field ? 'checked' : '' }}>
                    <label class="form-check-label" for="{{ $field }}">
                        {{ $label }}
                        @if($subscription->{$field.'_valid_till'})
                            (Valid until: {{ $subscription->{$field.'_valid_till'}->format('Y-m-d') }})
                        @endif
                    </label>
                </div>
                @endforeach
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="{{ route('admin.panel') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection 