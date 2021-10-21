<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conductor;
use App\Models\Auditoria;

class ConductorController extends Controller
{
    /**
     * Metodo para mostrar de conductores
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            
            $conductor = Conductor::get();
            return response()->json($conductor);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    /**
     * Metodo para crear un conductor
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            $conductor = Conductor::create($request->all());
            Auditoria::create([
                'id_conductor' => $conductor->id,
                'accion' => 'CREAR CONDUCTOR'
            ]);
            return response()->json($conductor, 201);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }



    /**
     * Metodo para editar un conductor
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $conductor = Conductor::findOrFail($id);
            $conductor->update($request->all());

            Auditoria::create([
                'id_conductor' => $conductor->id,
                'accion' => 'ACTUALIZAR CONDUCTOR'
            ]);
            return response()->json($conductor, 200);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }

    /**
     * Metodo para eliminar un conductor
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try {
            $conductor = Conductor::findOrFail($id)->delete(); 
            Auditoria::create([
                'id_conductor' => $conductor->id,
                'accion' => 'ELIMINAR CONDUCTOR'
            ]);
            return response()->json($conductor, 200);
        } catch (\Exception $th) {
            return $th->getMessage();
        }
    }

        /**
     * Metodo para obtener la lista de la auditoria del conductor
     *
     * @return \Illuminate\Http\Response
     */
    public function auditoria()
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
