@extends('layouts.main')

@section('title', 'Eventos')

@section('content')

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="/" method="GET">
            @csrf
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Próximos Eventos</h2>
            <p class="subtitle">Veja os eventos dos próximos dias</p>
        @endif
        <div class="card-deck">
            @foreach($events as $event)
            <div class="card">
                <img class="card-img-top" src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">{{ count($event->users )}} Participantes</p>
                    <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
            @endforeach
        </div>
        @if (count($events) == 0 && $search)
            <p class="subtitle">Não foi possível encontrar nenhum eventos com {{ $search }}! <a href="/">Ver todos</a></p>
        @elseif (count($events) == 0)
            <p class="subtitle">Não há eventos disponíveis</p>
        @endif
    </div>

@endsection