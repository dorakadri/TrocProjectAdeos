<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use App\Models\Exchangedemands;
use Illuminate\Http\Request;

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
        //
    }
}
