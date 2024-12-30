@extends('layouts.welcome') <!-- Update this to the correct layout file -->

@section('content')
<div class="container">
    <h1>Commissioner and Team</h1>

    <!--General Information carss-->

    <div class="role">
        <div class="role-cards">
            @if($commissioner)
            <div class="card">
                <img src="{{ asset('storage/' . $commissioner->image) }}" alt="Commissioner">
                <div class="card-content">
                    <h3>{{ $commissioner->name }}</h3>
                    <p class="card-title">{{ $commissioner->title }}</p>
                    <p class="card-email">{{ $commissioner->email }}</p>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Commissioner Section -->
    <div class="role">
        <h2>Commissioner</h2>
        <div class="role-cards">
            @if($commissioner)
            <div class="card">
                <img src="{{ asset('storage/' . $commissioner->image) }}" alt="Commissioner">
                <div class="card-content">
                    <h3>{{ $commissioner->name }}</h3>
                    <p class="card-title">{{ $commissioner->title }}</p>
                    <p class="card-email">{{ $commissioner->email }}</p>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- Additional Commissioners Section -->
    <div class="role">
        <h2>Additional Commissioners</h2>
        <div class="role-cards">
            @foreach($additionalCommissioners as $member)
            <div class="card">
                <img src="{{ asset('storage/' . $member->image) }}" alt="Additional Commissioner">
                <div class="card-content">
                    <h3>{{ $member->name }}</h3>
                    <p class="card-title">{{ $member->title }}</p>
                    <p class="card-email">{{ $member->email }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Deputy Commissioners Section -->
    <div class="role">
        <h2>Deputy Commissioners</h2>
        <div class="role-cards">
            @foreach($deputyCommissioners as $member)
            <div class="card">
                <img src="{{ asset('storage/' . $member->image) }}" alt="Deputy Commissioner">
                <div class="card-content">
                    <h3>{{ $member->name }}</h3>
                    <p class="card-title">{{ $member->title }}</p>
                    <p class="card-email">{{ $member->email }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Assistant Commissioners Section -->
    <div class="role">
        <h2>Assistant Commissioners</h2>
        <div class="role-cards">
            @foreach($assistantCommissioners as $member)
            <div class="card">
                <img src="{{ asset('storage/' . $member->image) }}" alt="Assistant Commissioner">
                <div class="card-content">
                    <h3>{{ $member->name }}</h3>
                    <p class="card-title">{{ $member->title }}</p>
                    <p class="card-email">{{ $member->email }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Contact Us Section -->

    <div class="contact-form-container">
        <div class="container">
            <div class="contact-us-form">
                <h2>{{ $formContent->form_title ?? 'Contact Us' }}</h2>
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ $formContent->label_name ?? 'Name' }} *</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="form-control" 
                            placeholder="{{ $formContent->placeholder_name ?? 'Your name' }}" 
                            required>
                    </div>
        
                    <div class="form-group">
                        <label for="email">{{ $formContent->label_email ?? 'Email' }} *</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-control" 
                            placeholder="{{ $formContent->placeholder_email ?? 'Your email' }}" 
                            required>
                    </div>
        
                    <div class="form-group">
                        <label for="message">{{ $formContent->label_message ?? 'Message' }} *</label>
                        <textarea 
                            id="message" 
                            name="message" 
                            class="form-control" 
                            rows="4" 
                            placeholder="{{ $formContent->placeholder_message ?? 'Write your message' }}" 
                            required></textarea>
                    </div>
        
                    <button type="submit" class="btn btn-primary">
                        {{ $formContent->submit_button_text ?? 'Send Message' }}
                    </button>
                </form>
            </div>
        </div>
        </div>
    </div>
    



    
@endsection
