<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function index() {
       
        $donations = Donation::all();
        return view('donations.index',['donations'=>$donations]);
    }

    public function create() {
        return view('donations.create');
    }
    
    public function add(Request $request){
       
        $data=$request->validate([
            'titre' => 'required',
            'description' => 'required',
            'categorie' => 'required',
            'etat' => 'required',
            'photo' => 'required',
            'quantite' => 'required|numeric',
            'disponibilite' => 'required'
        ]);

        $newDonation= Donation::create($data);
        return redirect(route('donations.index'));
        
    }

    public function edit(Donation $donation){
       return view('donations.edit',['donation'=>$donation]);

    }

    public function update(Donation $donation,Request $request){

       $data=$request->validate([
            'titre' => 'required',
            'description' => 'required',
            'categorie' => 'required',
            'etat' => 'required',
            'photo' => 'required',
            'quantite' => 'required|numeric',
            'disponibilite' => 'required'
        ]);

        $donation = Donation::find($donation->id);

        if ($donation) {
            // Utilisez la méthode update sur l'instance de la donation pour mettre à jour les attributs
            $donation->update($data);
    
            return redirect(route('donations.index'))->with('success', 'Donation éditée');
        } else {
            return redirect(route('donations.index'))->with('error', 'Donation non trouvée');
        }
 
     }
     public function delete(Donation $donation){
       
        $donation->delete();
    
        return redirect(route('donations.index'))->with('success', 'Donation supprimée');
    }







}