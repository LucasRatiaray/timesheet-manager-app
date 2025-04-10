@extends('pages.admin.index')

@section('title', 'Gestion des salariés')

@section('admin-content')
    <div class="container mx-auto">
        <div class="flex justify-end items-center mb-6">
            <x-buttons.dynamic tag=a href="{{ route('admin.workers.create') }}">
                Ajouter un salarié
            </x-buttons.dynamic>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            @livewire('admin.workers-list')
        </div>
    </div>
@endsection