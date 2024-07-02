<?php

namespace App\Http\Controllers\API;

use App\Models\Alunos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return json_encode(Alunos::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Alunos $alunos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alunos $alunos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alunos $alunos)
    {
        //
    }
}
