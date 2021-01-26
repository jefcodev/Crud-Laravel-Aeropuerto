<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\vuelo_avion;
use Illuminate\Http\Request;

class vuelo_avionController extends Controller
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
            $vuelo_avion = vuelo_avion::where('codigo_vuelo', 'LIKE', "%$keyword%")
                ->orWhere('numero_placa', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $vuelo_avion = vuelo_avion::latest()->paginate($perPage);
        }

        return view('vuelo_avion.index', compact('vuelo_avion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vuelo_avion.create');
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
        
        vuelo_avion::create($requestData);

        return redirect('vuelo_avion')->with('flash_message', 'vuelo_avion added!');
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
        $vuelo_avion = vuelo_avion::findOrFail($id);

        return view('vuelo_avion.show', compact('vuelo_avion'));
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
        $vuelo_avion = vuelo_avion::findOrFail($id);

        return view('vuelo_avion.edit', compact('vuelo_avion'));
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
        
        $vuelo_avion = vuelo_avion::findOrFail($id);
        $vuelo_avion->update($requestData);

        return redirect('vuelo_avion')->with('flash_message', 'vuelo_avion updated!');
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
        vuelo_avion::destroy($id);

        return redirect('vuelo_avion')->with('flash_message', 'vuelo_avion deleted!');
    }
}
