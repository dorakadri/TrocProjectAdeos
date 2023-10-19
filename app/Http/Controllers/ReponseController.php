<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reponse;
use App\Models\Reclamation;


class ReponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $reclamations = Reclamation::with('reponses')->get();
    $reponses = Reponse::with('reclamation')->get();

    return view('admin.reponse.index', compact('reponses', 'reclamations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

public function create($reclamation_id)
{
    // Find the Reclamation by ID
    $reclamation = Reclamation::find($reclamation_id);
 $data['user_id'] = auth()->user()->id;
    if (!$reclamation) {
        return redirect()->route('reclamation.index')->with('error', 'Reclamation not found');
    }

    return view('admin.reponse.create', ['reclamation' => $reclamation]);
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
        'description' => 'required',
        'reclamation_id' => 'required|exists:reclamations,id', // Ensure that reclamation_id exists in the reclamations table
    ]);
// Add the authenticated user's ID to the data array
    $data['user_id'] = auth()->user()->id;
    // Create a new Reponse record
    $reponse = Reponse::create($data);

    return redirect(route('admin.reclamations.index2'));
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
 public function edit(Reponse $reponse)
{
    return view('admin.reponse.edit', ['reponse' => $reponse]);
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function update(Reponse $reponse,Request $request, )
{
    $data = $request->validate([
        'description' => 'required'
      
    ]);

    $reponse->update($data);

    return redirect()->route('reponse.index')->with('success', 'Reponse Updated Successfully');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function destroy($id)
{
    // Find the Reponse model by its ID
    $reponse = Reponse::find($id);

    if (!$reponse) {
        return redirect()->route('reponse.index')->with('error', 'Reponse not found');
    }

    // Delete the Reponse
    $reponse->delete();

    return redirect()->route('reponse.index')->with('success', 'Reponse deleted successfully');
}

}
