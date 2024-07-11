@extends('layouts.app')

@section('content')
<h1>Apuestas de juegos con más de 3 jugadores</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Juego</th>
            <th scope="col">Fecha</th>
            <th scope="col">Monto</th>
            <th scope="col">Jugadores</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($apuestas as $apuesta)
        <tr>
            <td scope="row">{{ $apuesta->juego->nombre }}</td>
            <td>{{ $apuesta->fecha }}</td>
            <td>{{ $apuesta->monto }}</td>
            <td>{{ $apuesta->juego->cantidad_jugadores }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection