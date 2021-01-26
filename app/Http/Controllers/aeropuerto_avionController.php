<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\aeropuerto_avion;
use Illuminate\Http\Request;

class aeropuerto_avionController extends Controller
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
            $aeropuerto_avion = aeropuerto_avion::where('codigo_aeropuerto', 'LIKE', "%$keyword%")
                ->orWhere('numero_placa', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $aeropuerto_avion = aeropuerto_avion::latest()->paginate($perPage);
        }

        return view('aeropuerto_avion.index', compact('aeropuerto_avion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('aeropuerto_avion.create');
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
        
        aeropuerto_avion::create($requestData);

        return redirect('aeropuerto_avion')->with('flash_message', 'aeropuerto_avion added!');
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
        $aeropuerto_avion = aeropuerto_avion::findOrFail($id);

        return view('aeropuerto_avion.show', compact('aeropuerto_avion'));
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
        $aeropuerto_avion = aeropuerto_avion::findOrFail($id);

        return view('aeropuerto_avion.edit', compact('aeropuerto_avion'));
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
        
        $aeropuerto_avion = aeropuerto_avion::findOrFail($id);
        $aeropuerto_avion->update($requestData);

        return redirect('aeropuerto_avion')->with('flash_message', 'aeropuerto_avion updated!');
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
        aeropuerto_avion::destroy($id);

        return redirect('aeropuerto_avion')->with('flash_message', 'aeropuerto_avion deleted!');
    }
}
