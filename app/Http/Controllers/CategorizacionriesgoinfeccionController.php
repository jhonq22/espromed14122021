<?php

namespace App\Http\Controllers;

use App\Categorizacionriesgoinfeccion;
use Illuminate\Http\Request;

class CategorizacionriesgoinfeccionController extends Controller
{
    public function index()
    {
        $vacunados =Categorizacionriesgoinfeccion::get();
        echo json_encode($vacunados);
    }

 
  
    public function store(Request $request)
    {
        $vacunado = new Categorizacionriesgoinfeccion();
        $vacunado->paciente_id = $request->input('paciente_id');
        $vacunado->fecha_evaluacion_riesgo = $request->input('fecha_evaluacion_riesgo');
        $vacunado->riesgo_alto = $request->input('riesgo_alto');
        $vacunado->riesgo_moderado = $request->input('riesgo_moderado');
        $vacunado->riesgo_general = $request->input('riesgo_general');
        $vacunado->notas_impresiones = $request->input('notas_impresiones');
      



        $vacunado->save(); // para guardar en json

        echo json_encode($vacunado); // para pasar en json
    }

 
    public function show($espromed_id)
    {
        //$vacunados =Categorizacionriesgoinfeccion::find($espromed_id);
        $vacunados =Categorizacionriesgoinfeccion::where('paciente_id', '=', $espromed_id)->first();
        echo json_encode($vacunados);
    }
      

   
    public function update(Request $request, $espromed_id)
    {
        $vacunado =Categorizacionriesgoinfeccion::find($espromed_id);
        $vacunado->paciente_id = $request->input('paciente_id');
        $vacunado->fecha_evaluacion_riesgo = $request->input('fecha_evaluacion_riesgo');
        $vacunado->riesgo_alto = $request->input('riesgo_alto');
        $vacunado->riesgo_moderado = $request->input('riesgo_moderado');
        $vacunado->riesgo_general = $request->input('riesgo_general');
        $vacunado->notas_impresiones = $request->input('notas_impresiones');
      
      
        $vacunado->save(); // para guardar en json

        echo json_encode($vacunado); // para pasar en json
    }

 
  

   
    public function destroy($espromed_id)
    {
        $vacunado =Categorizacionriesgoinfeccion::find($espromed_id);
        $vacunado->delete();
    }
}
