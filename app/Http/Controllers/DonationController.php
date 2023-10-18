<?php

namespace App\Http\Controllers;

use App\Models\Charite;
use Illuminate\Http\Request;
use App\Models\Donation;
use Illuminate\Support\Facades\Storage;
class DonationController extends Controller
{
    public function index() {
       
        $donations = Donation::all();
        $charites = Charite::all();
        return view('donations.index',['donations'=>$donations, 'charites' => $charites]);
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

        Donation::create($data);
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

}