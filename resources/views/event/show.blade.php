@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city"><span class="material-icons-round icon">location_on</span> {{ $event->city }}</p>
                <p class="event-city"><span class="material-icons-round icon">calendar_month</span> {{ date('d/m/Y', strtotime($event->date)) }}</p>
                <p class="events-participants"><span class="material-icons-round icon">groups</span> {{ count($event->users )}} Participantes</p>
                <p class="event-owner"><span class="material-icons-round icon">star</span> {{ $eventOwner['name'] }}</p>
                <form action="/events/join/{{ $event->id }}" method="POST">
                    @csrf
                    <a href="/events/join/{{ $event->id }}" 
                        class="btn btn-primary"
                        id="event-submit"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        Confirmar Presença
                    </a>
                </form>
                <h3>O evento conta com:</h3>
                <ul id="items-list">
                    @foreach ($event->items as $item)
                        <li><span class="material-icons-round icon">done_all</span> {{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{ $event->description }}</p>
            </div>
        </div>
    </div>

@endsection