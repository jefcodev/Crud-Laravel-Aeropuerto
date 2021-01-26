<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\vuelo;
use Illuminate\Http\Request;

class vueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $vuelo = vuelo::where('codigo_vuelo', 'LIKE', "%$keyword%")
                ->orWhere('hdesp_vuelo', 'LIKE', "%$keyword%")
                ->orWhere('aero_desp_vuelo', 'LIKE', "%$keyword%")
                ->orWhere('hater_vuelo', 'LIKE', "%$keyword%")
                ->orWhere('aero_ater_vuelo', 'LIKE', "%$keyword%")
                ->orWhere('fecha_vuelo', 'LIKE', "%$keyword%")
                ->orWhere('pocup_vuelo', 'LIKE', "%$keyword%")
                ->orWhere('pvac_vuelo', 'LIKE', "%$keyword%")
                ->orWhere('escala_vuelo', 'LIKE', "%$keyword%")
                ->orWhere('fk_avion_id_avi', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $vuelo = vuelo::latest()->paginate($perPage);
        }

        return view('vuelo.index', compact('vuelo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vuelo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        vuelo::create($requestData);

        return redirect('vuelo')->with('flash_message', 'vuelo added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $vuelo = vuelo::findOrFail($id);

        return view('vuelo.show', compact('vuelo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $vuelo = vuelo::findOrFail($id);

        return view('vuelo.edit', compact('vuelo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $vuelo = vuelo::findOrFail($id);
        $vuelo->update($requestData);

        return redirect('vuelo')->with('flash_message', 'vuelo updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        vuelo::destroy($id);

        return redirect('vuelo')->with('flash_message', 'vuelo deleted!');
    }
}