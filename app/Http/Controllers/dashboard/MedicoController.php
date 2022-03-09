<?php

namespace App\Http\Controllers\dashboard;

use App\Medico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMedicoMedico;




class MedicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medico = Medico::orderBy('id', 'desc')->paginate(5);
        return view('dashboard/medico/index', ['medicos' => $medico]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard/medico/medico", ['medico' => new Medico()]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicoMedico $request)
    {

        Medico::create($request->validated());

        return back()->with('status', 'El registro del médico ha sido creado satisfactoriamente');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Medico $medico)
    {
        // 
        return view('dashboard/medico/show', ['medico' => $medico]);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Medico $medico)
    {
        //
        return view('dashboard/medico/edit', ['medico' => $medico]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMedicoMedico $request, Medico $medico)
    {
        //
        $medico->update($request->validated());
        return back()->with('status', 'El registro del médico ha sido actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medico $medico)
    {
        //
        $medico->delete();
        return back()->with('status', 'El registro del médico ha sido eliminado satisfactoiamente');
    }
}
