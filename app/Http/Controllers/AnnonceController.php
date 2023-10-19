<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annonces = Annonce::latest()->where('taken', false)->filter(request(['tag' , 'search']))->with(['user' => function ($query) {
            $query->select('id', 'username','phone', 'profile_photo_path');
        }])->get(); 

        return view('Userinterface.Annonce.index', [
            'annonces' => $annonces ,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Userinterface.Annonce.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   

        $formFields = $request->validate(
            [
                'title' => 'required',
                'tags' => 'required',
                'description' => 'required|max:25',
                'echangetype' => 'required',

            ]

        ); 
        if($request->Hasfile('imageannonce')){
            $formFields['image']=$request->file('imageannonce')->store('imageannonces','public');
        }
   
        $formFields['user_id'] = auth()->id(); 
        annonce::create($formFields);
        
        return redirect()->route('Annonce.index')
            ->with('message','Post created successfully') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
 
    {   
     
        $annonce = annonce::with('exchangesdemands')->find($id);
        if (Gate::denies('manage', $annonce)) {
            abort(403, 'Unauthorized action.'); 
        } 
        return view('Userinterface.Annonce.show', compact('annonce')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {  
        $annonce = annonce::find($id) ;

        if (Gate::denies('manage', $annonce)) {
            abort(403, 'Unauthorized action.'); 
        }
       return view('Userinterface.Annonce.edit', [
        'annonce' => $annonce
    ]) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {  

      
        $annonce = annonce::find($id) ;
    
        $formFields = $request->validate(
            [
                'title' => 'required',
                'tags' => 'required',
                'description' => 'required|max:250',
                'echangetype' => 'required',

            ]

        ); 
        if($request->Hasfile('imageannonce')){
            $formFields['image']=$request->file('imageannonce')->store('imageannonces','public');
        }
        $annonce->update($formFields);
        
        return back()
            ->with('message','Post updated successfully') ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
     
        $annonce = annonce::find($id) ;
        if (Gate::denies('manage', $annonce)) {
            abort(403, 'Unauthorized action.'); 
        } 
        if($annonce){
            $annonce->delete() ;
        }
      
        return redirect()->back()
            ->with('message','Post deleted successfully') ;
    }

    public function UserList()
    {
   
        $user = User::find(auth()->id());
        
     
        $annonces = $user->annonces()->latest()->get();
    
        return view('components.profile', [
            'annonces' => $annonces
        ]);
    }


}
