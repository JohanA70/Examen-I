@extends('layouts.app')

@section('content')
    <h1>Crear Apuesta</h1>
    <form method="POST" action="/apuestas">
        @csrf
        <div class="mb-3">
            <label for="id_juego" class="form-label">Juego</label>
            <select class="form-control" id="id_juego" name="id_juego">
                @foreach ($juegos as $juego)
                    <option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="datetime-local" class="form-control" id="fecha" name="fecha">
        </div>
        <div class="mb-3">
            <label for="monto" class="form-label">Monto</label>
            <input type="number" class="form-control" id="monto" name="monto">
        </div>
        <button type="submit" class="btn btn-primary">Crear Apuesta</button>
    </form>
@endsection

