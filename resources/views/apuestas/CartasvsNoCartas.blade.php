@extends('layouts.app')

@section('content')
    <h1>Comparación de apuestas entre juegos de cartas y no cartas</h1>
    <p>Total apuestas en juegos de cartas: {{ $totalCartas }}</p>
    <p>Total apuestas en juegos que no son de cartas: {{ $totalNoCartas }}</p>
    <p>Las Mayores Ganancias son de {{ $result }}</p>
@endsection
