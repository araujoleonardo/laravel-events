@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Eventos</h1>
    </div>
    <div class="col-md-10 offiset-md-1 dashboard-events-container m-auto">
        @if (count($events) > 0)
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td><a href="{{ route('events.show', $event->id) }}">{{ $event->title }}</a></td>
                            <td>0</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <div class="p-1">
                                        <a href="{{ route('events.edit', $event->id) }}">
                                            <button class="btn btn-primary btn-btn"><span class="material-icons-round icon-icon">edit</span></button>
                                        </a>
                                    </div>
                                    <div class="p-1">
                                        <form action="{{ route('events.destroy', $event->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-btn" type="submit"><span class="material-icons-round icon-icon">delete</span></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você ainda não possui eventos, <a href="{{ route('events.create') }}">Criar evento</a></p>
        @endif
    </div>

@endsection