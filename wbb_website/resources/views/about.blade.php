@extends('layouts.welcome')

@section('content')
    <div class="container">
        <h1>{!!$aboutPage->title !!}</h1>

<!-- About Page Content -->
<div class="about-content">
    @if($aboutPage->image)  
        <img src="{{ asset('storage/' . $aboutPage->image) }}" alt="About Image" class="img-fluid">
    @endif
    <p>{!! $aboutPage->content !!}</p>
</div>


        <!-- About Functions -->
        <div class="about-functions">
            <h2>About Functions</h2>
            <ul>
                @foreach($aboutFunctions as $function)
                    <li>{{ $function->name }}</li>
                    <p>{!! $function->description !!}</p>
                @endforeach
            </ul>
        </div>

       <!-- Vision and Mission -->

<div class="vision-mission">
    <h2>Our Vision</h2>
    @if ($aboutVisionMission)
        <p>{!! $aboutVisionMission->vision !!}</p>
    @else
        <p>No vision data available.</p>
    @endif

    <h2>Our Mission</h2>
    @if ($aboutVisionMission)
        <p>{!! $aboutVisionMission->mission !!}</p>
    @else
        <p>No mission data available.</p>
    @endif
</div>


        <!-- Board Members -->
        <div class="board-members">
            <h2>Board Members</h2>
            <ul>
                @foreach($boardMembers as $member)
                    <li>{{ $member->name }} - {{ $member->position }}</li>
                    <p>{{ $member->bio }}</p>
                @endforeach
            </ul>
        </div>

        <!-- Stakeholders -->
        <div class="stakeholders">
            <h2>Stakeholders</h2>
            <ul>
                @foreach($stakeholders as $stakeholder)
                    <li>{{ $stakeholder->name }}</li>
                    <p>{{ $stakeholder->role }}</p>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
