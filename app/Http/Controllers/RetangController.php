<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\models;
use App\Models\retangulo;

class RetangController extends Controller
{
  
    public function index()
    {
        return retangulo::all();
    }

    public function store(Request $request)
    {
        $retangulo = new retangulo();
        $retangulo->fill($request->all());
        $retangulo->area = $retangulo->base * $retangulo->altura * 2;
        $retangulo->save();
    }

    public function show($id)
    {
        return retangulo::findOrFail($id);

    }

    public function update(Request $request, $id)
    {
        $retangulo = retangulo::findOrFail($id);
        $retangulo->update($request->all());
    }

    public function destroy($id)
    {
        $retangulo = retangulo::findOrFail($id);
        $retangulo->update();
    }
}
