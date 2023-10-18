<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Association;


class ContactController extends Controller
{    
    public function __construct()
   {

       $this->middleware('checkrole:1')->only('show','update','index','edit','destroy');

    
   }  
    public function create()
    {
        $associations = Association::all();
        return view('admin.contacts.create', compact('associations'));
    }
    


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'association_id' => 'required|exists:associations,id',
        ]);
    
        $contact = Contact::create($validatedData);
    
        return redirect()->route('contacts.show', ['contact' => $contact])->with('success', 'Contact created successfully.');
    }
    
    

    public function show($id)
{
    $contact = Contact::findOrFail($id);
    return view('admin.contacts.show', compact('contact'));
}



public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'number' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'association_id' => 'required|exists:associations,id',
    ]);

    $contact = Contact::findOrFail($id);

    $contact->update($validatedData);

    return redirect()->route('contacts.show', ['contact' => $contact])->with('success', 'Contact updated successfully.');
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

    return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
}


}
