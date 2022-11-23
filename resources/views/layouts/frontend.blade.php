@extends('layouts.app', ['title' => $title])

@section('content')
<x-frontend.navigation></x-frontend.navigation>

<div class="text-sm xl:text-base">
    {{ $slot }}
    
    <x-frontend.footer></x-frontend.footer>
</div>

@endsection