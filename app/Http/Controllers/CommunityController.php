<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\Event;
use App\Models\User;

use Illuminate\Support\Facades\Auth;


class CommunityController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
       
        $user = User::with('joinedCommunities')->find(auth()->id());
        $joinedCommunities = $user->joinedCommunities;
        $cretedCommunities = Community::where('user_id',auth()->id())->get();

        $userCount = [];

        foreach ($joinedCommunities as $community) {
            $isJoined[] = $user->joinedCommunities()->where('community_id', $community->id)->exists();
 
        }
        foreach ($cretedCommunities as $community) {
             $userCount[] = $community->members()->count();

        }

         return view('Userinterface.Community.index', [
            'communities' => $joinedCommunities ,            'userCount' => $userCount ,  'cretedCommunities' => $cretedCommunities

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
         
        $user = auth()->user(); 
        $formFields = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 

            ]

        ); 
        $formFields['user_id'] = $user->id;

        if($request->Hasfile('imagecomu')){
            $formFields['image']=$request->file('imagecomu')->store('imagecomu','public');
        }
  
    
        $community = Community::create($formFields);
        $user->joinedCommunities()->attach($community->id);


        return redirect()->route('Community.show', ['Community' => $community->id])->with('message','Community added successfully') ;

        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userId = Auth::id();

        $community = Community::find($id) ;
        $events = Event::where('community_id', $id)->latest()->get();
        $userCreatedEvents = Event::where('user_id',$userId)->where('community_id', $community->id)->latest()->get();


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
        $user = auth()->user();
        $communities = Community::latest()->get(); 
        $isJoined = [];
        $userCount = [];


        foreach ($communities as $community) {
            $isJoined[] = $user->joinedCommunities()->where('community_id', $community->id)->exists();
           
            $userCount[] = $community->members()->count();
        }

        return view('components.Communities', [
            'communities' => $communities,
            'isJoined' => $isJoined,
            'userCount' => $userCount
        ]);
    
         
    }

    public function JoinCommunity($communityId)
    {   
        $user = auth()->user(); 
        $community = Community::find($communityId);
        $user->joinedCommunities()->attach($community->id);
        $communities = Community::latest()->get(); 

        $isJoined = [];
        $userCount = [];

        foreach ($communities as $community) {
            $isJoined[] = $user->joinedCommunities()->where('community_id', $community->id)->exists();
            $userCount[] = $community->members()->count();

        }

        return redirect()->route('communities', [
            'communities' => $communities,            'userCount' => $userCount

          
        ])->with('message','You have successfully joined ' .$community->name .' community') ;
    }

    public function LeaveCommunity($communityId)
    {   
        
        $user = auth()->user(); 
        $community = Community::find($communityId);
        $user->joinedCommunities()->detach($community->id);
        $communities = Community::latest()->get(); 
        $isJoined = [];
        $userCount = [];

        foreach ($communities as $community) {
            $isJoined[] = $user->joinedCommunities()->where('community_id', $community->id)->exists();
            $userCount[] = $community->members()->count();

        }

        return redirect()->route('communities', [
            'communities' => $communities,            'userCount' => $userCount

       
        ])->with('infoMessage','You have left ' .$community->name .' community') ;
    }

    public function Leave($communityId)
    {   
        $user = auth()->user(); 

        $user = User::with('joinedCommunities')->find($user->id);
        $community = Community::find($communityId);
        $user->joinedCommunities()->detach($community->id);
        $joinedCommunities = $user->joinedCommunities;

        return redirect()->route('Community.index', [
            'communities' => $joinedCommunities ,
            ])->with('infoMessage','You have left ' .$community->name .' community') ;
        
    }

    


    
}
