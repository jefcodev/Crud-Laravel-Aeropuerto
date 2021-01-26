<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\avion;
use Illuminate\Http\Request;

class avionController extends Controller
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
            $avion = avion::where('numero_placa', 'LIKE', "%$keyword%")
                ->orWhere('nombre_avion', 'LIKE', "%$keyword%")
                ->orWhere('capacidad', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $avion = avion::latest()->paginate($perPage);
        }

        return view('avion.index', compact('avion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('avion.create');
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
        
        avion::create($requestData);

        return redirect('avion')->with('flash_message', 'avion added!');
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
        $avion = avion::findOrFail($id);

        return view('avion.show', compact('avion'));
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
        $avion = avion::findOrFail($id);

        return view('avion.edit', compact('avion'));
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
        
        $avion = avion::findOrFail($id);
        $avion->update($requestData);

        return redirect('avion')->with('flash_message', 'avion updated!');
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
        avion::destroy($id);

        return redirect('avion')->with('flash_message', 'avion deleted!');
    }
}
