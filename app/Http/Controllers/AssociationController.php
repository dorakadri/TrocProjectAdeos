<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Association;
class AssociationController extends Controller
{
     /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $associations = Association::all();
    return view('Userinterface.associations.index', compact('associations'));
  }
    /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
        'responsable' => 'required',
        'description' => 'required',
        'name' => 'required',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $associationData = [
        'responsable' => $request->input('responsable'),
        'description' => $request->input('description'),
        'name' => $request->input('name'),
    ];

    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
        $logoName = time().'.'.$logo->getClientOriginalExtension();
        $logo->storeAs('logos', $logoName, 'public');
        // Store the logo in the 'public/logos' directory

        $associationData['logo'] = $logoName;
    }

    Association::create($associationData);

    return redirect()->route('associations.index')->with('success', 'Association created successfully.');
   
  }


  public function update(Request $request, $id)
  {
      $request->validate([
          'responsable' => 'required',
          'description' => 'required',
          'name' => 'required',
      ]);
  
      $association = Association::find($id);
  
      $associationData = [
          'responsable' => $request->input('responsable'),
          'description' => $request->input('description'),
          'name' => $request->input('name'),
      ];
  
      // Check if a new logo file was uploaded
      if ($request->hasFile('logo')) {
          $logo = $request->file('logo');
          $logoName = time().'.'.$logo->getClientOriginalExtension();
          $logo->storeAs('logos', $logoName, 'public'); // Store the logo in the 'public/logos' directory
          $associationData['logo'] = $logoName;
      }
  
      $association->update($associationData);
  
      return redirect()->route('associations.index')
          ->with('success', 'Association updated successfully.');
  }
  
   /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $association = Association::find($id);
    $association->delete();
    return redirect()->route('associations.index')
      ->with('success', 'Association deleted successfully');
  }
   // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('Userinterface.associations.create');
  }
    /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $association = Association::find($id);
    return view('Userinterface.associations.show', compact('association'));
  }
   /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $association = Association::find($id);
    return view('Userinterface.associations.edit', compact('association'));
  }
}
