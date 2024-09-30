@extends('layouts.main')
@section('content')
<div class="cards">
    @foreach ($array as $card)
        <div class="card">
            <img src="{{ $card['path'] }}" alt="карточка" class="img">
            <h2>{{ $card['id'] }}. {{ $card['title'] }}</h2>
            <p>{{ $card['price'] }} р.</p>
        </div>
    @endforeach
</div>
@endsection