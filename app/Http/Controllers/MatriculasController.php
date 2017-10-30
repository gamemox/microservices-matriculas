<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matriculas;

class MatriculasController extends Controller
{

      function getMatriculas(Request $request,$rut){
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
        header('Access-Control-Allow-Credentials: true');  
        
        $db = app('db');
        $results = $db->select("SELECT b.*, u.NOMBRE
                                FROM bdrutano b, universidades u
                                where knumerut=".$rut."
                                AND CODIGO_U=CODIGO_PROJECT    
                                ORDER BY ANHOPROC ASC"
                                );
        
//        return response()->json([
//            "contador" => count($results),
//            "datos" => $results,
//        ]);
        return  json_encode($results);
       
   }
   
}
