<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\triangulo;
use App\Models\retangulo;
use App\Http\models;

class AreaTotController extends Controller
{

    public function AreaTotal()
    {
        $trianguloArea = triangulo::all();
        $retanguloArea = retangulo::all();

        $trianguloTotal = $trianguloArea->sum('area');
        $retanguloTotal = $retanguloArea->sum('area');
        $areaTotal = $trianguloTotal + $retanguloTotal;

        return response()->json([
            'message' => 'Sucesso!',
            'info' => 'O valor total da soma das áreas de todos os polígonos é de ' . $areaTotal . '.',
            'total' => $areaTotal], 200);
        
    }

    public function show(AreaTotController $areaTotal )
    {
        return response()->json([
            'message' => 'Sucesso!',
            'info' => $areaTotal,
            'status' => 200
        ], 200);
    }


}
