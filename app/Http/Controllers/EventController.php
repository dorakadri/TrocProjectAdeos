<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Events\ParticipationEvent;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
         $user = auth()->user(); 
         $userCreatedEvents = Event::where('user_id',$user->id)->latest()->get();
         $goingEvents = $user->goingEvents()->latest()->get();
         $events = Event::latest()->get();
         $isGoing = []; 
        $participants = [];
        $community = [];

 
        foreach ($events as $event) {
            $isGoing[] = $user->goingEvents()->where('event_id', $event->id)->exists();
            $participants[] = $event->participants()->count();
            $community[] = Community::where('id', $event->community_id)->first(); 
        }
        return view('Userinterface.Event.index', [
            'events' => $events ,  'isGoing' => $isGoing ,  'participants' => $participants ,
             'userCreatedEvents' => $userCreatedEvents ,'goingEvents' => $goingEvents ,  'community' => $community

        ]);
    }
    public function indexAdmin()
    { 
         $user = auth()->user(); 
 
        $events = Event::all();
         $isGoing = [];
        $participants = [];

 
        foreach ($events as $event) {
            $isGoing[] = $user->goingEvents()->where('event_id', $event->id)->exists();
            $participants[] = $event->participants()->count();
 
        }
        return view('admin.events.index', [
            'events' => $events ,  'isGoing' => $isGoing ,  'participants' => $participants 

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $communityId = request()->input('community'); 
         return view('Userinterface.Event.create', ['communityId' => $communityId]);    }

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
 
                'description' => 'required|',
                'title' => 'required|string|max:255|regex:/^(?![0-9]*$)[A-Za-z0-9_ ]+$/',
                'location' => 'required|string',
                'start_time' => 'required',
                'end_date' => 'required|date|after_or_equal:start_time',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 

            ]);

 
     
       
    
        $event = new Event;
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->location = $request->input('location');
        $event->start_time = $request->input('start_time');
        $event->end_time = $request->input('end_date');
        $event->image = $request->input('image');
        $event->user_id =  $user->id;
        $event->community_id = $request->input('community_id');
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
            $event->image = $imagePath;
        }
        $event->save();
       
        $start_time = Carbon::parse($event->start_time);

        $formatted_date = $start_time->format('M l \a\t h:i A');

        event(new ParticipationEvent($event->title,$formatted_date));


        return redirect()->route('Community.show',$request->input('community_id')) ->with('message','Event added successfully') ;
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
    public function edit($id)
    {
        $event = Event::find($id) ;
        $communityId = request()->input('community'); 
        return view('Userinterface.Event.edit', ['event' => $event,'communityId' => $communityId]);   

 
         
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
        $event = Event::find($id) ;

        $formFields = $request->validate(
            [
 
                'description' => 'required|',
                'title' => 'required|string|max:255|regex:/^(?![0-9]*$)[A-Za-z0-9_ ]+$/',
                'location' => 'required|string',
                'start_time' => 'required',
                'end_time' => 'required|date|after_or_equal:start_time',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 

            ]

        ); 
        if ($request->hasFile('image')) {
            $formFields['image']= $request->file('image')->store('image', 'public');
         }
        
        $event->update($formFields);

        return redirect()->route('Community.show',$request->input('community_id')) ->with('message','Your changes has been saved') ;
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id); 
        $event->delete();
        $communityId = request()->input('community'); 
       
        $community = Community::find($communityId) ;
        $events = Event::where('community_id', $id)->get();
        $userCreatedEvents = Event::where('user_id', 1)->where('community_id', $community->id)->get();

        return redirect()->back()->with('message','Event deleted successfully') ;

      }

  
}
