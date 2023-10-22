<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Charite;
use App\Models\Donation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ChariteController extends Controller
{


//0 uer
//1 admin
//2
    public function organisateur()
{
    return $this->belongsTo(User::class, 'organisateur');
}

//$user = Auth::user();
//      $association = $user->association;
//'user_id' => $user->id,

    public function index2() {
        $user = Auth::user();
        $charites = Charite::with('organisateur')->get();
    return view('charites.index', ['charites' => $charites]);
    }

    public function index() {
        $user = Auth::user();
        $charites = Charite::where('organisateur', $user->id)->get();
     
    return view('charites.index2', ['charites' => $charites]);
    }
 
    public function indexAdmin() {
        $user = Auth::user();
        $users = User::all();
        $charites = Charite::with('organisateur')->get();
    return view('admin.donations.index2', ['charites' => $charites,'users' => $users]);
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


        $user = Auth::user();



       $chariteData = [
        'nom' => $data['nom'],
        'date' => $data['date'],
        'lieu' => $data['lieu'],
        'description' => $data['description'],
        'beneficiaire' => $data['beneficiaire'],
        'budget' => $data['budget'],
        'organisateur' => $user->id
    ];

    // Créer un nouvel enregistrement Charite avec les données
    Charite::create($chariteData);
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
