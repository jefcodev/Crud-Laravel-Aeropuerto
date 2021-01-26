<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\vuelo_aerolinea;
use Illuminate\Http\Request;

class vuelo_aerolineaController extends Controller
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
            $vuelo_aerolinea = vuelo_aerolinea::where('codigo_vuelo', 'LIKE', "%$keyword%")
                ->orWhere('codigo_aerolinea', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $vuelo_aerolinea = vuelo_aerolinea::latest()->paginate($perPage);
        }

        return view('vuelo_aerolinea.index', compact('vuelo_aerolinea'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vuelo_aerolinea.create');
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
        
        vuelo_aerolinea::create($requestData);

        return redirect('vuelo_aerolinea')->with('flash_message', 'vuelo_aerolinea added!');
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
        $vuelo_aerolinea = vuelo_aerolinea::findOrFail($id);

        return view('vuelo_aerolinea.show', compact('vuelo_aerolinea'));
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
        $vuelo_aerolinea = vuelo_aerolinea::findOrFail($id);

        return view('vuelo_aerolinea.edit', compact('vuelo_aerolinea'));
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
        
        $vuelo_aerolinea = vuelo_aerolinea::findOrFail($id);
        $vuelo_aerolinea->update($requestData);

        return redirect('vuelo_aerolinea')->with('flash_message', 'vuelo_aerolinea updated!');
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
        vuelo_aerolinea::destroy($id);

        return redirect('vuelo_aerolinea')->with('flash_message', 'vuelo_aerolinea deleted!');
    }
}
