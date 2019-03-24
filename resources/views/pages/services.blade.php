@extends('layouts.app')
@section('content')
    <h1>Services We provide</h1>
    @if (count($services) > 0)
        @foreach ($services as $service)
        <ul>
            <li>{{$service}}</li>
        </ul>
        @endforeach
    @endif
@endsection
