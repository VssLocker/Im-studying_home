@extends('layouts.main')

@section('page.title', 'Профиль')

@section('main.content')
    <x-card.body>
        <x-card.header>
            <x-card.title>
                {{ __('Мы внутри') }}
            </x-card.title>
        </x-card.header>
    </x-card.body>
    
@endsection