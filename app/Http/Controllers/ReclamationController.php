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
    public function index()
    {
          $reclamations = Reclamation::all();
         return view ('Userinterface.reclamations.index', compact('reclamations')) ;
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
       return view('Userinterface.reclamations.edit', ['reclamation' => $reclamation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Reclamation $reclamation, Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'nullable'
     
        ]);

        $reclamation->update($data);

        return redirect(route('reclamation.index'))->with('success', 'reclamation Updated Succesffully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  public function destroy(Reclamation $reclamation){
        $reclamation->delete();
        return redirect(route('reclamation.index'))->with('success', 'reclamation deleted Succesffully');
    }
}
