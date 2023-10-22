<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use App\Models\Exchangedemands;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExchangedemandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Userinterface.Exchangedemands.index');
    }
    public function index2()
    {   
 
    $userId =  auth()->id();

    $myexchange = Exchangedemands::where('user_id', $userId)->get();
  
    return view('Userinterface.Exchangedemands.index2', [
        'exchanges' => $myexchange,

    ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    public function createbyid($annonceid)
    {   
        $annonce= annonce::find($annonceid);
        return view('Userinterface.Exchangedemands.create', [
            'annonce' => $annonce ,
        ]);
    } 

   

    public function  getannonceexchange($annonceid)
    {    
        $annonce= annonce::find($annonceid);
        $owner= User::select('id', 'username', 'profile_photo_path','phone')
        ->find($annonce->user_id);

        return view('Userinterface.Exchangedemands.details',compact('annonce', 'owner'));
    } 
    public function confirmation($action, $exchangeid){
        if ($action == 'decline') {
            Exchangedemands::where('id', $exchangeid)->update(['status' => 'declined']);
        } elseif ($action == 'confirm') {
  
            Exchangedemands::where('id', $exchangeid)->update(['status' => 'accepted']);
        }
        
       $echange= Exchangedemands::find($exchangeid) ;

      annonce::where('id', $echange->annonce_id)->update(['taken' => true]);

        return redirect()->route('Annonce.index')
        ->with('message','Exchange confirmation updated successfully') ;
    

    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $annonceid = $request->input('annonceid');
        $annonce = annonce::find($annonceid); 
     //   dd($annonce->echangetype);
        $formFields = $request->validate([
            'echangetype' => 'required',
            'description' => in_array($annonce->echangetype->value, ['ob_ob', 'ob_serv']) ? 'required' : '',
            'picture' => in_array($annonce->echangetype->value, ['ob_ob', 'ob_serv']) ? 'required' : '',
        ]);
        if($request->Hasfile('picture')){
            $formFields['picture']=$request->file('picture')->store('imageannonces','public');
        }

        $formFields['user_id'] = auth()->id(); 
       $annonce->exchangesdemands()->create($formFields);
        return redirect()->route('Annonce.index')
        ->with('message','Demand commited succefuly ') ; 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exchange = Exchangedemands::find($id);
        $exchanger =  User::select('id', 'username', 'profile_photo_path','phone')
        ->find($exchange->user_id);

        return view('Userinterface.Exchangedemands.show', compact('exchange', 'exchanger'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Exchangedemands = Exchangedemands::find($id) ;
   
        if($Exchangedemands){
            $Exchangedemands->delete() ;
        }
      
        return redirect()->back()
            ->with('message','your demand is declined') ;
    }
}
