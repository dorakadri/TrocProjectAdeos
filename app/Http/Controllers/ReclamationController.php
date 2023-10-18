<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

        $this->middleware('checkrole:1')->only('index2', 'edit', 'update');
        $this->middleware('checkrole:0')->only('index', 'create', 'destroy', 'store');
    }

    public function index()
    {
        $reclamations = Reclamation::all();
        return view('Userinterface.reclamations.index', compact('reclamations'));
    }


    public function index2()
    {
        $reclamations = Reclamation::all();
        return view('admin.reclamations.index', compact('reclamations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Userinterface.reclamations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'nullable'

        ]);

        $newReclamation = Reclamation::create($data);

        return redirect(route('reclamation.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reclamation $reclamation)
    {
        return view('admin.reclamations.edit', ['reclamation' => $reclamation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Reclamation $reclamation, Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'nullable'

        ]);

        $reclamation->update($data);

        return redirect(route('admin.reclamations.index2'))->with('success', 'reclamation Updated Succesffully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reclamation $reclamation)
    {
        $reclamation->delete();
        return redirect(route('reclamation.index'))->with('success', 'reclamation deleted Succesffully');
    }

    public function filterReclamations(Request $request)
    {
        $filter = $request->input('filter');

        if ($filter == 'all') {
            $reclamations = Reclamation::all();
        } elseif ($filter == 'treated') {
            $reclamations = Reclamation::where('status', 'treated')->get();
        } elseif ($filter == 'not_treated') {
            $reclamations = Reclamation::where('status', 'not_treated')->get();
        }

        return view('Userinterface.reclamations.index', compact('reclamations'));
    }
}
