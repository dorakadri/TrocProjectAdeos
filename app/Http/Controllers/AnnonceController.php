<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annonces = Annonce::latest()->where('taken', false)->filter(request(['tag' , 'search']))->get(); 
    
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
        return view('Userinterface.Annonce.show', compact('annonce')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {  
        $annonce = annonce::find($id) ;
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
        if($annonce){
            $annonce->delete() ;
        }
      
        return redirect()->back()
            ->with('message','Post deleted successfully') ;
    }

    public function UserList()
    {   
        $annonces = Annonce::latest()->get(); 
    
        return view('components.profile', [
            'annonces' => $annonces
        ]);
    }


}
