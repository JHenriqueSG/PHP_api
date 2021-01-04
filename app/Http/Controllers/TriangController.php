<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\models;
use App\Models\triangulo;

class TriangController extends Controller
{
  
    public function index()
    {
        return triangulo::all();
    }

    public function store(Request $request)
    {
        $triangulo = new triangulo();
        $triangulo->fill($request->all());
        $triangulo->area = $triangulo->lado * $triangulo->lado * $triangulo->lado;
        $triangulo->save();
    }

    public function show($id)
    {
        return triangulo::findOrFail($id);

    }

    public function update(Request $request, $id)
    {
        $triangulo = triangulo::findOrFail($id);
        $triangulo->update($request->all());
    }

    public function destroy($id)
    {
        $triangulo = triangulo::findOrFail($id);
        $triangulo->update();
    }
}
