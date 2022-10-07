@extends('layouts.main')

@section('title', 'Eventos')

@section('content')

            @if (Route::has('login'))
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            @else
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            @endif
                        @endauth
                    </li>
                </ul>
            @endif

@endsection