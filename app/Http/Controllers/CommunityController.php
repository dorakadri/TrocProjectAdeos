<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\Event;


class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $communities = Community::all();
        return view('Userinterface.Community.index', [
            'communities' => $communities ,
        ]);
        
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Userinterface.Community.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         

        $formFields = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 

            ]

        ); 
     
        if($request->Hasfile('imagecomu')){
            $formFields['image']=$request->file('imagecomu')->store('imagecomu','public');
        }
  
    
        community::create($formFields);

        return redirect()->route('Community.index')->with('message','Community added successfully') ;

        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $community = Community::find($id) ;
        $events = Event::where('community_id', $id)->latest()->get();
        $userCreatedEvents = Event::where('user_id', 1)->where('community_id', $community->id)->latest()->get();


        return view('Userinterface.Community.show', compact('community', 'events', 'userCreatedEvents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $community = Community::find($id) ;
        return view('Userinterface.Community.edit', [
         'community' => $community
     ]) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $community = Community::find($id) ;
        $formFields = $request->validate(
            [
                 'name' => 'required',
                'description' => 'required' ,
               

            ]

        ); 
        if($request->Hasfile('imagecomu')){
            $formFields['image']=$request->file('imagecomu')->store('imagecomu','public');
        }
        
        $community->update($formFields);
        
        return redirect()->route('Community.index') ->with('message','Community updated successfully') ;
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $community = Community::find($id);
        $community->delete();
        return redirect()->route('Community.index') ->with('message','Community deleted successfully') ;
    }


    public function CommunitiesList()
    {   
        $communities = Community::latest()->get(); 
    
        return view('components.Communities', [
            'communities' => $communities
        ]);
    }


    
}