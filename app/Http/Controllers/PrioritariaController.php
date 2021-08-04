<?php 

namespace App\Http\Controllers;

use App\Models\Prioritaria;
use Illuminate\Http\Request;

class PrioritariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datos_encuesta = $request->except('_token');

        $validatedData = $request->validate([
            'foto' => 'image|mimes:jpg,png,jpeg,gif,svg|max:6144',

            'pregunta_nivel_1' => 'require',
            'pregunta_nivel_2' => 'require',
            'pregunta_nivel_3' => 'require',
            'pregunta_nivel_4' => 'require',
            'pregunta_nivel_5' => 'require',
            'pregunta_nivel_6' => 'require',
            'pregunta_nivel_7' => 'require',
            'pregunta_nivel_8' => 'require',

            'pregunta_si_no_1' => 'require',
            'justificacion_1' => 'max:255',

            'pregunta_si_no_2' => 'require',
            'justificacion_2' => 'max:255',

            'pregunta_si_no_3' => 'require',
            'justificacion_3' => 'max:255',

            'pregunta_si_no_4' => 'require',
            'justificacion_4' => 'max:255',

            'pregunta_si_no_5' => 'require',
            'justificacion_5' => 'max:255',

            'pregunta_si_no_6' => 'require',
            'justificacion_6' => 'max:255',

            
            // 'sugerencias_recomendaciones' =>
                
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prioritaria  $prioritaria
     * @return \Illuminate\Http\Response
     */
    public function show(Prioritaria $prioritaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prioritaria  $prioritaria
     * @return \Illuminate\Http\Response
     */
    public function edit(Prioritaria $prioritaria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prioritaria  $prioritaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prioritaria $prioritaria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prioritaria  $prioritaria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prioritaria $prioritaria)
    {
        //
    }
}
