@extends('layouts.app',['title' => 'Halaman Home'])

@section('content')


<x-alert>
    <x-slot name="title">
        alert-success
    </x-slot>
    @slot('body')
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, quae?
    @endslot
    @slot('footer')
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, adipisci.
    @endslot
</x-alert>

<h1>Home Page</h1>

@endsection
