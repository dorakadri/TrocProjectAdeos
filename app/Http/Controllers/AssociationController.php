<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Association;
use Illuminate\Support\Facades\Auth;

class AssociationController extends Controller
{
     /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

 
public function __construct()
   {
    
       $this->middleware('checkrole:1')->only('index','edit', 'update','destroy','show');
       $this->middleware('checkrole:2')->only('create','store','edit1','update1');
   }  
  public function index()
  {
    $associations = Association::all();
    return view('admin.associations.index', compact('associations'));
  }

  public function index2()
  {

    $associations = Association::all();
    return view('Userinterface.associations.index2', compact('associations'));
  }

  public function index1()
  {
      // Assuming you're using Laravel's built-in authentication
      $user = Auth::user();
      $association = $user->association; // Note the use of 'association' instead of 'associations'
      

      return view('Userinterface.associations.index1', compact('association'));
  }
  
  

    /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {    $user = Auth::user();

    if ($user->association) {
      return redirect()->back()->with('error', 'You already have an association.');
  }

    $request->validate([
      // Add this line to associate user_id
      'description' => 'required|max:2000',
        'name' => 'required|max:2500|min:3',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

    ]);

    $associationData = [
     // 'user_id' => session('SESSION_CONNECTION') ,

     'user_id' => $user->id,
     'description' => $request->input('description'),
        'name' => $request->input('name'),
    ];

   if($request->Hasfile('logo')){
            $associationData['logo']=$request->file('logo')->store('logo','public');
        }

    Association::create($associationData);

    return redirect()->route('contacts.create')->with('success', 'Association created successfully.');
   
  }


  public function update(Request $request, $id)
  {
      $request->validate([
        'description' => 'required|max:2000',
        'name' => 'required|max:25|min:3',
      ]);
  
      $association = Association::find($id);
      
      $associationData = [
          
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
  
  
  public function update1(Request $request, $id)
{
    $request->validate([
        'description' => 'required|max:2000',
        'name' => 'required|max:25|min:3',
        'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Added logo validation
    ]);

    $association = Association::find($id);

    if (!$association) {
        return redirect()->route('Userinterface.associations.index1')->with('error', 'Association not found');
    }

    $associationData = [
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

    return redirect()->route('Userinterface.associations.index1')->with('success', 'Association updated successfully');
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
// AssociationController.php
public function show($id)
{
    $association = Association::find($id);
    $contacts = $association->contacts; // Retrieve contacts associated with this association
    return view('admin.associations.show', compact('association', 'contacts'));
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
    return view('admin.associations.edit', compact('association'));
  }
  public function edit1($id)
{
    $association = Association::find($id);
    return view('Userinterface.associations.edit1', compact('association'));
}

}
