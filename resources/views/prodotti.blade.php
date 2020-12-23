@extends('layouts.app')

@section('title', 'Prodotti - La Molisana')

@section('content')
    <h1>Lista prodotti</h1>
    <h2>LE LUNGHE</h2>
    <div class="cardbox">
        @foreach ($pasta as $value)
            @if($value['tipo'] === 'lunga')
                <div class="card">
                    <img src=" {{ $value['src'] }} " alt="pasta">
                </div>
            @endif
        @endforeach
    </div>

    <h2>LE CORTE</h2>
    <div class="cardbox">
        @foreach ($pasta as $value)
            @if($value['tipo'] === 'corta')
                <div class="card">
                    <img src=" {{ $value['src'] }} " alt="pasta">
                </div>
            @endif
        @endforeach
    </div>

    <h2>LE CORTISSIME</h2>
    <div class="cardbox">
        @foreach ($pasta as $value)
            @if($value['tipo'] === 'cortissima')
                <div class="card">
                    <img src=" {{ $value['src'] }} " alt="pasta">
                </div>
            @endif
        @endforeach
    </div>
@endsection
