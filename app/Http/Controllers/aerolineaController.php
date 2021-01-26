<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\aerolinea;
use Illuminate\Http\Request;

class aerolineaController extends Controller
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
            $aerolinea = aerolinea::where('codigo_aerolinea', 'LIKE', "%$keyword%")
                ->orWhere('nombre_aerolinea', 'LIKE', "%$keyword%")
                ->orWhere('pais_aerolinea', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $aerolinea = aerolinea::latest()->paginate($perPage);
        }

        return view('aerolinea.index', compact('aerolinea'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('aerolinea.create');
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
        
        aerolinea::create($requestData);

        return redirect('aerolinea')->with('flash_message', 'aerolinea added!');
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
        $aerolinea = aerolinea::findOrFail($id);

        return view('aerolinea.show', compact('aerolinea'));
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
        $aerolinea = aerolinea::findOrFail($id);

        return view('aerolinea.edit', compact('aerolinea'));
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
        
        $aerolinea = aerolinea::findOrFail($id);
        $aerolinea->update($requestData);

        return redirect('aerolinea')->with('flash_message', 'aerolinea updated!');
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
        aerolinea::destroy($id);

        return redirect('aerolinea')->with('flash_message', 'aerolinea deleted!');
    }
}
