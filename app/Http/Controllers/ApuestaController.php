<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apuesta;
use App\Models\Juego;

class ApuestaController extends Controller
{
    public function index()
    {
        $apuestas = Apuesta::with('juego')->get();
        return view('apuestas.index', compact('apuestas'));
    }

    public function jugadoresMayor3()
    {
        $apuestas = Apuesta::whereHas('juego', function($query) {
            $query->where('cantidad_jugadores', '>', 3);
        })->get();
        return view('apuestas.Juegos+3Cart', compact('apuestas'));
    }

    public function juegosCartasVsNoCartas()
    {
        $totalCartas = Apuesta::whereHas('juego', function($query) {
            $query->where('juego_de_cartas', true);
        })->sum('monto');

        $totalNoCartas = Apuesta::whereHas('juego', function($query) {
            $query->where('juego_de_cartas', false);
        })->sum('monto');

        $result = $totalCartas > $totalNoCartas ? 'Juegos de cartas' : 'Juegos que no son de cartas';
        return view('apuestas.CartasvsNoCartas', compact('totalCartas', 'totalNoCartas', 'result'));
    }

    public function buscar(Request $request)
    {
        $apuestas = Apuesta::whereHas('juego', function($query) use ($request) {
            $query->where('nombre', 'like', '%' . $request->input('juego') . '%');
        })->get();
        return view('apuestas.buscar', compact('apuestas'));
    }

    public function crear()
    {
        $juegos = Juego::all();
        return view('apuestas.crear', compact('juegos'));
    }

    public function store(Request $request)
    {
        $apuesta = new Apuesta();
        $apuesta->id_juego = $request->input('id_juego');
        $apuesta->fecha = $request->input('fecha');
        $apuesta->monto = $request->input('monto');
        $apuesta->save();

        return redirect('/apuestas');
    }
}
