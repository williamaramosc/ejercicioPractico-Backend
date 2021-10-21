<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditoriaController extends Controller
{
    /**
     * Metodo para obtener la lista de la auditoria del conductor
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            try {
                $auditoria = Auditoria::get();
                return response()->json($auditoria);
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }
}
