<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Charite;
use App\Models\Donation;
use App\Models\User;
class ChariteController extends Controller
{
    public function organisateur()
{
    return $this->belongsTo(User::class, 'organisateur');
}


    public function index() {
        
        $charites = Charite::with('organisateur')->get();
    return view('charites.index', ['charites' => $charites]);
    }

    public function create() {
        return view('charites.create');
    }
    
    public function add(Request $request){
       
       $data= $request->validate([
            'nom' => 'required',
            'date' => 'required',
            'lieu' => 'required',
            'description' => 'required',
            'beneficiaire' => 'required',
            'budget' => 'required'
        ]);

        Charite::create($data);
        return redirect(route('charites.index'));
        
    }




    public function edit(Charite $charite){
        $donations = Donation::all();
        return view('charites.edit',['charite'=>$charite, 'donations' => $donations]);
 
     }
 
     public function update(Charite $charite,Request $request){
 
        $data=$request->validate([
            'nom' => 'required',
            'date' => 'required',
            'lieu' => 'required',
            'description' => 'required',

            'beneficiaire' => 'required',
            'budget' => 'required'
         ]);
 
         $charite = Charite::find($charite->id);
 
         if ($charite) {
             // Utilisez la méthode update sur l'instance de la donation pour mettre à jour les attributs
             $charite->update($data);
     
             return redirect(route('charites.index'))->with('success', 'Eurvre de charite éditée');
         } else {
             return redirect(route('charites.index'))->with('error', 'Euvre de charite non trouvée');
         }
  
      }
      public function delete(Charite $charite){
        
         $charite->delete();
     
         return redirect(route('charites.index'))->with('success', 'Euvre de charite supprimée');
     }



     public function show(Charite $charite)
     {
         $charite->load('donations'); // Chargez les dons associés à la charité
         return view('charites.show', ['charite' => $charite]);
     }




     public function showDonations(Charite $charite)
     {
    $donations = Donation::where('charite_id', $charite->id)->get();

    return view('charites.showDonations', ['charite' => $charite, 'donations' => $donations]);
     }



    
}
