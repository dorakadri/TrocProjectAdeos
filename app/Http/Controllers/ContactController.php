<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Association;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{    
    public function __construct()
   {

       $this->middleware('checkrole:2')->only('create','store','edit','update','destroy');
       $this->middleware('checkrole:1')->only('index','show');

      

    
   }  
    public function create()
    {
        $associations = Association::all();
        return view('admin.contacts.create', compact('associations'));
    }
    


    public function store(Request $request)
    {
        $user = Auth::user();
        $association = $user->association; // Note the use of 'association' instead of 'associations'
        $validatedData = $request->validate([
            'number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);
        $validatedData['association_id'] = $association->id;

        $contact = Contact::create($validatedData);
    
        return redirect()->route('Userinterface.associations.index1', ['contact' => $contact])->with('success', 'Contact created successfully.');
    }
    
    

    public function show($id)
{
    $contact = Contact::findOrFail($id);
    return view('admin.contacts.show', compact('contact'));
}



public function update(Request $request, $id)
{
    $user = Auth::user();
    $association = $user->association; 
    $validatedData = $request->validate([
        'number' => 'required|string|max:255',
        'address' => 'required|string|max:255',
    ]);
    $validatedData['association_id'] = $association->id;

    $contact = Contact::findOrFail($id);

    $contact->update($validatedData);

    return redirect()->route('Userinterface.associations.index1', ['contact' => $contact])->with('success', 'Contact updated successfully.');
}



public function index()
{
    $contacts = Contact::with('association')->get();
    return view('admin.contacts.index', compact('contacts'));
}

public function edit($id)
{
    $contact = Contact::findOrFail($id);
    $associations = Association::all();
    return view('admin.contacts.edit', compact('contact', 'associations'));
}

public function destroy($id)
{
    $contact = Contact::findOrFail($id);
    $contact->delete();

    return redirect()->route('Userinterface.associations.index1')->with('success', 'Contact deleted successfully.');
}


}
