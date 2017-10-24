<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matriculas;

class MatriculasController extends Controller
{

      function getMatriculas(Request $request,$rut){
        $db = app('db');
        $results = $db->select("SELECT *
                                FROM bdrutano
                                where knumerut=".$rut);
        
        return response()->json([
            "contador" => count($results),
            "datos" => $results,
        ]);
       
   }
   
}
