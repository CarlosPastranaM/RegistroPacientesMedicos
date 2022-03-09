<?php

namespace App\Http\Controllers\dashboard;

use App\Medico;
use App\Paciente;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePacientePaciente;

    

class PacienteController extends Controller
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
        
        $paciente = Paciente::orderBy('id', 'desc')->paginate(5);
        return view('dashboard/paciente/index', ['pacientes' => $paciente]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $medicos = null;
        if(!$id){
            $medicos = Medico::get();
        }
        return view("dashboard/paciente/paciente", ['paciente' => new Paciente(), 'id' => $id, 'medicos' => $medicos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePacientePaciente $request)
    {
        Paciente::create($request->validated());
        
        return back()->with('status', 'El registro del paciente ha sido creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        // 
        return view('dashboard/paciente/show', ['paciente' => $paciente]);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente, $id = null)
    {
        //
        $medicos = null;
        if(!$id){
            $medicos = Medico::get();
        }
        
        return view('dashboard/paciente/edit', ['paciente' => $paciente()], ['medico' => $medicos()]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePacientePaciente $request, Paciente $paciente, Medico $medico){
        //
       
        $paciente->update($request->validated());
        return back()->with('status', 'El registro del paciente ha sido actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
        $paciente->delete();
        return back()->with('status', 'El registro del paciente ha sido eliminado satisfactoriamente');
    }
    
}
