<?php

namespace App\Http\Controllers;

use App\Models\ClienteModel;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $idCliente = session('id');
        $cliente = ClienteModel::find($idCliente);

        $tipoUsuario = session('tipo');
        $usuario = Usuario::where('tipo_usuario', $tipoUsuario)->first();

        if (!$cliente) {
            abort(404, 'Cliente não encontrado');
        }

        return view('site.dashboard.administrador.cliente', compact('cliente', 'usuario'));
    }
}
