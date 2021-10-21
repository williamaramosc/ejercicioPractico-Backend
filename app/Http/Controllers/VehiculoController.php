<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    /**
     * Metodo para obtener la lista de vehiculos registrados.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            
            $vehiculos = Vehiculo::get();
            error_log($vehiculos);

            return response()->json($vehiculos);
        } catch (\Exception $th) {

            return $th->getMessage();
        }
    }

    /**
     * Metodo para crear un vehiculo.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            $vehiculo = Vehiculo::create($request->all());
            return response()->json($vehiculo,201);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }

    /**
     * Metodo para eliminar un vehiculo
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try {
            $vehiculo = Vehiculo::findOrFail($id)->delete(); 

            return response()->json($vehiculo, 200);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }
}
