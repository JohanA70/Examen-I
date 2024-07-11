@extends('layouts.app')

@section('content')
<h1>Lista de Apuestas</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Juego</th>
            <th scope="col">Fecha</th>
            <th scope="col">Monto</th>
            <th scope="col">Jugadores</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($apuestas as $apuesta)
        <tr>
            <td scope="row">{{ $apuesta->id }}</td>
            <td>{{ $apuesta->juego->nombre }}</td>
            <td>{{ $apuesta->fecha }}</td>
            <td>{{ $apuesta->monto }}</td>
            <td>{{ $apuesta->juego->cantidad_jugadores }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection