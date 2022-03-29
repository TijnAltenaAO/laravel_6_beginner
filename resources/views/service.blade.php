@extends('app')

@section('title', 'About us page')

@section('content')
<h1>Service</h1>
<ul>
    @forelse($services as $service) 

        
        <li>{{ $service->name }}</li>
        @empty
        <li>empty</li>
    @endforelse
</ul>
@endsection