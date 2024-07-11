@extends('layouts.app')

@section('content')
<h1>Buscar Apuestas</h1>
<form method="GET" action="/apuestas/buscar">
    <div class="mb-3">
        <label for="juego" class="form-label">Juego</label>
        <input type="text" class="form-control" id="juego" name="juego" placeholder="Nombre del juego">
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha</th>
            <th scope="col">Monto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($apuestas as $apuesta)
        <tr>
            <td scope="row">{{ $apuesta->juego->nombre }}</td>
            <td>{{ $apuesta->fecha }}</td>
            <td>{{ $apuesta->monto }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection