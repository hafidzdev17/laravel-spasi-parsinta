@extends('layouts.app',['title' => 'Halaman Home'])

@section('content')


@component('components.alert')
@slot('alert_title') alert-success @endslot
Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, quae?
@endcomponent

<h1>Home Page</h1>

@endsection
