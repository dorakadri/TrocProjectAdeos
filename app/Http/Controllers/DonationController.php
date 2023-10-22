<?php

namespace App\Http\Controllers;

use App\Models\Charite;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Donation;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
class DonationController extends Controller
{ 
    public function index() {
        $user = Auth::user();
        $donations = Donation::where('user_id', $user->id)->get();
        $charites = Charite::all();
        return view('donations.index2',['donations'=>$donations, 'charites' => $charites]);
    }
    public function index2() {
        $user = Auth::user();
        $donations = Donation::all();
        $charites = Charite::all();
        return view('donations.index',['donations'=>$donations, 'charites' => $charites]);
    }
   
    public function index3(Request $request)
    {
        $sort_by_charite = $request->input('sort_by_charite', 'asc'); // Par défaut, tri croissant
        $users= User::all();
        $donations = Donation::orderBy('charite_id', $sort_by_charite)->get();
        $charites = Charite::all();
        return view('admin.donations.index',['donations'=>$donations, 'charites' => $charites,'users' => $users]);
    }
    public function create() {
        return view('donations.create');
    }
    
   public function add(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'categorie' => 'required',
            'etat' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
            'quantite' => 'required|numeric',
            'disponibilite' => 'required'
        ]);

            if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'donations/' . $fileName; // Path within the "public" disk
            Storage::disk('public')->put($filePath, file_get_contents($file)); // Store the image in the 'public/donations' directory
        
           $data['photo'] = $fileName;
       }

       


        $user = Auth::user();



       $donData = [
        'titre' => $data['titre'],
        'description' => $data['description'],
        'categorie' => $data['categorie'],
        'etat' => $data['etat'],
        'photo' => $data['photo'],
        'quantite' => $data['quantite'],
        'disponibilite' => $data['disponibilite'],
        'user_id'=> $user->id
    ];

        Donation::create($donData);
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
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
            'quantite' => 'required|numeric|min:1',
            'disponibilite' => 'required'
        ]);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'donations/' . $fileName; // Path within the "public" disk
            Storage::disk('public')->put($filePath, file_get_contents($file)); // Store the image in the 'public/donations' directory
        
            $data['photo'] = $fileName;
        }

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


    public function viewCategory($category_id)
    {
        $category = Category::find($category_id);
        return view('category-view', compact('category'));
    }


    public function chooseCharite(Request $request, Donation $donation)
    {
        $data = $request->validate([
            'charite_id' => 'required|exists:charites,id',
        ]);
    
        $donation->charite_id = $data['charite_id'];
        
        $donation->disponibilite = 'reserve';
        $donation->save();
    
        return redirect()->route('donations.index')->with('success', 'Charité associée avec succès à la donation');
    }


    public function deaffectCharite(Donation $donation) {
        $donation->charite_id = null;
        $donation->disponibilite = 'disponible'; // Réglez l'état comme vous le souhaitez
        $donation->save();
        
        return redirect()->route('donations.index')->with('success', 'Donation désaffectée de l oeuvre de charité');
    }

}