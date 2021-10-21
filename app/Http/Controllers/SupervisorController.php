<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supervisor;

class SupervisorController extends Controller
{
    /**
     * Metodo para mostrar la lista de supervisores
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $supervisor = Supervisor::get();
            error_log($supervisor);

            return response()->json($supervisor);
        } catch (\Exception $th) {

            return $th->getMessage();
        }
    }

    /**
     * Metodo para crear un supervisor
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            $supervisor = Supervisor::create($request->all());
            return response()->json($supervisor, 201);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
}
