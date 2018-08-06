@extends('layouts.app')

    @section('content')
        <div class="container">
            @foreach ($events as $event)
                <div class="card text-center">
                <div class="card-header bg-primary text-light">
                {{ $event->event_title }}
                </div>
                <div class="card-body">
                <h5 class="card-title">{{ $event->event_type }}</h5>
                <h6>When: {{ $event->event_date }}</h6>
                <p class="card-text">{{ $event->event_description }}.</p>
                <a href="#" class="btn btn-primary">Get Details</a>
                </div>
                <div class="card-footer text-muted">
                
                </div>
                </div>
                <hr />
            @endforeach
        </div>

        
    @endsection