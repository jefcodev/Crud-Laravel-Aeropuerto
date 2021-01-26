<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\aeropuerto;
use Illuminate\Http\Request;

class aeropuertoController extends Controller
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
            $aeropuerto = aeropuerto::where('codigo_aeropuerto', 'LIKE', "%$keyword%")
                ->orWhere('nombre_aeropuerto', 'LIKE', "%$keyword%")
                ->orWhere('ciudad_aeropuerto', 'LIKE', "%$keyword%")
                ->orWhere('pais_aeropuerto', 'LIKE', "%$keyword%")
                ->orWhere('hora_despegue', 'LIKE', "%$keyword%")
                ->orWhere('hora_aterrizaje', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $aeropuerto = aeropuerto::latest()->paginate($perPage);
        }

        return view('aeropuerto.index', compact('aeropuerto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('aeropuerto.create');
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
        
        aeropuerto::create($requestData);

        return redirect('aeropuerto')->with('flash_message', 'aeropuerto added!');
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
        $aeropuerto = aeropuerto::findOrFail($id);

        return view('aeropuerto.show', compact('aeropuerto'));
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
        $aeropuerto = aeropuerto::findOrFail($id);

        return view('aeropuerto.edit', compact('aeropuerto'));
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
        
        $aeropuerto = aeropuerto::findOrFail($id);
        $aeropuerto->update($requestData);

        return redirect('aeropuerto')->with('flash_message', 'aeropuerto updated!');
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
        aeropuerto::destroy($id);

        return redirect('aeropuerto')->with('flash_message', 'aeropuerto deleted!');
    }
}
