@extends('layouts.app', ['title' => $titles ? $titles[count($titles) - 1] : 'Dashboard'])

@section('content')
<x-backend.sidebar></x-backend.sidebar>

<div class="lg:ml-52">
    <x-backend.navigation :titles="$titles" :createlink="$create_link"></x-backend.navigation>

    <div style="background-color: #E9EDF0" class="lg:min-h-screen pt-2 lg:px-8 lg:py-6 text-sm">
        {{ $slot }}
    </div>
</div>
@endsection